<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>User Form</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background: #E4E9F7;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 15px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        
    </style>
</head>
<body>
    @include('welcome')
    <div class="container">
        <h2>User Add</h2>
        <hr class="my-4">
        <br>
        <label for="fullName">Full Name</label>
        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
    
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">

        <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">

        <button type="button" class="btn btn-primary btn-block" onclick="submitForm()">Submit</button>
    </div>

    <script>
        function submitForm() {
            var fullName = document.getElementById('fullName').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;

            if (fullName && email && phone) {
                // Perform form submission or further processing
                alert("Form submitted successfully!");
            } else {
                alert("Please fill in all the fields.");
            }
        }
    </script>
</body>
</html>
