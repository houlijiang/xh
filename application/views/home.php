<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>首页</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/site-head.css">
        <link rel="stylesheet" href="/css/site-main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- 只让 IE 8 以及更低版本的浏览器下载该脚本  -->
        <!--[if (lt IE 9) & (!IEMobile)]>
        <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lte IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header class="site-mast">
            <!-- site master head -->
            <div class="site-mast-branding container">
                <a class="site-logo" href="#" gaevent="header/logo">新婚网</a>
            </div>
            <!-- bannar-->
                <ul class="nav nav-tabs " role="tablist">
                    <li role="presentation" class="active"><a href="/home">首页</a></li>
                    <li role="presentation" ><a href="#">促销喜品</a></li>
                    <li role="presentation"><a href="/hunba">结婚吧</a></li>
                </ul>
        </header>
        <!-- site main-->
        <div class="site-main">
            <div class="container">
                <div class="row">
					<?PHP foreach($list as $v):?>
                    <div class="col-sm-6 col-md-3">
                        <a class="thumbnail" target="_blank" href="/goods/view/<?PHP echo $v['id'];?>">
                            <img src="<?PHP echo img_url($v['goods_thumb']);?>" alt="..." >
                            <div class="caption price-color">
                                <h4>¥ <?PHP echo $v['goods_price'];?><span>原价¥ <?PHP echo $v['market_price'];?></span></h4>
                                <p><?PHP echo $v['goods_name'];?></p>
                            </div>
                        </a>
                    </div>
                    <?PHP endforeach;?>
                    
                </div>
                <nav class="pagination-align">
                    <img src="/img/page-girl.png">
                    <ul class="pagination">
                        <?PHP echo $page?>
                    </ul>
                    <img src="/img/page-boy.png">
                </nav>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="submit">
                            <p class="text-center">买结婚用品就上新婚网 <a href="mailto:admin@xinhun.com">admin@xinhun.com</a> 在这里展示吧！</p>
                            <p class="text-center"></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
