<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.alunos.aluno-form-edit' , ['aluno' => $aluno , 'turmas' => $turmas]); ?>
    <?php if (isset($__componentOriginala8f469c8fe68f76299567ebf66aa35afe8af93c3)): ?>
<?php $component = $__componentOriginala8f469c8fe68f76299567ebf66aa35afe8af93c3; ?>
<?php unset($__componentOriginala8f469c8fe68f76299567ebf66aa35afe8af93c3); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Paulo\Desktop\curso\SKILLS\TREINO\SKILLS\resources\views/pages/alunos/edit.blade.php ENDPATH**/ ?>