<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./conference info.css"> -->
    <script src="https://kit.fontawesome.com/b6f3a4b7b8.js" crossorigin="anonymous"></script>
    
    <title>Conference Detail</title>

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
                    <h1 class="display-4 text-center text-success">Die & Mould International Exhibition</h1>
                      <p class="text-center"><i class="fa-solid fa-clock text-danger mx-2 "></i>27 Apr,2022 - 30 Apr,2022
                          <br>
                          <i class="fa-solid fa-location-dot text-danger mx-2"></i>India,Maharashtra,Mumbai,Bombay Exhibition Center (BEC)
                      </p>
                </div>
            </div>
        </div>
    </section> 
    <div class="container mt-5">
      <div class="row">
        <div class="col-11">
          <div class="card border-0">
            <div class="card-body">
              Die & Mould India International Exhibition is an event which aims to promote training and the diffusion of knowledge relating to standards in the manufacture of Tools and Gauges to improve the standards or the connected trade therewith or with allied industries. The event focuses on promotion and encouragement of improvements in tool room industries for greater efficiency and to enhance the contribution of tool room industry to the growth and development of the Indian National Economy. Organised by TAGMA India, the event is the most popular mould & die show in India showcasing capabilities of the industry.
              <p class="mt-3 fs-5 text-success">Highlights</p>
              <ul class="list-group">
                <li class="list-group-item border-0">Seminars, workshops and exhibitions to impart useful knowledge to the tool and gauge manufacturers</li>
                <li class="list-group-item border-0">Delegations, Country Pavilion at the overseas exhibitions.
              </li>
                <li class="list-group-item border-0">Innovative products and manufacturing process covering the entire supply chain</li>
                <li class="list-group-item border-0">Event Timings for Engineering Students is from 2:00 PM to 6:00 PM(All Event Days)</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card border-0">
            <div class="card-body table-responsive">
              <table class="table table-borderless table-striped">
                  <tr>
                      <th>Date</th>
                      <th>Venue</th>
                  </tr>
                  <tr>
                    <td>27 Apr,2022 - 30 Apr,2022</td>
                    <td>Bombay Exhibition Center (BEC), Mumbai, India</td>
                </tr>

                <tr>
                    <th>Timings</th>
                    <th>Category</th>
                </tr>
                <tr>
                    <td>2:00 PM to 6:00 PM (All Event Days)</td>
                    <td>Trade Show </td>
                </tr>

                <tr>
                    <th>Organizer</th>
                    <th>Official Link</th>
                </tr>
                <tr>
                    <td>TAGMA India</td>
                    <td><button class="btn btn-group btn-outline-danger"><a>Website</a></button></td>
                </tr> 
          </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="">
            <label class="fs-5">Your Review</label>
                <div class="input-icons">
                    <i class="fa-solid fa-pen "></i>
                    <textarea class="form-control" placeholder="help other visitors by sharing your review here"></textarea>
                    <a href="" class="btn btn-soft-danger mt-4">Review</a>
                </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-6">
          <div class="card border-0">
            <div class="card-body">
              <p>Rating</p>
              <div class="fs-2 fw-normal mb-2"> 4.2<span class="fs-12">/5</span>
              <i class="fa-solid fa-star text-warning"></i>
            </div>
            <span class="text-muted d-block fs-12"><strong>18 Ratings | 8 Reviews</strong></span>
            </div>
          </div>
        </div>
        <div class="col-6">
        <div class="card border-0">
          <div class="card-body">
              <span class="text-muted fs-12">5</span>
              <div class="progress d-inline">
          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">10</div>
        </div>
        <span class="text-muted fs-12">4</span>
                      <div class="progress d-inline">
          <div class="progress-bar" role="progressbar" style="width: 44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100">4</div>
        </div>
        <span class="text-muted fs-12">3</span>
                      <div class="progress d-inline">
          <div class="progress-bar" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100">2</div>
        </div>
        <span class="text-muted fs-12">2</span>
                      <div class="progress d-inline">
          <div class="progress-bar" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">1</div>
        </div>
        <span class="text-muted fs-12">1</span>
                      <div class="progress d-inline">
          <div class="progress-bar" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">1</div>
        </div>  
      </div>
        </div>
        </div>
      </div>
    </div>
      
  <?php include 'footer.php'; ?>
  <script src="./src/vendors/jquery/dist/jquery.min.js"></script>
    <script src="./src/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="./src/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./src/js/miri-ui-kit.js"></script>
</body>
</html>