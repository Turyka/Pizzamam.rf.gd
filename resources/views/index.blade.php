<!DOCTYPE html>
<html lang="en">

<head>
    @php
        if (session('kosar') > 0) {
            $kosar = session('kosar', []);
            $listingCount = 0;
            foreach ($kosar as $kosardarab) {
                $listingCount += $kosardarab['quantity'];
            }
        } else {
            $listingCount = 0;
        }
    @endphp
    <title>Pizzamama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="images/logocska.png" style="width: 30%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Kezdőlap</a></li>
                    <li class="nav-item"><a href="etlap" class="nav-link">Étlap</a></li>
                    <li class="nav-item"><a href="kosar" class="nav-link"><i class="fa" id="listingCount">
                                {{ $listingCount > 0 ? $listingCount : 0 }} </i> <i class="fa fa-lg">
                                &#xf07a;</i>
                            </i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(images/kezdokep.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h2 class="mb-3 mt-5 bread">Nápolyi stílusú pizza, olasz szakács, olasz alapanyagok, olasz
                            kemence 🍕</h2>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>Telefonszám</h3>
                                <p>(70) 666 7776</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><i class="fa-solid fa-location-dot" style='color:#fd7e14'></i></div>
                            <div class="text">
                                <h3>Hely</h3>
                                <p>Kinizsi Pál utca 89., Zalaegerszeg, Hungary</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3>Nyitvatartás</h3>
                                <p>Hétfő: ZÁRVA</p>
                                <p>Kedd-Szombat: 16:00-23:00</p>
                                <p>Vasárnap: ZÁRVA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url(images/oldalkep.jpg);"></div>
        <div class="one-half ftco-animate">
            <div class="heading-section ftco-animate ">
                <h2 class="mb-4">Üdv a <span class="flaticon-pizza" style="color:#fd7e14">Pizzamama</span>
                    éttermében</h2>
            </div>
            <div>
                <p>Itt, nálunk mindent megkap, ami egy jó pizzériához tartozik: friss alapanyagok, kiváló minőségű
                    tészta, finom szószok és ízes feltétek. Emellett széles italválasztékunkkal is várjuk vendégeinket,
                    hogy mindenki megtalálja a kedvére valót. A pizzériánkban mindig vidám és barátságos a hangulat,
                    hiszen szeretjük, ha vendégeink jól érzik magukat nálunk. Reméljük, hogy Ön is élvezni fogja az itt
                    eltöltött időt, és hogy sokszor ellátogat majd hozzánk. Várjuk Önt és kedves társaságát szeretettel!
                </p>
            </div>
        </div>
    </section>
    <br>
    <section class="ftco-about d-md-flex">

        <div class="one-half ftco-animate">
            <div class="heading-section ftco-animate ">
                <h2 class="mb-4">Az év legkedveltebb vendéglátóhelye</h2>
            </div>
            <div>
                <p>Örömmel osztjuk meg veletek, hogy az idén az Év Legkedveltebb Vendéglátóhelye díjat mi nyertük el!
                    Nagyon hálásak vagyunk mindazoknak, akik szavaztak ránk és támogattak minket ebben az eredményben.

                    A célunk mindig az volt, hogy vendégeinknek kivételes élményt nyújtsunk, és örömmel látjuk, hogy ez
                    a kemény munka meghozta a gyümölcsét. Azt hiszem, az ételeink, az italaink, és a csodálatos
                    személyzetünk mind hozzájárult ahhoz, hogy elnyerjük ezt a kitüntetést.

                    Szeretnénk megköszönni minden vendégünknek, hogy részeivé tettek bennünket az életüknek, és
                    reméljük, hogy továbbra is számíthatunk a támogatásukra és a visszajelzéseikre. Köszönjük, hogy
                    velünk ünnepelték meg az Év Legkedveltebb Vendéglátóhelye díját, és hogy velünk töltötték az elmúlt
                    időszakot.</p>
            </div>
        </div>
        <div class="one-half img" style="background-image: url(images/nyertes.jpg); margin-right:5%;"></div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Munkatársaink</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span
                            class="deg3"></span></p>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_1.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Tom Smith</a></h3>
                            <span class="position">Főpincér</span>
                            <div class="text">
                                <p>Az XYZ étteremben főpincérként vezettem egy személyzetet, felelős voltam az
                                    ügyfélszolgálatért, valamint az étterem zavartalan működéséért. Szenvedélyem a magas
                                    színvonalú szolgáltatás nyújtása, és biztosítani, hogy minden vendég emlékezetes
                                    étkezési élményt kapjon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_3.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
                            <span class="position">szakács</span>
                            <div class="text">
                                <p>Az elmúlt években dolgoztam különböző éttermekben és szállodákban, ahol számos
                                    különféle ízvilágú és stílusú ételeket készítettem. Nagy hangsúlyt fektetek az
                                    alapanyagok minőségére és a frissességre, valamint a gasztronómiai trendekre, hogy
                                    mindig az aktuális igényeknek megfelelő ételeket kínálhassam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_4.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
                            <span class="position">Főszakács</span>
                            <div class="text">
                                <p>Az ételeim készítése során nagy hangsúlyt fektetek a minőségi alapanyagokra, az
                                    innovációra és a kreativitásra. Számos különféle konyhát és stílust ismeretem, és
                                    mindig igyekszem megtalálni azokat az ízeket és fűszereket, amelyekkel az ételeim
                                    különlegessé válnak.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('Parts/_footer')
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
