@extends('adminMenu')

@section('content')
    <div class="container w-75">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Modifier Admin</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admins.update', $users->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="id" class="col-sm-2 col-form-label">ID :</label>
                        <div class="col-sm-10">
                            <input type="number" name="id" id="id" value="{{ $users->id }}"
                                class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nom" class="col-sm-2 col-form-label">Nom :</label>
                        <div class="col-sm-10">
                            <input type="text" name="nom" id="nom" value="{{ $users->name }}"
                                class="form-control" required>
                            @error('nom')
                                <i class="text-danger"> *{{ $message }} </i>
                            @enderror

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email :</label>
                        <div class="col-sm-10">
                            <input type="eamil" name="email" value="{{ $users->email }}" id="email"
                                class="form-control" required>
                            @error('email')
                                <i class="text-danger"> *{{ $message }} </i>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password :</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" id="password" class="form-control" value="{{$users->password}}" required>
                            @error('password')
                                <i class="text-danger"> *{{ $message }} </i>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" class="btn btn-primary w-25" value="Valider">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
