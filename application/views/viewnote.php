<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/viewnote.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Rich Text Editor -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/summernote/summernote-bs4.css">
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
                    <button class="btn btn-danger my-2 my-sm-0" type="submit">Log Out</button>
                </div>
            </div>
        </nav>

        <!-- Form -->
        <div class="container-form">
            <form action="<?= base_url() ?>mynotes/edit" method="post">
                <?php foreach($note as $n) { ?>
                    <div class="title-category">
                        <div class="form-group title row">
                            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" value="<?= $n->judul ?>" name="judul">
                                <input type="hidden" class="form-control" id="inputTitle" value="<?= $n->id ?>" name="id">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Category</label>
                            </div>
                            <select class="input-small" id="inputGroupSelect01" name="kategori">
                                <option selected><?= $n->kategori ?></option>
                                <option value="math">Math</option>
                                <option value="science">Science</option>
                                <option value="computer">Computer</option>
                            </select>
                        </div>
                    </div>
                    <div class="delete">
                        <a href="<?= base_url() ?>mynotes/delete/<?= $n->id ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                    </div>
                    <div class="notearea">
                        <textarea name="isi" id="summernote" value="<?= $n->isi ?>" cols="30" rows="10"><?= $n->isi ?></textarea>
                    </div>
                    <div class="formbtn">
                        <a href="<?= base_url() ?>mynotes" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                <?php } ?>
            </form>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?= base_url() ?>assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?= base_url() ?>assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url() ?>assets/js/scripts.js"></script>
    <!-- Rich Text Editor JS -->
    <script src="<?= base_url() ?>assets/summernote/summernote-bs4.js"></script>
    <script>
        $('#summernote').summernote();
    </script>
</body>
</html> 