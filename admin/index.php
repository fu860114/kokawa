<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>kokawa admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="ionicons/2.0.1/css/ionicons.min.css">
    <!-- 額外的套件 -->
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/iCheck/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- 自訂的CSS -->
    <link rel="stylesheet" href="include/css/style.css">

    <script>
        function submitgo() {
            if (document.getElementById("account").value == "") {
                bootbox.alert('帳號不可以空白');
            } else if (document.getElementById("passwd").value == "") {
                bootbox.alert('密碼不可以空白');
            } else {
                if (document.getElementById('remember').checked) {
                    document.cookie = "BKuser=" + $('#account').val() + "; expires=Mon, 31 Dec 2035 12:00:00 GMT; path=/";
                    document.cookie = "BKpasswd=" + $('#passwd').val() + "; expires=Mon, 31 Dec 2035 12:00:00 GMT; path=/";
                    document.cookie = "BKremember=YES; expires=Mon, 31 Dec 2035 12:00:00 GMT; path=/";
                }

                loginform.submit();
            }
        }
    </script>

</head>

<body class="hold-transition skin-blue-light login-page">


    <div class="login-box">
        <div class="login-logo">
            <img style="width: 100px;" src="../assets/images/kokawa-LOGO2.png" alt="">
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <h4 class="login-box-msg">登入</h4>
            <p class="login-box-msg">歡迎使用 kokawa後台作業系統 !</p>


            <form method="post" name="loginform" action="entry.php" class="form">
                <input type="hidden" name="workflag" value="first">

                <div class="form-group has-feedback">
                    <input type="text" placeholder="帳號" class="form-control" name="account" id="account" value="<?= $_COOKIE["BKuser"]; ?>" autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" placeholder="密碼" class="form-control" name="passwd" id="passwd" value="<?= $_COOKIE["BKpasswd"]; ?>">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>



                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label class="">
                                <input type="checkbox" name="remember" id="remember" value="Y" <? if ($_COOKIE["BKremember"] == "YES") echo "checked"; ?>> 記住我
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button class="btn btn-primary btn-block btn-flat" type="button" onclick="submitgo(); return false;">登入</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>

        <!-- /.login-box-body -->
        <div class="login-box-body login_footer">
            <button class="btn btn-default btn-block btn-flat btn-sm" data-toggle="popover" data-placement="top" data-content="請洽系統帳號的管理人員，若為系統帳號忘記密碼，請洽Simon！"><i class="fa fa-question-circle" aria-hidden="true"></i> 忘記密碼</button>
        </div>
    </div>


    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootbox.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- 額外的套件 -->
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <!-- 台灣地址套件2015版 -->
    <script src="include/js/jquery.twzipcode.min.js"></script>
    <!-- ajax動態下拉選單 -->
    <script src="include/js/jquery.selectboxes.js"></script>


    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue',
            increaseArea: '20%' // optional
        });

        $('[data-toggle="popover"]').popover();
    </script>


</body>

</html>