<html>
<head>
    <meta charset="UTF-8">
    <title>产品中心</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->
    <title>天地农耕</title>
    <link rel="stylesheet" href="../../../../vendor/font/iconfont.css">
    <!-- Bootstrap core CSS -->
    <link href="../../../../vendor/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
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
</head>
<body>
<style>
    .section_m{
        display:none;
    }
    .section1{
        width:100%;
        /*height: 300px;*/
        height:auto;
    }
    .section1 img{
        width:100%;
        /*height:100%;*/
        height:auto;
    }
    .section2{
        background-color: #F5F5F5;
        width:100%;
        height: 80px;
        margin-top: 40px;
        /*border: 1px solid red;*/
        margin-left: 2px;
    }
    .section2 .section2_left{
        width:40%;
        height:80px;
        line-height: 80px;
        /*border:1px solid red;*/
        margin-left: 80px;
    }
    .section2_left .left_word{
        margin-bottom: -80px;    color:#686868;
    }
    .section2_left .left_word a{
        color:#686868;
    }
    .section2_right{
        width:50%;
        height: 80px;
    }
    .section2_right div{
        float:left;
        width: 20%;
        height: 80px;
        line-height: 80px;
        text-align: center;
        /*border:1px solid red;*/
        /*border-bottom: 1px solid #8C6238;*/
    }
    /*.section2_right div a{*/
    /*color:#8C6238;*/
    /*}*/

    /*.section2_right div:hover{*/

    /*border-bottom: 1px solid #8C6238;*/
    /*}*/
    /*.section2_right div:hover>a{*/
    /*color:#8C6238;*/
    /*}*/
    .section2_right div a{
        color: #A1A1A1;
        font-weight: bold;
    }
    .section3{
        margin-top: 50px;
        width:68%;
        height:auto;
        /*margin-left:15%;*/
        /*border:1px solid red;*/
        /*padding-left: 5%;*/
    }
    .section3 .produce{
        width:30%;float:left;
        height: 350px;
        /*background-color: #ccc;*/
        /*border:1px solid red;*/
        display: table;
        margin-left: 30px;
        margin-bottom: 20px;

    }
    .section3 .produce img{
        width:100%;
        /*height: 260px;*/
        height:auto;
        display: table-cell;
        justify-items: center;
        vertical-align: middle;
        /*margin-top: 10px;*/
    }
    .section3 .produce .produce_word{
        width:100%;
        height: 70px;
        background-color: #F5F5F5;
    }
    .section3 .produce p:nth-of-type(1){
        /*margin-top: 10px;*/
        padding-top: 10px;
        padding-left: 10px;
        font-size: 18px;
        font-weight: bold;
        height: auto;
        margin-bottom: 0;
        /*border:1px solid red;*/
    }
    .section3 .produce .produce_word span:nth-of-type(1){
        font-size: 14px;
        padding-left: 10px;
    }
    .section3 .produce .jg{
        color:red;
        font-size: 20px;
    }
    .section3 .produce .rmb{
        color:red;
        font-size: 16px;
    }
    .section4{
        width:65%;
        height: 58px;
        line-height: 58px;
        /*text-align: center;*/
        /*border:1px solid red;*/
        /*padding-left: 5%;*/
        /*margin-top: 20px;*/
    }
    @media screen and (max-width:1680px){
        .section3{
            margin-top: 50px;
            width:68%;
            height:auto;
            /*margin-left:15%;*/
            /*border:1px solid red;*/
            /*padding-left: 5%;*/
        }
        .section3 .produce{
            width:30%;float:left;
            /*height: 350px;*/
            height:auto;
            /*background-color: #ccc;*/
            /*border:1px solid red;*/
            display: table;
            margin-left: 30px;

        }
        .section3 .produce img{
            width:100%;
            /*height: 260px;*/
            height:auto;
            display: table-cell;
            justify-items: center;
            vertical-align: middle;
            /*margin-top: 10px;*/
        }
        .section3 .produce .produce_word{
            width:100%;
            height: 60px;
            background-color: #F5F5F5;
        }
        .section3 .produce p:nth-of-type(1){
            font-size: 18px;
            font-weight: bold;
        }
        .section3 .produce .produce_word span:nth-of-type(1){
            font-size: 14px;
        }
        .section3 .produce .jg{
            color:red;
            font-size: 20px;
        }
        .section3 .produce .rmb{
            color:red;
            font-size: 16px;
        }
        .section4{
            width:64%;
            margin-bottom: 0px;
        }
    }
    @media screen and (max-width:1600px){
        .section4{
            width:64%;
            margin-bottom: 20px;
        }
    }
    @media screen and (max-width:1400px) {
        .section3{
            margin-top: 50px;
            width:70%;
            height:auto;
            /*margin-left:15%;*/
            /*border:1px solid red;*/
            /*padding-left: 5%;*/
        }
        .section3 .produce{
            width:32%;float:left;
            height: 320px;
            /*background-color: #ccc;*/
            /*border:1px solid red;*/
            display: table;
            margin-left: 10px;
            margin-bottom:-10px;
        }
        .section3 .produce img{
            width:100%;
            height: auto;
            display: table-cell;
            justify-items: center;
            vertical-align: middle;
            /*margin-top: 10px;*/
        }
        .section3 .produce .produce_word{
            width:100%;
            height: 60px;
            background-color: #F5F5F5;
        }
        .section3 .produce p:nth-of-type(1){
            font-size: 16px;
            font-weight: bold;
        }
        .section3 .produce .produce_word span:nth-of-type(1){
            font-size: 14px;
        }
        .section3 .produce .jg{
            color:red;
            font-size: 20px;
        }
        .section3 .produce .rmb{
            color:red;
            font-size: 16px;
        }
        .section4 {
            width: 69%;
            /*height: 58px;*/
            height:auto;
            line-height: 58px;
            /* text-align: center; */
            /*border: 1px solid red;*/
            /* padding-left: 5%; */
            /* margin-top: 20px; */
            margin-bottom: 21px;
        }
    }
    @media screen and(max-width:1366px){
        .section4 {
            width: 69%;
            height: 58px;
            line-height: 58px;
            /* text-align: center; */
            /*border: 1px solid red;*/
            /* padding-left: 5%; */
            /* margin-top: 20px; */
            margin-bottom: 40px;
        }
    }
    @media screen and (max-width:1152px){
        .section3 {
            width:78%;
        }
    }
    @media screen and (max-width:1024px)and (min-width:768px){
        .section1,.section2{
            display:none;
        }
        .active_a {
            margin-left: 0px;
            width: 100%;
            /*padding-left: 20px;*/
            text-align: left;
            /* height:200px !important; */
        }
        .header{
            width:100%;
            height: 180px;
        }
        .section1 img{
            width:100%;
            /*height:120px;*/
            height:auto;
        }
        .section_m{
            width:100%;
            height:80px;
            margin: 0 auto;
            /*border:1px solid red;*/
            position:relative;
        }
        .section_m .m_left,.m_right{
            width:40%;
            height:30px;
            line-height: 30px;
            float:left;
            margin-left:6%;
            /*margin-right: 20px;*/
            margin-top:30px;
            text-align: center;
            border:1px solid #000;
            border-radius: 6px;
        }
        .section_m .m_left:hover{
            border: 1px solid #8C6238;
        }
        .section_m .m_left:hover>a{
            color: #8C6238;
        }
        .section_m .m_right:hover{
            border: 1px solid #8C6238;
        }
        .section_m .m_right:hover>a{
            color: #8C6238;
        }
        .section3{
            width:100%;
            height:auto;
            margin: 10px auto;
            padding-left: 0px;
            margin-left: 0px;
            /* border:1px solid red; */
        }
        .section3 .produce{
            width:50%;
            height:320px;float:left;
            /*border:1px solid blue;*/
            /*margin-left: 10px;*/
            margin: 0px auto;
            -webkit-transform: scale(0.9);
            -moz-transform:scale(0.9);
            -o-transform:scale(0.9);
            transform:scale(0.9);
        }
        .section3 .produce img{
            width:100%;
            height:auto;
        }
        .section3 .produce .produce_word{
            width:100%;
            /*height:100px;*/
            height:auto;
        }
        .section3 .produce .produce_word p:nth-of-type(1){
            font-size:18px;
        }
        .section3 .produce .produce_word p:nth-of-type(2){
            font-size:12px;
        }
        .section3 .produce .produce_word p:nth-of-type(2) span{
            font-size:14px;
        }
        .section_m .m_left a,.m_right a{
            color:#000;
        }
        .section4{
            width:100%;
            text-align: center;
            height: auto;
            /*border:1px solid red;*/
            padding-left: 0%;
            margin-top: 0px;
            margin-bottom: 10px;
        }
        .pagination{
            width:280px;
            /*border:1px solid red;*/
            margin-left: 0;
            padding-left: 0;
        }
    }
    @media screen and (max-width:750px) {
        .active_a {
            margin-left: 0px;
            width: 100%;
            /*padding-left: 20px;*/
            text-align: left;
            /* height:200px !important; */
        }
        .section1,.section2{
            display:none;
        }
        .header{
            width:100%;
            height: 180px;
        }
        .section1 img{
            width:100%;
            /*height:120px;*/
            height:auto;
        }
        .section_m{
            width:100%;
            height:80px;
            margin: 0 auto;
            /*border:1px solid red;*/
            position:relative;
        }
        .section_m .m_left,.m_right{
            width:41%;
            height:30px;
            line-height: 30px;
            float:left;
            margin-left:6%;
            /*margin-right: 20px;*/
            margin-top:30px;
            text-align: center;
            border:1px solid #000;
            border-radius: 6px;
        }
        .section_m .m_left:hover{
            border: 1px solid #8C6238;
        }
        .section_m .m_left:hover>a{
            color: #8C6238;
        }
        .section_m .m_right:hover{
            border: 1px solid #8C6238;
        }
        .section_m .m_right:hover>a{
            color: #8C6238;
        }
        .section3{
            width:100%;
            height:auto;
            margin: 10px auto;
            padding-left: 0px;
            margin-left: 0px;
             /*border:1px solid red;*/
        }
        .section3 .produce{
            width:50%;
            /*height:160px;*/
            height: auto;
            float:left;
            /*border:1px solid blue;*/
            /*margin-left: 10px;*/
            margin: 0px auto;
            -webkit-transform: scale(0.95);
            -moz-transform:scale(0.95);
            -o-transform:scale(0.95);
            transform:scale(0.95);
        }
        .section3 .produce img{
            width:100%;
            /*height:125px;*/
            height:auto;
        }
        .section3 .produce .produce_word{
            width:100%;
            height:50px;
        }
        .section3 .produce .produce_word p:nth-of-type(1){
            font-size:12px;
            /*display: none;*/
            /*padding-left: 6px;*/
        }
        .section3 .produce .produce_word p:nth-of-type(2){
            font-size:8px;   padding-left: 8px;
        }
        /*.section3 .produce .produce_word p:nth-of-type(2) span{*/
        /*font-size:10px;*/
        /*}*/
        #jg1{
            display: none;

        }
        .section_m .m_left a,.m_right a{
            color:#000;
        }
        .section3 .produce .jg{
            color:red;
            font-size: 14px;
        }
        .section3 .produce .rmb{
            color:red;
            font-size: 12px;
        }
        .section4{
            width:100%;
            height: 50px;
            line-height: 50px;
            text-align: center;
            /*border:1px solid red;*/
            margin-bottom:0;
        }
        .pagination{
            margin: 5px auto;
        }
    }
