<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻资讯</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link rel="stylesheet" href="{{URL::asset('vendor/font/iconfont.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/font/iconfont.css')}}" rel="stylesheet">
<!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    <!--<link href="../static/common/css/index.css" rel="stylesheet">-->
    {{--<link href="{{URL::asset('css/news.css')}}" rel="stylesheet">--}}
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

    <style type="text/css">
        body{
            font-family: "黑体";
        }
        .section1{
            width:100%;
            height: auto;
        }
        .section2{
            width:73%;
            height: 320px;
            /*border:1px solid red;*/
            margin-top: 50px;
            background-color: #F3F4EF;
            margin-bottom: 30px;
        }
        .section2 .section2_left{
            /*border:1px solid red;*/
            width:50%;
            height: 320px;
            position:relative;
        }
        .section2 .section2_left img{
            width:100%;
            height: 320px;
            position:absolute;
            top:0;
            left:0;
        }
        .section2 .section2_right .right_title{
            margin-top: 20px;
            font-size: 25px;
            color: #8B6435;
        }
        .section2 .section2_right .right_time{
            font-size: 15px;
            color: #A9A9A9;
        }
        .section2 .section2_right .right_main{
            font-size: 16px;
            width: 90%;
            height: auto;
            line-height: 25px;
            color: #333333;
            /*text-indent:25px;*/
            margin-top: 30px;
            margin-bottom: 30px;
            /*border:1px solid red;*/
        }
        .section3{
            width:76%;
            /*height: 500px;*/
            height:auto;
            /*border:1px solid red;*/
            margin-top: 20px;
        }
        .section3 .section3_box{
            width:32%;
            height: 330px;
            /*height:auto;*/
            float:left;
            margin-left: 14px;
            margin-bottom: 40px;
            /*border:1px solid blue;*/
        }
        .section3 .section3_img{
            width:100%;
            /*height: 283px;*/
            height:auto;
            text-align: center;
        }
        .section3 .section3_title{
            width:100%;
            height: 40px;
            line-height: 40px;
            font-size: 16px;
            /*border:1px solid red;*/
        }
        .section3 .section3_footer{
            width:100%;
            height: 30px;
            /*border:1px solid red;*/
            position:relative;
        }
        .section3 .section3_footer span:nth-of-type(1){
            color:#7D7D7D;
        }
        .section3 .section3_footer span:nth-of-type(2) a{
            color: #8B6435;
            text-align: right;
            position:absolute;
            top:2px;
            right:5px;
        }
        .section4{
            width:75%;
            /*height: 60px;*/
            /*margin-bottom: 0;*/
            /*border:1px solid red;*/
        }
        .section4 nav{
            /*border:1px solid red;*/
        }
        @media screen and (max-width:1680px){
            .section2{
                margin-top: 45px;
            }
            .section2 .section2_right .right_main{
                font-size: 16px;
                width: 100%;
                height: 140px;
                line-height: 20px;
                color: #000;
                /*text-indent:25px;*/
                margin-top: 30px;
                margin-bottom: 10px;
                /*border:1px solid red;*/
            }
            .section3{
                width:76%;
            }
            .section3 .section3_box{
                height:305px;
            }
            .section4 {
                width: 75%;
                /*height: 60px;*/
                /* border: 1px solid red; */
                margin-top: -25px;
                /*margin-bottom: 20px;*/
            }
        }
        @media screen and (max-width:1600px){
            .section2{
                margin-top: 50px;
                height:300px;
            }
            .section2 .section2_left{
                /*border:1px solid red;*/
                width:50%;
                height: 300px;
                position:relative;
            }
            .section2 .section2_left img{
                width:100%;
                height: 300px;
                position:absolute;
                top:0;
                left:0;
            }
            .section2 .section2_right .right_title{
                margin-top: 20px;
                font-size: 25px;
                color: #8B6435;
            }
            .section2 .section2_right .right_time{
                font-size: 15px;
                color: #A9A9A9;
            }
            .section2 .section2_right .right_main{
                font-size: 16px;
                width: 90%;
                height: auto;
                line-height: 25px;
                color: #333333;
                /*text-indent:25px;*/
                margin-top: 20px;
                margin-bottom: 20px;
                /*border:1px solid red;*/
            }
            .section2 .section2_right .right_img{
                width:125px;height: 34px;
                margin-top: -6px;
            }

            .section3{
                width:76%;
            }
            .section3 .section3_box{
                height:290px;
            }
            .section4 {
                width: 74%;
                /*height: 60px;*/
                /* border: 1px solid red; */
                margin-top: -25px;
                /*margin-bottom: 55px;*/
            }
            .section5 .section5_left{
                margin-bottom: 50px;
                border:1px solid red;
            }
        }
        @media screen and (max-width:1400px){
            .section2{
                margin-top: 45px;
            }
            .section2 .section2_right .right_img{
                width:130px;height: 34px;
                margin-top: -6px;
            }
            .section3 .section3_box{
                width:32%;
                height: 255px;
                float:left;
                margin-left: 10px;
                /*border:1px solid blue;*/
            }
            .section3 .section3_img{
                width:100%;
                /*height: 220px;*/
                height:auto;
                text-align: center;
            }
            .section2 .section2_right .right_main{
                font-size: 16px;
                width: 100%;
                height: 140px;
                line-height: 20px;
                color: #000;
                /*text-indent:25px;*/
                margin-top: 30px;
                margin-bottom: 10px;
                /*border:1px solid red;*/
            }
            .section4 {
                width: 75%;
                /*height: 60px;*/
                /* border: 1px solid red; */
                margin-top: -30px;
                /*margin-bottom: 55px;*/
            }
        }
        @media screen and (max-width:1366px){
            .section2 .section2_right .right_main{
                margin-top: 16px;
            }
            .section2{
                height: 280px;
            }
            .section2 .section2_left img {
                width: 100%;
                height: 280px;
                position: absolute;
                top: 0;
                left: 0;
            }
            .section3 .section3_box {
                width: 32%;
                height: 261px;
                float: left;
                margin-left: 10px;
                /* border: 1px solid blue; */
            }
            .section4 {
                width: 75%;
                /*height: 60px;*/
                /* border: 1px solid red; */
                margin-top: -40px;
                /*margin-bottom: 55px;*/
            }
        }
        @media screen and (max-width:1300px){
            .section3 .section3_box {
                width: 32%;
                height: 250px;
                float: left;
                margin-left: 10px;
                /* border: 1px solid blue; */
            }
        }
        @media screen and (max-width:1280px){
            .section2{
                margin-top:48px;
            }
            .section3 .section3_box {
                width: 32%;
                height: 244px;
                float: left;
                margin-left: 10px;
                margin-bottom: 30px;
                /* border: 1px solid blue; */
            }
        }
        @media screen and (max-width:1024px) and (min-width:768px){
            .section1{
                display:none;
            }
            .active_a {
                margin-left: 0px;
                width: 100%;
                /*padding-left: 20px;*/
                text-align: left;
                /* height:200px !important; */
            }

            .header {
                width: 100%;
                height: 180px;
            }
            .section2{
                width:100%;
                height: 500px;
                /*border:1px solid red;*/
                margin-top: 20px;
            }
            .section2 .section2_left{
                /*border:1px solid red;*/
                width:100%;
                height: 260px;
                position:relative;
                margin-top: -18px;
            }
            .section2 .section2_left img{
                width:100%;
                height: 260px;
                position:absolute;
                top:0;
                left:0;
            }
            .section2 .section2_right{
                width:100%;
            }
            .section2 .section2_right .right_title{
                font-size: 16px;
                color: #8a6d3b;
                text-align: center;
                margin-top: 30px;
            }
            .section2 .section2_right .right_time{
                font-size: 14px;
                text-align: center;
                color: #ccc;
            }
            .section2 .section2_right .right_main{
                font-size: 15px;
                width: 100%;
                height: 100px;
                color: #000;
                /*text-indent:25px;*/
                margin-top: 10px;
                /*border:1px solid red;*/
            }
            .section2 .section2_right .right_img{
                display: inline-block;
                text-align: center;
                /*border:1px solid red;*/
                width:120px;
                height: 50px;
                margin-left: 40%;
            }
            .section3{
                width:100%;
                height: auto;
                /*border:1px solid red;*/
                margin-top: 20px;
            }
            .section3 .section3_box{
                width:50%;
                height: 280px;
                /*height:auto;*/
                float:left;
                /*border:1px solid blue;*/
                /*margin-right: 3px;*/
                /*margin-left: 3px;*/
                margin: 0px;
                margin-bottom: 10px;
            }
            .section3 .section3_img{
                width:98%;
                /*height: 220px;*/
                height:auto;
                text-align: center;
                margin: 0px auto;
            }
            .section3 .section3_title{
                width:100%;
                height: 20px;
                line-height: 20px;
                font-size: 16px;
                /*border:1px solid red;*/
            }
            .section3 .section3_footer{
                width:100%;
                height: 20px;
                /*border:1px solid red;*/
                position:relative;
            }
            .section3 .section3_footer span:nth-of-type(1){
                color:#ccc;margin-left: 8px;
                font-size: 12px;
            }
            .section3 .section3_footer span:nth-of-type(2) a{
                color:#8a6d3b;
                text-align: right;
                position:absolute;
                top:2px;
                right:5px;
                display: none;
            }
            .section4{
                width:100%;
                height: 60px;
                text-align: center;
                margin-top: 0;
                margin-bottom: 20px;
                /*border:1px solid red;*/
            }

        }
        @media screen and (max-width:750px) {
            .set_padding{
                padding-left: 10px;
                padding-right: 10px;
            }
            .active_a {
                margin-left: 0px;
                width: 100%;
                /*padding-left: 20px;*/
                text-align: left;
                /* height:200px !important; */
            }

            .header {
                width: 100%;
                height: 180px;
            }
            /*.section1 img{*/
                /*width:100%;*/
                /*height: auto;*/
            /*}*/
            /*.section1{*/
                /*border:1px solid red;*/
            /*}*/
            .section1{
                display: none;
            }
            .section2{
                width:100%;
                height: auto;
                /*border:1px solid red;*/
                margin-top: 20px;
                margin-bottom: 10px;
            }
            .section2 .section2_left{
                /*border:1px solid red;*/
                width:100%;
                height: 200px;
                /*height:auto;*/
                position:relative;
                margin-top: -17px;
            }
            .section2 .section2_left img{
                width:100%;
                height: 200px;
                /*height:auto;*/
                position:absolute;
                top:0;
                left:0;
            }
            .section2 .section2_right{
                width:100%;
                height: 225px;
            }
            .section2 .section2_right .right_title{
                font-size: 14px;
                color: #8a6d3b;
                text-align: center;
                margin-top: 20px;
            }
            .section2 .section2_right .right_time{
                font-size: 12px;
                text-align: center;
                color: #939393;
            }
            .section2 .section2_right .right_main{
                font-size: 10px;
                width: 100%;
                height: auto;
                color: #000;
                text-indent:25px;
                margin-top: 10px;
                margin-bottom: 20px;
                /*border:1px solid red;*/
            }
            .section2 .section2_right .right_img{
                display: inline-block;
                text-align: center;
                /*border:1px solid red;*/
                /*width:120px;*/
                width:100%;
                height: 40px;
                margin: 0 auto;
                /*margin-left: 30%;*/
            }
            .section2 .section2_right .right_img img{
                width:110px;
                height: 32px;
                margin: 0 auto;
            }
            .section3{
                width:100%;
                height: auto;
                /*border:1px solid red;*/
                margin-top: 20px;
            }
            .section3 .section3_box{
                width:50%;
                /*height: 160px;*/
                float:left;
                height:auto;
                /*border:1px solid blue;*/
                /*margin-right: 3px;*/
                /*margin-left: 3px;*/
                margin: 0px;
                margin-bottom: 3px;
            }
            .section3 .section3_img{
                width:95%;
                /*height: 120px;*/
                height: auto;
                text-align: center;
                margin: 0px auto;
            }
            .section3 .section3_title{
                width:100%;
                height: auto;
                /*line-height: 3px;*/
                /*height:10px;*/
                line-height: 10px;
                font-size: 12px;
                /*overflow: hidden;*/
                margin-bottom: 3px;
                /*border:1px solid red;*/
                padding-top: 0;
                padding-left: 4px;
                margin-top: 5px;
            }
            .section3 .section3_footer{
                width:95%;
                /*height: 20px;*/
                line-height: 20px;
                /*border:1px solid red;*/
                position:relative;
            }
            .section3 .section3_footer span:nth-of-type(1){
                color:#939393;margin-left: 6px;
                padding: 0;
                font-size: 10px;margin-top:0;height: 10px;
            }
            .section3 .section3_footer span:nth-of-type(2) a{
                color:#8a6d3b;
                text-align: right;
                position:absolute;
                top:1px;
                right:5px;
                display: none;
            }
            .section4{
                width:100%;
                height: 50px;
                line-height: 50px;
                text-align: center;
                margin: 10px auto;
                /*border:1px solid red;*/
            }
            .pagination{
                margin: 5px auto;
            }
            /*.section10{*/
            /*margin-top:120px;*/
            /*}*/
        }

    </style>

