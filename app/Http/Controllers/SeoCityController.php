<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\SeoCityService;

class SeoCityController extends Controller
{
    /**
     * Unified SEO Route Resolver for any URL matching *-in-*
     */
    public function resolveSeoRoute(string $slug)
    {
        $slug = strtolower(trim($slug));
        $lastInPos = strrpos($slug, '-in-');

        if ($lastInPos === false) {
            abort(404);
        }

        $prefix = substr($slug, 0, $lastInPos);
        $citySlug = substr($slug, $lastInPos + 4);

        if ($prefix === 'industrial-equipment-manufacturer') {
            return $this->showCityHub($citySlug);
        }

        return $this->showProductCity($prefix, $citySlug);
    }

    /**
     * Show Product in City SEO Landing Page (e.g. /pressure-vessel-in-ahmedabad)
     */
    public function showProductCity(string $product, string $city)
    {
        $productSlug = strtolower(trim($product));
        $citySlug = strtolower(trim($city));

        $productData = SeoCityService::getProduct($productSlug);
        $cityData = SeoCityService::getCity($citySlug);

        if (!$productData || !$cityData) {
            abort(404);
        }

        $pageTitle = "{$productData['title']} Manufacturer & Supplier in {$cityData['name']}, Gujarat | Vishwakarma Engineering";
        $metaDescription = "Top {$productData['title']} manufacturer & supplier in {$cityData['name']}, Gujarat. Serving {$cityData['industrial_zones'][0]} & {$cityData['region']}. High quality, ASME & IS compliant {$productData['short_title']} at competitive prices.";
        
        $zonesText = implode(', ', $cityData['industrial_zones']);
        $industriesText = implode(', ', $cityData['key_industries']);
        
        $metaKeywords = "{$productData['short_title']} in {$cityData['name']}, {$productData['title']} manufacturer in {$cityData['name']}, {$productData['short_title']} supplier in {$cityData['district']}, {$productData['category']} in {$cityData['name']}, {$productData['short_title']} {$cityData['industrial_zones'][0]}, industrial {$productData['short_title']} Gujarat, Vishwakarma Engineering {$cityData['name']}";

        $canonicalUrl = url("/{$productSlug}-in-{$citySlug}");
        $nearbyCities = SeoCityService::getNearbyCities($citySlug, 8);
        $relatedProducts = SeoCityService::getRelatedProducts($productSlug, 8);

        // Build Dynamic JSON-LD Structured Data
        $schemas = $this->generateStructuredData($productData, $cityData, $canonicalUrl);

        return view('seo.city-product', compact(
            'productData',
            'cityData',
            'productSlug',
            'citySlug',
            'pageTitle',
            'metaDescription',
            'metaKeywords',
            'canonicalUrl',
            'nearbyCities',
            'relatedProducts',
            'zonesText',
            'industriesText',
            'schemas'
        ));
    }

    /**
     * Show City Hub Page (e.g. /industrial-equipment-manufacturer-in-ahmedabad)
     */
    public function showCityHub(string $city)
    {
        $citySlug = strtolower(trim($city));
        $cityData = SeoCityService::getCity($citySlug);

        if (!$cityData) {
            abort(404);
        }

        $allProducts = SeoCityService::getProducts();
        $pageTitle = "Industrial Equipment, Vessels & Reactors Manufacturer in {$cityData['name']}, Gujarat | Vishwakarma Engineering";
        $metaDescription = "Leading manufacturer of Industrial Vessels, Chemical Reactors, Storage Tanks, and ETP Plants in {$cityData['name']}, Gujarat. Serving " . implode(', ', array_slice($cityData['industrial_zones'], 0, 4)) . ".";
        $metaKeywords = "industrial equipment manufacturer {$cityData['name']}, chemical reactor manufacturer in {$cityData['name']}, storage tank manufacturer {$cityData['name']}, pressure vessel in {$cityData['name']}, ETP plant in {$cityData['name']}, {$cityData['name']} GIDC industrial equipment";
        
        $canonicalUrl = url("/industrial-equipment-manufacturer-in-{$citySlug}");
        $nearbyCities = SeoCityService::getNearbyCities($citySlug, 10);

        return view('seo.city-hub', compact(
            'cityData',
            'citySlug',
            'allProducts',
            'pageTitle',
            'metaDescription',
            'metaKeywords',
            'canonicalUrl',
            'nearbyCities'
        ));
    }

