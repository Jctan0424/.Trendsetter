<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trendsetter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--Header-->
<nav class="navbar navbar-expand-lg navbar-light bg-light header">
    <div class="container">
        <a class="navbar-brand mx-auto" href="Base.php">
            <img src="img/logotxt.png" alt="Logo" style="width: 150px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Base.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.html">Products</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="products.html">Basics</a></li>
                        <li><a class="dropdown-item" href="products.html">Jeans</a></li>
                        <li><a class="dropdown-item" href="products.html">Footwear</a></li>
                        <li><a class="dropdown-item" href="products.html">Accessories</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Support</a>
                </li>
            </ul>
            <?php
            session_start(); // Start the session
            if (isset($_SESSION['username'])) {
                // If the user is logged in, display their username
                $username = htmlspecialchars($_SESSION['username']);
                echo '<span class="navbar-text me-2">Hello, ' . $username . '!</span>';
                echo '<a class="btn btn-danger" href="logout.php">Logout</a>'; // Logout button
            } else {
                // If the user is not logged in, show login and signup buttons
                echo '<button class="btn btn-inverted me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>';
                echo '<button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>';
            }
            ?>
        </div>
    </div>
</nav>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/model.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/ca2.png" class="d-block w-100" alt="...">
      </div>
      
      <div class="carousel-item">
        <img src="img/ca33.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="overlay"></div>
      <div class="content">
          <h1>.TRENDSETTER</h1>
          <p>Your Latest Fashion in One Place</p>
      </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      
    </button>
    
  </div>

   <!--Clothes Selection-->
   <div class="container-fluid" id="cardbox">
    <div class="textbox">
        <h2>Find What You Need</h2>
    </div>
</div>


    <div class="maincard">
        <div class="card col-md-3 col-sm-3">
            <a href="products.html">
                <img src="img/Basics.jpg" class="card-img" alt="...">
                <div class="overlay">
                    <h5 class="card-title">BASICS</h5>
                </div>
            </a>
        </div>
          <div class="card col-md-3 col-sm-3">    
            <a href="products.html">            
            <img src="img/denim.jpg" class="card-img" alt="...">
            <div class="overlay"><div class="overlay-right"></div>
              <h5 class="card-title">JEANS</h5>
             </div>
            </a>
          </div>
          <div class="card col-md-3 col-sm-3">
            <a href="products.html">
            <img src="img/footwear.jpg" class="card-img" alt="...">
            <div class="overlay">
              <h5 class="card-title">FOOTWEAR</h5>
            </div>
            </a>
          </div>
          <div class="card col-md-3 col-sm-3">
            <a href="products.html">
            <img src="img/accessories.jpg" class="card-img" alt="...">
            <div class="overlay">
              <h5 class="card-title">ACCESSORIES</h5>
            </div>
             </a>
          </div>
    </div>
<hr>

    <!--Footer-->
    <footer class="footer p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/logotxt.png" alt="Logo" style="width: 250px;">
                </div>
                <div class="col-md-3">
                    <h5>About Us</h5>
                    <p style="font-size:100%">
                        Founded in 2024, Trend Setter Inc is a dynamic and inclusive fashion enterprise catering to diverse clients. Our comprehensive product line encompasses stylish offerings for teenagers, adults, and plus-size individuals alike. At Trend Setter Inc, we are committed to revolutionizing the retail experience through our user-centric approach and unwavering dedication to excellence.
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li>Email: TRENDSETTER@gmail.com</li>
                        <li>Phone: +1233567890</li>
                        <li>Address: 123 Bahay, Lilac, Marikina</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Follow Us</h5>
                    <ul class="list-inline footer-links">
                        <li class="list-inline-item">
                          <a href="#">Facebook
                                <i class="fab fa-facebook"></i>
                          </a> 
                          </li>
                        <li class="list-inline-item">
                          <a href="#">Twitter
                                <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">Instagram
                                <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">Linkedin
                                <i class="fab fa-linkedin"></i>
                          </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 .TRENDSETTER. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <ul class="list-inline footer-links">
                        <li class="list-inline-item">
                            <a href="#" class="text-black">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-black">
                                Terms of Service
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-black">
                                Sitemap
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Log In Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Log In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="logInUsername" class="form-label" >Username</label>
                            <input type="textbox" class="form-control" id="logInUsername" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="logInPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="logInpassword" name="password" required>
                        </div>
                        <div class ="links">
                            <a href ="#signupModal" class="text-black" data-bs-toggle="modal" data-bs-target="#signupModal">Dont Have an Account?</a>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-custom" name="logIn">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<!-- Sign Up Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <label for="signUpUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="signUpUsername" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="signUpEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signUpEmail" name="email" required>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="signUpPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signUpPassword" name="password" required>
                        <span class="position-absolute cursor-pointer" style="top: 75%; right: 10px; transform: translateY(-50%);" id="togglePassword">
                            <i class="fas fa-eye" id="eyeIcon"></i>
                        </span>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required>
                        <span class="position-absolute cursor-pointer" style="top: 75%; right: 10px; transform: translateY(-50%);" id="toggleConfirmPassword">
                            <i class="fas fa-eye" id="confirmEyeIcon"></i>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-custom" name="signUp">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="jscript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
