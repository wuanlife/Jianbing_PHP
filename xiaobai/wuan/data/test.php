<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="format-detection" content="adress=no">
    <title>主页 - 午安网 - 过你想过的生活</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/wuan.css">
</head>
<body>
<!-- file="head.html"-->
<!-- head start-->
<div class="nav navbar navbar-fixed-top navbar-head-color navbar-head">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-brand navbar-header">
                    <a class="" href="index.php">午安网</a>
                </div>
                <div class="pull-left hidden-sm hidden-xs">
                    <ul class="list-inline">
                        <li><a href="index.php">发现</a></li>
                        <li><a href="myGroup.php">我的星球</a></li>
                        <li><a href="groups.php">全部星球</a></li>
                    </ul>
                </div>
                <div class=" pull-right">
                    <ul class="list-inline">
                        <li><a href="login.html">登录</a></li>
                        <li><a href="reg.html">注册</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- head end-->
<!-- framework-->
<!-- content-->
<div class="framework-content">
    <div class="container text-center">
        <div class="text-center form-logo">
        </div>
        <form class="form-signin" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label for="userName" class="sr-only">userName</label>
            <input type="text" id="userName" class="form-control" placeholder="用户名" required="" autofocus="" name="name">
            <label for="petName" class="sr-only">petName</label>
            <input type="text" id="petName" class="form-control" placeholder="昵&#12288;称" required="" autofocus="" name="nickName">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="密&#12288;码" required="" name="password">
            <label for="userEmail" class="sr-only">Email</label>
            <input type="email" id="userEmail" class="form-control" placeholder="邮&#12288;箱" required="" name="Email">
            <button class="btn btn-primary btn-block" type="submit" >注册</button>
        </form>

    </div>
</div>
<?php
if(!empty($_POST)) {
    if (preg_match("/^[a-zA-Z0-9]{,15}$", $name)) {
//        if(preg_match("/^[a-zA-Z0-9]|")){
//
//        }
    } else {
        echo "<script>alert('用户名只能为数字和字母，不得超过16位！');</script>";
    }
}
?>
<script src="js/jquery-1.11.3.min.js"></script>
</body>
</html>