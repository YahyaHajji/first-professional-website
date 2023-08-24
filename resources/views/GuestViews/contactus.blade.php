@extends('GuestViews.layout')
@section('content')
    <header class="header-with-overlay" style="position: relative;">
        <img src="{{ asset('images/contact.jpg') }}" alt="image" id="office">
        <div class="card" style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); width: 50%;">
            <div class="card-body">
                <h1 class="card-title">CONTACTEZ-NOUS !</h1>
            </div>
        </div>
    </header>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('app.email') }}" method="POST">
                    @csrf
                    @if ($info)
                        <div class="mb-3">
                            <label for="title" class="form-label">Votre certificat <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" value="{{ $info }}" name="title"
                                id="title" readonly>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" name="Nom" id="Nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="Prenom" class="form-label">Prenom <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="Prenom" id="Prenom" required>
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="Email" id="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="pays" class="form-label">pays <span class="text-danger">*</span></label>
                        <input type="pays" class="form-control" name="pays" id="pays" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" cols="80" rows="10"></textarea>
                    </div>
                    <div class="d-flex flex-column align-items-center mt-3">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
            <div class="col mt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13252.480614391117!2d-5.5774605!3d33.8607942!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda05abb583e913b%3A0x8031c2f03889e925!2sAtesma%20Advanced%20Technology%20and%20Education%20Solutions!5e0!3m2!1sen!2sma!4v1690990620769!5m2!1sen!2sma"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
