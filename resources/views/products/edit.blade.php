<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        /* Overall page style */
        body {
            background-color: #ffffff; /* Light greyish-white background */
            font-family: Arial, sans-serif;
            color: black; /* Text color */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container style */
        .container {
            text-align: left; /* Align text to the left */
            padding: 20px;
            background-color: #333; /* Dark grey background for container */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px; /* Set a width for the container */
        }

        /* Title style */
        h1 {
            font-size: 24px;
            color: white; /* White text for the title */
            margin-bottom: 20px;
            text-align: center; /* Center the title */
        }

        /* Label style */
        label {
            font-size: 14px; /* Smaller font size for labels */
            color: white; /* White text for labels */
            margin-top: 10px;
            display: block; /* Ensure labels take full width */
        }

        /* Input and textarea styles */
        input[type="text"],
        input[type="number"],
        textarea {
            width: calc(100% - 20px); /* Full width minus padding */
            padding: 10px; /* Padding inside inputs */
            margin: 10px 0; /* Margin between elements */
            border: 1px solid #555; /* Border color */
            border-radius: 4px; /* Rounded corners */
            background-color: #f0f0f0; /* Light grey background for inputs */
            color: black; /* Text color for inputs */
            font-size: 14px; /* Font size for input fields */
        }

        /* Focus effect on inputs */
        input:focus,
        textarea:focus {
            border-color: black; /* Change border color on focus */
            outline: none; /* Remove default outline */
        }

        /* Button style */
        button {
            background-color: #555; /* Dark grey button */
            color: white; /* Text color */
            padding: 10px 20px;
            border: none; /* No border */
            border-radius: 4px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor */
            transition: background-color 0.3s; /* Transition for hover effect */
            margin-top: 10px; /* Margin above button */
        }

        /* Hover effect for button */
        button:hover {
            background-color: black; /* Darken button on hover */
        }

        /* Link style */
        a {
            color: white; /* White text for link */
            text-decoration: none; /* No underline */
            display: block; /* Block display for spacing */
            margin-top: 20px; /* Margin above link */
            text-align: center; /* Center the link */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit Product</h1>
        <form action="#" method="POST">
            @csrf
            @method('PUT') {{-- This will indicate an update request --}}

            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" value=" Product_Name" required>

            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="4" required>Description</textarea>

            <label for="price">Price:</label>
            <input type="number" name="price" id="price" min="0" step="0.01" value="00.0" required>

            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" min="0" value="1" required>

            <button type="submit">Update Product</button>
            
            <a href="{{ url('/') }}">Back to Welcome Page</a>
        </form>
    </div>

</body>
</html>
