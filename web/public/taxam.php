<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!------------------- two box multi optional list selector--------------------------->

    <!-- Include multi.js -->
    <link rel="stylesheet" type="text/css" href="dist/multi.min.css">
    <script src="dist/multi.min.js"></script>

	
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

    <!-- multiple optional list selector-->

    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

    <!-- Ignore these -->
    <!--link rel="stylesheet" href="assets/styles/css/base.min.css?version=3.0.3"-->
    <!-- End ignore these -->

    <!-- Optional includes -->
    <script src="https://cdn.polyfill.io/v2/polyfill.js?features=es5,fetch,Element.prototype.classList,requestAnimationFrame,Node.insertBefore,Node.firstChild,Object.assign"></script>
    <!-- End optional includes -->

    <!-- Choices includes -->
    <link rel="stylesheet" href="assets/styles/css/choices.min.css?version=3.0.3">
    <script src="assets/scripts/dist/choices.min.js?version=3.0.3"></script>
    <!-- End Choices includes -->

    <!-- ( upload file )-->

    <!------------------->

    <title>TAXAM</title>

    <!-- [ FONT-AWESOME ICON ] 
===================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

    <!-- [ PLUGIN STYLESHEET ]
===================================================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="library/vegas/vegas.min.css">
    <!-- [ Boot STYLESHEET ]
===================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">

    <!-- [ DEFAULT STYLESHEET ] 
 ==================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/color/green.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>


    <style>


        p, h1, h2, h3 {
            color: white;
        }

        /* The chekbox_container */
        .chekbox_container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .chekbox_container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .chekbox_container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .chekbox_container input:checked ~ .checkmark {
            background-color: #267524;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .chekbox_container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .chekbox_container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
        }

        @font-face {
            font-family: 'Nassim';
            src: url('fonts/Nassim-Bold.woff2') format('woff');
        }

        @font-face {
            font-family: 'small-Nassim';
            src: url('fonts/Nassim.woff2') format('woff');
        }

        .nassimFont {
            font-family: Nassim;
            direction: rtl;
        }

        .small-nassimFont {
            font-family: small-Nassim;
            direction: rtl;
        }

        .blue {
            color: #458cff;
            font-weight: bold;
        }

        .font-24 {
            font-size: 24px;
        }

        a.greenButtonRound {
            border: 1px solid #e1e1e1;
            border-radius: 5px;
            background-color: #257525;
            color: #e1e1e1;
            font-weight: bold;
            text-decoration: none;
            margin: 20px;
            padding: 10px 20px 10px 20px;
            display: inline-block;
        }

        a.greenButtonRound:hover {
            border: 1px solid #009900;
            background-color: #e1e1e1;
            color: #257525;
        }

        * {
            box-sizing: border-box
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        /* Add a background color when the inputs get focus */
        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Extra styles for the cancel button */
        .taxam_form.cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .taxam_form.cancelbtn, .taxam_form.signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .taxam_form.container {
            padding: 16px;
        }

        /* The Modal (background) */
        .taxam_form.modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }

        /* Modal Content/Box */
        .taxam_form.modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* The Close Button (x) */
        .taxam_form.close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }

        .taxam_form.close:hover,
        .taxam_form.close:focus {
            color: #f44336;
            cursor: pointer;
        }

        /* Clear floats */
        .taxam_form.clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .taxam_form.cancelbtn, .taxam_form.signupbtn {
                width: 100%;
            }
        }

        .center_form {
            clear: both;
            margin-left: 25%;
            margin-right: 25%;
            display: block
        }

<!------- two box multi optional list selector--------->
        .multi_option_container {
            box-sizing: border-box;;
            margin: 0 auto;
            max-width: 500px;
            padding: 0 20px;
            width: 100%;
        }

        .disabled {
            border-radius: 5px;
            color: black;
            background-color: #999999;
            text-align: center;
        }

