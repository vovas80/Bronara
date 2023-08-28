<div class="exchange-tour-item tour-application">
    <div class="tour-application-inner">

        <div class="tour-application-left">

            <div class="tour-application-left-inner">
                <x-inputs.input-form class="140 color-additional-back-cards" label="Страна прилета:" placeholder="Город вылета:" name="cityfrom" type="text" value="{{$application->country->title}}" readonly/>

                <x-inputs.input-form class="140 color-additional-back-cards" label="Вылет из:" placeholder="Страна, курорт:" name="cityto" type="text" value="{{$application->city->title}}" readonly/>

                <x-inputs.input-form class="121 color-additional-back-cards" label="Кол-во ночей" placeholder="Кол-во ночей" name="days" type="text" value="{{$application->nigth->title}}" readonly/>

                <div class="tour-application-left-date">
                    <svg class="tour-application-left-date-svg" width="13" height="39" viewBox="0 0 13 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.5" y1="12.5" x2="6.5" y2="22.5" stroke="#274158" stroke-linecap="round" stroke-dasharray="2 2"/>
                        <circle cx="6.5" cy="4.5" r="3.5" stroke="#0274CA" stroke-width="2"/>
                        <path d="M6.66355 26.0027C4.02352 25.9137 1.85547 28.0273 1.85547 30.6473C1.85547 33.6206 4.70885 35.7785 6.30817 38.8817C6.38937 39.0393 6.61619 39.0395 6.69767 38.8819C8.14448 36.0896 10.6173 34.2172 11.0756 31.5272C11.55 28.7435 9.48575 26.0979 6.66355 26.0027ZM6.50269 33.0815C5.15831 33.0815 4.06844 31.9916 4.06844 30.6473C4.06844 29.3029 5.15834 28.213 6.50269 28.213C7.84707 28.213 8.93697 29.3029 8.93697 30.6473C8.93697 31.9916 7.84707 33.0815 6.50269 33.0815Z" fill="#274158"/>
                    </svg>
                    <div class="tour-application-left-dates">
                        <div class="text-additional-semibold tour-application-left-date-text">{{date("d.m.Y", strtotime($application->data_from))}}</div>
                        <div class="text-additional-semibold tour-application-left-date-text">{{date("d.m.Y", strtotime($application->data_to))}}</div>
                    </div>   
                </div>
                <x-inputs.input-form class="140 color-additional-back-cards" label="Кол-во туристов" placeholder="Кол-во туристов" name="counter" type="text" value="2 взр. 2 дет." readonly/>
                
                <x-inputs.input-form class="140 color-additional-back-cards" label="Цена:" placeholder="Цена:" name="price" type="text" value="{{$application->price_to}}" readonly/>

            </div>
            
            <div class="tour-application-left-bottom">
                <div class="text-extra-semibold tour-application-left-text">Заявка создана {{$application->date}}. Турист: {{$application->tourist->name}}</div>
                <div class="text-extra-undrln-semibold tour-application-left-btn" onclick="show_wish(this)">
                    Дополнительные пожелания
                </div>
            </div>
        </div>

        <div class="tour-application-right">

            <div class="tour-application-right-hotels">

                @foreach($application->hotels as $hotel)
                    <div class="text-additional-semibold tour-application-right-hotel">{{$hotel->title_hotel}}</div>
                @endforeach 
                <div class="text-additional-semibold tour-application-right-hotel">({{ implode(', ', $application->cities->pluck('title')->all()) }})</div>
            </div>

            @if($isWorking)
                <x-inputs.button class="blue tour-application" action="open_choose_tour()"> 
                    Подобрать тур
                </x-inputs.button> 

            @else
                <x-inputs.button class="blue tour-application" action="in_work({{$application->id}},' {{ route('in-work-application', [], false) }}'); return false;">
                    В работу
                </x-inputs.button>         
            @endif

            @if($isWorking)

                <div class="tour-application-right-options">

                    <div class="text-main-semibold tour-application-right-options-text">Туры: 3/3</div>
                    <x-exchange.showtours>
                        Показать туры
                    </x-exchange.showtours> 

                </div>
            @endif

            
        </div>  

    </div>

    <div class="tour-application-wish">
        <x-inputs.input-form class="100 tour-application-input color-additional-back-cards" label="Дополнительные пожелания:" placeholder="Дополнительные пожелания:" name="desire" type="text" value="{{$application->info}}" readonly/>
    </div>

    <x-touragent.tours />

