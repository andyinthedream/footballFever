<div class="layui-tab">
    <ul class="layui-tab-title">
        <li class="layui-this" style="width: 33%">賽程</li>
        <li style="width: 33%">球員榜</li>
        <li style="width: 33%">統計</li>
    </ul>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            @include('messages._rank')
            @include('messages._rank')
            {{--@include('plugin.carousel')--}}
            @include('messages._message_box')
            @include('messages._message_board')
            @include('messages._message_board')

            @include('messages._msg')
        </div>
        <div class="layui-tab-item">
            @include('plugin.carousel')
        </div>
        <div class="layui-tab-item">
            統計
        </div>
    </div>
</div>

<script>
    //注意：选项卡 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
</script>