<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobiverse</title>

    <!-- Bootstrap CDN -->

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/fa22768282.js"></script>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./css/samsung.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>

        <center><div class="top-nav-bar ">
            <div class="img">
                <img src="assets/logo.png" alt="">
            </div>
            <div class="nav-red">
                <a href="index.php"><img class="home-icon" src="./assets/home.png" alt=""></a>
                <div class="search-box">
                <i class="fa fa-bars" id="menu-btn"></i>
                <i class="fa fa-times" id="close-btn"></i>
                <input type="text" class="form-control" placeholder="What you looking for?">
                <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>

                <a href="login.php"><button class= "signin-btn">
                    Login
                </button></a>

               <a href="register.php"><button class= "signup-btn">
                    Sign up
                </button></a>

            </div>

        </div></center>


        <section class="header">
        <div>
        <div class="side-menu">
            <ul>
                <a href="index.php" class="a-comp"><li>Apple
                    <!-- <ul>
                        <li>iPhone 6s</li>
                        <li>iPhone XR</li>
                        <li>iPhone XS</li>
                        <li>iPhone 11 PRO</li>
                    </ul> -->
                </li></a>
                <a href="onePlus.php"><li>OnePlus
                <!-- <ul>
                        <li>OnePlus 5t</li>
                        <li>OnePlus 6</li>
                        <li>OnePlus 6t</li>
                        <li>OnePlus 7</li>
                        <li>OnePlus 7 Pro</li>
                    </ul> -->
                </li></a>
                <a href="samsung.php"><li>Samsung
                <!-- <ul>
                        <li>Galaxy s7</li>
                        <li>Galaxy s8</li>
                        <li>Galaxy s9</li>
                        <li>Galaxy s10</li>
                    </ul> -->
                </li></a>
            </ul>
            </div>

            <div class="side-menu-b">
                <div class="images-container">
                    <img src="./assets/note.jpeg" alt="" class="images">
                </div>
                <div class="content">
                    <h3 class="product-name">
                    Samsung Galaxy Note 10 (Aura Black, 256 GB)  (8 GB RAM)
                    </h3>
                    <p>
                        <ul class="info">
                            <li>8 GB RAM | 256 GB ROM |</li>
                            <li>16.0 cm (6.3 inch) Display</li>
                            <li>12MP (Dual Aperture) + 12MP + 16MP | 10MP Front Camera</li>
                            <li>3500 mAh Battery</li>
                        </ul>
                    </p>
                    <div class = "comment">
                            <form action="insert.php" method="post">
                                
                                <textarea name="txtarea" id="cmnt3" placeholder="Enter Comment Here"></textarea>
                                <input hidden type="text" id="pid3" name="phoneid" value="samsung01">
                                <button id="btn-review" class="iphone01">Comment
                                </button></a>
                                <a href="iphone.php" id="button-pop" class="button-pop"><button id="btn-view-comments">View Comments
                                </button></a>
                            </form>
                    </div>

                </div>
            </div>
            <div class="side-menu-c">
            <div class="images-container">
                <img src="./assets/s10.jpeg" alt="" class="images">
            </div>
                <div class="content">
                    <h3 class="product-name">
                    Samsung Galaxy S10 Plus (Ceramic Black, 512 GB)  (8 GB RAM)
                    </h3>
                    <p>
                        <ul class="info">
                        <li>8 GB RAM | 256 GB ROM |</li>
                            <li>16.0 cm (6.3 inch) Display</li>
                            <li>12MP (Dual Aperture) + 12MP + 16MP | 10MP Front Camera</li>
                            <li>3500 mAh Battery</li>
                        </ul>
                    </p>
                    <div class = "comment">
                            <form action="insert.php" method="post">
                                
                                <textarea name="txtarea" id="cmnt3" placeholder="Enter Comment Here"></textarea>
                                <input hidden type="text" id="pid3" name="phoneid" value="samsung02">
                                <button id="btn-review" class="iphone01">Comment
                                </button></a>
                                <a href="iphone.php" id="button-pop" class="button-pop"><button id="btn-view-comments">View Comments
                                </button></a>
                            </form>
                    </div>

                </div>
            </div>
            <div class="side-menu-d">
            <div class="images-container">
                <img src="./assets/a30.jpeg" alt="" class="images">
            </div>
            <div class="content">
                    <h3 class="product-name">
                    Samsung Galaxy A30 (Blue, 64 GB)  (4 GB RAM)
                    </h3>
                    <p>
                        <ul class="info">
                        <li>8 GB RAM | 256 GB ROM |</li>
                            <li>16.0 cm (6.3 inch) Display</li>
                            <li>12MP (Dual Aperture) + 12MP + 16MP | 10MP Front Camera</li>
                            <li>3500 mAh Battery</li>
                        </ul>
                    </p>
                    <div class = "comment">
                            <form action="insert.php" method="post">
                                
                                <textarea name="txtarea" id="cmnt3" placeholder="Enter Comment Here"></textarea>
                                <input hidden type="text" id="pid3" name="phoneid" value="samsung03">
                                <button id="btn-review" class="iphone01">Comment
                                </button></a>
                                <a href="iphone.php" id="button-pop" class="button-pop"><button id="btn-view-comments">View Comments
                                </button></a>
                            </form>
                    </div>
                </div>
            </div>
        </div>

        </section>

        <script>
            document.getElementById("button-pop").addEventListener("click", function(){
                document.querySelector(".popup-content").style.display = "flex";
            })
        </script>


</body>
</html>