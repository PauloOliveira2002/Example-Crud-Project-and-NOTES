<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.turmas.turmas-list', ['turmas' => $turmas]); ?>

    <?php if (isset($__componentOriginald06189c36e587c7e2939333b6891f5d411b8aaab)): ?>
<?php $component = $__componentOriginald06189c36e587c7e2939333b6891f5d411b8aaab; ?>
<?php unset($__componentOriginald06189c36e587c7e2939333b6891f5d411b8aaab); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Paulo\Desktop\curso\SKILLS\TREINO\SKILLS\resources\views/pages/turmas/index.blade.php ENDPATH**/ ?>