</style>


{{--导入头部--}}
@include("frontend.module.myheader")
<div class="container-fluid section1 clear-padding">
    {{--<img class="img-responsive center-block" src="../../../../images/frontend/pp.jpg">--}}
    <img class="img-responsive center-block" src="{{$data["img"][0]}}">
</div>
<!--section1 end-->
<!--section2 start-->
<div class="container-fluid clear-padding">
    <div class="section2 row">
        <div class="col-md-12 col-sm-12">
            <div class="section2_left col-md-3 col-sm-3">
                <img style="margin-bottom:5px;" src="../../../../images/frontend/position.png">
                <span class="left_word">当前位置:<a href="/">天地农耕网</a>><a href="/prodcenter">产品中心</a></span>
            </div>
            <div class="section2_right col-md-9 col-sm-9">
                <div class="cate0"><a class="cate0">{{$data["word"][0]}}</a></div>
                <div class="cate1"><a class="cate1">{{$data["word"][1]}}</a></div>
            </div>
        </div>
    </div>
    <div class="section_m ">
        <div  class="m_left cate0"><a class="cate0">{{$data["word"][0]}}</a></div>
        <div  class="m_right cate1"><a class="cate1">{{$data["word"][1]}}</a></div>
    </div>
</div>
<!--section2 end-->
<!--section3 start-->
<div class="container-fluid ">
    <div class="section3 row center-block " id="product_list">
        {{--@foreach($data[2][0]["img"] as $img)--}}
            {{--<div class="produce">--}}
                {{--<a href="{{$data[2][0]["link"][$i++]}}"><img src="{{$img}}"></a>--}}
                {{--<div class="produce_word">--}}
                    {{--<p>{{$data[2][0]["word"][$j++]}}</p>--}}
                    {{--<p><span>{{$data[2][0]["word"][$j++]}}</span><span class="jg">{{$data[2][0]["word"][$j++]}}</span></p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    </div>
</div>
<div class="container-fluid">
    <div class="section4 center-block">
        <nav aria-label="Page navigation">
            <ul class="pagination" id="pg_bt">

            </ul>
        </nav>
    </div>
</div>

<!--section3 end-->
{{--导入尾部--}}
@include("frontend.module.myfooter")

<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../static/common/js/ie10-viewport-bug-workaround.js"></script>
<script>
    window.onload=function() {
        var width = window.screen.width;
        var cWidth = document.body.clientWidth;
        wechatCodeShow();//绑定微信图标事件
        // $(".section_m").css("display", "none");
        if (width <= 750) {
            // pageDiv.style.display="none";
            // contactDiv.style.display = "none";
            // $(".section1").css("display", "none");
            // $(".section2").css("display", "none");
            $(".section_m").css("display", "block");
        }
        if (width >= 768 && width <= 1024) {
            $(".section1").css("display", "none");
            $(".section2").css("display", "none");
            $(".section_m").css("display", "block");
        }
    }
</script>

<script>
    $(document).ready(function() {
        window.catenum=0;
        $("a[class^='cate']").bind("click",function(){
            var bt_class =$(this).attr('class');//获取当前a标签的name
            window.catenum = bt_class.replace(/[^0-9]/ig,"");
            console.log(catenum);
            pageload();
        });
        pageload();//加载初始页(第一页)
    });

    function pageload(){//加载初始页(第一页)
        var limit = 9;//默认每页显示9个商品
        var dev_width = document.documentElement.clientWidth;//获取设备宽度
        if (dev_width<=768){//尺寸小于768 显示8个商品
            limit = 8;
        }
        $.ajax({url:"/data/product?catenum="+catenum+"&page=1&limit="+limit,
            success:function(data){
                refreshGoods(data);
                bindPageButton();
        }});
    }

    function getPage(page){//加载指定页面
        var limit = 9;//默认每页显示9个商品
        var dev_width = document.documentElement.clientWidth;//获取设备宽度
        if (dev_width<=768){//尺寸小于768 显示8个商品
            limit = 8;
        }
        if(page<1||page>pagecount){
            console.log("页码不正确");
            return false;
        }
        $.ajax({url:"/data/product?catenum="+catenum+"&page="+page+"&limit="+limit,
            success:function(data){
                refreshGoods(data);//响应成功后刷新商品信息
                bindPageButton();//绑定按钮事件
            }});
    }
    function refreshGoods(data){
        if(catenum == 0){
            $("div[class='cate0']").css("border-bottom","2px solid #8C6238");
            $("a[class='cate0']").css("color", "#8C6238");
            $("div[class='cate1']").css("border-bottom","");
            $("a[class='cate1']").css("color", "#A1A1A1");
        }
        else if(catenum == 1){
            $("div[class='cate1']").css("border-bottom","2px solid #8C6238");
            $("a[class='cate1']").css("color", "#8C6238");
            $("div[class='cate0']").css("border-bottom","");
            $("a[class='cate0']").css("color", "#A1A1A1");
        }
        else{
            console.log("catenum error!");
        }
        window.pagecount=data["msg"]["pagecount"];
        window.curpage=data["msg"]["curpage"];
        $("#product_list")[0].innerHTML = "";//清空商品信息
        for(var i=0;i<data["img"].length;i++){
            $("#product_list")[0].innerHTML +=
                "<div class='produce'>" +
                "<a href="+ data['link'][i]+"><img src="+data['img'][i]+"></a>"+
                "<div class='produce_word'>"+
                "<p>"+data['word'][4*i]+"</p>"+
                "<p>" +
                "<span id='jg1'>"+data['word'][4*i+1]+"</span>" +
                "<span class='rmb'>￥</span>"+
                "<span class='jg'>"+data['word'][4*i+2]+"</span>" +
                "</p>" +
                "</div>" +
                "</div>";
        }
        $("#pg_bt")[0].innerHTML ="";//清空分页按钮
        $("#pg_bt")[0].innerHTML +=
            "<li>" +
            "<a id='prev' aria-label='Previous'>" +
            "<span aria-hidden='true'>&laquo;</span>" +
            "</a>"+
            "</li>";
        var stat=1,end=5;
        if(curpage>0 && curpage<4){
            stat = 1;
            end = 5;
        }
        else if(curpage>=4 && curpage<=pagecount-2){
            stat = curpage-2;
            end = curpage+2;
        }
        else if(curpage>pagecount-2 && curpage<=pagecount){
            stat = pagecount-4;
            end = pagecount;
        }
        else{
            console.log("curpage error!");
        }
        for(var j=stat;j<=end;j++){
            if(curpage == j){
                $("#pg_bt")[0].innerHTML +=
                    "<li class='active'><a id='page" + j + "'>" + j + "</a></li>";
            }
            else{
                $("#pg_bt")[0].innerHTML +=
                    "<li><a id='page" + j + "'>" + j + "</a></li>";
            }
        }
        $("#pg_bt")[0].innerHTML +=
            "<li>" +
            "     <a id='next' aria-label='Next'>" +
            "           <span aria-hidden='true'>&raquo;</span>" +
            "     </a>" +
            "</li>";
    }

    function bindPageButton(){
        $('#prev').bind("click", function(){
            var page = curpage<=1? 1 : curpage-1;
            getPage(page);
        });
        $('#next').bind("click", function(){
            var page = curpage>=pagecount? pagecount : curpage+1;
            getPage(page);
        });
        $("a[id^='page']").bind("click", function(){
            var bt_id =$(this).attr('id');//获取当前按钮的id
            var page = bt_id.replace(/[^0-9]/ig,"");
            getPage(page);
        });
    }

</script>
</body>
</html>