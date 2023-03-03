<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.alunos.alunos-list', ['alunos' => $alunos]); ?>

    <?php if (isset($__componentOriginald1d6f0081ea65071ba4398ec901c317a3c2ab9ba)): ?>
<?php $component = $__componentOriginald1d6f0081ea65071ba4398ec901c317a3c2ab9ba; ?>
<?php unset($__componentOriginald1d6f0081ea65071ba4398ec901c317a3c2ab9ba); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Paulo\Desktop\curso\SKILLS\TREINO\SKILLS\resources\views/pages/alunos/index.blade.php ENDPATH**/ ?>