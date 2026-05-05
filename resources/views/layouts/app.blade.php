<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    
    @yield('styles')
</head>
<body>
    <header>
        <h1>ヘッダー</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2026 My Application</p>
    </footer>
</body>
</html>