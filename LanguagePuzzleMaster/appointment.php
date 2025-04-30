<!-- 
Original PHP code has been converted to use the Express server in a Node.js environment.
In a real environment with actual PHP support, you would use the PHP code.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Request - Static Power Systems</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f5f7fa;
            padding-top: 100px;
        }
        .message-container {
            max-width: 600px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .error {
            color: #d9534f;
            margin-bottom: 1rem;
            padding: 0.5rem;
            background-color: rgba(217, 83, 79, 0.1);
            border-radius: 5px;
        }
        .back-btn {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="container">
            <div class="logo-container">
                <div class="logo">
                    <img src="images/logo.svg" alt="Static Power Systems Logo">
                </div>
                <div class="company-info">
                    <h1>STATIC POWER SYSTEMS</h1>
                    <p>XP Series Online UPS (3kVA to 120kVA)</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="message-container">
                <h2>Appointment Request</h2>
                
                <div class="message">
                    <p>If you're seeing this page directly, please use the contact form on the homepage to submit your appointment request.</p>
                </div>
                
                <a href="index.html" class="btn btn-primary back-btn">Return to Homepage</a>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; 2023 Static Power Systems. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
