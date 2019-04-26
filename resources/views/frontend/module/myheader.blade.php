
<style>
    /*头部开始*/
    /*.navbar-nav > li > a{*/
        /*line-height: 20px !important;*/
    /*}*/
    a:hover{
        cursor:pointer;
    }
    body{
        font-family: "黑体";
    }
    .clear-padding{
        padding:0;
    }
    .clear-margin{
        margin-right: 0;
        margin-left: 0;
    }
    .clear-padding-row{
        padding-left:0;
        padding-right:0;
    }
    .clear-padding-col{
        padding-top:0;
        padding-bottom:0;
    }
    .header{
        width:100%;
        height: 80px;

    }
    .nav_img{
        margin-left: 20%;
        float:left;
        width:260px;
        height: 70px;
    }
    .nav_container{
        float:left;
        /*margin-left: 160px;*/

    }
    .nav_word{
        width:22%;
        height: 35px;
        float:left;
        line-height: 35px;
        text-align: center;
        /*margin-left: 10px;*/
        border-left:1px solid #333 ;
        margin-top: 20px;
        /* border:1px solid red; */
    }
    .nav_word:nth-of-type(3){
        border-right:1px solid #333 ;
    }
    .nav_word a{
        color:#333;
        /*font-size: 20px !important;*/
    }
    .navbar-inverse .navbar-toggle .icon-bar{
        background-color: #8a6d3b;
    }
    .nav_foot{
        float:left;
        /*margin-left: 120px;*/
        line-height: 80px;
    }
    .nav_foot .foot_img{
        width:20px;
        height: 20px;
        margin-left: 8px;
    }
    .active_a{
        margin-left: 200px;
        /*padding-left: 20px;*/
        text-align: center;
        width:100px;
        /*border:1px solid red;*/
    }
    .nav a{
        margin-right: 25px;
        /*text-align: center;*/
    }
    .header_main{
        width:100%;
        height: 48px;
        font-size: 16px;
    }
    .header_main{

        position:relative;
    }
    /*.navbar-nav li{*/
        /*width:100px;*/
        /*text-align: center;*/
    /*}*/
    .bds_weixin{
        position:relative;
        display: inline-block;
    }
    .wechat-share{
        display: none;
        position:absolute;
        top:100%;
        left:10px;
        width: 128px;
        height: 100px;
        /*overflow: hidden;*/
        /*border:1px solid red;*/
        z-index: 999999;
    }
    .wechat-share img{
        width: 110px;
        height: 100px;

    }

    .bds_weixin:hover > .wechat-share{
        　　display: block;
    }
    #logo{
        display: none;
    }
    @media screen and (max-width:1400px){
        .active_a{
            margin-left: 260px;
            /*padding-left: 20px;*/
            text-align: center;
            width:100px;
        }
        .nav_word{
            width:25%;
            height: 35px;
            float:left;
            line-height: 35px;
            text-align: center;
            /*margin-left: 10px;*/
            border-left:1px solid #333 ;
            margin-top: 20px;
            /* border:1px solid red; */
        }
    }
    @media screen and (max-width:1366px){
        .nav_word{
            width:28%;
            height: 35px;
            float:left;
            line-height: 35px;
            text-align: center;
            /*margin-left: 10px;*/
            border-left:1px solid #333 ;
            margin-top: 20px;
            /* border:1px solid red; */
        }
       .header_main{
            /*padding-left: 0%;*/
           font-size: 14px;
        }
    }
    @media screen and (max-width:1152px){
        .nav_img {
            margin-left: 15%;
            float: left;
            width: 260px;
            height: 70px;
        }
        .nav_foot{
            float:left;
            /*margin-left: 120px;*/
            /*line-height: 80px;*/
            width:20%;
            height:70px;
            /*border:1px solid red;*/
        }
        .active_a {
            margin-left: 196px;
            /* padding-left: 20px; */
            text-align: center;
            width: 100px;
        }

    }
    @media screen and (max-width:1024px) and (min-width:768px){
        .header{
            display:none;
        }
        .active_a {
            margin-left: 0px;
            width: 100px;
            /*padding-left: 20px;*/
            text-align: center;
        }
        #logo,.header{
            display:none;
        }
        .nav a{
            margin-right: 0px;
        }
        .pf{
            padding-left: 18%;
        }
        body{
            padding:0px;
            margin: 0px;
        }
        /*.navbar-nav li{*/
            /*width:90px;*/
            /*text-align: center;*/
        /*}*/
    }
    @media screen and (max-width:750px) {
        .nav a{
            margin-right: 0;
        }
        .navbar-inverse .navbar-toggle{
            border-color:#222222;
        }
        .header{
            display:none;
        }
        body{
            padding:0px;
            margin: 0px;
        }
        .active_a {
            margin-left: 0px;
            width: 100%;
            /*padding-left: 20px;*/
            text-align: left;
        }
        #logo{
            width:160px;
            height: 29px!important;
            margin-left: 0%;
            margin-top: 12px;
        }
        .header {
            width: 100%;
            height: 180px;
        }
        .secition1 .row .dl{
            margin-top: 15px;
        }
        .section3_right_img,.img1{
            width:80px;
            height:8px;
        }
        .section3_right h1{
            font-size: 20px;
        }
        .section8 .section8_left h1{
            font-size: 20px;
        }
        .section9 .news_title img{
            width:80px;
            height: 8px;
        }
        .news_title p{
            font-size: 20px;
        }
    }
    /*头部结束*/
