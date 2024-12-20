<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VBC Oracle Sunrise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('css/marketing.css')}}">
</head>
<body>

<div class="content-wrapper">
    <img src="{{ asset('photo/photos/vbclogo.png') }}" alt="VBC Oracle Sunrise Logo" class="logo">
    <div class="title">VBC ORACLE SUNRISE</div>
    <div class="subtitle">Rayasandra, Hosa Road, Bangalore</div>
    <!-- Description Section -->
    <div class="description m-more-less-content" id="description">
        🏡 <strong>Welcome to VBC Oracle Sunrise – Your Dream Home Awaits!</strong>
        <br><br>
        Discover spacious 2 & 3 BHK apartments designed for comfort, elegance, and modern living. Strategically located near Sarjapur IT Hub, Electronic City & Hosa Road Metro, VBC Oracle Sunrise offers a perfect blend of comfort and convenience.
        <span class="m-show-more"></span>
        <span class="m-more-text">
            <br><br>
            🌟 <strong>Why Choose Us?</strong>
            <br><br>
            ✅ Spacious homes with premium finishes <br>
            ✅ 15+ world-class amenities 🏊‍♂️🏋️🌳 <br>
            ✅ Prime location near schools, hospitals & malls <br>
            ✅ Get regular project updates 📲 <br>
            ✅ Timely project delivery ⏰ <br>
            ✅ 24/7 security, power backup & ample parking
        </span>
        <span class="m-show-less"></span>
    </div>
    <!-- Enquiry Form -->
    <div class="form-wrapper">
        <h5>Enquire Now</h5>
        <form method="POST" action="{{ route('enquiries.store') }}">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            <input type="tel" name="mobile" class="form-control" placeholder="Your Mobile" required>
            <input type="email" name="email" class="form-control" placeholder="Your Email (Optional)">
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>

   

    <!-- Contact Info -->
    <div class="contact-info">
        <p>📞 Call: <a href="tel:9900928388">9900928388</a></p>
        <p>📧 Email: <a href="mailto:marketing@vbcgroup.in">marketing@vbcgroup.in</a></p>
        <p>🏢 Visit Us: Sahu Rd, Rayasandra, Choodasandra, Hosa Road, Bengaluru 560099</p>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const showMoreButtons = document.querySelectorAll('.m-show-more');
        const showLessButtons = document.querySelectorAll('.m-show-less');
        const contentElements = document.querySelectorAll('.m-more-less-content');
    
        // Handle show more button click
        showMoreButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const content = this.closest('.m-more-less-content');
                content.classList.add('m-display-more');
            });
        });
    
        // Handle show less button click
        showLessButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const content = this.closest('.m-more-less-content');
                content.classList.remove('m-display-more');
            });
        });
    
        // Initialize each content element
        contentElements.forEach(function(content) {
            let html = content.innerHTML;
            const contentArray = html.split("<span class='m-show-more'></span>");
    
            // If there is a "more" section, wrap the extra content
            if (contentArray.length === 2) {
                html = contentArray[0] + 
                    '<span class="m-show-more"></span>' + 
                    '<span class="m-more-text">' + contentArray[1] + '</span>' + 
                    '<span class="m-show-less"></span>';
                content.innerHTML = html;
            }
        });
    });
    
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
