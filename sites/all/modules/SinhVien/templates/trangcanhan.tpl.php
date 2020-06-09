<?php $data1 = count_congthuc();
$data2 = get_img_user();
$data3 = count_all_congthuc();
$long = 'Thành Long';
$tu = "Thành Tú";
?>
<body>
<section class="page-container page-profile-container">
    <div class="container">

            <div class="page-header page-profile-header">
                <?php if($_SESSION['tenuser'] == $long ){ ?>
                    <div class="profile-cover-photo" style="background-image: url('<?php echo base_path().'btlmanh/images/'?>longbia.jpg');">
               <?php }  if($_SESSION['tenuser'] == $tu){
                    echo '<div class="profile-cover-photo" style="background-image: url('.'/Let_Cook/btlmanh/images/tubia.jpg'.')">'; ?>
               <?php }  if($_SESSION['tenuser'] == "Trọng Vũ"){
                   echo '<div class="profile-cover-photo" style="background-image: url('.'/Let_Cook/btlmanh/images/vubia.jpg'.')">'; ?>
               <?php }  if($_SESSION['tenuser'] == "Đăng Mạnh"){
                   echo '<div class="profile-cover-photo" style="background-image: url('.'/Let_Cook/btlmanh/images/manh2.jpg'.')">';} ?>
                        <?php if($_SESSION['tenuser'] != $long && $_SESSION['tenuser'] != $tu && $_SESSION['tenuser'] != "Trọng Vũ" && $_SESSION['tenuser'] != "Đăng Mạnh"){
                            echo '<div class="profile-cover-photo" style="background-image: url('.'/Let_Cook/btlmanh/images/bgrlc.jpg'.')">';
                        }?>
                    <a class="btn btn-change-cover" target="_blank">
                        <span class="fa fa-camera"></span>
                        <input type="file" id="imgupload" style="display:none"/>
                        <button id="OpenImgUpload">Cập nhật ảnh bìa</button>
                    </a>
                </div>
                <form method="post" enctype="multipart/form-data">
                <div class="profile-info-container" style="background:transparent" >
                    <div style="clear: both; width: 100%;"></div>
                    <div class="file-upload" >
                        <div class="image-upload-wrap">
                            <input name="anh" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                                    <img style="border-radius: 100%; width: 100px" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data2['0']->IMGUser?>">

                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                        </div>
                    </div>
                    <button type="submit" style="margin-left: 55px" class="btn btn-success" name="submit-profile">Thêm ảnh đại diện</button><br>
                    <div class="profile-info clearfix">
                        <div class="profile-name">
                            <h1><?php echo $_SESSION['tenuser']; ?></h1>
                        </div>
                        <?php if($_SESSION['tenuser'] == "Đăng Mạnh"){
                            echo ' <span class="user-lvl newbee">Admin</span>';
                        }else{
                            echo ' <span class="user-lvl newbee">newbee</span>';
                        }?>

                    </div>
                    <div class="clearfix" style="clear: both;"></div>
                    <div class="profile-stats">
                        <div class="stats-item">
                            <span  style="text-transform: capitalize;" class="stats-text">Lượt xem:</span>
                            <span class="stats-count">2</span>
                        </div>
                        <div class="stats-item">
                            <span  style="text-transform: capitalize;" class="stats-text">Công thức:</span>
                            <?php if($data1[0]->countct == '') {
                                echo '<span class="stats-count">0</span>';
                            } else{ ?>
                                 <span class="stats-count"><?php echo $data1[0]->countct ?></span>
                          <?php  }?>
                        </div>
                        <div class="stats-item">
                            <span  style="text-transform: capitalize;" class="stats-text">Đã thực hiện:</span>
                            <?php if($data1[0]->countct == '') {
                            echo '<span class="stats-count">2</span>';
                            }else{?>
                                <span class="stats-count"><?php echo $data1[0]->countct ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        <div class="profile-container">
            <div class="inner">
                <ul class="nomargin tab-list">
                    <li class="active">
                        <a href="#" target="_self">
                            <?php if($data1[0]-> countct == '') {
                                echo '<span class="count">0</span>Công thức';
                            }else{ ?>
                                 <span class="count"><?php echo $data1[0]->countct ?></span>Công thức
                           <?php }?>

                        </a>
                    </li>
                    <li >
                        <?php foreach ($data3 as $value):
                            $total = $value->countct + $total;
                            ?>
                        <?php endforeach; ?>
                        <a href="<?php echo base_path().'listmonan' ?>" target="_self">
                            <?php if($total == ''){
                                echo '<span class="count">0</span>Bộ sưu tập';
                            } else{ ?>
                                 <span class="count"><?php echo $total;  ?></span>Bộ sưu tập
                          <?php  }?>
                        </a>
                    </li>
                    <li >
                        <a href="#" target="_self">
                            <span class="count">4</span>Quan tâm
                        </a>
                    </li>
                    <li >
                        <a href="#" target="_self">
                            <span class="count">0</span>Thông tin
                        </a>
                    </li>
                </ul>
                <div class="profile-wrapper profile-box ng-scope" ng-app="userRecipesApp" ng-controller="UserRecipesController">
                    <ul class="nav nav-tabs profile-nav-tabs" role="tablist">
                        <li role="presentation" class="tab active" id="tab-owner" onclick="selectedTab(this, 'ownerList')">
                            <a href="#" role="tab" data-toggle="tab" target="_self">
                                Công thức đã đăng:   <span class="stats-count"> <?php echo $data1[0]->countct ?> </span>
                            </a>
                        </li>
                    </ul>
                    <div class="row10">
                        <div class="recipe-list-wrapper">
                            <ul class="list-recipe">
                                <?php $i = 1;  foreach ($data as $value): ?>
                                    <li class="li-list-recipe">
                                        <a href="<?php echo base_path().'displaycook/'.$value->Id ?>"> Công thức   <?php echo $i ?>:<b> <?php echo $value->TenCongThuc ?></b> </a>
                                        <a id="trash" href="<?php echo base_path().'deletemonan/'.$value->Id ?>" target="_self">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </li>
                                    <?php $i = $i+ 1; endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="my-4">
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Contact Us</h2>
        </div>
        <div class="col-12 social padding">
            <div class="icon1">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-md-4">
            <hr class="light">
            <h5>Address</h5>
            <hr class="light">
            <p>0982720515</p>
            <p>email@gmail.com</p>
            <p>Dao nguyen an thuong hoai duc ha noi</p>
        </div>
        <div class="col-md-4">
            <hr class="light">
            <h5>Working hours</h5>
            <hr class="light">
            <p>Monday-friday: 8a.m - 5p.m </p>
            <p>Weekend: 8a.m - 12a.m</p>
        </div>
        <div class="col-md-4">
            <hr class="light">
            <h5>Services</h5>
            <hr class="light">
            <p>outsourcing</p>
            <p>Web development</p>
            <p>Mobile development</p>
        </div>
        <div class="col-12">
            <hr class="light-100">
            <h5>&copy; TrongVu</h5>
        </div>
    </div>
</div>
<script type="text/javascript">
    function readURL(input) {
        if (input.name=="anh" && input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        }

        if (input.name=="anh1" && input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap1').hide();

                $('.file-upload-image1').attr('src', e.target.result);
                $('.file-upload-content1').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);
        }
        if (input.name=="anh2" && input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap2').hide();

                $('.file-upload-image2').attr('src', e.target.result);
                $('.file-upload-content2').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        }
        if (input.name=="anh3" && input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap3').hide();

                $('.file-upload-image3').attr('src', e.target.result);
                $('.file-upload-content3').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        }
        if (input.name=="anh4" && input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap4').hide();

                $('.file-upload-image4').attr('src', e.target.result);
                $('.file-upload-content4').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        }
    }
