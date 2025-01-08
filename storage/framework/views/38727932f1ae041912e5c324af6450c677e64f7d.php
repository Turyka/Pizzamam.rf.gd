<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        if (session('kosar') > 0) {
            $listingCount = 0;
            $Totalprice = 0;
            $kosar = session('kosar', []);
            foreach ($kosar as $kosardarab) {
                $listingCount += $kosardarab['quantity'];
                $Totalprice += $kosardarab['quantity'] * $kosardarab['ar'];
            }
        } else {
            $listingCount = 0;
            $Totalprice = 0;
        }
    ?>
    <title>Pizzamama | Kosár</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
                    <li class="nav-item"><a href="/" class="nav-link">Kezdőlap</a></li>
                    <li class="nav-item"><a href="etlap" class="nav-link">Étlap</a></li>
                    <li class="nav-item active"><a href="kosar" class="nav-link"><i class="fa" id="listingCount">
                                <?php echo e($listingCount > 0 ? $listingCount : 0); ?> </i> <i class="fa fa-lg">
                                &#xf07a;</i>
                            </i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <div class="container-wrap">

        <h2 class="text-center"> Kosár Tartalma </h2>
        <h4 class="text-center">
            <?php if($listingCount === 0): ?>
                <p> Még nincs áru rendelj valamit:</p>
                <a type="button" href="etlap" class="ml-2 btn btn-white btn-outline-white"
                    style="border: solid 2px orange">Rendelek</a>
            <?php endif; ?>

        </h4>
        <div class="row" style="margin-bottom:10px">
            <div class="col-lg-3 d-flex ftco-animate">
            </div>
            <div class="col-lg-6 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                </div>
            </div>
        </div>
        <div class="col-lg-3 d-flex ftco-animate">
        </div>
    </div>

    <?php if(session('kosar') > 0): ?>
        <?php $__currentLoopData = $kosar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kosaritem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.kosar-card','data' => ['kosaritem' => $kosaritem]]); ?>
<?php $component->withName('kosar-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['kosaritem' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($kosaritem)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <h2 id="Totalprice" class="text-center"> <?php echo e($Totalprice); ?> Ft</h2>
    <h2 class="text-center listingCount"> <?php echo e($listingCount); ?> db</h2>
    <form action="<?php echo e(route('kosar.vege')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h4 class="text-center">
            <?php if(session('kosar') > 0): ?>
                <?php $__currentLoopData = $kosar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kosaritem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="hidden" name="Pizza_darab_nev[]"
                        value="<?php echo e($kosaritem['quantity']); ?>, <?php echo e($kosaritem['cim']); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <input type="hidden" name="Teljes_osszeg" value="<?php echo e($Totalprice); ?>">
            <input type="hidden" name="Ossz_darab" value="<?php echo e($listingCount); ?>">
        </h4>
        <button type="submit" class="ml-2 btn btn-white btn-outline-white" style="border: solid 2px orange; ">
            Rendelés vége
        </button>
    </form>
    </h4>
    <div class="row" style="margin-bottom:10px">
        <div class="col-lg-3 d-flex ftco-animate">
        </div>
        <div class="col-lg-6 d-flex ftco-animate">
            <div class="services-wrap d-flex">
            </div>
        </div>
    </div>
    <div class="col-lg-3 d-flex ftco-animate">
    </div>
    </div>
    </div>
    </div>
    </section>
    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Hol tud követni minket?</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Névjegy</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Kinizsi Pál
                                        utca
                                        89., Zalaegerszeg, Hungary</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(70)
                                            666 7776</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Minden jog fentartva </a>

                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

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
    <script src="js/main.js"></script>

    <!-- ajax -->
    <script>
        $(document).ready(function() {
            $(".kosar_remove").submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                var itemId = $(this).find('input[name="clear"]').val();
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        console.log('Success. Response:', response);

                        // Html tag-ok #id .class
                        $('.listingCount').text(response.listingCount);
                        $('#listingCount').text(response.listingCount);
                        $('#Totalprice').text(response.Totalprice);
                        $('.ar').text(response.ar);

                        // Totalprice és és maga az itzemek price-a
                        <?php if(isset($kosaritem)): ?>
                            var ItemPrice = response.darab * response.ar;
                            $('.price-' + itemId).text(ItemPrice);
                        <?php else: ?>
                            // Set total price to 0 if $kosaritem is not defined (cart is empty)
                            $('.price-' + itemId).text('0 Ft');
                        <?php endif; ?>

                        // darab
                        var darab = parseInt(response.darab);
                        console.log('darab value:', darab); // test
                        $('#darab-' + itemId).text(darab);
                        if (darab === 0) {
                            $('#item-container-' + itemId).remove();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        console.log("Error occurred during form submission.");
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".kosar_add").submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                var itemId = $(this).find('input[name="add"]').val();
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        console.log('Success. Response:', response);
                        // Update listingCount in the navigation
                        $('.listingCount').text(response.listingCount);
                        $('#listingCount').text(response.listingCount);
                        $('#Totalprice').text(response.Totalprice);
                        $('#darab-' + itemId).text(response.darab);
                        $('.ar').text(response.ar);
                        <?php if(isset($kosaritem)): ?>
                            var ItemPrice = response.darab * response.ar;
                            $('.price-' + itemId).text(ItemPrice);
                        <?php else: ?>
                            // Set total price to 0 if $kosaritem is not defined (cart is empty)
                            $('.price-' + itemId).text('0 Ft');
                        <?php endif; ?>
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        console.log("Error occurred during form submission.");
                    }
                });
            });
        });
    </script>


</body>

</html>
<?php /**PATH D:\Pizzamama\resources\views/kosar.blade.php ENDPATH**/ ?>