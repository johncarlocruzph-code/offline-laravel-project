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
        main { max-width: 900px; margin: 24px auto; padding: 0 16px; }
        footer { text-align: center; padding: 20px; color: #666; }
        .card { background: #fff; border-radius: 8px; padding: 14px 18px; margin-bottom: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.15); }
        .badge { padding: 3px 10px; border-radius: 12px; color: #fff; font-size: 12px; font-weight: bold; }
        .lost { background: #d64545; }
        .found { background: #2e9e5b; }
        .claimed { background: #6b7280; }
        .claimed { background: #6b7280; }
        input, select { padding: 8px; margin: 4px 0 12px; width: 100%; box-sizing: border-box; }
        button, .btn { padding: 8px 16px; background: #1f2937; color: #fff; border: 0; border-radius: 6px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background: #d64545; }
        input, select { padding: 8px; margin: 4px 0 12px; width: 100%; box-sizing: border-box; }
        button, .btn { padding: 8px 16px; background: #1f2937; color: #fff; border: 0; border-radius: 6px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background: #d64545; }
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-top: 30px; }
        .page-header h1 { margin: 0; }
        .stats { display: flex; gap: 12px; margin: 20px 0; }
        .stat { flex: 1; background: #fff; border-radius: 12px; padding: 16px; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,.15); }
        .stat .number { font-size: 30px; font-weight: bold; margin-bottom: 6px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 14px; }
        .item-card { background: #fff; border-radius: 12px; padding: 16px; box-shadow: 0 1px 3px rgba(0,0,0,.15); }
        .item-card h3 { margin: 10px 0 6px; }
        .item-card p { margin: 4px 0; color: #555; }
        .muted { color: #777; }
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