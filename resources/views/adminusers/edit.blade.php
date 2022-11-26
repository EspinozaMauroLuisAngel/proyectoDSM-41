@include('layouts.header')
@include('layouts.menu')
@section('header')
@endsection

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuarios Administradores</h1>
</div>

<!-- Content Row -->

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col-lg-12 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar</h6>
            </div>
            <div class="card-body"> 
                <form action="{{route('adminusers.update', $adminusers->id)}}" method="POST">
                    @csrf
                    @method("PUT")
                
                <label for="validationServer01" class="form-label">Nombre:</label>
                <input class="form-control" id="validationServer01" type="text" name="name" required value="{{$adminusers->name}}">
                
                <label for="validationServer01" class="form-label">Apellido:</label>
                <input class="form-control" id="validationServer01" type="text" name="lastname" required require value="{{$adminusers->lastname}}">

                <label for="validationServer03" class="form-label">Correo:</label>
                <input class="form-control" id="validationServer03" type="email" name="email" required value="{{$adminusers->email}}">

                <label for="validationServer04" class="form-label">Contraseña:</label>
                <input class="form-control" id="validationServer04" type="password" name="password" required value="{{$adminusers->password}}">

                <div class="row">
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>
                </div>
            
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    
@include('layouts.footer')