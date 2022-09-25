<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advance Search</title>

    <!-- bootsrap css -->
    <link rel="stylesheet" href="./src/css/bootstrap.min.css">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="./src/fontawesome/css/all.min.css">

    <!-- Base css with customised bootstrap included -->
    <link rel="stylesheet" href="./src/css/miri-ui-kit-free.css">

    <!-- Vendor css -->
    <link rel="stylesheet" href="./src/mdi/font/css/materialdesignicons.min.css">

</head>

<body>
    <style>
        .advance-search-header {
            height: 200px;
            background-color: rgba(248, 249, 250, 1);
            margin-top:92px;
        }
    </style>
     <header>
    <?php include 'navbar.php'; ?>
  </header>
    <section class="advance-search-header">
        <div class="container-fluid h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col">
                    <h1 class="display-4 text-center text-success">Advance Search</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="advance-search">
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body mx-5">
                            <form class="">
                                <h4 class="text-success">Location</h5>
                                    <input type="text" class="form-control form-control-sm my-2 " placeholder="search for country,city,state">
                                    <p>Country</p>
                                    <span class="badge bg-danger my-1">India <i class="fa fa-x"></i></span>
                                    <span class="badge bg-danger my-1">USA <i class="fa fa-x"></i></span>
                                    <span class="badge bg-danger my-1">UK <i class="fa fa-x"></i></span>
                                    <span class="badge bg-danger my-1">Germany <i class="fa fa-x"></i></span>
                                    <!-- <div class="form-check"> 
                                        <input class="form-check-input" type="checkbox" value="" id="india">
                                        <label class="form-check-label" for="india">
                                            India
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="usa">
                                        <label class="form-check-label" for="usa">
                                            USA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="uk">
                                        <label class="form-check-label" for="uk">
                                            UK
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="germany">
                                        <label class="form-check-label" for="germany">
                                            Germany
                                        </label>
                                    </div> -->
                                    <p>State</p>
                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="maharashtra">
                                        <label class="form-check-label" for="maharashtra">
                                            Maharashtra
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Indore">
                                        <label class="form-check-label" for="Indore">
                                            Madhya Pradesh
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="bihar">
                                        <label class="form-check-label" for="bihar">
                                            Bihar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="goa">
                                        <label class="form-check-label" for="goa">
                                            Goa
                                        </label>
                                    </div> -->
                                    <span class="badge bg-danger my-1">Maharashtra <i class="fa fa-x"></i></span>
                                    <span class="badge bg-danger my-1">Rajasthan <i class="fa fa-x"></i></span>
                                    <span class="badge bg-danger my-1">Madhya Pradesh <i class="fa fa-x"></i></span>
                                    <span class="badge bg-danger my-1">Kolkata <i class="fa fa-x"></i></span>

                                    <p>City</p>
                                    <span class="badge bg-danger my-1">Mumbai <i class="fa fa-x"></i></span>
                                    <span class="badge bg-danger my-1">Indore <i class="fa fa-x"></i></span>
                                    <span class="badge bg-danger my-1">Bhopal <i class="fa fa-x"></i></span>
                                    <span class="badge bg-danger my-1">Jaipur <i class="fa fa-x"></i></span>

                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="bhopal">
                                        <label class="form-check-label" for="bhopal">
                                            Bhopal
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Indore">
                                        <label class="form-check-label" for="Indore">
                                            Indore
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Mumbai">
                                        <label class="form-check-label" for="Mumbai">
                                            Mumbai
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Nagpur">
                                        <label class="form-check-label" for="Nagpur">
                                            Nagpur
                                        </label>
                                    </div> -->
                                    <hr>
                                    <h4 class="text-success">Category</h5>
                                        <input type="text" class="form-control form-control-sm my-2 " placeholder="search for topic">
                                        <span class="badge bg-danger my-1">Engineering <i class="fa fa-x"></i></span>
                                        <span class="badge bg-danger my-1">Medical <i class="fa fa-x"></i></span>
                                        <span class="badge bg-danger my-1">Education & Tranning <i
                                                class="fa fa-x"></i></span>
                                        <span class="badge bg-danger my-1">Science <i class="fa fa-x"></i></span>
                                        <hr>
                                        <h4 class="text-success">Rating</h5>
                                            <hr>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="row">
                        <span class="my-3">33423 result appeared</span>
                        <div class="col-10 my-2">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <p class="text-success">28 march,2022 - 29 march,2022</p>
                                    <a href="conferenceInfo.php" class="fs-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Smart City Expo-Dubai">Smart City Expo-Dubai </a>
                                    <hr class="bg-transparent py-1 my-1">
                                    <span class="badge bg-light text-dark my-1">Trade Show</span>
                                    <span class="badge bg-light text-dark my-1">Business Services</span>
                                    <span class="badge bg-light text-dark my-1">IT & Technology</span>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mt-2">
                                                <i class="fa fa-star my-2"></i> Interested
                                                <span class="text-muted">
                                                    345
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="text-end">4.0<i class="fa fa-star mx-3 text-warning"></i></p>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-success"> Dusit Thani Dubai, Dubai, UAE</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 my-2">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <p class="text-success">15 April,2022 - 19 April,2022</p>
                                    <a href="conferenceInfo.php" class="fs-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="China Import and Export Fair (Phase 1)">China Import and Export Fair (Phase 1)


                                        </a>
                                    <hr class="bg-transparent py-1 my-1">
                                    <span class="badge bg-light text-dark my-1">Trade Show</span>
                                    <span class="badge bg-light text-dark my-1">Electric & Electronics</span>
                                    <span class="badge bg-light text-dark my-1">Industrial Engineering</span>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mt-2">
                                                <i class="fa fa-star my-2"></i> Interested
                                                <span class="text-muted">
                                                    412
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="text-end">4.0<i class="fa fa-star mx-3 text-warning"></i></p>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-success"> Guangzhou, China</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 my-2">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <p class="text-success">27 April,2022 - 30 April,2022</p>
                                    <a href="conferenceInfo.php" class="fs-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Die & Mould India International Exhibition">Die & Mould India International Exhibition
                                        </a>
                                    <hr class="bg-transparent py-1 my-1">
                                    <span class="badge bg-light text-dark my-1">Trade Show</span>
                                    <span class="badge bg-light text-dark my-1">Auto & Automotive</span>
                                    <span class="badge bg-light text-dark my-1">Industrial Engineering</span>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mt-2">
                                                <i class="fa fa-star my-2"></i> Interested
                                                <span class="text-muted">
                                                    380
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="text-end">4.0<i class="fa fa-star mx-3 text-warning"></i></p>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-success">Bombay Exhibition Centre (BEC), Mumbai, India</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 my-2">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <p class="text-success">01 May,2022 - 05 May,2022</p>
                                    <a href="conferenceInfo.php" class="fs-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="China Import and Export Fair (Phase 3)">China Import and Export Fair (Phase 3)
                                       </a>
                                    <hr class="bg-transparent py-1 my-1">
                                    <span class="badge bg-light text-dark my-1">Trade Show</span>
                                    <span class="badge bg-light text-dark my-1">Apparel & Clothing</span>
                                    <span class="badge bg-light text-dark my-1">Home & Office</span>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mt-2">
                                                <i class="fa fa-star my-2"></i> Interested
                                                <span class="text-muted">
                                                    420
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="text-end">4.0<i class="fa fa-star mx-3 text-warning"></i></p>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-success">Guangzhou, China</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 my-2">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <p class="text-success">16 May,2022 - 19 May,2022</p>
                                    <a href="conferenceInfo.php" class="fs-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Saudi Food Expo">Saudi Food Expo


                                       </a>
                                    <hr class="bg-transparent py-1 my-1">
                                    <span class="badge bg-light text-dark my-1">Trade Show</span>
                                    <span class="badge bg-light text-dark my-1">Food & Beverages</span>
                                    <span class="badge bg-light text-dark my-1">Hospitality</span>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mt-2">
                                                <i class="fa fa-star my-2"></i> Interested
                                                <span class="text-muted">
                                                    452
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="text-end">4.0<i class="fa fa-star mx-3 text-warning"></i></p>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-success">Riyadh front expo, Riyadh, Saudi Arabia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary d-inline">Load More</button>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>
    <script src="./src/vendors/jquery/dist/jquery.min.js"></script>
    <script src="./src/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="./src/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./src/js/miri-ui-kit.js"></script>
</body>

</html>