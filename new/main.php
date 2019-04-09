<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../../../favicon.ico">-->

    <title>GENEST</title>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bootstrap/offcanvas.css" rel="stylesheet">
    <link href="css/bootstrap/carousel.css" rel="stylesheet">

    <link href="css/p_main.css" rel="stylesheet">


    <style>

    </style>

</head>

<body class="bg-white">




    <div class="   bg-dark">
        <div class="container">

            <div style="text-align: right; padding-top: 17px;">
                <img src="images/gnb/icon01.jpg">
                <img src="images/gnb/icon02.jpg">
                <img src="images/gnb/icon03.jpg">
                <img src="images/gnb/icon04.jpg">
                <img src="images/gnb/btn_login.jpg">
                <img src="images/gnb/btn_eng.jpg">
            </div>

        </div>
    </div>

    <nav class="navbar navbar-expand-sm  navbar-dark bg-dark" style="">

        <!--<div class="row">
            <img src="images/gnb/btn_eng.jpg" />
            <img src="images/gnb/btn_login.jpg" />
        </div>-->

        <div class="container">

            <a class="navbar-brand mr-auto mr-lg-0" href="#">
                <img src="images/gnb/logo.jpg" />
            </a>
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <!--                 <li class="nav-item active">
                        <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Switch account</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>-->
                </ul>
                <ul class="navbar-nav mr-right">
                    <li class="nav-item  dropdown">
                        <a class="nav-link " href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">회사소개</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01" style="margin-top:-10px;">
                            <a class="dropdown-item" href="#">제네스트</a>
                            <a class="dropdown-item" href="#">CEO 인사말</a>
                            <a class="dropdown-item" href="#">연혁</a>
                            <a class="dropdown-item" href="#">조직도</a>
                            <a class="dropdown-item" href="#">인증현황</a>
                            <a class="dropdown-item" href="#">오시는길</a>
                        </div>
                    </li>
                    <li class="nav-item "><a class="nav-link" href="#">회사전경</a></li>
                    <li class="nav-item "><a class="nav-link" href="#">생산제품</a></li>
                    <li class="nav-item "><a class="nav-link" href="#">보유설비</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="#">고객센터</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01" style="margin-top:-10px;">
                            <a class="dropdown-item" href="#">제네스트</a>
                            <a class="dropdown-item" href="#">CEO 인사말</a>
                            <a class="dropdown-item" href="#">연혁</a>
                            <a class="dropdown-item" href="#">조직도</a>
                            <a class="dropdown-item" href="#">인증현황</a>
                            <a class="dropdown-item" href="#">오시는길</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <script>
    
        $(document).ready(function(){
            
            $('.nav-item, .nav-item + .dropdown-menu').hover(
                
                function(){
                    $(this).find('.dropdown-menu').show();
                },
                function(){
                    $(this).find('.dropdown-menu').hide();
                }
            );
            
        });
    
    </script>

    <!--<div class="nav-scroller bg-white box-shadow">
        <div class="container">
        <nav class="nav nav-underline">
            <a class="nav-link active" href="#">Dashboard</a>
            <a class="nav-link" href="#">
                Friends
                <span class="badge badge-pill bg-light align-text-bottom">27</span>
            </a>
            <a class="nav-link" href="#">Explore</a>
            <a class="nav-link" href="#">Suggestions</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
        </nav>
        </div>
    </div>-->

    <main role="main">
        <!-- class="container"-->

        <!-- 


                keyVisual 이미지 슬라이딩 처리 시작


        -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color: black">
            <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>-->
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="/images/main/bg01.jpg" class="d-block " alt="...">
                    <!--<img src="icons/placeholder.svg" width="100%" height="100%" background="#777" color="#777" text=" " title=" "/>-->
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">

                    <!--<img src="icons/placeholder.svg" width="100%" height="100%" background="#777" color="#777" text=" " title=" "/>-->
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--<img src="icons/placeholder.svg" width="100%" height="100%" background="#777" color="#777" text=" " title=" "/>-->
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>






        <!--            
            keyVisual Sliding 끝
        -->
        <div id="c_about" class="main_block_width mb-5">
            <h1 class="text-center p-5">GENEST ABOUT</h1>

            <div class="row mb-5">
                <div class="col-sm text-center mb-2">
                    <img src="images/main/img01.jpg" />
                    <div class="mt-2 mb-5">회사소개</div>
                </div>
                <div class="col-sm text-center mb-2">
                    <img src="images/main/img02.jpg" />
                    <div class="mt-2 mb-5">CEO 인사말</div>
                </div>
                <div class="col-sm text-center mb-2">
                    <img src="images/main/img03.jpg" />
                    <div class="mt-2 mb-5">연혁</div>
                </div>
                <div class="col-sm text-center mb-2">
                    <img src="images/main/img04.jpg" />
                    <div class="mt-2 mb-5">인증서</div>
                </div>
            </div>
        </div>

        <div id="c_gal" class="main_block_bg1 " style="">
            <div class="main_block_width pb-5">

                <h1 class="text-center p-5">COMPANY GALLERY</h1>

                <div class="row  mb-5">
                    <div class="col-sm text-center pt-3 pb-3">
                        <img src="images/main/g_img01.jpg" />
                    </div>
                    <div class="col-sm text-center pt-3 pb-3">
                        <img src="images/main/g_img02.jpg" />
                    </div>
                    <div class="col-sm text-center pt-3 pb-3">
                        <img src="images/main/g_img03.jpg" />
                    </div>
                    <div class="col-sm text-center pt-3 pb-3">
                        <img src="images/main/g_img04.jpg" />
                    </div>
                    <div class="col-sm text-center pt-3 pb-3">
                        <img src="images/main/g_img05.jpg" />
                    </div>
                    <div class="col-sm text-center pt-3 pb-3">
                        <img src="images/main/g_img06.jpg" />
                    </div>
                </div>


            </div>
        </div>

        <div id="c_banner" class="">

        </div>



        <div id="c_product" class="main_block_bg1" style="">
            <div class="main_block_width pb-5">

                <h1 class="text-center p-5">PRODUCTS</h1>

                <div class="row  mb-5">
                    <div class="col text-center">
                        <img src="images/main/p_img01.jpg" />
                        <div class="mt-2 p-1"></div>
                    </div>
                    <div class="col text-center">
                        <img src="images/main/p_img02.jpg" />
                        <div class="mt-2 p-1"></div>
                    </div>
                    <div class="col text-center">
                        <img src="images/main/p_img03.jpg" />
                        <div class="mt-2 p-1"></div>
                    </div>
                </div>


            </div>
        </div>



        <div id="c_eqip" class="" style="">
            <div class="main_block_width pb-5" style="">

                <h1 class="text-center p-5">EQUIPMENT</h1>

                <div class="row  mb-5">
                    <div class="col text-center">
                        <img src="images/main/e_img01.jpg" />
                    </div>
                    <div class="col text-center">
                        <img src="images/main/e_img02.jpg" />
                    </div>
                </div>


            </div>
        </div>


    </main>
    <footer class="bg-secondary">
        <div class="container p-4 text-white" style="line-height: 120%;  ">
            <h5 style="letter-spacing: -1px;">(주)제네스트</h5>
            <h6 style="word-spacing: -1px;">
                대표이사: 이전행 주소:경기도 광명시 하안로60, A-810, 811, 812호 (소하동, 광명SK테크노파크) TEL: 02-2083-3052~3, FAX: 02-2083-3054, Email : biz@genest.co.kr <br>
                COPYRIGHT@ 2019 GENEST, ALL RIGHTS RESURVED.
            </h6>
        </div>

    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
        window.jQuery || document.write('<script src="js/assets/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="js/assets/vendor/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/assets/js/vendor/holder.min.js"></script>
    <script src="js/bootstrap/offcanvas.js"></script>


</body>

</html>