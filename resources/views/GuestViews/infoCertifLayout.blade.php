<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/infocertifs.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>@yield('title')</title>
</head>

<body style="background-color: #f5f5f5">
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="logo me-auto">
                        <img src="{{ asset('images/Logo-ATESMA.png') }}" alt="atesma logo">
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('app.main') }}">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" role="button" aria-expanded="false">Nos
                                Certifications</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('app.microsoft') }}">Microsoft Office
                                        Specialist</a></li>
                                <li><a class="dropdown-item" href="{{ route('app.adobe') }}">Adobe Certified Professional</a></li>
                                <li><a class="dropdown-item" href="{{ route('app.autodesk') }}">Autodesk Certified User (ACU)</a></li>
                                <li><a class="dropdown-item" href="{{ route('app.its') }}">Information Technology Specialist</a></li>
                                <li><a class="dropdown-item" href="{{ route('app.ic3') }}">IC3 Digital Literacy</a></li>
                                <li><a class="dropdown-item" href="#">Ms Certified Fundamentals</a></li>
                                <li><a class="dropdown-item" href="{{ route('app.esb') }}">Entrepreneurship and Small Business
                                        (ESB)</a></li>
                                <li><a class="dropdown-item" href="#">Microsoft Certified Educator (MCE)</a></li>
                                <li><a class="dropdown-item" href="{{ route('app.csb') }}">Communication Skills for Business (CSB)</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('app.ec-council') }}">EC-Council Associate (ECA)</a></li>
                                <li><a class="dropdown-item" href="{{ route('app.pmi') }}">Project Management Institute (PMI)</a></li>
                                <li><a class="dropdown-item" href="{{ route('app.unity') }}">Unity Certified User (UCU)</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('app.certifs') }}">Boutique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('app.partenaire') }}">Devenir Partenaire</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('app.contactez') }}">Contact</a>
                        </li>
                        <li class="nav-item search">
                            <form action="{{ route('app.certifs') }}" method="POST">
                                @csrf
                                @method('GET')
                                <span class="icon">
                                    <a class="nav-link text-dark searchButton" href="#" style="display: inline;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </a>
                                    <a class="nav-link text-dark closeButton" href="#" style="display: inline;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </a>
                                </span>
                        </li>
                        <div class="searchBox">
                            <input type="text" name="query" placeholder="cherche ici ......">
                        </div>
                        </form>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('app.auth') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <span class="goTop"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg></span>
    <a href="{{ url('/whatsapp') }}" class="whatsapp-chat-button"> <i class="fab fa-whatsapp"></i> </a>
    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="Fcontainer">
            <div class="Row">
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <div class="contact">
                        <img src="{{ asset('images/Logo-ATESMA.png') }}" alt="logo atesma">
                        <p>Reach us Monday - Friday</p>
                        <p> 9 am - 6 pm (GMT+1)</p>
                        <h5>Call: +212 535 464 004</h5>
                    </div>

                </div>
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Equipe</a></li>
                        <li><a href="{{ route('app.certifs') }}">Certifications</a></li>
                        <li><a href="#"> Actualités </a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Consulting</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Technical Support</a></li>
                        <li><a href="#"> Social media marketing </a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="{{ url('https://www.facebook.com/ATESMA.MA') }}"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href="{{ url('https://www.instagram.com/atesma.m/') }}"><i
                                class="fab fa-instagram"></i></a>
                        <a href="{{ url('https://www.linkedin.com/company/atesma') }}"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/js/bootstrap.bundle.min.js"></script>
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       

    <script>
        let searchBtn = document.querySelector('.searchButton');
        let closeBtn =  document.querySelector('.closeButton');
        let searchBox = document.querySelector('.searchBox');

        searchBtn.onclick = function() {
            searchBox.classList.add('active');
            closeBtn.classList.add('active');
            searchBox.classList.add('active');

        };

        closeBtn.onclick = function() {
            searchBox.classList.remove('active');
            closeBtn.classList.remove('active');
            searchBox.classList.remove('active');

        };
    </script>
   <script>
       $(document).ready(function () {
        // Set the interval for automatic slideshow
        setInterval(function () {
            $('#carouselExampleControls').carousel('next');
        }, 2000); // Change slide every 1 second (1000 ms)

        // Handle manual navigation using previous and next buttons
        $('.carousel-control-prev').click(function () {
            $('#carouselExampleControls').carousel('prev');
        });

        $('.carousel-control-next').click(function () {
            $('#carouselExampleControls').carousel('next');
        });
    });
</script>
</body>
<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>
<!-- JavaScript -->
<script src="js/script.js"></script>



</html>
