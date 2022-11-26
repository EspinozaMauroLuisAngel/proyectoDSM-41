<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
<div class="col-lg-12 mb-4">
    <div class="card shadow mb-4">
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Usuarios</h3>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-primary" href="user/create"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <?php if($mensaje = Session::get('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e($mensaje); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($user->id); ?></td>
                                                <td><?php echo e($user->name); ?></td>
                                                <td><?php echo e($user->lastname); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->password); ?></td>
                                                <td>    
                                                <div class="row col-12">
                                                    <div class="col-4">
                                                        <a class="btn btn-primary m-3" href="user/create"><i class="fa-solid fa-plus"></i></a>   
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-warning m-3" href="<?php echo e(route('user.edit',$user->id)); ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <form action="user/<?php echo e($user->id); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>

                                                            <?php echo method_field("delete"); ?>
                                                            <button class="btn btn-danger m-3" type="submit"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                        </form>
                                                    </div>  
                                                </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>  
<!-- End of Main Content -->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\Users\angel\Desktop\cuervo\resources\views/users/index.blade.php ENDPATH**/ ?>