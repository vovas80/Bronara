<div class="touragent-booking-tour">

    <div class="touragent-booking-tour-id">
        <div class="text-main-semibold touragent-booking-tour-id-title">{{$tour->number}}</div>
        <x-inputs.button class="blue watch" onclick="open_touragent_tour(this, '{{ route('get-booking-tour', [], true) }}'); return false;" data-slug="{{$tour->slug}}" data-booking="{{$id}}">
            Посмотреть бронь
        </x-inputs.button>
        <div class="text-extra-semibold touragent-booking-tour-id-text">Запрос от {{date("d.m.Y", strtotime($date))}}</div>
    </div>

    <div class="touragent-booking-tour-fio">
        <div class="text-main-semibold touragent-booking-tour-fio-title">{{$tourist->name}}</div>
    </div>

    <div class="touragent-booking-tour-tour">
        <div class="text-main-semibold touragent-booking-tour-tour-title">{{$tour->cityto->country->title}}</div>
        <div class="text-main-semibold touragent-booking-tour-tour-data">{{date("d.m", strtotime($tour->data_departure))}} - {{date("d.m", strtotime($tour->data_arrival))}}</div>
        <div class="text-main-semibold touragent-booking-tour-tour-title">{{round($tour->price)}} {{Region::getCurrency()}}</div>
    </div>

    <x-inputs.download-file name="ticket" idbooking="{{$id}}" :document="$document->ticket" :isSold="$isSold">
        Загрузить билеты
    </x-inputs.download-file>
    
    <x-inputs.download-file name="voucher" idbooking="{{$id}}" :document="$document->voucher" :isSold="$isSold">
        Загрузить ваучер
    </x-inputs.download-file>

    <x-inputs.download-file name="insurance" idbooking="{{$id}}" :document="$document->insurance" :isSold="$isSold">
        Загрузить страховку
    </x-inputs.download-file>

    <x-inputs.download-file name="memo" idbooking="{{$id}}" :document="$document->memo" :isSold="$isSold">
        Загрузить памятку
    </x-inputs.download-file>

    <x-inputs.download-file name="treaty" idbooking="{{$id}}" :document="$document->treaty" :isSold="$isSold">
        Загрузить договор
    </x-inputs.download-file>

    
    <div class="touragent-booking-tour-visa">

        <div>
        @foreach ($visa as $item)

            @if (!empty($item->desc))
                <div class="touragent-booking-tour-visa-checkbox">
                    @if($document->id_visa === $item->id) 
                        <x-inputs.radio name="visa-{{$id}}" checked class="visa" title="{{$item->title}}" value="{{$item->id}}" id="visa-{{$id}}-{{$item->id}}" booking="{{$id}}" extratext onclick="change_visa_document(this, '{{ route('change-visa-document', [], false) }}'); return false;" />
                        <x-inputs.button tooltip="{{$item->desc}}" class="info tooltip">
                            <svg class="basicinfo-first-visa-svg" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="7" fill="#0274CA"/>
                                <path d="M6.9977 5.4C7.4177 5.4 7.7577 5.06 7.7577 4.65C7.7577 4.25 7.4177 3.91 6.9977 3.91C6.5777 3.91 6.2477 4.25 6.2477 4.65C6.2477 5.06 6.5777 5.4 6.9977 5.4ZM6.4377 11H7.5577V6.12H6.4377V11Z" fill="white"/>
                            </svg>                    
                        </x-inputs.button>  
                    @else 
                        <x-inputs.radio name="visa-{{$id}}" class="visa" title="{{$item->title}}" value="{{$item->id}}" id="visa-{{$id}}-{{$item->id}}" booking="{{$id}}" extratext onclick="change_visa_document(this, '{{ route('change-visa-document', [], false) }}'); return false;" />
                        <x-inputs.button tooltip="{{$item->desc}}" class="info tooltip">
                            <svg class="basicinfo-first-visa-svg" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="7" fill="#0274CA"/>
                                <path d="M6.9977 5.4C7.4177 5.4 7.7577 5.06 7.7577 4.65C7.7577 4.25 7.4177 3.91 6.9977 3.91C6.5777 3.91 6.2477 4.25 6.2477 4.65C6.2477 5.06 6.5777 5.4 6.9977 5.4ZM6.4377 11H7.5577V6.12H6.4377V11Z" fill="white"/>
                            </svg>                    
                        </x-inputs.button>  
                    @endif 
                </div> 
            @else
                @if($document->id_visa === $item->id) 
                    <x-inputs.radio  name="visa-{{$id}}" checked class="visa" title="{{$item->title}}" value="{{$item->id}}" id="visa-{{$id}}-{{$item->id}}" booking="{{$id}}" extratext onclick="change_visa_document(this, '{{ route('change-visa-document', [], false) }}'); return false;"/>
                @else 
                    <x-inputs.radio  name="visa-{{$id}}" class="visa" title="{{$item->title}}" value="{{$item->id}}" id="visa-{{$id}}-{{$item->id}}" booking="{{$id}}" extratext onclick="change_visa_document(this, '{{ route('change-visa-document', [], false) }}'); return false;"/>
                @endif
            @endif
        @endforeach
        </div>

        <x-inputs.input label="Подача до:" name="document-innings" type="text"  value="{{$document->innings}}" class="touragent-booking" onchange="change_innings_document(this, {{$id}}, '{{ route('change-innings-document', [], false) }}'); return false;"/>


    </div>

    <div class="touragent-booking-tour-pay">

        @if($isSold)
            <div class="text-main-semibold">До {{$document->payment}}</div>
            <div class="text-main-semibold">Остаток {{$document->remainder}}</div>
        @else
            <x-inputs.input label="Оплата до:" name="document-payment" type="text" class="touragent-booking" value="{{$document->payment}}" onchange="change_payment_document(this, {{$id}}, '{{ route('change-payment-document', [], false) }}'); return false;"/>

            <x-inputs.input label="Остаток:" name="document-remainder" type="text" class="touragent-booking" value="{{$document->remainder}}" onchange="change_remainder_document(this, {{$id}}, '{{ route('change-remainder-document', [], false) }}'); return false;"/>
        @endif
    </div>

