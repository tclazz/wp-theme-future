<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Title</title>
    <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .content{
            width: 100%;
            min-height: 60vh;
            color: var(--bs-tea);
        }
        .webContainer{
            display: flex;
            width: 100%;
            min-height: 90vh;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .contentWrapper{
            width: 100%;
            flex: 1;
        }
        .footerWrapper{
            width: 100%;
        }
    </style>
</head>
<body style="padding-top: 60px">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-lg">
        <a class="navbar-brand" href="#">
            <img src="https://v5.bootcss.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt=""
                 width="30" height="24" class="d-inline-block align-text-top mr-3">TClazz
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://tclazz.com">home</a>
                </li>
            </ul>
            <form class="d-flex" style="height: 100%;min-width: 300px;">
                <input class="form-control me-2" type="search" placeholder="search blogs" aria-label="Search">
                <button class="btn btn-outline-warning" type="button" style="white-space: nowrap">search</button>
            </form>
        </div>
    </div>
</nav>
<div class="webContainer">
    <div class="contentWrapper">
        <div class="container-lg">
            <div class="row row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1 g-3">
                <div class="col">
                    <div class="content text-danger text-center" style="display: flex;
            flex-direction: row;align-items: center;justify-content: center">
                        this site is building...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footerWrapper">
        <div class="container-fluid text-center">
            © 2018-2021 CoreCmd All Rights Reserved.
            <a href="http://www.miitbeian.gov.cn" class="reborn-footer-url" target="_blank">京ICP备18063315号-2</a>
            <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=52038202001416" class="reborn-footer-url" target="_blank">贵公网安备 52038202001416号</a>
        </div>
    </div>
</div>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>
