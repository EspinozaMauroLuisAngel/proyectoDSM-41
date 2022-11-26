    @include('layouts.header')
    @include('layouts.menu')
    @section('header')
    @endsection

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
                                    @if ($mensaje = Session::get('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ $mensaje }}
                                        </div>
                                    @endif
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
                                        @foreach($adminusers as $adminuser)
                                            <tr>
                                                <td>{{$adminuser->id}}</td>
                                                <td>{{$adminuser->name}}</td>
                                                <td>{{$adminuser->lastname}}</td>
                                                <td>{{$adminuser->email}}</td>
                                                <td>{{$adminuser->password}}</td>
                                                <td>{{$adminuser->user_id}}</td>
                                                <td>     
                                                <div class="row col-12">
                                                    <div class="col-4">
                                                        <a class="btn btn-primary m-3" href="adminusers/create"><i class="fa-solid fa-plus"></i></a>   
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-warning m-3" href="{{route('adminusers.edit',$adminuser->id)}}"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                    </div>

                                                    <div class="col-4">
                                                        <form action="adminusers/{{$adminuser->id}}" method="POST">
                                                            {!! csrf_field() !!}
                                                            @method("delete")
                                                            <button class="btn btn-danger m-3" type="submit"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                        </form>
                                                    </div> 

                                                </div>
                                                </td>
                                            </tr>
                                        @endforeach
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
    @include('layouts.footer')

