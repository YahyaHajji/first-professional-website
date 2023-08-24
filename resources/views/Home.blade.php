@extends('layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atesma - center de certification professionnelle</title>
</head>
<body>
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-5"></div>
                <div class="col">
                    <p>Certification professionnelle</p>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <section id="sec-2">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-8">
                        <h2>Toutes nos certifications professionnelles ATESMA</h2>

                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col-5 mt-3">
                        <p><b>Cliquez sur un éditeur pour accéder aux certifications</b></p>
                    </div>
                    <div class="col-3"></div>

                </div>
                <div id="grid" class="row">
                    <div class="col-md-4 grid1">
                        <a href="{{ route('app.microsoft') }}"><img src="images/Microsoft.png" alt=""></a>
                        <a href="{{ route('app.esb') }}"><img src="images/ESB.png" alt=""></a>
                        <a href="{{ route('app.ic3') }}"><img src="images/IC3 Logo.png" alt=""></a>
                    </div>
                    <div class="col-md-4 grid2">
                        <a href=""><img src="images/AppDev.png" alt=""></a>
                        <a href="{{ route('app.unity') }}"><img src="images/Unity.png" alt=""></a>
                        <a href=""> <img src="images/Compass.png" alt=""> </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('app.csb') }}"> <img src="images/CSB.png" alt=""> </a>
                        <a href="{{ route('app.its') }}"> <img src="images/ITS.png" alt=""> </a>
                        <a href="{{ route('app.adobe') }}"><img src="images/ACA.png" alt=""></a>

                    </div>
                    <div class="col-md-4 grid3">
                        <a href="{{ route('app.microsoft') }}"> <img src="images/Access.png" alt=""></a>
                        <a href="{{ route('app.microsoft') }}"> <img src="images/Excel.png" alt=""></a>
                        <a href="{{ route('app.ic3') }}"> <img src="images/ic spark-01.png" alt=""></a>

                    </div>
                    <div class="col-md-4 grid4">
                        <a href="{{ route('app.ec-council') }}"> <img src="images/EC Council.png" alt=""></a>
                        <a href="{{ route('app.microsoft') }}"> <img src="images/Word.png" alt=""></a>
                        <a href="{{ route('app.ic3') }}"> <img src="images/ICPHP.png" alt=""></a>

                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('app.microsoft') }}"> <img src="images/MOS.png" alt=""></a>
                        <a href="{{ route('app.microsoft') }}"> <img src="images/mce.png" alt=""></a>
                        <a href=""> <img src="images/1200px-Toon_Boom_Animation_logo.svg.png" alt=""></a>

                    </div>
                    <div class="col-md-4 grid7">
                        <a href="{{ route('app.microsoft') }}"> <img src="images/Outlook.png" alt=""></a>
                        <a href="{{ route('app.microsoft') }}"> <img src="images/MTC.png" alt=""></a>
                        <a href="{{ route('app.microsoft') }}"> <img src="images/OneNote.png" alt=""></a>

                    </div>
                    <div class="col-md-4 grid5">
                        <a href="{{ route('app.microsoft') }}"> <img src="images/SharePoint.png" alt=""></a>
                        <a href="{{ route('app.pmi') }}"> <img src="images/PMI.png" alt=""></a>
                        <a href="{{ route('app.microsoft') }}"> <img src="images/PowerPoint.png" alt=""></a>

                    </div>
                    <div class="col-md-4 grid6">
                        <a href="{{ route('app.microsoft') }}"> <img src="images/teams.png" alt=""></a>
                        <a href="{{ route('app.autodesk') }}"> <img src="images/Autodesk.png" alt=""></a>

                    </div>
                </div>
            </div>
            <span class="goTop"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                </svg></span>
            <a href="{{ url('/whatsapp') }}" class="whatsapp-chat-button">
                <i class="fab fa-whatsapp"></i>
            </a>

        </section>
        <section>
            <div class="hr"></div>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <h2>Qui sommes-nous ?</h2>
                    </div>
                    <div class="col"></div>
                </div><br><br>
                <div class="row">
                    <div class="col-5">
                        <p> <b>ATESMA</b> est une société spécialisée dans les études, le conseil et la
                            formation
                            (dans le domaine des technologies de l'informatique, de la communication, l'ingénierie, RSE,
                            formation doctorales...), qui connaît un développement rapide et croissant depuis sa fondation
                            en
                            2012, grâce à l'engagement quotidien de nos collaborateurs.

                            Etablis à Rabat, nous intervenons également dans toutes les villes du Maroc.</p>
                        <p><b>Et Certiport dans tout cela…?</b></p>
                        <p>
                            <b>Certiport</b>, une entreprise de <b>Pearson VUE</b> , a été créée en 1997 et est maintenant
                            le principal
                            fournisseur de services de développement, de prestation et de gestion de programmes d'examens de
                            certification. Les examens <b>Certiport</b> sont délivrés via un vaste réseau de plus de 14 000
                            Centres de
                            Test Agréés Certiport(CATC) dans le monde.
                        </p>
                        <p>
                            <b>Certiport</b> propose plus de trois millions d'examens chaque année sur les marchés du
                            secondaire, du
                            postsecondaire, de la main-d'œuvre et des technologies d'entreprise dans 148 pays et 26 langues.

                            <b>Certiport</b> travaille avec des fournisseurs de certification de premier plan pour mettre
                            leurs
                            programmes sur le marché avec succès. Avec une expertise particulière dans le milieu
                            universitaire,
                            nous sommes en mesure de créer un plan de mise sur le marché unique qui stimule la performance
                            globale du programme. <b>Certiport</b> gère un portefeuille sophistiqué de programmes de
                            certification de
                            premier plan.
                        </p>
                    </div>
                    <div class="col">
                        <img src="images/pexels-christina-morillo-1181406.jpg">
                    </div>
                </div>
                <div class="hr"></div>
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col">
                        <h2>Témoignages</h2>
                    </div>
                    <div class="col"></div>
                </div><br><br>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-10">
                        <div class="slide-container swiper">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="Person images/pexels-andrea-piacquadio-733872.jpg"
                                                    alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">David Dell</h2>
                                            <p class="description">The lorem text the section that contains header with
                                                having open functionality. Lorem dolor sit amet consectetur adipisicing
                                                elit.</p>
                                            <button class="button">View More</button>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="Person images/pexels-andrea-piacquadio-3778603.jpg"
                                                    alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">David Dell</h2>
                                            <p class="description">The lorem text the section that contains header with
                                                having open functionality. Lorem dolor sit amet consectetur adipisicing
                                                elit.</p>
                                            <button class="button">View More</button>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="Person images/pexels-andrea-piacquadio-774909.jpg"
                                                    alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">David Dell</h2>
                                            <p class="description">The lorem text the section that contains header with
                                                having open functionality. Lorem dolor sit amet consectetur adipisicing
                                                elit.</p>
                                            <button class="button">View More</button>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="Person images/pexels-hannah-nelson-1065084.jpg" alt=""
                                                    class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">David Dell</h2>
                                            <p class="description">The lorem text the section that contains header with
                                                having open functionality. Lorem dolor sit amet consectetur adipisicing
                                                elit.</p>
                                            <button class="button">View More</button>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="Person images/pexels-daniel-xavier-1239291.jpg" alt=""
                                                    class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">David Dell</h2>
                                            <p class="description">The lorem text the section that contains header with
                                                having open functionality. Lorem dolor sit amet consectetur adipisicing
                                                elit.</p>
                                            <button class="button">View More</button>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="Person images/pexels-simon-robben-614810.jpg" alt=""
                                                    class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">David Dell</h2>
                                            <p class="description">The lorem text the section that contains header with
                                                having open functionality. Lorem dolor sit amet consectetur adipisicing
                                                elit.</p>
                                            <button class="button">View More</button>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="Person images/pexels-pixabay-220453.jpg" alt=""
                                                    class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">David Dell</h2>
                                            <p class="description">The lorem text the section that contains header with
                                                having open functionality. Lorem dolor sit amet consectetur adipisicing
                                                elit.</p>
                                            <button class="button">View More</button>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="Person images/pexels-arianna-jadé-2896853.jpg" alt=""
                                                    class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">David Dell</h2>
                                            <p class="description">The lorem text the section that contains header with
                                                having open functionality. Lorem dolor sit amet consectetur adipisicing
                                                elit.</p>
                                            <button class="button">View More</button>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="Person images/pexels-creation-hill-1681010.jpg" alt=""
                                                    class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">David Dell</h2>
                                            <p class="description">The lorem text the section that contains header with
                                                having open functionality. Lorem dolor sit amet consectetur adipisicing
                                                elit.</p>
                                            <button class="button">View More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next swiper-navBtn"></div>
                            <div class="swiper-button-prev swiper-navBtn"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div><br><br>
            </div>

        </section>
    @endsection



</body>


</html>
