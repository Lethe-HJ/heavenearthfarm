<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>企业文化</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <link rel="stylesheet" href="../../../../vendor/font/iconfont.css">
    <!-- Bootstrap core CSS -->
    {{--<link href="../../../../vendor/bootstrap/dist/css/bootstrap.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" >
    <script src="{{URL::asset('vendor/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <!--<link href="../static/common/css/index.css" rel="stylesheet">-->
    <link href="../../../../css/Normalize/Normalize.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../static/common/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../static/common/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../static/common/js/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
    <script src="../static/verdors/html5shiv/html5shiv.min.js"></script>
    <script src="../static/verdors/respond/respond.min.js"></script>
    <![endif]-->
    <script src="../../../../vendor/jQuery/jquery-2.2.3.min.js"></script>
    <script src="../../../../vendor/bootstrap/dist/js/bootstrap.js"></script>
    <style>
        .section1{
            width:100%;
            /*height: 302px;*/
        }
        .section2 .section2_title{
            font-size: 48px;
            width:100%;
            height: 60px;
            line-height: 60px;
            /*font-weight: bold;*/
            /*border:1px solid red;*/
            letter-spacing: 2px;
            color: #8c6239;
            font-family: "黑体";
            margin-top: 40px;
            margin-bottom: 10px;
        }
        .section2 .section2_content{
            width:54%;
            height: 220px;
            /*border:1px solid red;*/
            margin-top: 40px;
            text-indent:25px;
            font-size: 14px;
            line-height: 30px;
            color:#333;
        }
        .section3{
            width:100%;
            height:450px;
            position:relative;
            margin-top: 20px;
        }
        .section3 .section3_main{
            color:#fff;
            width:45%;
            height: 300px;
            position:absolute;
            /*border:1px solid red;*/
            top:20%;
            right:8%;
        }
        .section3 .section3_main div:nth-of-type(1){
            width:100%;
            height: 40px;
            line-height: 40px;
            font-size: 20px;
            /*border:1px solid red;*/
        }
        .section3 .section3_main div:nth-of-type(2){
            width:45%;
            height: 160px;
            font-size: 16px;
            /*border:1px solid red;*/
            margin-top:10px;
            /*text-align: center;*/
            line-height: 30px;
        }
        .section3 .section3_main div:nth-of-type(3){
            width:68%;
            height: 60px;
            font-size: 16px;
            /*line-height: 10px;*/
            /*border:1px solid red;*/
            margin-top: 40px;
        }
        .section4{
            width:100%;
            /*height: 1100px;*/
            height:auto;
            background-color: #F7F7F7;
            margin-top: 70px;
        }
        .section4 .section4_title{
            font-size: 48px;
            color: #8c6239;
            padding-top: 30px;
            padding-bottom: 10px;
            /*margin-top: 30px;*/
            font-family: "黑体";
            /*font-weight: bold;*/
        }
        .section4 .section4_top{
            width:67%;
            height: 460px;
            margin-top: 30px;
            position: relative;
            /*border:1px solid red;*/
        }
        .section4 .section4_top .top_img{
            position:absolute;
            top:0;
            left: 0;
            width:68%;
            height: 460px;
        }
        .section4 .section4_top .top_right{
            color:#fff;
            width:28%;
            height: 200px;
            line-height: 30px;
            position:absolute;
            /*font-size: 18px;*/
            top:20%;
            right: 2%;
        }
        .section4 .section4_bottom{
            width:67%;
            height: 460px;
            margin-top: 40px;
            position: relative;
        }
        .section4 .section4_bottom .bottom_img{
            position:absolute;
            top:0;
            left: 0;
            width:68%;
            height: 460px;
        }
        .section4 .section4_bottom .bottom_right{
            color:#fff;
            width:28%;
            height: 200px;
            position:absolute;
            /*font-size: 18px;*/
            line-height: 30px;
            top:20%;
            right: 2%;
        }
        .section5{
            width:100%;
            height: 700px;
            /*border:1px solid red;*/
        }
        .section5 .section5_title{
            font-size: 48px;
            color: #8c6239;
            margin-top: 35px;
            margin-bottom: 10px;
            font-family: "黑体";
            /*font-weight: bold;*/
        }
        .section5 .section5_word{
            font-size: 16px;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .section5 .table{
            /*border:1px solid red;*/
            width:65%;
            margin-top: 20px;
            /*padding-left: 2%;*/
        }
        .section5 .table td{
            width:25%;
        }
        .section5 .table img{
            width:100%;
            height:250px;
        }
        .section5 .table .table_box1{
            /*border:1px solid red;*/
            width:100%;
            height: 250px;
            /*line-height: 250px;*/
            color:#fff;
            background-color: #000;
            /*font-size: 30px;*/
            text-align: center;
            display: flex;
            justify-content:center;
            align-items:Center;
        }
        .section5 .table .table_box1 p{
            width:58%;
            height: auto;
            font-size: 40px;
            text-align: center;
            /*line-height:180px;*/
            margin: 0px auto;
            /*margin-top: 30px;*/
            font-family: "NSimSun";
            font-weight:900;
            /*border:1px solid red;*/
        }

        .section5 .table .table_box2{
            width:100%;
            height:250px;
            /*font-size: 30px;*/
            text-align: center;
            /*line-height:250px;*/
            color:#8a6d3b;
            font-weight: 900;
            background-color: #F7F7F7;
            font-family: "NSimSun";
            display: flex;
            justify-content:center;
            align-items:Center;
        }
        .section5 .table .table_box2 p{
            width:58%;
            height:auto;
            font-size: 40px;
            text-align: center;
            /*line-height:248px;*/
            /*color:#8a6d3b;*/
            font-weight: 900;
            /*background-color: #F7F7F7;*/
            font-family: "NSimSun";
            /*border:1px solid red;*/
        }

        .section6 .section6_title{
            font-size: 48px;
            margin-bottom: 10px;
            color: #8c6239;
            font-family: "黑体";
            /*font-weight: 900;*/
            /*width:400px;*/
            /*height: 80px;*/
            /*border:1px solid red;*/
        }
        .section6 .table{
            /*border:1px solid red;*/
            /*width:55%;*/
            width:70%;
            margin-top: 20px;
            /*padding-left: 4%;*/
        }
        .section6 .table td{
            width:420px;
        }
        .section6 .table .table_box{
            width:100%;
            height: 280px;
            /*border:1px solid red;*/
        }
        .section6 .table .table_box img{
            width:92%;
            height: 260px;
        }
        /*@media screen and (max-width:1680px){*/

        /*}*/
        @media screen and (max-width:1680px){
            .section1{
                width:100%;
                /*height: 250px;*/
            }
            .section3{
                width:100%;
                height: 350px;
                position:relative;
                margin-top: 50px;
            }
            .section3 .section3_main{
                color:#fff;
                width:50%;
                height: 300px;
                position:absolute;
                top:10%;
                right:5%;
            }
            .section3 .section3_main div:nth-of-type(1){
                width:100%;
                height: 40px;
                line-height: 40px;
                font-size: 20px;
                /*border:1px solid red;*/
            }
            .section3 .section3_main div:nth-of-type(2){
                width:65%;
                height: auto;
                font-size: 14px;
                /*border:1px solid red;*/
                margin-top: 40px;
                line-height: 20px;
            }
            .section3 .section3_main div:nth-of-type(3){
                width:68%;
                height: 60px;
                font-size: 16px;
                /*border:1px solid red;*/
                margin-top: 30px;
            }
            .section4 .section4_title{
                margin-top: 15px;
            }
            .section5 .table .table_box1{
                /*border:1px solid red;*/
                width:100%;
                height: 250px;
                /*line-height: 250px;*/
                color:#fff;
                background-color: #000;
                /*font-size: 30px;*/
                text-align: center;
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box1 p{
                width:80%;
                height: auto;
                font-size: 40px;
                text-align: center;
                /*line-height:180px;*/
                margin: 0px auto;
                /*margin-top: 30px;*/
                font-family: "NSimSun";
                font-weight:900;
                /*border:1px solid red;*/
            }

            .section5 .table .table_box2{
                width:100%;
                height:250px;
                /*font-size: 30px;*/
                text-align: center;
                /*line-height:250px;*/
                color:#8a6d3b;
                font-weight: 900;
                background-color: #F7F7F7;
                font-family: "NSimSun";
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box2 p{
                width:80%;
                height:auto;
                font-size: 40px;
                text-align: center;
                /*line-height:248px;*/
                /*color:#8a6d3b;*/
                font-weight: 900;
                /*background-color: #F7F7F7;*/
                font-family: "NSimSun";
                /*border:1px solid red;*/
            }
        }
        @media screen and (max-width:1600px){
           .section2 .section2_title,.section4 .section4_title,.section5 .section5_title,.section6 .section6_title{
                width:100%;
                font-size: 45px;
            }
            .section2 .section2_content{
                width:65%;
                height: 200px;
                /*border:1px solid red;*/
                margin-top: 40px;
                text-indent:25px;
                font-size: 14px;
                line-height: 30px;
                color:#333;
                /*margin-bottom: 50px;*/
            }
            .section3{
                width:100%;
                height: 350px;
                position:relative;
                margin-top: 50px;
            }
            .section4 .section4_top{
                width:67%;
                height: 420px;
                margin-top: 30px;
                position: relative;
                /*border:1px solid red;*/
            }
            .section4 .section4_top .top_img{
                position:absolute;
                top:0;
                left: 0;
                width:68%;
                height: 420px;
            }
            .section4 .section4_top .top_right{
                color:#fff;
                width:28%;
                height: 200px;
                position:absolute;
                top:20%;
                right: 2%;
            }
            .section4 .section4_bottom{
                width:67%;
                height: 420px;
                margin-top: 30px;
                position: relative;
            }
            .section4 .section4_bottom .bottom_img{
                position:absolute;
                top:0;
                left: 0;
                width:68%;
                height: 420px;
            }
            .section4 .section4_bottom .bottom_right{
                color:#fff;
                width:28%;
                height: 200px;
                position:absolute;
                top:20%;
                right: 2%;
            }
            .section5{
                width:100%;
                height: 700px;
                /*border:1px solid red;*/
            }
            .section5 .section5_title{
                font-size: 48px;
                color: #8c6239;
                margin-top: 35px;
                margin-bottom: 10px;
                font-family: "黑体";
                /*font-weight: bold;*/
            }
            .section5 .section5_word{
                font-size: 16px;
                margin-top: 20px;
                margin-bottom: 30px;
            }
            .section5 .table{
                /*border:1px solid red;*/
                width:65%;
                margin-top: 20px;
                padding-left: 2%;
            }

            .section5 .table img{
                width:100%;
                height:250px;
            }
            .section5 .table .table_box1{
                width:100%;
                height: 250px;
                /*line-height: 250px;*/
                color:#fff;
                background-color: #000;
                /*font-size: 30px;*/
                text-align: center;
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box1 p{
                width:70%;
                height: auto;
                font-size: 32px;
                text-align: center;
                /*line-height:180px;*/
                margin: 0px auto;
                /*margin-top: 30px;*/
                font-family: "NSimSun";
                font-weight:900;
                /*border:1px solid red;*/
            }

            .section5 .table .table_box2{
                width:100%;
                height:250px;
                /*font-size: 30px;*/
                text-align: center;
                /*line-height:250px;*/
                color:#8a6d3b;
                font-weight: 900;
                background-color: #F7F7F7;
                font-family: "NSimSun";
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box2 p{
                width:70%;
                height:auto;
                font-size: 32px;
                text-align: center;
                /*line-height:248px;*/
                /*color:#8a6d3b;*/
                font-weight: 900;
                /*background-color: #F7F7F7;*/
                font-family: "NSimSun";
                /*border:1px solid red;*/
            }

            .section6 .table .table_box img{
                width:92%;
                height: 220px;
            }
        }
        @media screen and (max-width:1400px){
            .section5{
                width:100%;
                height: auto;
                /*border:1px solid red;*/
            }
            .section4{
                margin-top: 70px;
            }
            .section5_title,.section6_title,.section2_title{
                font-size: 30px;
                color: #8c6239;
                margin-top: 35px;
                margin-bottom: 10px;
                font-family: "黑体";
                /*font-weight: bold;*/
            }
            .section5 .section5_word{
                font-size: 16px;
                margin-top: 20px;
                margin-bottom: 30px;
            }
            .section5 .table{
                /*border:1px solid red;*/
                width:65%;
                margin-top: 20px;
                padding-left: 2%;
            }

            .section5 .table img{
                width:100%;
                height:210px;
            }
            .section5 .table .table_box1{
                width:100%;
                height: 210px;
                /*line-height: 250px;*/
                color:#fff;
                background-color: #000;
                /*font-size: 30px;*/
                text-align: center;
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box1 p{
                width:60%;
                height: auto;
                font-size: 30px;
                text-align: center;
                /*line-height:180px;*/
                margin: 0px auto;
                /*margin-top: 30px;*/
                font-family: "NSimSun";
                font-weight:900;
                /*border:1px solid red;*/
            }

            .section5 .table .table_box2{
                width:100%;
                height:210px;
                /*font-size: 30px;*/
                text-align: center;
                /*line-height:250px;*/
                color:#8a6d3b;
                font-weight: 900;
                background-color: #F7F7F7;
                font-family: "NSimSun";
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box2 p{
                width:60%;
                height:auto;
                font-size: 30px;
                text-align: center;
                /*line-height:248px;*/
                /*color:#8a6d3b;*/
                font-weight: 900;
                /*background-color: #F7F7F7;*/
                font-family: "NSimSun";
                /*border:1px solid red;*/
            }


        }

        @media screen and (max-width:1366px){
            .section2 .section2_title,.section4 .section4_title,.section5 .section5_title,.section6 .section6_title{
                width:100%;
                font-size: 40px;
            }
            .section1{
                width:100%;
                /*height: 200px;*/
            }
            .section4 .section4_bottom .bottom_right {
                position:absolute;
                top:15%;
                right:2%;
            }
            .section2 .section2_title{
                /*font-size: 30px;*/
                width:100%;
                height: 60px;
                line-height: 60px;
                font-weight: bold;
                /*border:1px solid red;*/
                letter-spacing: 2px;
                color: #8c6239;
                font-family: "黑体";
                margin-top: 40px;
                margin-bottom: 0px;
            }
            .section2 .section2_content{
                width:60%;
                height: 206px;
                /*border:1px solid red;*/
                margin-top: 20px;
                /*text-indent:25px;*/
                font-size: 14px;
                line-height: 30px;
                color:#333;

            }
            .section3{
                width:100%;
                height: 350px;
                position:relative;
                margin-top:80px;
                /*border:1px solid red;*/
            }
            .section3 .section3_main{
                color:#fff;
                width:50%;
                height: 300px;
                position:absolute;
                top:10%;
                right:5%;
            }
            .section3 .section3_main div:nth-of-type(1){
                width:100%;
                height: 40px;
                line-height: 40px;
                font-size: 20px;
                /*border:1px solid red;*/
            }
            .section3 .section3_main div:nth-of-type(2){
                width:55%;
                height: auto;
                font-size: 14px;
                /*border:1px solid red;*/
                margin-top: 40px;
                line-height: 20px;
            }
            .section3 .section3_main div:nth-of-type(3){
                width:68%;
                height: 60px;
                font-size: 16px;
                /*border:1px solid red;*/
                margin-top: 30px;
            }
            .section4{
                margin-top:60px;
            }
            .section5 .table img{
                width:100%;
                height:200px;
            }
            .section5 .table .table_box1{
                width:100%;
                height: 200px;
                /*line-height: 250px;*/
                color:#fff;
                background-color: #000;
                /*font-size: 30px;*/
                text-align: center;
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box1 p{
                width:65%;
                height: auto;
                font-size: 30px;
                text-align: center;
                /*line-height:180px;*/
                margin: 0px auto;
                /*margin-top: 30px;*/
                font-family: "NSimSun";
                font-weight:900;
                /*border:1px solid red;*/
            }

            .section5 .table .table_box2{
                width:100%;
                height:200px;
                /*font-size: 30px;*/
                text-align: center;
                /*line-height:250px;*/
                color:#8a6d3b;
                font-weight: 900;
                background-color: #F7F7F7;
                font-family: "NSimSun";
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box2 p{
                width:65%;
                height:auto;
                font-size: 30px;
                text-align: center;
                /*line-height:248px;*/
                /*color:#8a6d3b;*/
                font-weight: 900;
                /*background-color: #F7F7F7;*/
                font-family: "NSimSun";
                /*border:1px solid red;*/
            }

            .section6 .table{
                /*border:1px solid red;*/
                width:68%;
                margin-top: 20px;
                padding-left:0px;
            }
            .section6 .table .table_box{
                width:100%;
                height: 240px;
                /*border:1px solid red;*/
            }
            .section6 .table .table_box img{
                width:95%;
                height: 220px;
            }
        }
        @media screen and (max-width:1152px){
            .section5 .table img{
                width:100%;
                height:200px;
            }
            .section5 .table .table_box1{
                width:100%;
                height: 200px;
                /*line-height: 250px;*/
                color:#fff;
                background-color: #000;
                /*font-size: 30px;*/
                text-align: center;
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box1 p{
                width:77%;
                height: auto;
                font-size: 30px;
                text-align: center;
                /*line-height:180px;*/
                margin: 0px auto;
                /*margin-top: 30px;*/
                font-family: "NSimSun";
                font-weight:900;
                /*border:1px solid red;*/
            }

            .section5 .table .table_box2{
                width:100%;
                height:200px;
                /*font-size: 30px;*/
                text-align: center;
                /*line-height:250px;*/
                color:#8a6d3b;
                font-weight: 900;
                background-color: #F7F7F7;
                font-family: "NSimSun";
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box2 p{
                width:77%;
                height:auto;
                font-size: 30px;
                text-align: center;
                /*line-height:248px;*/
                /*color:#8a6d3b;*/
                font-weight: 900;
                /*background-color: #F7F7F7;*/
                font-family: "NSimSun";
                /*border:1px solid red;*/
            }
            .section6 {
                width: 100%;
                height: auto !important;
                /*border:1px solid red;*/
            }
        }
        @media screen and (max-width:1024px)and (min-width:768px){
            .section1{
                width:100%;
                /*height: 120px;*/
                display:none;
            }
            .section2 .section2_title{
                font-size: 30px;
                width:50%;
                height: 50px;
                margin-top: 40px;
                line-height: 50px;
                margin-bottom: 0px;
                /*border:1px solid red;*/
            }
            .section2 .section2_img{
                width:20%;
                height: auto;
                margin-top: 10px;
            }
            .section2 .section2_content{
                width:100%;
                height: auto;
                /*border:1px solid red;*/
                font-size: 18px;
                /*-webkit-transform: scale(0.9);*/
                /*-moz-transform: scale(0.9);*/
                /*-o-transform: scale(0.9);*/
                /*transform: scale(0.9);*/
                margin-top: 20px;
            }
            .section3{
                width:100%;
                height: 260px;
                position:relative;
            }
            .section3 .section3_main{
                color:#fff;
                width:60%;
                height: 260px;
                position:absolute;
                top:10%;
                right:0px;
            }
            .section3 .section3_main div:nth-of-type(1){
                width:60%;
                height: 20px;
                line-height: 20px;
                font-size: 12px;
                margin-left:13%;
                /*-webkit-transform: scale(0.9);*/
                /*-moz-transform: scale(0.9);*/
                /*-o-transform: scale(0.9);*/
                /*transform: scale(0.9);*/
                /*border:1px solid red;*/
            }
            .section3 .section3_main div:nth-of-type(2){
                width:60%;
                height: auto;
                font-size: 12px;
                -webkit-transform: scale(0.9);
                -moz-transform:scale(0.9);
                -o-transform:scale(0.9);
                transform:scale(0.9);
                /*border:1px solid red;*/
                margin-top: 10px;
                line-height: 20px;
                margin-left: 10%;
            }
            .section3 .section3_main div:nth-of-type(3){
                width:70%;
                height: 20px;
                font-size: 10px;
                /*border:1px solid red;*/
                margin-top: 30px;
                /*margin-left: 30px;*/
                margin-left: 13%;
            }
            .section4{
                width:100%;
                height: 600px;
                background-color: #F7F7F7;
                margin-top: 20px;
            }
            .section4 .section4_title{
                font-size: 30px;
                color: #8a6d3b;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .section4 .section4_top{
                width:80%;
                height: 210px;
                margin-top: 30px;
                position: relative;
            }
            .section4 .section4_top .top_img{
                position:absolute;
                top:0;
                left: 0;
                width:48%;
                height: 210px;
            }
            .section4 .section4_top .top_right{
                color:#fff;
                width:55%;
                height: 160px;
                line-height: 20px;
                font-size: 12px;
                -webkit-transform: scale(0.9);
                -moz-transform: scale(0.9);
                -o-transform:scale(0.9);
                transform:  scale(0.9);
                position:absolute;
                /*border:1px solid red;*/
                top:20px;
                right: -15px;
                margin-left: 20px;
                margin-top: 40px;
            }
            /*.section4 .section4_top .top_right P{*/
            /*font-size: 12px;*/
            /*-webkit-transform: scale(0.2);*/
            /*-moz-transform:scale(0.2);*/
            /*-o-transform:scale(0.2);*/
            /*transform:scale(0.2);*/
            /*}*/
            .section4 .section4_bottom{
                width:80%;
                height: 210px;
                margin-top: 30px;
                position: relative;
            }
            .section4 .section4_bottom .bottom_img{
                position:absolute;
                top:0;
                left: 0;
                width:48%;
                height: 210px;
            }
            .section4 .section4_bottom .bottom_right{
                color:#fff;
                width:55%;
                height: 230px;
                line-height: 20px;
                position:absolute;
                top:27px;
                right: -15px;
                /*border:1px solid red;*/
                font-size: 12px;
                -webkit-transform:  scale(0.9);
                -moz-transform:scale(0.9);
                -o-transform: scale(0.9);
                transform: scale(0.9);
            }
            .section4 .section4_bottom .bottom_right p{
                font-size: 12px;
                -webkit-transform:  scale(0.1);
                -moz-transform: scale(0.1);
                -o-transform: scale(0.1);
                transform: scale(0.1);

            }
            .section5 .table{
                /*border:1px solid red;*/
                width:85%;
                margin-top: 20px;
                padding-left: 2%;
            }

            .section5 .table img{
                width:100%;
                height:180px;
            }
            .section5 .section5_title{
                font-size: 30px;
            }
            .section5 .table .table_box1{
                width:100%;
                height: 180px;
                /*line-height: 250px;*/
                color:#fff;
                background-color: #000;
                /*font-size: 30px;*/
                text-align: center;
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box1 p{
                width:68%;
                height: auto;
                font-size: 25px;
                text-align: center;
                /*line-height:180px;*/
                margin: 0px auto;
                /*margin-top: 30px;*/
                font-family: "NSimSun";
                font-weight:900;
                /*border:1px solid red;*/
            }

            .section5 .table .table_box2{
                width:100%;
                height:180px;
                /*font-size: 30px;*/
                text-align: center;
                /*line-height:250px;*/
                color:#8a6d3b;
                font-weight: 900;
                background-color: #F7F7F7;
                font-family: "NSimSun";
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box2 p{
                width:68%;
                height:auto;
                font-size: 25px;
                text-align: center;
                /*line-height:248px;*/
                /*color:#8a6d3b;*/
                font-weight: 900;
                /*background-color: #F7F7F7;*/
                font-family: "NSimSun";
                /*border:1px solid red;*/
            }
            .section6{
                margin-top: 30px;
            }
            .section6 .table{
                width:85%;
            }
            .section6 .section6_title{
                font-size: 30px;
            }

        }
        @media screen and (max-width:750px){
            .active_a {
                margin-left: 0px;
                width: 100%;
                /*padding-left: 20px;*/
                text-align: left;
                /* height:200px !important; */
            }
            #line1,#line2,#line3,#line4{
                width:100%;
                height: 2px;
            }
            .header {
                width: 100%;
                height: 180px;
            }
            .section1{
                margin-bottom: 0px;
                height: auto;
            }
            .section2{
                width:100%;
                height: auto;
                margin-bottom: 0;
            }
            .section2 .section2_title{
                margin-top: 8px;
                margin-bottom: 0px;
                height: 20px;
            }
            /*.section2 .section2_content{*/
            /*!*margin-top: 10px;*!*/
            /*!*text-indent:25px;*!*/
            /*font-size: 14px;*/
            /*height: auto;*/
            /*}*/
            .section2 .section2_title{
                font-size: 20px;
                width:50%;
                height: 40px;
                /*margin-top: 20px;*/
                line-height: 50px;
                margin-top: 8px;
                font-weight: normal;
                margin-bottom: 0px !important;
                /*border:1px solid red;*/
            }
            .section2 .section2_img{
                width:15%;
                /*height: 1.366px;*/
                height: auto;
                margin-top: 0px;
            }
            /*.section2 .section2_img img{*/
                /*width:50px;*/
                /*height: 1.5px;*/
            /*}*/
            /*.section4 .section4_img img{*/
                /*width:50px;*/
                /*height: 1.5px;*/
            /*}*/
            /*.section5 .section5_img img{*/
                /*width:50px;*/
                /*height: 1.5px;*/
            /*}*/
            /*.section6 .section5_img img{*/
                /*width:50px;*/
                /*height: 1.5px;*/
            /*}*/
            .section2 .section2_content{
                width:100%;
                /*height: 340px;*/
                height:auto;
                line-height: 22px;
                /*border:1px solid red;*/
                font-size: 12px;
                -webkit-transform: scale(0.9);
                -moz-transform: scale(0.9);
                -o-transform: scale(0.9);
                transform: scale(0.9);
                margin-top: 0px;
                margin-bottom: 0;
            }
            .section3{
                width:100%;
                height: 208px;
                position:relative;
                margin-top:5px;
            }
            .section3 .section3_main{
                color:#fff;
                width:56%;
                /*height: 260px;*/
                height:auto;
                position:absolute;
                top:14%;
                right:10%;
            }
            .section3 .section3_main div:nth-of-type(1){
                width:100%;
                height: 20px;
                line-height: 20px;
                font-size: 12px;
                -webkit-transform: scale(0.9);
                -moz-transform: scale(0.9);
                -o-transform: scale(0.9);
                transform: scale(0.9);
                /*border:1px solid red;*/
                display:none;
            }
            .section3 .section3_main div:nth-of-type(2){
                width:100%;
                height: auto;
                font-size: 12px;
                -webkit-transform: scale(0.8);
                -moz-transform:scale(0.8);
                -o-transform:scale(0.8);
                transform:scale(0.8);
                /*border:1px solid red;*/
                margin-top: -3%;
                line-height: 20px;
                margin-left: 5%;
            }
            .section3 .section3_main div:nth-of-type(3){
                width:95%;
                height: 20px;
                font-size: 10px;
                /*border:1px solid red;*/
                margin-top: -2px;
                text-align: right;
                /*margin-left: 72%;*/
            }
            .section4{
                width:100%;
                /*height: 600px;*/
                height:auto;
                background-color: #F7F7F7;
                margin-top: 30px;
            }
            .section4 .section4_title{
                font-size: 20px;
                color: #8a6d3b;
                padding-top: 20px;
                padding-bottom: 2px;
                font-weight: normal;
            }
            .section4 .section4_img{
                width:15%;
                height: auto;
                /*height: 1.366px;*/
            }
            .section4 .section4_top{
                width:92%;
                height: 180px;
                margin-top: 20px;
                position: relative;
            }
            .section4 .section4_top .top_img{
                position:absolute;
                top:0;
                left: 0;
                width:48%;
                height: 180px;
            }
            .section4 .section4_top .top_right{
                color:#fff;
                width:45%;
                height: 160px;
                /*line-height: 20px;*/
                font-size: 10px;
                line-height: 15px;
                /*-webkit-transform:  scale(0.8);*/
                /*-moz-transform: scale(0.8);*/
                /*-o-transform: scale(0.8);*/
                /*transform:   scale(0.8);*/
                position:absolute;
                /*border:1px solid red;*/
                top:4%;
                right:3%;
                margin-left: 20px;
                margin-top: 40px;
            }
            /*.section4 .section4_top .top_right P{*/
            /*font-size: 12px;*/
            /*-webkit-transform: scale(0.2);*/
            /*-moz-transform:scale(0.2);*/
            /*-o-transform:scale(0.2);*/
            /*transform:scale(0.2);*/
            /*}*/
            .section4 .section4_bottom{
                width:92%;
                height: 180px;
                margin-top: 30px;
                position: relative;
            }
            .section4 .section4_bottom .bottom_img{
                position:absolute;
                top:0;
                left: 0;
                width:48%;
                height: 180px;
            }
            .section4 .section4_bottom .bottom_right{
                color:#fff;
                width:45%;
                /*width:48%;*/
                /*text-overflow:-o-ellipsis-lastline;*/
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 4;
                overflow: hidden;
                height: auto;
                line-height: 15px;
                position:absolute;
                top:30%;
                /*top:2%;*/
                right: 3%;
                /*right: 1%;*/
                /*border:1px solid red;*/
                font-size: 10px;
                /*-webkit-transform:  scale(0.8);*/
                /*-moz-transform: scale(0.8);*/
                /*-o-transform: scale(0.8);*/
                /*transform:   scale(0.8);*/
            }
            .overflow_hidden{
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 4;
                overflow: hidden;
            }
            /*.hideword{*/
                /*color:#fff;*/
                /*!*width:51%;*!*/
                /*width:45%;*/
                /*!*text-overflow:-o-ellipsis-lastline;*!*/
                /*height: auto;*/
                /*line-height: 15px;*/
                /*position:absolute;*/
                /*top:32%;*/
                /*right: 3%;*/
                /*!*border:1px solid red;*!*/
                /*font-size: 10px;*/
            /*}*/
            .section4 .section4_bottom .bottom_right p{
                font-size: 12px;
                -webkit-transform:  scale(0.1);
                -moz-transform: scale(0.1);
                -o-transform: scale(0.1);
                transform: scale(0.1);

            }
            .section5{
                width:100%;
                height: auto;
                /*border:1px solid red;*/
            }
            .section5 .section5_title{
                font-size: 20px;
                color: #8a6d3b;
                margin-top: 20px;
                margin-bottom: 2px;
            }
           .section5 .section5_img{
                width:15%;
                /*height: 1.366px;*/
            }
           .section6 .section5_img{
               width:15%;
               height: auto;
           }
            .section5 .section5_word{
                font-size: 10px;
                margin-top: 15px;
                margin-bottom:15px;
            }
            .section5 .table{
                /*border:1px solid red;*/
                width:100%;
                margin-top: 10px;
                padding-left: 0px;
            }
            .section5 .table td{
                width:25%;
            }
            .section5 .table img{
                width:100%;
                height:90px;
            }
            .section5 .table .table_box1{
                /*border:1px solid red;*/
                width:100%;
                height:90px;
                /*line-height: 250px;*/
                color:#fff;
                background-color: #000;
                /*font-size: 30px;*/
                text-align: center;
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box1 p{
                width:68%;
                height: auto;
                font-size: 12px;
                text-align: center;
                /*line-height:180px;*/
                margin: 0px auto;
                /*margin-top: 30px;*/
                font-family: "NSimSun";
                /*font-weight:900;*/
                /*border:1px solid red;*/
            }

            .section5 .table .table_box2{
                width:100%;
                height:90px;
                /*font-size: 30px;*/
                text-align: center;
                /*line-height:250px;*/
                color:#8a6d3b;
                /*font-weight: 900;*/
                background-color: #F7F7F7;
                font-family: "NSimSun";
                display: flex;
                justify-content:center;
                align-items:Center;
            }
            .section5 .table .table_box2 p{
                width:68%;
                height:auto;
                font-size: 12px;
                text-align: center;
                margin:0 auto;
                /*line-height:248px;*/
                /*color:#8a6d3b;*/
                /*font-weight: 900;*/
                /*background-color: #F7F7F7;*/
                font-family: "NSimSun";
                /*border:1px solid red;*/
            }

            .section6 .section6_title{
                font-size: 20px;
                font-weight: normal;
                margin-bottom: 2px!important;
                color: #8a6d3b;
                margin-top:0px;
            }
            .section6{
                /*border:1px solid red;*/
                width:100%;
                height: auto;
                margin-bottom:-15px;
            }
            .section6 .table{
                /*border:1px solid red;*/
                width:100%;
                /*margin-top: 30px;*/
                /*padding-left: 3%;*/
                margin: 20px auto;
            }
            .section6 .table .table_box{
                width:100%;
                /*height: 100px;*/
                height: auto;
                margin-bottom: 6px;
                /*border:1px solid red;*/
            }
            .section6 .table .table_box img{
                width:95%;
                /*height: 90px;*/
                height:auto;
                /*border:1px solid red;*/
            }
        }
        @media screen and (max-width:360px){
            .section3 .section3_main div:nth-of-type(2){
                width:100%;
                height: auto;
                font-size: 12px;
                -webkit-transform: scale(0.8);
                -moz-transform:scale(0.8);
                -o-transform:scale(0.8);
                transform:scale(0.8);
                /*border:1px solid red;*/
                margin-top: -7%;
                line-height: 20px;
                margin-left: 12%;
            }
        }
    </style>
</head>
<body>
@include('frontend.module.myheader')
<!--section1 start-->
<div class="container-fluid section1 clear-padding">
    {{--<img class="img-responsive center-block" src="../../../../images/frontend/e1.jpg">--}}
    <img class="img-responsive center-block" src="{{$data["img"][0]}}">
</div>
<!--section1 end-->
<!--section2 start-->
<div class="container-fluid section2 ">
    {{--<div class="section2_title text-center center-block">关于天地农耕</div>--}}
    <div class="section2_title text-center center-block">{{$data["word"][0]}}</div>
    <div class="section2_img center-block">
        <img class="img-responsive center-block" id="line1" src="../../../../images/frontend/line5.png">
    </div>
    <div class="section2_content center-block">
        <div>{!! $data["word"][1] !!}</div>
        <div>{!!$data["word"][2]!!}</div>
        <div>{!!$data["word"][3]!!}</div>
    </div>
</div>
<!--section2 end-->
<!--section3 start-->
<div class="container-fluid clear-padding">
    {{--<div class="section3" style="background: url('../../../../images/frontend/e2.jpg');background-size: 100% 100%;">--}}
    <div class="section3" style="background: url('{{$data["img"][1]}}');background-size:100% 100%; background-repeat: no-repeat">
        <div class="section3_main">
            <div>{{$data["word"][4]}}</div>
            <div>{!! $data["word"][5] !!}</div>
            <div>{{$data["word"][6]}}</div>
        </div>
    </div>

</div>
<!--section3 end-->
<!--section4 start-->
<div class="container-fluid clear-padding">
    <div class="section4">
        <div class="section4_title text-center">{{$data["word"][7]}}</div>
        <div class="section4_img center-block">
            <img class="img-responsive center-block"  id="line2" src="../../../../images/frontend/line5.png">
        </div>
        {{--<div class="section4_top center-block" style="background: url('../../../../images/frontend/e3.jpg');background-size: 100% 100%">--}}
        <div class="section4_top center-block" style="background: url('{{$data["img"][2]}}');background-size: 100% 100%">
            <div class="top_left">
                {{--<img class="img-responsive center-block top_img" src="../../../../images/frontend/e4.jpg">--}}
                <img class="img-responsive center-block top_img" src="{{$data["img"][3]}}">
            </div>
            <div class="top_right">
                {!! $data["word"][8] !!}
            </div>
        </div>
        <div class="section4_bottom center-block" style="background: url('{{$data["img"][4]}}');background-size: 100% 100%">
            <div class="bottom_left">
                <img class="img-responsive center-block bottom_img" src="../../../../images/frontend/e6.jpg">
                <img class="img-responsive center-block bottom_img" src="{{$data["img"][5]}}">
            </div>
            <div class="bottom_right">
                {!! $data["word"][9] !!}
            </div>
        </div>
    </div>
</div>
<!--section4 end-->
<!--section5 start-->
<div class="container-fluid ">
    <div class="section5">
        <div class="section5_title text-center">{{$data["word"][10]}}</div>
        <div class="section5_img center-block">
            <img class="img-responsive center-block"  id="line3" src="../../../../images/frontend/line5.png">
        </div>
        <div class="section5_word text-center">
            {{$data["word"][11]}}
        </div>
        <div class="table center-block">
            <table>
                <tr>
                    <td>
                        <div class="box_img">
                            {{--<img class="img-responsive center-block" src="../../../../images/frontend/1-3.jpg">--}}
                            <img class="img-responsive center-block" src="{{$data["img"][6]}}">
                        </div>
                    </td>
                    <td>
                        <div class="table_box1">
                            <p class="center-block">{{$data["word"][12]}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="box_img">
                            <img class="img-responsive center-block" src="{{$data["img"][7]}}">
                        </div>
                    </td>
                    <td>
                        <div class="table_box2">
                            <p class="center-block">{{$data["word"][13]}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table_box2">
                            <p class="center-block">{{$data["word"][14]}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="box_img">
                            <img class="img-responsive center-block" src="{{$data["img"][8]}}">
                        </div>
                    </td>
                    <td>
                        <div class="table_box1">
                            <p class="center-block">{{$data["word"][15]}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="box_img">
                            <img class="img-responsive center-block" src="{{$data["img"][9]}}">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!--section5 end-->
<!--section6 start-->
<div class="container-fluid">
    <div class="section6">
        <div class="section6_title text-center">{{$data["word"][16]}}</div>
        <div class="section5_img center-block">
            <img class="img-responsive center-block"  id="line4" src="../../../../images/frontend/line5.png">
        </div>
        <div class="table center-block">
            <table>
                <tr>
                    <td>
                        <div class="table_box">
                            <img class="img-responsive center-block" src="{{$data["img"][10]}}">
                        </div>
                    </td>
                    <td>
                        <div class="table_box">
                            <img class="img-responsive center-block" src="{{$data["img"][11]}}">
                        </div>
                    </td>
                    <td>
                        <div class="table_box">
                            <img class="img-responsive center-block" src="{{$data["img"][12]}}">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table_box">
                            <img class="img-responsive center-block" src="{{$data["img"][13]}}">
                        </div>
                    </td>
                    <td>
                        <div class="table_box">
                            <img class="img-responsive center-block" src="{{$data["img"][14]}}">
                        </div>
                    </td>
                    <td>
                        <div class="table_box">
                            <img class="img-responsive center-block" src="{{$data["img"][15]}}">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!--section6 end-->
@include("frontend.module.myfooter")



<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../static/common/js/ie10-viewport-bug-workaround.js"></script>
<script>
    window.onload=function(){
        var width = window.screen.width;
        var cWidth = document.body.clientWidth;
        var word = document.querySelectorAll(".section1_text");
        if(width<=750){
            // $(".section4 .section4_bottom .bottom_right").addClass("overflow_hidden")
            // $(".section4 .section4_bottom .bottom_right").click(function(){
            //     // console.log("999");
            //     if(($(this).hasClass("overflow_hidden"))){
            //         console.log("000")
            //         $(this).removeClass("overflow_hidden");
            //         // $(this).addClass("hideword");
            //     }else{
            //         $(this).addClass("overflow_hidden");
            //         // $(this).addClass("hideword");
            //     }
            //
            // })
            // navtop.style.display = "none";
            $(".header").css("display","none");
            $("#swiper2").css("width","500px")

        }

    }
</script>

</body>
</html>