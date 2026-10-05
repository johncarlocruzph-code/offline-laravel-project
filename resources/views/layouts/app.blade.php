<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Lost and Found</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f8; color: #222; }
        nav { background: #1f3a5f; padding: 14px 24px; }
        nav a { color: #fff; margin-right: 18px; text-decoration: none; font-weight: bold; }
        main { max-width: 760px; margin: 24px auto; padding: 0 16px; }
        footer { text-align: center; padding: 20px; color: #666; }
        .card { background: #fff; border-radius: 8px; padding: 14px 18px; margin-bottom: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.15); }
        .badge { padding: 3px 10px; border-radius: 12px; color: #fff; font-size: 12px; font-weight: bold; }
        .lost { background: #d64545; }
        .found { background: #2e9e5b; }
        .claimed { background: #6b7280; }
    </style>
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>