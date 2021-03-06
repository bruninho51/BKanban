<?php /* /var/www/public/Kanban/Services/Application/View/home.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <div id="cadastro">
    <input type="text" id="tarefa" placeholder="Digite a tarefa..">
    <input type="button" onclick="criarTarefa()" value="Criar Tarefa">
    </div>
    <div class="flex">
    <ul class="list">
        <h1>TO DO</h1>
        <div class="list-items" id="to-do">
            <li>Item 1<i class="fa fa-close" onclick="excluirTarefa(this)"></i></li>
            <li>Item 2<i class="fa fa-close" onclick="excluirTarefa(this)"></i></li>
            <li>Item 3<i class="fa fa-close" onclick="excluirTarefa(this)"></i></li>
        </div>
    </ul>

    <ul class="list">
        <h1>IN PROGRESS</h1>
        <div class="list-items" id="in-progress">
            <li>Item 1<i class="fa fa-close" onclick="excluirTarefa(this)"></i></li>
            <li>Item 2<i class="fa fa-close" onclick="excluirTarefa(this)"></i></li>
            <li>Item 3<i class="fa fa-close" onclick="excluirTarefa(this)"></i></li>
        </div>
        
    </ul>

    <ul class="list">
        <h1>DONE</h1>
        <div class="list-items" id="done">
            <li>Item 1<i class="fa fa-close" onclick="excluirTarefa(this)"></i></li>
            <li>Item 2<i class="fa fa-close" onclick="excluirTarefa(this)"></i></li>
            <li>Item 3<i class="fa fa-close" onclick="excluirTarefa(this)"></i></li>
        </div>
    </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>