<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        if (session('kosar') > 0) {
            $kosar = session('kosar', []);
            $listingCount = 0;
            foreach ($kosar as $kosardarab) {
                $listingCount += $kosardarab['quantity'];
            }
        } else {
            $listingCount = 0;
        }
    ?>

    <title>Pizzamama | Étlap</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                    <li class="nav-item"><a href="/" class="nav-link">Kezdőlap</a></li>
                    <li class="nav-item active"><a href="etlap" class="nav-link">Étlap</a></li>
                    <li class="nav-item"><a href="kosar" class="nav-link"><i class="fa" id="listingCount">
                                <?php echo e($listingCount > 0 ? $listingCount : 0); ?> </i> <i class="fa fa-lg">
                                &#xf07a;</i>
                            </i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="home-slider owl-carousel img">
        <div class="slider-item" style="background-image: url(images/etlapkep.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Étlapunk</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Kinálatunk</h2>
                    <p>Itt kereshetsz az ételek között és megtalálhatod a kedvenc ételedet</p>
                </div>
            </div>
        </div>

        <section class="ftco-section-search">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 heading-section text-center">
                        <form action="" method="GET" name="">
                            <div class="search">
                                <input type="text" name="search" class="searchTerm"
                                    placeholder="Milyen ételre szeretnél rákeresni?">
                                <button type="submit" class="searchButton">
                                    <i class="fa fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-wrap">
            <div class="row" style="margin-bottom: 10px">
                <div class="col-lg-2"></div> <!-- Empty column for gap -->
                <div class="col-lg-8">
                    <div class="services-wrap">
                        <div class="row">
                            <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-6">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.listing-card','data' => ['listing' => $listing]]); ?>
<?php $component->withName('listing-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['listing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div> <!-- Empty column for gap -->
            </div>
        </div>

        <div class="row" style="margin-bottom:10px">
            <div class="col-lg-4 d-flex ftco-animate">
            </div>
            <div class="col-lg-6 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <div class="pages">
                        <?php echo e($listings->links('pagination::bootstrap-4')); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 d-flex ftco-animate">
        </div>
        </div>
        </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Fizikális étlapunk</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span
                            class="deg3"></span></p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="images/etlap.jpg" style="width:100%">
                </div>
            </div>
    </section>

    <div class="container">
        <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Facebook postok</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span
                        class="deg3"></span></p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <iframe
                    src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzeriamammanapoli%2Fposts%2Fpfbid0pg6xySv77Di1AiZdCyTYJLNnmHWpuaTqzxkW3ADLDFz8NadCHXHH3aMMzVYWqpgil&show_text=true&width=500"
                    width="100%" height="700px" style="border:none;overflow:hidden" scrolling="no"
                    frameborder="0" allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            <div class="col-md-6">
                <iframe
                    src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzeriamammanapoli%2Fposts%2Fpfbid0t2AqepiifLkvmkg3NoJimJC4aDcNgLRHJKzhcj5yr3KUihWHBfELefTaU2F7SpMcl&show_text=true&width=500"
                    width="100%" height="700px" style="border:none;overflow:hidden; color:white !important;"
                    scrolling="no" frameborder="2" allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>

    <!-- Popup -->
    <div id="popup1" class="popup_etlap">
        <div class="popup">
            <div class="row justify-content-center ">
                <img src="images/siker.png" style="width: 30%">
                <h3 style="color:black;">Sikeres hozzáadás a Kosárhoz</h3>
            </div>
            <a class="close" onclick="closePopup('popup1')">&times;</a>

            <div class="content">
                <div class="row justify-content-center">
                    <a href="kosar"> <button id="zoldkoasar"
                            style="border: solid 2px green; color:green; margin-right:20px !important;"
                            class="ml-2 btn btn-white btn-outline-white">Kosár</button></a>

                    <button style="border: solid 2px grey; color:grey;" id="szurkekoasar"
                        onclick="closePopup('popup1')" class="ml-2 btn btn-white btn-outline-white">tovább
                        vásárolok</button>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('Parts/_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>
    <script>
        function showPopup(popupId) {
            var popup = document.getElementById(popupId);
            popup.style.visibility = "visible";
            popup.style.opacity = "1";
        }
    </script>
    <script>
        function closePopup(popupId) {
            var popup = document.getElementById(popupId);
            popup.style.visibility = "hidden";
            popup.style.opacity = "0";
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $(".kosarForm").submit(function(e) {
                // Prevent default form submission
                e.preventDefault();

                // Serialize form data
                var formData = $(this).serialize();

                // Send AJAX request
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        // Update UI with response data
                        $('#listingCount').text(response.listingCount);

                        // Redirect to the desired page
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(xhr.responseText);
                        console.log("Error occurred during form submission.");
                    }
                });
            });
        });
    </script>
</body>

</html>
<?php /**PATH D:\Pizzamama\resources\views//etlap.blade.php ENDPATH**/ ?>