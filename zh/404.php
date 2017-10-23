<!doctype html>
<html class="error-page no-js" lang="">
<head>

    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

    <title>PAGE NOT FOUND</title>

    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/nofound.css'); ?>">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="bg-white center-wrapper">

<div class="center-content text-center">
    <div class="error-number">404</div>
    <div class="mg-b-lg">PAGE NOT FOUND</div>
    <p>Sorry, but the page you were trying to view does not exist.
    </p>
    <a class="return-home" href="/">Return Home</a>
    <ul class="mg-t-lg error-nav">
        <li>
            <a href="javascript:;">About</a>
        </li>
        <li>
            <a href="javascript:;">Help</a>
        </li>
        <li>
            <a href="javascript:;">Status</a>
        </li>
    </ul>
</div>
<script>
    (function () {
        setTimeout(function () {
            if (history.go(-1) != undefined) {
                history.go(-1)
            } else {
                location.href = "/";
            }
        }, 5000)
    })();
</script>
</body>

</html>
