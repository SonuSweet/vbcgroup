<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Arial', sans-serif;
            padding: 20px;
            margin: 0;
        }

        .thank-you-wrapper {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 30px;
            animation: fadeIn 1s ease-in-out;
        }

        .thank-you-title {
            font-size: 32px;
            font-weight: bold;
            color: #2d89ef;
            margin-bottom: 20px;
        }

        .thank-you-message {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .btn-back {
            background-color: #2d89ef;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: #2377d3;
        }

        /* Animation Keyframes */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>

<div class="thank-you-wrapper">
    <div class="thank-you-title">Thank You for Your Enquiry!</div>
    <div class="thank-you-message">
        We have received your enquiry. Our team will get back to you shortly.
    </div>
    <a href="/" class="btn-back">Go to Home</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