</div>

@desktopcss
<style>
    .touragent-booking-tour {
        margin-bottom: 10px;
        display: flex;
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.06);
        border-radius: 10px;
        padding: 10px 14px 10px 20px;
    }

    .touragent-booking-tour-id {
        width: 120px;
        margin-right: 0;
    }

    .touragent-booking-tour-id-text {
        color: var(--color-main-gray-text);
        margin-top: 13px;
    }
    
    .touragent-booking-tour-id-title {
        margin-bottom: 10px;
    }

    .touragent-booking-tour-fio {
        width: 128px;
        margin-right: 29px;
    }

    .touragent-booking-tour-tour {
        width: 95px;
        margin-right: 26px;
    }

    .touragent-booking-tour-tour-title {
        margin-bottom: 2px;
    }

    .touragent-booking-tour-tour-data {
        color: var(--color-main-blue);
        margin-bottom: 2px;
    }

    .touragent-booking-tour-visa {
        width: 110px;
        margin-right: 10px;
    }

    .touragent-booking-tour-visa-checkbox {
        display: flex;
        width: 110px;
        justify-content: space-between;
        margin-bottom: 5px;
        align-items: center;
    }

    .touragent-booking-tour-pay {
        width: 90px;
        margin-right: 0;
    }

    .input-wrapper-touragent-booking  {
        width: 90px;
    }

    .input-wrapper-touragent-booking .input-label {
        color: var(--color-main-gray-text);
        margin-bottom: 2px;
    }

    .input-touragent-booking {
        width: 90px;
        height: 20px;
        border: 1px solid var(--color-main-stroke) !important;
        border-radius: 5px;
    }

    .touragent-booking-tour-pay .input-wrapper {
        margin-bottom: 2px;
    }

    .touragent-booking-tour-pay-title {
        margin-bottom: 2px;
    }

    .input-label-touragent-booking {
        font-size: 12px;
        line-height: 16px;
    }
</style>

@mobilecss

@endcss

@startjs
<script>
    async function change_visa_document(radio, route) {
        
        radio.closest('.input-radio').querySelector('input[type="radio"]').setAttribute('checked', 'checked')

        let id_visa = radio.closest('.touragent-booking-tour-visa').querySelector('input[type="radio"]:checked').value
       
        let id_booking = radio.getAttribute('data-booking');     

        const response = await post(route, {
            id_visa,
            id_booking,
        }, true, true)

        if (response.success) {

        } else {

        }
    }
    async function change_innings_document(input, id_booking, route) {
          
        let innings = input.querySelector('input').value
     
        const response = await post(route, {
            innings,
            id_booking,
        }, true, true)

        if (response.success) {

        } else {

        }
    }
    async function change_payment_document(input, id_booking, route) {

        let payment = input.querySelector('input').value

        const response = await post(route, {
            payment,
            id_booking,
        }, true, true)

        if (response.success) {

        } else {

        }
    }
    async function change_remainder_document(input, id_booking, route) {
           
        let remainder = input.querySelector('input').value

        const response = await post(route, {
            remainder,
            id_booking,
        }, true, true)

        if (response.success) {

        } else {

        }
    }
</script>
@endjs