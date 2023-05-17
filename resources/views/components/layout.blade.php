<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <title>
        @isset($doctitle)
            {{ $doctitle }} | Cool Tech
        @else
            Cool Tech
        @endisset
    </title>
</head>
<body>
    <a class="header" href="/">
        <div class="header">
            <em>Cool Tech</em>
        </div>
    </a>

{{ $slot }}

<div class="footer">
    <div class="different-pages">
        <div class="redir home-page">
            <a href="/">Home Page</a>
        </div>
        <div class="redir search-page">
            <a href="/search">Search Page</a>
        </div>
        <div class="redir legal-page">
            <a href="/legal">Legal Page</a>
        </div>
    </div>
    <div class="copyright">
        <strong>Copyright &#169; {{ date('Y') }} Cool Tech.</strong>
    </div>
    <div class="cookie">
        @include('cookie-consent::index')
    </div>
</div>
</body>
</html>