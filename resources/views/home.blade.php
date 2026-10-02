<!DOCTYPE html>
<html>
<head>
    <title>Offline Lost and Found</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 700px;
            margin: 80px auto;
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

        .tagline {
            color: #555;
            font-size: 18px;
        }

        .info {
            margin-top: 25px;
            color: #777;
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

        <div class="icon">🔎</div>

        <h1>{{ $appName }}</h1>

        <p class="tagline">{!! $tagline !!}</p>

        <p class="info">
            Today is {{ date('F j, Y') }}.
        </p>

        <p class="info">
            The current UNIX timestamp is {{ time() }}.
        </p>

        <a href="/user/Michelle">View Greeting</a>

    </div>

</body>
</html>