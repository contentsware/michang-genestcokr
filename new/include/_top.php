<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../../../favicon.ico">-->

    <title>GENEST</title>
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bootstrap/offcanvas.css" rel="stylesheet">
    <link href="css/bootstrap/carousel.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link href="css/p_main.css" rel="stylesheet">
    
    
    <style>
        
        .navbar{
            
            font-family: 'Nanum Gothic', sans-serif;
            font-weight: 900;
            color: black;
            
        }
        
        .my_title{
            
            font-family: 'Nanum Gothic', sans-serif;
            font-weight: 900;
            color: white;
            
            
        }
        
        .p_img:hover {
            /*zoom: 1;*/ /* ie 5,6,7 bug fix */ 
            /*filter: alpha(opacity=100); */
            opacity: 0.8;
        }
               
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
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">소개</a>
                            <a class="dropdown-item" href="#">CEO 인사말</a>
                            <a class="dropdown-item" href="#">연혁</a>
                            <a class="dropdown-item" href="#">조직도</a>
                            <a class="dropdown-item" href="#">사업장안내</a>
                            <a class="dropdown-item" href="#">인증현황</a>
                            <a class="dropdown-item" href="#">오시는길</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">회사전경</a>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">생산제품</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <a class="dropdown-item" href="#">의료기</a>
                            <a class="dropdown-item" href="#">항공산업</a>
                            <a class="dropdown-item" href="#">기타 산업부품</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">보유설비</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="#">생산설비</a>
                            <a class="dropdown-item" href="#">검사설비</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">고객센터</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                            <a class="dropdown-item" href="#">공지사항</a>
                            <a class="dropdown-item" href="#">온라인문의</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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