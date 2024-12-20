<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Enquiry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #2d89ef, #fff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .enquiry-form {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            animation: fadeInUp 1s;
        }
        .form-title {
            font-size: 24px;
            color: #2d89ef;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-group label {
            color: #333;
            font-weight: 500;
        }
        .btn-submit {
            background-color: #2d89ef;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #0053a1;
        }
    </style>
</head>
<body>

<div class="enquiry-form animate__animated animate__fadeInUp">
    <div class="form-title text-center">
        Submit Your Enquiry
    </div>
    <form action="{{ route('enquiries.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group mb-3">
            <label for="mobile">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn-submit btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
