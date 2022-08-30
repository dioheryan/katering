<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>

    <!-- Page level custom scripts -->

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Prima Ratu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Simulasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                </ul>
            </div>
            <div class="inline">
                <a href="" class="btn btn-outline-light">Login</a>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-info py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-3">
                        <img src="<?= base_url('assets/'); ?>img/LogoPerusahaan1.png" alt="" class="my-3" width="200px">
                        <h1 class="font-weight-bolder text-white mb-2">PT. Prima Ratu Katering</h1>
                        <p class="text-white mb-4" style="font-size:20px;">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container my-5">
            <div class="row">
                <div class="col">
                    <img src="<?= base_url('assets/'); ?>img/Paket1.png" alt="" width="100%" class="my-3">
                    <h2 class="h4 font-weight-bolder">Paket 1</h2>
                    <p style="text-align:justify;">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                    </a>
                </div>
                <div class="col">
                    <img src="<?= base_url('assets/'); ?>img/Paket2.png" alt="" width="100%" class="my-3">
                    <h2 class="h4 font-weight-bolder">Paket 2</h2>
                    <p style="text-align:justify;">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                    </a>
                </div>
                <div class="col">
                    <img src="<?= base_url('assets/'); ?>img/Paket3.png" alt="" width="100%" class="my-3">
                    <h2 class="h4 font-weight-bolder">Paket 3</h2>
                    <p style="text-align:justify;">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing section-->
    <section class="bg-light py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="font-weight-bolder">Paket makanan</h2>
                <p class="lead mb-0">With our no hassle pricing plans</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <!-- Pricing card free-->
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <div class="text-uppercase font-weight-bold text-center mb-2">Paket 1</div>
                            <div class="mb-3">
                                <img src="<?= base_url('assets/'); ?>img/Paket1.png" class="card-img-top" alt="..." width="100%" height="50%">
                            </div>
                            <div class="mb-3">
                                <span class="font-weight-normal" style="font-size:30px;">Rp. 15.000</span>
                                <span class="text-muted">/ pcs.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>Daftar Makanan :</strong>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    5GB storage
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Unlimited public projects
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Community access
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Unlimited private projects
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Dedicated support
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Free linked domain
                                </li>
                                <li class="text-muted">
                                    <i class="bi bi-x"></i>
                                    Monthly status reports
                                </li>
                            </ul>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                        </div>
                    </div>
                </div>
                <!-- Pricing card pro-->
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <div class="text-uppercase font-weight-bold text-center mb-2">Paket 2</div>
                            <div class="mb-3">
                                <img src="<?= base_url('assets/'); ?>img/Paket2.png" class="card-img-top" alt="..." width="100%" height="50%">
                            </div>
                            <div class="mb-3">
                                <span class="font-weight-normal" style="font-size:30px;">Rp. 17.500</span>
                                <span class="text-muted">/ pcs.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>Daftar Makanan :</strong>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    5GB storage
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Unlimited public projects
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Community access
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Unlimited private projects
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Dedicated support
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Free linked domain
                                </li>
                                <li class="text-muted">
                                    <i class="bi bi-x"></i>
                                    Monthly status reports
                                </li>
                            </ul>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                        </div>
                    </div>
                </div>
                <!-- Pricing card enterprise-->
                <div class="col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="text-uppercase font-weight-bold text-center mb-2">Paket 3</div>
                            <div class="mb-3">
                                <img src="<?= base_url('assets/'); ?>img/Paket3.png" class="card-img-top" alt="..." width="100%" height="50%">
                            </div>
                            <div class="mb-3">
                                <span class="font-weight-normal" style="font-size:30px;">Rp. 15.000</span>
                                <span class="text-muted">/ pcs.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>Daftar Makanan :</strong>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    5GB storage
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Unlimited public projects
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Community access
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Unlimited private projects
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Dedicated support
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Free linked domain
                                </li>
                                <li class="text-muted">
                                    <i class="bi bi-x"></i>
                                    Monthly status reports
                                </li>
                            </ul>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section-->
    <section class="py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="font-weight-bolder">Testimonial Special Event</h2>
                <p class="lead mb-0">Customer</p>
            </div>
            <div class="card-deck mb-4">
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/Testi1.png" class="card-img-top" alt="..." width="100%" height="50%">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/Testi2.png" class="card-img-top" alt="..." width="100%" height="50%">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/Testi3.png" class="card-img-top" alt="..." width="100%" height="50%">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                <div class="ms-4">
                                    <img src="<?= base_url('assets/'); ?>img/TestiLandscape.png" alt="" class="my-3" width="100%">
                                    <p class="mb-1">Thank you for putting together such a great product. We loved working with you and the whole team, and we will be recommending you to others!</p>
                                    <div class="small text-muted">- Client Name, Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-info">
        <div class="container px-5">
        <div class="row gx-5">
            <div class="col-8">
                    <h4 class="text-white">
						Contact Us
					</h4>

					<ul class="list-unstyled mb-4">
                        <li class="mb-2 text-white">
                            <i class="fas fa-map-marker-alt mr-2 text-dark"></i>
                            Jalan Veteran Gang Manggis No 409 Purwakarta
                        </li>
                        <li class="mb-2 text-white">
                            <i class="fas fa-phone-alt mr-2 text-dark"></i>
                            08119784023 / 081802096633
                        </li>
                        <li class="mb-2 text-white">
                            <i class="fas fa-envelope mr-2 text-dark"></i>
                            ptprimaratucatering@gmail.com
                        </li>
                        
                    </ul>
            </div>
            <div class="col-4">
                <p class="m-0 text-center text-white">Copyright &copy; Prima Ratu Katering 2022</p>
            </div>
        </div>    
        </div>
    </footer>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>