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
    <link rel="stylesheet" href="./css/main.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
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
                    <img src="./assets/apple-iphone-6s-mn0w2hn-a-original-imaexw6smfzjgqsz.jpeg" alt="" class="images">
                </div>
                <div class="content">
                    <h3 class="product-name">
                        Apple iPhone 6s (64GB) - Space Grey
                    </h3>
                    <p>
                        <ul class="info">
                            <li>64 GB ROM</li>
                            <li>11.94 cm (4.7 inch) Retina HD Display</li>
                            <li>12MP Rear Camera | 5MP Front Camera</li>
                            <li>Apple A9 64-bit processor and Embedded M9 Motion</li>
                        </ul>
                    </p>
                    <div class = "comment">
                        <form action="insert.php" method="post">
                        
                            <textarea name="txtarea" class="cmnt1" id="cmnt1" placeholder="Enter Comment Here"></textarea>
                            <input hidden type="text" id="pid1" name="phoneid" value="iphone01">
                            <div>
                                <button id="btn-review" class="iphone01">Comment
                                </button></a>
                                <a href="iphone.php" id="button-pop" class="button-pop"><button id="btn-view-comments">View Comments
                                </button></a>
                            </div>
                        </form>
                    </div>
                    
                    
                    

                        <!-- <div class="popup-content">
                            <h4>Enter Comment</h4>
                            <textarea name="ta1" id="" cols="60" rows="5"class="ta"></textarea>
                            <a href="#" id="button-pop" class="button-pop-submit"><button action="login.php" id="btn-review">Submit
                            </button></a>
                        </div> -->

                </div>
            </div>
            <div class="side-menu-c">
            <div class="images-container">
                <img src="./assets/apple-iphone-xr-mry62hn-a-original-imafa6zkhyceh8dg.jpeg" alt="" class="images">
            </div>
                <div class="content">
                    <h3 class="product-name">
                        Apple iPhone XR ((PRODUCT)RED, 64 GB)
                    </h3>
                    <p>
                        <ul class="info">
                            <li>64 GB ROM</li>
                            <li>15.49 cm (6.1 inch) Display</li>
                            <li>12MP Rear Camera | 7MP Front Camera</li>
                            <li>Apple A12 Bionic Chip Processor</li>
                        </ul>
                    </p>
                    <div class = "comment">
                        <form action="insert.php" method="post">
                            
                            <textarea name="txtarea" id="cmnt2" placeholder="Enter Comment Here"></textarea>
                            <input hidden type="text" id="pid2" name="phoneid" value="iphone02">
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
                <img src="./assets/apple-iphone-xs-max-mt542hn-a-original-imaf97f6n9eg9be4.jpeg" alt="" class="images">
            </div>
            <div class="content">
                    <h3 class="product-name">
                        Apple iPhone XS (Silver, 256 GB)
                    </h3>
                    <p>
                        <ul class="info">
                            <li>256 GB ROM</li>
                            <li>14.73 cm (5.8 inch) Super Retina HD Display</li>
                            <li>12MP + 12MP | 7MP Front Camera</li>
                            <li>Apple A12 Bionic Chip Processor</li>
                        </ul>
                    </p>
                    <div class = "comment">
                            <form action="insert.php" method="post">
                                
                                <textarea name="txtarea" id="cmnt3" placeholder="Enter Comment Here"></textarea>
                                <input hidden type="text" id="pid3" name="phoneid" value="iphone03">
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

        <!-- <script>
            document.getElementById("button-pop").addEventListener("click", function(){
                document.querySelector(".popup-content").style.display = "flex";
            })
        </script> -->

        <!-- <script>
            $("form").submit(function(e){
                e.preventDefault();
                
                
                $.post(
                    'insert.php',
                    {
                        if($("#cmnt1").val() == "")
                        {
                            phoneid: $("#pid2").val(),
                            txtarea: $("#cmnt2").val()
                        }

                    }
                );
            });
        </script> -->

        
        <!-- // function(result){
                    //     if(result == "success"){

                    //     }else{

                    //     }
                    // } -->

</body>
</html>