<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <!--<link href="../static/common/css/index.css" rel="stylesheet">-->
    <link href="{{URL::asset('css/index2.css')}}" rel="stylesheet">
    <style type="text/css">
        body {
            padding-right: -20px;
        }

        body {
            min-height: 2000px;
            padding-top: 70px;
        }
        #navbar ul li {
            margin-left: 30px;
        }
        .button1:hover{
            background-color:  #1BA067;
        }
        .lunbo{
            width:100%;
            height:100%;
        }
        .carousel-inner{
            width:100%;
            height:500px;
        }
        nav{
            position:fixed;
            top:0;
            left:0;
        }
        #myCarousel{
            margin-top:30px;
            position:relative;
            top:0;
            left:0;
        }
        .secition2{
            border-top:1px solid #ccc;
        }
        .secition2 img{
            margin-top: 20px;
        }
        .secition3{
            margin-top: 20px;
            margin-left: 20px;
        }
        /*.section3_img{*/
        /*width:580px;*/
        /*height: 300px;*/
        /*}*/
        .secition3_word{
            width:500px;
            height: 55px;
            /*padding: 8px;*/
            line-height: 25px;
            margin-bottom: 150px;
            padding-top: 20px;
        }
        .secition3_right{
            margin-left: 30px;
        }
        .section4_img{
            width:100%;
            height: 120px;
        }
        .secition4{
            margin-top: 8px;
        }
        .secition5 img{
            margin-top: 20px;
        }
        .section6{
            background-repeat: no-repeat;
            background-size: 100% 100%;
            width:100%;
            height: 360px;
            position:relative;
            margin-top: 50px;
        }
        .section6 .scarcity{
            width:188px;height:320px;
            position:absolute;
            top:-10%;
            left:26%;
            background-color:#A67C52 ;
            color: #fff;
            text-align: center;
            font-family: 楷体;
        }
        .section6 .scarcity .P_title{
            font-size: 22px;
            padding-top: 18px;
            padding-bottom: 18px;
        }
        .section6 .scarcity .underLine{
            width:50px;
            height: 2px;
            background-color: #fff;
            text-align: center;
            margin:0 auto;
            margin-bottom: 10px;
        }
        .section6 .scarcity .P_word{
            /*margin-top: 20px;*/
            font-size: 15px;
            width:170px;
        }
        .section6 .native{
            width:188px;height:320px;
            position:absolute;
            top:-10%;
            left:46%;
            background-color:#009555 ;
            color: #fff;
            text-align: center;
            font-family: 楷体;
        }
        .section6 .native .P_title{
            font-size: 22px;
            padding-top: 18px;
            padding-bottom: 18px;
        }
        .section6 .native .underLine{
            width:50px;
            height: 2px;
            background-color: #fff;
            text-align: center;
            margin:0 auto;
            margin-bottom: 10px;
        }
        .section6 .native .P_word{
            /*margin-top: 20px;*/
            font-size: 15px;
            width:170px;
        }
        .section6 .healthy{
            width:188px;height:320px;
            position:absolute;
            top:-10%;
            left:66%;
            background-color:#A67C52  ;
            color: #fff;
            text-align: center;
            font-family: 楷体;
        }
        .section6 .healthy .P_title{
            font-size: 22px;
            padding-top: 18px;
            padding-bottom: 18px;
        }
        .section6 .healthy .underLine{
            width:50px;
            height: 2px;
            background-color: #fff;
            text-align: center;
            margin:0 auto;
            margin-bottom: 10px;
        }
        .section6 .healthy .P_word{
            /*margin-top: 20px;*/
            font-size: 15px;
            width:170px;
        }
        .section7{
            /*width:100%;*/
            height: 500px;
            position: relative;
            margin-top:20px;
            /*display:flex;*/
            /*justify-content: center; //子元素水平方向居中*/
            /*align-items: center;//子元素垂直方向居中*/
        }
        .section7 img {
            width:350px;
            height: 320px;
            position:absolute;
            top:18%;left:42%;
        }
        .section7 .introduce_word01{
            position:absolute;
            top:6%;
            left:32%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7  .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: right;
            color:#242424;
            font-size:18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7  .introduce_sentence{
            width:220px;
            height:40px;
            color:#7E7E7E;

        }
        .section7 .introduce_word02{
            position:absolute;
            top:40%;
            left:28%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word03{
            position:absolute;
            top:72%;
            left:34%;
            /*border:1px solid #ccc;*/
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word04{
            position:absolute;
            top:70%;
            left:58%;
            /*border:1px solid #ccc;*/
            /*width:1%;*/
            /*height:100px;*/
        }
        .section7 .introduce_word04 .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: left;
            color:#242424;
            font-size:18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7 .introduce_word05{
            position:absolute;
            top:35%;
            left:62%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word05 .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: left;
            color:#242424;
            font-size:18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7 .introduce_word06{
            position:absolute;
            top:4%;
            left:58%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word06 .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: left;
            color:#242424;
            font-size:18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section8{
            background-color: #F1F3F4;
            /*width:100%;*/
            height:500px;
        }
        .section8 .section8_left{
            /*margin-left:180px;*/
            padding-top:60px;
            /*float:left;*/
            /*width:500px;height: 500px;*/
        }
        .section8 .section8_left p{
            width:300px;height:120px;
            margin-top:30px;
        }
        .section8_right{
            background-color: #F1F3F4;
        }
        .right_container{
            background-color: #fff;
            width:805px;
            height:420px;
            margin-top:40px;
            /*float:left;*/
        }
        .section8 .species{
            /*float:left;*/
            margin-top: 20px;
        }
        .section8_right .species_img{
            width:200px;
            height:280px;
        }
        .section8_right .species_img01{
            width:80px;
            height:2px;
        }
        /*.section8_right dl{*/
        /*width:250px;float:left;margin:0;padding:0;*/

        /*}*/
        /*.img01{*/
        /*width:80px;height: 2px;*/
        /*}*/
        /*.section8_right dl dd{*/
        /*width:250px;margin:0;text-align:center;padding-bottom:0px;*/
        /*}*/
        /*.section8_right dl dd img{*/
        /*width:200px;*/
        /*height:280px;*/
        /*margin-left:8px;*/
        /*margin-top:10px;*/
        /*}*/
        /*.section8_right dl dt{*/
        /*height:25px;line-height:25px;width:250px;text-align: center;*/
        /*color:#818181;*/
        /*}*/

        .section9 .news_title{
            /*display:flex;*/
            /*justify-content: center; //子元素水平方向居中*/
            /*align-items: center;//子元素垂直方向居中*/
            text-align: center;
            font-size: 24px;
            margin-top: 30px;
        }
        .section9 .news_container {
            margin-top:20px;
            text-align: center;
        }
        .section9 .news_container .news1{
            float:left;
        }
        .news_container .news_title{
            font-size:22px;
            width:350px;
            height:20px;
        }
        .news_container .news1 .news_content{
            font-size:16px;
            padding-top:20px;
            padding-bottom: 20px;
            color:#989898;
        }
        /*.section9 #show{*/
        /*display: none;*/
        /*}*/
        .section10{
            background: url("{{URL::asset('images/frontend/end.png')}}");
            background-size:100% 100%;
            width:100%;
            height:auto;
            margin-top:90px;

        }
        .section10 .page{
            color:#fff;
            float:left;
            /*margin-left:160px;*/
            margin-top: 20px;
        }
        .section10 .page p{
            padding-bottom: 25px;
            padding-top: 18px;
        }
        .section10 .page ul li a{
            color:#fff;
            font-size: 16px;

        }
        .section10 .store{
            color:#fff;
            /*margin-left:360px;*/
            margin-top: 38px;
            width:300px;
            float:left;
            height: auto;
        }
        .section10 img{
            width:46px;height: 46px;
        }
        .section10 .store p{
            padding-bottom: 8px;
        }
        .section10 .contact{
            color:#fff;
            /*float:left;*/
            /*margin-left:80px;*/
            margin-top: 50px;
        }
        .section10 .contact img{
            width:38px;height: 35px;
        }
        .footer1{
            color:#fff;
        }
        .section10 .taobao{
            margin-top: 15px;
        }
        .taobao img{
            margin-top: 10px;
        }
        .taobao *{
            vertical-align: middle;
            color: #fff;
        }
        .pinduoduo *{
            vertical-align: middle;
            color: #fff;
        }
        .pinduoduo img{
            margin-left: 10px;
        }
        .weixin *{
            vertical-align: middle;
            color: #fff;
        }
        #NavTop{
            width:90px;
            height:200px;
            margin-top:50px;
            position:fixed;
            right:0px;top:150px;        /*固定位置,右浮动，距上150px*/
            text-align: center;
        }
        /*#NavTop #NavCon{*/
        /*width:90px;*/
        /*height:170px;*/
        /*background-color:#fff;*/
        /*position:relative;*/
        /*border:1px solid black;*/
        /*}*/
        #NavTop #NavCon div {
            text-decoration:none;
            color:#fff;
            width:50px;
            height:25px;
            background:#555;
            display:block;
            margin-top:0px;
            margin-left:22px;
            line-height:25px;
            text-align:center;
            font-family:"微软雅黑";
            font-size:12px;
            border:1px solid #fff;
        }
        #NavTop #NavCon div a{
            color:#fff;
            text-decoration:none;
        }
        #NavTop #NavCon div:hover{
            background:#009555;
        }
        @media screen and (max-width:768px){
            .lunbo{
                width:100%;
                height:100%;
            }
            .carousel-inner{
                width:100%;
                height:110px;
            }
            .section1_img{
                width:76px;
                height:76px;
            }
            .section1_word{
                font-size:6px;
            }
            .secition2 img{
                width:180px;
                height: 58px;
            }
            .section3_right{
                display: table-cell;
                vertical-align: middle;
                text-align: center;
            }
            .secition3_word{
                width:auto;
                height: 100px;
            }
            .xiangqin{
                text-align: center;
            }
            .secition5 img{
                width:180px;
                height: 58px;
            }
            .section6 {
                width:100%;
                height: 250px;
            }
            .section6 .scarcity{
                width:90px;height:238px;
                position:absolute;
                top:-10%;
                left:5%;
                background-color:#A67C52 ;
                color: #fff;
                text-align: center;
                font-family: 楷体;
            }
            .section6 .scarcity img{
                width:50px;
                height: 50px;
            }
            .section6 .scarcity .P_title{
                font-size: 10px;
                padding-top: 6px;
                padding-bottom: 0px;
            }
            .section6 .scarcity .underLine{
                width:30px;
                height: 2px;
                background-color: #fff;
                text-align: center;
                margin:0 auto;
                margin-bottom: 10px;
            }
            .section6 .scarcity .P_word{
                margin-top: 5px;
                font-size: 4px;
                width:100%;
            }
            .section6 .native{
                width:90px;height:238px;
                position:absolute;
                top:-10%;
                left:36%;
                background-color:#009555  ;
                color: #fff;
                text-align: center;
                font-family: 楷体;
            }
            .section6 .native img{
                width:50px;
                height: 50px;
            }
            .section6 .native .P_title{
                font-size: 10px;
                padding-top: 6px;
                padding-bottom: 0px;
            }
            .section6 .native .underLine{
                width:30px;
                height: 2px;
                background-color: #fff;
                text-align: center;
                margin:0 auto;
                margin-bottom: 10px;
            }
            .section6 .native .P_word{
                margin-top: 5px;
                font-size: 4px;
                width:100%;
            }
            .section6 .healthy{
                width:90px;height:238px;
                position:absolute;
                top:-10%;
                left:68%;
                background-color:#A67C52 ;
                color: #fff;
                text-align: center;
                font-family: 楷体;
            }
            .section6 .healthy img{
                width:50px;
                height: 50px;
            }
            .section6 .healthy .P_title{
                font-size: 5px;
                padding-top: 4px;
                padding-bottom: 0px;
            }
            .section6 .healthy .underLine{
                width:30px;
                height: 2px;
                background-color: #fff;
                text-align: center;
                margin:0 auto;
                margin-bottom: 10px;
            }
            .section6 .healthy .P_word{
                margin-top: 10px;
                font-size: 9px;
                width:100%;
            }

            .section7{
                width:100%;
                height: 350px;
                position: relative;
                /*display:flex;*/
                /*justify-content: center; //子元素水平方向居中*/
                /*align-items: center;//子元素垂直方向居中*/
            }
            .section7 img {
                width:130px;
                height: 120px;
                position:absolute;
                top:20%;left:30%;
            }
            .section7 .introduce_word01{
                position:absolute;
                top:0%;
                left:3%;
                width:35%;
                height:20%;
            }
            .section7 .introduce_title{
                width:100%;
                height:5px;
                text-align: right;
                color:#242424;
                font-size:4px;
                font-weight: bold;
                margin-bottom: 10px;
            }
            .section7  .introduce_sentence{
                width:100%;
                height:100%;
                color:#7E7E7E;
                font-size:6px;
            }
            .section7 .introduce_word02{
                position:absolute;
                top:33%;
                left:0%;
                width:30%;
                height:20%;
            }
            .section7 .introduce_word03{
                position:absolute;
                top:68%;
                left:5%;
                width:35%;
                height:20%;
            }
            .section7 .introduce_word04{
                position:absolute;
                top:0%;
                left:62%;
                width:35%;
                height:20%;
            }
            .section7 .introduce_word04 .introduce_title{
                width:90px;
                height:5px;
                text-align: left;
                color:#242424;
                font-size:6px;
                font-weight: bold;
                margin-bottom: 10px;

            }
            .section7  .introduce_sentence{
                width:100%;
                height:100%;
                color:#7E7E7E;
            }
            .section7 .introduce_word05{
                position:absolute;
                top:34%;
                left:65%;
                width:30%;
                height:20%;
            }
            .section7 .introduce_word05 .introduce_title{
                width:90px;
                height:5px;
                text-align: left;
                color:#242424;
                font-size:6px;
                font-weight: bold;
                margin-bottom: 10px;
            }
            .section7 .introduce_word06{
                position:absolute;
                top:65%;
                left:60%;
                width:35%;
                height:20%;
            }
            .section7 .introduce_word06 .introduce_title{
                width:90px;
                height:5px;
                text-align: left;
                color:#242424;
                font-size:6px;
                font-weight: bold;
                margin-bottom: 10px;
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
                height: 690px;
            }
            .section8 .section8_left{
                background-color: #F1F3F4;
                width:auto;height: 350px;
                margin-left: 40px;
                float:left;
            }
            .section8_left .img1{
                padding-left: 50px;
            }
            .section8 .img{
                text-align: center;
            }
            .section8 .section8_left p{
                width:200px;height:120px;
                margin-top:30px;
            }
            .section8_right{
                width:100%;
            }
            .right_container{
                background-color: #F1F3F4;
                width:100%;
                height:auto;
                float:left;
                position:relative;
            }
            .section8_right .species:nth-of-type(1) {
                float:left;
                width:120px;
                height:200px;
                position:absolute;
                top:0;
                left:0;

            }
            .section8_right .species:nth-of-type(2) {
                float:left;
                width:120px;
                height:200px;
                position:absolute;
                top:0;
                left:30%;

            }
            .section8_right .species:nth-of-type(3) {
                float:left;
                width:120px;
                height:200px;
                position:absolute;
                top:0;
                left:60%;

            }
            .section8_right .species_img{
                width:100%;
                height:130px;
                /*padding-left:30px;*/
            }
            .section8 .species_img01{
                width:20px;
                height:10%;
            }
            .section8 .species_word{
                font-size:8px;
            }
            /*.img01{*/
            /*width:20px;height: 2px;*/
            /*}*/
            /*.section8_right dl{*/
            /*width:100px;float:left;margin:0;padding:0;*/
            /*!*margin-right:10px;*!*/


            /*}*/
            /*.section8_right dl dd{*/
            /*width:100px;margin:0;text-align:center;padding-bottom:0px;*/
            /*position:relative;*/
            /*}*/
            /*.section8_right dl dd img{*/
            /*width:100px;*/
            /*height:140px;*/
            /*text-align: center;*/
            /*padding-right: 10px;*/
            /*}*/
            /*.section8_right dl dt{*/
            /*height:12px;line-height:12px;width:80px;*/
            /*color:#818181;font-size: 6px;*/
            /*padding-left: 36px;*/
            /*}*/
            /*.section8_right #img{*/
            /*width:10px;*/
            /*height: 1px;*/
            /*}*/
            /*.section8_word{*/
            /*width:100px;*/
            /*height: 10px;*/
            /*font-size:8px;*/
            /*}*/
            /*.section9{*/
            /*margin-top: 10px;*/
            /*width:100%;*/
            /*height: 600px;*/
            /*}*/
            .section9{
                width:100%;
                height: 550px;
            }
            .news_container .news1{
                width:45%;
                margin-right: 10px;
                height:auto;
                margin-bottom: 8px;
            }
            .news_container img{
                width:98%;
                height:auto;
            }
            .news1 .news_title{
                font-size:12px;
                width:98%;
                height:12px;
                /*margin-top: 30px;*/
            }
            .news1 .news_content p{
                font-size: 10px;
                width:98%;
                height:20px;
                padding-top: 10px;

            }
            .news1 .news_img{
                width:50%;
                padding-top: 10px;
                height:30px;
            }
            .section10 .footer1{
                font-size: 8px;
                margin-top: 10px;
            }
            .section10 .store{
                position:relative;
            }
            .section10 img{
                width:38px;
                height: 38px;
            }
            /*.section10 .store p,div{*/
            /*float:left;*/
            /*}*/
            .section10 .store ul:first-child{
                margin-left: 26px;
            }
            .section10 .store  a{
                display: none;
            }
            .section10 div{
                float:left;margin-left: 8px;
            }
            .section10 .taobao img{
                margin-top: -30px;
            }
            .section10 .pinduoduo img{
                margin-top: -10px;
            }
            .section10 .weixin img{
                margin-top: -10px;
            }
        }


    </style>
</head>

<body>
<div class="container-fluid">
    <!-- area0 start ------------------------------------------------------------------------------------------------------->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #fff">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed button1" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a><img src="{{URL::asset($data[0]["img"][0])}}"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    @foreach($data[0]["categry"] as $categry)
                        <li ><a href="">{{$categry}}</a></li>
                    @endforeach
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</div>
<!-- area0 end -->


<!-- area1 start -------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide">

        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner" >
            @php
                $slideshow = $data[1]["slideshow"]->data;
            @endphp
            @if(isset($slideshow) && $slideshow)
                @for($i=0;$i<count($slideshow);$i++)
                    @if($i!=0)
                        <div class="item">
                            @else
                                <div class="item active">
                                    @endif
                                    <a target="{{$slideshow[$i]->target}}" href="{{$slideshow[$i]->link}}">
                                        <img class="lunbo" src="{{ storage_image_url($slideshow[$i]->image) }}">
                                    </a>
                                </div>
                                @endfor
                            @endif
                        </div>
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
        <!-- area1 end-->

        <!-- area2 start--------------------------------------------------------------------------------------------------------->
        <div class="con secition1">
            <div class="row">
                @for($i=0;$i<count($data[2]["img"]);$i++)
                    <dl class="col-md-4 col-xs-4 text-center">
                        <dd><img alt="" class="section1_img" src="{{URL::asset($data[2]["img"][$i])}}"/></dd>
                        <dt class="section1_word">{{$data[2]["word"][$i]}}</dt>
                    </dl>
                @endfor
            </div>
        </div>
        <!-- area2 end-->

        <!-- area3 start ------------------------------------------------------------------------------------------------------->
        <div class="container-fluid secition2 ">
            <img alt="" class="img-responsive center-block" src="{{URL::asset($data[3]["img"][0])}}">
        </div>
        <div class="container-fluid secition3 ">
            <div class="section2_left col-md-6 col-xs-12">
                <img alt="" class="img-responsive section3_img" src="{{URL::asset($data[3]["img"][1])}}">
            </div>
            <div class="section3_right col-md-6 col-xs-12 center-block">
                <img alt="" class="section3_right_img" src="images/frontend/line.png">
                <h1>{{$data[3]["word"][0]}}</h1>
                <div class="secition3_word">{{$data[3]["word"][1]}}</div>
            </div>
            <div class="xiangqin"><a href=""><img src="images/frontend/xiangqing.png"></a></div>
        </div>
    </div>
    <!-- area3 end -->

    <!-- area4 start ------------------------------------------------------------------------------------------------------->
    <div class="secition4 ">
        <img alt="" class="section4_img" src="{{URL::asset($data[4]["img"][0])}}">
    </div>
    <div class="container-fluid secition5 ">
        <img alt="" class="img-responsive center-block" src="{{URL::asset($data[4]["img"][1])}}">
    </div>
    <div class="container-fluid section6" style="background: url('{{URL::asset($data[4]['img'][2])}}')">
        <div class="scarcity col-md-4 col-xs-4">
            <p class="P_title">{{$data[4]["word"][0]}}</p>
            <div class="underLine"></div>
            <img src="{{URL::asset($data[4]["img"][3])}}">
            <p class="P_word">{{$data[4]["word"][1]}}</p>
        </div>
        <div class="native col-md-4 col-xs-4">
            <p class="P_title">{{$data[4]["word"][2]}}</p>
            <div class="underLine"></div>
            <img src="{{URL::asset($data[4]["img"][4])}}">
            <p class="P_word">{{$data[4]["word"][3]}}</p>
        </div>
        <div class="healthy col-md-4 col-xs-4">
            <p class="P_title">{{$data[4]["word"][4]}}</p>
            <div class="underLine"></div>
            <img src="{{URL::asset($data[4]["img"][5])}}">
            <p class="P_word">{{$data[4]["word"][5]}}</p>
        </div>
    </div>


    <div class="container-fluid section7 ">
        <img src="{{URL::asset($data[5]["img"][0])}}">
        @for($i=1,$j=0;$i<=6;$i++)
            <div class="{{'introduce_word0'.$i}}">
                <p class="introduce_title">{{$data[5]["word"][$j++]}}</p>
                <p class="introduce_sentence">{{$data[5]["word"][$j++]}}</p>
            </div>
        @endfor
        {{--<div class="introduce_word02">--}}
            {{--<p class="introduce_title">{{$data[4]["word"][0]}}</p>--}}
            {{--<p class="introduce_sentence">{{$data[4]["word"][0]}}</p>--}}
        {{--</div>--}}
        {{--<div class="introduce_word03">--}}
            {{--<p class="introduce_title text-right">{{$data[4]["word"][0]}}</p>--}}
            {{--<p class="introduce_sentence">{{$data[4]["word"][0]}}</p>--}}
        {{--</div>--}}
        {{--<div class="introduce_word04">--}}
            {{--<p class="introduce_title">{{$data[4]["word"][0]}}</p>--}}
            {{--<p class="introduce_sentence">{{$data[4]["word"][0]}}</p>--}}
        {{--</div>--}}
        {{--<div class="introduce_word05">--}}
            {{--<p class="introduce_title">{{$data[4]["word"][0]}}</p>--}}
            {{--<p class="introduce_sentence">{{$data[4]["word"][0]}}</p>--}}
        {{--</div>--}}
        {{--<div class="introduce_word06">--}}
            {{--<p class="introduce_title">{{$data[4]["word"][0]}}</p>--}}
            {{--<p class="introduce_sentence">{{$data[4]["word"][0]}}</p>--}}
        {{--</div>--}}
    </div>

    <div class="container-fluid section8 ">
        <div class="section8_left col-md-3  col-md-offset-1 container-fluid col-xs-12">
            <img class="img1" src="{{URL::asset($data[6]["img"][0])}}">
            <h1>{{$data[6]["word"][0]}}</h1>
            <p>{{$data[6]["word"][1]}}</p>
            <div class="img"><a href="article/show/2/2/1"><img src="{{URL::asset("images/frontend/xiangqing.png")}}"></a></div>
        </div>

        <div class="section8_right  center-block ">
            <div class="right_container col-md-9 text-center col-sm-12 col-md-offset-1">
                <div class="species col-md-4 col-sm-4 ">
                    <div><img  class="species_img" src="{{URL::asset($data[6]["img"][1])}}"></div>
                    <div><p>{{$data[6]["word"][2]}}</p></div>
                    <div><img class="species_img01" src="{{URL::asset('images/frontend/line.png')}}"/></div>
                    <div class="species_word"><p>{{$data[6]["word"][3]}}</p></div>
                </div>
                <div class="species col-md-4 col-sm-4">
                    <div><img class="species_img" src="{{URL::asset($data[6]["img"][2])}}"></div>
                    <div><p>{{$data[6]["word"][4]}}</p></div>
                    <div><img class="species_img01" src="{{URL::asset('images/frontend/line.png')}}"/></div>
                    <div class="species_word"><p>{{$data[6]["word"][5]}}</p></div>
                </div>
                <div class="species col-md-4 col-sm-4">
                    <div> <img class="species_img" src="{{URL::asset($data[6]["img"][3])}}"></div>
                    <div><p>{{$data[6]["word"][6]}}</p></div>
                    <div><img class="species_img01" src="{{URL::asset('images/frontend/line.png')}}"/></div>
                    <div class="species_word"><p>{{$data[6]["word"][7]}}</p></div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid section9 col-sm-12 ">
        <div class="news_title">
            <img src="{{URL::asset('images/frontend/line.png')}}"/>
            <p >{{$data[7]["word"][0]}}</p>
        </div>
        <div class="news_container row">
            <div class="news1 col-md-4 col-sm-3">
                <div><img  src="{{URL::asset($data[7]["img"][0])}}"/></div>
                <div class="news_title"><p>{{$data[7]["word"][1]}}</p></div>
                <div class="news_content"><p>{{$data[7]["word"][2]}}</p></div>
                <div><a href="{{url($data[7]['link'][0])}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
            </div>
            <div class="news1 col-md-4 col-sm-3">
                <div><img src="{{URL::asset($data[7]["img"][1])}}"/></div>
                <div class="news_title"><p>{{$data[7]["word"][3]}}</p></div>
                <div class="news_content"><p>{{$data[7]["word"][4]}}</p></div>
                <div><a href="{{url($data[7]['link'][1])}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
            </div>
            <div class="news1 col-md-4 col-sm-3">
                <div><img src="{{URL::asset($data[7]["img"][2])}}"/></div>
                <div class="news_title"><p>{{$data[7]["word"][5]}}</p></div>
                <div class="news_content"><p>{{$data[7]["word"][6]}}</p></div>
                <div><a href="{{url($data[7]['link'][2])}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
            </div>
            <div class="news1 col-md-4 col-sm-3" id="show" style="display: none">
                <div><img src="{{URL::asset($data[7]["img"][3])}}"/></div>
                <div class="news_title"><p>{{$data[7]["word"][7]}}</p></div>
                <div class="news_content"><p>{{$data[7]["word"][8]}}</p></div>
                <div><a href="{{url($data[7]['link'][3])}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
            </div>
        </div>
    </div>


    <div class="container-fluid section10 col-md-12 ">
        <div class="row">
            <div class="text-center">
                <div class="page col-md-3" id="pageHide">
                    <p>首页</p>
                    <ul class="list-unstyled">
                        @foreach($data[0]["categry"] as $categry)
                            <li ><a href="">{{$categry}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="store col-md-3 ">
                    <div class="store_tile">{{$data[8]["word"][0]}}</div>
                    <div class="taobao ">
                        <img src="{{URL::asset($data[8]["img"][0])}}"/>
                        <a>{{$data[8]["word"][1]}}</a>
                    </div>
                    <div class="pinduoduo">
                        <img src="{{URL::asset($data[8]["img"][1])}}"/>
                        <a>{{$data[8]["word"][2]}}</a>
                    </div>
                    <div class="weixin ">
                        <img src="{{URL::asset($data[8]["img"][2])}}"/>
                        <a>{{$data[8]["word"][3]}}</a>
                    </div>
                </div>
                <div class="contact col-md-6 " id="contactHide">
                    <p>联系我们</p>
                    <ul class="list-unstyled" >
                        <li>
                            <ul class="list-inline text-center" style="padding-top: 20px">
                                <li><img src="{{URL::asset('images/frontend/tel.png')}}"/></li>
                                <li><ul class="list-unstyled">
                                        <li>0736-7221688</li>
                                        <li><span style="font-size: 8px">24小时服务在线</span></li></ul></li>
                            </ul>
                        <li>
                    </ul>
                    <ul class="list-unstyled">
                        <li>
                            <ul class="list-inline">
                                <li><img src="{{URL::asset('images/frontend/phone.png')}}"/></li>
                                <li><ul class="list-unstyled">
                                        <li>在线咨询</li>
                                        <li><span style="font-size: 8px">24小时服务在线</span></li></ul></li>
                            </ul>
                        <li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer1 col-md-12 col-xs-12 text-center">
            <p>湖南天地农耕天地茶油有限公司版权所有2019 | 服务热线:400-000-5252</p>
            <p>地址:湖南省常德市鼎城区周家电镇  | 邮箱:cdldngscy@163.com</p>
        </div>
    </div>
    <!--附加-->
    <div id="NavTop" style="display: block">
        <div id="NavCon">
            <div><a href="javascript:void(0);">电话</a></div>
            <div><a href="javascript:void(0);">咨询</a></div>
            <div><a href="javascript:void(0);">微信</a></div>
            <div><span title="Top" id="topArrow">顶部</span></div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<script src="{{URL::asset('vendor/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Placed at the end of the document so the pages load faster -->

<script src="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}"></script>
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<script src="{{URL::asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{{--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>--}}
<script>
    window.onload=function(){
        var width = window.screen.width;
        var showDiv = document.getElementById("show");
        var pageDiv = document.getElementById("pageHide");
        var contactDiv = document.getElementById("contactHide");
        var navtop = document.getElementById("NavTop");
        $("#topArrow").click(function(){
            $(document).scrollTop(0);
        });
        $('#myCarousel').carousel({interval:4000});
        if(width<=768){
            showDiv.style.display="block";
            pageDiv.style.display="none";
            contactDiv.style.display = "none";
            navtop.style.display = "none";

        }else{
            showDiv.style.display="none";
            pageDiv.style.display="block";
            contactDiv.style.display = "block";
        }

    }
</script>
</body>
</html>
