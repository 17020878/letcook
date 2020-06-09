<?php
session_start();
?>
<head class=" d-none">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập lớn</title>
    <link rel="stylesheet" href="--><?php echo base_path().'sites/all/themes/blankM'?><!--css/libs/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_path().'btlmanh/fontawesome-free-5.11.2-web/css/all.css'?>">
    <!--    <script src="--><?php //echo base_path().'sites/all/themes/blankM/js/jquery-3.3.1.min.js'?><!--"></script>-->
    <script src="<?php echo base_path().'btlmanh/bootstrap-4.3.1-dist/js/bootstrap.min.js'?>"></script>
    <link rel="stylesheet" href="<?php echo base_path().'btlmanh/css/stylebtl.css'?>">
    <div class="root-nav">
        <div class="container">
            <div class="top-leaderboard"></div>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="<?php echo base_path().'listmonan' ?>" target="_self">Công thức nấu ăn</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" target="_self">
                        <span class="fas fa-map-marker-alt"></span> Địa điểm
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" target="_self">
                        <span class="fa fa-shopping-basket"></span> Sản phẩm
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarResponsive" style="position: relative;">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link active" >Công thức</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">Blog</a>-->
<!--                    </li>-->
                    <li class="nav-item">
                        <a href="<?php echo base_path().'listmonan' ?>" class="nav-link">Bộ sưu tập</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_path().'topuser'?>" class="nav-link">Top thành viên</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.youtube.com/watch?v=52ELenMW2iA" class="nav-link">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.huongnghiepaau.com/hoc-nau-an?gclid=CjwKCAiAws7uBRAkEiwAMlbZjh5OonorxcLMGn2RC5dypHk6Lsi7ARbK_nmvTkuirh4CYF6vasIFrxoC8N0QAvD_BwE" class="nav-link"><i class="fas fa-calendar-alt"></i>Lớp học nấu ăn</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.unileverfoodsolutions.com.vn/vi/goc-am-thuc/events-and-promotions/mon-ngon-quan-viet-2019-chinh-thuc-khoi-dong.html" class="nav-link">Cuộc thi ẩm thực</a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">Cuộc thi ẩm thực</a>-->
<!--                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
    <div class="header-top clearfix">
        <div class="container" style="position:relative">
            <div class="logo header-top-1">
                <div class="navbar-brand">
                    <a href="<?php echo base_path().'home_home' ?>" style="color:#fff;" target="_self" id="logo1">
                        <img class="logo img-responsive" src="<?php echo base_path().'btlmanh/images/letcuc.png'?>" alt="thử nghiệm sử dụng cooky">
                    </a>
                </div>
            </div>
            <div class="header-top-2">
                <div class="aligncenter-sm ng-scope" id="cookySearchBox">
                    <div ng-controller="SearchSuggestionController" class="ng-scope">
                        <form id="searchform" class="form-horizontal ng-pristine ng-valid" action="<?php echo base_path().'search_monan' ?>" data-behavior="url" data-source="[data-behavior=search_field]" method="post" novalidate="novalidate">
                            <div class="qsearch-box">
                                <input type="text" id="searchinput" autocomplete="off" name="url" data-behavior="search-field" placeholder="tìm kiếm công thức"
                                       ng-focus="keywordPress(event)" ng-keyup="keywordPress(event)" ng-model="keyword" class="ng-pristine ng-untouched ng-valid ng-empty">
                                <button type="submit" class="glyphicon glyphicon-search ico-search">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-top-3 float-right">
                <div class="navbar-right user-header">

                    <?php if(!isset($_SESSION['tenuser'])){ ?>
                        <a class="btn btn-outline-success id1 ml-2" href="<?php echo base_path().'dangnhap' ?>">Đăng nhập</a>
                    <?php } else{ ?>
                        <a class="btn btn-outline-success id1" href="<?php echo base_path().'addmonan' ?>">Đăng công thức</a>
                        <a class="btn btn-outline-success id1 ml-2" href="<?php echo base_path().'trangcanhan'?>"><?php echo 'Xin chào '.$_SESSION['tenuser']; ?></a>
                        <a class="btn btn-outline-success id1 ml-2" href="<?php echo base_path().'updatepass' ?>">Đổi mật khẩu</a>
                        <a class="btn btn-outline-success id1 ml-2" href="<?php echo base_path().'dangxuat' ?>">Đăng xuất</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</head>
<main class="wrapper">
    <?php print render($page['content']); ?>
    <!--  o ben trai cua web -->
</main>

<head>
    <title>Rasa Chatbot</title>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_path().'/' ?>chatbot-ui/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body>
<div class="container">
</div>
<mybot>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.vi.min.js"></script>
    <script src="<?php echo base_path().'/' ?>/chatbot-ui/js/main.js"></script>
</mybot>
</body>