<?php /* Smarty version Smarty-3.1.16, created on 2016-01-01 12:24:12
         compiled from "tpl\login.html" */ ?>
<?php /*%%SmartyHeaderCode:32701568547f509df26-44746478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'effe9b8452f05a59c1b9d15c345a17d39d8de374' => 
    array (
      0 => 'tpl\\login.html',
      1 => 1451622250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32701568547f509df26-44746478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_568547f50d1545_39719907',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568547f50d1545_39719907')) {function content_568547f50d1545_39719907($_smarty_tpl) {?><html>
<head>
    <title>Login</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
<form action="<<?php ?>?php echo $_SERVER['PHP_SELF'];?<?php ?>>" method="post">
    <div>
        <h1>Login</h1></br></br>
        用户名:<input type="text" name="username"></br>
        密码:&nbsp&nbsp<input type="password" name="password"></br></br>
        <input type="submit" value="登录">&nbsp&nbsp
        <input type="button" value="取消"></br></br>
        <a href="register.php">没有账户点击注册</a>
    </div>
</form>
</body>
</html><?php }} ?>
