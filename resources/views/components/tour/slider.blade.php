<div class="slider-wrapper">
    

    <div class="product-slider-block">
        <div class="slider" id="slider">
            @foreach($images as $image)
                <div><img src="{{$image}}" class="slider-image" alt=""></div>
            @endforeach
        </div>
    </div>

    <div class="product-nav-slider-block">
        <div class="navslider" id="navslider" >
            @foreach($images as $image)
                <div><img src="{{$image}}" class="navslider-image" alt=""></div>
            @endforeach
           
        </div>
        <div class="arrows">
            <div class="arrow arrow-prev">
                <svg class="arrow-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.87056 7.56099L11.2587 0.172821C11.5033 -0.0633983 11.8931 -0.0566162 12.1293 0.187973C12.3597 0.426573 12.3597 0.80482 12.1293 1.04338L5.17641 7.99627L12.1293 14.9492C12.3697 15.1896 12.3697 15.5793 12.1293 15.8197C11.8889 16.0601 11.4991 16.0601 11.2587 15.8197L3.87056 8.43155C3.6302 8.19111 3.6302 7.80139 3.87056 7.56099Z" fill="#8992A5"/>
                </svg>            
            </div>
            <div class="arrow arrow-next">
                <svg class="arrow-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.1294 7.56099L4.74127 0.172821C4.49668 -0.0633983 4.10692 -0.0566162 3.87071 0.187973C3.64026 0.426573 3.64026 0.80482 3.87071 1.04338L10.8236 7.99627L3.87071 14.9492C3.63034 15.1896 3.63034 15.5793 3.87071 15.8197C4.11115 16.0601 4.50086 16.0601 4.74127 15.8197L12.1294 8.43155C12.3698 8.19111 12.3698 7.80139 12.1294 7.56099Z" fill="#8992A5"/>
                </svg>
            </div>                              
        </div>
    </div>

</div>


@desktopcss

<style>
    /* Slider */
    .slick-slider
    {
        position: relative;

        display: block;
        box-sizing: border-box;

        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;

        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list
    {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus
    {
        outline: none;
    }

    .slick-list.dragging
    {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list
    {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track
    {
        position: relative;
        top: 0;
        left: 0;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .slick-track:before,
    .slick-track:after
    {
        display: table;
        content: '';
    }

    .slick-track:after
    {
        clear: both;
    }

    .slick-loading .slick-track
    {
        visibility: hidden;
    }

    .slick-slide
    {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }

    [dir='rtl'] .slick-slide
    {
        float: right;
    }

    .slick-slide img
    {
        display: block;
    }

    .slick-slide.slick-loading img
    {
        display: none;
    }

    .slick-slide.dragging img
    {
        pointer-events: none;
    }

    .slick-initialized .slick-slide
    {
        display: block;
    }

    .slick-loading .slick-slide
    {
        visibility: hidden;
    }

    .slick-vertical .slick-slide
    {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

</style>

<style>

    .slider-wrapper {
        width: 390px !important;
        border-radius: 10px;
        overflow: hidden;
    }

    .product-slider-block{
        width: 390px;
    }
    
    .product-nav-slider-block{
        width: 390px;
        height: 50px;
        position: relative;
        margin-top: 10px;
    }

    .navslider .slick-list {
        padding: 0 50px 0 0 !important;
    }

    .navslider {
        flex-shrink: 0;
        width: 325px;
        margin: 0 auto;
    }

    .navslider .slick-track{
        display: flex;
    }

    .navslider .slick-slide{
        width: auto !important;
    }

    .navslider-image {
        width: 50px !important;
        height: 50px;
        object-fit: cover;
        margin-right: 5px;
        border-radius: 5px;
    }

    .slick-current .navslider-image {
        border: 1px solid var(--color-second);
    }

    .slider{
        width: 390px;
    }

    .slider-image {
        width: 390px !important;
        height: 390px;
        border-radius: 10px;
        object-fit: contain;
    }
    
    .arrow-prev, 
    .arrow-next {
        width: 28px;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        transition: .3s;
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 3px;
        user-select: none;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .arrow-next {
        left: auto;
        right: 0;
    }

    .arrow-svg {
        width: 12px;
        height: 12px;
    }

    .arrow-svg path {
        fill: var(--color-main-gray-text);
        transition: .3s;
    }

    .arrow:hover path{
        fill: var(--color-main-blue);
    }

    .navslider .slick-current {
        opacity: .5;
    }

</style>

@mobilecss
<style>
    /* Slider */
    .slick-slider
    {
        position: relative;

        display: block;
        box-sizing: border-box;

        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;

        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list
    {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus
    {
        outline: none;
    }

    .slick-list.dragging
    {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list
    {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track
    {
        position: relative;
        top: 0;
        left: 0;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .slick-track:before,
    .slick-track:after
    {
        display: table;
        content: '';
    }

    .slick-track:after
    {
        clear: both;
    }

    .slick-loading .slick-track
    {
        visibility: hidden;
    }

    .slick-slide
    {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }

    [dir='rtl'] .slick-slide
    {
        float: right;
    }

    .slick-slide img
    {
        display: block;
    }

    .slick-slide.slick-loading img
    {
        display: none;
    }

    .slick-slide.dragging img
    {
        pointer-events: none;
    }

    .slick-initialized .slick-slide
    {
        display: block;
    }

    .slick-loading .slick-slide
    {
        visibility: hidden;
    }

    .slick-vertical .slick-slide
    {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

</style>

<style>

    .slider-wrapper {
        position: relative;
    }

    .product-slider-block{
        width: 100%;
    }

    .navslider {
        display: none
    }

    .slider{
        width: 100%;
    }

    .slider-image {
        width: 290px !important;
        height: 290px;
        object-fit: contain;
    }
    
    .arrow-prev, 
    .arrow-next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 12px;
        transform: translateY(-50%);
        transition: .3s;
    }

    .arrow {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--color-white);
        border-radius: 50%;
    }

    .arrow-next {
        left: auto;
        right: 12px;
    }

    .arrow-svg {
        width: 9px;
        height: 9px;
    }

    .arrow-svg path {
        fill: var(--color-text);
        transition: .3s;
    }


</style>
@endcss


@startjs

<script>

   

    //     (function($){

    //     if (screen.width > 900){
    //         $('.slider').slick({
    //             slidesToShow: 1,
    //             slidesToScroll: 1,
    //             fade: false,
    //             arrows: true,
    //             dots: false,
    //             prevArrow: '.product-nav-slider-block .arrow-prev',
    //             nextArrow: '.product-nav-slider-block .arrow-next',
    //             asNavFor: '.navslider',
    //         });

    //         $('.navslider').slick({
    //             infinity: true,
    //             fade: false,
    //             slidesToShow: 1,
    //             slidesToScroll: 1,
    //             speed: 400,
    //             arrows: false,
    //             asNavFor: '.slider',
    //             centerMode: true,
    //             variableWidth: true,
    //             focusOnSelect: true,
    //         });
    //     } else {
    //         $('.slider').slick({
    //             slidesToShow: 1,
    //             slidesToScroll: 1,
    //             fade: false,
    //             arrows: true,
    //             dots: false,
    //             prevArrow: '.product-nav-slider-block .arrow-prev',
    //             nextArrow: '.product-nav-slider-block .arrow-next',
    //         });
    //     }


    //     })(jQuery)

    // }

    // function change_slider(elm) {

    //     var id = $(elm).data('id')

    //     // $('.map').removeClass('active')
    //     // $('.map[data-id="' + id + '"]').addClass('active')

    //     reinit_slick(id)
    // }


</script>

@endjs