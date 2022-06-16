<!doctype html>
<html lang="ar">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>عيادات دي كير || لعلاج الأسنان</title>
        <meta name="description" content="">
        <meta name="author" content="TaHa">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        
        <!--================ Loader Start =================
        <div id="loader-overlay">
          <div class="loader">
            <img src="img/loader.svg" width="80" alt="">
          </div>
        </div>
        <!--================ Loader End =================-->
        
        <!--================ header Area =================-->
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.html"><img src="images/logowh.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent" dir="rtl">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="index.html#about">من نحن</a></li> 
                                <li class="nav-item"><a class="nav-link" href="index.html#branches">فروعنا</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#services">خدماتنا</a></li> 
                                <li class="nav-item"><a class="nav-link" href="index.html#offers">عروض</a></li>    
                                <li class="nav-item"><a class="nav-link" href="index.html#clients">عملائنا</a></li>    
                                <li class="nav-item"><a class="nav-link" href="index.html#contact">تواصل معنا</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--================ header Area =================-->
        
    <style>
        .footer {
            font-size: 16px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        h3 {
            text-align: center;
            width: 100%;
            line-height: 2
        }
    </style>
    <!-- /menubar -->
    <main id="main" style="margin-top: 150px;">
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>
                        <?php
                        $email= "contactus@dcare-eg.com";

                        if (!empty($_POST)){

                            if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or empty($_POST['branch']) or empty($_POST['message'])){
                                echo("لم تقم بتعبئة جميع الخانات <br>");

                            }
                            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                            if(!preg_match($regex, $_POST['email'])){
                                echo("بريد خاطئ");

                            }
                            else{
                                $message  = "الاسم :\n{$_POST["name"]}\n";
                                $message .= "الموبايل :\n{$_POST["tel"]}\n";
                                $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                                $message .= "الفرع :\n{$_POST["branch"]}\n";
                                $message .= "الرسالة :\n{$_POST["message"]}\n";
                                $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                $message = stripslashes($message);
                                $message = wordwrap($message, 70);
                                mail($email,"d-care Landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                            }
                        }
                        ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>



	<!--============= Footer Start =============-->
        <footer class="footer">
            <div class="footer-copyright">
              <div class="container">
                <div class="copy-right text-center"> <a href="" target="_blank"><img src="images/adv.png"></a> جميع الحقوق محفوظة | تم التصميم بواسطة </div>
              </div>
            </div>
        </footer>
        <!--============= Footer End =============-->
    </div>
        
    <!-- scripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/compare.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
           
    </body>
</html>