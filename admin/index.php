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
            <a class="navbar-brand" href="#page-top">Administration Page</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#students">Students</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                href="#faculty">Faculty</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#courses">Courses</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                href="#departments">Departments</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#faculty-registration">Faculty Registration</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#student-registration">Student Registration</a></li>
                            <li class="nav-item mx-0 mx-lg-1">
</li>

                </ul>
            </div>
        </div>
    </nav>
    <section class="page-section   mb-0 mt-15" id="students">
        <div class="container pt-5">
            <h2 class="page-section-heading text-center text-uppercase ">Students</h2>
            <div class="divider-custom ">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row" id="student-list">
            </div>
        </div>
    </section>
    <section class="page-section bg-primary text-white mb-0 mt-15" id="faculty">
        <div class="container pt-5">
            <h2 class="page-section-heading text-center text-uppercase text-white">Faculty</h2>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row" id ="faculty-list">
                
            </div>
        </div>
    </section>
    <section class="page-section   mb-0 mt-15" id="courses">
        <div class="container pt-5">
            <h2 class="page-section-heading text-center text-uppercase ">Courses</h2>
            <div class="divider-custom ">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row" id ="courses-list">
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
                    <p class="lead">Student ID:</p>
                    <p class="lead">Student Name:</p>
                    <p class="lead">Year of Enrollment:</p>
                    <p class="lead">Student Major:</p>
                    <p class="lead">Cumulative GPA:</p>
                    <p class="lead">Year of Graduation:</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section   mb-0 mt-15" id="departments">
        <div class="container pt-5">
            <h2 class="page-section-heading text-center text-uppercase ">Deparments</h2>
            <div class="divider-custom ">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row" id="department-list">
                
            </div>
        </div>
    </section>
    <section class="page-section bg-primary text-white" id="faculty-registration">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Register Faculty</h2>
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" method="POST" action="handle_faculty_registration.php">
                    <div class="form-floating mb-3">
                        <input class="form-control" name="Fac_id" type="text" placeholder="Enter faculty ID..." />
                        <label for="Fac_id">Faculty ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="Fac_name" type="text" placeholder="Enter faculty name..." />
                        <label for="Fac_name">Faculty Name</label>
                    </div>
                    <div class="form-floating mb-3">
    <input class="form-control" name="Fac_DOB" type="text" placeholder="Enter date of birth..." />
    <label for="Fac_DOB">Date of Birth</label>
</div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="qualification" type="text" placeholder="Enter qualification..." />
                        <label for="qualification">Qualification</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="department" type="text" placeholder="Enter department..." />
                        <label for="department">Department</label>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                        </div>
                    </div>

                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="student-registration">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Register Student</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" method="POST" action="handle_student_registration.php">
                    <div class="form-floating mb-3">
                        <input class="form-control" name="Stu_id" type="text" placeholder="Enter student ID..." required />
                        <label for="Stu_id">Student ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="Stu_name" type="text" placeholder="Enter student name..." required />
                        <label for="Stu_name">Student Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="Stu_year_of_enrollment" type="text" placeholder="Enter year of enrollment..." required />
                        <label for="Stu_year_of_enrollment">Year of Enrollment</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="Stu_major" type="text" placeholder="Enter major..." required />
                        <label for="Stu_major">Major</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="CGPA" type="text" placeholder="Enter CGPA..." required />
                        <label for="CGPA">CGPA</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="year_of_graduation" type="text" placeholder="Enter year of graduation..." required />
                        <label for="year_of_graduation">Year of Graduation</label>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include '../courses.php'; ?>
    <?php include '../faculty.php'; ?>
    <?php include '../students.php'; ?>
    <?php include 'departments.php'; ?>
    <script src="../js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>