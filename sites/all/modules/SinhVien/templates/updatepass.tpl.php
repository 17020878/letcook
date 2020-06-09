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
                    <h5 class="card-title text-center">Change Password</h5>
                    <form class="form-signin" method="post">

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="c_pass" class="form-control" placeholder="Current password" required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="n_pass" class="form-control" placeholder="New password" required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="n_pass_verify" class="form-control" placeholder="Confirm new password" required>
                        </div>
<!--                        <div class="custom-control custom-checkbox mb-3">-->
<!--                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember2" --><?php //if (isset($_COOKIE['email'])) echo "checked"; ?><!-->
<!--                            <label class="custom-control-label" for="customCheck1">Remember password</label>-->
<!--                        </div>-->
                        <button class="btn btn-lg btn-primary btn-block text-uppercase"  name="btn_submit_change" style="margin-top:30px" type="submit" href="<?php echo base_path().'home_home/'.$data->Id ?>">Change Password</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

