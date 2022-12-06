@include('layouts.header')
@include('layouts.menu')
@section('header')
@endsection

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
            <form action="{{route('listnote.update', $listnote->id)}}" method="POST">
                @csrf
                @method("PUT")

                <label for="validationServer01" class="form-label">Titulo:</label>
                <input class="form-control" id="validationServer01" type="text" name="title" required value="{{$listnote->title}}">
                
                <label for="validationServer02" class="form-label">Describcion de la Lista:</label>
                <input class="form-control" id="validationServer02" type="text" name="listdescription" required value="{{$listnote->listdescription}}">
                
                <label for="validationServer03" class="form-label">Imagen:</label><br>
                <img src="{{$listnote->image}}" width="100" height="100">
                <input class="form-control" id="validationServer03" type="file" name="image" required value="{{$listnote->image}}">

                <label for="validationServer04" class="form-label">Recordarme:</label>
                <input class="form-control" id="validationServer04" type="datetime-local" name="remind" required value="{{$listnote->remind}}">

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