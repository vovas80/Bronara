<div class="rating">

    <div class="rating-text">
        <div class="text-extra-regular rating-text-title">{{$fields['rating']}}</div>
        <div class="text-additional-semibold rating-text-number">{{$touragent->mark}}/10</div>
    </div>

    @if(empty($touragent->photo))
        <img class="rating-img" src="/photos/1/icons/user.svg" alt="">
    @else
        <img class="rating-img" src="{{$touragent->photo}}" alt="">
    @endif

</div>

@desktopcss

<style>

    .rating {
        display: flex;
        align-items: center;
        float: right;
    }

    .rating-text {
        margin-right: 10px;
    }

    .rating-text-title {
        color: var(--color-main-gray-text);
        margin-bottom: 8px;
    }

    .rating-img {
        width: 47px;
        height: 47px;
        border-radius: 50%;
        background: var(--color-main-white);
    }

</style>

@mobilecss

<style>

</style>
@endcss