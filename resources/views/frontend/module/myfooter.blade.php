{{--尾部代码--}}
<style>
/*尾部开始*/
.clear-padding{
    padding:0;
}
.clear-padding-row{
    padding-left:0;
    padding-right:0;
}
.clear-padding-col{
    padding-top:0;
    padding-bottom:0;
}
.section10{
{{--background: url('{{URL::asset("images/footer.jpg")}}');--}}
background-size:100% 100%;
width:100%;
height:auto;
margin-top:30px;
    /*border:1px solid red;*/

}
.section10 .page{
color:#fff;
float:left;
/*margin-left:160px;*/
margin-top: 20px;
/*border:1px solid red;*/
margin-left: 30px;
}
.section10 .page .page_a{
padding-bottom: 25px;
padding-top: 18px;
list-style-type: none;
margin-left: 120px;

}
.section10 .page .page_a a{
color:#fff;
}
.section10 .page ul li a{
color:#fff;
font-size: 16px;
}
.section10 .page_main{
margin-left: 120px;
}
.section10 .store{
color:#fff;
/*margin-left:360px;*/
margin-top: 38px;
width:300px;
float:left;
height: auto;
/*border: 1px solid red;*/
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
/*border:1px solid red;*/
}
.section10 .contact_p{
/*border:1px solid red;*/
padding-left: 30px;
}
.section10 .contact .contact_box{
width:250px;
height: 70px;
/*border:1px solid red;*/
margin-left: 44%;
padding-top: 20px;
}
.section10 .contact .contact_box  .box_img,.box_main{
float:left;
}
.section10 .contact .contact_box .box_main{
float:left;
margin-left: 15px;
}
.section10 .contact img{
width:38px;height: 35px;
}
.footer1{
    /*border:1px solid red;*/
color:#fff;
margin-top: 10px;

}
.section10 .mobile_store{
    width:110%;
    height:auto;
    /*border:1px solid red;*/
    margin: 32px auto;
}
.section10 .mobile_store div:nth-of-type(1){
    color:#fff;
}
.section10 .mobile_store  div{
    display: inline;
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
@media screen and (max-width:1600px){
    .section10{
        margin-top: 0px;
    }
.section10 .contact{
/*margin-left: 30%;*/
width:450px;
color:#fff;
float:left;
/*margin-left:80px;*/
margin-top: 50px;
/*border:1px solid red;*/
}
.section10 .contact_p{
/*border:1px solid red;*/
margin-left: 30%;
text-align: left;
}
.section10 .contact .contact_box{
width:250px;
height: 70px;
/*border:1px solid red;*/
margin-left: 36%;
padding-top: 20px;
}
}
@media screen and (max-width:1366px) {
    .section10{
        margin-top: -20px;
    }
.section10 .contact .contact_box{
width:250px;
height: 70px;
/*border:1px solid red;*/
margin-left: 30%;
padding-top: 20px;
}
}
@media screen and (max-width:1280px){
.section10 .contact{
/*margin-left: 30%;*/
width:300px;
color:#fff;
float:left;
/*margin-left:80px;*/
margin-top: 50px;
/*border:1px solid red;*/
}
.section10 .contact_p{
/*border:1px solid red;*/
margin-left: 30%;
text-align: left;
}
.section10 .contact .contact_box{
width:250px;
height: 70px;
/*border:1px solid red;*/
margin-left: 36%;
padding-top: 20px;
}
}
/*尾部结束*/
@media screen and (max-width:1024px)and (min-width:768px){
    .clear-padding{
        padding:0;
    }
    .clear-padding-row{
        padding-left:0;
        padding-right:0;
    }
    .clear-padding-col{
        padding-top:0;
        padding-bottom:0;
    }
    /*手机尾部*/
    .section10 .footer1{
        font-size: 12px;
        /*-webkit-transform: scale(0.7);*/
        /*-moz-transform: scale(0.7);*/
        /*-o-transform: scale(0.7);*/
        /*transform: scale(0.7);*/
        /*margin-top: 10px;*/
        margin: 10px auto;
        width:100%;
        /*border:1px solid red;*/
    }
    .section10{
        {{--background: url('{{URL::asset("images/footer.jpg")}}');--}}
       background-size:100% 100%;
        width:100%;
        /*height:200px;*/
        margin-top:20px;
        /*border:1px solid red;*/

    }
    .section10 .text-center{
        width:90%;
        /*border:1px solid red;*/
    }
    .section10 .row{
        width:300px;
        /*border:1px solid red;*/
    }
    /*.section10 .store{*/
        /*position:relative;*/
        /*!*border: 1px solid red;*!*/
        /*padding-left: 30%;*/
        /*width:90%;*/
        /*!*margin: 10px auto;*!*/
    /*}*/
    /*.section10 img{*/
        /*width:38px;*/
        /*height: 38px;*/
    /*}*/
    /*.section10 .store p,div{*/
    /*float:left;*/
    /*}*/
    /*.section10 .store ul:first-child{*/
        /*margin-left: 36px;*/
    /*}*/
    /*.section10 .store  a{*/
        /*display: none;*/
    /*}*/
    /*.section10 div{*/
        /*float:left;margin-left: 8px;*/
    /*}*/
    /*.section10 .taobao img{*/
        /*margin-top: -25px;*/
    /*}*/
    /*.section10 .pinduoduo img{*/
        /*margin-top: -6px;*/
        /*margin-right: 10px;*/
    /*}*/
    /*.section10 .weixin img{*/
        /*margin-top: -6px;*/
    /*}*/
    /*手机尾部结束*/
}
@media screen and (max-width:750px) {
    .clear-padding{
        padding:0;
    }
    .clear-padding-row{
        padding-left:0;
        padding-right:0;
    }
    .clear-padding-col{
        padding-top:0;
        padding-bottom:0;
    }
/*手机尾部*/
    .section10{
        margin-top: 20px;
        width:100%;
        height: 160px;
        position:relative;
    }

.section10 .footer1{
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    margin: 0px auto;
    margin-top: 100px;
    /*width:100%;*/
    /*height: 120px;*/
    font-size: 10px;
    /*-webkit-transform: scale(0.7);*/
    /*-moz-transform: scale(0.7);*/
    /*-o-transform: scale(0.7);*/
    /*transform: scale(0.7);*/
    /*margin-top: 10px;*/
    width:100%;
    height: auto;
    /*border:1px solid red;*/
}
.section10 .text-center{
    width:90%;
    /*border:1px solid red;*/
}
    .section10 .row{
        width:385px;
        /*border:1px solid red;*/
    }
.section10 .store{
position:relative;
/*border: 1px solid red;*/
padding-left: 15%;
    width:90%;
    /*margin: 10px auto;*/
}
.section10 img{
width:42px;
height: 42px;
}
/*.section10 .store p,div{*/
/*float:left;*/
/*}*/
.section10 .store ul:first-child{
margin-left: 36px;
}
.section10 .store  a{
display: none;
}
.section10 div{
/*float:left;margin-left: 8px;*/
}
.section10 .taobao img{
margin-top: -25px;
}
.section10 .pinduoduo img{
margin-top: -6px;
margin-right: 10px;
}
.section10 .weixin img{
margin-top: -6px;
}
    /*.section10 div .taobao,.pinduoduo,.weixin{*/
        /*display: inline;*/
    /*}*/
/*手机尾部结束*/
}
</style>

@php
    use App\Models\Article;
    use App\Models\Category;
    use App\Common\MyLibs;
    use App\Models\SiteMessage;
    $site_settings = SiteMessage::getDetails();
    $footer[0]=MyLibs::contentHandlers(Article::getContent("页面模版尾部"));
@endphp

<div class="container-fluid section10 col-md-12 col-sm-12 clear-padding" style="background: url('{{URL::asset("images/frontend/footer.jpg")}}');background-size:100% 100%">
    {{--<div class="row clear-padding">--}}
        <div class="text-center clear-padding">
            <div class="page col-md-4 text-center" id="pageHide">
                <li class="page_a"><a href="/">首页</a></li>
                <ul class="list-unstyled page_main">
                    <li><a href="/compblect">企业文化</a></li>
                    <li ><a href="/prodcenter/1">产品中心</a></li>
                    <li ><a href="/news">新闻资讯</a></li>
                    <li><a href="/teaoillect">油茶文化</a></li>
                    <li ><a href="/shopaccess">购买渠道</a></li>
                    <li ><a href="/contactus">联系我们</a></li>
                </ul>
            </div>
            <div class="store col-md-2 center-block text-center" id="storeHide">
                <div class="store_tile">{{$footer[0]["word"][0]}}</div>
                <div class="taobao ">
                    <img src="{{URL::asset('images/frontend/taobao.png')}}">
                    <a href="{{$footer[0]["link"][0]}}">{{$footer[0]["word"][1]}}</a>
                </div>
                <div class="pinduoduo">
                    <img src="{{URL::asset('images/frontend/pinduoduo.png')}}">
                    <a href="{{$footer[0]["link"][1]}}">{{$footer[0]["word"][2]}}</a>
                </div>
                <div class="weixin ">
                    <img src="{{URL::asset('images/frontend/weixin.png')}}">
                    <a href="{{$footer[0]["link"][2]}}">{{$footer[0]["word"][3]}}</a>
                </div>
            </div>
            <div class="contact col-md-5 text-center" id="contactHide">
                <p class="contact_p">{{$footer[0]["word"][4]}}</p>
                <div class="contact_box">
                    <div class="box_img">
                        <img src="{{URL::asset('images/frontend/tel.png')}}">
                    </div>
                    <div class="box_main">
                        {{--<div>{{$footer[0]["word"][12]}}</div>--}}
                        <div>{{$site_settings["phone"]}}</div>
                        <div>{{$footer[0]["word"][5]}}</div>
                    </div>
                </div>
                <div class="contact_box">
                    <div class="box_img">
                        <a href="tel:{{$site_settings["phone"]}}"><img src="{{URL::asset('images/frontend/phone.png')}}"></a>
                    </div>
                    <div class="box_main">
                        <div>{{$footer[0]["word"][6]}}</div>
                        <div>{{$footer[0]["word"][7]}}</div>
                    </div>
                </div>
        </div>
            <div class="mobile_store center-block" id="mStore">
                <div class="store_tile">{{$footer[0]["word"][0]}}</div>
                <div> <img src="{{URL::asset('images/frontend/taobao.png')}}"></div>
                <div> <img src="{{URL::asset('images/frontend/pinduoduo.png')}}"></div>
                <div> <img src="{{URL::asset('images/frontend/weixin.png')}}"></div>
            </div>
        <div class="footer1  text-center clear-padding col-md-12 clear-padding-col">
            <p>{{$site_settings["name"]."版权所有2019 | 服务热线:".$site_settings["phone"]}}</p>
            <p>{{"地址:".$site_settings["address"]." | 邮箱:".$site_settings["email"]}}</p>
        </div>
    {{--</div>--}}
</div>
</div>
<script>
    var width = window.screen.width;
    var pageDiv = document.getElementById("pageHide");
    var contactDiv = document.getElementById("contactHide");
    var storeDiv = document.getElementById("storeHide");
    var mstore = document.getElementById("mStore");
    mstore.style.display="none";
    if(width<=750) {
        mstore.style.display = "block";
        pageDiv.style.display = "none";
        storeDiv.style.display = "none";
        contactDiv.style.display = "none";
    }
    if(width>=768 && width<=1024){
        mstore.style.display="block";
        pageDiv.style.display = "none";
        storeDiv.style.display = "none";
        contactDiv.style.display = "none";
        console.log("8888")
    }
    function wechatCodeShow(){
        $(".bds_weixin").bind({
            mouseover:function(){
                $(".wechat-share").css("display","block");
            },
            mouseout:function(){
                $(".wechat-share").css("display","none");
            }
        });
    }

</script>