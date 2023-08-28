<div class="user-document">

    @if($booking->count() == 0)
        <div class="h4 touragent-booking-searhform-title">Туры не найдены :(</div>
    @else

    <div class="user-document-maintours">

        <x-exchange.header-maintours />

        @foreach ($booking as $item)
            <x-exchange.maintour isUserDocument :tour="$item->tour" :booking="$item" />

        @endforeach
    </div>

    @endif

</div>


@desktopcss
<style>

    .user-document .exchange-listtours-tours-title {
        color: var(--color-main-gray-text);
    }

    .user-document {
        padding-bottom: 100px;
    }

    .btn-usertours {
        margin-top: 30px;
    }

    .exchange-tour-item-info .btn-blue {
        margin-right: 0; 
    }

</style>
@mobilecss
<style>
    
</style>
@endcss


@startjs
<script>
    
</script>
@endjs

