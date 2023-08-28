<div class="user-booking">

    @if($booking->count() == 0)
        <div class="h4 touragent-booking-searhform-title">Туры не найдены :(</div>
    @else

        <div class="user-booking-maintours">

            <x-exchange.header-maintours />

            @foreach ($booking as $item)
                
                <x-exchange.maintour isUserBooking :tour="$item->tour" :booking="$item" />

            @endforeach

        </div>

    @endif
</div>


@desktopcss
<style>

    .user-booking .exchange-listtours-tours-title {
        color: var(--color-main-gray-text);
    }

    .user-booking {
        padding-bottom: 100px;
    }

    .btn-usertours {
        margin-top: 30px;
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

