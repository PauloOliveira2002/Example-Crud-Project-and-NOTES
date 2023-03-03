<br>
<div class="container">
<h1 class="text-center">Lista de Alunos</h1>

<?php if(session('status')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('status')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Aluno</th>
            <th scope="col">Numero</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Turma</th>
            <th></th>
            <th>AÇÕES</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($aluno -> id); ?></th>
            <td><?php echo e($aluno -> nome); ?></td>
            <td><?php echo e($aluno -> contacto); ?></td>
            <td><?php echo e($aluno -> data_nascimento); ?></td>
            <td><?php echo e($aluno -> id_turma); ?></td>
            <td>
                <a href="/alunos/<?php echo e($aluno -> id); ?>"> <button type="button" class="btn btn-success">Show</button></a>
            </td>
            <td>
                <a href="/alunos/<?php echo e($aluno -> id); ?>/edit"> <button type="button" class="btn btn-primary">Edit</button></a>
            </td>
            <td>
                <form action="<?php echo e(url('alunos/' . $aluno->id)); ?>" method="POST">
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
<p><?php echo e($alunos->links()); ?></p>
</div>
<?php /**PATH C:\Users\Paulo\Desktop\curso\SKILLS\TREINO\SKILLS\resources\views/components/alunos/alunos-list.blade.php ENDPATH**/ ?>