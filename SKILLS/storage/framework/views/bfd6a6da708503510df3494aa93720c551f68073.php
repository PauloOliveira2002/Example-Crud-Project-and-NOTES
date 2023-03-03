<br>
<div class="container">
<h1 class="text-center">Lista de Turmas</h1>

<?php if(session('status')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('status')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<?php if(session('error_constraint')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo e(session('error_constraint')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome turma</th>
            <th scope="col">Descrição</th>
            <th scope="col">Horas</th>
            <th scope="col">Data Inicio</th>
            <th scope="col">Data Fim</th>
            <th></th>
            <th>AÇÕES</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $turmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($turma -> id); ?></th>
            <td><?php echo e($turma -> nome); ?></td>
            <td><?php echo e($turma -> descricao); ?></td>
            <td><?php echo e($turma -> horas); ?></td>
            <td><?php echo e($turma -> data_inicio); ?></td>
            <td><?php echo e($turma -> data_fim); ?></td>
            <td>
                <a href="/turmas/<?php echo e($turma -> id); ?>"> <button type="button" class="btn btn-success">Show</button></a>
            </td>
            <td>
                <a href="/turmas/<?php echo e($turma -> id); ?>/edit"> <button type="button" class="btn btn-primary">Edit</button></a>
            </td>
            <td>
                <form action="<?php echo e(url('turmas/' . $turma->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>

</div>
<div class="container">
<p><?php echo e($turmas->links()); ?></p>
</div>
<?php /**PATH C:\Users\Paulo\Desktop\curso\SKILLS\TREINO\SKILLS\resources\views/components/turmas/turmas-list.blade.php ENDPATH**/ ?>