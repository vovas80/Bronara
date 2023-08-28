<div class="index-tour-item">

    <div class="index-tour-item-info">

        <img class="index-tour-img" src="{{$tour->photo}}" alt="">

        <div class="index-tour-item-info-inner">

            <div class="h4 index-tour-item-info-inner-title">{{$tour->title}}</div>

            <x-tour.stars :stars="$tour->stars->number"/>

            <div class="index-tour-item-info-inner-characteristics">
                <x-tour.characteristics :characteristics="$tour->characteristics"/>
            </div>

        </div>

        <div class="index-tour-item-options">
            
            <x-tour.favourite :id="$tour->id" :saved="$tour->saved"/>

            <x-tour.rating :touragent="$tour->touragent"/>

        </div>
    </div>

    <div class="index-tour-btn">
        
        <div class="text-additional-semibold index-tour-btn-price">{{$tour->price}} {{Region::getCurrency()}}</div>

        <div class="index-tour-btns">

            <x-inputs.button class="text-button-additional blue-empty index-tour" onclick="open_tour(this, '{{ route('get-tour', [], true) }}'); return false;" data-slug="{{$tour->slug}}">
                {{$fields['more']}}
            </x-inputs.button>

            <x-inputs.button class="text-button-additional blue index-tour-blue" tooltip="{{$fields['relevance_text']}}">
				{{$fields['relevance']}}
			</x-inputs.button>

        </div>
    </div>
    
</div>

@desktopcss

<style>

    .index-tour-item {
        margin: 0 10px 10px 0;
        background: var(--color-additional-back-cards);
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 10px;
        padding: 15px;
    }

    .index-tour-item-info {
        display: flex;
        width: 100%;
        align-items: flex-start;
        margin-bottom: 10px;
    }

    .index-tour-item-info .favourite {
        margin-bottom: 33px;
    }

    .index-tour-img {
        width: 130px;
        height: 130px;
        object-fit: cover;
        border-radius: 10px;
        margin-right: 20px;
    }

    .index-tour-item-info-inner {
        width: 250px;
        margin-right: 40px;
    }

    .index-tour-item-info-inner-title {
        margin-bottom: 5px;
        height: 48px;
        overflow: hidden;
    }

    .index-tour-item-info-inner-characteristics {
        display: flex;
        flex-wrap: wrap;
    }

    .index-tour-btn {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    .index-tour-btns {
        display: flex;
    }

    .btn-index-tour {
        padding: 12px 14px;
        margin-right: 10px;
    }

    .btn-index-tour-blue {
        padding: 5px 25px;
        width: 146px;
    }

</style>

@mobilecss

<style>

</style>
@endcss