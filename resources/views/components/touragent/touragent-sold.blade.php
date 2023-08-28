<div class="touragent-booking">

    @if($booking->count() == 0)
        <div class="h4 touragent-booking-searhform-title">Забронированные туры не найдены :(</div>
    @else

        <div class="touragent-booking-searhform">
            <div class="h4 touragent-booking-searhform-title">Поиск по:</div>
            <x-touragent.searchform />
            <x-inputs.button class="yellow touragent-booking" data-sold="true" onclick="sort_booking_by_departure(this, '{{ route('sort-booking-by-departure', [], true) }}'); return false;">
                Сортировать по дате вылета
            </x-inputs.button>
        </div>

        <div class="touragent-booking-tours-wrapper" id="touragent-booking-tours-wrapper">
            <x-touragent.booking-tours :booking="$booking" isSold/>
        </div>

    @endif
</div>


@desktopcss
<style>

    .touragent-booking-searhform {
        margin-bottom: 40px;
    }

    .touragent-booking-searhform-title {
        margin-bottom: 10px;
    }

    .btn-touragent-booking {
        margin: 0 0 0 auto;
        width: 300px;
    }
</style>
@mobilecss
@endcss

@startjs
<script>
    async function sort_booking_by_departure (btn, route) {

        let isSold = btn.getAttribute('data-sold')
        const response = await post(route, {
            isSold,
        }, true, true)

        if (response.success) {

            $("#touragent-booking-tours-wrapper").html(response.data.html)

        } else {

        }
    }
</script>
@endjs