<?php $__env->startSection("title", "Главная"); ?>
<?php $__env->startSection("main"); ?>
    <h1>СЭП: сайт электронных публикаций</h1>
    <p>На этом сайте вы можете найти статьи по различным темам.</p>
    <p>Авторы статей могут опубликовать свои материалы. По всем вопросам,
        связанным с предоставлением доступа для публикации статей, просьба
        обращаться к <a href="mailto:admin@zapchast.tk">администратору
            сайта</a>.</p>
    <?php if(request()->route()->getController()->isMobile): ?>
        <ul>
            <li><a href="/policy">Политика публикации статей</a></li>
            <li><a href="/about">Сведения о сайте</a></li>
            <li><a href="/task">it's about tasks</a></li>
        </ul>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(request()->route()->getController()->parentView, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>