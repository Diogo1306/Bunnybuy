<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../css/index.header.css">
    <link rel="stylesheet" href="../Css/index.sign-up.css">  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>BunnyBuy</title>
    <link rel="shortcut icon" href="/Img/logo.png">

</head>

<body>

<header>
    <div class="header-content">
        <a href="#" class="logo"><img src="/Img/logo.png" alt="logo"><span>BunnyBuy</span></a>
        <div class="navbar">
            <a href="../Html/index.html" class="navbar-btn">Home<i class="ri-arrow-down-wide-fill"></i></a>
            <a href="../Html/index.products.php" class="navbar-btn">Products<i class="ri-arrow-down-wide-line"></i></a>
            <a href="#" class="navbar-btn">Accessories<i class="ri-arrow-down-wide-line"></i></a>
            <a href="#" class="navbar-btn">Announcements<i class="ri-arrow-down-wide-line"></i></a>
        </div>

        <div class="main">
            <a href="../Html/index.sign-up.php" class="user-icon"><i class="ri-user-line"></i></a>
            <a href="#" class="user-icon"><i class="ri-shopping-cart-line"></i></a>
            
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </div>
</header>
<div class="sign-up">
    <div class="sign-up-box">
        <div class="title-sign-up">Create Account</div>
        <form action="../php/config.php" method="post">
        <div class="from-container-name">
                <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="from-container-email">
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
            </div>
            <div class="from-container-password">
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<script src="../JavaScript/user-icon.js"></script>
</body>
</html>