</script>
</body>
<style>
    .page-container {
        padding: 20px 0;
    }
    .page-profile-header {
        height: 380px;
        min-height: inherit;
        clear: both;
        border-radius: 16px;
        background-color: #fff;
    }
    .page-header {
        width: 100%;
        max-height: 400px;
        position: relative;
        overflow: hidden;
        min-height: 350px;
        margin: 0;
        padding: 0;
    }
    .profile-cover-photo, .profile-cover-photo-blur, .profile-cover-photo:after {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        position: absolute;
    }
    .profile-cover-photo .btn-change-cover {
        color: #000;
        position: absolute;
        top: 15px;
        right: 15px;
        opacity: .2;
        z-index: 1;
        -webkit-transition: opacity .5s;
        transition: opacity .5s;
    }
    .profile-info-container {
        position: absolute;
        background: #fff;
        width: 320px;
        height: 100%;
        top: 0;
        left: 0;
        padding: 30px;
    }
    .profile-photo {
        background: #f6f6f6;
        position: relative;
        margin: 0 auto;
    }
    .profile-photo .avt {
        overflow: hidden;
    }
    .profile-photo, .profile-photo .avt {
        height: 120px;
        width: 120px;
        border-radius: 50%;
    }
    .profile-info {
        font-size: 18px;
        position: relative;
        text-align: center;
    }
    .clearfix {
        clear: both;
    }
    .profile-info .profile-name {
        font-size: 24px;
        text-align: center;
        display: block;
    }
    .profile-info .profile-name {
        font-size: 24px;
        text-align: center;
        display: block;
    }
    .user-lvl.newbee {
        color: #00BCD4;
    }
    .user-lvl {
        border-radius: 2px;
        padding: 1px 2px;
        text-align: center;
        font-size: 11px;
        display: inline-block;
    }
    .profile-stats {
        clear: both;
        overflow: hidden;
        padding: 5px 0;
        text-align: center;
    }
    .profile-stats .stats-item {
        padding: 6px;
        clear: both;
        overflow: hidden;
        font-size: 14px;
    }
    .profile-stats .stats-text {
        display: block;
        float: left;
        margin-right: 6px;
        text-align: right;
        color: #b2b2b2;
        width: 100px;
    }
    .profile-stats .stats-count {
        color: #000;
        font-weight: 700;
    }
    .profile-info .profile-name h1 {
        font-size: 24px;
        margin: 10px 0 0;
    }
    .profile-cover-photo {
        background: url(/images/Natasha.png) left center no-repeat;
        background-size: cover;
        margin-left: 320px;
    }
    .profile-cover-photo, .profile-cover-photo-blur, .profile-cover-photo:after {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        position: absolute;
    }
    .page-profile-container .profile-container {
        padding-top: 30px;
        overflow: hidden;
    }
    .page-profile-container .profile-container .inner {
        border-radius: 16px;
        border: .5px solid #ddd;
        overflow: hidden;
    }
    .profile-container .tab-list {
        padding: 0;
        list-style: none;
        background: #eee;
        text-align: center;
    }
    .nomargin {
        margin: 0;
    }
    .profile-container .tab-list li.active a, .profile-container .tab-list li:hover a {
        background: #fff;
        color: #c70808;
    }
    .profile-container .tab-list li a {
        display: block;
        font-size: 14px;
        text-transform: uppercase;
        text-align: center;
        padding: 10px 20px;
        text-decoration: none;
    }
    a, li {
        white-space: nowrap;
    }
    .profile-container .tab-list li {
        display: inline-block;
    }
    .profile-container .tab-list li a .count {
        display: block;
        font-size: 18px;
        color: #b2b2b2;
        line-height: 110%;
    }
    .profile-wrapper {
        position: relative;
        overflow: hidden;
    }
    .profile-box {
        margin-bottom: 15px;
        overflow: hidden;
        background: #fff;
        padding: 15px;
    }
    .profile-wrapper .profile-nav-tabs {
        border-bottom: .5px solid #ddd;
    }
    .profile-wrapper .profile-nav-tabs>li {
        border: 0;
    }
    .profile-wrapper .profile-nav-tabs>li.active>a, .profile-wrapper .profile-nav-tabs>li.active>a:focus, .profile-wrapper .profile-nav-tabs>li.active>a:hover {
        border: 0;
        border-bottom: 2px solid #c70808;
        background: 0 0;
        font-weight: 700;
        color: #555;
    }
    .profile-wrapper .profile-nav-tabs>li>a {
        font-size: 14px;
        text-transform: uppercase;
        padding-left: 0;
        padding-right: 0;
        background-color: transparent;
        border: 0;
        margin-right: 30px;
        color: #b2b2b2;
    }
    .row10 {
        margin-left: -10px;
        margin-right: -10px;
    }
    .recipe-list-wrapper .nomargin .tab-list>ul>li>a{
        display: inline-block;
    }
    #trash{
        margin-left: 10px;
    }.file-upload {
         width: 100px;
         margin-left: 78px;
         margin-bottom: 20px;
         border-radius: 100%;
     }
    .file-upload-content,.file-upload-content1,.file-upload-content2,.file-upload-content3,.file-upload-content4 {
        display: none;
        text-align: center;
    }
    .file-upload-input,.file-upload-input1,.file-upload-input2,.file-upload-input3,.file-upload-input4 {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100px;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }
    .image-upload-wrap{
        /*border: 1px solid #ccc;*/
        /*border-radius: 10px;*/
        margin-top: 20px;
        border-radius: 10px;
        position: relative;
        /*background-color: #e9ebee*/
    }
    .file-upload-image {
        max-height: 150px;
        max-width: 150px;
        margin-left: -22px;
        padding: 0px;
        border-radius: 100%;
    }
</style>