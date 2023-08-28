<div class="touragent-booking-tours">
    <div class="touragent-booking-tours-header">
        <div class="text-button-additional touragent-booking-tours-header-title  touragent-booking-tours-header-title-id">ID тура</div>
        <div class="text-button-additional touragent-booking-tours-header-title  touragent-booking-tours-header-title-fio">ФИО</div>
        <div class="text-button-additional touragent-booking-tours-header-title  touragent-booking-tours-header-title-tour">Тур</div>
        <div class="text-button-additional touragent-booking-tours-header-title  touragent-booking-tours-header-title-ticket">Билеты</div>
        <div class="text-button-additional touragent-booking-tours-header-title  touragent-booking-tours-header-title-ticket">Ваучер</div>
        <div class="text-button-additional touragent-booking-tours-header-title  touragent-booking-tours-header-title-ticket">Страховка</div>
        <div class="text-button-additional touragent-booking-tours-header-title  touragent-booking-tours-header-title-ticket">Памятка</div>
        <div class="text-button-additional touragent-booking-tours-header-title  touragent-booking-tours-header-title-ticket">Договор</div>
        <div class="text-button-additional touragent-booking-tours-header-title  touragent-booking-tours-header-title-visa">Виза</div>
        <div class="text-button-additional touragent-booking-tours-header-title  touragent-booking-tours-header-title-pay">Оплата</div>
    </div>

    @foreach ($booking as $item)
        <x-touragent.booking-tour :tour="$item->tour" :date="$item->date" :tourist="$item->tourist" :id="$item->id" :document="$item" :isSold="$isSold" />
    @endforeach

</div>

@desktopcss
<style>
    .touragent-booking-tours {
        margin-bottom: 100px;
    }

    .touragent-booking-tours-header {
        width: 100%;
        display: flex;
        margin-bottom: 9px;
        padding: 0 20px;
    }

    .touragent-booking-tours-header-title {
        color: var(--color-main-gray-text);
        width: 85px;
        margin-right: 27px;
    }

    .touragent-booking-tours-header-title-id {
        width: 115px;
        margin-right: 5px;
    }

    .touragent-booking-tours-header-title-fio {
        width: 128px;
        margin-right: 29px;
    }

    .touragent-booking-tours-header-title-tour {
        width: 95px;
        margin-right: 26px;
    }

    .touragent-booking-tours-header-title-visa {
        width: 103px;
        margin-right: 15px;
    }

    .touragent-booking-tours-header-title-pay {
        width: 90px;
        margin-right: 0;
    }

</style>
@mobilecss
@endcss