    /**
     * Show complete HTML location directory for crawler indexation
     */
    public function index()
    {
        $cities = SeoCityService::getCities();
        $products = SeoCityService::getProducts();

        $pageTitle = "Industrial Equipment Supply Locations Across Gujarat | Vishwakarma Engineering";
        $metaDescription = "Explore Vishwakarma Engineering industrial vessels, reactors, storage tanks, and ETP equipment supply networks across all major cities and GIDC estates of Gujarat.";
        $canonicalUrl = url('/locations');

        return view('seo.locations-index', compact('cities', 'products', 'pageTitle', 'metaDescription', 'canonicalUrl'));
    }

    /**
     * Dynamic XML Sitemap generator for Google Search Console
     */
    public function sitemap()
    {
        $baseUrl = config('app.url', url('/'));
        $cities = SeoCityService::getCities();
        $products = SeoCityService::getProducts();
        $lastmod = date('Y-m-d');

        // Static core routes
        $staticUrls = [
            ['loc' => $baseUrl . '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => $baseUrl . '/about', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $baseUrl . '/products', 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => $baseUrl . '/projects', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $baseUrl . '/gallery', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => $baseUrl . '/industries', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $baseUrl . '/contact', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => $baseUrl . '/blogs', 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['loc' => $baseUrl . '/locations', 'priority' => '0.8', 'changefreq' => 'weekly'],
        ];

        // Category routes
        $categories = [
            'industrial-vessels',
            'reactors',
            'storage-tanks',
            'columns-towers',
            'agitation-mixing',
            'etp-effluent-treatment',
            'fabrication-structural',
            'assemblies-special',
        ];

        $categoryUrls = [];
        foreach ($categories as $cat) {
            $categoryUrls[] = [
                'loc' => $baseUrl . '/products/category/' . $cat,
                'priority' => '0.8',
                'changefreq' => 'weekly'
            ];
        }

        // Direct product routes
        $productUrls = [];
        foreach ($products as $pSlug => $p) {
            $productUrls[] = [
                'loc' => $baseUrl . '/products/' . $pSlug,
                'priority' => '0.8',
                'changefreq' => 'weekly'
            ];
        }

        // City Hub routes
        $cityHubUrls = [];
        foreach ($cities as $cSlug => $c) {
            $cityHubUrls[] = [
                'loc' => $baseUrl . '/industrial-equipment-manufacturer-in-' . $cSlug,
                'priority' => '0.7',
                'changefreq' => 'weekly'
            ];
        }

        // Product x City programmatic SEO routes
        $productCityUrls = [];
        foreach ($products as $pSlug => $p) {
            foreach ($cities as $cSlug => $c) {
                $productCityUrls[] = [
                    'loc' => $baseUrl . '/' . $pSlug . '-in-' . $cSlug,
                    'priority' => '0.7',
                    'changefreq' => 'monthly'
                ];
            }
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        $allUrls = array_merge($staticUrls, $categoryUrls, $productUrls, $cityHubUrls, $productCityUrls);

        foreach ($allUrls as $entry) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>" . htmlspecialchars($entry['loc']) . "</loc>\n";
            $xml .= "    <lastmod>" . $lastmod . "</lastmod>\n";
            $xml .= "    <changefreq>" . $entry['changefreq'] . "</changefreq>\n";
            $xml .= "    <priority>" . $entry['priority'] . "</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=utf-8'
        ]);
    }