<!------------------------------------- captcha i'm not robot-------------------------------------->
        .total_captcha {
            height: 25%;
            width: 25%
        }

        .total_captcha {
            margin: 0;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
        }

        .captcha {
            background-color: #f9f9f9;
            border: 2px solid #d3d3d3;
            border-radius: 5px;
            color: #4c4a4b;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media screen and (max-width: 500px) {
            .captcha {
                flex-direction: column;
            }

            .text {
                margin: .5em !important;
                text-align: center;
            }

            .logo {
                align-self: center !important;
            }

            .spinner {
                margin: 2em .5em .5em .5em !important;
            }
        }

        .text {
            font-size: 1.75em;
            font-weight: 500;
            margin-right: 1em;
        }

        .spinner {
            position: relative;
            width: 2em;
            height: 2em;
            display: flex;
            margin: 2em 1em;
            align-items: center;
            justify-content: center;
        }

        input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            z-index: -1;
        }

        input[type="checkbox"] + .checkmark {
            display: inline-block;
            width: 2em;
            height: 2em;
            background-color: #fcfcfc;
            border: 2.5px solid #c3c3c3;
            border-radius: 3px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        input[type="checkbox"] + .checkmark span {
            content: '';
            position: relative;
            /*
                position:absolute;
                border-bottom:3px solid;
                border-right:3px solid;
                border-color:#029f56;*/
            margin-top: -3px;
            transform: rotate(45deg);
            width: .75em;
            height: 1.2em;
            opacity: 0;
        }

        input[type="checkbox"] + .checkmark > span:after {
            content: '';
            position: absolute;
            display: block;
            height: 3px;
            bottom: 0;
            left: 0;
            background-color: #029f56;
        }

        input[type="checkbox"] + .checkmark > span:before {
            content: '';
            position: absolute;
            display: block;
            width: 3px;
            bottom: 0;
            right: 0;
            background-color: #029f56;
        }

        input[type="checkbox"]:checked + .checkmark {
            animation: 2s spin forwards;
        }

        input[type="checkbox"]:checked + .checkmark > span {
            animation: 1s fadein 1.9s forwards;
        }

        input[type="checkbox"]:checked + .checkmark > span:after {
            animation: .3s bottomslide 2s forwards;
        }

        input[type="checkbox"]:checked + .checkmark > span:before {
            animation: .5s rightslide 2.2s forwards;
        }

        @keyframes fadein {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes bottomslide {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }

        @keyframes rightslide {
            0% {
                height: 0;
            }
            100% {
                height: 100%;
            }
        }

        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            align-self: flex-end;
            margin: 0.5em 1em;
        }

        .logo img {
            height: 2em;
            width: 2em;
        }

        .logo p {
            color: #9d9ba7;
            margin: 0;
            font-size: 1em;
            font-weight: 700;
            margin: .4em 0 .2em 0;
        }

        .logo small {
            color: #9d9ba7;
            margin: 0;
            font-size: .8em;
        }

        @keyframes spin {
            10% {
                width: 0;
                height: 0;
                border-width: 6px;
            }
            30% {
                width: 0;
                height: 0;
                border-radius: 50%;
                border-width: 1em;
                transform: rotate(0deg);
                border-color: rgb(199, 218, 245);
            }
            50% {
                width: 2em;
                height: 2em;
                border-radius: 50%;
                border-width: 3px;
                border-color: rgb(199, 218, 245);
                border-right-color: rgb(89, 152, 239);
            }
            70% {
                border-width: 3px;
                border-color: rgb(199, 218, 245);
                border-right-color: rgb(89, 152, 239);
            }
            90% {
                border-width: 3px;
            }
            100% {
                width: 2em;
                height: 2em;
                border-radius: 50%;
                transform: rotate(720deg);
                border-color: transparent;
            }
        }

        ::selection {
            background-color: transparent;
            color: teal;
        }

        ::-moz-selection {
            background-color: transparent;
            color: teal;
        }

<!--two level registration --------->


    </style>


</head>
<body>
<!-- [ LOADERs ]
===================================================================================================================-->
<div class="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- [ /PRELOADER ]
===================================================================================================================-->
<!-- [WRAPPER ]
===================================================================================================================-->
<div class="wrapper">

    <!-- [NAV]
    ===============================================================================================================-->
    <!-- Navigation ==========================================-->
    <nav class="amd-menu navbar navbar-default navbar-fixed-top theme_background_color fadeInDown">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="images/icon.png" alt="Taxam-group" width="36" height="47.04">
                <a class="navbar-brand" href=""><span class="nassimFont">تکسام، مشاور مالیاتی شما</span></a>


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#testimonial-s" class="page-scroll"><span class="nassimFont" style="font-size:130%">درباره ما</span></a></li>
                    <li><a href="#screenshot" class="page-scroll"><span class="nassimFont" style="font-size:130%">تصاویر</span></a></li>
                    <li><a href="#whylove" class="page-scroll"><span class="nassimFont" style="font-size:130%">خرید بسته</span></a></li>
                    <li><a href="#howwork" class="page-scroll"><span class="nassimFont" style="font-size:130%">چرا تکسام</span></a></li>
                    <li><a href="#feature" class="page-scroll"><span class="nassimFont" style="font-size:130%">مزایا</span></a></li>
                    <li><a href="#home" class="page-scroll"><span class="nassimFont" style="font-size:130%">صفحه اصلی</span></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <!-- [/NAV]
  =================================================================================================================-->


    <!-- [MAIN GALLERY ]
  =================================================================================================================-->
    <section class="main-gallery" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">


                        <h2 class="text-capitalize "
                            data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s"><span
                                    style="color:#ff9933"
                                    class="nassimFont"> !هم اکنون عضو تکسام شوید</span></h2>
                        <p> </br> </p>
                        <h3 class="intro"
                            data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s direction:rtl"><span
                                    class="nassimFont" style="color: #4dff4d"">.با عضویت در سایت، از خدمات مالیاتی تکسام
                            بهره مند شوید</span></h3>

                        <div class="intro"
                             data-scroll-reveal="wait 0.45s, then enter right and move 80px over 1s"
                             style="width:50%;align:auto; margin:auto;"><span class="nassimFont"
                                                                              style="text-align:justify;text-align-last: center;-moz-text-align-last: right; align:center; padding:5%; display:block;width: 100%;height: 100%; color: white"> تکسام مشاور مالیاتی اختصاصی  می باشد که شما می توانید قبل از اجرای هر گونه فعالیت با مشاور اختصاصیان مشورت کنید و تصمیم درست را اتخاذ نمایید. منظور از مشاور مالیاتی اختصاصی، شخصی است که مسلط به قوانین مالیاتی می باشد و می تواند برای همیشه مشاور شخصی شما بماند و در زمان نیاز، راهنمایی و حمایتتان کند </span>
                        </div>
                    </div>


                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="direction:rtl">
                        <div class="text-center top10">
                            <a href="#contact-1" class="greenButtonRound" role="button"><span class="nassimFont">ثبت نام &nbsp (ویژه کاربران)</span></a>
                            <a href="#contact-2" class="greenButtonRound" role="button"><span class="nassimFont">ثبت نام &nbsp (ویژه مشاوران)</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- [/MAIN GALLERY]
  =================================================================================================================-->

    <!-- [MOBILE APPLICATION]
    ===============================================================================================================-->

    <section class="mobile-app theme_background_color" id="feature">
        <div class="container">
            <div class="row text-center">
                <div class="app-heading">
                    <h2 class="sectionTitle"><span class="nassimFont">مزایای دریافت مشاوره از طریق تکسام</h2>
                </div>
            </div>
            <div class="row" style="margin-right:">
                <div class="col-md-4 col-sm-1 featured-content">
                    <div class="app-icon-box" style="width:100%">
                        <div class="app-content-phone" style="text-align:right; direction:rtl">
                            <h3 class="nassimFont">در دسترس بودن</h3>

                            <p class="small-nassimFont" style="font-size:105%">
                                در دسترس بودن و راحتی برقراری ارتباط با تیم مشاوره مالیاتی تکسام
                            </p>
                        </div>
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-universal-access"></i></span>
                        </div>
                    </div>
                    <div class="app-icon-box" style="width:100%">
                        <div class="app-content-phone" style="text-align:right; direction:rtl">
                            <h3 class="nassimFont">خلاصه مشاوره</h3>

                            <p class="small-nassimFont" style="font-size:105%">
                                در صورت تمایل شما، صورت خلاصه ای از مکالمات برایتان ارسال می گردد
                            </p>
                        </div>
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-file-text"></i></span>
                        </div>
                    </div>
                    <div class="app-icon-box" style="width:100%">

                        <div class="app-content-phone" style="text-align:right">
                            <h3 class="nassimFont">مسئولیت پذیری</h3>

                            <p class="small-nassimFont" style="font-size:105%">
                                پس از پایان تماس، مشاورتان را ارزیابی می کنید و در صورت عدم رضایت مبلغ سهم تکسام پس از
                                دریافت، قابل عودت به شما خواهد بود .
                            </p>
                        </div>
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-user-circle"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-1" style="">
                    <img src="images/iphone6-plus.png" class="iphone-image" alt="iPhpone"
                         data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">
                </div>
                <div class="col-md-4 col-sm-1 featured-content" style="direction:ltr">
                    <div class="app-icon-box" style="width:100%">
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-user-secret"></i></span>
                        </div>
                        <div class="app-content" style="text-align:left;">
                            <h3 class="nassimFont">راز داری</h3>

                            <p class="small-nassimFont" style="font-size:120%">
                              تکسام راز دار شماست و تضمین می کند اطلاعات شخصی شما را حفظ نماید
                            </p>
                        </div>
                    </div>
                    <div class="app-icon-box" style="width:100%">
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-money"></i></span>
                        </div>
                        <div class="app-content" style="text-align:left">
                            <h3 class="nassimFont">صرفه جویی در هزینه</h3>

                            <p class="small-nassimFont" style="font-size:120%">
                                پس از دوره مشاوره رایگان ، در صورت تماس فقط مبلغ 2.000 تومان بابت هر دقیقه مشاور به روی
                                قبض تلفنتان منظور میگردد.
                            </p>
                        </div>
                    </div>
                    <div class="app-icon-box" style="width:100%">
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-mobile-phone"></i></span>
                        </div>
                        <div class="app-content" style="text-align:left">
                            <h4 class="nassimFont">بهره مندی از نرم افزار تکسام</h4>

                            <p class="small-nassimFont" style="font-size:120%">
                                شما می توانید با دریافت اپلیکیشن تکسام از خدمات مالیاتی آن بهره مند شوید
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [/MOBILE APPLICATION]
    ===============================================================================================================-->

    <!-- [HOW WORKS]
    ===============================================================================================================-->

    <section class="how-works" id="howwork">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="how-it-works-heading">
                        <h2 class="sectionTitle nassimFont">چرا تکسام</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 app-board">
                        <div class="app-board-inner">
                            <ul class="nav nav-tabs liner" id="myTab" role=tablist>
                                <li class="active">
                                    <a href="#userexperience" aria-controls="userexperience" role="tab"
                                       data-toggle="tab" title="User Experience">
                                    <span class="round-tabs one">
                                        <i class="fa fa-handshake-o"></i>
                                    </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"
                                       title="Sketch">
                                    <span class="round-tabs two">
                                        <i class="fa fa-edit"></i>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#prototyping" aria-controls="prototyping" role="tab" data-toggle="tab"
                                       title="Prototyping">
                                    <span class="round-tabs three">
                                        <i class="fa fa-usd"></i>
                                    </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#uidesign" aria-controls="uidesign" role="tab" data-toggle="tab"
                                       title="UI Design">
                                    <span class="round-tabs four">
                                        <i class="fa fa-folder-open"></i>
                                    </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#doner" aria-controls="doner" role="tab" data-toggle="tab" id=
                                    title="Development">
                                    <span class="round-tabs five">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="userexperience">

                                <h3 class="head text-center nassimFont" style="color:#ff9933">توافق یا اعتراض؟</h3>

                                <p class="narrow text-center nassimFont">
                                    پس از دریافت برگه تشخیص مالیاتی چگونه متوجه می شوید که بهتر است توافق کنید یا اعتراض
                                    ؟
                                </p>

                                <p class="text-center">
                                    <a href="#contact-1"
                                       class="btn btn-success btn-outline-rounded theme_background_color">
                                        <span class="nassimFont"> ثبت نام </span><span
                                                class="fa fa-send-o"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <h3 class="head text-center nassimFont" style="color:#ff9933">پر کردن اظهارنامه
                                    مالیاتی</h3>

                                <p class="narrow text-center nassimFont">
                                    آیا اظهارنامه مالیاتیتان را شخص مسلط به قوانین مالیاتی پر و ارسال می کند ؟
                                </p>

                                <p class="text-center">
                                    <a href="#contact-1"
                                       class="btn btn-success btn-outline-rounded theme_background_color"><span
                                                class="nassimFont"> ثبت نام </span> <span
                                                class="fa fa-sign-in"></span></a>
                                </p>

                            </div>
                            <div class="tab-pane fade" id="prototyping">
                                <h3 class="head text-center nassimFont" style="color:#ff9933">مشمول مالیات اضافی و جریمه
                                    شده
                                    اید؟</h3>

                                <p class="narrow text-center nassimFont">
                                    تا به حال چقدر بر اثر عدم اطلاع از قوانین و یا راهنمایی های اشتباه مشمول پرداخت
                                    مالیات
                                    اضافی و جریمه شده اید؟
                                </p>

                                <p class="text-center">
                                    <a href="#contact-1"
                                       class="btn btn-success btn-outline-rounded theme_background_color"><span
                                                class="nassimFont"> ثبت نام </span> <span
                                                class="fa fa-sign-in"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="uidesign">
                                <h3 class="head text-center nassimFont" style="color:#ff9933">اهمیت اسناد و مدارک</h3>

                                <p class="narrow text-center nassimFont">
                                    آیا می دانید با توجه به راه اندازی سیستم جامع مالیاتی برای حل مشکلات مالیاتی ، اسناد
                                    ،
                                    مدارک حرف اول را می زند ؟
                                </p>
                                <p class="text-center">
                                    <a href="#contact-1"
                                       class="btn btn-success btn-outline-rounded theme_background_color"><span
                                                class="nassimFont"> ثبت نام </span> <span
                                                class="fa fa-sign-in"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="doner">
                                <div class="text-center">
                                    <i class="img-intro icon-checkmark-circle"></i>
                                </div>
                                <h3 class="head text-center nassimFont" style="color:#ff9933">تکسام، مشاور اختصاصی
                                    شما!</h3>

                                <p class="narrow text-center nassimFont">
                                    آیا در موقع داشتن سوال یا ابهام مالیاتی ، برای مجموعه خود مشاور مالیاتی انتخاب کرده
                                    اید؟

                                    مشاور اختصاصی ، شما را برای داشتن کسب و کار پویا و بدون استرس در مورد مباحث مالیاتی
                                    پشتیبانی می کند.هم اکنون ثبت نام کنید و با ما تماس بگیرید.
                                </p>
                                <p class="text-center">
                                    <a href="#contact-1"
                                       class="btn btn-success btn-outline-rounded theme_background_color"><span
                                                class="nassimFont"> ثبت نام </span> <span
                                                class="fa fa-sign-in"></span></a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- [/HOW WORKS]
    ===============================================================================================================-->

    <!-- [/WHY YOU LOVE]
    ===============================================================================================================-->

    <section class="why-love theme_background_color" id="whylove">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="WhyLove-heading text-center">

                        <h2 class="sectionTitle nassimFont">خرید بسته های تکسام</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="WhyLove-icon-box text-center">
                            <div class="WhyLove-icon">
                                <span class="themecolor"><ig class="material-icons" style="font-size:36px"></i></span>
                            </div>
                            <div class="WhyLove-content">
                                <h4>بسته طلایی</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="WhyLove-icon-box text-center">
                            <div class="WhyLove-icon">
                                <span class="themecolor"><i class="fa fa-binoculars"></i></span>
                            </div>
                            <div class="WhyLove-content">
                                <h4>VERY FAST</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="WhyLove-icon-box text-center">
                            <div class="WhyLove-icon">
                                <span class="themecolor"><i class="fa fa-adjust"></i></span>
                            </div>
                            <div class="WhyLove-content">
                                <h4>CUSTOMIZABLE</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="WhyLove-icon-box padding-top30 text-center">
                            <div class="WhyLove-icon">
                                <span class="themecolor"><i class="fa fa-laptop"></i></span>
                            </div>
                            <div class="WhyLove-content">
                                <h4>BOOTSTRAP 3.2</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="WhyLove-icon-box padding-top30 text-center">
                            <div class="WhyLove-icon">
                                <span class="themecolor"><i class="fa fa-mobile-phone"></i></span>
                            </div>
                            <div class="WhyLove-content">
                                <h4>FULLY RESPONSIVE</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="WhyLove-icon-box padding-top30 text-center">
                            <div class="WhyLove-icon">
                                <span class="themecolor"><i class="fa fa-eye-slash"></i></span>
                            </div>
                            <div class="WhyLove-content">
                                <h4>RETINA READY</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- [/WHY YOU WILL LOVE]
    ==============================================================================================================-->

    <!-- [CURRENT STATS]
    ==============================================================================================================--
    <section class="our-stats" id="stats">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="our-stats-box text-center">
                        <div class="our-stat-icon">
                            <span class="fa fa-ge"></span>
                        </div>
                        <div class="our-stat-info">
                            <span class="stats" data-from="4763904" data-to="4764504" data-speed="5000"
                                  data-refresh-interval="50"></span>
    
                            <h5>Total Downloaded</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-stats-box text-center">
                        <div class="our-stat-icon">
                            <span class="fa fa-git-square"></span>
                        </div>
                        <div class="our-stat-info">
                            <span class="stats" data-from="1" data-to="504" data-speed="5000"
                                  data-refresh-interval="50"></span>
    
                            <h5>Editors Supported</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-stats-box text-center">
                        <div class="our-stat-icon">
                            <span class="fa fa-globe"></span>
                        </div>
                        <div class="our-stat-info">
                            <span class="stats" data-from="1" data-to="359" data-speed="5000"
                                  data-refresh-interval="50"></span>
    
                            <h5>Languages Detected</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-stats-box text-center">
                        <div class="our-stat-icon">
                            <span class="fa fa-gears"></span>
                        </div>
                        <div class="our-stat-info">
                            <span class="stats" data-from="3500" data-to="5000" data-speed="5000"
                                  data-refresh-interval="50"></span>
    
                            <h5>Happy Clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- [CURRENT STATS]
    ==============================================================================================================-->
    <!-- [SCREEN SHOT]
    ==============================================================================================================-->
    <section class="screeshots" id="screenshot">
        <div class="container">
            <div class="row text-center">
                <div class="screenshots-heading">
                    <h2 class="section-title nassimFont">تصاویر نرم افزار</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="screenshot-carousel">
                        <div id="myCarousel" class="carousel slide">

                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-1.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-2.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-3.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-4.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/item-->

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-5.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-6.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-7.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-8.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/item-->


                            </div>
                            <!--/carousel-inner-->

                        </div>
                        <!--/myCarousel-->

                    </div>
                    <!--/well-->
                </div>
            </div>
        </div>
    </section>


    <!-- [/SCREEH SHOT]
==============================================================================================================-->


    <!-- [TESTIMONIAL]
==============================================================================================================-->
    <section class="testimonial" id="testimonial-s">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="testimonial-area-heading">
                            <h2>What Client Say About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img
                                            class="img-responsive " src="images/client-1.jpg" alt="client">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive"
                                                                                         src="images/client-2.jpg"
                                                                                         alt="client">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive"
                                                                                         src="images/client-3.jpg"
                                                                                         alt="clinet">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2 col-xs-12">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                    ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in
                                                    voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. !
												</p>
                                                <small>John Doe</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2 col-xs-12">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                    ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in
                                                    voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                <small>Nargis Doe</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2 col-xs-12">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                    ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in
                                                    voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                <small>Jane Doe</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [/TESTIMONIAL]
==============================================================================================================-->


    <!-- [SUBSCRIBE-1]
==============================================================================================================-->
<section class="contactus" id="contact-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="testimonial-area-heading">
                        <h2 class="grey"><span class="nassimFont"><span class="fa fa-user"></span>&nbsp &nbspثبت نام کاربران</span>
                        </h2></br>
                        <p class="nassimFont"> کاربر گرامی، جهت دریافت مشاوره رایگان از طریق فرم زیر ثبت نام
                            فرمایید: </p>
                        <p class="nassimFont"> (مشاوره رایگان فقط با شماره تلفن همراه ثبت شده امکان پذیر خواهد بود) </p>
                </div>
            </div>
        </div>
        <div class="gap"></div>
			<div class="row">
					<!-- /contact info -->
				<div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- contact form -->
					<form id="contact-form" method="POST" action="php/sendmail.php" onsubmit="return checkform(this)">
							<div class="row form-group center_div">
								<!-------------------------------------->
								<div class="col-xs-6 center_form nassimFont" style="direction:rtl;text-align:right; color:#f1f1f1"> نام کامل: (اجباری)
									<input type="text" name="name" placeholder="نام و نام خانوادگی" id="contact-name"
                                           class="form-control" required>
								</div>
								<!-------------------------------------->
								<div class="col-xs-6 center_form nassimFont"
										 style="direction:rtl; text-align:right;  color:#f1f1f1">شماره
									تلفن همراه: (اجباری)
									<input type="tel" name="number"
										   placeholder="شماره تلفن همراه خود را وارد نمایید (مانند: 09121234567)"
										   id="contact-number_user" class="form-control"
										   style="direction:rtl;text-align:right" maxlength="11" minlength="11" required>
								</div>
								<!-------------------------------------->
								<div class="col-xs-6 center_form nassimFont"
                                     style="direction:rtl; text-align:right; color:#f1f1f1"></br>
                                    ایمیل: (اختیاری)
                                 <input type="email" name="email" placeholder="ایمیل خود را وارد نمایید"
                                           id="contact-email_user" class="form-control"
                                           style="direction:rtl;text-align:right" >
								</div>
								<!-------------------------------------->
							</div>
                            </br>
                            <!------------ multi selection searchable list---------------------->
							<div class="row form-group">
								<div class="col-md-6 col-sm-6 col-xs-6 center_form nassimFont"
										 style="direction:rtl; text-align:right">
									<div id="page-wrapper"
											 style="background-color:#222222; border-style:solid;border-width:0.05px;border-color:#737373; padding:2%"
											 class="nassimFont">
										<div class="section" style="width:100%;">
											<div style="color:#f1f1f1">صنف خود را انتخاب نمایید: (اجباری)
											</div>
											<div class="multi_option_container" style="margin:2%">
													<select multiple="multiple" name="multi_selector_two_box"
															id="multi_selector_two_box" style="color:red">
														<option disabled="disabled">تولیدی:</option>
														<option>چوب کار</option>
														<option>آهن آلات</option>
														<option>معلم</option>
														<option>حسابدار</option>
														<option disabled="disabled">خرید و فروش:</option>
														<option>مصالح ساختمانی</option>
														<option>تاجر</option>
														<option>راننده تاکسی</option>
														<option>خواربار فروش</option>
														<option disabled="disabled">خدماتی:</option>
														<option>برنامه نویس</option>
														<option>نمایشگاه ماشین</option>
														<option>خیاط</option>
													</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end of  multi selection searchable list-->
        </br></br>
        <!-------------------------------------------------->

        <!------ start I'm not robot ------------------->
        <div class="row form-group">
            <div class="col-md-6 col-sm-6 col-xs-6 center_form">
                <div class="total_captcha">
                    <div class="captcha">
                        <div class="spinner">
                            <label>
                                <input type="checkbox" onclick="$(this).attr('disabled','disabled');" required>
                                <span class="checkmark"><span>&nbsp;</span></span>
                            </label>
                        </div>
                        <div class="nassimFont">
                            من ربات نیستم!
                        </div>
                        <div class="logo">
                            <img src="https://www.google.com/recaptcha/intro/comingsoon/reCAPTCHA_logo.png"/>
                            <p style=" font-size:50%">reCAPTCHA</p>
                            <small style=" font-size:70%" class="small-nassimFont">بررسی امنیتی</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------end of i'm not roobot ------------->
	
            <button type="submit" class="btn btn-style blue"
                    style="margin-left:auto;margin-right:auto;display:block;"><span
                        class="nassimFont">ارسال</span></button>
            <span class="form-message" style="display: none;"></span>
</form>
<!-- /contact form -->
</div>
</div>
</div>
</div>
</section>

<!--  [CONTACT INFO ENDS ]-->
<!-- [/SUBSCRIBE]
==================================================================================================================-->
<!-- [SUBSCRIBE-2]
==================================================================================================================-->
<section class="our-stats" id="contact-2" style="background-color:#15151e">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="testimonial-area-heading">
                    </br></br>
                    <h2 class="grey"><span class="nassimFont"><span class="fa fa-volume-control-phone"></span>&nbsp &nbspثبت نام مشاوران</span>
                    </h2></br>
                    <p class="nassimFont"> مشاورانی که تمایل به همکاری با تکسام را دارند ، لطفا فرم زیر را تکمیل
                        نمایند: </p>
                </div>
            </div>
        </div>
        <div class="gap"></div>
        <div class="row">
            <!-- /contact info -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- contact form -->
                <form id="contact-form" method="POST" action="php/sendmail.php" onsubmit="return checkform(this)">
                    <div class="row form-group center_div">
                        <div class="col-xs-6 center_form nassimFont"
                             style="direction:rtl; text-align:right;  color:#f1f1f1">نام کامل:
                            (اجباری)
                            <input type="text" name="name" placeholder="نام و نام خانوادگی" id="contact-name"
                                   class="form-control" required>
                        </div>
                        <div class="col-xs-6 center_form nassimFont"
                             style="direction:rtl; text-align:right;  color:#f1f1f1">شماره
                        تلفن همراه: (اجباری)
                        <input type="tel" name="number"
                               placeholder="شماره تلفن همراه خود را وارد نمایید (مانند: 09121234567)"
                               id="contact-number_user" class="form-control"
                               style="direction:rtl;text-align:right" maxlength="11" minlength="11" required>
                    </div>
                    <div class="col-xs-6 center_form nassimFont"
                         style="direction:rtl; text-align:right;  color:#f1f1f1"></br>
                        ایمیل: (اختیاری)
                        <input type="email" name="email" placeholder="ایمیل خود را وارد نمایید"
                               id="contact-email_user" class="form-control"
                               style="direction:rtl;text-align:right">
                    </div>
            </div>
            </br>

            <!------------------------- upload file------------------------>
            <div class="row form-group" style="background-color:#15151E;">
                <div class="col-md-6 col-sm-6 col-xs-6 center_form" style="background-color:#15151E">
                    <div class="control-group" id="fields"
                         style="margin:auto;; width:100%; background-color:#15151E;direction:rtl; text-align:center">
                        <label class="control-label nassimFont" for="field1"
                               style="background-color:#15151E; padding:10px; color:#f1f1f1">
                            رزومه خود را بارگذاری نمایید: (اجباری)
                        </label>
                        <div class="controls" style="background-color:#15151E;">
                            <div class=" input-group col-xs-12" style="background-color:#15151E">
										<span align="center"
                                              style="border:1px solid #606060; padding: 10px; background-color:#21212B">		
										<label for="file-upload" class="custom-file-upload"
                                               style="background-color:#21212B">
											<i class="fa fa-cloud-upload" style="color:#f1f1f1""></i><span
                                                    class="nassimFont"
                                                    style="background-color:#21212B;  color:#f1f1f1">&nbsp انتخاب فایل<span>
										  </label>
										  <input id="file-upload" name='upload_cont_img' type="file"
                                                 style="display:none;" required>
                                            </button>
											</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <!-----------------end of upload file--------------------------->


            <!------ start I'm not robot ------------------->
            <div class="row form-group" style="background-color:#15151E;">
                <div class="col-md-6 col-sm-6 col-xs-6 center_form" style="background-color:#15151E">
                    <div class="total_captcha">
                        <div class="captcha">
                            <div class="spinner">
                                <label>
                                    <input type="checkbox" onclick="$(this).attr('disabled','disabled');" required>
                                    <span class="checkmark"><span>&nbsp;</span></span>
                                </label>
                            </div>
                            <div class="nassimFont">
                                من ربات نیستم!
                            </div>
                            <div class="logo">
                                <img src="https://www.google.com/recaptcha/intro/comingsoon/reCAPTCHA_logo.png"/>
                                <p style=" font-size:50%">reCAPTCHA</p>
                                <small style=" font-size:70%" class="small-nassimFont">بررسی امنیتی</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------end of i'm not roobot ------------->

            <button type="submit" class="btn btn-style blue"
                    style="margin-left:auto;margin-right:auto;display:block"><span
                        class="nassimFont">ارسال</span></button>
            <span class="form-message" style="display: none;"></span>
            </form>
            <!-- /contact form -->

        </div>
    </div>
    </div>
</section>
<!--  [CONTACT INFO ENDS ]-->
<!-- [/SUBSCRIBE]
==================================================================================================================-->


<!-- [FOOTER]
==================================================================================================================-->
<footer class="footer">

    <div class="container">
        <div class="footer-info col-md-12 text-center">
            <ul>
                <li><a href="#">Tehran, Iran.</a></li>
                <li><a href="#">(+98) 21-444-391-95</a></li>
                <li><a href="#">taxam@info.ir</a></li>
            </ul>
        </div>
        <div class="footer-social-icons col-md-12 text-center">
            <ul>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-send-o"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
    </div>


</footer>

<section class="sub-footer">
    <div class="container">
        <div class="copyright-text col-md-6 col-sm-6 col-xs-12">
            <p>© 2018 TAXAM. All rights reserved.</p>
        </div>
        <div class="designed-by col-md-6 col-sm-6 col-xs-12">
            <p>Designed by: <a href="#">Mohammad Adiban</a></p>
        </div>
    </div>
</section>

<!-- [/FOOTER]
==================================================================================================================-->


<!-- [ /WRAPPER ]
==================================================================================================================-->

<!-- [ DEFAULT SCRIPT ] -->
<script src="library/modernizr.custom.97074.js"></script>
<script src="library/jquery-1.11.3.min.js"></script>
<script src="library/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script src="library/vegas/vegas.min.js"></script>
<!-- [ PLUGIN SCRIPT ] -->

<script src="js/plugins.js"></script>
<script src="js/fappear.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/scrollreveal.js"></script>
<!-- [ COMMON SCRIPT ] -->
<script src="js/common.js"></script>
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<!-- Invalid email message -->
<script>
    var user_email = document.getElementById("contact-email_user");
    user_email.addEventListener("keyup", function (event) {
        if (user_email.validity.typeMismatch) {
            user_email.setCustomValidity("لطفا ایمیل خود را به صورت صحیح وارد نمایید");
        } else {
            user_email.setCustomValidity("");
        }
    });

    var consultant_email = document.getElementById("contact-email_consultant");
    consultant_email.addEventListener("keyup", function (event) {
        if (consultant_email.validity.typeMismatch) {
            consultant_email.setCustomValidity("لطفا ایمیل خود را به صورت صحیح وارد نمایید");
        } else {
            consultant_email.setCustomValidity("");
        }
    });


    <!-- mobile phone invalid message-->

    var user_number = document.getElementById("contact-number_user");
    user_number.addEventListener("keyup", function (event) {
        if (user_number.validity.typeMismatch) {
            user_number.setCustomValidity("لطفا ایمیل خود را به صورت صحیح وارد نمایید");
        } else {
            user_number.setCustomValidity("");
        }
    });
</script>

<!-- searchable form script -->

<script>
    $(function () {
        $("select").select2();
    });
</script>
<script>
    // Get the <datalist> and <input> elements.
    var dataList = document.getElementById('json-datalist');
    var input = document.getElementById('ajax');

    // Create a new XMLHttpRequest.
    var request = new XMLHttpRequest();

    // Handle state changes for the request.
    request.onreadystatechange = function (response) {
        if (request.readyState === 4) {
            if (request.status === 200) {
                // Parse the JSON
                var jsonOptions = JSON.parse(request.responseText);

                // Loop over the JSON array.
                jsonOptions.forEach(function (item) {
                    // Create a new <option> element.
                    var option = document.createElement('option');
                    // Set the value using the item in the JSON array.
                    option.value = item;
                    // Add the <option> element to the <datalist>.
                    dataList.appendChild(option);
                });

                // Update the placeholder text.
                input.placeholder = "e.g. datalist";
            } else {
                // An error occured :(
                input.placeholder = "Couldn't load datalist options :(";
            }
        }
    };

    // Update the placeholder text.
    input.placeholder = "Loading options...";

    // Set up and make the request.
    request.open('GET', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/4621/html-elements.json', true);
    request.send();

</script>
<!-- upload file script--->
<script>
    $(document).ready(function () {
        $('form input').change(function () {
            $('form p').text(this.files.length + " file(s) selected");
        });
    });
</script>
<!--------------------------------- upload script------------------------------------------>
<script>
    $('#file-upload').change(function () {
        var i = $(this).prev('label').clone();
        var file = $('#file-upload')[0].files[0].name;
        $(this).prev('label').text(file);
    });
</script>


<!------------- multiple optional selector-------------------->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var textRemove = new Choices(document.getElementById('choices-text-remove-button'), {
            delimiter: ',',
            editItems: true,
            maxItemCount: 5,
            removeItemButton: true,
        });

        var textUniqueVals = new Choices('#choices-text-unique-values', {
            paste: false,
            duplicateItems: false,
            editItems: true,
        });

        var texti18n = new Choices('#choices-text-i18n', {
            paste: false,
            duplicateItems: false,
            editItems: true,
            maxItemCount: 5,
            addItemText: function (value) {
                return 'Appuyez sur Entrée pour ajouter <b>"' + String(value) + '"</b>';
            },
            maxItemText: function (maxItemCount) {
                return String(maxItemCount) + 'valeurs peuvent être ajoutées';
            },
            uniqueItemText: 'Cette valeur est déjà présente',
        });

        var textEmailFilter = new Choices('#choices-text-email-filter', {
            editItems: true,
            regexFilter: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
        }).setValue(['joe@bloggs.com']);

        var textDisabled = new Choices('#choices-text-disabled', {
            addItems: false,
            removeItems: false,
        }).disable();

        var textPrependAppendVal = new Choices('#choices-text-prepend-append-value', {
            prependValue: 'item-',
            appendValue: '-' + Date.now(),
        }).removeActiveItems();

        var textPresetVal = new Choices('#choices-text-preset-values', {
            items: ['Josh Johnson', {
                value: 'joe@bloggs.co.uk',
                label: 'Joe Bloggs',
                customProperties: {
                    description: 'Joe Blogg is such a generic name'
                }
            }],
        });

        var multipleDefault = new Choices(document.getElementById('choices-multiple-groups'));

        var multipleFetch = new Choices('#choices-multiple-remote-fetch', {
            placeholder: true,
            placeholderValue: 'Pick an Strokes record',
            maxItemCount: 5,
        }).ajax(function (callback) {
            fetch('https://api.discogs.com/artists/55980/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW')
                .then(function (response) {
                    response.json().then(function (data) {
                        callback(data.releases, 'title', 'title');
                    });
                })
                .catch(function (error) {
                    console.error(error);
                });
        });

        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
        });

        /* Use label on event */
        var choicesSelect = new Choices('#choices-multiple-labels', {
            removeItemButton: true,
            choices: [
                {value: 'One', label: 'Label One'},
                {value: 'Two', label: 'Label Two', disabled: true},
                {value: 'Three', label: 'Label Three'},
            ],
        }).setChoices([
            {value: 'Four', label: 'Label Four', disabled: true},
            {value: 'Five', label: 'Label Five'},
            {value: 'Six', label: 'Label Six', selected: true},
        ], 'value', 'label', false);

        choicesSelect.passedElement.addEventListener('addItem', function (event) {
            document.getElementById('message').innerHTML = 'You just added "' + event.detail.label + '"';
        });

        choicesSelect.passedElement.addEventListener('removeItem', function (event) {
            document.getElementById('message').innerHTML = 'You just removed "' + event.detail.label + '"';
        });

        var singleFetch = new Choices('#choices-single-remote-fetch', {
            searchPlaceholderValue: 'Search for an Arctic Monkeys record',
        }).ajax(function (callback) {
            fetch('https://api.discogs.com/artists/391170/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW')
                .then(function (response) {
                    response.json().then(function (data) {
                        callback(data.releases, 'title', 'title');
                        singleFetch.setValueByChoice('Fake Tales Of San Francisco');
                    });
                })
                .catch(function (error) {
                    console.error(error);
                });
        });

        var singleXhrRemove = new Choices('#choices-single-remove-xhr', {
            removeItemButton: true,
            searchPlaceholderValue: 'Search for a Smiths\' record'
        }).ajax(function (callback) {
            var request = new XMLHttpRequest();
            request.open('get', 'https://api.discogs.com/artists/83080/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW', true);
            request.onreadystatechange = function () {
                var status;
                var data;
                if (request.readyState === 4) {
                    status = request.status;
                    if (status === 200) {
                        data = JSON.parse(request.responseText);
                        callback(data.releases, 'title', 'title');
                        singleXhrRemove.setValueByChoice('How Soon Is Now?');
                    } else {
                        console.error(status);
                    }
                }
            }
            request.send();
        });

        var genericExamples = new Choices('[data-trigger]', {
            placeholderValue: 'This is a placeholder set in the config',
            searchPlaceholderValue: 'This is a search placeholder'
        });

        var singleNoSearch = new Choices('#choices-single-no-search', {
            searchEnabled: false,
            removeItemButton: true,
            choices: [
                {value: 'One', label: 'Label One'},
                {value: 'Two', label: 'Label Two', disabled: true},
                {value: 'Three', label: 'Label Three'},
            ],
        }).setChoices([
            {value: 'Four', label: 'Label Four', disabled: true},
            {value: 'Five', label: 'Label Five'},
            {value: 'Six', label: 'Label Six', selected: true},
        ], 'value', 'label', false);

        var singlePresetOpts = new Choices('#choices-single-preset-options', {
            placeholder: true,
        }).setChoices([{
            label: 'Group one',
            id: 1,
            disabled: false,
            choices: [
                {value: 'Child One', label: 'Child One', selected: true},
                {value: 'Child Two', label: 'Child Two', disabled: true},
                {value: 'Child Three', label: 'Child Three'},
            ]
        },
            {
                label: 'Group two',
                id: 2,
                disabled: false,
                choices: [
                    {value: 'Child Four', label: 'Child Four', disabled: true},
                    {value: 'Child Five', label: 'Child Five'},
                    {value: 'Child Six', label: 'Child Six'},
                ]
            }], 'value', 'label');

        var singleSelectedOpt = new Choices('#choices-single-selected-option', {
            searchFields: ['label', 'value', 'customProperties.description'],
            choices: [
                {value: 'One', label: 'Label One', selected: true},
                {value: 'Two', label: 'Label Two', disabled: true},
                {
                    value: 'Three', label: 'Label Three', customProperties: {
                        description: 'This option is fantastic'
                    }
                },
            ],
        }).setValueByChoice('Two');

        var singleNoSorting = new Choices('#choices-single-no-sorting', {
            shouldSort: false,
        });

        var cities = new Choices(document.getElementById('cities'));
        var tubeStations = new Choices(document.getElementById('tube-stations')).disable();

        cities.passedElement.addEventListener('change', function (e) {
            if (e.detail.value === 'London') {
                tubeStations.enable();
            } else {
                tubeStations.disable();
            }
        });

        var customTemplates = new Choices(document.getElementById('choices-single-custom-templates'), {
            callbackOnCreateTemplates: function (strToEl) {
                var classNames = this.config.classNames;
                var itemSelectText = this.config.itemSelectText;
                return {
                    item: function (data) {
                        return strToEl('\
                <div\
                  class="' + String(classNames.item) + ' ' + String(data.highlighted ? classNames.highlightedState : classNames.itemSelectable) + '"\
                  data-item\
                  data-id="' + String(data.id) + '"\
                  data-value="' + String(data.value) + '"\
                  ' + String(data.active ? 'aria-selected="true"' : '') + '\
                  ' + String(data.disabled ? 'aria-disabled="true"' : '') + '\
                  >\
                  <span style="margin-right:10px;">🎉</span> ' + String(data.label) + '\
                </div>\
              ');
                    },
                    choice: function (data) {
                        return strToEl('\
                <div\
                  class="' + String(classNames.item) + ' ' + String(classNames.itemChoice) + ' ' + String(data.disabled ? classNames.itemDisabled : classNames.itemSelectable) + '"\
                  data-select-text="' + String(itemSelectText) + '"\
                  data-choice \
                  ' + String(data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable') + '\
                  data-id="' + String(data.id) + '"\
                  data-value="' + String(data.value) + '"\
                  ' + String(data.groupId > 0 ? 'role="treeitem"' : 'role="option"') + '\
                  >\
                  <span style="margin-right:10px;">👉🏽</span> ' + String(data.label) + '\
                </div>\
              ');
                    },
                };
            }
        });
    });
