<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>This is Earl's Food and Whatnot</title>
</head>
<body>

        <!-- Header -->
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><a href="#">This is Earl's Food and Whatnot</a></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">This is Earl's Food and Whatnot</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about-section">About</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="search">
                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>

                    <div class="search-field">
                        <input type="text" id="searching" placeholder="Search...">
                        <i class='bx bx-search'></i> 
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Main, Home Page -->
     <div class="signup-holder">
     <div class="login">
        <h1 class="text-center">Sign up</h1>
        <br><br>
        <form action="signup.php" method="POST" class="text-center">
            Full name: <br>
            <input type="text" name="full_name" placeholder="Enter username" required> <br>
            Password: <br>
            <input type="password" name="password" placeholder="Enter Password" required> <br>
            Contact Number: <br>
            <input type="tel" name="contact_number"  placeholder="Enter Contact Number" required> <br>
            <input type="submit" name="submit" value="Login" class="btn-primary">
        </form>
    </div>
     </div>
    <footer class="footer-container">
    <div class="footer-content">
        <div class="footer-main">
            <div class="footer-logo-section">
                <a href="#" class="footer-logo">
                    <img src="cssbg/earlogo.png" class="footer-logo-img" alt="earls logo" />
                    <span class="footer-logo-text">This is Earls Food and Whatnot</span>
                </a>
            </div>
            <div class="footer-links">
                <div>
                    <h2 class="footer-heading">Site links</h2>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <a href="" class="footer-link">About</a>
                        </li>
                        <li class="footer-list-item">
                            <a href="" class="footer-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="footer-heading">Follow us</h2>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <a href="https://www.facebook.com/thisisearls" class="footer-link">Facebook</a>
                        </li>
                        <li class="footer-list-item">
                            <a href="https://www.instagram.com/thisisearls_emmitts/" class="footer-link">Instagram</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="footer-heading">FAQS</h2>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <a href="#" class="footer-link">Privacy Policy</a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-link">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="footer-divider" />
        <div class="footer-bottom">
            <span class="footer-copy-text">© 2024 <a class="footer-link">This is Earl's Food and Whatnot™</a>. All Rights Reserved.</span>
            <div class="footer-social-links">
                <a href="#" class="social-icon">
                    <i class="bx bxl-facebook"></i>
                    <span href="https://www.facebook.com/thisisearls" class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="social-icon">
                    <i class="bx bx-map-alt"></i>
                    <span href="https://www.google.com/maps/place/ThisisEarl's+Food+%26+Whatnot/@14.1122358,122.9513864,17z/data=!3m1!4b1!4m6!3m5!1s0x3398af7c2ca90c05:0x8450d4f8ded80e49!8m2!3d14.1122306!4d122.9539613!16s%2Fg%2F11c1qw0d4h?entry=ttu&g_ep=EgoyMDI0MTIwOS4wIKXMDSoASAFQAw%3D%3D"" class="sr-only">Location</span>
                </a>
                <a href="#" class="social-icon">
                    <i class="bx bxl-instagram"></i>
                    <span href="https://www.instagram.com/thisisearls_emmitts/" class="sr-only" >instagram page</span>
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="functions/javascript/script.js"></script>
</body>
</html>

<?php
include "functions/php/connection.php";

if (isset($_POST["submit"])) {
    $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "INSERT INTO users (full_name, contact_number, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $full_name, $_POST['contact_number'], $password);

    if ($stmt->execute()) {
        ?>
        <script type="text/javascript">
        alert("User added successfully!");
        window.location = "login.php";
        </script>
        <?php
        exit();
    } else {
        echo "<div class='alert alert-danger'>Incorrect Username or Password</div>";
    }
    $stmt->close();
    $conn->close();
}

?>