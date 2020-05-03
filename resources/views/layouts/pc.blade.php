<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="/css/basic.css" type="text/css">
    <link rel="stylesheet" href="/css/pc.css" type="text/css">
    <link rel="stylesheet" href="/css/print.css" type="text/css"
          media="print">
    <script src="/js/main.js"></script>
    @stack("head")
    <title>@yield("title") :: СЭП</title>
</head>
<body>
<div id="container"></div>
<header>
    <div id="header_1"><h1>первая</h1></div>
    <div id="header_1"><h1>Tasks</h1></div>
    <div id="header_2"><h2>сайт</h2></div>
    <div id="header_3"><h2>вторая</h2></div>
    <div id="header_4"><h2>третья</h2></div>
</header>
<nav>
    <?php $p = request()->path(); ?>
    <a href="/" @if ($p == "/") class="active" @endif>Главная</a>
    <a href="/policy" @if ($p == "policy") class="active"
            @endif>Политика</a>
    <a href="/about" @if ($p == "about") class="active" @endif>О сайте</a>
    <a href="/tasks" @if ($p == "tasks") class="active" @endif>Tasks</a>
</nav>
<section>
    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif
    @yield("main")
</section>
<footer>
    <p>© Кошик Ярослав, 2020&nbsp;г.</p>
</footer>
</body>
</html>