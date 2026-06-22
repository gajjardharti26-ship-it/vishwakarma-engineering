<!DOCTYPE html>
<html>
<head>
    <title>New Inquiry</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>New Inquiry Received</h2>
    <p>You have received a new inquiry from the website contact form.</p>
    
    <div style="background-color: #f8f9fa; padding: 20px; border-radius: 5px; margin-bottom: 20px;">
        <p style="margin: 0 0 10px 0;"><strong>Name:</strong> {{ $data['name'] }}</p>
        <p style="margin: 0 0 10px 0;"><strong>Email:</strong> <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
        <p style="margin: 0 0 10px 0;"><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p style="margin: 0 0 10px 0;"><strong>Subject:</strong> {{ $data['subject'] }}</p>
        <p style="margin: 0 0 0 0;"><strong>Product Category:</strong> {{ $data['product'] }}</p>
    </div>

    <h3 style="color: #1b3168; margin-top: 25px; margin-bottom: 15px;">Message Details:</h3>
    <div style="background-color: #ffffff; padding: 15px; border-left: 4px solid #006cb7; border-radius: 4px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        {!! nl2br(e($data['message'])) !!}
    </div>
    
    <p style="margin-top: 20px; font-size: 0.9em; color: #777;">This email was automatically generated from your website's contact form.</p>
</body>
</html>
