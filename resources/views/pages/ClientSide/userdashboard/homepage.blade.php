<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>

</head>

<body style="margin: 0 0 169px;">
    <input type="hidden" id = "current_resident" data-id = {{ session("resident.id") }}>

    @include('inc.client_nav')

    <div class="container" style="margin-top: 20px;align-items: center;margin-bottom: 70px;">
        <div class="row" style="align-items: center;">
            <div class="col-md-6">
                <div class="carousel slide" data-ride="carousel" id="carousel-1" style="background-size: cover;">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block" src="{{ URL::to('images/homepage.jpg') }}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="{{ URL::to('images/bg.jpg') }}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="{{ URL::to('images/na1bg.png') }}" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <div class="col-md-6 text-justify">
                <p><b> <center>VISION</center></b></p> 𝘈𝘯 𝘦𝘮𝘱𝘰𝘸𝘦𝘳𝘦𝘥 𝘢𝘯𝘥 𝘩𝘦𝘢𝘭𝘵𝘩𝘺 𝘕𝘢𝘢𝘸𝘢𝘯 𝘪𝘯 𝘢 𝘨𝘭𝘰𝘣𝘢𝘭𝘭𝘺-𝘤𝘰𝘮𝘱𝘦𝘵𝘪𝘵𝘪𝘷𝘦, 𝘦𝘤𝘰𝘭𝘰𝘨𝘪𝘤𝘢𝘭𝘭𝘺 𝘣𝘢𝘭𝘢𝘯𝘤𝘦𝘥 𝘢𝘯𝘥 𝘱𝘦𝘢𝘤𝘦𝘧𝘶𝘭 𝘔𝘪𝘴𝘢𝘮𝘪𝘴 𝘖𝘳𝘪𝘦𝘯𝘵𝘢𝘭 𝘶𝘯𝘥𝘦𝘳 𝘢 𝘳𝘦𝘴𝘱𝘰𝘯𝘴𝘪𝘷𝘦 𝘢𝘯𝘥 𝘢𝘤𝘤𝘰𝘶𝘯𝘵𝘢𝘣𝘭𝘦 𝘨𝘰𝘷𝘦𝘳𝘯𝘢𝘯𝘤𝘦.

                <p><b><center>MISSION</center></b></p> 𝘞𝘦 𝘴𝘩𝘢𝘭𝘭 𝘴𝘶𝘴𝘵𝘢𝘪𝘯 𝘰𝘶𝘳 𝘥𝘦𝘭𝘪𝘷𝘦𝘳𝘺 𝘰𝘧 𝘴𝘦𝘳𝘷𝘪𝘤𝘦𝘴 𝘵𝘰 𝘵𝘩𝘦 𝘧𝘶𝘭𝘭𝘦𝘴𝘵 𝘰𝘧 𝘰𝘶𝘳 𝘢𝘣𝘪𝘭𝘪𝘵𝘪𝘦𝘴, 𝘩𝘢𝘳𝘯𝘦𝘴𝘴𝘪𝘯𝘨 𝘰𝘶𝘳 𝘱𝘰𝘵𝘦𝘯𝘵𝘪𝘢𝘭𝘴, 𝘢𝘯𝘥 𝘣𝘶𝘪𝘭𝘥𝘪𝘯𝘨 𝘮𝘰𝘳𝘦 𝘮𝘦𝘢𝘯𝘪𝘯𝘨𝘧𝘶𝘭 𝘵𝘦𝘢𝘮𝘸𝘰𝘳𝘬; 𝘞𝘦 𝘸𝘪𝘭𝘭 𝘩𝘰𝘭𝘥 𝘢𝘯𝘥 𝘱𝘳𝘰𝘮𝘰𝘵𝘦 𝘢𝘵 𝘢𝘭𝘭 𝘵𝘪𝘮𝘦𝘴 𝘵𝘩𝘦 𝘱𝘳𝘪𝘯𝘤𝘪𝘱𝘭𝘦𝘴 𝘢𝘯𝘥 𝘱𝘰𝘭𝘪𝘤𝘪𝘦𝘴 𝘰𝘧 𝘵𝘩𝘦 𝘔𝘶𝘯𝘪𝘤𝘪𝘱𝘢𝘭 𝘎𝘰𝘷𝘦𝘳𝘯𝘮𝘦𝘯𝘵; 𝘢𝘯𝘥 𝘊𝘰𝘨𝘯𝘪𝘻𝘢𝘯𝘵 𝘰𝘧 𝘰𝘶𝘳 𝘢𝘷𝘰𝘸𝘦𝘥 𝘱𝘶𝘳𝘱𝘰𝘴𝘦, 𝘸𝘦 𝘤𝘰𝘮𝘮𝘪𝘵 𝘰𝘶𝘳𝘴𝘦𝘭𝘷𝘦𝘴 𝘵𝘰 𝘮𝘢𝘬𝘦 𝘔𝘪𝘴𝘢𝘮𝘪𝘴 𝘖𝘳𝘪𝘦𝘯𝘵𝘢𝘭 𝘢 𝘤𝘩𝘢𝘭𝘭𝘦𝘯𝘨𝘦 𝘵𝘰 𝘵𝘩𝘦 𝘢𝘥𝘷𝘦𝘯𝘵𝘶𝘳𝘰𝘶𝘴, 𝘢 𝘩𝘢𝘷𝘦𝘯 𝘧𝘰𝘳 𝘵𝘩𝘦 𝘵𝘳𝘢𝘷𝘦𝘭𝘦𝘳𝘴, 𝘢𝘯𝘥 𝘢 𝘳𝘦𝘢𝘭 𝘩𝘰𝘮𝘦 𝘧𝘰𝘳 𝘵𝘩𝘦 𝘔𝘪𝘴𝘢𝘮𝘪𝘴𝘯𝘰𝘯.
                <br>
                <br>
                </p>
            </div>
        </div>
    </div>
    <br><br>
    <footer class="footer-clean" style="background-color: #21a9af;position: absolute;left: 0;bottom: 0;height: 174px;width: 100%;overflow: hidden;margin-top: 30px;">
        <div class="container text-white">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3></h3>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3></h3>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3></h3>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="justify-content-center"><a href="#"><i class=""></i></a><a href="#"><i class=""></i></a><a href="#"><i class=""></i></a><a href="#"><i class=""></i></a>
                    <p class="copyright"><strong><center>© 2023 Barangay E-service System</center></strong></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
