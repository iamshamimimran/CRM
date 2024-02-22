<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Configuration</title>
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
        <h2>Email Configuration</h2>
        <hr class="my-4">
        <br>
        
        <label for="smtpServer">SMTP Server:</label>
        <input type="text" id="smtpServer" name="smtpServer" placeholder="Enter SMTP Server" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholer="Enter your N"required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <label for="port">Port:</label>
        <input type="text" id="port" name="port" placeholder="Enter SMTP Port" required>

        <button onclick="saveConfiguration()">Save Configuration</button>
    </div>

    <div class="container">
        <h2>Test SMTP Email</h2>
        <hr class="my-4">
        <br>

        <label for="testEmailRecipient">Recipient Email:</label>
        <input type="text" id="testEmailRecipient" placeholder="Enter recipient email" required>

        <button onclick="sendTestEmail()">Send Test Email</button>
    </div>

    <script>
    function saveConfiguration() {
        const smtpServer = document.getElementById('smtpServer').value;
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const port = document.getElementById('port').value;

        if (smtpServer && username && port) {
            if (password.length >= 8) {
                alert("Configuration saved successfully!");
            } else {
                alert("Password must be at least 8 characters.");
            }
        } else {
            alert("Please fill in all the fields.");
        }
    }

    function sendTestEmail() {
        const recipientEmail = document.getElementById('testEmailRecipient').value;

        if (recipientEmail) {
            alert("Test email sent successfully!");
        } else {
            alert("Please enter a recipient email.");
        }
    }
</script>

</body>
</html>
