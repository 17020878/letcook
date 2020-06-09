<?php $data2 = count_congthuc();
?>
<div ng-app="searchApp" class="container1 full-container ng-scope" xmlns:font-weight="http://www.w3.org/1999/xhtml">
    <div class="result-box">
        <div class="result-box-inner" style="position: relative;">
            <div class="result-list recipe-list">
                <div class="result-list recipe-list row10">

                    <?php foreach ($data as $value):?>
                        <div ng-repeat="recipe in recipes" style="" class="result-recipe-item ng-scope">
                            <div class="item-inner" style="padding: 10px">
                                <div class="item-photo">
                                    <a class="photo" rel="alternative" media="only screen and (max-width: 640px)" href="<?php echo base_path().'trangcanhan'.$value->Id ?>" target="_blank">
                                        <img class="photo img-responsive" style="border-radius: 160px" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$value->IMGUser?>">
                                    </a>
                                </div>
                                <div class="item-info">
                                    <div class="item-header">
                                        <br><a href="<?php echo base_path().'trangcanhan' ?>"><span><?php echo $value->TenUser; ?></span></a><br>
                                        <span>Công thức đã đăng: <?php echo $value->countct; ?></span>
                                        <div class="ingredients" style="font-size: 12px">
                                            <span ng-repeat="ing in recipe.MainIngredients" style="font-family: inherit" class="ng-binding ng-scope"><b>Email: <?php echo ($value->Email); ?></b></span>
                                            <!--                                                <span ng-repeat="ing in recipe.MainIngredients" class="ng-binding ng-scope">lòng đỏ trứng muối</span>-->
                                        </div>
                                    </div>
                                    <div class="item-footer">
                                        <div class="logo header-top-1">
                                            <div class="navbar-brand">
                                                <a href="<?php echo base_path().'home_home' ?>" style="color:#fff;" target="_self" id="logo1">
                                                    <img class="logo img-responsive" style="margin-left: 45px" src="<?php echo base_path().'btlmanh/images/letcuc.png'?>" alt="thử nghiệm sử dụng cooky">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
</div>
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
            <p>0394694362</p>
            <p>email@gmail.com</p>
            <p>Cong ty TNHH DangManh</p>
            <p>Khuong Trung Thanh Xuan Ha Noi</p>
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
            <h5>&copy; DangManh</h5>
        </div>
    </div>
</div>