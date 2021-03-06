<?php include('process.php')?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
        <title>bootstrapgridlayout</title>
    </head>
    <body>
        <!-- navigation bar here -->
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Zalego Academy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                    <div class="navbar-nav">
                            <a href="index.php" class="nav-link active">Home</a>
                            <a href="about.php" class="nav-link">About Us</a>
                            <a href="enroll.php" class="nav-link">Register now</a>
                    </div>
                </div>
                    
            </div>
        </nav>
        <!-- end navigation bar -->
        





        <main class="p-5 mt-2 mb-4 bg-light">
            <h1>Welcome,James</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil deleniti minus ea voluptatibus provident asperiores corporis impedit, error facilis delectus voluptatum porro ratione repellendus. Eligendi numquam provident earum, velit alias dolore at quas? Excepturi doloribus molestiae eaque, labore neque velit fugit totam, iure obcaecati deleniti quam necessitatibus mollitia, perspiciatis accusantium!
            </p>
            <button class="=btn btn-primary">Learn More</button>
        </main>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h1>Header 1</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam accusantium quia nobis eaque! Omnis quas accusantium consequuntur inventore maxime. In ipsam magnam soluta iste, vel excepturi rem ex aperiam! Nisi?</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
                <div class="col-lg-4">
                    <h1>Header 2</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam accusantium quia nobis eaque! Omnis quas accusantium consequuntur inventore maxime. In ipsam magnam soluta iste, vel excepturi rem ex aperiam! Nisi?</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
                <div class="col-lg-4">
                    <h1>Header 3</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam accusantium quia nobis eaque! Omnis quas accusantium consequuntur inventore maxime. In ipsam magnam soluta iste, vel excepturi rem ex aperiam! Nisi?</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
                

            </div>
            <!-- contact us page -->
                <h1>Contact Us</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ratione facere quo reiciendis quis adipisci quae. Ullam, dolor consectetur veniam temporibus saepe voluptates quibusdam facilis asperiores distinctio aspernatur, totam quisquam!
                </p>
                <form action="index.php" method="POST">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter your first name">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Enter  your last name">
                        </div>
        
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" name="phonenumber" class="form-control" placeholder="Enter  your phone number">
                        </div>
                        <div class="row">
                                <div class="col-lg-12">
                                    <label for="message" class="form-control">Your Message</label>
                                    <textarea  cols="30" rows="10" name="message" class="form-control"> </textarea>
                                </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <button type="submit" name="submitButton" class="btn btn-info">Send a Message</button>
                    </div>
                </form>
            <!-- End contact us page -->
            <hr>
            <footer>
                &copy;Company 2022
            </footer>
        </div>


    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    </body>
</html>