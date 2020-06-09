<?php
$nguyenlieu = $data[0]->NguyenLieu;
$tpnguyenlieu = preg_split("/[,]+/", $nguyenlieu);
$buoc1 = $data[0]->Buoc1;
$buoc2 = $data[0]->Buoc2;
$buoc3 = $data[0]->Buoc3;
$buoc4 = $data[0]->Buoc4;
?>
<head xmlns="http://www.w3.org/1999/html">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title></title>
</head>

<body style="background-color:#e9ebee">
<div class="card" style="padding: 23px; width: 750px; border-radius: 20px;margin-left: 380px;margin-top:20px" >
    <img class="card-img" style="border-radius: 20px" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data['0']->IMGmonan?>" alt="Card image cap"  >
    <div class="card-body">
        <h5 class="card-title"><b><?php echo $data['0']->TenCongThuc ?></b></h5>
        <p style="font-size: 16px" class="card-text"><?php echo $data['0']->NoiDungMoTa ?></p>
    </div>
</div>

<div class="cachlam" >
    <h4 style="padding: 15px;"><b>Nguyên liệu làm <?php echo $data['0']->TenCongThuc ?></b></h4>
    <div class="row" style="margin-left: 20px; margin-top: 15px">
        <?php  foreach ($tpnguyenlieu as $value): ?>
            <div class="col-sm-5">  <span style="cursor: pointer" class="fa fa-plus-circle text-blue">
             </span>
                <label for=""><?php echo $value?></label>
            </div><br><br>
        <?php endforeach;?>
    </div>
</div>

<div class="cacbuoc" style="margin-bottom:20px">
    <h2 style="margin-left: -48px; font-size: 38px">Thực hiện</h2>
    <div >
        <div class="col-sm-2">
            <h4 style="font-size:12px;color:#a0a0a0; margin:50px 45px 0px 20px" >Bước</h4>
            <span style="margin-left:30px;color:crimson;font-weight: bold;">1</span>
        </div>
        <div class="col-sm-8" style="margin-top:10px; margin-left: 130px">
            <p style="margin-top: -50px; font-size: 16px" ><?php echo $buoc1 ?></p>
        </div>
        <div class="card" style="width: 650px; border-radius: 20px;margin-left:65px;margin-bottom:15px; margin-top: 15px;">
            <img class="card-img" style="border-radius: 20px" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data['0']->IMGbuoc1?>" alt="Card image cap"
        </div>
    </div><br><hr>
    <div>
        <div class="col-sm-2">
            <h4 style="font-size:12px;color:#a0a0a0; margin:50px 45px 0px 20px" >Bước</h4>
            <span style="margin-left:30px;color:crimson;font-weight: bold;">2</span>
        </div>

        <div class="col-sm-8" style="margin-top:10px;margin-left: 130px">
            <p style="margin-top: -50px; font-size: 16px"><?php echo $buoc2 ?></p>
        </div>
        <div class="card" style="width: 650px; border-radius: 20px;margin-left:65px;margin-bottom:15px; margin-top: 15px;">
            <img class="card-img" style="border-radius: 20px" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data['0']->IMGbuoc2?>" alt="Card image cap"
        </div>
    </div><br><hr>
    <div>
        <div class="col-sm-2">
            <h4 style="font-size:12px;color:#a0a0a0; margin:50px 45px 0px 20px" >Bước</h4>
            <span style="margin-left:30px;color:crimson;font-weight: bold;">3</span>
        </div>
        <div class="col-sm-8" style="margin-top:10px; margin-left: 130px";>
            <p style="margin-top: -50px; font-size: 16px"><?php echo $buoc3 ?></p>
        </div>
        <div class="card" style="width: 650px; border-radius: 20px;margin-left:65px;margin-bottom:15px; margin-top: 15px;">
            <img class="card-img" style="border-radius: 20px" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data['0']->IMGbuoc3?>" alt="Card image cap"
        </div>
    </div><br><hr>
    <div>
        <div class="col-sm-2">
            <h4 style="font-size:12px;color:#a0a0a0; margin:50px 45px 0px 20px" >Bước</h4>
            <span style="margin-left:30px;color:crimson;font-weight: bold;">4</span>
        </div>
        <div class="col-sm-8" style="margin-top:10px; margin-left: 130px";>
            <p style="margin-top: -50px; font-size: 16px"><?php echo $buoc4 ?></p>
        </div>
        <div class="card" style="width: 650px; border-radius: 20px;margin-left:65px;margin-bottom:15px; margin-top: 15px;">
            <img class="card-img" style="border-radius: 20px" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$data['0']->IMGbuoc4?>" alt="Card image cap"
        </div>
    </div><br>

</div>
</div>
</div>
</div>
</div>
<?php
    $id= arg(1);
    $data1 = get_comment($id);
    $data2 = count_congthuc();
    $data3 = display_imguser_cmt($id);
   ?>
<input type="hidden" value="<?php echo $id ?>" name="get_id_cmt" >
<div  class="commentcontainer"  style="margin-bottom:50px;padding:5px;">
    <h4>Bình luận</h4>
    <?php foreach ($data3 as $value): ?>
    <div class="comment" style="margin:5px; border-style: ridge;  border-width: 1.1px;padding:5px;height: auto;width: 730px";>
        <div class="row">
            <img src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/'.$value->IMGUser?>"  style=" border-radius: 50%;width:48px;height:48px; margin-left: 13px">
            <span style=" font-weight: bold; margin-top: 19px; margin-left: 7px;"><?php echo '    '. $value->TenUser ?></span>
        </div>
        <span><?php echo $value->comment ?></span>
    </div>
    <?php endforeach; ?>
</div>

<div class="input-group simple-input fake-form" style="margin-left:373px; margin-top: -40px; width: 758px; margin-bottom: 31px">
    <input type="text" name="comments" placeholder="Nội dung thảo luận..."class="form-control simple-form-control"style="margin-left:5px; padding: 28px; border-radius: 10px">
    <?php if( $_SESSION['tenuser'] == ''){
        echo ' <span class="input-group-btn">
                <button id="manh"  onclick="alert(\'Bạn chưa đăng nhập để dùng tính năng này\')"  class="btn btn-danger" name="submit-comment" style="margin-right:0px; padding: 16px; border-radius: 8px">Gửi</button>
            </span>';
    } else{
        echo ' <span class="input-group-btn">
                <button id="manh" class="btn btn-danger" name="submit-comment" style="margin-right:0px; padding: 16px; border-radius: 8px">Gửi</button>
            </span>';
    }
        ?>

</div>
</body>
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
<style>
    .cachlam,.cacbuoc,.commentcontainer{
        margin-top: 20px;
        border-radius: 10px;
        margin-left: 380px;
        background-color:#fff;
        width: 750px;
    }
    .fa-plus-circle{
        content: "\f055";
    }
    .text-blue{
        color: #428bca;
    }
    hr {
        display: block;
        margin-top: 0.5em;
        margin-bottom: 0.5em;
        margin-left: auto;
        margin-right: auto;
        border-width: 1.5px;
    }
</style>



