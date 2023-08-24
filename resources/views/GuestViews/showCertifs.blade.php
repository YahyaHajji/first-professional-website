@extends('GuestViews.layout')

@section('content')
    <header class="header-with-overlay" style="position: relative;">
        <img src="images/image-4.jpg" alt="image" id="office">
        <div class="card" style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); width: 50%;">
            <div class="card-body">
                <h1 class="card-title">Nos Certifications</h1>
                <h5 class="card-text">Cliquez sur les badges pour accéder aux certifications</h5>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-3" id="aside">
                <h4>Compétences</h4>
                <input type="radio" value="all" name="categorie"
                        onclick="filterCertifications('all')" id="all">
                    <label for="all">All</label> <br>
                @foreach ($certification as $cert)
                    <input type="radio" value="{{ $cert }}" name="categorie"
                        onclick="filterCertifications('{{ $cert }}')" id="{{ $cert }}">
                    <label for="{{ $cert }}">{{ $cert }}</label> <br>
                @endforeach
            </div>
            <div class="col-9">
                @if (isset($message))
                <div class="alert alert-warning" role="alert">
                    <h4>
                        {!! $message !!}
                    </h4>
                </div>
                @else
                <div class="row">
                    @forelse ($certifs as $certif)
                        <div class="col-md-3 mb-4" id="main">
                            <div class="card cpt" id="card" data-competence="{{ $certif->categorie }}">
                                <img src="{{ asset('storage/' . $certif->image) }}" class="card-img-top img-thumbnail"
                                    alt="Card Image">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $certif->title }}</h5>
                                    <div class="cards-footer">
                                        <p class="card-text"> {{ $certif->price }} MAD</p>
                                        <a href="{{route('app.contactez',$certif->title)}}" class="btn btn-primary">obtenir</a>
                                    </div>
                              </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>  
                @endif
              
            </div>
        </div>
    </div>

    <script>
        function filterCertifications(competence) {
            // Show all certification cards
            $('.cpt').show();
            if (competence !== 'all') {
                $('.cpt').not(`[data-competence="${competence}"]`).hide();
            }
        }
    </script>
    
@endsection
