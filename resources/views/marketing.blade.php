<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VBC Oracle Sunrise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Arial', sans-serif;
            padding: 20px;
            margin: 0;
        }
        .content-wrapper {
            text-align: center;
            max-width: 700px;
            margin: 0 auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .logo {
            width: 120px;
            margin-bottom: 20px;
        }
        .title {
            font-size: 32px;
            font-weight: bold;
            color: #2d89ef;
            margin-bottom: 10px;
        }
        .subtitle {
            font-size: 20px;
            color: #555;
            margin-bottom: 20px;
        }
        .description {
            text-align: left;
            font-size: 16px;
            line-height: 1.8;
            color: #333;
            margin-top: 20px;
        }
        .form-wrapper {
            margin-top: 30px;
        }
        .form-wrapper .form-control {
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .btn-submit {
            background-color: #2d89ef;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #2377d3;
        }
        .contact-info {
            margin-top: 30px;
        }
        .contact-info p {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }
        .contact-info a {
            color: #2d89ef;
            text-decoration: none;
            font-weight: bold;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="content-wrapper">
    <img src="{{ asset('photo/photos/vbclogo.png') }}" alt="VBC Oracle Sunrise Logo" class="logo">
    <div class="title">VBC ORACLE SUNRISE</div>
    <div class="subtitle">Rayasandra, Hosa Road, Bangalore</div>
    
    <!-- Enquiry Form -->
    <div class="form-wrapper">
        <h5>Enquire Now</h5>
        <form method="POST" action="{{ route('enquiries.store') }}">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            <input type="email" name="email" class="form-control" placeholder="Your Email">
            <input type="tel" name="mobile" class="form-control" placeholder="Your Mobile" required>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>

    <!-- Description Section -->
    <div class="description">
        🏡 <strong>Welcome to VBC Oracle Sunrise – Your Dream Home Awaits!</strong>
        <br><br>
        Discover spacious 2 & 3 BHK apartments designed for comfort, elegance, and modern living. Strategically located near Sarjapur IT Hub, Electronic City & Hosa Road Metro, VBC Oracle Sunrise offers a perfect blend of comfort and convenience.
        <br><br>
        🌟 <strong>Why Choose Us?</strong>
        <br><br>
        ✅ Spacious homes with premium finishes <br>
        ✅ 15+ world-class amenities 🏊‍♂️🏋️🌳 <br>
        ✅ Prime location near schools, hospitals & malls <br>
        ✅ Get regular project updates 📲 <br>
        ✅ Timely project delivery ⏰ <br>
        ✅ 24/7 security, power backup & ample parking
        <br><br>
        💫 Your dream home is just a step away. Contact us today!
    </div>

    <!-- Contact Info -->
    <div class="contact-info">
        <p>📞 Call: <a href="tel:9900928388">9900928388</a></p>
        <p>📧 Email: <a href="mailto:marketing@vbcgroup.in">marketing@vbcgroup.in</a></p>
        <p>🏢 Visit Us: Sahu Rd, Rayasandra, Choodasandra, Hosa Road, Bengaluru 560099</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
