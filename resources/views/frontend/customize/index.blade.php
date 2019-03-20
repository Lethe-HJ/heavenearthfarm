@extends('frontend::layouts.app')

{{--@section('title', $title = '首页' )--}}
{{--@section('description', config('system.common.basic.description',''))--}}
{{--@section('keywords', config('system.common.basic.index_keywords',''))--}}

{{--@section('breadcrumb')--}}
{{--@endsection--}}

@section('content')


    <div class="layui-container">

        <div class="fly-panel">
            @php
                $block = get_block("2018_03_04_224524_index_slide_block");
            @endphp
            <div class="layui-carousel fly-promo" id="promo">
                @if(isset($block->data) && $block->data)
                    <div carousel-item="">
                        @foreach($block->data as $item)
                            <div><a target="{{$item->target}}" href="{{$item->link}}"><img src="{{ storage_image_url($item->image) }}"></a></div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <div class="layui-row layui-col-space15">
            <div class="layui-col-md6">
                @php
                    $block = get_block("2018_03_04_234810_index_enterprise_news_block");
                    $category_id = get_block_params($block->content, 'category_id', 0);
                @endphp
                <div class="fly-panel">
                    <div class="fly-panel-title fly-filter"> <a>{{$block->title}}</a></div>
                    @if(isset($block->data) && $block->data)
                        <dl class="fly-panel fly-list-one">
                            @foreach($block->data as $item)
                                <dd><a href="{{$item->getLink(2,$category_id)}}">{{$item->title}}</a><span><i class="iconfont icon-liulanyanjing"></i> {{$item->views}}</span></dd>
                            @endforeach
                        </dl>
                    @endif
                    <div style="text-align: center">
                        <div class="laypage-main"> <a href="{{$block->more_link}}" class="laypage-next">{{$block->more_title}}</a> </div>
                    </div>
                </div>


            </div>

            <div class="layui-col-md6">
                @php
                    $block = get_block("2018_03_04_235036_index_case_news_block");
                    $category_id = get_block_params($block->content, 'category_id', 0);
                @endphp
                <div class="fly-panel">
                    <div class="fly-panel-title fly-filter"> <a>{{$block->title}}</a></div>
                    @if($block->data)
                        <dl class="fly-panel fly-list-one">
                            @foreach($block->data as $item)
                                <dd><a href="{{$item->getLink(3,$category_id)}}">{{$item->title}}</a><span><i class="iconfont icon-liulanyanjing"></i> {{$item->views}}</span></dd>
                            @endforeach
                        </dl>
                    @endif
                    <div style="text-align: center">
                        <div class="laypage-main"> <a href="{{$block->more_link}}" class="laypage-next">{{$block->more_title}}</a> </div>
                    </div>
                </div>
            </div>

            {{--<div class="layui-col-md4">--}}
            {{--@include('frontend::layouts._side')--}}
            {{--</div>--}}


        </div>
        <div>
        <h1>{{$data["area0"]["content0"]}}</h1>
        <h1>{{$data["area0"]["content1"]}}</h1>
        @foreach ($data["categr_li"] as $title)
        <h1>{{$title}}</h1>
        @endforeach
        <img src="{{URL::asset('images/logo.png')}}">
        <img src="{{URL::asset('images/logo.png')}}">
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        layui.use(['carousel', 'form'], function(){
            var carousel = layui.carousel
                ,form = layui.form;

            //图片轮播
            carousel.render({
                elem: '#promo'
                ,width: '100%'
                ,height: '22rem'
                ,interval: 5000
            });

            //事件
            carousel.on('change(test4)', function(res){
                console.log(res)
            });

            var $ = layui.$, active = {
                set: function(othis){
                    var THIS = 'layui-bg-normal'
                        ,key = othis.data('key')
                        ,options = {};

                    othis.css('background-color', '#5FB878').siblings().removeAttr('style');
                    options[key] = othis.data('value');
                    ins3.reload(options);
                }
            };

            //监听开关
            form.on('switch(autoplay)', function(){
                ins3.reload({
                    autoplay: this.checked
                });
            });

            $('.demoSet').on('keyup', function(){
                var value = this.value
                    ,options = {};
                if(!/^\d+$/.test(value)) return;

                options[this.name] = value;
                ins3.reload(options);
            });

            //其它示例
            $('.demoTest .layui-btn').on('click', function(){
                var othis = $(this), type = othis.data('type');
                active[type] ? active[type].call(this, othis) : '';
            });
        });
    </script>
@endsection