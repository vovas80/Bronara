<div class="application" id="{{$application->id}}">

    <div class="application-left">

        <x-inputs.input-form 
            class="140" 
            label="Город вылета:" 
            placeholder="Город вылета:" 
            name="cityfrom" 
            type="text" 
            value="{{$application->city->title}}" 
            readonly
        />
        <x-inputs.input-form 
            class="340" 
            label="Страна, курорт:" 
            placeholder="Страна, курорт:" 
            name="cityto" 
            type="text" 
            value="{{ implode(', ', array_merge([$application->country->title], $application->cities->pluck('title')->all())) }}" 
            readonly
        />
        <div class="application-left-date">
            <svg class="application-left-date-svg" width="13" height="39" viewBox="0 0 13 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="6.5" y1="12.5" x2="6.5" y2="22.5" stroke="#274158" stroke-linecap="round" stroke-dasharray="2 2"/>
                <circle cx="6.5" cy="4.5" r="3.5" stroke="#0274CA" stroke-width="2"/>
                <path d="M6.66355 26.0027C4.02352 25.9137 1.85547 28.0273 1.85547 30.6473C1.85547 33.6206 4.70885 35.7785 6.30817 38.8817C6.38937 39.0393 6.61619 39.0395 6.69767 38.8819C8.14448 36.0896 10.6173 34.2172 11.0756 31.5272C11.55 28.7435 9.48575 26.0979 6.66355 26.0027ZM6.50269 33.0815C5.15831 33.0815 4.06844 31.9916 4.06844 30.6473C4.06844 29.3029 5.15834 28.213 6.50269 28.213C7.84707 28.213 8.93697 29.3029 8.93697 30.6473C8.93697 31.9916 7.84707 33.0815 6.50269 33.0815Z" fill="#274158"/>
            </svg>
            <div class="application-left-dates">
                <div class="text-additional-semibold application-left-date-text">{{date("d.m.Y", strtotime($application->data_from))}}</div>
                <div class="text-additional-semibold application-left-date-text">{{date("d.m.Y", strtotime($application->data_to))}}</div>
            </div>   
        </div>
        <x-inputs.input-form class="153" label="Кол-во туристов" placeholder="Кол-во туристов" name="counter" type="text" value="2 взр. 2 дет." readonly/>
        <x-inputs.input-form class="121" label="Кол-во ночей" placeholder="Кол-во ночей" name="days" type="text" value="{{$application->nigth->title}}" readonly/>
        <x-inputs.input-form class="140" label="Цена:" placeholder="Цена:" name="price" type="text" value="до {{$application->price_to}} грн" readonly/>
        <x-inputs.input-form class="754" label="Дополнительные пожелания:" placeholder="Дополнительные пожелания:" name="desire" type="text" value="{{$application->info}}" readonly/>

        <div class="text-extra-semibold application-left-text">Заявка создана {{$application->date}}</div>

    </div>

    <div class="application-right">

        <div class="application-right-hotels">

            @foreach ($application->hotels as $hotel)
                <div class="text-additional-semibold application-right-hotel">{{$hotel->title_hotel}}</div>
            @endforeach
        
        </div>

        <div class="application-right-wrapper">

            <div class="application-right-btns">

                <x-inputs.button class="blue application">
                    Редактировать
                </x-inputs.button>

                <x-inputs.button class="blue-empty with-svg" action="delete_application(this, '{{ route('delete-application') }}', ''); return false;">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.66667 6.49984V4.33317C8.66667 3.13655 9.63672 2.1665 10.8333 2.1665H15.1667C16.3633 2.1665 17.3333 3.13655 17.3333 4.33317V6.49984M3.25 6.49984H22.75H3.25ZM5.41667 6.49984V21.6665C5.41667 22.8632 6.38672 23.8332 7.58333 23.8332H18.4167C19.6133 23.8332 20.5833 22.8632 20.5833 21.6665V6.49984H5.41667Z" stroke="#0274CA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.166 11.9165V18.4165" stroke="#0274CA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.834 11.9165V18.4165" stroke="#0274CA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </x-inputs.button>                    

            </div>

            @if($application->show == 0)
                <div class="text-extra-undrln-semibold application-right-btn" onclick="noshow_application_for_touragent(this, '{{ route('show-application-for-touragent') }}', ''); return false;">Приостановить получение заявок</div>
            @else
                <div class="text-extra-undrln-semibold application-right-btn" onclick="noshow_application_for_touragent(this, '{{ route('show-application-for-touragent') }}', ''); return false;">Получение заявок приостановлено</div>
            @endif
        </div>

    </div>

</div>

@desktopcss
<style>

</style>
@mobilecss
@endcss

@startjs
<script>

    async function delete_application(elm, route ){
        id_application = elm.closest('.application').id

        const response = await post(route, {
            id_application
        }, true, true)

        if (response.success){
            location.reload();

        } else {
        }

        return false;
    }

    async function noshow_application_for_touragent(elm, route ){
        id_application = elm.closest('.application').id

        const response = await post(route, {
            id_application
        }, true, true)

        if (response.success){
            location.reload();
        } else {

        }

        return false;
    }
    
</script>
@endjs