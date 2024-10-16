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
      <link rel="stylesheet" href="../css/index.search.css">
      <link rel="stylesheet" href="../Css/index.body.css">  
      <link rel="stylesheet" href="../Css/products.cards.css">
      <link rel="stylesheet" href="../css/index.footer.css">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
      <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
      <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

      <title>BunnyBuy</title>
      <link rel="shortcut icon" href="/Img/logo.png">

  </head>

  <body>
  <header>
        <div class="header-content">
            <a href="../Html/index.html" class="logo"><img src="/Img/logo.png" alt="logo"><span>BunnyBuy</span></a>
            <div class="navbar">
                <a href="../Html/index.html" class="navbar-btn">Home<i class="ri-arrow-down-wide-fill"></i></i></a>
                <a href="../Html/index.products.php" class="navbar-btn">Products<i class="ri-arrow-down-wide-line"></i></a>
                <a href="#" class="navbar-btn">Accessories<i class="ri-arrow-down-wide-line"></i></a>
                <a href="#" class="navbar-btn">Announcements<i class="ri-arrow-down-wide-line"></i></a>
            </div>

            <div class="main">
                <a id="signUpButton" href="#" class="user-icon"><i class="ri-user-line"></i></a>
                <a href="#" class="user-icon"><i class="ri-shopping-cart-line"></i></a>
                
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </div>
    </header>
    
    <div class="card-pag-primary">
        <div class="products-all-page">
            <div class="filter-container">
                    <form method="get" autocomplete="on">
                        <fieldset>
                            <legend class="sidebar-nav-layout"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5z"/>
                                </svg>Filters
                            </legend>
                            <label for="sort">Select:</label>
                                <select name="sort" id="sort">
                                    <option value="asc">Price: Low to High</option>
                                    <option value="desc">Price: High to Low</option>
                                </select>
                            <label class="checkbox-stye"><input type="checkbox" class="check-mark" name="checkbox1" value="60%"><span>60%</span></label>
                            <label class="checkbox-stye"><input type="checkbox" class="check-mark" name="checkbox2" value="65%"><span>65%</span></label>
                            <label class="checkbox-stye"><input type="checkbox" class="check-mark" name="checkbox3" value="75%"><span>75%</span></label>
                            <label class="checkbox-stye"><input type="checkbox" class="check-mark" name="checkbox4" value="TKL"><span>TKL</span></label>
                            <label class="checkbox-stye"><input type="checkbox" class="check-mark" name="checkbox5" value="full-size"><span>Full-Size</span></label>
                            <input type="submit" value="Filter">
                        </fieldset>
                    </form>
                </div>
                <div class="card-pag-primary-container">
                    <div class="row">
                        <div class="search_container">
                            <form action="../php/search.php" method="GET" class="search_box">
                                <input type="text" name="query" class="input" placeholder="search...">
                                <div class="btn_common">
                                    <i class="fas fa-search"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="cards-grid">
                                                <?php
                            include('../php/config.php');

                            $whereClause = "";

                            if(isset($_GET['query'])) {
                                $search_query = $_GET['query'];
                                $whereClause .= " product_name LIKE '%$search_query%' AND";
                            }

                            if(isset($_GET['checkbox1'])) {
                                $whereClause .= " category = '60%' OR";
                            }

                            if(isset($_GET['checkbox2'])) {
                                $whereClause .= " category = '65%' OR";
                            }

                            if(isset($_GET['checkbox3'])) {
                                $whereClause .= " category = '75%' OR";
                            }

                            if(isset($_GET['checkbox4'])) {
                                $whereClause .= " category = 'TKL' OR";
                            }

                            if(isset($_GET['checkbox5'])) {
                                $whereClause .= " category = 'full-size' OR";
                            }

                            $whereClause = rtrim($whereClause, " OR");

                            $sort = isset($_GET['sort']) ? $_GET['sort'] : 'asc'; 

                            $sql_product = "SELECT * FROM products";

                            if(!empty($whereClause)) {
                                $sql_product .= " WHERE" . $whereClause;
                            }

                            $sql_product .= " ORDER BY price $sort";

                            $sql_resultado = $conn->query($sql_product);

                            if ($sql_resultado->num_rows > 0) {
                                while ($row = $sql_resultado->fetch_assoc()) {
                                    ?>
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="../Img/img-products/<?php echo $row['img']?>" alt="img_products">
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">
                                                <p><?php echo $row['product_name'] ?></p>
                                            </div>
                                            <div class="card-specs">
                                                <div class="specs">
                                                    <div class="specs-img-info"><img src="../Img/img-specs/<?php echo $row['img_specs1'] ?>" alt="img_specs1"></div>
                                                    <div class="specs-name"><?php echo $row['specs1'] ?></div>
                                                </div>
                                                <div class="specs">
                                                    <div class="specs-img-info"><img src="../Img/img-specs/<?php echo $row['img_specs2'] ?>" alt="img_specs2"></div>
                                                    <div class="specs-name"><?php echo $row['specs2'] ?></div>
                                                </div>
                                                <div class="specs">
                                                    <div class="specs-img-info"><img src="../Img/img-specs/<?php echo $row['img_specs3'] ?>" alt="img_specs3"></div>
                                                    <div class="specs-name"><?php echo $row['specs3'] ?></div>
                                                </div>
                                                <div class="vertical-line"></div>
                                                <div class="specs">
                                                    <div class="specs-img-info"><img src="../Img/img-specs/info-price-arrow.svg" alt="price"></div>
                                                    <div class="specs-name price"><?php echo $row['price']?> €</div>
                                                </div>
                                            </div>
                                            <div class="card-buttons">
                                                <a class="card-learn-more" href="#">Learn More<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right icon1" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                                </svg></a>                
                                                <a class="card-buy" href="#">Order now
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill icon2" viewBox="0 0 16 16">
                                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z"/>
                                                    </svg></a>
                                            </div>            
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "No products found.";
                            }
                            ?>

                    </div>
                </div>
        </div>
    </div>

    <footer>
        <div class="footers-grid">
            <div class="footer-left">
                <div class="footer-name">
                    <h1>BunnyBuy</h1>
                </div>
                <div class="footer-contacts">
                    <div class="footer-question-mark">
                        Questions, feedback or need help?
                    </div>
                    <div class="footer-email">
                        <a href="#">social@bunnybuy.io</a>
                    </div>
                </div>
                <div class="footer-social-midia">
                        <a href="#"><img class="footer-social-midia-img" src="../img/img-social-midia/discord.svg" alt="discord"></a>
                        <a href="#"><img class="footer-social-midia-img" src="../img/img-social-midia/github.svg" alt="github"></a>
                        <a href="#"><img class="footer-social-midia-img" src="../img/img-social-midia/instagram.svg" alt="instagram"></a>
                        <a href="#"><img class="footer-social-midia-img" src="../img/img-social-midia/reddit.svg" alt="reddit"></a>
                        <a href="#"><img class="footer-social-midia-img" src="../img/img-social-midia/twiter.svg" alt="twiter"></a>
                </div>
            </div>
            <div class="footer-right">
                <div class="colum">
                    <a href="../Html/index.html">Home</a>
                    <a href="#">Updates</a>
                    <a href="#">BunnyBuy web</a>
                    <a href="#">Delivery movement</a>
                    <a href="#">Github</a>
                    <a href="#">About us</a>
                    <a href="#">Contact us</a>
                    <a href="#">Press & marketing</a>
                    <a href="#">Careers</a>
                </div>
                <div class="colum">
                    <a href="#">Account</a>
                    <a href="#">Order status</a>
                    <a href="#">Help</a>
                    <a href="#">Privacy policy</a>
                    <a href="#">Customer review policy</a>
                    <a href="#">Shipping policy</a>
                    <a href="#">Warranty & Return policy</a>
                    <a href="#">Legal notice</a>
                    <a href="#">特定商取引法に基づく表記</a>
                </div>
            </div>
        </div>
        <div class="footer-all-rights-reserved">
            © <span class="copyright-year">2024</span> BunnyBuy technologies.  All rights reserved.
        </div>
    </footer>
    
    <script type="text/javascript" src="../JavaScript/products.filter.js"></script>
    <script src="../JavaScript/user-icon.js"></script>

  </body>
  </html>