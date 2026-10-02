<!DOCTYPE html>
<html>
<head>
    <title>Welcome - Lost and Found</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 100px auto;
            background: white;
            padding: 40px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .icon {
            font-size: 55px;
        }

        h1 {
            color: #1f2937;
        }

        p {
            color: #555;
            font-size: 18px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #1f2937;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        a:hover {
            background: #374151;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="icon">👋</div>

        <h1>Hello {{ $name }}!</h1>

        <p>Welcome to the Offline Lost and Found app.</p>

        <a href="/">Back to Home</a>

    </div>

</body>
</html>