</style>

<!--header -->
<script>
    //设为首页
    function SetHome(obj,url){
        try{
            obj.style.behavior='url(#default#homepage)';
            obj.setHomePage(url);
        }catch(e){
            if(window.netscape){
                try{
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                }catch(e){
                    alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
                }
            }else{
                alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
            }
        }
    }

    //收藏本站
    function AddFavorite(title, url) {
        try {
            window.external.addFavorite(url, title);
        }
        catch (e) {
            try {
                window.sidebar.addPanel(title, url, "");
            }
            catch (e) {
                alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
            }
        }
    }

</script>
@php
    use App\Models\Article;
    use App\Models\Category;
    use App\Common\MyLibs;
    $header[0]=MyLibs::contentHandlers(Article::getContent("页面模版头部"));
    $header[1] = Category::categryName();
//dump($header[0]["word"][0]);

    $images="";
    for($i=2;$i<count($header[0]["img"]);$i++){
        $images .= $header[0]["img"][$i]."|";
    }
    $images = rtrim($images, "|");
@endphp
<div class="container-fluid header clear-padding">
    <div class="row">
        {{--<img src="{{URL::asset('images/frontend/logo.png')}}" class="nav_img col-md-3 col-md-offset-2">--}}
        <img src="{{URL::asset($header[0]["img"][0])}}" class="nav_img col-md-3">
        <div class="nav_container col-md-3 col-md-offset-1">
            <div class="nav_word"><a href="javascript:void(0);" onclick="SetHome(this,'http://www.xyz.com');">设为首页</a></div>
            <div class="nav_word"><a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a></div>
            <div class="nav_word"><a href="/contactus">联系我们</a></div>
        </div>
        <div class="nav_foot col-md-2">
            <span>分享我们</span>
            {{--<img class="foot_img" src="../../../../images/frontend/01.png">--}}
            <div class="bds_weixin" >
                <a title="分享到微信" href="javascript:void(0);" class="wx_a"><img class="foot_img" src="../../../../images/frontend/01.png"></a>
                <div class="wechat-share">
                    {{--<img src="{{URL::asset($header[0]["img"][1])}}"> />--}}
                    <img src="{{$header[0]["img"][1]}}"> />
                </div>
            </div>
            <a title="分享到QQ空间" href="javascript:void(0)" class="share_qzone" onclick="shareToQzone(event)"><img class="foot_img" src="../../../../images/frontend/02.png"></a>
            <a title="分享到新浪微博" href="javascript:void(0)" class="share_xlwb" onclick="shareToSinaWB(event)"><img class="foot_img" src="../../../../images/frontend/03.png"></a>
        </div>
    </div>
