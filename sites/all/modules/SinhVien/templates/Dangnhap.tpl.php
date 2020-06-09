<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_path().'sites/all/themes/blankM'?>/css/test.css">
</head>
<body style="background-image: url('<?php echo base_path().'sites/all/themes/blankM'?>/images/4.jpg')">
<div class="container"  >
    <div class="row">
        <div class="col-sm-12  col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form class="form-signin" method="post">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus value="<?php if (isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>">
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required value="<?php if (isset($_COOKIE['pass'])) echo $_COOKIE['pass']; ?>">
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" <?php if (isset($_COOKIE['email'])) echo "checked"; ?>>
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                            <a href="#" style="float:right">Quên mật khẩu</a>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase"  name="btn_submit" style="margin-top:80px" type="submit" href="<?php echo base_path().'home_home/'.$data->Id ?>">Sign in</button>

                        <a href="<?php echo base_path().'dangki' ?>" style="margin:20px auto; text-align:center; display:block; width:120px;font-size:12px" class="button large hpbottom">Sign up</a>

                </div>

                </form>
            </div>
        </div>

    </div>
</div>
</div>
</body>
</html>

