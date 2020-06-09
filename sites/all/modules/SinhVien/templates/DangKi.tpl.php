<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_path().'sites/all/themes/blankM'?>/css/test.css">
    <title></title>
</head>
<body style="background-image: url('<?php echo base_path().'sites/all/themes/blankM'?>/images/4.jpg')">
<div class="container"  >
    <div class="row">
        <div class="col-sm-12  col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign Up</h5>
                    <form class="form-signin" method="post">
                        <div class="form-label-group">
                            <input type="text" id="inputEmail" name=" fullname" class="form-control" placeholder="User name" required>
                        </div>

                        <div class="form-label-group">
                            <input type="email" id="inputPassword" name="email" class="form-control" placeholder="Email address" required autofocus>
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword"  name = password class="form-control" placeholder="Password" required>
                        </div>


                        <button class="btn btn-lg btn-primary btn-block text-uppercase" style="margin-top:80px" type="submit">Sign UP</button>

                        <a href="<?php echo base_path().'dangnhap' ?>" style="margin:20px auto; text-align:center; display:block; width:120px;font-size:12px" class="button large hpbottom">Sign in</a>

                </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</body>
