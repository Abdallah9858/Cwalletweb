<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            background-color: #f9e96b; /* Less bright yellow */
            display: flex; /* Use flexbox for centering */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* Full height */
            margin: 0; /* Remove default margin */
            font-family: Arial, sans-serif; /* Set font */
        }
        .registration-container {
            background-color: white; /* Container background color */
            padding: 20px; /* Padding around the form */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            width: 300px; /* Fixed width for the form */
            text-align: center; /* Center text inside the container */
        }
        h1 {
            margin-bottom: 100px; /* Margin below the heading */
        }
        input[type="text"],
       ,
        select {
            width: 100%; /* Full width */
            padding: 10px; /* Padding for inputs */
            margin: 10px 0; /* Margin for inputs */
            border: 1px solid #ccc; /* Border color */
            border-radius: 5px; /* Rounded corners */
            box-sizing: border-box; /* Ensure padding and border are included in width */
        }
        button {
            width: 100%; /* Full width */
            padding: 10px; /* Padding for button */
            background-color: #007BFF; /* Button color */
            color: white; /* Text color */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor */
            margin-top: 10px; /* Margin above the button */
        }
        button:hover {
            background-color: #0056b3; /* Darker button color on hover */
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h1>Register</h1>
        <form action="#" method="POST"> <!-- Update the action with your registration route -->
            @csrf <!-- Include CSRF token for security -->
            <input type="text" name="name" placeholder=" Name" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
