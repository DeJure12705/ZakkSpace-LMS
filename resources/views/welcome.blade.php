<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Product Management</title>
    <style>
        /* Overall page style */
        body {
            background-color: #f9f9f9; /* Light background for contrast */
            font-family: Arial, sans-serif;
            color: #333; /* Dark text color for readability */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container style */
        .container {
            text-align: center;
            padding: 30px;
            background-color: #444; /* Dark grey background for container */
            border-radius: 12px; /* Rounded corners */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Enhanced shadow effect */
            width: 400px; /* Set a fixed width for better layout */
        }

        /* Title style */
        h1 {
            font-size: 26px; /* Slightly larger font size for the title */
            color: #fff; /* White text for the title */
            margin-bottom: 15px;
        }

        /* Separator line style */
        p {
            border-bottom: 1px solid #555; /* Separator line color */
            margin-bottom: 20px;
            color: white; /* White color for the line */
        }

        /* Link (button) style */
        a {
            display: inline-block;
            color: white;
            background-color: gray; /* Bootstrap primary blue */
            padding: 12px 24px; /* Increased padding for buttons */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s; /* Added transform for hover effect */
            margin: 10px 0; /* Spacing between buttons */
            font-size: 16px; /* Slightly larger font size */
        }

        /* Hover effect for links */
        a:hover {
            background-color: black; /* Darken on hover */
            transform: translateY(-2px); /* Lift effect on hover */
        }

        /* Responsive design */
        @media (max-width: 480px) {
            .container {
                width: 90%; /* Make the container responsive */
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Product Management Dashboard</h1>
        <p>Your Hub for Easy Product Updates</p>
        <a href="{{ route('products.create') }}">Create Product</a> <br> 
        <a href="{{ route('products.edit') }}">Update Product</a>
    </div>

</body>
</html>