<div class="othertour-item @if($active) active @endif">
    <div class="othertour-item-info">
        <div class="othertour-item-info-first">

            <div class="othertour-item-info-about">

                <div class="othertour-item-info-about-titles">

                    <div class="text-main-semibold othertour-item-info-about-title">
                        {{ $tour->title }}
                        <span class="text-main-semibold othertour-item-info-about-title-span">
                            {{$tour->stars->number}}
                            <svg class="star-svg" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z" fill="#FFAB00"/>
                            </svg>
                        </span>
                    </div>

                </div>


                <div class="othertour-item-info-about-decs">
                    <x-tour.characteristics :characteristics="$tour->characteristics" />
                </div>
            </div>

        </div>

        <div class="othertour-item-info-second">

            <div class="othertour-item-info-second-top">


                <div class="othertour-item-info-data">

                    <div class="text-main-semibold othertour-item-info-data-item">{{date("d.m", strtotime($tour->data_departure))}} - {{date("d.m.y", strtotime($tour->data_arrival))}}</div>
                    <div class="text-main-semibold othertour-item-info-data-text">{{$tour->night->title}}</div>

                </div>

                <div class="othertour-item-info-nutrition">
                    <div class="text-main-semibold othertour-item-info-nutrition-text">{{$tour->food->title}}</div>
                </div>

                <div class="othertour-item-info-accommodation">
                    <div class="text-main-semibold othertour-item-info-accommodation-text">{{$tour->accommodation->title}}</div>
                </div>

                <div class="othertour-item-info-count">
                    <div class="text-main-semibold othertour-item-info-count-text">{{$tour->people->title}} {{$fields['abbr_people']}}<p> @if(!empty($tour->child->title)){{$tour->child->title}} {{$fields['abbr_child']}}@endif</div>
                </div>

                <div class="othertour-item-info-price">
                    <div class="text-extra-semibold othertour-item-info-price-title">{{$fields['buy']}}</div>
                    <div class="h4 othertour-item-info-count-text">{{round($tour->price)}} {{Region::getCurrency()}}</div>
                </div>

                <div class="othertour-item-info-agent">
                    <x-tour.rating :touragent="$tour->touragent" />
                </div>

            </div>

            <div class="othertour-item-info-second-bottom">

                <x-inputs.button class="text-button-additional blue-empty othertour" onclick="open_tour(this, '{{ route('get-tour', [], true) }}'); return false;" data-slug="{{$tour->slug}}">
                    Подробнее о туре
                </x-inputs.button>

                <div class="othertour-item-info-second-bottom-option">
                    <x-tour.favourite :id="$tour->id" :saved="$tour->saved" />

                    <x-inputs.button class="text-button-additional blue othertour-blue" tooltip="Для запроса подтверждения актуальности тура сохраните его в избранное">
                        Запросить актуальность
                    </x-inputs.button>


                </div>

            </div>

        </div>

    </div>
    
</div>

@desktopcss

<style>

    .othertour-item {
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 10px;
        display: none;
    }

    .othertour-item.active {
        display: block;
    }

    .othertour-item-info {
        display: flex;
        width: 100%;
        align-items: flex-start;
    }

    .othertour-item-info .favourite {
        margin-right: 10px;
    }

    .othertour-img {
        width: 130px;
        height: 130px;
        object-fit: cover;
        border-radius: 10px;
        margin-right: 20px;
    }

    .othertour-item-info-first {
        width: 370px;
        margin-right: 50px;
    }

    .othertour-item-info-about-title {
        margin-bottom: 10px;
    }

    .othertour-item-info-about-title-span {
        color: var(--color-main-gray-text);
        display: inline-flex;
        align-items: center;
    }

    .star-svg {
        width: 16px;
        height: 16px;
    }

    .exchange-address {
        color: var(--color-main-gray-text);
        margin-bottom: 5px;
    }

    .othertour-item-info-about-decs {
        display: flex;
        flex-wrap: wrap;
    }

    .othertour-btn {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    .othertour-btns {
        display: flex;
    }

    .btn-othertour {
        padding: 12px 14px;
        margin-right: 10px;
    }

    .btn-othertour-blue {
        padding: 5px 25px;
        width: 146px;
    }

    .othertour-item-info-second {
        display: flex;
        flex-direction: column;
    }

    .othertour-item-info-second-top {
        display: flex;
        margin-bottom: 13px;
    }

    .othertour-item-info-second-bottom {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    .othertour-item-info-second-bottom-option {
        display: flex;
        align-items: center;
    }

    .othertour-item-info-data {
        width: 106px;
        margin-right: 20px;
    }

    .othertour-item-info-data-inner {
        display: flex;
    }

    .othertour-item-info-nutrition {
        width: 95px;
        margin-right: 20px;
    }

    .othertour-item-info-accommodation {
        width: 95px;
        margin-right: 20px;
    }

    .othertour-item-info-price {
        width: 106px;
        margin-right: 20px;
        transition: .3s;
        text-align: center;
        cursor: pointer;
        border: 1px solid var(--color-main-white);
        width: 106px;
        height: 45px;
        box-sizing: border-box;
        border-radius: 8px;
    }

    .othertour-item-info-price-title {
        color: var(--color-main-gray-text);
        transition: .3s;
    }

    .othertour-item-info-price:hover {
        border: 1px solid var(--color-main-green);
    }

    .othertour-item-info-count {
        width: 80px;
        margin-right: 18px;
    }

    .othertour-item-info-count-text {
        transition: .3s;
    }

    .othertour-item-info-price:hover .othertour-item-info-price-title,
    .othertour-item-info-price:hover .othertour-item-info-count-text {
        color: var(--color-main-green);
    }


    .othertour-item-info-agent {
        width: 75px;
    }

    .othertour-item-info-agent .rating{
        flex-direction: row-reverse;
    }

    .othertour-item-info-agent .rating-text{
        margin-right: 0;
        margin-left: 10px;
    }

    .othertour-item-info-agent .rating-text-title {
        margin-bottom: 0;
        display: none;
    }

    .othertour-item-info-agent .rating-text-number {
        color: var(--color-main-blue);
    }

    .othertour-item-info-agent .rating-img {
        width: 30px;
        height: 30px;
    }


</style>

@mobilecss

<style>

</style>
@endcss