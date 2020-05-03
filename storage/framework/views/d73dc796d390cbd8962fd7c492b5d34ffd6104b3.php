<?php $__env->startSection("title", "Политика публикации"); ?>
<?php $__env->startSection("main"); ?>
    <?php if(request()->route()->getController()->isMobile): ?>
        <p><a href="/">Главная</a></p>
    <?php endif; ?>
    <h1>Политика публикации</h1>
    <p>Все статьи, опубликованные на этом сайте, являются собственностью
        их авторов.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(request()->route()->getController()->parentView, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>