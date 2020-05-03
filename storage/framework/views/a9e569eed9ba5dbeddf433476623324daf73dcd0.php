<?php $__env->startSection("title", "О сайте"); ?>
<?php $__env->startSection("main"); ?>
    <?php if(request()->route()->getController()->isMobile): ?>
        <p><a href="/">Главная</a></p>
    <?php endif; ?>
    <h1>О сайте</h1>
    <p>Все права на сайт принадлежат команде его разработчиков.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(request()->route()->getController()->parentView, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>