<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>联系我们</title>
    <link rel="stylesheet" href="{{URL::asset('vendor/font/iconfont.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <!--<link href="../static/common/css/index.css" rel="stylesheet">-->
    {{--<link href="{{URL::asset('css/contact.css')}}" rel="stylesheet">--}}
    <link href="{{URL::asset('css/Normalize/Normalize.css')}}" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{URL::asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{URL::asset('vendor/js/ie8-responsive-file-warning.js')}}></script><![endif]-->
    <script src="{{URL::asset('vendor/js/ie-emulation-modes-warning.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="../static/verdors/html5shiv/html5shiv.min.js"></script>
    <script src="../static/verdors/respond/respond.min.js"></script>
    <![endif]-->
    <script src="../../../../vendor/jQuery/jquery-2.2.3.min.js"></script>
    <script src="../../../../vendor/bootstrap/dist/js/bootstrap.js"></script>

    <style>
        .box:hover{
            cursor: pointer;
            background-color: #ECECEC;
        }
        .section2 div:nth-of-type(1){
            font-size:25px;
            font-weight: bold;
            margin-top: 50px;
            letter-spacing: 2px;
        }
        .section2 div:nth-of-type(2){
            width:40%;
            height: 60px;
             /*border:1px solid red;*/
            margin: 10px auto;
            line-height: 20px;
        }
        .section2 div:nth-of-type(3){
            font-size: 16px;
        }
        .section2 div:nth-of-type(4){
            font-size:28px;
            font-weight: bold;
        }
        .section2 div:nth-of-type(5){
            margin-top: 30px;
        }
        /* .demo{width:850px;margin:20px auto;}
        #l-map{height:400px;width:600px;float:left;border:1px solid #bcbcbc;} */
        html,body{margin:0;padding:0;}
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
        .section3{
            width:100%;
            height: 460px;
            margin-top: 60px;
            /*border:1px solid blue;*/
        }
        #container1{
            width:450px;height:400px;
            /*margin-left: 30px;*/
            /*border:1px solid red;*/
        }
        #if1,if2{
            display: inline-block;
        }
        .section3_left{
            /*border:1px solid red;*/
            padding-left: 12%;
        }

        .section3_right{
            /*border:1px solid red;*/
            /*padding-left: 5%;*/
            padding-left: 98px;
        }
        .section3_left .if1_pc{
            margin-left: 100px;
            /*border:1px solid blue;*/
        }
        .section4{
            width:100%;
            height:160px;
            /*border: 1px solid red;*/

        }
        .section4 .row{
            width:64%;
            height: 160px;
            /*border:1px solid blue;*/
        }
        .section4 .box{
            border:1px solid #ccc;
            /*width:18%;*/
            width:30%;
            height:80px;
            float:left;
            margin-left: 30px;
            margin-top: 30px;
            /*border:1px solid red;*/
        }
        /*.section4 .box:nth-of-type(1){*/
            /*margin-left: 22%;*/
        /*}*/
        .section4 .box .box_img,.box_word{
            float:left;
        }
        .section4 .box .box_img{
            /*border:1px solid red;*/
            margin-top: 20px;
            margin-left: 20%;
        }
        .section4 .box .box_word{
            /*border:1px solid red;*/
            margin-top: 20px;
            margin-left: 10%;
        }
        #if1_mobile,#if2_mobile{
            display:none;
        }
        @media screen and (max-width:1680px) {
            .section3_left{
                /*border:1px solid red;*/
                padding-left: 12%;
            }

            .section3_right{
                /*border:1px solid red;*/
                /*padding-left: 2%;*/
                padding-left:37px;
            }
            .section4{
                width:100%;
                height:160px;
                /*border: 1px solid red;*/

            }
            .section4 .row{
                width:64%;
                height: 160px;
                /*border:1px solid blue;*/
            }
            .section4 .box{
                border:1px solid #ccc;
                /*width:18%;*/
                width:30%;
                height:80px;
                float:left;
                margin-left: 30px;
                margin-top: 30px;
                /*border:1px solid red;*/
            }
        }
        @media screen and (max-width:1600px) {

            .section3_left{
                /*border:1px solid red;*/
                /*padding-left: 12%;*/
                padding-left:140px;
            }

            .section3_right{
                /*border:1px solid red;*/
                /*padding-left: 2%;*/
                padding-left:44px;
            }
            .section4{
                width:100%;
                height:160px;
                /*border: 1px solid red;*/

            }
            .section4 .row{
                width:70%;
                height: 160px;
                /*border:1px solid blue;*/
            }
            .section4 .box{
                border:1px solid #ccc;
                /*width:18%;*/
                width:30%;
                height:80px;
                float:left;
                margin-left: 30px;
                margin-top: 30px;
                /*border:1px solid red;*/
            }
        }

        @media only screen and (max-width:1400px){
            .section3_left{
                /*border:1px solid red;*/
                /*padding-left: 6%;*/
                padding-left: 78px;
            }

            .section3_right{
                /*border:1px solid red;*/
                /*padding-left: 3%;*/
                padding-left: 50px;
            }
            .section4{
                width:100%;
                height:160px;
                /*border: 1px solid red;*/

            }
            .section4 .row{
                width:78%;
                height: 160px;
                /*border:1px solid blue;*/
            }
            .section4 .box{
                border:1px solid #ccc;
                /*width:18%;*/
                width:30%;
                height:80px;
                float:left;
                margin-left: 30px;
                margin-top: 30px;
                /*border:1px solid red;*/
            }
            /*.section4 .box:nth-of-type(1){*/
                /*margin-left: 20%;*/
            /*}*/
            .section4 .box .box_img,.box_word{
                float:left;
            }
            .section4 .box .box_img{
                /*border:1px solid red;*/
                margin-top: 20px;
                margin-left: 20%;
            }
            .section4 .box .box_word{
                /*border:1px solid red;*/
                margin-top: 20px;
                margin-left: 10%;
            }
        }
        @media only screen and (max-width:1366px){
            .section3_left{
                /*border:1px solid red;*/
                padding-left: 5% ;
            }

            .section3_right{
                /*border:1px solid red;*/
                /*padding-left: 2%;*/
                padding-left:37px;
            }
            .section4{
                width:100%;
                height:160px;
                /*border: 1px solid red;*/

            }
            .section4 .row{
                width:80% ;
                height: 160px;
                /*border:1px solid blue;*/
            }
            .section4 .box{
                border:1px solid #ccc;
                /*width:18%;*/
                width:30%;
                height:80px;
                float:left;
                margin-left: 30px;
                margin-top: 30px;
                /*border:1px solid red;*/
            }
        }
        @media only screen and (max-width:1360px) and(min-width:1280px){
            .section3_left{
                /*border:1px solid red;*/
                padding-left: 0%;
            }

            .section3_right{
                /*border:1px solid red;*/
                padding-left:7%;
            }
        }
        @media only screen and (max-width:1280px){
            .section3_left{
                /*border:1px solid red;*/
                padding-left: 0%;
            }

            .section3_right{
                /*border:1px solid red;*/
                padding-left: 5%;
            }
            .section4{
                width:100%;
                height:160px;
                /*border: 1px solid red;*/

            }
            .section4 .row{
                width:91%;
                height: 160px;
                /*border:1px solid blue;*/
            }
            .section4 .box{
                border:1px solid #ccc;
                /*width:18%;*/
                width:30%;
                height:80px;
                float:left;
                margin-left: 30px;
                margin-top: 30px;
                /*border:1px solid red;*/
            }
        }
        @media only srceen and (max-width:1152px){
            .section3_left{
                /*border:1px solid red;*/
                padding-left: 0%;
            }

            .section3_right {
                /*border:1px solid red;*/
                padding-left: 2%;
            }
        }
        @media screen and (max-width:1024px)and (min-width:768px){
            .section1 img{
                width:100%;
                height: auto;
            }
            .section2 div:nth-of-type(1) {
                font-size: 18px;
            }

            .section2 div:nth-of-type(2) {
                font-size: 10px;
                width: 100%;
                height: 40px;
                /*border:1px solid red;*/
            }

            .section2 div:nth-of-type(5) {
                font-size: 10px;
                width: 100%;
                height: 40px;
                margin-top: 10px;
                /*border:1px solid red;*/
            }
            .section3 {
                width: 100%;
                height:auto;
                /*border:1px solid red;*/
                padding: 0px;
                margin: 0px;
            }
            .section3_left{
                /*border:1px solid red;*/
                /*width:50%;*/
                padding-left: 2%;
                padding-right: 2%;
                margin-bottom: 40px;
            }
            #if1_mobile{
                margin: 0 auto;
                /*float:left;*/

            }
            .section3_right{
                /*width:50%;*/
                padding-left: 2%;
                padding-right: 2%;
            }
            #if1_mobile{
                margin: 10px auto;
            }
            .section4{
                width:100%;
                height: 400px;
                /*border: 1px solid red;*/
            }
            .section4 .box {
                width: 90%;
                height: 80px;
                border: 1px solid #ccc;
                margin-left: 30px;
                margin-bottom: 20px;
                padding-left: 20%;
            }

            .section4 .box:nth-of-type(1) {
                margin-left: 30px;
            }

        }
        @media screen and (max-width:750px) {
            /*#container1 {*/
                /*margin-bottom: 20px;*/
            /*}*/
            .section2 div:nth-of-type(1) {
                font-size: 18px;
                margin-top: 30px;
            }

            .section2 div:nth-of-type(2) {
                font-size: 10px;
                width: 100%;
                height: 40px;
                /*border:1px solid red;*/
            }

            .section2 div:nth-of-type(5) {
                font-size: 10px;
                width: 100%;
                height: 40px;
                margin-top: 10px;
                /*border:1px solid red;*/
            }

            .section3 {
                width: 100%;
                height: 750px;
                /*border:1px solid red;*/
                padding: 0px;
                margin-top: 15px;
                margin-bottom: 30px;
            }
            .section3_left{
                width:100%;
                /*border:1px solid red;*/
                padding-left: 2%;
                padding-right: 2%;
                margin-bottom: 10px;
            }
            #if1_mobile{
                margin: 0 auto;
                margin-bottom: 30px;
            }
            .section3_right{
                padding-left: 2%;
                padding-right: 2%;
            }
            #if2_mobile{
                margin: 0 auto;
                /*margin-bottom: 30px;*/
            }
            .section4{
                width:100%;
                height: auto;
                margin-top: -18px;
                margin-bottom: 30px;
                /*border: 1px solid red;*/
            }
            .section4 .box {
                width: 100%;
                height: 80px;
                border: 1px solid #ccc;
                margin-left: 0px;
                margin-bottom: -10px;
                /*border:1px solid red;*/
            }

            .section4 .box:nth-of-type(1) {
                margin-left: 0px;
            }

        }
    </style>
