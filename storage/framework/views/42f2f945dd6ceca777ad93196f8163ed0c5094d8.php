<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar Una Lista de Nota</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col-lg-12 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            
            <div class="card-body">
            <form action="<?php echo e(route('listnote.update', $listnote->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>

                <label for="validationServer01" class="form-label">Titulo:</label>
                <input class="form-control" id="validationServer01" type="text" name="title" required value="<?php echo e($listnote->title); ?>">
                
                <label for="validationServer02" class="form-label">Describcion de la Lista:</label>
                <input class="form-control" id="validationServer02" type="text" name="listdescription" required value="<?php echo e($listnote->listdescription); ?>">
    
                <label for="validationServer03" class="form-label">Imagen:</label>
                <input class="form-control" id="validationServer03" type="file" name="image" required value="<?php echo e($listnote->image); ?>">

                <label for="validationServer04" class="form-label">Recordarme:</label>
                <input class="form-control" id="validationServer04" type="datetime-local" name="remind" required value="<?php echo e($listnote->remind); ?>">

                <div class="row">
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->
</div>

<!-- End of Main Content -->

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\angel\Desktop\cuervo\resources\views/listnote/edit.blade.php ENDPATH**/ ?>