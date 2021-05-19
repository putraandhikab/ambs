<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/profile.css">
    
    <!-- Link bootstrap template -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" /> -->

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="wrap">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand-dark" href="#">AMBS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item active mr-3">
                        <a class="nav-link" href="<?= base_url() ?>homelogin">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active mr-3">
                        <a class="nav-link" href="#">Library <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active mr-3">
                        <a class="nav-link" href="<?= base_url() ?>mynotes">My Notes <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active mr-3">
                        <a class="nav-link" href="<?= base_url() ?>profile">Profile <span class="sr-only">(current)</span></a>
                    </li>
                    
                </ul>
                <a href="<?= base_url('utama/logout'); ?>" class="btn btn-danger my-2 my-sm-0">Log Out</a>
            </div>
        </div>
    </nav>

    <!-- Profile -->
    <div class="text-center">
            <h2 class="section-heading mt-4">Profile</h2><br><br>
    </div>

    <div class="container-profile">
        <div class="profilepict">
            <img src="<?= base_url() ?>assets/img/profilepict.jpg">
            <a href="">Change Profile Picture</a>
        </div>
        <div class="formprofile">
            <form action="<?= base_url() ?>profile/edit" method="post">
            <div class="form-group">
                <label for="exampleInputPassword1">Name  :</label>
                <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $this->session->userdata('fullname'); ?>" name="fullname">
                <input type="hidden" class="form-control" id="exampleInputPassword1" value="<?= $this->session->userdata('id_user'); ?>" name="id_user">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Username  :</label>
                <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $this->session->userdata('username'); ?>" name="username">
            </div>
            <a href="">Change Password</a><br>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left cr">Copyright © AMBS 2021</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/putra_andhika7"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcbdn.com/ootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Link bootstrapjs template -->
        <!-- Bootstrap core JS-->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- Third party plugin JS-->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> -->
        <!-- Contact form JS-->
        <!-- <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script> -->
        <!-- Core theme JS-->
        <script src="<?= base_url() ?>assets/js/scripts.js"></script>
  </body>
</html>