</div>
<div class="container-fluid header_main clear-padding">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container pf">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img style="width:160px; height: 46px;" id="logo" src="{{URL::asset('images/frontend/mlogo.png')}}" class="nav_img col-md-3 col-md-offset-2">
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    {{--@foreach($header[1] as $categry)--}}
                    @for($i=0; $i<count($header[1]); $i++)
                        @php
                            preg_match_all("/https?:\/\/.+?\/(.+?)(\/|$)/",URL::current(),$preg);
                            preg_match_all("/\/(.+?)(\/|$)/", $header[1][$i]->link, $link);
                        @endphp
                        @if($preg[1] == $link[1])
                            <li class="active">
                                @if($i == 0)
                                    <a class="active_a" href="{{$header[1][$i]->link}}">{{$header[1][$i]->name}}</a>
                                @else
                                    <a href="{{$header[1][$i]->link}}">{{$header[1][$i]->name}}</a>
                                @endif
                            </li>
                        @else
                            <li >
                                @if($i == 0)
                                    <a class="active_a" href="{{$header[1][$i]->link}}">{{$header[1][$i]->name}}</a>
                                @else
                                    <a href="{{$header[1][$i]->link}}">{{$header[1][$i]->name}}</a>
                                @endif
                            </li>
                        @endif
                    @endfor
                </ul>
            </div><!--/.nav-collapse -->

        </div>
    </nav>
</div>
<!--header end--------------------------------------------------------------------------------------------------------->
<script>
    var width = window.screen.width;
    var cWidth = document.body.clientWidth;
    var logo = document.getElementById("logo");
    // logo.style.display="none";
    // alert(width);
    if(width<=750){
        $(".header").css("display","none");
        logo.style.display="block";
        console.log("width:"+width);
        console.log("logo.style.display:"+logo.style.display);
    }
    if(width>=768 && width<=1024){
        // alert(width);
        logo.style.display="none";
        $(".header").css("display","none");
    }
    if(width==1024){
        $(".pf").css("padding-left","23%");
    }
    function wechatCodeShow(){
        $(".bds_weixin").bind({
            mouseover:function(){
                // $(".wechat-share").css("display","block");
                $(".wechat-share").show("slow");
            },
            mouseout:function(){
                // $(".wechat-share").css("display","none");
                $(".wechat-share").hide("slow");
            }
        });
    }

</script>
<script>
    var _title,_source,_sourceUrl,_pic,_showcount,_desc,_summary,_site,
        _url = '',
        _desc = '{{$header[0]["word"][0]}}',
        _summary = '{{$header[0]["word"][1]}}',
        _pic = "{{$images}}"
    ;
    //分享到QQ空间
    function shareToQzone(event){
        event.preventDefault();
        var _shareUrl = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?';
        _shareUrl += 'url=' + encodeURIComponent(_url||document.location);   //参数url设置分享的内容链接|默认当前页location
        _shareUrl += '&showcount=' + _showcount||0;      //参数showcount是否显示分享总数,显示：'1'，不显示：'0'，默认不显示
        _shareUrl += '&desc=' + encodeURIComponent(_desc||'分享的描述');    //参数desc设置分享的描述，可选参数
        _shareUrl += '&summary=' + encodeURIComponent(_summary||'分享摘要');    //参数summary设置分享摘要，可选参数
        _shareUrl += '&title=' + encodeURIComponent(_title||document.title);    //参数title设置分享标题，可选参数
        _shareUrl += '&site=' + encodeURIComponent(_site||'');   //参数site设置分享来源，可选参数
        _shareUrl += '&pics=' + encodeURIComponent(_pic||'');   //参数pics设置分享图片的路径，多张图片以＂|＂隔开，可选参数
        window.open(_shareUrl,'_blank');
    }

    //分享到新浪微博
    _title = '{{$header[0]["word"][1]}}';

    function shareToSinaWB(event){
        event.preventDefault();
        var _shareUrl = 'http://v.t.sina.com.cn/share/share.php?title="123"';     //真实的appkey，必选参数
        _shareUrl += '&url='+ encodeURIComponent(_url||document.location);     //参数url设置分享的内容链接|默认当前页location，可选参数
        _shareUrl += '&title=' + encodeURIComponent(_title||document.title);    //参数title设置分享的标题|默认当前页标题，可选参数
        _shareUrl += '&source=' + encodeURIComponent(_source||'');
        _shareUrl += '&sourceUrl=' + encodeURIComponent(_sourceUrl||'');
        _shareUrl += '&content=' + 'utf-8';   //参数content设置页面编码gb2312|utf-8，可选参数
        _shareUrl += '&pic=' + encodeURIComponent(_pic||'');  //参数pic设置图片链接|默认为空，可选参数
        window.open(_shareUrl,'_blank');
    }
</script>
