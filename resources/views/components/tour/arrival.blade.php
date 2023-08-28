<div class="arrival-block">
    <div class="text-main-semibold arrival-text">{{$title}}</div>
    <div class="text-additional-semibold arrival-time">{{date("H:i:s", strtotime($datefrom))}}</div>
    <div class="text-additional-regular arrival-data">{{date("d.m.Y", strtotime($datefrom))}}</div>
    <div class="text-additional-regular arrival-city">{{$cityfrom}}</div>
    <img class="arrival-svg" src="/photos/1/basic/arrival.svg" alt="">
    <div class="text-additional-semibold arrival-time">{{date("H:i:s", strtotime($dateto))}}</div>
    <div class="text-additional-regular arrival-data">{{date("d.m.Y", strtotime($dateto))}}</div>
    <div class="text-additional-regular arrival-city">{{$cityto}}</div>
</div>

@desktopcss
<style>    
</style>

@mobilecss
@endcss