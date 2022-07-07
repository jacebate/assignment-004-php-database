



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <title>enrollment</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Zalego Academy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                    <div class="navbar-nav">
                            <a href="index.php" class="nav-link">Home</a>
                            <a href="about.php" class="nav-link">About Us</a>
                            <a href="enroll.php" class="badge bg-primary nav-link active">Register now</a>
                    </div>
                </div>
                    
            </div>
        </nav>
        <main class="bg-light text-info mt-4 p-5">
            <div class="container-fluid">
                <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
                <ul style="list-style-type:none ;" class="text-dark">
                    <li>
                            <span><i class="fa fa-calendar-days "></i></span>
                            <span>20th July 2022</span>
                    </li>
                    <li>
                            <span><i class="fa fa-map-marker "></i></span>
                            <span>Zalego Academy,<br>Devan Plaza</span>
                    </li>
                </ul>
            </div>
        </main>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Looking for a place to kickstart your career in Technology?<br>
                    Whether you're a local, new in town or just crusing through we,ve got<br>
                    loads of great tips and events for you.
                    </p>
                    <h3 class="text-dark">Sign up today</h3>
                </div>
            </div>

            <!-- <?php include('enrollprocess.php')?> -->

            <div class="container-fluid shadow p-5">
            <form action="enroll.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Enter you full name">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="tell" name="phonenumber" class="form-control" placeholder="+2547...">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Please enter your email">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="gender" class="form-label">What's your gender</label>
                        <select name="gender" class="form-select" aria-label="What's your gender" >
                            <option selected>--Select your gender--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p>In order to complete your registration to the bootcamp, you are required to select one course you will be<br>
                        undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="course" class="form-label">What's your preferred course?</label>
                        <select name="course" class="form-select" aria-label="courses">
                            <option selected>--Select your course--</option>
                            <option value="Web Design">Web Design</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Data Analysis">Data Analysis</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            You agree by providing your information you understand all our
                            data privacy and protection policy<br> outlined in our Terms & conditon
                            and the Privacy Policy statements
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-check">
                        <label for="invalidCheck" class="form-check-label">
                            Agree to terms and conditions
                        </label>
                        <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                        <div class="invalid-feedback">
                            You must agree before submitting
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary">submit application</button>
                </div>
            </form>
            </div>
        <div class="text-center text-secondary mt-4">
            <h3>Subscribe to get information,latest news about<br>
            Zalego Academy
            </h3>
        </div>

        <!-- <?php include('subscribe.php')?> -->


        <form action="enroll.php" method="POST" class="float-end">
            <table>
                <tr>
                    <td>
                        <div class="row-">
                            <div class="mb-3">
                                <label for="email" class="form-label"></label>
                                <input type="email" name="email" class="form-control" placeholder="Your email address">
                            </div>
                        </div>
            
                    </td>
                    <td>
                        <button name="subscribe" class="btn btn-primary">Subscribe</button>

                    </td>
                </tr>
            </table>
        </form>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/b3c74f86fe.js" crossorigin="anonymous"></script>

    </body>
</html>