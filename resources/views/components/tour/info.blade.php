<div class="info">
    <div class="text-main-semibold info-id">ID тура <span>{{$tour->number}}</span></div>
    <div class="h2 info-title">{{$tour->title_hotel}}</div>

    <div class="info-marks">

        <x-tour.stars :stars="$tour->stars->number"/>
        <div class="text-additional-semibold info-mark">{{$tour->rating}}</div>
        <div class="text-additional-regular info-mark-reviews">{{$tour->reviews->count()}} отзывов</div>

    </div>

    <div class="text-additional-semibold info-location">
        <svg class="info-location-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1359_3449)">
            <path d="M8.20182 0.00333482C4.95254 -0.106167 2.28418 2.49519 2.28418 5.71972C2.28418 9.37922 5.79604 12.035 7.76443 15.8544C7.86437 16.0484 8.14353 16.0486 8.24381 15.8547C10.0245 12.418 13.0679 10.1135 13.632 6.80266C14.216 3.37656 11.6753 0.120438 8.20182 0.00333482ZM8.00384 8.71572C6.34922 8.71572 5.00784 7.37431 5.00784 5.71972C5.00784 4.06514 6.34925 2.72372 8.00384 2.72372C9.65846 2.72372 10.9999 4.06514 10.9999 5.71972C10.9999 7.37431 9.65846 8.71572 8.00384 8.71572Z" fill="#92A8B8"/>
            </g>
            <defs>
            <clipPath id="clip0_1359_3449">
            <rect width="16" height="16" fill="white"/>
            </clipPath>
            </defs>
        </svg>   
        {{$tour->cityto->country->title}}, {{$tour->cityto->title}}
    </div>

    <div class="info-characteristics">
        <x-tour.characteristics :characteristics="$tour->characteristics"/>
    </div>

    <x-tour.basicinfo :tour="$tour"/>
</div>

@desktopcss
<style>

</style>
@mobilecss
@endcss