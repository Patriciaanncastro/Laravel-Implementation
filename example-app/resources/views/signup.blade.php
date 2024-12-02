<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: linear-gradient(135deg, #274b74, #380c5f, #060007); /* Gradient background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .signup-container {
            background-color: rgba(255, 255, 255, 0.8); /* White background with reduced opacity */
            padding: 30px;  /* Reduced padding */
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 350px; /* Reduced width */
            text-align: center;
        }

        .logo {
            width: 200px;  /* Adjust the size of the logo */
            margin-bottom: 10px;  /* Reduced space below the logo */
        }

        h2 {
            margin-top: 0;  /* Remove the top margin */
            margin-bottom: 15px;  /* Reduced margin */
            color: #380c5f;
        }

        label {
            display: block;
            margin-bottom: 8px;  /* Reduced space between label and input */
            font-size: 14px;
            color: #333;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;  /* Reduced padding */
            margin-bottom: 20px; 
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;  /* Smaller font size */
            color: #333;
        }

        button {
            width: 100%;
            padding: 10px;  /* Reduced padding */
            background-color: #380c5f;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 14px;  /* Smaller font size */
            cursor: pointer;
        }

        button:hover {
            background-color: #274b74;
        }

        p {
            margin-top: 15px;  /* Reduced space at the bottom */
        }

        p a {
            text-decoration: none;
            color: #380c5f;
        }

        p a:hover {
            text-decoration: underline;
        }

        .error{
            font-size: 10px;
            color: red;
            text-align: left;
            margin: 0;
            margin-top: -15px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="signup-container">
        <!-- Logo at the top of the form -->
        <img src="{{asset('storage/image/logo1.png')}}" alt="Logo" class="logo">  <!-- Replace 'logo1.png' with your logo file -->

        <form id="signup-form" action="{{route('register')}}" method="POST">
            @csrf

            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name">
            @error('name')
                <p class="error">{{$message}}</p>
            @enderror

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            @error('email')
                <p class="error">{{$message}}</p>
            @enderror

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            @error('password')
                <p class="error">{{$message}}</p>
            @enderror

            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="confirm-password" name="password_confirmation">

            <button type="submit">Sign Up</button>

            <p>Already have an account? <a href="{{ route('login') }}">Log In</a></p>
        </form>
    </div>

    <!-- <script>
        // Function to handle form submission and validation
        document.getElementById("signup-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get form field values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;

            // Validate if passwords match
            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return;
            }

            // Simple email validation (basic example)
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }

            // Simulate form submission success
            alert("Sign-up successful!");

            // You can redirect to a login page or another page upon successful registration
            window.location.href = "login.html";  // Redirect to login page after successful registration
        });
    </script> -->

</body>
</html>