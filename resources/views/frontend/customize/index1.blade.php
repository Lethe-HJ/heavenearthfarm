<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<link rel="icon" href="../../favicon.ico">--}}
    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <!--<link href="../static/common/css/index.css" rel="stylesheet">-->
    <link href="{{URL::asset('css/index2.css')}}" rel="stylesheet">
</head>

<body>

<!-- area0 start ------------------------------------------------------------------------------------------------------->
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #fff">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a><img src="{{URL::asset($data["area0"]["pict"])}}"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                @foreach($data["area0"]["categr_li"] as $categry)
                    <li ><a href="">{{$categry}}</a></li>
                @endforeach
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- area0 end -->


<!-- area1 start -------------------------------------------------------------------------------------------------------->
<div id="myCarousel" class="carousel slide">

    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        @php
            $slideshow = $data["area1"]["slideshow"]->data;
        @endphp
        @if(isset($slideshow) && $slideshow)
            @for($i=0;$i<count($slideshow);$i++)
                @if($i!=0)
                    <div class="item">
                @else
                    <div class="item active">
                @endif
                        <a target="{{$slideshow[$i]->target}}" href="{{$slideshow[$i]->link}}">
                            <img src="{{ storage_image_url($slideshow[$i]->image) }}">
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
<div class="container secition1">
    <div class="row">
        @foreach($data["area2"] as $item)
        <dl class="col-md-4 col-xs-4 text-center">
            <dd><img alt="" class="section1_img" src="{{URL::asset($item["img"])}}"/></dd>
            <dt class="section1_word">{{$item["word"]}}</dt>
        </dl>
        @endforeach
    </div>
</div>
<!-- area2 end-->

<!-- area3 start ------------------------------------------------------------------------------------------------------->
<div class="container-fluid secition2 ">
    <img alt="" class="img-responsive center-block" src="{{URL::asset($data["area3"]["img"]["title"])}}">
</div>
<div class="container-fluid secition3 ">
    <div class="section2_left col-md-6 col-xs-12">
        <img alt="" class="img-responsive section3_img" src="{{URL::asset($data["area3"]["img"]["leftimg"])}}">
    </div>
    <div class="section3_right col-md-6 col-xs-12 center-block">
        <img alt="" class="section3_right_img"src="images/frontend/line.png">
        <h1>{{$data["area3"]["word"][0]}}</h1>
        <div class="secition3_word">{{$data["area3"]["word"][1]}}</div>
    </div>
    <div class="xiangqin"><img src="{{URL::asset('images/frontend/xiangqing.png')}}"></div>
</div>
<!-- area3 end -->

<!-- area4 start ------------------------------------------------------------------------------------------------------->
<div class="secition4 ">
    <img alt="" class="section4_img" src="{{URL::asset($data["area4"]["img"]["top"])}}">
</div>
<div class="container-fluid secition5 ">
    <img alt="" class="img-responsive center-block" src="{{URL::asset($data["area4"]["img"]["middle"])}}">
</div>
<div class="container-fluid section6" style="background: url('{{URL::asset($data["area4"]["img"]["button_bg"])}}')">
    <div class="scarcity col-md-4 col-xs-4">
        <p class="P_title">{{$data["area4"]["threemix"]["word"][0][0]}}</p>
        <div class="underLine"></div>
        <img src="{{URL::asset($data["area4"]["threemix"]["img"][0])}}">
        <p class="P_word">{{$data["area4"]["threemix"]["word"][0][1]}}</p>
    </div>
    <div class="native col-md-4 col-xs-4">
        <p class="P_title">{{$data["area4"]["threemix"]["word"][1][0]}}</p>
        <div class="underLine"></div>
        <img src="{{URL::asset($data["area4"]["threemix"]["img"][1])}}">
        <p class="P_word">{{$data["area4"]["threemix"]["word"][1][1]}}</p>
    </div>
    <div class="healthy col-md-4 col-xs-4">
        <p class="P_title">{{$data["area4"]["threemix"]["word"][2][0]}}</p>
        <div class="underLine"></div>
        <img src="{{URL::asset($data["area4"]["threemix"]["img"][2])}}">
        <p class="P_word">{{$data["area4"]["threemix"]["word"][2][1]}}</p>
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
</body>
</html>
