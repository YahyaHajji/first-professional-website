@extends('adminMenu')

@section('content')
    <div class="container w-75">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Ajouter Admin</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admins.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="nom" class="col-sm-2 col-form-label">Nom :</label>
                        <div class="col-sm-10">
                            <input type="text" name="nom" id="titre" class="form-control" required>
                            @error('nom')
                                <i class="text-danger"> *{{ $message }} </i>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email :</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" id="email" class="form-control" required>
                            @error('email')
                                <i class="text-danger"> *{{ $message }} </i>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password :</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" id="password" class="form-control" required>
                            @error('password')
                                <i class="text-danger"> *{{ $message }} </i>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary w-25" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