    /**
     * Helper to construct JSON-LD Structured Data
     */
    private function generateStructuredData(array $product, array $city, string $canonicalUrl): array
    {
        $baseUrl = config('app.url', url('/'));

        // 1. Breadcrumb Schema
        $breadcrumbSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => $baseUrl
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Products',
                    'item' => $baseUrl . '/products'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => $product['category'],
                    'item' => $baseUrl . '/products/category/' . $product['category_slug']
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 4,
                    'name' => "{$product['title']} in {$city['name']}",
                    'item' => $canonicalUrl
                ]
            ]
        ];

        // 2. Product & Manufacturer Schema
        $productSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => "{$product['title']} - {$city['name']}, Gujarat",
            'image' => asset($product['image']),
            'description' => $product['description'],
            'brand' => [
                '@type' => 'Brand',
                'name' => 'Vishwakarma Engineering'
            ],
            'manufacturer' => [
                '@type' => 'Organization',
                'name' => 'Vishwakarma Engineering',
                'url' => $baseUrl,
                'logo' => asset('assets/images/logo(1).jpeg'),
                'contactPoint' => [
                    '@type' => 'ContactPoint',
                    'telephone' => '+919924012425',
                    'contactType' => 'sales',
                    'areaServed' => 'IN-GJ'
                ]
            ],
            'offers' => [
                '@type' => 'AggregateOffer',
                'priceCurrency' => 'INR',
                'price' => 'Contact for Best Quote',
                'lowPrice' => '15000',
                'highPrice' => '2500000',
                'offerCount' => '100',
                'availability' => 'https://schema.org/InStock',
                'url' => $canonicalUrl,
                'seller' => [
                    '@type' => 'Organization',
                    'name' => 'Vishwakarma Engineering'
                ]
            ]
        ];

        // 3. LocalBusiness Schema for Gujarat Area
        $localBusinessSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => "Vishwakarma Engineering - {$city['name']} Supply Division",
            'image' => asset('assets/images/logo(1).jpeg'),
            'telephone' => '+919924012425',
            'email' => 'vishwakarma.engineers.co@gmail.com',
            'url' => $canonicalUrl,
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Plot No. 5639/E, Phase-II, GIDC Estate, Vatva',
                'addressLocality' => 'Ahmedabad',
                'addressRegion' => 'Gujarat',
                'postalCode' => '382445',
                'addressCountry' => 'IN'
            ],
            'areaServed' => [
                '@type' => 'AdministrativeArea',
                'name' => (strcasecmp($city['name'], $city['district']) === 0 || str_contains(strtolower($city['district']), strtolower($city['name'])))
                    ? "{$city['name']}, Gujarat"
                    : "{$city['name']}, {$city['district']} District, Gujarat"
            ],
            'priceRange' => '₹₹₹'
        ];

        // 4. FAQ Schema
        $faqItems = [];
        if (!empty($product['faqs'])) {
            foreach ($product['faqs'] as $faq) {
                $qText = str_replace(['Jacketed Vessels', 'Pressure Vessels', 'Mixing Vessels', 'Movable Vessels', 'Reactors', 'Storage Tanks', 'ETP Plants'], $product['short_title'], $faq['q']);
                $faqItems[] = [
                    '@type' => 'Question',
                    'name' => $qText,
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq['a']
                    ]
                ];
            }
        }

        // Add City Specific Delivery FAQ
        $faqItems[] = [
            '@type' => 'Question',
            'name' => "How do you deliver and install {$product['short_title']} in {$city['name']}?",
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => "Vishwakarma Engineering coordinates direct factory transit to {$city['industrial_zones'][0]} and all industrial estates in {$city['name']}. We supply full documentation, lifting guidance, and on-site commissioning support."
            ]
        ];

        $faqSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $faqItems
        ];

        return [
            'breadcrumb' => json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT),
            'product' => json_encode($productSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT),
            'localBusiness' => json_encode($localBusinessSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT),
            'faq' => json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT),
            'rawFaqs' => $faqItems
        ];
    }
}
