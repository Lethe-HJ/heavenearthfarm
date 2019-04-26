<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>天地农耕</title>
    <link rel="stylesheet" href="{{URL::asset('vendor/font/iconfont.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <link rel="stylesheet" href="{{URL::asset('vendor/swiper-4.5.0/dist/css/swiper.min.css')}}">
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" >

    {{--<link href="{{URL::asset('css/index.css')}}" rel="stylesheet">--}}

    <link href="{{URL::asset('css/Normalize/Normalize.css')}}" rel="stylesheet">
    <script src="{{URL::asset('vendor/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{URL::asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{URL::asset('vendor/js/ie8-responsive-file-warning.js')}}"></script>
    <![endif]-->
    <script src="{{URL::asset('vendor/js/ie-emulation-modes-warning.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{URL::asset('vendor/html5shiv/html5shiv.min.js')}}"></script>
    <script src="{{URL::asset('vendor/respond/respond.min.js')}}"></script>
    <![endif]-->
    <!-- Placed at the end of the document so the pages load faster -->
    {{--<!--<script src="{{URL::asset('vendor/jQuery/jquery-2.2.3.min.js')}}"></script>-->--}}

    {{--<!--<script src="{{URL::asset('vendor/swiper-4.5.0/dist/js/swiper.min.js')}}"></script>-->--}}
    <script src="{{URL::asset('vendor/swiper-4.5.0/dist/js/swiper.min.js')}}"></script>
    {{--<!--<script>window.jQuery || document.write('<script src="{{URL::asset('../../assets/js/vendor/jquery.min.js')}}"><\/script>')</script>-->--}}

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{--<!--<script src="{{URL::asset('vendor/js/ie10-viewport-bug-workaround.js')}}"></script>-->--}}
</head>
<style>
    body{
        font-family: "黑体";
    }
    #myCarousel {
        width: 100%;
        padding: 0px;
        margin: 0px;
        /*height:520px;*/
    }
    #NavCon div:hover{
        cursor: pointer;
    }
    #NavTop{
        display: block;
    }
    .section1{
        display: none;
    }
    #myCarousel .carousel-inner .lunbo{
        display: block;
        width:100%;
        /*height: 100%;*/
        /*border:1px solid blue;*/
    }
    .secition1 .row .dl{
        margin-top: 30px;
        /*border:1px solid red;*/
    }
    .section1_img{
        width:76px;
        height:76px;
    }
    .section1_word a{
        color:#333333;
        font-size: 16px;
    }
    .img1_position,.word1_position{
        margin-left: 250px;
    }
    .img3_position,.word3_position{
        margin-right: 250px;
    }
    .secition2{
        border-top:1px solid #ccc;
        padding-top: 40px;
        padding-bottom: 10px;
    }
    .secition2 img{
        margin-top: 20px;
    }
    #swiper2{
        width:480px;
        height: 290px;
        position:relative;
        /*border:1px solid #ccc;*/
        margin-left: 40%;
    }
    #video1,#video2,#video3,#video4{
        width:100%;
        height: 100%;
        object-fit: fill
    }
    #dots{
        position:absolute;
        bottom: 10%;
        left:5%;
    }
    .swiper-button-prev{
        opacity: 0.5;
    }
    .swiper-button-next{
        opacity: 0.5;
    }
    #swiper2 .swiper-slide .span{
        width:480px;
        height: 290px;
        position:absolute;
        top:0;
        left:0;

    }
    .iconfont{
        font-size: 60px;
        color: #fff;
        position:absolute;
        width:480px;
        height: 290px;
        opacity: 0.6;
        /*border:1px solid red;*/
        text-align: center;
        line-height: 290px;
    }
    .secition3{
        margin-top: 60px;
        margin-left: 20px;
        /*border:1px solid blue;*/
    }
    /*.section3_img{*/
    /*width:580px;*/
    /*height: 300px;*/
    /*}*/
    .secition3_word{
        width:500px;
        height: 55px;
        /*padding: 8px;*/
        text-indent: 25px;
        line-height: 28px;
        margin-bottom: 80px;
        padding-top: 10px;
        font-size: 16px;
        font-family: "黑体";
    }
    .section3_left{
        width:50%;
        height: 300px;
        /*border:1px solid red;*/
    }
    .section3_right{
        padding-left: 3%;
        /*border:1px solid red;*/
    }
    .section3_right .section3_xiangqin{
        padding-top: 30px;
        /*border:1px solid red;*/
    }
    .section3_right h1{
        font-family: "黑体";
        /*margin-top: 8px;*/
        /*margin-bottom: 0;*/
    }
    .section4_img{
        width:100%;
        /*height: 273px;*/
        /*border:1px solid red;*/
    }
    .secition4{
        margin-top: 75px;
    }
    .secition5 img{
        margin-top: 50px;
        margin-bottom: 50px;
    }
    .section6{
        /*background: url("../images/frontend/end.png");*/
        background-size: 100% 100%;
        /*background-size:contain;*/
        background-repeat: no-repeat;
        width:100%;
        height: 537px;
        position:relative;
        margin-top: 10px;
    }
    .section6_introduce{
        position:absolute;
        top:10px;
        right: 220px;
        color:#B99C56;
    }.section6_introduce .div1{
         margin-top: 20px;
         width:260px;
         height: 60px;
         text-align: center;
     }
    .div2{
        width:260px;
        height: 60px;
        letter-spacing:9px;
        text-align: center;
    }
    .div3{
        width:280px;
        height: 80px;
        /*border:1px solid red;*/
    }
    .section6_main .more{
        position: absolute;
        top:70%;
        left:64%;
    }
    .section6_introduce .div1 span:nth-of-type(1){
        font-size: 28px;
        margin-right: 10px;
    }
    .section6 .div2 span:nth-of-type(1){
        margin-right: 10px;
    }
    .section6 .div3 p:nth-of-type(1){
        text-align: center;
    }
    .section7{
        /*width:100%;*/
        height: 500px;
        position: relative;
        margin-top:40px;
        /*display:flex;*/
        /*justify-content: center; //子元素水平方向居中*/
        /*align-items: center;//子元素垂直方向居中*/
    }
    .section7 img {
        width:360px;
        height: 350px;
        position:absolute;
        top:5%;left:40%;
        /*border: 1px solid red;*/
    }
    .section7 .introduce_word01{
        position:absolute;
        top:4%;
        left:18%;
        text-align: right;
        /*width:220px;*/
        /*height:100px;*/
    }
    .section7  .introduce_title{
        /*width:220px;*/
        /*height:20px;*/
        text-align: right;
        color:#242424;
        font-size:14px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .section7  .introduce_sentence{
        width:400px;
        /*width:auto;*/
        height:140px;
        color:#7E7E7E;
        /*text-align: right;*/
        line-height: 25px;
        /*border:1px solid red;*/

    }
    .section7 .introduce_word02{
        position:absolute;
        top:36%;
        left:17%;
        text-align: right;
        /*width:220px;*/
        /*height:100px;*/
    }
    .section7 .introduce_word03{
        position:absolute;
        top:66%;
        left:20%;
        text-align: right;
        /*border:1px solid #ccc;*/
        /*width:220px;*/
        /*height:100px;*/
    }
    .section7 .introduce_word04{
        position:absolute;
        top:3%;
        left:60%;
        text-align: left;
        /*border:1px solid #ccc;*/
        /*width:1%;*/
        /*height:100px;*/
    }
    .section7 .introduce_word04 .introduce_title{
        /*width:220px;*/
        /*height:20px;*/
        text-align: left;
        color:#242424;
        font-size:14px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .section7 .introduce_word05{
        position:absolute;
        top:38%;
        left:61%;
        text-align: left;
        /*width:220px;*/
        /*height:100px;*/
    }
    .section7 .introduce_word05 .introduce_title{
        /*width:220px;*/
        /*height:20px;*/
        text-align: left;
        color:#242424;
        font-size:14px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .section7 .introduce_word06{
        position:absolute;
        top:68%;
        left:58%;
        text-align: left;
        /*width:220px;*/
        /*height:100px;*/
    }
    .section7 .introduce_word06 .introduce_title{
        /*width:220px;*/
        /*height:20px;*/
        text-align: left;
        color:#242424;
        font-size:14px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .section8{
        background-color: #F1F3F4;
        /*width:100%;*/
        /*height:500px;*/
        height: auto;
    }
    .section8 .section8_left{
        margin-left:280px;
        padding-top:60px;
        padding-left: 50px;
        margin-top: 40px;
        /*float:left;*/
        /*width:500px;height: 500px;*/
        /*border:1px solid red;*/
    }
    .section8 .section8_left h1{
        font-family: "黑体";
        margin-top: 8px;
    }
    .section8 .section8_left p{
        width:300px;height:120px;
        margin-top:30px;line-height: 1.8;
        font-size:14px;

    }
    .section8_right{
        background-color:#8C6238;
        color:#fff;
        /*border:1px solid red;*/
    }
    .section8_right .line4{
        width:80px;
        height:2px;
        background-color: #8C6238;
    }
    .right_container{
        background-color:#8C6238;
        width:780px;
        height:420px;
        margin-top:40px;
        /*border:1px solid red;*/
        /*float:left;*/
    }
    .section8 .species{
        /*float:left;*/
        /*border:1px solid red;*/
        margin-top: 20px;
    }
    .section8_right .species_img{
        width:200px;
        /*height:280px;*/
        height: auto;
        /* background-color:red; */
    }
    .section8_right .species_img01{
        width:80px;
        height:2px;
    }
    .species_title{
        margin-top: 10px;
    }
    .section8_right .species_word{
        width:84%;
        height:50px;
        font-size: 12px;
        text-align: center;
        /*border:1px solid red;*/
        /*margin-top:15px;*/
        margin: 10px auto;
    }
    .section8 .section8_left .img1{
        margin-bottom: 8px;
    }
    .section9 .news_title{
        /*display:flex;*/
        /*justify-content: center; //子元素水平方向居中*/
        /*align-items: center;//子元素垂直方向居中*/
        text-align: center;
        font-size: 24px;
        margin-top: 50px;
    }
    .section9 .news_title img{
        margin-bottom: 10px;
    }
    .section9 .news_container {
        width:70%;
        height: 460px;
        /*margin-top:20px;*/
        text-align: center;
        margin:10px auto;
        /*border: 1px solid blue;*/
        /*padding-left: 18%;*/
    }
    .section9 .news_container .news1{
        float:left;
        /*width:26%;*/
        height: auto;
        width:33.3%;
        /*border: 1px solid red;*/
    }
    .section9 .news_container .news1_img{
        width:100%;
    }
    .section9 .news_container .news_position{
        margin-left: 330px;
    }
    .news_container .news_title p{
        font-family: "黑体";
        font-size: 22px;
        color:#333;
        margin-top:8px;
    }
    .news_container .news_title{
        font-size:18px;
        width:350px;
        height:20px;
        text-align: left;
        margin-left: 0px;
        margin-top: 10px;

        /*border:1px solid red;*/
    }
    .news_container .news1 .news_content{
        font-size:16px;
        padding-top:20px;
        padding-bottom: 20px;
        width:100%;
        height: 120px;
        /*height:auto;*/
        color:#666666;
    }
    /*.news_container .news1 .news_content p{*/
        /*width:100%;*/
        /*height: auto;*/
        /*overflow : hidden;*/
        /*text-overflow: ellipsis;*/
        /*display: -webkit-box;*/
        /*-webkit-line-clamp: 2;*/
        /*-webkit-box-orient: vertical;*/
        /*word-break:break-all;*/
    /*}*/
    #NavTop{
        width:90px;
        height:200px;
        margin-top:50px;
        position:fixed;
        right:0px;top:150px;        /*固定位置,右浮动，距上150px*/
        text-align: center;
        z-index: 1000;
    }
    #NavTop #NavCon .P,.W,.Z,.D {
        text-decoration:none;
        color:#8C6238;
        width:58px;
        height:60px;
        background-color:#fff;
        display:block;
        margin-top:0px;
        margin-left:22px;
        line-height:25px;
        text-align:center;
        font-family:"微软雅黑";
        font-size:16px;
        /* border:1px solid #000; */
        margin-bottom: 2px;
        font-weight: bold;
        /*border:1px solid red;*/
    }
    #NavTop #NavCon a{
        color:#8C6238;
        text-decoration:none;
        height: 16px;
        line-height: 16px;
        padding-top: 10px !important;
        /*border:1px solid red;*/
    }
    #topArrow span{
        color:#8C6238;
        text-decoration:none;
        height: 16px;
        line-height: 16px;
        padding-top: 10px !important;
    }
    @media screen and (max-width:1680px) {
        #myCarousel{
            /*position:relative;*/
            /*top:0;*/
            /*left:0;*/
            width:100%;
            /*height: 500px;*/
            /*border:1px solid red;*/
        }
        #myCarousel .carousel-inner{
            width:100%;
            /*height: 100%;*/
            /*border:1px solid red;*/
        }
        #myCarousel .carousel-inner .lunbo{
            display: block;
            width:100%;
            /*height: 100%;*/
            /*border:1px solid blue;*/
        }
        .section3_left{
            width:50%;
            height: 300px;
            /*border:1px solid red;*/
            position:relative;
        }
        #swiper2{
            width:460px;
            height: 290px;
            position:relative;
            /*border:1px solid #ccc;*/
            /*margin-left: 20%;*/
            position:absolute;
            top:0px;
            right:2%;
        }
        #video1,#video2,#video3,#video4{
            width:100%;
            height: 100%;
            object-fit: fill
        }
        .section7 img {
            width:360px;
            height: 350px;
            position:absolute;
            top:5%;left:38%;
            /*border: 1px solid red;*/
        }
        .section7 .introduce_word01{
            position:absolute;
            top:5%;
            left:14%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7  .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: right;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7  .introduce_sentence{
            width:400px;
            height:120px;
            color:#7E7E7E;
            line-height: 30px;
            /*border:1px solid red;*/

        }
        .section7 .introduce_word02{
            position:absolute;
            top:35%;
            left:11%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word03{
            position:absolute;
            top:66%;
            left:16%;
            /*border:1px solid #ccc;*/
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word04{
            position:absolute;
            top:5%;
            left:60%;
            /*border:1px solid #ccc;*/
            /*width:1%;*/
            /*height:100px;*/
        }
        .section7 .introduce_word04 .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: left;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7 .introduce_word05{
            position:absolute;
            top:36%;
            left:62%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word05 .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: left;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7 .introduce_word06{
            position:absolute;
            top:68%;
            left:56%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word06 .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: left;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section8 .section8_left{
            margin-left:18%;
            padding-top:60px;
            padding-left: 0px;
            margin-top: 40px;
            width:20%;
            /*float:left;*/
            /*width:500px;height: 500px;*/
            /*border:1px solid red;*/
        }
        .section8_right{
            background-color:#8C6238;
            color:#fff;
            width:18%;
            height: auto;
            /*border:1px solid red;*/
        }
        .section8 .right_container{
            width:712px;
        }
        .section9 .news_container {
            margin-top:20px;
            text-align: center;
            width:75%;
            /*border: 1px solid blue;*/
            /*padding-left: 20%;*/
        }
        .section9 .news_container .news1{
            float:left;
            /*width:26%;*/
            height: auto;
            width:33.3%;
            /*border: 1px solid red;*/
        }
        .news_container .news_title p{
            font-family: "黑体";
            font-size: 18px;
            color:#333;
        }
        .news_container .news_title{
            font-size:16px;
            width:350px;
            height:20px;
            text-align: left;
            margin-left: 0px;
            margin-top: 10px;

            /*border:1px solid red;*/
        }
        .news_container .news1 .news_content{
            font-size:16px;
            padding-top:20px;
            padding-bottom: 20px;
            width:100%;
            /*height: auto;*/
            margin-bottom: -10px;
            color:#666666;
        }
        .section6{
            width:100%;
            height: 500px;
        }
    }


    @media screen and (max-width:1400px) {
        .section7 img {
            width:360px;
            height: 350px;
            position:absolute;
            top:5%;left:36%;
            /*border: 1px solid red;*/
        }
        .section7 .introduce_word01{
            position:absolute;
            top:5%;
            left:12%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7  .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: right;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7  .introduce_sentence{
            width:360px;
            height:120px;
            color:#7E7E7E;
            line-height: 25px;
            /*border:1px solid red;*/

        }
        .section7 .introduce_word02{
            position:absolute;
            top:35%;
            left:8%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word03{
            position:absolute;
            top:66%;
            left:15%;
            /*border:1px solid #ccc;*/
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word05{
            position:absolute;
            top:35%;
            left:65%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word04{
            position:absolute;
            top:3%;
            left:62%;
            /*border:1px solid #ccc;*/
            /*width:1%;*/
            /*height:100px;*/
            /*border:1px solid red;*/
        }
        .section7 .introduce_word06{
            position:absolute;
            top:66%;
            left:60%;
            /*width:220px;*/
            /*height:100px;*/
        }

        .section6{
            /*background: url("../images/frontend/end.png");*/
            background-size: 100% 100%;
            /*background-size:contain;*/
            background-repeat: no-repeat;
            width:100%;
            height: 420px;
            position:relative;
            margin-top: 10px;
        }
        .section8 .section8_left{
            margin-left:15%;
            padding-top:60px;
            padding-left: 0px;
            margin-top: 40px;
            width:20%;
            /*float:left;*/
            /*width:500px;height: 500px;*/
            /*border:1px solid red;*/
        }
        .section8_right{
            background-color:#8C6238;
            color:#fff;
            width:200px;
            height: auto;
            /*border:1px solid red;*/
        }
        .section8_right .line4{
            width:80px;
            height:2px;
            background-color: #8C6238;
        }
        .section8 .right_container{
            background-color:#8C6238;
            width:560px;
            /*height:400px;*/
            margin-top:40px;
            height:auto;
            /*border:1px solid red;*/
            /*float:left;*/
        }
        .section8 .species{
            /*float:left;*/
            margin-top: 20px;
        }
        .section8_right .species_img{
            width:160px;
            /*height:220px;*/
            height:auto;
            /* background-color:red; */
        }
        .section8_right .species_img01{
            width:80px;
            height:2px;
        }
        .section8_right .species_word{
            width:83%;
            /*height:60px;*/
            height:auto;
            /* border:1px solid red; */
            margin-top:10px;
        }
        .section9{
            margin-bottom: 0px;
        }
        .section9 .news_title{
            /*display:flex;*/
            /*justify-content: center; //子元素水平方向居中*/
            /*align-items: center;//子元素垂直方向居中*/
            /*text-align: center;*/
            font-size: 24px;
            margin-top: 30px;
        }
        .section9 .news_container {
            margin-top:20px;
            text-align: center;
            width:75%;
            /*border: 1px solid blue;*/
            /*padding-left: 20%;*/
        }
        .section9 .news_container p{
            overflow : hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            word-break:break-all;
        }
        .section9 .news_container .news1{
            float:left;
            /*width:26%;*/
            height: auto;
            width:33.3%;
            /*border: 1px solid red;*/
        }
        .section9 .news_container .news1_img{
            width:100%;
        }
        .section9 .news_container .news_position{
            margin-left: 330px;
        }
        .news_container .news_title{
            font-size:16px;
            /*-webkit-transform: scale(0.9);*/
            /*-moz-transform: scale(0.9);*/
            /*-o-transform: scale(0.9);*/
            /*transform: scale(0.9);*/
            /*border:1px solid red;*/
            width:300px;
            height:20px;
            text-align: left;
            margin-left: 0px;
            padding: 0px;
            margin-bottom: -10px;
            margin-top: 0px;
        }
        .news_container .news1 .news_content{
            width:100%;
            font-size:13px;
            padding-top:20px;
            padding-bottom: 20px;
            color:#989898;
            margin-top: 8px;
            margin-bottom: -30px;
            /*border:1px solid red;*/
        }
        .section9 .news_img{
            width:150px;
        }

    }
    @media screen and (max-width:1366px) {
        .section1_word a{
            font-size: 14px;
        }
        .section3_left{
            width:50%;
            height: 300px;
            /*border:1px solid red;*/
            position:relative;
        }
        #swiper2{
            width:460px;
            height: 290px;
            position:relative;
            /*border:1px solid #ccc;*/
            /*margin-left: 20%;*/
            position:absolute;
            top:0px;
            right:2%;
        }
        #video1,#video2,#video3,#video4{
            width:100%;
            height: 100%;
            object-fit: fill
        }
        .section6{
            width:100%;
            height: 400px;
        }
        .section6_main .more{
            position:absolute;
            left:62%;
            top:72%;
        }
        .section7 img {
            width:360px;
            height: 350px;
            position:absolute;
            top:5%;left:36%;
            /*border: 1px solid red;*/
        }
        .section7 .introduce_word01{
            position:absolute;
            top:5%;
            left:12%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7  .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: right;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7  .introduce_sentence{
            width:360px;
            height:120px;
            color:#7E7E7E;
            line-height: 25px;
            /*border:1px solid red;*/

        }
        .section7 .introduce_word02{
            position:absolute;
            top:35%;
            left:7%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word03{
            position:absolute;
            top:66%;
            left:12%;
            /*border:1px solid #ccc;*/
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word05{
            position:absolute;
            top:35%;
            left:65%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word04{
            position:absolute;
            top:3%;
            left:62%;
            /*border:1px solid #ccc;*/
            /*width:1%;*/
            /*height:100px;*/
            /*border:1px solid red;*/
        }
        .section7 .introduce_word06{
            position:absolute;
            top:66%;
            left:60%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section8 .section8_left{
            margin-left:15%;
            padding-top:60px;
            padding-left: 0px;
            margin-top: 40px;
            width:20%;
            /*float:left;*/
            /*width:500px;height: 500px;*/
            /*border:1px solid red;*/
        }
        .section8 .section8_right{
            /*background-color:#8C6238;*/
            color:#fff;
            width:200px;
            height: auto;
            /*border:1px solid red;*/
        }
        .section8_right .line4{
            width:80px;
            height:2px;
            background-color: #8C6238;
        }
        .right_container{
            background-color:#8C6238;
            width:550px;
            height:auto;
            margin-top:40px;
            /*border:1px solid red;*/
            /*float:left;*/
        }
        .section8 .species{
            /*float:left;*/
            margin-top: 20px;
        }
        .section8_right .species_img{
            width:160px;
            /*height:220px;*/
            height:auto;
            /* background-color:red; */
        }
        .section8_right .species_img01{
            width:80px;
            height:2px;
        }
        .section8_right .species_word{
            width:73%;
            /*height:60px;*/
            height:auto;
             /*border:1px solid red;*/
            /*margin-top:8px;*/
        }
        .section9 .news_container {
            margin-top:20px;
            text-align: center;
            width:75%;
            /*border: 1px solid blue;*/
            /*padding-left: 20%;*/
        }
        .section9 .news_container .news1{
            float:left;
            /*width:26%;*/
            height: auto;
            width:33.3%;
            /*border: 1px solid red;*/
        }

        .section9 .news_title{
            /*display:flex;*/
            /*justify-content: center; //子元素水平方向居中*/
            /*align-items: center;//子元素垂直方向居中*/
            /*text-align: center;*/
            font-size: 24px;
            margin-top: 10px;
        }
        .section9 .news_container .news1_img{
            width:100%;
        }
        .section9 .news_container .news_position{
            margin-left: 330px;
        }
        .news_container .news_title{
            font-size:16px;
            /*-webkit-transform: scale(0.9);*/
            /*-moz-transform: scale(0.9);*/
            /*-o-transform: scale(0.9);*/
            /*transform: scale(0.9);*/
            /*border:1px solid red;*/
            width:300px;
            height:20px;
            text-align: left;
            margin-left: 0px;
            padding: 0px;
            margin-bottom: -10px;
        }
        .news_container .news1 .news_content{
            font-size:14px;
            padding-top:20px;
            padding-bottom: 20px;
            color:#989898;
            margin-bottom: -20px;
        }
    }
    @media screen and (max-width:1280px){
        .section1_word a{
            font-size: 12px;
        }
        .section8 .right_container{
            width:525px;
            margin-left:30px;
        }
        .section7 img {
            width:360px;
            height: 350px;
            position:absolute;
            top:5%;left:36%;
            /*border: 1px solid red;*/
        }
        .section7 .introduce_word01{
            position:absolute;
            top:5%;
            left:10%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7  .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: right;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7  .introduce_sentence{
            width:360px;
            height:120px;
            color:#7E7E7E;
            line-height: 25px;
            /*border:1px solid red;*/

        }
        .section7 .introduce_word02{
            position:absolute;
            top:35%;
            left:6%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word03{
            position:absolute;
            top:66%;
            left:12%;
            /*border:1px solid #ccc;*/
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word05{
            position:absolute;
            top:35%;
            left:66%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word04{
            position:absolute;
            top:3%;
            left:63%;
            /*border:1px solid #ccc;*/
            /*width:1%;*/
            /*height:100px;*/
            /*border:1px solid red;*/
        }
        .section7 .introduce_word06{
            position:absolute;
            top:66%;
            left:61%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section6 {
            width: 100%;
            height: 350px;
        }
        .section9 .news_img{
            width:120px;
        }


    }
    @media screen and (max-width:1152px){
        .secition3_word {
            width: 438px;
            height: 55px;
            /* padding: 8px; */
            line-height: 28px;
            margin-bottom: 80px;
            padding-top: 10px;
            font-size: 16px;
            font-family: "黑体";
        }
        .section6 {
            width: 100%;
            height: 306px;
        }
        .section7 img {
            width:350px;
            height: 340px;
            position:absolute;
            top:5%;left:34%;
            /*border: 1px solid red;*/
        }
        .section7 .introduce_word01{
            position:absolute;
            top:5%;
            left:8%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7  .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: right;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7  .introduce_sentence{
            width:360px;
            height:120px;
            color:#7E7E7E;
            line-height: 25px;
            /*border:1px solid red;*/

        }
        .section7 .introduce_word02{
            position:absolute;
            top:35%;
            left:2%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word03{
            position:absolute;
            top:66%;
            left:10%;
            /*border:1px solid #ccc;*/
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word05{
            position:absolute;
            top:35%;
            left:66%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word04{
            position:absolute;
            top:3%;
            left:64%;
            /*border:1px solid #ccc;*/
            /*width:1%;*/
            /*height:100px;*/
            /*border:1px solid red;*/
        }
        .section7 .introduce_word06{
            position:absolute;
            top:66%;
            left:62%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section8 .right_container {
            width: 525px;
            margin-left: 49px;
        }
        .section9 .news_container {
            margin-top: 20px;
            text-align: center;
            width: 89%;
            /* border: 1px solid blue; */
            /* padding-left: 20%; */
        }
    }
    @media screen and (max-width:1024px)and (min-width:768px){
        #myCarousel{
            margin-top:4px;
            padding:0;
            /*border:0px solid #222;*/
            /*position:relative;*/
            /*top:0;*/
            /*left:0;*/
            margin: 0px;
            width:100%;
            /*height: 200px;*/
            /*border:1px solid red;*/
        }
        #myCarousel .carousel-inner{
            width:100%;
            /*height: 200px;*/
            /*border:1px solid red;*/
        }
        #myCarousel .carousel-inner .lunbo{
            display: block;
            width:100%;
            /*height: 100%;*/
            /*border:1px solid blue;*/
        }
        .dl{
            /*border:1px solid blue;*/
            width:33%;
        }
        .section1_word{
            text-align: center;
            width:200px;
            height: 100px;
            font-size:6px;
            /*border:1px solid red;*/
        }
        .section2{
            width:100%;
            height:200px;
            /*border:1px solid red;*/
        }
        .secition2 img{
            width:100%;
            height: auto;
        }
        .img1_position,.word1_position{
            margin-left:10px;
        }
        .img3_position,.word3_position{
            margin-right: 0px;
        }
        .section1_word{
            width:100%;
            height: 30px;
            text-align: center;
            /*padding-left: 8%;*/
            /*margin-left: 2px;*/
        }
        .secition2{
            width:100%;
            height: 200px;
        }
        .secition3{
            width:100%;
            height:auto;
            margin:0;
        }
        #swiper2{
            width: 320px !important;
            position:absolute;
            top:0;
            left:0;
            bottom:0;
            right:0;
            margin: 0 auto;
            /*margin-left: 0px;*/
            padding: 0px;
            margin-top: 30px;
            /*border: 1px solid red;*/
            /*margin-left: 10%;*/
            /*-webkit-transform: scale(1.2);*/
            /*-moz-transform:  scale(1.2);*/
            /*-o-transform: scale(1.2);*/
            /*transform:  scale(1.2);*/
        }
        #swiper2 .swiper-slide .span{
            width:400px !important;
            height: 240px;
            position:absolute;
            top:0;
            left:0;

        }
        /*.iconfont{*/
            /*font-size: 60px;*/
            /*color: #fff;*/
            /*position:absolute;*/
            /*width:100%;*/
            /*height: 300px;*/
            /*opacity: 0.6;*/
            /*!*border:1px solid red;*!*/
            /*text-align: center;*/
            /*line-height: 290px;*/
        /*}*/
        /*#swiper2 .swiper-slide .span{*/
        /*width:480px;*/
        /*height: 290px;*/
        /*position:absolute;*/
        /*top:0;*/
        /*left:10%;*/

        /*}*/
        #left_video{
            width:98%;
            height: 300px;
            /*margin: 0 auto;*/
            padding: 0px;
            margin: 0px;
            /*border:1px solid blue !important;*/
            position:relative;
        }
        #video1,#video2,#video3,#video4{
            width:400px !important;
            height: 100%;
            object-fit: fill
        }
        .section3_left{
            width:100%;
        }
        .section3_right{
            width:100%;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            margin-top:50px;
        }
        .secition3_word{
            text-align: center;
            width:100%;
            height:30px;
            font-size: 12px;
            padding-bottom: 0;
            /*border:1px solid red;*/
        }
        .section3_right .section3_xiangqin{
            padding-top: 0px;
        }
        .section3 .xiangqin1{
            width:120px;
        }
        .section5{
            width:100%;
            height:200px;
            /*border:1px solid red;*/
        }
        .secition5 img{
            width:100%;
            height: auto;
        }
        .section6 {
            width:100%;
            height: 250px;
            position:relative;
        }
        .section6_main .more{
            width:60px;
            height: 20px;

        }
        .section6_introduce{
            position:absolute;
            top:5%;
            right: 0%;
            color:#B99C56;
        }.section6_introduce .div1 {
             margin-top: 20px;
             width: 150px;
             height: 26px;
             text-align: center;
         }
        .div2{
            width:160px;
            height: 30px;
            letter-spacing:9px;
            text-align: center;
            font-size: 10px;
        }
        .div3{
            width:160px;
            height: 50px;
            font-size: 8px;
            /*border:1px solid red;*/
        }
        .section6_introduce .div1 span:nth-of-type(1){
            font-size: 12px;
            margin-right: 10px;
        }
        .section6_introduce .div1 span:nth-of-type(2){
            font-size: 8px;
        }
        .section6 .div2 span:nth-of-type(1){
            margin-right: 10px;
        }
        .section6 .div3 p:nth-of-type(1){
            text-align: center;
        }
        .section7{
            width:100%;
            height: 280px;
            position: relative;
            /*display:flex;*/
            /*justify-content: center; //子元素水平方向居中*/
            /*align-items: center;//子元素垂直方向居中*/
        }
        .section7 img {
            width:200px;
            height: 190px;
            position:absolute;
            top:10%;left:35%;
        }
        .section7 .introduce_word01{
            position:absolute;
            top:2%;
            left:4%;
            width:38%;
            height:25%;
            /*border:1px solid red;*/
            padding: 0px;
            margin: 0px;
        }
        .section7 .introduce_title{
            width:100%;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            height:10px;
            text-align: right;
            color:#242424;
            font-weight: bold;
            font-size:12px;
            -webkit-transform: scale(0.8);
            -moz-transform:scale(0.8);
            -o-transform:scale(0.8);
            transform: scale(0.8);
        }
        .section7  .introduce_sentence{
            /*border:1px solid red;*/
            line-height: 20px;
            margin-top: 0px;
            width:420px;
            height:200px;
            color:#7E7E7E;
            font-size:12px;
            -webkit-transform:scale(0.8);
            -moz-transform: scale(0.8);
            -o-transform:scale(0.8);
            transform:scale(0.8);
        }
        .section7 .introduce_word04 .introduce_sentence{
            width:350px;
        }
        .section7 .introduce_word02{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:34%;
            left:0%;
            width:38%;
            height:25%;
            /*border:1px solid red;*/
        }
        .section7 .introduce_word03{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:63%;
            left:4%;
            width:38%;
            height:20%;
        }
        .section7 .introduce_word04{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:2%;
            left:54%;
            width:38%;
            height:25%;
        }
        .section7 .introduce_word04 .introduce_title{
            width:100%;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            height:10px;
            text-align: left;
            color:#242424;
            font-size:12px;
            -webkit-transform:scale(0.8);
            -moz-transform:scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
            font-weight: bold;

        }
        .section7  .introduce_sentence{
            width:100%;
            height:100%;
            color:#7E7E7E;
        }
        .section7 .introduce_word05{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:34%;
            left:58%;
            width:35%;
            height:20%;
        }
        .section7 .introduce_word05 .introduce_title{

            width:100%;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            height:10px;
            text-align: left;
            color:#242424;
            font-size:12px;
            -webkit-transform: scale(0.8);
            -moz-transform:scale(0.8);
            -o-transform: scale(0.8);
            transform:scale(0.8);
            font-weight: bold;
            /*margin-bottom: 5px;*/
        }
        .section7 .introduce_word06{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:68%;
            left:53%;
            width:38%;
            height:20%;
        }
        .section7 .introduce_word06 .introduce_title{
            padding: 0px;
            margin: 0px;
            width:100%;
            height:10px;
            text-align: left;
            color:#242424;
            font-size:12px;
            -webkit-transform: scale(0.8);
            -moz-transform:scale(0.8);
            -o-transform:scale(0.8);
            transform:scale(0.8);
            font-weight: bold;
            /*margin-bottom: 5px;*/
        }
        .section8{
            /*position:relative;*/
            width:100%;

            background-color: #F1F3F4;
            height: auto;
            margin: 0px;
            padding: 0px;
            /*border:1px solid red;*/
        }
        .section8 .section8_left{
            background-color: #F1F3F4;
            width:50%;height: 300px;
            /*margin-left: 10%;*/
            float:left;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            /*border:1px solid red;*/
            padding: 0px;
            margin-left: 0px;
        }
        .section8_left .img1{
            /*padding-left: 50px;*/
            margin-left: 0px;
            padding-left: 0px;
        }
        .section8 .img{
            text-align: center;
            /*margin-left: 16%;*/
        }
        .section8 .section8_left p{
            width:230px;height:120px;
            /*border:1px solid red;*/
            margin-top:6px;
            /*margin-left: 25%;*/
            display: inline-block;
            text-align: center;
        }
        .section8 .section8_left h1{
            /*margin-left: 15px;*/
            /*margin-left: 16%;*/
        }
        .section8_right{
            float:left;
            width:50%;
            height: auto;
            padding-left: 0;
            margin-left: -30px;
            margin-top: 10px;
            background-color: #F1F3F4;
        }
        .section8 .right_container{
            background-color: #8C6238;
            width:345px;
            height:245px;
            float:left;
            position:relative;
            /*border:1px solid red;*/

        }
        .section8_right .line4{
            background-color: #fff;
            width:30px;
            height: 2px;
            /* border:1px solid red; */
            margin-top: 10px;
        }
        .section8_right .species:nth-of-type(1) {
            float:left;
            width:33%;
            height:200px;
            /*position:absolute;*/
            /*border:1px solid red;*/
            /*top:0;*/
            /*left:0;*/
            padding-left: 0;
            margin-left: 0;
            /*display: table-cell;*/
            /*vertical-align: middle;*/
            /*justify-content: center;*/
        }
        .section8_right .species:nth-of-type(1) .species_img{
            width:90%;
            text-align: center;
            padding-left: 0px;
            /*border:1px solid blue;*/
            margin-left: 0px;
        }
        .section8_right .species:nth-of-type(2) {
            float:left;
            width:33%;
            height:200px;
            /*position:absolute;*/
            /*top:0;*/
            /*left:0%;*/
            /*border:1px solid red;*/
        }
        .section8_right .species:nth-of-type(2) .species_img{
            width:90%;
            text-align: center;
            padding-left: 0px;
            /*border:1px solid blue;*/
            margin-left: 0px;
        }
        .section8_right .species:nth-of-type(3) {
            float:left;
            width:33%;
            height:200px;
            /*position:absolute;*/
            /*top:0;*/
            /*left:65%;*/
            /*border:1px solid red;*/

        }
        .section8_right .species:nth-of-type(3) .species_img{
            width:90%;
            text-align: center;
            padding-left: 0px;
            /*border:1px solid blue;*/
            margin-left: 0px;
        }
        .section8_right .species_img{
            width:100%;
            height:130px;
            /*padding-left:30px;*/
        }
        .section8_right .species_title{
            font-size: 12px;
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
            width:100%;
            height: 10px;
        }
        .section8 .species_img01{
            width:20px;
            height:10%;
        }
        .section8 .species_word{
            font-size: 10px;
            height: auto;
            width:100%;
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
            margin: 0px;
            padding: 0px;
        }
        .section9{
            width:100% !important;
            /*height:800px!important;*/
            height: auto;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            /*overflow: hidden;*/
        }
        .section9 .news_container{
            /*border:1px solid blue;*/
            /*padding-left: 0px;*/
            /*margin-left: 11% !important;*/
            padding-left: 5%;
            /*margin-top: 10px;*/
            margin: 0 auto;
            width:98%;
            height: auto;
        }
        .section9 .news_container .news1{
            width:49%;
            padding-left: 0px;
            height:auto;
            margin-bottom: 8px;
            text-align: center;
            /*border: 1px solid red;*/
        }
        .section9 .news_container .news1_img {
            width: 100%;
            height: auto;
        }
        .news1 .news_title{
            font-size: 12px;
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
            width:100%;
            /*height:40px;*/
            height:auto;
            /*border:1px solid red;*/
            text-align: left;
            margin-top: 10px;
            margin-left: 0px;
            padding-left: 0px;
        }
        .news1 .news_title p{
            font-size:14px;
            width:100%;
            height:12px;
            text-align:left;
            margin-left: 0px;
        }
        .news_content{
            padding-top: 0;
            margin-top: 10px;
            width:100%;
            height: 60px;
            /*line-height: 60px;*/
            /*border:1px solid red;*/
            position:relative;
            margin-bottom: 10px;
        }
        .news1 .news_content p{
            position:absolute;
            top:0;
            left:0;
            font-size: 12px;
            /*-webkit-transform:  scale(0.8);*/
            /*-moz-transform: scale(0.8);*/
            /*-o-transform: scale(0.8);*/
            /*transform:   scale(0.8);*/
            width:100%;
            height:50px;
            text-align: left;
            /*border:1px solid red;*/
            margin-bottom: 10px;
            /*padding-top: 10px;*/

        }
        .news1 .news_img{
            width:35%;
            /*padding-top: 10px;*/
            height:35px;
            text-align: left;
        }
    }

    @media screen and (max-width:750px){
        #NavTop{
            display: none !important;
        }
        .active_a{
            margin-left: 0px;
            width:100%;
            /*padding-left: 20px;*/
            text-align: left;
        }
        .section1{
            width:100%;
            height: auto;
            display:block;
        }
        #myCarousel{
            /*margin-top:0px;*/
            padding:0;
            /*border:0px solid #222;*/
            /*position:relative;*/
            /*top:0;*/
            /*left:0;*/
            width:100%;
            /*display:none;*/
            /*height: 210px;*/
            /*border:1px solid red;*/
        }
        /*#myCarousel .carousel-inner{*/
            /*width:100%;*/
            /*!*height: 210px;*!*/
            /*!*border:1px solid red;*!*/
        /*}*/
        /*#myCarousel .carousel-inner .lunbo{*/
            /*display: block;*/
            /*width:100%;*/
            /*!*height: 210px;*!*/
            /*!*border:1px solid blue;*!*/
        /*}*/
        body {
            min-height: 2000px;
            padding-top: 22px;
            font-family: "黑体";
        }
        .navbar_bg{
            /*background-color: #009555;*/

        }

        .section1_img{
            width:60px;
            height:60px;
        }
        .section1_word{
            font-size:6px;
            font-weight: normal;
        }
        .section1_word a{
            font-size: 14px;
        }
        .secition1 .row .dl{
            margin-top: 8px;
        }
        .secition2{
            width:100%;
            /*height:60px;*/
            padding: 0;
            height: auto;
            margin-top: -8px;
            /*border:1px solid red;*/
        }
        .secition2 img{
            width:100%;
            /*height: 50px;*/
        }
        .img1_position,.word1_position{
            margin-left: 20px;
        }
        .img3_position,.word3_position{
            margin-right: 20px;
        }
        .secition3{
            margin-top: 10px;
            margin-left: 0px;
            /*position:relative;*/
        }
        .section3_right h1{
            font-family: "黑体";
            margin-top: 11px;
            margin-bottom: 0;
        }
        #video1,#video2,#video3,#video4{
            /*width:260px !important;*/
            height: 100% !important;
            object-fit: fill
        }
        #swiper2{
            width: 92% !important;
            height: 230px;
            position:absolute;
            top:0;
            left:0;
            bottom:0;
            right:0;
            margin: 0 auto;
            /*margin-left: 0px;*/
            padding: 0px;
            margin-top: 10px;
        }
        .iconfont{
            font-size: 60px;
            color: #fff;
            position:absolute;
            width:65%;
            height: 300px;
            opacity: 0.6;
            /*border:1px solid red;*/
            text-align: center;
            line-height: 290px;
        }
        .row{

        }
        #left_video{
            width:100%;
            height: 240px;
            /*margin: 0 auto;*/
            padding: 0px;
            /*margin: 0px;*/
            /*border:1px solid blue !important;*/
            position:relative;
            /*margin: 0 auto;*/
        }
        .section3_right{
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            margin-top: 30px;
        }
        .secition3_word{
            width:98%;
            height: auto;
            font-size: 10px;
            margin-bottom: 16px;
            line-height:20px;
            margin-top: 6px;
            text-indent: 25px;
            overflow : hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            word-break:break-all;
            text-align: left;
        }
        .section3_right .section3_xiangqin{
            padding-top: 0px;

        }
        .secition4{
            margin-top: 30px;

        }
        .section4_img{
            width:100%;
            height: auto;
            /*height: 90px;*/
        }
        .section5{
            width:100%;
            height:60px;
            padding: 0;
            /*border:1px solid red;*/
        }
        .secition5 img{
            margin-top: 20px;
            margin-bottom: 10px;
            width:100%;
            height: auto;
            /*height: 50px;*/
        }
        #xiangqin1{
            text-align: center;
            width:108px;
            height: 32px;
        }
        .section6 {
            width:100%;
            height: 110px;
            /*height: 150px;*/
        }
        .section6_main .more{
            width:59px;
            height: 15px;
            position: absolute;
            top:70%;
            left:62%;
        }
        .section6_introduce{
            position:absolute;
            top:5%;
            right: 0%;
            color:#B99C56;
        }.section6_introduce .div1 {
             margin-top: 20px;
             width: 150px;
             height: 26px;
             text-align: center;
         }
        .div2{
            width:160px;
            height: 30px;
            letter-spacing:9px;
            text-align: center;
            font-size: 10px;
        }
        .div3{
            width:160px;
            height: 50px;
            font-size: 8px;
            /*border:1px solid red;*/
        }
        .section6_introduce .div1 span:nth-of-type(1){
            font-size: 12px;
            margin-right: 10px;
        }
        .section6_introduce .div1 span:nth-of-type(2){
            font-size: 8px;
        }
        .section6 .div2 span:nth-of-type(1){
            margin-right: 10px;
        }
        .section6 .div3 p:nth-of-type(1){
            text-align: center;
        }
        .section7{
            width:100%;
            height: 256px;
            position: relative;
            /*display:flex;*/
            /*justify-content: center; //子元素水平方向居中*/
            /*align-items: center;//子元素垂直方向居中*/
        }
        .section7 img {
            width:120px;
            height: 120px;
            position:absolute;
            top:10%;left:33%;
        }
        .section7 .introduce_word01 {
            position: absolute;
            top: 1%;
            left: 2%;
            width: 32%;
            height: 25%;
            /*border: 1px solid red;*/
            padding: 0px;
            margin: 0px;
        }
        .section7 .introduce_title{
            width:100%;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            height:2px;
            text-align: right;
            color:#242424;
            font-weight: bold;
            font-size:8px;
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
        }
        .section7  .introduce_sentence{
            /*border:1px solid red;*/
            line-height: 10px;
            margin-top: 10px;
            /*margin-right: 20%;*/
            width:120px;
            height:60px;
            color:#7E7E7E;
            font-size:6px;
            /*-webkit-transform: scale(0.5);*/
            /*-moz-transform: scale(0.5);*/
            /*-o-transform: scale(0.5);*/
            /*transform: scale(0.5);*/
        }

        /*.section7 .introduce_word04 .introduce_sentence{*/
        /*width:200px;*/
        /*}*/
        /*.section7 .introduce_word01 .introduce_sentence{*/
        /*width:200px;*/
        /*}*/
        .section7 .introduce_word02{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:30%;
            left:0%;
            width:32%;
            height:25%;
            /*border:1px solid red;*/
        }
        .section7 .introduce_word03{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:55%;
            left:7%;
            width:32%;
            height:20%;
        }
        .section7 .introduce_word04{
            padding: 0px;
            margin: 0px;
            line-height:15px;
            position:absolute;
            top:-1%;
            left:64%;
            width:32%;
            height:25%;
            /*border:1px solid red;*/
        }
        .section7 .introduce_word04 .introduce_title{
            width:100%;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            height:2px;
            text-align: left;
            /*width:150px;*/
            color:#242424;
            font-size:8px;
            /*margin-bottom: 10px;*/
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
            /*font-weight: bold;*/

        }
        .section7 .introduce_word04 .introduce_sentence{
            width:120px;
            height: 60px;
            margin-top: 10px;
            line-height:10px;
            /*height:auto;*/
            color:#7E7E7E;
            font-size: 6px;
        }
        .section7 .introduce_word05{
            padding: 0px;
            margin: 0px;
            position:absolute;
            text-align: left;
            top:32%;
            left:66%;
            width:32%;
            height:20%;
            /*border:1px solid red;*/
        }
        .section7 .introduce_word05 .introduce_title{

            width:100%;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            height:2px;
            text-align: left;
            color:#242424;
            font-size:8px;
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
            font-weight: bold;
            /*margin-bottom: 5px;*/
        }
        .section7 .introduce_word06{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:58%;
            left:56%;
            width:38%;
            height:20%;
            /*border:1px solid red;*/
        }
        .section7 .introduce_word06 .introduce_title{
            padding: 0px;
            margin: 0px;
            width:100%;
            height:2px;
            text-align: left;
            color:#242424;
            font-size:8px;
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
            font-weight: bold;
            /*margin-bottom: 5px;*/
        }
        /*.section8{*/
        /*background-color: #F1F3F4;*/
        /*width:100%;*/
        /*height:auto;*/
        /*}*/
        .section8{
            /*position:relative;*/
            width:100%;

            background-color: #F1F3F4;
            /*height: 515px;*/
            height: auto;
            margin: 0px;
            padding: 0px;
            /*border:1px solid red;*/
        }
        .section8 .section8_left{
            background-color: #F1F3F4;
            width:100%;height:auto;
            /*margin-left: 10%;*/
            float:left;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            /*border:1px solid red;*/
            padding: 0px;
            margin-left: 0px;
        }
        .section8_left .img1{
            /*padding-left: 50px;*/
            margin-left: 0px;
            padding-left: 0px;
            margin-top: 0px;
            margin-bottom: 8px;
        }
        .section8 .img{
            text-align: center;
            width:108px;
            height:32px;
            margin: 0 auto;
            /*border:1px solid red;*/
            /*margin-left: 16%;*/
        }
        .section8 .img img{
            width:100%;
            height: auto;
        }
        .section8 .section8_left p{
            width:98%;height:auto;
            /*border:1px solid red;*/
            margin-top:6px;
            text-indent:25px;
            /*margin-left: 25%;*/
            display: inline-block;
            text-align: center;
            /*margin-bottom: 30px;*/
            /*overflow: hidden;*/
            position:relative;
            overflow : hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            word-break:break-all;
            margin-bottom: 16px;
        }
        /*.section8 .section8_left p::after {*/
            /*content: "...";*/
            /*position: absolute;*/
            /*bottom: 0;*/
            /*right: 0;*/
            /*padding-left: 40px;*/
        /*}*/
        .section8 .section8_left h1{
            /*margin-left: 15px;*/
            /*margin-left: 16%;*/
        }
        .section8 .section8_left h1 {
            font-family: "黑体";
            margin-top: 4px;
        }
        .section8 .section8_right{
            width:100%;
            height: auto;
        }
        .section8 .right_container{
            background-color: #8C6238;
            width:100%;
            /*height:235px;*/
            height:auto;
            float:left;
            position:relative;
            margin-left: 0;
            /*border:1px solid red;*/

        }
        .section8_right .line4{
            background-color: #fff;
            width:30px;
            height: 2px;
            /* border:1px solid red; */
            margin-top: 7px;
            /*margin-bottom: 6px;*/
        }
        .section8_right .species:nth-of-type(1) {
            float:left;
            width:33%;
            /*height:200px;*/
            height:auto;
            /*position:absolute;*/
            /*border:1px solid red;*/
            /*top:0;*/
            /*left:0;*/
            padding-left: 0;
            margin-left: 0;
            display: table-cell;
            vertical-align: middle;
            justify-content: center;
        }
        .section8_right .species:nth-of-type(1) .species_img{
            width:90%;
            text-align: center;
            padding-left: 0px;
            /*border:1px solid blue;*/
            margin-left: 4px;
        }
        .section8_right .species:nth-of-type(2) {
            float:left;
            width:33%;
            height:200px;
            /*position:absolute;*/
            /*top:0;*/
            /*left:0%;*/
            /*border:1px solid red;*/
        }
        .section8_right .species:nth-of-type(2) .species_img{
            width:90%;
            text-align: center;
            padding-left: 0px;
            /*border:1px solid blue;*/
            margin-left: 0px;
        }
        .section8_right .species:nth-of-type(3) {
            float:left;
            width:33%;
            height:200px;
            /*position:absolute;*/
            /*top:0;*/
            /*left:65%;*/
            /*border:1px solid red;*/

        }
        .section8_right .species:nth-of-type(3) .species_img{
            width:90%;
            text-align: center;
            padding-left: 0px;
            /*border:1px solid blue;*/
            margin-left: 0px;
        }
        .section8_right .species_img{
            width:100%;
            /*height:130px;*/
            height:auto;
            /*padding-left:30px;*/
        }
        .section8_right .species_title{
            font-size: 12px;
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
            width:100%;
            margin-top: 5px;
            height: 10px;
        }
        .section8 .species_img01{
            width:20px;
            height:10%;
        }
        .section8 .species_word{
            font-size: 8px;
            /*height: auto;*/
            text-align: center;
            width:82%;
            display:inline-block;
            /*border:1px solid red;*/
            /*!*border:1px solid red;*!*/
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
            margin-top: 6px;
            padding: 0px;
        }
        .section9{
            width:100%;
            height:auto;
            padding: 0px;
            margin-top: 0px;
            /*overflow: hidden;*/
            /*border:1px solid red;*/
            /*overflow: hidden;*/
        }
        .section9 .news_title img{
            margin-bottom: 8px;
        }
        .section9 .news_title{
            margin-top: 30px;
        }
        .section9 .news_container{
            /*border:1px solid blue;*/
            /*padding-left: 0px;*/
            /*margin-left: 11% !important;*/
            padding-left:8px;
            /*margin-top: 10px;*/
            margin: 0 auto;
            width:100%;
            height: auto;
        }
        .section9 .news_container .news1{
            width:49%;
            padding-left: 0px;
            height:auto;
            margin-bottom: 8px;
            /*text-align: center;*/
            /*border: 1px solid red;*/
            padding-right: 0px;
        }
        .news_container .news1_img{
            width:96% !important;
            /*height:120px;*/
            height:auto;
            margin: 0 auto;
            text-align: center;
            /*border:1px solid green;*/
        }

        .news1 .news_title{
            font-size: 12px;
            /*-webkit-transform: scale(0.9);*/
            /*-moz-transform: scale(0.9);*/
            /*-o-transform: scale(0.9);*/
            /*transform: scale(0.9);*/
            width:100%;
            height:20px;
            overflow: hidden;
            /*height:auto;*/
            /*border:1px solid red;*/
            /*text-align: left;*/
            /*margin-top: 30px;*/
            margin-left: 0px;
            padding-left: 0px;
            margin-top: 8px;
        }
        .news1 .news_title p{
            font-size:12px;
            width:100%;
            /*height:12px;*/
            height:auto;
            /*text-align: center;*/
            margin-left: 0px;
            margin-top: 2px;
        }
        .section9 .news_content{
            padding-top: 0;
            margin-top:0px;
            width:100%;
            height:20px !important;
            overflow: hidden;
            /*line-height: 60px;*/
            /*border:1px solid red;*/
            /*line-height: 10px;*/
            position:relative;
            text-align: left;
            margin-bottom: 0px;

        }
        .news_title p {
            font-size: 20px;
            font-family: "黑体";
            font-weight: 500;
        }
        /*.section9 .news_content::after{content: "..."; position: absolute; bottom: 0; right: 0; padding-left: 40px;*/
        /*}*/
        .news1 .news_content p{
            position:absolute;
            top:0;
            left:0;
            font-size: 10px;
            /*overflow: hidden;*/
            /*-webkit-transform:  scale(0.8);*/
            /*-moz-transform: scale(0.8);*/
            /*-o-transform: scale(0.8);*/
            /*transform:   scale(0.8);*/
            width:95%;
            margin-top: 3px;
            height:30px;
            line-height: 15px;
            /*border:1px solid red;*/
            margin-bottom: 10px;
            /*padding-top: 10px;*/

        }
        .news1 .news_img{
            width:33%;
            /*padding-top: 10px;*/
            height:18px;
        }
    }
    @media only screen and (width:600px){
        .section7{
            width:100%;
            height: 256px;
            position: relative;
            /*display:flex;*/
            /*justify-content: center; //子元素水平方向居中*/
            /*align-items: center;//子元素垂直方向居中*/
        }
        .section7 img {
            width:180px;
            height: 170px;
            position:absolute;
            top:10%;left:36%;
        }
        .section7 .introduce_word01 {
            position: absolute;
            top: 1%;
            left: 2%;
            width: 32%;
            height: 25%;
            /*border: 1px solid red;*/
            padding: 0px;
            margin: 0px;
        }
        .section7 .introduce_title{
            width:100%;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            height:2px;
            text-align: right;
            color:#242424;
            font-weight: bold;
            font-size:8px;
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
        }
        .section7  .introduce_sentence{
            /*border:1px solid red;*/
            line-height: 10px;
            margin-top: 10px;
            /*margin-right: 20%;*/
            width:100%;
            height:60px;
            color:#7E7E7E;
            font-size:6px;
            /*-webkit-transform: scale(0.5);*/
            /*-moz-transform: scale(0.5);*/
            /*-o-transform: scale(0.5);*/
            /*transform: scale(0.5);*/
        }

        /*.section7 .introduce_word04 .introduce_sentence{*/
        /*width:200px;*/
        /*}*/
        /*.section7 .introduce_word01 .introduce_sentence{*/
        /*width:200px;*/
        /*}*/
        .section7 .introduce_word02{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:30%;
            left:0%;
            width:32%;
            height:25%;
            /*border:1px solid red;*/
        }
        .section7 .introduce_word03{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:63%;
            left:7%;
            width:32%;
            height:20%;
        }
        .section7 .introduce_word04{
            padding: 0px;
            margin: 0px;
            line-height:15px;
            position:absolute;
            top:-1%;
            left:64%;
            width:32%;
            height:25%;
            /*border:1px solid red;*/
        }
        .section7 .introduce_word04 .introduce_title{
            width:100%;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            height:2px;
            text-align: left;
            /*width:150px;*/
            color:#242424;
            font-size:8px;
            /*margin-bottom: 10px;*/
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
            /*font-weight: bold;*/

        }
        .section7 .introduce_word04 .introduce_sentence{
            width:100%;
            height: 60px;
            margin-top: 10px;
            line-height:10px;
            /*height:auto;*/
            color:#7E7E7E;
            font-size: 6px;
        }
        .section7 .introduce_word05{
            padding: 0px;
            margin: 0px;
            position:absolute;
            text-align: left;
            top:32%;
            left:66%;
            width:32%;
            height:20%;
            /*border:1px solid red;*/
        }
        .section7 .introduce_word05 .introduce_title{

            width:100%;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            height:2px;
            text-align: left;
            color:#242424;
            font-size:8px;
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
            font-weight: bold;
            /*margin-bottom: 5px;*/
        }
        .section7 .introduce_word06{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:65%;
            left:62%;
            width:38%;
            height:20%;
            /*border:1px solid red;*/
        }
        .section7 .introduce_word06 .introduce_title{
            padding: 0px;
            margin: 0px;
            width:100%;
            height:2px;
            text-align: left;
            color:#242424;
            font-size:8px;
            /*-webkit-transform: scale(0.6);*/
            /*-moz-transform: scale(0.6);*/
            /*-o-transform: scale(0.6);*/
            /*transform: scale(0.6);*/
            font-weight: bold;
            /*margin-bottom: 5px;*/
        }
    }
</style>

<body>
{{--导入头部--}}
@include('frontend.module.myheader')
@php
    use App\Models\SiteMessage;
    $site_settings = SiteMessage::getDetails();
@endphp
<div class="container-fluid clear-padding">
    <!--附加-->
    <div id="NavTop">
        <div id="NavCon">
            <div class="P" title="电话" data-container="body"
                 data-toggle="popover" data-placement="left"
                 data-content=" 服务热线:{{$site_settings["phone"]}}">
                {{--<!--<div><img style="width:20px;height: 16px" src="{{URL::asset('images/frontend/电话.png')}}"></div>-->--}}
                <div><img style="width:35px;height:35px;" src="{{URL::asset('images/frontend/sj.jpg')}}"></div>
                <a href="javascript:void(0);">电话</a>
            </div>
            <div class="Z" title="咨询" data-container="body"
                 data-toggle="popover" data-placement="left"
                 data-content="湖南省常德市鼎城区周家电镇">
                <div><img style="width:36px;height:32px;" src="{{URL::asset('images/frontend/wx.jpg')}}"></div>
                <a href="javascript:void(0);">咨询</a>
            </div>
            <div class="W" title="微信" data-container="body"
                 data-toggle="popover" data-placement="left"
                 data-content="400-000-5252">
                {{--<!--<div><img style="width:20px;height: 16px" src="{{URL::asset('images/frontend/微信.png')}}"></div>-->--}}
                <div><img style="width:36px;height:32px;" src="{{URL::asset('images/frontend/zx.jpg')}}"></div>
                <a href="javascript:void(0);">微信</a>
            </div>
            <div class="D" id="topArrow">
                {{--<!--<div><img style="width:20px;height: 16px" src="{{URL::asset('images/frontend/顶部.png')}}"></div>-->--}}
                <div><img style="width:36px;height:32px;" src="{{URL::asset('images/frontend/zd.jpg')}}"></div>
                <span title="Top" >顶部</span>
            </div>
        </div>
    </div>
</div>
<!-- area0 start --------------------------------------------------------------------------------------------------->
<!-- 轮播图开始-->
<div id="myCarousel" class="carousel slide ">

        @php
            $slideshow = $data["slideshow"];
        //dump(count($slideshow));
        @endphp
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        @for($i=0;$i<count($slideshow["img"]);$i++)
        <li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>
        @endfor
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner" >
        @if(isset($slideshow) && $slideshow)
            @for($i=0;$i<count($slideshow["img"]);$i++)
                @if($i!=0)
                    <div class="item">
                        @else
                            <div class="item active">
                                @endif
                                <a target="{{$slideshow["word"][$i]}}" href="{{$slideshow["link"][$i]}}">
                                    <img class="lunbo" src="{{ $slideshow["img"][$i] }}">
                                </a>
                            </div>
                        @endfor
                    @endif

                    <!-- 轮播（Carousel）导航 -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
    </div>
    <!-- 轮播图结束-->
    {{--手机轮播start--}}
    {{--<div class="container-fluid section1 clear-padding">--}}
        {{--<img class="img-responsive center-block" src="../../../../images/frontend/mobile.jpg">--}}
        {{--<img class="img-responsive center-block" src="{{$data["img"][15]}}">--}}
        {{--<img class="img-responsive center-block" src="{{$data["img"][0]}}">--}}
    {{--</div>--}}
    {{--手机结束--}}
    <!-- 商城链接图标开始-->
    <div class="container-fluid secition1 ">
        <div class="row">
            <dl class="col-md-4 col-xs-4 col-sm-3 text-center dl">
                <dd><a href="{{$data["link"][0]}}" target="_blank"><img alt="" class="section1_img img1_position" src="{{$data["img"][0]}}"/></a></dd>
                <dt class="section1_word word1_position">
                    <a class="section1_text" href="{{$data["link"][0]}}" target="_blank">{{$data["word"][0]}}</a></dt>
            </dl>

            <dl class="col-md-4 col-xs-4 text-center col-sm-3 dl">
                <dd><a href="{{$data["link"][1]}}" target="_blank"><img alt="" class="section1_img" src="{{$data["img"][1]}}"/></a></dd>
                <dt class="section1_word"><a class="section1_text" href="{{$data["link"][1]}}" target="_blank">{{$data["word"][1]}}</a></dt>
            </dl>

            <dl class="col-md-4 col-xs-4 text-center col-sm-3 dl">
                <dd><a href="{{$data["link"][2]}}" target="_blank"><img alt="" class="section1_img img3_position" src="{{$data["img"][2]}}"/></a></dd>
                <dt class="section1_word word3_position"><a class="section1_text" href="{{$data["link"][2]}}" target="_blank">{{$data["word"][2]}}</a></dt>
            </dl>

        </div>
    </div>
</div>
<!-- 商城链接图标结束-->
<!-- area0 end-------------------------------------------------------------------------------------------------->

<!-- area3 start ------------------------------------------------------------------------------------------------------->
<div class="container-fluid secition2 ">
    {{--<img class="img-responsive center-block" src="{{URL::asset('images/frontend/title2.jpg')}}">--}}
    <img class="img-responsive center-block" src="{{$data["img"][3]}}">

</div>
<div class="container-fluid secition3 ">
    <div class="row">
        <div class="section3_left col-md-6 col-xs-12 center-block" id="left_video">
            {{--<!--<img  class="img-responsive section3_img" src="../static/common/images/about.png">-->--}}
            <div class="swiper-container " id="swiper2">
                <div class="swiper-wrapper">
                    @for($i=0;$i<count($data['video']);$i++)
                        <div class="swiper-slide">
                            <iframe id="video{{$i+1}}" poster="../../../../images/frontend/mobile.jpg" src="{{$data['video'][$i]}}"  type="video.mp4">
                            </iframe>
                            {{--<div class="span"><span class="iconfont" style="opacity: 1">&#xe63c;</span></div>--}}
                        </div>
                    @endfor
                    {{--<div class="swiper-slide">--}}
                    {{--<video id="video1" poster="{{URL::asset('images/frontend/about.png')}}" src="{{$data[1]['video'][1]}}"  type="video.mp4"> 您的浏览器不支持 video 标签。--}}
                    {{--</video>--}}
                    {{--<div class="span"><span class="iconfont" style="opacity: 1">&#xe63c;</span></div>--}}
                    {{--</div>--}}
                </div>
                <div class="swiper-pagination swiper-pagination-white" id="dots"></div>
                <div class="swiper-button-prev swiper-button-white"></div><!--左箭头-->
                <div class="swiper-button-next swiper-button-white"></div><!--右箭头-->
            </div>

        </div>
        <div class="section3_right col-md-6 col-xs-12 center-block ">
            <img class="section3_right_img" src="{{URL::asset('images/frontend/line2.png')}}">

            <h1>{{$data["word"][3]}}</h1>
            <p class="secition3_word">{{$data["word"][4]}}</p>
            {{--<!--<div ><a href=""><img id="xiangqin1" src="{{URL::asset('images/frontend/xiangqing.png')}}"></a></div>-->--}}
            <div class="section3_xiangqin"><a href="{{url($data['article'][0])}}"><img id="xiangqin1" src="{{URL::asset('images/frontend/xiangqing.png')}}"></a></div>
        </div>
    </div>
</div>
<!-- area3 end -->

<!-- area4 start ------------------------------------------------------------------------------------------------------->
<div class="secition4 ">
    <img class="section4_img" src="{{$data["img"][4]}}">
</div>
<div class="container-fluid secition5 ">

    {{--<img class="img-responsive center-block " src="{{URL::asset('images/frontend/tiandi2.jpg')}}">--}}
    <img class="img-responsive center-block " src="{{$data["img"][5]}}">
</div>

{{--<div class="container-fluid section6" style="background: url('../../../../images/frontend/tup2.jpg');background-size: 100% 100%;">--}}
<div class="container-fluid section6" style="background: url('{{$data["img"][6]}}');background-size: 100% 100%;">
    <div class="section6_main">
        <a href="{{$data["article"][1]}}">
            <img class="img-responsive center-block more" src="{{URL::asset('images/frontend/更多.jpg')}}">
        </a>
    </div>
</div>

{{--区域4--}}
<div class="container-fluid section7 center-block">
    <div class="container ">
        {{--<img src="{{URL::asset('images/frontend/ins.png')}}">--}}
        <img src="{{$data["img"][7]}}">
        {{--<!--<img src="{{URL::asset('images/frontend/ins.png')}}">-->--}}
        <img class="section7_img" src="{{URL::asset('images/frontend/dots.png')}}">

        @for($i=1,$j=5;$i<=6;$i++)
            <div class="{{'introduce_word0'.$i}}">
                <p class="introduce_title">{!! $data["word"][$j++] !!}</p>
                <p class="introduce_sentence">{!! $data["word"][$j++] !!}</p>
            </div>
        @endfor
    </div>
</div>

<div class="container-fluid section8 ">

    <div class="section8_left col-md-3  col-md-offset-1 col-sm-6  container-fluid col-xs-12">
        {{--<!--<img class="img1" src="{{URL::asset('images/frontend/line2.png')}}">-->--}}
        <img class="img1" src="{{URL::asset('images/frontend/line2.png')}}">
        <h1>{{$data["word"][17]}}</h1>
        <p>{{$data["word"][18]}}</p>
        {{--<!--<div class="img"><a href=""><img src="{{URL::asset('images/frontend/xiangqing.png')}}"></a></div>-->--}}
        <div class="img"><a href="{{$data["article"][2]}}"><img src="{{URL::asset('images/frontend/xiangqing.png')}}"></a></div>
    </div>

    <div class="section8_right  center-block ">
        <div class="right_container col-md-9 text-center col-sm-9 clear-padding">
            @for($i=0,$j=19;$i<3;$i++)
                <div class="species col-md-4 col-sm-4 clear-padding">
                    {{--<div><img  class="species_img" src="{{URL::asset('images/frontend/shancha.png')}}"></div>--}}
                    <div class="center-block text-center"><img  class="species_img" src="{{$data["img"][8+$i]}}"></div>
                    <div class="species_title"><p>{{$data["word"][$j++]}}</p></div>
                    {{--<!--<div><img class="species_img01" src="{{URL::asset('images/frontend/line3.png')}}"></div>-->--}}
                    {{--<div></div>--}}
                    <div class="line4 center-block"><img class="species_img01" src="{{URL::asset('images/frontend/line3.png')}}"></div>
                    <div class="species_word text-left"><p>{{$data["word"][$j++]}}</p></div>
                </div>
            @endfor
        </div>
    </div>
</div>



<div class="container-fluid section9 col-sm-12">
    <div class="news_title">
        <img src="{{URL::asset('images/frontend/line2.png')}}"/>
        <p >{{$data["word"][25]}}</p>
    </div>
    <div class="news_container row ">
        <div class="news1 col-md-3 col-sm-3 text-left">
            {{--<div><img class="news1_img" src="{{URL::asset('images/frontend/news1.png')}}"/></div>--}}
            <div class="text-center"><img class="news1_img" src="{{URL::asset($data["img"][11])}}"/></div>
            <div class="news_title text-left"><p>{{$data["word"][26]}}</p></div>
            <div class="news_content"><p>{{$data["word"][27]}}</p></div>
            {{--<div><a href=""><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>--}}
            <div><a href="{{$data["article"][3]}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
        </div>
        <div class="news1 col-md-3 col-sm-3 text-left">
            {{--<div><img class="news1_img" src="{{URL::asset('images/frontend/news2.png')}}"/></div>--}}
            <div class="text-center"><img class="news1_img" src="{{URL::asset($data["img"][12])}}"/></div>
            <div class="news_title text-left"><p>{{$data["word"][28]}}</p></div>
            <div class="news_content"><p>{{$data["word"][29]}}</p></div>
            <div><a href="{{$data["article"][4]}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
        </div>
        <div class="news1 col-md-3 col-sm-3 text-left">
            {{--<div><img class="news1_img" src="{{URL::asset('images/frontend/news1.png')}}"/></div>--}}
            <div class="text-center"><img class="news1_img" src="{{URL::asset($data["img"][13])}}"/></div>
            <div class="news_title text-left"><p>{{$data["word"][30]}}</p></div>
            <div class="news_content"><p>{{$data["word"][31]}}</p></div>
            {{--<div><a href=""><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>--}}
            <div><a href="{{$data["article"][5]}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
        </div>
        <div class="news1 col-md-3 col-sm-3 text-left" id="show" style="display: none">
            {{--<!--<div><img class="news1_img" src="{{URL::asset('images/frontend/news1.png')}}"/></div>-->--}}
            {{--<div><img class="news1_img" src="{{URL::asset('images/frontend/news1.png')}}"/></div>--}}
            <div class="text-center"><img class="news1_img" src="{{URL::asset($data["img"][14])}}"/></div>
            <div class="news_title text-left"><p>{{$data["word"][32]}}</p></div>
            <div class="news_content"><p>{{$data["word"][33]}}</p></div>
            {{--<div><a href=""><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>--}}
            <div><a href="{{$data["article"][6]}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
        </div>
    </div>
</div>

{{--导入尾部--}}
@include("frontend.module.myfooter")
<script type="text/javascript">
    //阻止pc端浏览器缩放js代码
    //由于浏览器菜单栏属于系统软件权限，没发控制，我们着手解决ctrl/cammond + +/- 或 Windows下ctrl + 滚轮 缩放页面的情况，只能通过js来控制了
    // $(document).ready(function () {
    //     // chrome 浏览器直接加上下面这个样式就行了，但是ff不识别
    //     $('body').css('zoom', 'reset');
    //     $(document).keydown(function (event) {
    //         //event.metaKey mac的command键
    //         if ((event.ctrlKey === true || event.metaKey === true)&& (event.which === 61 || event.which === 107 || event.which === 173 || event.which === 109 || event.which === 187  || event.which === 189)){
    //             event.preventDefault();
    //         }
    //     });
    //     $(window).bind('mousewheel DOMMouseScroll', function (event) {
    //         if (event.ctrlKey === true || event.metaKey) {
    //             event.preventDefault();
    //         }
    //     });
    // });
    // document.documentElement.addEventListener('touchstart', function (event) {
    //     if (event.touches.length > 1) {
    //         alert("页面禁止缩放");
    //         event.preventDefault();
    //     }
    // }, false);
    //
    // var lastTouchEnd = 0;
    // document.documentElement.addEventListener('touchend', function (event) {
    //     var now = Date.now();
    //     if (now - lastTouchEnd <= 300) {
    //         alert("页面禁止缩放");
    //         event.preventDefault();
    //     }
    //     lastTouchEnd = now;
    // }, false);
    // window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", hengshuping, false);


</script>
<script>
    window.onload=function(){
        function hengshuping() {
            if (window.orientation == 90 || window.orientation == -90) {
                //横屏
            } else {
                //竖屏
            }
        }
        var width = window.screen.width;
        var cWidth = document.body.clientWidth;
        var showDiv = document.getElementById("show");
        var navtop = document.getElementById("NavTop");
        var word = document.querySelectorAll(".section1_text");
        //var logo = document.getElementById("logo");
        // alert(width);
        console.log(width);
        //置顶
        $("#topArrow").click(function(){
            $(document).scrollTop(0);
        });
        wechatCodeShow();//绑定微信图标
        //调用popover
        $("[data-toggle='popover']").popover();
        //轮播图片间隔
        $('#myCarousel').carousel({interval:3000});
        if(width<=560){
            showDiv.style.display="block";
            // navtop.style.display = "none";
            word[0].innerHTML="天猫";
            word[1].innerHTML="拼多多";
            word[2].innerHTML="微信商城";
            $("#swiper2").css("width","500px")

        }else{//---
            // showDiv.style.display="none";
            // pageDiv.style.display="block";
            // contactDiv.style.display = "block";
        }
        if(width>=600 && width<=1024){
            showDiv.style.display="block";
            word[0].innerHTML="天猫";
            word[1].innerHTML="拼多多";
            word[2].innerHTML="微信商城";
            navtop.style.display = "none";
            pageDiv.style.display="none";
            contactDiv.style.display = "none";
        }
        //视频轮播代码(swiper)
        var mySwiper2 = new Swiper('#swiper2', {
            loop : true,
            // loop : true,
            speed : 1000,
            autoplay : {
                delay : 1000,
                stopOnLastSlide : false,
                disableOnInteraction : true,
                navigation:true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        });

        mySwiper2.el.onmouseover = function() { //鼠标进入
            mySwiper2.autoplay.stop();  //轮播停止
        };
        mySwiper2.el.onmouseout = function() { //鼠标离开
            // var v_len = $("#swiper2 .swiper-slide").find("iframe").length;
            // console.log(v_len);
            // for(var i = 0;i<v_len;i++){
            //     // console.log( $("#swiper2 .swiper-slide").find("iframe"));
            //     // $("#swiper2 .swiper-slide").find("iframe").get(i).pause(); //把所有停止
            //
            //     // $("#swiper2 .swiper-slide .span").get(i).style.opacity="1";
            // }
            function allPaused(){
                var v_len = $("#swiper2 .swiper-slide").find("iframe").length;
                for(var i=0;i<v_len;i++){
                    if(!$("#swiper2 .swiper-slide video").get(i).paused){
                        return false;
                    }
                }
                return true
            }
            if(allPaused()){
                mySwiper2.autoplay.start(); //轮播开始
            }

        };

        // $("#swiper2 .swiper-slide .span").on("click", function() {
        //     // $("#button1").fadeout("slow");
        //     var isPaused = $(this).prev().get(0).paused;  //视频是否在播放
        //     if(isPaused){
        //         $(this).prev().get(0).play();
        //         $(this).get(0).style.opacity="0";
        //         // $(this).fadeout(1000)
        //     }else{
        //         $(this).prev().get(0).pause();
        //         $(this).get(0).style.opacity="1";
        //     }
        // });
        // $("div[class^='swiper-button-']");
        $("div[class^='swiper-button-']").on('click', function(){
            var ifr = document.getElementsByTagName("iframe");
            var v_len = $("#swiper2 .swiper-slide").find("iframe").length;
            for(var i=0;i<v_len;i++){
                ifrLink = ifr[i].getAttribute("src");
                ifr[i].setAttribute("src", ifrLink);
            }

        });
        // $("#swiper2 .swiper-slide video").on("click", function() {
        //     // $("#button1").fadeout("slow");
        //     var isPaused = $(this).get(0).paused;  //视频是否在播放
        //     if(isPaused){
        //         $(this).get(0).play();
        //         // $(this).get(0).style.opacity="0";
        //         // $(this).fadeout(1000)
        //     }else{
        //         $(this).get(0).pause();
        //         // $(this).get(0).style.opacity="1";
        //     }
        // });
    }
</script>


</body>
