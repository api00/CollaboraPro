<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@900&display=swap"
          rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            color: #d9534f;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Space Grotesk', sans-serif;
            text-align: center;
        }

        .container {
            max-width: 600px;
            padding: 40px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }

        h1 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 6rem;
            margin: 0;
            color: #d9534f;
            border-bottom: 2px solid #d9534f;
            padding-bottom: 20px;
        }

        p {
            font-size: 1.5rem;
            margin: 20px 0;
        }

        .redirect-message {
            font-size: 1rem;
            margin-top: 20px;
            color: #555555;
        }

        .back-button {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #ffffff;
            background-color: #d9534f;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>404</h1>
    <p>Oops! The page you are looking for does not exist.</p>
    <p class="redirect-message">You will be redirected to the previous page in <span id="countdown">8</span> seconds.
    </p>
    <a href="javascript:window.history.back();" class="back-button">Go Back</a>
</div>
<script>
    let countdownElement = document.getElementById('countdown');
    let countdown = 8;

    setInterval(function () {
        if (countdown > 0) {
            countdown--;
            countdownElement.innerText = countdown;
        } else {
            window.history.back();
        }
    }, 1000);
</script>
</body>
</html>
