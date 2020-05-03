<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="/css/basic.css" type="text/css">
    <link rel="stylesheet" href="/css/pc.css" type="text/css">
    <link rel="stylesheet" href="/css/print.css" type="text/css"
          media="print">
    <script src="/js/main.js"></script>
    <?php echo $__env->yieldPushContent("head"); ?>
    <title><?php echo $__env->yieldContent("title"); ?> :: СЭП</title>
</head>
<body>
<div id="container"></div>
<header>
    <div id="header_1"><h1>СЭП</h1></div>
    <div id="header_1"><h1>Tasks</h1></div>
    <div id="header_2"><h2>сайт</h2></div>
    <div id="header_3"><h2>электронных</h2></div>
    <div id="header_4"><h2>публикаций</h2></div>
</header>
<nav>
    <?php $p = request()->path(); ?>
    <a href="/" <?php if($p == "/"): ?> class="active" <?php endif; ?>>Главная</a>
    <a href="/policy" <?php if($p == "policy"): ?> class="active"
            <?php endif; ?>>Политика</a>
    <a href="/about" <?php if($p == "about"): ?> class="active" <?php endif; ?>>О сайте</a>
    <a href="/tasks" <?php if($p == "tasks"): ?> class="active" <?php endif; ?>>Tasks</a>
</nav>
<section>
    <?php if(session('status')): ?>
        <p><?php echo e(session('status')); ?></p>
    <?php endif; ?>
    <?php echo $__env->yieldContent("main"); ?>
</section>
<footer>
    <p>© Кошик Ярослав, 2020&nbsp;г.</p>
</footer>
</body>
</html>