</div>

@desktopcss
<style>

    .tour-application {
        margin-bottom: 10px;
        background: var(--color-additional-back-cards);
        border: 1px solid var(--color-main-blue);
        box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.06);
        border-radius: 10px;
        padding: 11px 20px;
    }

    .tour-application-inner {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .tour-application-left {
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }

    .tour-application-left-inner {
        display: flex;
        justify-content: space-between;
    }

    .tour-application-left .inputform-block {
        margin-right: 5px;
        margin-bottom: 8px;
    }

    .tour-application-left-date {
        display: flex;
        justify-content: space-between;
        width: 121px;
        background: var(--color-additional-back-cards);
        border: 1px solid var(--color-main-stroke);
        border-radius: 8px; 
        padding: 20px 15px 8px;
        margin: 0 8px 8px 0;
    }

    .tour-application-left-date-svg {
        width: 13px;
        height: 39px;
        flex-shrink: 0;
    }

    .tour-application-left-dates {
        margin-top: -4px;
        height: 48px;
    }

    .tour-application-left-date-text:not(:last-child) {
        margin-bottom: 4px;
    }

    .tour-application-left-text {
        color: var(--color-main-gray-text);
    }

    .tour-application-right {
        width: 243px;
        flex-shrink: 0;
    }

    .tour-application-right-hotels {
        margin-bottom: 18px;
    }

    .tour-application-right-hotel {
        margin-bottom: 6px;
        text-align: right;
    }

    .tour-application-right-options {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-top: 10px;
    }

    .tour-application-right-btns {
        display: flex;
        margin: 0 0 8px auto;
        width: 92%;
        justify-content: space-between;
    }

    .tour-application-right-btn {
        text-align: right;
        cursor: pointer;
        color: var(--color-main-blue);
        transition: .3s;
    }

    .tour-application-right-btn:hover {
        color: var(--color-hover-blue);
    }

    .tour-application-left-inner .inputform-block {
        background: var(--color-additional-back-cards);
    }

    .btn-tour-application {
        width: 80%;
        margin: 0 0 0 auto;
    }

    .tour-application-left-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .tour-application-left-btn {
        width: auto;
        color: var(--color-main-blue);
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .tour-application-left-btn.active::after {
        margin-top: 3px;
        transform: rotate(225deg);
    }

    .tour-application-left-btn::after {
        display: block;
        content: "";
        width: 4px;
        height: 4px;
        border: 1px solid var(--color-main-blue);
        transform: rotate(45deg);
        border-left: none;
        border-top: none;
        margin-left: 10px;
        margin-top: -3px;
        transition: transform 0.4s ease;
    }

    .tour-application-left-btn:hover {
        color: var(--color-hover-blue);
    }

    .tour-application-left-btn:hover:after {
        border: 1px solid var(--color-hover-blue);
        border-left: none;
        border-top: none;
    }

    .tour-application-wish:not(.active) {
        display: none;
    }

    .tour-application-wish {
        margin-top: 15px;   
        overflow: hidden;
        transition: .3s ease-in-out;
    }


</style>
@mobilecss
@endcss

@startjs
<script>

    function show_wish(elm) {
        elm.classList.toggle('active')

        // elm.closest('.exchange-tour-item').classList.toggle('active')

        let parent = elm.closest('.tour-application')
        let container = parent.querySelector('.tour-application-wish')

        if (!container.classList.contains('active')) {

            parent.classList.add('active')

            container.classList.add('active')

            container.style.height = 'auto'
            let height = container.clientHeight + 'px'
            container.style.height = '0px'
            
            setTimeout(function () {
                container.style.height = height
            }, 0)

        } else {

            container.style.height = '0px'

            parent.classList.remove('active')

            container.addEventListener('transitionend', function () {
                container.classList.remove('active')
            }, {
                once: true
            })
        }
    }

    async function in_work(id_application, route) {

        const response = await post(route, {
            id_application
        }, true, true)

        if (response.success) {
            location.assign("http://bronara.da/touragent/working");
        } else {
            
        }

    }
    
</script>
@endjs