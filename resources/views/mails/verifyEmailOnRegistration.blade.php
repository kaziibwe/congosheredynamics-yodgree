<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-lg mx-auto my-12 bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="text-white text-center">
            <img src="https://api.cognospheredynamics.com/public/email_banner.png">
        </div>
        <div class="p-6 text-center">
            <p class="mb-4">Welcome to the Sphere!</p>
            <p class="mb-4">Please Verify your email to complete sphere account creattion</p>
            <div class="inline-block text-2xl tracking-widest bg-gray-100 p-4 rounded-md mb-4">{{ $data['velification_code'] }}</div>
            <p class="mb-4">This OTP is valid for 10 minutes. Do not share it with anyone.</p>
            <p>We are super excited to have you around!</p>
        </div>
        <div class="bg-gray-200 text-gray-600 text-center p-4 text-sm">
            <p class="mb-2">Your details are safe with us.</p>
            <p class="mb-2">© 2024 Cognosphere Dynamics. All rights reserved.</p>
            <p><a href="mailto:info@scpel.org" class="text-green-500">info@cognospheredynamics,com</a></p>
        </div>
    </div>
</body>
</html>
