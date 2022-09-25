<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Notify</title>

  <!-- bootstrap css  -->
  <link rel="stylesheet" href="./src/css/bootstrap.css">
  <!-- Base css with customised bootstrap included -->
  <link rel="stylesheet" href="./src/css/miri-ui-kit-free.css">
  <!-- Vendor css -->
    <link rel="stylesheet" href="./src/mdi/font/css/materialdesignicons.min.css">
  <!-- flag icon css -->
  <link rel="stylesheet" href="./src/flag-icons/css/flag-icons.min.css">
  <!-- fontawesome css  -->
  <link rel="stylesheet" href="./src/fontawesome/css/all.css">

</head>
<body class="bg-gradient-white">
  <header class="miri-ui-kit-header">
   <?php include 'navbar.php'; ?>
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center vh-100">
        <div class="col-8">
          <h1 class="display-3 text-white text-center">Search Event</h1>
          <form action="" class="input-group">
              <select class="form-select col-3">
                <option selected>Country</option>
                <option value="1">America</option>
                <option value="2">Aferica</option>
                <option value="3">Canada</option>
                <option value="4">India</option>
                <option value="5">Russia</option>
              </select>
              <select class="form-select col-3">
                <option selected>City</option>
                <option value="1">Delhi</option>
                <option value="2">Mumbai</option>
                <option value="3">Newyork</option>
              </select>
              <input class="form-control form-control-lg bg-white" type="text" name="search"
                placeholder="Events..">  
              <button class="btn btn-soft-danger col-2" type="button">Search</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>
  <div class="container my-5">
    <h2 class="text-success my-5">Featured Event</h2>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img src="./src/images/library1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-success"><i class="fa fa-calendar mx-1"></i>24 jun,2022 - 24 jun,2022</p>
            <a href="advanceSearch.php" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</a>
            <p class="text-success mt-2">India,Maharashtra,Mumbai</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="./src/images/library4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-success"><i class="fa fa-calendar mx-1"></i>24 jun,2022 - 24 jun,2022</p>
            <a href="advanceSearch.php" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</a>
            <p class="text-success mt-2">India,Maharashtra,Mumbai</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="./src/images/library1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-success"><i class="fa fa-calendar mx-1"></i>24 jun,2022 - 24 jun,2022</p>
            <a href="advanceSearch.php" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</a>
            <p class="text-success mt-2">India,Maharashtra,Mumbai</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-5">
      <h2 class="text-success my-5">Top Category</h2>
        <div class="row">
            <div class="col-6">
                <ul class="list-group">
                    <a href="advanceSearch.php" class="list-group-item border-0">Engineering</a>
                    <a href="advanceSearch.php" class="list-group-item border-0">Medicine</a>
                    <a href="advanceSearch.php" class="list-group-item border-0">Business</a>
                    <a href="advanceSearch.php" class="list-group-item border-0">Mathematics</a>
                    <a href="advanceSearch.php" class="list-group-item border-0">Life Science</a>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-group">
                    <a href="advanceSearch.php" class="list-group-item border-0">Law</a>
                    <a href="advanceSearch.php" class="list-group-item border-0">Social Science</a>
                    <a href="advanceSearch.php" class="list-group-item border-0">Regional Studies</a>
                    <a href="advanceSearch.php" class="list-group-item border-0">Social Studies</a>
                    <a href="advanceSearch.php" class="list-group-item border-0">Interdiciplinary</a>
                </ul>
            </div>
        </div>
  </div>
  <div class="container my-5">
      <h2 class="text-success my-5">Browse Event By Country</h2>
        <div class="row">
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <p class="fi fi-in"></p>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">India</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <p class="fi fi-us"></p>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">USA</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <p class="fi fi-au"></p>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">Australia</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <p class="fi fi-jp"></p>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">Japan</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <p class="fi fi-eg"></p>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">Egypt</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <p class="fi fi-fr"></p>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">France</a>
                    </div>
                </div>
            </div>
            <button class="btn btn-soft-primary mt-5 w-25">Load More</button>
        </div>
  </div>
  <div class="container my-5">
      <h2 class="text-success my-5">Browse Event By City</h2>
        <div class="row">
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <i class="fa-solid fa-location-pin text-center fa-2x"></i>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">Mumbai</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <i class="fa-solid fa-location-pin text-center fa-2x"></i>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">Patna</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <i class="fa-solid fa-location-pin text-center fa-2x"></i>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">Delhi</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <i class="fa-solid fa-location-pin text-center fa-2x"></i>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">Jaipur</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <i class="fa-solid fa-location-pin text-center fa-2x"></i>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">Bhopal</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <i class="fa-solid fa-location-pin text-center fa-2x"></i>
                        <a href="advanceSearch.php" class="fs-4 mt-3 d-block">Kolkata</a>
                    </div>
                </div>
            </div>
            
            <button class="btn btn-soft-primary mt-5 w-25">Load More</button>
        </div>
  </div>
  <div class="container my-5">
        <h2 class="text-success my-5">Event Organiser</h2>
          <div class="row">
              <div class="col-2">
                  <div class="card">
                      <div class="card-body border-0 p-0">
                          <img src="./src/images/iit roorki.avif" class="img-fluid h-50" alt="">
                      </div>
                  </div>
              </div>  
              <div class="col-2">
                  <div class="card">
                      <div class="card-body border-0 p-0">
                          <img src="./src/images/iit roorki.avif" class="img-fluid h-50" alt="">
                      </div>
                  </div>
              </div>      
              <div class="col-2">
                  <div class="card">
                      <div class="card-body border-0 p-0">
                          <img src="./src/images/mit.avif" class="img-fluid h-50" alt="">
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="card">
                      <div class="card-body border-0 p-0">
                          <img src="./src/images/nasa.avif" class="img-fluid h-50" alt="">
                      </div>
                  </div>
              </div>  
              <div class="col-2">
                  <div class="card">
                      <div class="card-body border-0 p-0">
                          <img src="./src/images/iit roorki.avif" class="img-fluid h-50" alt="">
                      </div>
                  </div>
              </div>      
              <div class="col-2">
                  <div class="card">
                      <div class="card-body border-0 p-0">
                          <img src="./src/images/mit.avif" class="img-fluid h-50" alt="">
                      </div>
                  </div>
              </div>
              <button class="btn btn-soft-primary mt-5 w-25">Load More</button>
          </div>
  </div>
  <!-- <div class="container text-center mt-5 text-info">
    <h2 class="text-success">world's Biggest Online Single Platform for Reserch Events!</h2>
    <p>why you can find the right  opertunity in the right place with us.</p>
  </div>
  <div class="container bg-danger">
    <div class="card">
      <div class="row">
       <div class="col mx-3 mt-5 mb-4 text-center">
        <img class="bd-placeholder-img rounded-circle" width="120" height="100" src="image/motivation3.jpg" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
        <a href="advanceSearch.php"><h6>Seminar1</h6></a>
       </div>
       <div class="col mx-3 mt-5 mb-4 text-center">
        <img class="bd-placeholder-img rounded-circle" width="120" height="100" src="image/motivation3.jpg" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
        <a href="advanceSearch.php"><h6>Seminar2</h6></a>
       </div>
       <div class="col mx-3 mt-5 mb-4 text-center">
        <img class="bd-placeholder-img rounded-circle" width="120" height="100" src="image/motivation3.jpg" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
        <a href="advanceSearch.php"><h6>Seminar3</h6></a>
       </div>
      </div>
    </div>
  </div> -->
  <div class="container my-5">
    <h2 class="text-success my-5">Popular Speaker</h2>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img src="./src/images/motivation3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-success fs-3">Lorem.</p>
            <a href="advanceSearch.php" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</a>
            <br>
            <a href="advanceSearch.php" class="btn btn-soft-primary mt-3">view</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="./src/images/motivation3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-success fs-3">Lorem.</p>
            <a href="advanceSearch.php" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</a>
            <br>
            <a href="advanceSearch.php" class="btn btn-soft-primary mt-3">view</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="./src/images/motivation3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="text-success fs-3">Lorem.</p>
            <a href="advanceSearch.php" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</a>
            <br>
            <a href="advanceSearch.php" class="btn btn-soft-primary mt-3">view</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-5">
        <h4 class="text-success my-5">Upcomming Conference</h4>
          <div class="row justify-content-center align-items-center">
              <div class="col">
                  <div class="card border-0">
                      <div class="card-body p-0">
                        <span class="badge bg-primary fs-4">2022</span>
                        <span class="badge bg-primary fs-4">2023</span>
                        <span class="badge bg-primary fs-4">2024</span>
                        <span class="badge bg-primary fs-4">2025</span>
                        <span class="badge bg-primary fs-4">2026</span>
                        <span class="badge bg-primary fs-4">2027</span>
                      </div>
                  </div>
              </div>  
          </div>
  </div>
  <!-- subscirbe section -->
  <section class="bg-light py-4">
    <div class="container my-5">
      <div class="row justify-content-center align-items-center">
        <div class="col-6">
          <h1 class="text-success">Subscribe</h1>
          <h6>Get Updates & More so..please subscribe for more details!!</h6>
          <h3>Thoughtful thoughts to your inbox</h3>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body p-5">
              <form class="row g-3 needs-validation">
                    <div class="mb-1">
                      <label class="form-label">Full Name</label>
                      <input type="text" class="form-control" required>
                    </div>
                     <div class="mb-1">
                      <label class="form-label">Email Id</label>
                      <input type="email" class="form-control" required>
                    </div>
                    <div class="mb-1">
                      <label class="form-label">Keyword</label>
                      <br>
                      <div class="form-check form-check-inline  mb-1">
                        <input class="form-check-input" type="checkbox" value="" id="Engineering">
                        <label class="form-check-label" for="Engineering">Engineering</label>
                      </div>
                      <div class="form-check form-check-inline  mb-1">
                        <input class="form-check-input" type="checkbox" value="" id="Mathematics">
                        <label class="form-check-label" for="Mathematics">Mathematics</label>
                      </div>
                      <div class="form-check form-check-inline  mb-1">
                        <input class="form-check-input" type="checkbox" value="" id="Business">
                        <label class="form-check-label" for="Business">Business</label>
                      </div>
                      <div class="form-check form-check-inline  mb-1">
                        <input class="form-check-input" type="checkbox" value="" id="lifescience">
                        <label class="form-check-label" for="lifescience">Life Science</label>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-outline-primary">view more</button>
                    <a href="#" type="submit" class="btn btn-soft-danger">Subscirbe</button>
                  </form>
                </div>
            </div>
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