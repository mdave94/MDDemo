<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>MD</title>
      <link rel="stylesheet" href="welcomePageCSS.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="welcomePageJS.js"></script>
</head>
<body>

        <?php 
            include('inc/navbar.php');
        ?>


              
<!-- ########################### ABOUT ME section ####################################### -->
        <section class="aboutme_section">
                <div class="aboutme row">
                     <h2> ABOUT ME</h2>
                <div style="display:flex">
                    <div class="icon-wrapper col-6 col-right" >
                        <img src="inc/web-development-2.png"  />
                    </div>
                    <div class="text_aboutme col-left">
                        <h3>Molnár Dávid</h3>
                        <p>
                            I'm a Junior Web developer with some real life projects.
                            My currently stack is : JavaScript,HTML5,CSS3,Laravel ( main web :D ).
                            I want be more efficient with C# and Java. 
                            And I want just try Python, ( for fun ).
                        </p>
                    </div>
                 </div>
                </div>
            </section>
<!-- ########################### ABOUT ME section END ####################################### -->
            <section class="projects_section">
             <h2>   MY PROJECTS</h2>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="inc/jobtraining.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Portfolio page with Adam Martona</p>
                    </div>
                </div>


                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="inc/jobtraining.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Portfolio page with Adam Martona</p>
                    </div>
                </div>
            </section>

         

</body>
</html>