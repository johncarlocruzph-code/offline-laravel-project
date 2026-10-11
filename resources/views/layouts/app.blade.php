<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Lost and Found</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: "Segoe UI", Arial, sans-serif; margin: 0; background: #f4f6f8; color: #1f2937; line-height: 1.5; }

        nav { background: #1f3a5f; padding: 14px 28px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 6px rgba(0,0,0,.2); }
        nav .brand { color: #fff; font-size: 20px; font-weight: bold; }
        nav a { color: #dbe7f5; margin-left: 20px; text-decoration: none; font-weight: 600; }
        nav a:hover { color: #fff; }

        main { max-width: 900px; margin: 24px auto; padding: 0 16px; min-height: 70vh; }
        footer { text-align: center; padding: 20px; color: #6b7280; border-top: 1px solid #e5e7eb; }
        h1, h2, h3 { color: #1f2937; }
        a { color: #1f3a5f; }
        .muted { color: #6b7280; }

        .card { background: #fff; border-radius: 12px; padding: 16px 20px; margin-bottom: 14px; box-shadow: 0 1px 3px rgba(0,0,0,.12); }
        .badge { display: inline-block; padding: 3px 10px; border-radius: 12px; color: #fff; font-size: 12px; font-weight: bold; letter-spacing: .5px; }
        .lost { background: #d64545; }
        .found { background: #2e9e5b; }
        .claimed { background: #6b7280; }

        label { display: block; font-weight: 600; margin-top: 6px; }
        input, select { padding: 10px; margin: 4px 0 14px; width: 100%; border: 1px solid #d1d5db; border-radius: 8px; font-size: 15px; }
        input:focus, select:focus { outline: 2px solid #1f3a5f; }
        button, .btn { padding: 10px 18px; background: #1f3a5f; color: #fff; border: 0; border-radius: 8px; cursor: pointer; text-decoration: none; display: inline-block; font-weight: 600; font-size: 15px; transition: background .2s; }
        button:hover, .btn:hover { background: #2b4f7e; }
        .btn-danger { background: #d64545; }
        .btn-danger:hover { background: #b93838; }

        .page-header { display: flex; justify-content: space-between; align-items: center; margin-top: 30px; }
        .page-header h1 { margin: 0; }
        .stats { display: flex; gap: 12px; margin: 20px 0; }
        .stat { flex: 1; background: #fff; border-radius: 12px; padding: 16px; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,.12); }
        .stat .number { font-size: 30px; font-weight: bold; margin-bottom: 6px; }
        a.stat { text-decoration: none; color: inherit; transition: transform .2s, box-shadow .2s; }
        a.stat:hover { transform: translateY(-3px); box-shadow: 0 6px 14px rgba(0,0,0,.18); }
        .stat.active { outline: 3px solid #1f3a5f; }
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 14px; }
        .item-card { background: #fff; border-radius: 12px; padding: 16px; box-shadow: 0 1px 3px rgba(0,0,0,.12); transition: transform .2s, box-shadow .2s; }
        .item-card:hover { transform: translateY(-4px); box-shadow: 0 6px 14px rgba(0,0,0,.18); }
        .item-card h3 { margin: 10px 0 6px; }
        .item-card p { margin: 4px 0; color: #555; }

        @media (max-width: 600px) {
            nav { flex-direction: column; gap: 8px; }
            nav a { margin: 0 10px; }
            .stats { flex-direction: column; }
            .page-header { flex-direction: column; align-items: flex-start; gap: 10px; }
        }
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