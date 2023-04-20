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
                                            <th>Botones</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                            <th>Botones</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->lastname}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->password}}</td>
                                                <td>    
                                                <div class="row col-12">
                                                    <div class="col-4">
                                                        <a class="btn btn-primary m-3" href="user/create"><i class="fa-solid fa-plus"></i></a>   
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-warning m-3" href="{{route('user.edit',$user->id)}}"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <form action="user/{{$user->id}}" method="POST">
                                                            {!! csrf_field() !!}
                                                            @method("delete")
                                                            <button  class="btn btn-danger m-3" type="submit"><i
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

