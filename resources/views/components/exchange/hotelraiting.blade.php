<div class="hoteltaiting">

    <div class="text-main-semibold hoteltaiting-title">{{$fields['title']}}:</div>

    <div class="hoteltaiting-circles">

        @for ($i=0; $i < 5; $i++)

            @if ($i < $hotelraiting/2)
                <div class="hoteltaiting-circle active"></div>
            @else
                <div class="hoteltaiting-circle"></div>
            @endif

        @endfor
       
    </div>

</div>

@desktopcss

<style>

    .hoteltaiting {
        display: flex;
        align-items: center;
        margin-bottom: 4px;
    }

    .hoteltaiting-title {
        color: var(--color-main-gray-text);
        margin-right: 5px;
    }

    .hoteltaiting-circles {
        display: flex;
    }

    .hoteltaiting-circle {
        width: 14px;
        height: 14px;
        border: 1px solid var(--color-main-blue);
        border-radius: 50%; 
        position: relative;
    }

    .hoteltaiting-circle.active::after {
        position: absolute;
        content: "";
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: var(--color-main-blue);
        width: 8px;
        height: 8px;
        border-radius: 50%; 
    }


</style>

@mobilecss

<style>
    
</style>

@endcss