</head>
<body>

@include("frontend.module.myheader")
<!--section1 start-->
<div class="container-fluid section1 clear-padding">
    <img class="img-responsive center-block" src="{{$datas["img"][0]}}">
</div>
<!--section1 end-->
<!--section2 start-->
<div class="container-fluid clear-padding">
    <div class="section2 row center-block">
        <div class="section2_left col-md-6 ">
            <img class="img-responsive center-block" src="{{$datas["img"][1]}}">
        </div>
        <div class="section2_right col-md-6">
            <div class="right_title">{{$datas['word'][0]}}</div>
            <div class="right_time">{{$datas['word'][1]}}</div>
            <div class="right_main">
                <div>{!! $datas['word'][2] !!}
                </div>
            </div>
            <div class="right_img">
                <a href="{{url($datas['article'][0])}}"><img class="img-responsive " src="{{URL::asset('images/frontend/xiangqing.png')}}"></a>
            </div>
        </div>
    </div>
</div>
<!--section2 end-->
<!--section3 start-->
<div class="container-fluid set_padding">
    <div class="section3 center-block">
        @foreach ($data as $user)
            <div class="section3_box">
                <img class="img-responsive section3_img center-block" src="{{storage_image_url($user->thumb)}}">
                <div class="section3_title"> {{$user->title}}</div>
                <div class="section3_footer"><span>{{$user->keywords}}</span>
                    <span><a href="article/show/2/2/{{$user->id}}">查看详情</a></span>
                </div>
            </div>
        @endforeach
    </div>

</div>
<!--section3 end-->
<!--section4 start-->
<div class="container-fluid">
    <div class="section4 center-block">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                {{$data->links()}}
            </ul>
        </nav>
    </div>
</div>
<!-- <div id="paginate-render"-->
@include("frontend.module.myfooter")
<!--section5 end-->

<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{URL::asset('vendor/js/ie10-viewport-bug-workaround.js')}}"></script>
<script src="../../../../js/myheader.js"></script>
<script>
    window.onload=function(){
        var width = window.screen.width;
        var cWidth = document.body.clientWidth;
        // alert(width);
        wechatCodeShow();//绑定微信图标
        if(width<=750){
            // $(".section1").css("display","none");
        }
        if(width>=768 && width<=1024){
            $(".section1").css("display","none");
        }
        if(width>=800 && width<=1024){
            $(".section3_box").css("height","380px");
        }
    }
</script>

</body>
</html>