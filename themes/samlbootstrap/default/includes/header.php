<?php header('X-Frame-Options: SAMEORIGIN'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
.right { text-align: right; }
.jumbotron {
    position: relative;
    background: #000 url("https://i.ytimg.com/vi/7Aj5iamq9O8/maxresdefault.jpg") center center;
    width: 100%;
    height: 100%;
    height: 800px;
    background-size: cover;
    overflow: hidden;
    padding: 0;
    margin: 0;
}

  </style>
</head>
<body>
<div class="jumbotron">
<div class="container-fluid">
  <a href="https://idp.dev/simplesaml/module.php/core/loginuserpass.php?AuthState=_d287c34cbe1f62fdd823deeeed361bcac626cee58a%3Ahttps%3A%2F%2Fidp.dev%2Fsimplesaml%2Fmodule.php%2Fcore%2Fas_login.php%3FAuthId%3Dexample-ldap%26ReturnTo%3Dhttps%253A%252F%252Fidp.dev%252Fsimplesaml%252Fmodule.php%252Fcore%252Fauthenticate.php%253Fas%253Dexample-ldap">login</a>
  <a href="https://idp.dev/simplesaml/module.php/core/authenticate.php?as=example-ldap&logout">logout</a>