<div ng-app="searchApp" class="container1 full-container ng-scope" xmlns:font-weight="http://www.w3.org/1999/xhtml">
    <div class="result-box">
        <div class="result-box-inner" style="position: relative;">
            <div class="result-list recipe-list">
                <div class="result-headline">
                    <div>
                        <div class="result-container">
                            <h1>
                    <span ng-if="true" class="ng-scope">
                      <strong class="text-highlight ng-binding">10000</strong> Món ăn ngon mỗi ngày
                    </span>
                            </h1>
                            <div style="float: left;width: 100%;">
                                <div class="random-link" style="float: left;">
                                    <ul>
                                        <li style="font-size: 11px"; font-weight:bold;>Gợi ý: </li>
                                        <li>
                                            <a href="<?php echo base_path().'/displaycook/5' ?>" target="_blank">ca hoi</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_path().'/displaycook/6' ?>" target="_blank">ca hop</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_path().'/displaycook/16' ?>" target="_blank">canh ca loc</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_path().'/displaycook/7' ?>" target="_blank">com ga</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_path().'/displaycook/8' ?>" target="_blank">ga nuong</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_path().'/displaycook/9' ?>" target="_blank">smoothie</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_path().'/displaycook/10' ?>" target="_blank">banh dua</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_path().'/displaycook/13' ?>" target="_blank">canh cu</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_path().'/displaycook/14' ?>" target="_blank">cua rang</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_path().'/displaycook/15' ?>" target="_blank">bun bo hue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $data1 = get_name_user();
                ?>
                <div>
                    <div class="result-list recipe-list row10">
                        <?php $i = 0; foreach ($data as $value):
                            if($i<4 ){ ?>
                                 <div ng-repeat="recipe in recipes" class="result-recipe-item ng-scope" index="<?php echo $i ?>" >
                           <?php  }
                            else{ ?>
                                 <div ng-repeat="recipe in recipes" class="result-recipe-item ng-scope d-none" index="<?php echo $i ?>" >
                           <?php  } ?>
                                <div class="item-inner">
                                    <div class="item-photo">
                                        <a class="photo" rel="alternative" media="only screen and (max-width: 400px)" href="<?php echo base_path().'displaycook/'.$value->Id ?>" target="_blank">
                                            <img class="photo img-responsive" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$value->IMGmonan?>">
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-header">
                                            <div class="title">
                                                <h2>
                                                    <a rel="alternative" media="only screen and (max-width: 640px)" class="ng-binding"><?php echo $value->TenCongThuc ?></a>
                                                </h2>
                                            </div>
                                            <div class="ingredients" style="font-size: 12px">
                                                <i class="fas fa-clock" style="font-size:12px;"></i>

                                                <span class="sophut">35</span>ph
                                                <i class='far fa-eye' style='font-size:12px'></i>

                                                <span class="soview"><?php echo $value->view ?></span>
                                                <i class="fas fa-exclamation-triangle" style='font-size:9px'></i>
                                                <span class="dokho">trung bình</span>
                                            </div>
                                            <div class="ingredients" style="font-size: 12px">
                                                <span ng-repeat="ing in recipe.MainIngredients" class="ng-binding ng-scope"><?php echo ($value->NoiDungMoTa); ?></span>
                                                <!--                                                <span ng-repeat="ing in recipe.MainIngredients" class="ng-binding ng-scope">lòng đỏ trứng muối</span>-->
                                            </div>
                                        </div>
                                            <div class="item-footer">
                                                <img src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data1[$i]->IMGUser?>"  style=" border-radius: 50%;width:24px;height:24px; margin-bottom:-7px">
                                                <span><?php echo $value->TenUser; ?></span>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        <?php $i++; endforeach; ?>
                    </div>
                    <div class="clearfix" ></div>
                    <div class="recipe-more" style="margin:30px 15px;">
                        <div class="recipe-more-inner" ng-show="hasMoreItems">
                            <a href="javascript:void(0)" ng-click="loadMore()" target="_self">
                                <span id="manhmanh" ng-show="!isLoading">Xem thêm</span>
                                <i ng-show="isLoading" class="fa fa-spinner fa-pulse text text-primary ng-hide"></i>
                                (
                                <span class="text-red ng-binding">4</span>
                                <span class="text-gray ng-binding">/10000</span>
                                )
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</div>
<footer>
    <div class="footer-inner">
        <div class="wide-box" style="background-color: #e9ebee">
            <div class="container">
                <div class="random-link">
                </div>
            </div>
        </div>
    </div>
</footer>
