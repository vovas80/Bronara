<div class="hotel-advantage">

    <img src="{{$advantage->icon}}" class="hotel-advantage-svg" alt="">

    <div class="hotel-advantage-desc">

        <div class="text-main-regular hotel-advantage-desc-title">{{$advantage->title}}</div>

        
        <div class="text-additional-semibold hotel-advantage-desc-text">{!!Field::enter_to_br($advantage->description)!!}</div>
    
    </div>

</div>

@desktopcss

<style>

</style>

@mobilecss

@endcss