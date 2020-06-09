<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Đăng món ăn</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_path() . 'sites/all/module/SinhVien/css/cookcss.css'?>" />
<!--    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->

</head>
<body style="background-color:#e9ebee">
<h1>Tạo mới và chia sẻ công thức</h1>
<form method="post" action="" enctype="multipart/form-data">
    <div class="containeraddmonan">
        <div class="file-upload" >
            <div class="image-upload-wrap">
                <input name="anh"class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                <div class="drag-text">
                    <!-- <h3 style="margin-left=10dx">Chọn ảnh món ăn mà bạn muốn thêm</h3> -->
                    <img style="margin-left:  278px" src="<?php echo base_path().'sites/all/modules/SinhVien/css/images/camera.png'?>">
                    <p class="hihi"  >Click để tải hình món ăn</p>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
            </div>
        </div>
        <input class ="form1" type="text" name="tencongthuc" value="" required placeholder="Nhập tên công thức"></input>
        <textarea class="textarea1" rows="4" type="text" name="motamonan" placeholder="Nhập nội dung mô tả ngắn gọn về công thức" ></textarea>
        <h3 style="margin-left:55px" >Nguyên liệu</h3>
        <input class ="form1" type="text" name="nguyenlieu" value="" required placeholder="Nhập nguyên liệu, ví dụ: 100gr thịt bò, 3 muỗng cà phê nước tương">
        <h3 style="margin-left:55px" >Cách làm</h3>

        <?php for($i =1; $i<5; $i++):
            if($i==1){ ?>
                <div class="cacbuoc" index_add="<?php echo $i?>">
            <?php }else{ ?>
                <div class="cacbuoc d-none" index_add="<?php echo $i?>">
            <?php }?>
            <label class="sobuoc"><?php echo $i?></label>
            <textarea class="form2" rows="4" type="text" name="cachlamb<?php echo $i?>" placeholder="Nhập hướng dẫn cách làm cho bước <?php echo $i?>" ></textarea>
            <div class="file-upload1" >
                <div class="image-upload-wrap<?php echo $i?>">
                    <input name="anh<?php echo $i?>"  class="file-upload-input<?php echo $i?>" type='file' onchange="readURL(this);" accept="image/*" />
                    <div class="drag-text">
                        <label style="margin-left:45px" >Click để tải hình món ăn</label>
                    </div>
                </div>
                <div class="file-upload-content<?php echo $i?>">
                    <img class="file-upload-image<?php echo $i?>" src="#" alt="your image" />
                </div>
            </div>
        </div>
        <?php endfor; ?>
        <button id="add" type="button" class="btn btn-primary">Thêm bước</button>

<!--        <div class="cacbuoc">-->
<!--            <label class="sobuoc">2</label>-->
<!--            <textarea class="form2" rows="4" type="text" name="cachlamb2" placeholder="Nhập hướng dẫn cách làm cho bước 2" ></textarea>-->
<!--            <div class="file-upload1" >-->
<!--                <div class="image-upload-wrap2">-->
<!--                    <input name="anh2"  class="file-upload-input2" type='file' onchange="readURL(this);" accept="image/*" />-->
<!--                    <div class="drag-text">-->
<!--                        <label style="margin-left:45px;" >Click để tải hình món ăn</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="file-upload-content2">-->
<!--                    <img class="file-upload-image2" src="#" alt="your image" />-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="cacbuoc">-->
<!--            <label class="sobuoc">3</label>-->
<!--            <textarea class="form2" rows="4" type="text" name="cachlamb3" placeholder="Nhập hướng dẫn cách làm cho bước 3" ></textarea>-->
<!--            <div class="file-upload1" >-->
<!--                <div class="image-upload-wrap3">-->
<!--                    <input name="anh3"  class="file-upload-input3" type='file' onchange="readURL(this);" accept="image/*" />-->
<!--                    <div class="drag-text">-->
<!--                         <h3 style="margin-left=10dx">Chọn ảnh m ón ăn mà bạn muốn thêm</h3> -->
<!--                        <label style="margin-left:45px" >Click để tải hình món ăn</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="file-upload-content3">-->
<!--                    <img class="file-upload-image3" src="#" alt="your image" />-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="cacbuoc">-->
<!--            <label class="sobuoc">4</label>-->
<!--            <textarea class="form2" rows="4" type="text" name="cachlamb4" placeholder="Nhập hướng dẫn cách làm cho bước 4" ></textarea>-->
<!--            <div class="file-upload1" >-->
<!--                <div class="image-upload-wrap4">-->
<!--                    <input name="anh4"  class="file-upload-input4" type='file' onchange="readURL(this);" accept="image/*" />-->
<!--                    <div class="drag-text">-->
<!--                         <h3 style="margin-left=10dx">Chọn ảnh m ón ăn mà bạn muốn thêm</h3> -->
<!--                        <label style="margin-left:45px" >Click để tải hình món ăn</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="file-upload-content4">-->
<!--                    <img class="file-upload-image4" src="#" alt="your image" />-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
    <input class="btn btn-primary" type="submit" name= "create" value="Đăng" style="margin:30px auto; margin-left: 650px; text-align:center; display:block; width:250px;">
