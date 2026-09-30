<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BlogService;

class BlogController extends Controller
{
    /**
     * Display the Blogs Listing / Hub Page.
     */
    public function index()
    {
        $blogs = BlogService::getAllBlogs();
        $pageTitle = 'Industrial Insights & Engineering Blogs - Vishwakarma Engineering';
        $metaDescription = 'Explore in-depth technical blogs and engineering guides on industrial pressure vessels, jacketed chemical reactors, storage tanks, and ETP solutions in Ahmedabad.';
        $metaKeywords = 'pressure vessel manufacturing process, jacketed vessel fabrication, chemical storage equipment exporters, chemical storage tanks, limpet coil vessel, ETP tank, pressure vessel manufacturer in Ahmedabad, Vishwakarma Engineering blogs';
        $canonicalUrl = url('/blogs');

        return view('blogs.index', compact('blogs', 'pageTitle', 'metaDescription', 'metaKeywords', 'canonicalUrl'));
    }

    /**
     * Display a specific Blog Post with full SEO Schema and Related Posts.
     */
    public function show(string $slug)
    {
        $blog = BlogService::getBlogBySlug($slug);

        if (!$blog) {
            abort(404);
        }

        // Canonical URL always points to main primary slug
        $canonicalUrl = url('/blogs/' . $blog['slug']);

        $pageTitle = ($blog['meta_title'] ?? $blog['title']) . ' | Vishwakarma Engineering';
        $metaDescription = $blog['meta_description'] ?? '';
        $metaKeywords = $blog['meta_keywords'] ?? '';
        $ogImage = isset($blog['image']) ? asset($blog['image']) : asset('assets/images/logo.jpeg');

        $relatedBlogs = BlogService::getRecentBlogs(3, $blog['slug'] ?? null);

        // Generate JSON-LD Schema for Google Search Console (BlogPosting / Article)
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => $canonicalUrl
            ],
            'headline' => $blog['title'] ?? '',
            'description' => $blog['meta_description'] ?? '',
            'image' => [
                isset($blog['image']) ? asset($blog['image']) : asset('assets/images/logo.jpeg'),
                asset($blog['banner_image'] ?? $blog['image'] ?? 'assets/images/logo.jpeg')
            ],
            'datePublished' => ($blog['iso_date'] ?? date('Y-m-d')) . 'T09:00:00+05:30',
            'dateModified' => ($blog['iso_date'] ?? date('Y-m-d')) . 'T12:00:00+05:30',
            'author' => [
                '@type' => 'Organization',
                'name' => $blog['author'] ?? 'Vishwakarma Engineering Technical Team',
                'url' => url('/')
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Vishwakarma Engineering',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('assets/images/logo.jpeg')
                ]
            ],
            'articleSection' => $blog['category'] ?? 'Engineering'
        ];

        return view('blogs.show', compact('blog', 'relatedBlogs', 'pageTitle', 'metaDescription', 'metaKeywords', 'canonicalUrl', 'ogImage', 'schema'));
    }
}
