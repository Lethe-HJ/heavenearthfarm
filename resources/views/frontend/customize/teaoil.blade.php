<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>茶油文化</title>
    <link rel="stylesheet" href="{{URL::asset('vendor/font/iconfont.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <!--<link href="../static/common/css/index.css" rel="stylesheet">-->
    <link href="{{URL::asset('css/teaoil.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/Normalize/Normalize.css')}}" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{URL::asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../static/common/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{URL::asset('vendor/js/ie-emulation-modes-warning.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="../static/verdors/html5shiv/html5shiv.min.js"></script>
    <script src="../static/verdors/respond/respond.min.js"></script>
    <![endif]-->
    <script src="../../../../vendor/jQuery/jquery-2.2.3.min.js"></script>
    <script src="../../../../vendor/bootstrap/dist/js/bootstrap.js"></script>
    <style>
        .section1{
            /*border:1px solid red;*/
            margin-top: -18px;
            width:100%;
            height: 299px;
        }
        .font_style{
            font-weight: bold;
            font-family: "NSimSun";
        }
        .section3_title ,.section3_content{
            display: none;
        }
        .section5_title ,.section5_content{
            display: none;
        }
        .section2 .section2_title{
            width:30%;
            height:80px;
            line-height: 80px;
            margin: 30px auto;
            border-top:2px solid #8C6238;
            border-bottom:2px solid #8C6238;
            border-left:10px solid #8C6238;
            border-right:10px solid #8C6238;
            font-size:30px;
            letter-spacing:8px;
            font-weight: bold;
            margin-top: 50px;
            font-family: "NSimSun";
        }
        .section2_content{
            width:38%;
            height: auto;
            margin: 20px auto;
            color:#7E7E7E;
            letter-spacing: 2px;
            /*border:1px solid red;*/
        }
        .section3{
            /*border:1px solid blue;*/
            margin-top: 50px;
            width:100%;
            /*border:1px solid red;*/
        }
        .section3_title ,.section3_content{
            display: none;
        }
        .section3 .section3_title{
            width:30%;
            height:80px;
            line-height: 80px;
            margin: 60px auto;
            border-top:2px solid #8C6238;
            border-bottom:2px solid #8C6238;
            border-left:10px solid #8C6238;
            border-right:10px solid #8C6238;
            font-size:28px;
            letter-spacing:8px;
        }
        .section3 .section3_left{
            /*border:1px solid red;*/
            width:50%;
            height:500px ;
            /*float:right;*/
            /*padding-left: 300px;*/
        }
        .section3 .section3_left img{
            /*border:1px solid red;*/
            width:100%;
            height:500px ;

        }
        .section3_content{
            width:38%;
            height: auto;
            margin: 20px auto;
            color:#7E7E7E;
            letter-spacing: 2px;
        }
        .section3_right{
            /*border:1px solid red;*/
            width:50%;
            height:500px ;
            position: relative;
            float:left;

        }
        .section3_right img{
            width:100%;
            height:500px;
        }
        .section3_right .right_main{
            position: absolute;
            top:25%;
            left:12%;

        }
        .right_main div{
            width: 90px;
            height: 8px;
            background-color: #fff;
        }
        .right_main div+p{
            color:#fff;
            font-size: 18px;
            padding: 10px 0 0 1px;
            line-height: 30px;
        }
        .right_main p:nth-of-type(2){
            color:#fff;
            font-size: 13px;
            width:60%;
            height: 60px;
            letter-spacing: 2px;
            line-height: 30px;
        }
        .section4{
            margin-top:50px;
            width:100%;
            height: 300px;
            /* margin-left: 10px; */
        }
        .section4 img{
            width:100%;
            height: 300px;
            /*margin-top: 50px;*/
        }
        .section4_main{
            border:1px solid #fff;
            width:100%;
            height: 300px;
            color: #fff;
            margin-top: 70px;

        }
        .line{
            width:90px;
            height: 8px;
            background-color: #fff;
            margin:10px auto;
            /*padding-top:20px ;*/
            margin-top: 40px;
        }
        .section4_main div:nth-of-type(2){
            font-size:18px;
        }
        .section4 .main_word{
            width:300px;
            height: 56px;
            letter-spacing: 3px;
            /* border: 1px solid red; */
            margin: 8px auto;
            font-size: 14px;
        }
        .section5{
            /*border:1px solid red;*/
            width:100%;
            height: auto;
            font-family: "黑体";
            font-weight: normal;
            margin-top: 40px;
            margin-bottom: 55px;
        }
        .section3_title ,.section3_content{
            display: none;
        }
        .section5 .section5_left{
            /*border:1px solid red;*/
            width:33%;
            height: 360px;
            margin-left: 20%;
        }
        .section5 .section5_left img{
            width:100%;
            /*height: 100%;*/
            height:auto;
        }
        .section5 .section5_title{
            width:30%;
            height:80px;
            line-height: 80px;
            margin: 30px auto;
            border-top:2px solid #8C6238;
            border-bottom:2px solid #8C6238;
            border-left:10px solid #8C6238;
            border-right:10px solid #8C6238;
            font-size:28px;
            letter-spacing:8px;
        }
        .section5_content{
            width:38%;
            height: auto;
            margin: 20px auto;
            color:#7E7E7E;
            letter-spacing: 2px;

        }
        .section5_left,.section5_right{
            margin-top:30px ;
        }
        .section5_right div{
            margin-left: 20px;
        }
        .section5_right div:nth-of-type(1){
            width:80px;
            height: 8px;
            background-color: #8C6238;
            margin-top: 80px;

        }
        .section5_right div:nth-of-type(2){
            font-size:20px;
            margin-top: 8px;
        }
        .section5_right div:nth-of-type(3){
            font-size:14px;
            width:380px;
            height: auto;
            letter-spacing: 1px;
            /*border:1px solid red;*/
            line-height: 30px;
            margin-top: 20px;
        }
        @media screen and (max-width:1680px){
            .section1{
                margin-bottom: 0px;
                width:100%;
                height: 230px;
            }
            .section2 .section2_title{
                margin-top: 70px;
            }
            .section5{
                margin-bottom: 25px;
            }
        }
        @media screen and (max-width:1400px){
            .section1{
                margin-bottom: 0px;
                width:100%;
                height: 230px;
            }
            .section2 .section2_title{
                margin-top: 30px;
            }
            .section3 .section3_left{
                /*border:1px solid red;*/
                width:50%;
                height:360px ;
                /*float:right;*/
                /*padding-left: 300px;*/
            }
            .section3 .section3_left img{
                /*border:1px solid red;*/
                width:100%;
                height:358px ;

            }
            .section3_content{
                width:38%;
                height: auto;
                margin: 20px auto;
                color:#7E7E7E;
                letter-spacing: 2px;
            }
            .section3_right{
                /*border:1px solid red;*/
                width:50%;
                height: 360px;
                position: relative;
                float:left;

            }
            .section3_right img{
                width:100%;
                height: 360px;
            }
            .section3_right .right_main{
                position: absolute;
                top:10%;
                left:16%;
            }
            .right_main div{
                width: 90px;
                height: 8px;
                background-color: #fff;

            }
            .right_main div+p{
                color:#fff;
                font-size: 18px;
                padding: 10px 0 0 1px;
                line-height: 30px;
            }
            .right_main p:nth-of-type(2){
                color:#fff;
                font-size: 13px;
                width:60%;
                height: 60px;
                letter-spacing: 2px;
                line-height: 30px;
            }
            .section5 .section5_left{
                /*border:1px solid red;*/
                font-family: "黑体";
                width:33%;
                height: 340px;
                margin-left: 20%;
            }
            .section5_right div:nth-of-type(1){
                margin-top: 45px;
            }
        }
        /*@media screen and (max-width:1024px){*/
        /*.section3 .section3_title{*/
        /*width:65%;*/
        /*height:50px;*/
        /*text-align: center;*/
        /*line-height: 50px;*/
        /*font-size:15px;*/
        /*margin-top: 300px;*/
        /*margin-bottom: 10px;*/
        /*}*/
        /*}*/
        @media screen and (max-width:1280px){
            .section2 .section2_title {
                margin-top: 25px;
            }
            .section2_content {
                width: 40%;
                height: auto;
                margin: 20px auto;
                color: #7E7E7E;
                letter-spacing: 2px;
            }
            .section5 {
                margin-bottom: 10px;
            }
        }
        @media screen and (max-width:1024px)and (min-width:768px){
            .section3_right,.section5_right{
                display: none;
            }
            .active_a {
                margin-left: 0px;
                width: 100%;
                /*padding-left: 20px;*/
                text-align: left;
            }
            body{
                /* min-height: 1000px; */
                padding-top: 22px;
            }
            .header{
                width:100%;
                height: 180px;
            }
            .section1{
                width:100%;
                /*height:120px;*/
                height: auto;
            }
            .section1 img{
                width:100%;
                height: auto;
                /*height:100px;*/
            }
            .section2 .section2_title{
                width:65%;
                height:50px;
                line-height: 50px;
                text-align: center;
                font-size:15px;
                margin-top: 30px;
                margin-bottom: 10px;
            }
            .section3 .section3_content{
                width:80%;
                height:auto;
            }
            .section3{
                /*border: 1px solid red;*/
                padding-left: 0px;
                margin-left: 0px;
            }
            .section3 .section3_left{
                width:100%;
                height: auto;
                /*border: 1px solid red;*/
                /*padding-left: 5%;*/
                margin-left: 0px;
            }
            .section3 .section3_left img{
                /*border:1px solid red;*/
                width:100%;
                height:auto;
            }
            .section3 .section3_title{
                width:65%;
                height:50px;
                text-align: center;
                line-height: 50px;
                font-size:15px;
                margin-top: 20px;
                margin-bottom: 10px;
            }
            .section5{
                /*border:1px solid red;*/
                width:100%;
                height: auto;
            }
            .section5 .section5_left{
                width: 100%;
                height: auto;
                margin-left: 0px;
                padding-left: 0px;
            }
            .section5 .section5_content{
                width:80%;
                height:auto;
            }
            .section5 .section5_title{
                width:65%;
                height:50px;
                line-height: 50px;
                text-align: center;
                font-size:15px;
                margin-top: 20px;
                margin-bottom: 10px;
            }
            .section2 .section2_content{
                width:80%;
                height:auto;
            }
            .section3_right,.section5_right{
                display: none;
            }
        }
        @media screen and (max-width:750px) {
            .active_a {
                margin-left: 0px;
                width: 100%;
                /*padding-left: 20px;*/
                text-align: left;
            }
            .section3_right,.section5_right{
                display: none;
            }
            body{
                /* min-height: 1000px; */
                padding-top: 22px;
            }
            .header{
                width:100%;
                height: 180px;
            }
            .section1{
                width:100%;
                height:220px;
            }
            .section1 img{
                width:100%;
                height:auto;
            }
            .section2 .section2_title{
                width:65%;
                height:50px;
                line-height: 50px;
                text-align: center;
                padding-left: 9px;
                font-size:16px;
                margin-top: 20px;
                margin-bottom: 10px;
                font-family:"宋体",'PingFangSC-Regular', 'sans-serif','Noto Sans CJK SC';
                font-weight: bold;
            }
            .section3 .section3_content{
                width:92%;
                height:auto;
            }
            .section3{
                /*border: 1px solid red;*/
                padding-left: 0px;
                margin-left: 0px;
            }
            .section3_right,.section5_right{
                display: none;
            }
            .section3 .section3_left{
                width:100%;
                height: auto;
                /*border: 1px solid red;*/
                padding-left: 5%;
                margin-left: 0px;
                margin-top: -45px;
            }
            .section3 .section3_left img{
                /*border:1px solid red;*/
                width:100%;
                height:260px ;
            }
            .section3 .section3_title{
                width:60%;
                height:50px;
                text-align: center;
                line-height: 50px;
                font-size:16px;
                margin-top: 30px;
                padding-left: 9px;
                margin-bottom: 10px;
                font-family:"宋体",'PingFangSC-Regular', 'sans-serif','Noto Sans CJK SC';
                font-weight: bold;
            }
            .section4{
                margin-top: 10px;
                padding-top: 0px;
            }
            .section4_main{
                margin-top: 0;
            }
            .section5{
                /*border:1px solid red;*/
                margin-bottom: 0;
                width:100%;
                height: auto;
            }
            .section5 .section5_left{
                width: 100%;
                height: auto;
                margin-left: 0px;
                padding: 0px;
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .section5 .section5_content{
                font-family: "黑体";
                font-weight: normal;
                width:92%;
                height:auto;
            }
            .section5 .section5_title{
                width:60%;
                height:50px;
                line-height: 50px;
                text-align: center;
                padding-left: 9px;
                font-size:15px;
                margin-top: -10px;
                margin-bottom: 10px;
                font-family:"宋体",'PingFangSC-Regular', 'sans-serif','Noto Sans CJK SC';
            }
            .section5 .section5_left img{
                width:100%;
                height: auto;
                margin-top: 30px;
            }
            .section2 .section2_content{
                width:92%;
                height:auto;
            }
        }
    </style>


</head>
<body>
    @include("frontend.module.myheader");
    <!-- area1 start -->
    <div class="container-fluid section1 clear-padding">
        <img class="img-responsive center-block" src="{{$data["img"][0]}}">
    </div>
    <!-- area1 end -->


    <!-- area2 start -->
    <div class="container-fluid section2  text-center">
        <div class="section2_title" style="font-family:SimSun ">
            <p>{{$data["word"][0]}}</p>
        </div>
        <div class="section2_content text-center">
            <p>{{$data["word"][1]}}
            </p>
        </div>
    </div>
    <!-- area2 end -->


    <!-- area3 start -->
    <div class="container-fluid section3 clear-padding">
        <div class="row center-block">

        <div class="section3_left col-md-5 ">
            <img class="img-responsive" src="{{$data["img"][1]}}">
        </div>
        <div class="section3_right col-md-5"  style="background:url('{{URL::asset('images/frontend/teabg.jpg')}}')">
            <div class="right_main">
                  <div></div>
                    <p>{{$data["word"][2]}}</p>
                    <p>{!! $data["word"][3] !!}<br>
                    </p>
            </div>
        </div>
            <!-- 手机端显示不同信息1 area6 -->
            <div class="section3_title font_style">
                <p>{{$data["word"][10]}}</p>
            </div>
            <div class="section3_content text-center">
                <p>{{$data["word"][11]}}
                </p>
            </div>
        <!-- area6 end -->
        </div>
    </div>

        {{--</div>--}}
    {{--</div>--}}
    <!-- area3 end -->


    <!-- area4 start -->
    <div class="container-fluid center-block text-center clear-padding" >
    <div class="section4" style="background:url({{$data["img"][2]}}); background-size:100% 100%;">
       <div class="section4_main">
        <div class="line"></div>
        <div>{{$data["word"][4]}}</div>
        <div class="main_word">{{$data["word"][5]}}</div>
        <div class="main_word">{{$data["word"][6]}}</div>
        <div class="main_word">{{$data["word"][7]}}</div>
        </div>   
    </div>
    </div>
    <!-- area4 end -->

    <!-- area5 start -->
    <div class="container-fluid section5">
        <div class="row">
            <!-- 手机端显示不同信息2 area7-->
            <div class="section5_title font_style">
                        <p>{{$data["word"][12]}}</p>
                    </div>
                    <div class="section5_content text-center font_style">
                        <p>{{$data["word"][13]}}
                        </p>
            </div>
            <!-- area7 end -->
            <div class="section5_left col-md-5 ">
                    <img class="img-responsive" src="{{$data["img"][3]}}">
            </div>
            <div class="section5_right col-md-5">
                <div></div>
                <div>{{$data["word"][8]}}</div>
                <div>{{$data["word"][9]}}
                </div>
            </div>
    </div>
    </div>
    <!-- area5 end -->

    @include("frontend.module.myfooter")
    {{--<!-- area6 start -->--}}
    {{--<div class="container-fluid section10 col-md-12 " style="background: url({{URL::asset('images/frontend/footer.jpg')}})">--}}
        {{--<div class="row">--}}
            {{--<div class="text-center">--}}
                {{--<div class="page col-md-4" id="pageHide">--}}
                    {{--<p>首页</p>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a>企业文化</a></li>--}}
                        {{--<li ><a>产品中心</a></li>--}}
                        {{--<li ><a>新闻资讯</a></li>--}}
                        {{--<li><a>油菜文化</a></li>--}}
                        {{--<li ><a>购买渠道</a></li>--}}
                        {{--<li ><a>联系我们</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="store col-md-2 ">--}}
                    {{--<div class="store_tile">线上商城</div>--}}
                    {{--<div class="taobao ">--}}
                        {{--<img src="{{URL::asset('images/frontend/taobao.png')}}"/>--}}
                        {{--<a>淘宝商城</a>--}}
                    {{--</div>--}}
                    {{--<div class="pinduoduo">--}}
                        {{--<img src="{{URL::asset('images/frontend/pinduoduo.png')}}"/>--}}
                        {{--<a>拼多多商城</a>--}}
                    {{--</div>--}}
                    {{--<div class="weixin ">--}}
                        {{--<img src="{{URL::asset('images/frontend/weixin.png')}}"/>--}}
                        {{--<a>微信商城</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="contact col-md-5" id="contactHide">--}}
                    {{--<p>联系我们</p>--}}
                    {{--<ul class="list-unstyled" >--}}
                        {{--<li>--}}
                            {{--<ul class="list-inline text-center" style="padding-top: 20px">--}}
                                {{--<li><img src="{{URL::asset('images/frontend/tel.png')}}"/></li>--}}
                                {{--<li><ul class="list-unstyled">--}}
                                    {{--<li>0736-7221688</li>--}}
                                    {{--<li><span style="font-size: 8px">24小时服务在线</span></li></ul></li>--}}
                            {{--</ul>--}}
                        {{--<li>--}}
                    {{--</ul>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li>--}}
                            {{--<ul class="list-inline">--}}
                                {{--<li><img src="{{URL::asset('images/frontend/phone.png')}}"/></li>--}}
                                {{--<li><ul class="list-unstyled">--}}
                                    {{--<li>在线咨询</li>--}}
                                    {{--<li><span style="font-size: 8px">24小时服务在线</span></li></ul></li>--}}
                            {{--</ul>--}}
                        {{--<li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="footer1 col-md-12 col-xs-12 text-center">--}}
            {{--<p>湖南天地农耕天地茶油有限公司版权所有2019 | 服务热线:400-000-5252</p>--}}
            {{--<p>地址:湖南省常德市鼎城区周家电镇  | 邮箱:cdldngscy@163.com</p>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- area6 end -->--}}



<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{URL::asset('vendor/js/ie10-viewport-bug-workaround.js')}}"></script>
<script src="../../../../js/myheader.js"></script>
<script>
    window.onload=function(){
        // alert("222")
        // alert("0000")
        var width = window.screen.width;
        var cWidth = document.body.clientWidth;
        wechatCodeShow();//绑定微信图标
        // $(".section3_title ,.section3_content").css("display","none");
        // $(".section5_title ,.section5_content").css("display","none");
        if(width<=1024){
            // $(".section3_right").css("display","none");
            // $(".section5_right").css("display","none");
            $(".section3_title ,.section3_content").css("display","block");
            $(".section5_title ,.section5_content").css("display","block");
        }
        if(width==1024){
            $(".section3_title").css("margin-top","300px");
            $(".pf").css("padding-left","23%");
        }
    }
</script>

</body>
</html>