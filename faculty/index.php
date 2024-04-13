<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Education Management System</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Faculty Page</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#courses">Courses</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#personal-info">Personal Info</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="page-section   mb-0 mt-15" id="courses">
        <div class="container pt-5"> 
            <h2 class="page-section-heading text-center text-uppercase ">Courses</h2>
            <div class="divider-custom ">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row" id="courses-list">
                
            </div>
        </div>
    </section>
    <section class="page-section bg-primary text-white mb-0 mt-15" id="personal-info">
        <div class="container pt-5"> 
            <h2 class="page-section-heading text-center text-uppercase text-white">Personal Information</h2>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <p class="lead">Faculty ID:</p>
                    <p class="lead">Faculty Name:</p>
                    <p class="lead">Date Joined:</p>
                    <p class="lead">Qualifications:</p>
                    <p class="lead">Department:</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>
    <?php include '../courses.php'; ?>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>