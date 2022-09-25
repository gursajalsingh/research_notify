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
                    <h1 class="display-4 text-center text-success">Frequently Asked Query</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
               <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Is the organisation is govermental approved?
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aperiam nemo, suscipit eaque sint vitae. Natus repellat pariatur ex aliquam beatae amet, blanditiis minus ea dolorum harum architecto voluptas sunt.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            This site has authentic info?
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde animi soluta quidem voluptatum voluptas! Eos, expedita pariatur. Quas iste atque, a, consequuntur modi eveniet ea saepe fugit ullam explicabo mollitia?</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Can I register for conferences over here?
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatibus possimus saepe earum dolorum, voluptate explicabo quod ad reprehenderit, non similique eos molestias quisquam veniam eligendi nemo, est cum cumque..</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Is this contain all confrences /events in my city?
                        </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatibus possimus saepe earum dolorum, voluptate explicabo quod ad reprehenderit, non similique eos molestias quisquam veniam eligendi nemo, est cum cumque..</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Is feedback given by the attenders?
                        </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatibus possimus saepe earum dolorum, voluptate explicabo quod ad reprehenderit, non similique eos molestias quisquam veniam eligendi nemo, est cum cumque..</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                       Should my information have privacy?
                        </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatibus possimus saepe earum dolorum, voluptate explicabo quod ad reprehenderit, non similique eos molestias quisquam veniam eligendi nemo, est cum cumque..</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-0">
                    <div class="card-body">
                        <h4 class="text-success">Have another question? Ask below</h4>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <!-- <i class="fa fa-user"></i> -->
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="question" class="form-label">Question</label>
                                <textarea class="form-control" id="question" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-soft-danger">Send Question</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
</body>

</html>