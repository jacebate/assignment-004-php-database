<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);

if( isset($_POST[ 'submitButton']) )
{
    // 1.fetch form data
    
    $email=$_POST["email"];
    
    // 2.submit form data
    $insertData= mysqli_query($conn,"INSERT INTO aboutus(email)
    VALUES('$email')");
}
if(isset($insertData))
{
    echo "Data submitted successfully .";
}
else{
    echo "Error occured";
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
        <title>aboutus</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
         <!-- navigation bar here -->
             <?php include('navbar.php')?>
         <!-- end navigation bar -->
    
         <main class="p-5 mt-4 mb-4 bg-light">
            <h1>About Us</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptas similique, animi eum illum qui, delectus nisi, impedit debitis sed explicabo sunt provident pariatur. Reprehenderit nostrum tenetur perferendis excepturi quaerat incidunt, dolor sint maiores cum quae, dicta, quas suscipit sit dolores molestias soluta cupiditate ex animi debitis impedit rerum amet unde. Nulla ratione in sint officiis reprehenderit dolorum dignissimos enim quo recusandae assumenda impedit, magnam aliquid. Ipsa recusandae cumque, vel voluptatibus, esse natus velit laudantium eligendi voluptates nam in veritatis voluptas. Adipisci totam quo voluptatibus fugit laborum, sed provident culpa? Reprehenderit vitae repellendus quisquam! Et, nesciunt distinctio. Amet, omnis molestiae.
            </p>
        </main>
        <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <table>
                    <h1>Our Program</h1>
                    <tr>
                        <td>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ea velit perferendis at deleniti facilis sit architecto sint quibusdam impedit assumenda tenetur consectetur laborum nemo nihil, enim deserunt vero repellendus commodi quasi voluptate! Qui suscipit delectus omnis error minus blanditiis, soluta voluptas consequuntur magnam ab repellat dolorum ipsum architecto laudantium.
                            </p>
                        </td>

                        <td>
                            <img src="4.jfif" alt="Good image">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
            <h1>The Programs</h1>
            
            <div class="row m-3">
                <div class="card-body col-lg-4 shadow-lg">
                    <h2>Skill Discovery</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, id necessitatibus! Soluta, dignissimos alias quos possimus quisquam dolorem esse maiores?
                    </p>
                    <button class="btn btn-primary">View Details</button>
                </div>
                <div class="card-body col-lg-4 shadow-lg">
                    <h2>Upskilling Program</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, id necessitatibus! Soluta, dignissimos alias quos possimus quisquam dolorem esse maiores?
                    </p>
                    <button class="btn btn-primary">View Details</button>
                </div>
                <div class="card-body col-lg-4 shadow-lg">
                    <h2>Path finding Program</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, id necessitatibus! Soluta, dignissimos alias quos possimus quisquam dolorem esse maiores?
                    </p>
                    <button type="button" class="btn btn-primary">View Details</button>
                </div>


            </div>
        </div>
        <div class="text-center text-secondary mt-4">
                <h3>Subscribe to get information,latest news about<br>
                Zalego Academy
                </h3>
        </div>
        <form action="about.php" method="POST">
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
                        <button name='submitButton' class="btn btn-primary">Subscribe</button>

                    </td>
                </tr>
            </table>
        </form>



    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>

    </body>
</html>