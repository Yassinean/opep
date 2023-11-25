<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/7ec32a8049.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-content">
                <div class="logo">
                    <a href="#"><img src="img/logo.png" width="50%" alt=""></a>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="signup.php">signup</a></li>
                    <li><a href="signin.php">Login</a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
        </nav><br><br><br><br><br><br><br><br>


        <script>
            let nav = document.querySelector("nav");
            window.onscroll = function () {
                if (document.documentElement.scrollTop > 20) {
                    nav.classList.add("sticky");
                } else {
                    nav.classList.remove("sticky");
                }
            }
        </script>

</body>

</html>