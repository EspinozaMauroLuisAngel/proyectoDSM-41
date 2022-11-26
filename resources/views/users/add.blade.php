@include('layouts.header')
@include('layouts.menu')
@section('header')
@endsection

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Agregar Usuarios</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col-lg-12 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta </h6>
            </div>
            <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <label for="validationServer01" class="form-label">Nombre:</label>
                <input class="form-control" id="validationServer01" type="text" name="name" required>
                
                <label for="validationServer02" class="form-label">Apellido:</label>
                <input class="form-control" id="validationServer02" type="text" name="lastname" required>

                <label for="validationServer03" class="form-label">Correo:</label>
                <input class="form-control" id="validationServer03" type="email" name="email" required>

                <label for="validationServer04" class="form-label">Contraseña:</label>
                <input class="form-control" id="validationServer04" type="password" name="password" required>

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

@include('layouts.footer')