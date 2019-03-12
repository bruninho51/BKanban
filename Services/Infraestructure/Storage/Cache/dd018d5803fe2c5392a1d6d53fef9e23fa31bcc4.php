<?php /* /var/www/public/Kanban/Services/Application/View/login.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <div id="img-login">
    </div>
    <aside id="login">
        <input type="text" placeholder="Usuário..">
        <input type="password" placeholder="Senha..">
        <input type="submit" value="Entrar">
    </aside>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>