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
            
            
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea Eliminar el Usuario Administrador?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="/adminuser">Aceptar</a>   
                    </div>
                </div>
            </div>
        </div>
        
                <div class="card-body">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h3 class="m-1 font-weight-bold text-primary">Tipo de Usuarios</h3>
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="adminusers/create"><i class="fa-solid fa-plus"></i></a>   
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
                                        <?php $__currentLoopData = $adminusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adminuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($adminuser->id); ?></td>
                                                <td><?php echo e($adminuser->name); ?></td>
                                                <td><?php echo e($adminuser->lastname); ?></td>
                                                <td><?php echo e($adminuser->email); ?></td>
                                                <td><?php echo e($adminuser->password); ?></td>
                                                <td><?php echo e($adminuser->user_id); ?></td>
                                                <td>     
                                                <div class="row col-12">
                                                    <div class="col-4">
                                                        <a class="btn btn-primary m-3" href="adminusers/create"><i class="fa-solid fa-plus"></i></a>   
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-warning m-3" href="<?php echo e(route('adminusers.edit',$adminuser->id)); ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                    </div>

                                                    <div class="col-4">
                                                        <form action="adminusers/<?php echo e($adminuser->id); ?>" method="POST">
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

<?php /**PATH C:\Users\angel\Desktop\Agenda\resources\views/adminusers/index.blade.php ENDPATH**/ ?>