</form>

<hr class="my-4">
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>contact us</h2>
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
</html>
<!--    /*css add mon an*/-->
<style>
    .containeraddmonan{
        background-color: #fff;
        padding: 20px;
        max-width: 770px;
        margin: 0 auto;
        border: 0;
        overflow: hidden;
        border-radius: 12px;
    }
    .hihi{
        margin-left: 250px;
        margin-top: 0;
    }
    textarea{
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: initial;
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: start;
        -webkit-appearance: textarea;
        background-color: white;
        -webkit-rtl-ordering: logical;
        flex-direction: column;
        /*resize: auto;*/
        cursor: text;
        white-space: pre-wrap;
        overflow-wrap: break-word;
        margin: 0em;
        font: 400 13.3333px Arial;
        border-width: 1px;
        border-style: solid;
        border-color: rgb(169, 169, 169);
        border-image: initial;
        padding: 2px;
    }
    .luu{
        background-color: cornflowerblue;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
        margin-left: 196px;
        color: white;
    }
    .sobuoc{
        background-color: red;
        display: block;
        float: left;
        padding: 6.5px;
        text-align: center;
        background: #c70808;
        color: #fff;
        height: 32px;
        width: 32px;
        vertical-align: middle;
        border-radius: 20px;
        margin-left: 10px;
        margin-top: 10px;

    }
    .form1, select,.textarea1 {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 55px;
        width: 650px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
    }
    .form2{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 100px;
        width: 450px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;

    }


    h1{
        font-size: 30px;
        margin-top: 20px;
        margin-bottom: 10px;
        font-weight: 500;
        line-height: 1.1;
        text-align: center;
    }
    .cacbuoc {
        width: 650px;
        margin-left: 55px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        margin-top: 20px;
        border-radius: 10px;
        position: relative;

    }

    .file-upload {
        width: 650px;
        margin-left: 55px;
        margin-bottom: 20px;
    }
    .file-upload1 {

        width: 450px;

    }
    .file-upload-content,.file-upload-content1,.file-upload-content2,.file-upload-content3,.file-upload-content4 {
        display: none;
        text-align: center;
    }
    .file-upload-input,.file-upload-input1,.file-upload-input2,.file-upload-input3,.file-upload-input4 {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }
    .image-upload-wrap{
        /* background-color: #e9ebee; */
        border: 1px solid #ccc;
        border-radius: 10px;
        margin-top: 20px;
        border-radius: 10px;
        position: relative;
        background-color: #e9ebee;


    }
    .image-upload-wrap1,.image-upload-wrap2,.image-upload-wrap3,.image-upload-wrap4{
        background-color: cornflowerblue;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
        margin-left: 196px;
        color: white;

    }
    /*.image-upload-wrap1:hover{*/
    /*background-color: #e9ebee;*/
    /*}*/
    /*.image-upload-wrap2:hover{*/
    /*background-color: #e9ebee;*/
    /*}*/
    /*.image-upload-wrap3:hover{*/
    /*background-color: #e9ebee;*/
    /*}*/
    .cacbuoc:hover{
        background-color: #e9ebee;
    }

    .file-upload-image {
        max-height: 400px;
        max-width: 550px;
        margin-left: -31px;
        padding: 0px;
    }
    .file-upload-image1,.file-upload-image2,.file-upload-image3,.file-upload-image4{
        /*max-height: 400px;*/
        max-width: 580px;
        margin: 0px -150px 25px 45px;
        /*padding: 0px;*/
    }
    /*css button*/
    .myButton {
        background-color:#44c767;
        border-radius:28px;
        border:1px solid #18ab29;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:17px;
        padding:12px 54px;
        text-decoration:none;
        text-shadow:0px 1px 0px #2f6627;
        margin-left: 332px;
    }
    .myButton:hover {
        background-color:#5cbf2a;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }
</style>