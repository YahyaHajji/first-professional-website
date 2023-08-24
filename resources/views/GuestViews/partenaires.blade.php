@extends('GuestViews.layout')

@section('content')
    <header class="header-with-overlay" style="position: relative;">
        <img src="images/partenaire.jpg" alt="image" id="office">
        <div class="card" style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); width: 50%;">
            <div class="card-body">
                <h1 class="card-title">INSCRIPTION PARTENAIRE</h1>
            </div>
        </div>
    </header>
    <div class="container my-5">
        <div class="row">
            <div class="col-3">
                <h4>Inscrivez-vous en tant que Partenaire</h4><br>
                <p><b>Vous souhaitez vous inscrire comme partenaire, merci de bien vouloir renseigner le
                        formulaire.</b>Votre
                    demande sera transmise et soumise à validation par un responsable dans les plus brefs délais.</p>
            </div>
            <div class="col-5">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
                <form action="{{route('app.partemail')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="Prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" name="Prenom" id="Prenom">
                    </div>
                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="Nom" id="Nom">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="Email" id="Email">
                    </div>
                    <div class="mb-3">
                        <label for="Fonction" class="form-label">Fonction <span style="color: red;">*</span> </label>
                        <input type="text" class="form-control" name="Fonction" id="Fonction" required>
                    </div>
                    <div class="mb-3">
                        <label for="raison" class="form-label">Entreprise ou école<span
                                style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="raison" id="raison" required>
                    </div>
                    <div class="mb-3">
                        <label for="siteWeb" class="form-label">Site internet</label>
                        <input type="url" name="siteWeb" id="siteWeb" class="form-control"
                            placeholder="https://example.com" pattern="https://.*" size="30">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Téléphone<span style="color: red;">*</span></label>
                        <input id="phone" type="tel" name="phone" class="form-control"
                            placeholder="Your Phone Number" required>
                    </div>
                    <div class="form-text">En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre
                        de la demande de partenariat, la création de votre compte et de la relation commerciale qui peut en
                        découler.</div>
                    <div class="d-flex flex-column align-items-center mt-3">
                        <button type="submit" class="btn btn-primary">Inscription</button>
                    </div>
                </form>
            </div>
            <div class="col" id="arg"><img src="images/argement.jpg" alt="image"></div>
        </div>
    </div>
@endsection
