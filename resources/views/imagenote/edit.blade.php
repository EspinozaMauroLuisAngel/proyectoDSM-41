@include('layouts.header')
@include('layouts.menu')
@section('header')
@endsection

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar Una Nota de Imagen</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col-lg-12 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
            <form action="{{route('imagenote.update', $imagenotes->id)}}" method="POST">
                @csrf
                @method("PUT")

                <label for="validationServer01" class="form-label">Titulo:</label>
                <input class="form-control" id="validationServer01" type="text" name="title" required value="{{$imagenotes->title}}">
                
                <label>Imagen:</label><br>
                <img src="{{$imagenotes->image}}" width="100" height="100">
                <input class="form-control" type="file" name="image" required value="{{$imagenotes->image}}">

                <label for="validationServer04" class="form-label">Recordarme:</label>
                <input class="form-control" id="validationServer04" type="datetime-local" name="remind" required value="{{$imagenotes->remind}}">

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