</head>
<body>
            @include("frontend.module.myheader")
            <!-- section1 start -->
            <div class="container-fluid section1 clear-padding">
                    <img class="img-responsive center-block" src="{{$data["img"][0]}}">
            </div>
            <!-- section1 end -->


            <!-- section2 start -->
            <div class="container-fluid section2 text-center">
                <div>{{$data["word"][0]}}</div>
                <div>{!! $data["word"][1] !!}<br>

                </div>
                <div>{{$data["word"][2]}}</div>
                <div>{{$data["word"][3]}}</div>
                <div>{{$data["word"][4]}}</div>
                </div>
            <!-- section2 end -->
            <!-- section3 start -->
            <div class="container-fluid section3 clear-padding">
                <div class="row clear-margin">
                    <div class="section3_left col-md-5 col-md-offset-1">
            <div  id="container1 ">
                <!--<div id="map1"></div>-->
                {{--<iframe id="if1_pc"  width="450" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/s/U5J_Fb"></iframe>--}}
                <iframe src="{{URL::asset('map/map1.html')}}" id="if1_pc" width="450" height="400" frameborder="0" scrolling="no"></iframe>
                <iframe src="{{URL::asset('map/map1.html')}}" id="if1_mobile" width="334" height="365" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/s/jPJ_Fb"></iframe>
            </div>
            </div>
            <div class="section3_right col-md-5">
                    <div  id="container2" >
                        <!--<div id="map2"></div>-->
                        <iframe src="{{URL::asset('map/map2.html')}}" id="if1_pc" width="450" height="400" frameborder="0" scrolling="no"></iframe>
                        <iframe src="{{URL::asset('map/map2.html')}}" id="if1_mobile" width="334" height="365" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/s/jPJ_Fb"></iframe>

                    </div>
            </div>
            </div>
            </div>
            <!-- section3 end -->
    <!--section4 start-->
    <div class="container-fluid section4">
        <div class="row center-block">
            <div class="box col-md-4 " onclick="window.open('{{$data["link"][0]}}')">
                <div class="box_img">
                    <img class="foot_img" src="{{$data["img"][1]}}">
                </div>
                <div class="box_word">
                    <p>{{$data["word"][5]}}<br>
                        {{$data["word"][6]}}</p>
                </div>
            </div>
            <div class="box col-md-4" onclick="window.open('{{$data["link"][1]}}')">
                <div class="box_img">
                    <img class="foot_img" src="{{$data["img"][2]}}">
                </div>
                <div class="box_word">
                    <p>{{$data["word"][7]}}<br>
                        {{$data["word"][8]}}</p>
                </div>
            </div>
            <div class="box col-md-4" onclick="window.open('{{$data["link"][2]}}')">
                <div class="box_img">
                    <img class="foot_img" src="{{$data["img"][3]}}">
                </div>
                <div class="box_word">
                    <p>{{$data["word"][9]}}<br>
                        {{$data["word"][10]}}</p>
                </div>
            </div>
        </div>
    </div>

@include("frontend.module.myfooter")

</body>

<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{URL::asset('js/ie10-viewport-bug-workaround.js')}}"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript">
    window.onload=function(){
        var width = window.screen.width;
        var cWidth = document.body.clientWidth;
        console.log(width);
        // $("#if1_mobile,#if2_mobile").css("display","none");
        wechatCodeShow();//绑定微信图标
        if(width<=768){
            $("#if1_mobile,#if2_mobile").css("display","block");
            $("#if1_pc,#if2_pc").css("display","none");
        }
        if(width>=750 && width<=1024){
            $("#if1_mobile,#if2_mobile").css("display","block");
            $("#if1_pc,#if2_pc").css("display","none");
        }
        // if(width=1360){
        //
        //     $(".section4 .row").css("width","80%");
        //     console.log("12")
        // }

    }
</script>
</html>