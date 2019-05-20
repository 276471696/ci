<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>登录</title>
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="/bootstrap/jquery-3.3.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="/bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="content" style="width:400px;height:400px;margin:0 auto;">
            <div class="book-form" style="margin-top:40px;">
                <div class="agile-row">
                    <h3 class="mb-5" style="text-align:center;">登录</h3>
                    <span class="fa fa-lock"></span>
                    <div class="clear"></div>
                    <div class="login-agileits-top">
                        <form action="/index.php/admin/login/login" method="post" class="form">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="user_name" placeholder="用户名" required="">
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" placeholder="密码" required="">
                            </div>
                            <div class="input-group mb-3" style="margin-left:170px;">
                                <input type="submit" class="btn btn-success" value="登录">
                            </div>
                        </form>
                    </div>
                    <div class="login-agileits-bottom">
                        <h6><a href="#">忘记密码?</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