</script>

<!-- Google Analytics - Ignore me -->
<script>
    window.ga = window.ga || function () {
        (ga.q = ga.q || []).push(arguments)
    };
    ga.l = +new Date;
    ga('create', 'UA-31575166-1', 'auto');
    ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->


<!-- two box multi optional select list--------->
<script>
    var select = document.getElementById('multi_selector_two_box');
    multi(select, {
        non_selected_header: ' لیست صنف ها',
        selected_header: 'صنف های انتخاب شده'
    });
</script>


<!----------- I'm not robot script--------------------------------->

<script>
    var a, b, c,
        submitContent,
        captcha,
        locked,
        validSubmit = false,
        timeoutHandle;

    // Generating a simple sum (a + b) to make with a result (c)
    function generateCaptcha() {
        a = Math.ceil(Math.random() * 10);
        b = Math.ceil(Math.random() * 10);
        c = a + b;
        submitContent = '<span>' + a + '</span> + <span>' + b + '</span>' +
            ' = <input class="submit__input" type="text" maxlength="2" size="2" required />';
        $('.submit__generated').html(submitContent);

        init();
    }


    // Check the value 'c' and the input value.
    function checkCaptcha() {
        if (captcha === c) {
            // Pop the green valid icon
            $('.submit__generated')
                .removeClass('unvalid')
                .addClass('valid');
            $('.submit').removeClass('overlay');
            $('.submit__overlay').fadeOut('fast');

            $('.submit__error').addClass('hide');
            $('.submit__error--empty').addClass('hide');
            validSubmit = true;
        }
        else {
            if (captcha === '') {
                $('.submit__error').addClass('hide');
                $('.submit__error--empty').removeClass('hide');
            }
            else {
                $('.submit__error').removeClass('hide');
                $('.submit__error--empty').addClass('hide');
            }
            // Pop the red unvalid icon
            $('.submit__generated')
                .removeClass('valid')
                .addClass('unvalid');
            $('.submit').addClass('overlay');
            $('.submit__overlay').fadeIn('fast');
            validSubmit = false;
        }
        return validSubmit;
    }

    function unlock() {
        locked = false;
    }


    // Refresh button click - Reset the captcha
    $('.submit__control i.fa-refresh').on('click', function () {
        if (!locked) {
            locked = true;
            setTimeout(unlock, 500);
            generateCaptcha();
            setTimeout(checkCaptcha, 0);
        }
    });


    // init the action handlers - mostly useful when 'c' is refreshed
    function init() {
        $('form').on('submit', function (e) {
            e.preventDefault();
            if ($('.submit__generated').hasClass('valid')) {
                // var formValues = [];
                captcha = $('.submit__input').val();
                if (captcha !== '') {
                    captcha = Number(captcha);
                }

                checkCaptcha();

                if (validSubmit === true) {
                    validSubmit = false;
                    // Temporary direct 'success' simulation
                    submitted();
                }
            }
            else {
                return false;
            }
        });


        // Captcha input result handler
        $('.submit__input').on('propertychange change keyup input paste', function () {
            // Prevent the execution on the first number of the string if it's a 'multiple number string'
            // (i.e: execution on the '1' of '12')
            window.clearTimeout(timeoutHandle);
            timeoutHandle = window.setTimeout(function () {
                captcha = $('.submit__input').val();
                if (captcha !== '') {
                    captcha = Number(captcha);
                }
                checkCaptcha();
            }, 150);
        });


        // Add the ':active' state CSS when 'enter' is pressed
        $('body')
            .on('keydown', function (e) {
                if (e.which === 13) {
                    if ($('.submit-form').hasClass('overlay')) {
                        checkCaptcha();
                    } else {
                        $('.submit-form').addClass('enter-press');
                    }
                }
            })
            .on('keyup', function (e) {
                if (e.which === 13) {
                    $('.submit-form').removeClass('enter-press');
                }
            });


        // Refresh button click - Reset the captcha
        $('.submit-control i.fa-refresh').on('click', function () {
            if (!locked) {
                locked = true;
                setTimeout(unlock, 500);
                generateCaptcha();
                setTimeout(checkCaptcha, 0);
            }
        });


        // Submit white overlay click
        $('.submit-form-overlay').on('click', function () {
            checkCaptcha();
        });
    }

    generateCaptcha();
</script>

<!---------- end of I'm not robot script -------------------------->


<!-- two level registration ---------------->

</body>

</html>