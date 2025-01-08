<!doctype html>
<html lang="en">

<head>
    <title>Contact Form 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Kaja Készítő Form a:<br><?php echo e($listing->cim); ?></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm"
                        action="/etlap/<?php echo e($listing->id); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom:30px">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cim"
                                        value="<?php echo e($listing->cim); ?>" id="name" placeholder="Étel neve">
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom:30px">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ar"
                                        value="<?php echo e($listing->ar); ?>" id="ar" placeholder="Étel ára(csak szám)">
                                </div>
                            </div>

                            <div class="col-md-12" style="margin-bottom:30px">
                                <label for="img">Étel Képe:</label>
                                <label for="images" class="drop-container">
                                    <span class="drop-title">Drop files here</span>
                                    or
                                    <input type="file" name="logo" id="images">
                                </label>
                                <img style="width:30%;" class="img" value=<?php echo e(old($listing->logo)); ?>

                                    src="<?php echo e($listing->logo ? asset('storage/' . $listing->logo) : ''); ?>">
                                </a>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" cols="30" rows="4" name="osszetevok" placeholder="Ősszetevők"><?php echo e($listing->osszetevok); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <div class="submitting"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="info-wrap w-100 p-5 img" style="background-image: url(images/img.jpg);">
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
<?php /**PATH D:\Pizzamama\resources\views/edit.blade.php ENDPATH**/ ?>