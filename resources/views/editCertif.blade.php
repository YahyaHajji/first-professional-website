@extends('adminMenu')

@section('content')
    <div class="container w-75">
        @if (session('success'))
            <div class="alert alert-success mt-5">
                <h5>{{ session('success') }}</h5>
            </div>
        @endif
        <div class="card mt-5">
            <div class="card-header">
                <h4>Modifier Certificat</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('certifications.update', $certifs->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="id" class="col-sm-2 col-form-label">ID :</label>
                        <div class="col-sm-10">
                            <input type="text" name="id" id="id" value="{{ $certifs->id }}"
                                class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="titre" class="col-sm-2 col-form-label">Titre :</label>
                        <div class="col-sm-10">
                            <input type="text" name="titre" id="titre" value="{{ $certifs->title }}"
                                class="form-control" required>
                            @error('titre')
                                <i class="text-danger"> *{{ $message }} </i>
                            @enderror

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="prix" class="col-sm-2 col-form-label">Prix (MAD) :</label>
                        <div class="col-sm-10">
                            <input type="text" name="prix" value="{{ $certifs->price }}" id="prix"
                                class="form-control" required>
                            @error('prix')
                                <i class="text-danger"> *{{ $message }} </i>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="categorie" class="col-sm-2 col-form-label">Categorie :</label>
                        <div class="col-sm-10">
                            <select name="categorie" id="categorie" class="form-select" required>


                                @foreach ($certification as $cat)
                                    <option value="{{ $cat }}" @if ($cat === $certifs->categorie) selected @endif>
                                        {{ $cat }}
                                    </option>
                                @endforeach

                            </select>
                            @error('categorie')
                                <i class="text-danger"> *{{ $message }} </i>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Image : </label>
                        <div class="col-sm-10">
                            <input type="file" name="image" value="{{ $certifs->image }}" id="image"
                                class="form-control">
                            @error('image')
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
