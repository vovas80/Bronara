<div class="request-form-container">

    <form 
        class="request-form" 
        @if (Auth::guard('tourist')->user())
            onsubmit="send_application(this, '{{ route('send-application', [], false) }}'); return false;"
        @else
            onsubmit="exchange_application(this, '{{ route('exchange', [], true) }}'); return false;"
        @endif
    >
     
        <div class="request-form-item">
            <x-inputs.inputselect 
                class="small" 
                name="cityfrom" 
                :items="$cities = $cities" 
                label="{{$fields['city_from']}}" 
                placeholder="{{$fields['city_from']}}" 
                type="text" 
                required 
            />

            <x-inputs.inputselect 
                class="348" 
                name="cityto" 
                :items="$countries = $countries" 
                label="Куда:" 
                placeholder="Страна" 
                type="text" 
                required 
            />

            <x-inputs.date 
                label="Дата начала тура:" 
                placeholder="Дата 1" 
                checkbox="+- 2 дня"
                class="index"
                required
            />

            <x-inputs.inputselect 
                class="154"
                name="night" 
                :items="$nigths = $nigths" 
                label="К-во ночей:" 
                placeholder="К-во ночей:" 
                type="text" 
                checkbox="+- 2 ночи"
                required 
            />

            <x-inputs.people label="К-во туристов:" placeholder="0" class="140" />

            <x-inputs.button type="submit" class="green height indexform">
                Запросить тур
            </x-inputs.button>

        </div>

        <div class="request-form-item">

            <x-inputs.inputlist 
                name="curort" 
                :items="$resorts = $resorts" 
                label="Курорты:" 
                placeholder="Введите название курорта" 
                type="text"

            />

            <x-inputs.inputlist 
                name="hotel" 
                class="hotel"
                :items="$hotels = $hotels" 
                label="Отели:" 
                placeholder="Введите название отеля" 
                type="text"
                isSelect
            />

            <div class="request-form-item-inner">

                <x-inputs.inputprice 
                    label="Бюджет ({{ $fields['currency']->currency }} {{ $fields['currency']->currency_icon }}):" 
                    placeholder1="0" 
                    placeholder2="1500000" 
                    checkbox="+- 100{{ $fields['currency']->currency_icon }}"
                />

                <x-inputs.select 
                    class="index"
                    label="Состав тура:"
                    title="Состав тура" 
                    name="packages" 
                    :items="$packages = $packages" 
                />

            </div>

            <x-inputs.input-form placeholder="Введите свои пожелания" label="Дополнительные пожелания:" name="info" textarea />
        </div>

        <div class="message main-text color-red error">{{ $fields['error'] }}</div>
        <div class="message main-text color-blue success">{{ $fields['success'] }}</div>    

    </form>
</div>

@desktopcss
<style>

    .request-form-container {
        padding: 25px 20px;
        background: var(--color-main-white);
        width: 100%;
        margin-top: 25px;
        border-radius: 8px;
        height: 440px;
    }

    .request-form {
        display: flex;
        flex-direction: column;
    }

    .request-form-item:not(:last-child) {
        margin-bottom: 22px;
    }

    .request-form-item {
        display: flex;
        width: 100%;
        justify-content: space-between;
    }

    .request-form-item-inner {
        width: 260px;
    }

    .request-form-item .inputform-block {
        margin-bottom: 0;
    }

    .select-select-index {
        width: 260px;
        margin-top: 10px;
    }

    .select-label-select-index {
        margin-bottom: 5px;
    }

    .message {
        display: none;
        margin: 0 auto;
        margin-top: 10px;
        text-align: left !important;
    }

    .message.color-blue {
        color: var(--color-main-blue) !important;
    }

</style>

@mobilecss

<style>

</style>

@endcss

@startjs
<script>

    function exchange_application(form, route) {
        
        event.preventDefault()

		city_from = form.querySelector('input[name="cityfrom"]').getAttribute('data-id')
		country_to = form.querySelector('input[name="cityto"]').getAttribute('data-id')
		date_from = form.querySelector('input[name=startDate]').value;
		date_to = form.querySelector('input[name=endDate]').value;
		check_date = 0
		if(form.querySelector('input[name="datecheckbox"]:checked')){
			check_date = 1
		}
		night = form.querySelector('input[name="night"]').getAttribute('data-id')
		check_night = 0
		if(form.querySelector('input[name="nightcheckbox"]:checked')){
			check_night = 1
		}
		price_from = form.querySelector('input[name="pricefrom"]').value
		price_to = form.querySelector('input[name="priceto"]').value
		check_price = 0
		if(form.querySelector('input[name="pricecheckbox"]:checked')){
			check_price = 1
		}

        route = city_from ? route + '/city-from--' + city_from : route
        route = country_to ? route + '/country-to--' + country_to : route
        route = date_from ? route + '/date-from--' + date_from : route
        route = date_to ? route + '/date-to--' + date_to : route
        route = check_date ? route + '/check-date--' + check_date : route
        route = night ? route + '/night--' + night : route
        route = check_night ? route + '/check-night--' + check_night : route
        route = price_from ? route + '/price-from--' + price_from : route
        route = price_to ? route + '/price-to--' + price_to : route
        route = check_price ? route + '/check-price--' + check_price : route

        window.location.href = route
    }

    async function send_application(form, route) {

        event.preventDefault()

        city_from = form.querySelector('input[name="cityfrom"]').getAttribute('data-id')
        country_to = form.querySelector('input[name="cityto"]').getAttribute('data-id')
        data_from = form.querySelector('input[name=startDate]').value;
        data_to = form.querySelector('input[name=endDate]').value;
        check_data = 0
        if(form.querySelector('input[name="datecheckbox"]:checked')){
            check_data = 1
        }
        nigth = form.querySelector('input[name="night"]').getAttribute('data-id')
        check_nigth = 0
        if(form.querySelector('input[name="nightcheckbox"]:checked')){
            check_nigth = 1
        }
        stars = form.querySelector('input[name="stars"]').value
        check_hotel = 0
        if(form.querySelector('input[name="starscheckbox"]:checked')){
            check_hotel = 1
        }
        food = form.querySelector('input[name="eat"]').value
        check_food = 0
        if(form.querySelector('input[name="eatcheckbox"]:checked')){
            check_food = 1
        }
        price_from = form.querySelector('input[name="pricefrom"]').value
        price_to = form.querySelector('input[name="priceto"]').value
        check_price = 0
        if(form.querySelector('input[name="pricecheckbox"]:checked')){
            check_price = 1
        }
        package_tour = form.querySelector('input[name="packages"]').value
        info = form.querySelector('textarea[name="info"]').value

        curorts = []
        form.querySelectorAll('input[name="curort"]').forEach(element => {
            if(element.checked){
                curorts.push(element.value)
            }
        });

        curorts_all = 0
        if(form.querySelector('input[name="curortall"]:checked')){
            curorts_all = 1
        }

        hotels = []
        form.querySelectorAll('input[name="hotel"]').forEach(element => {
            if(element.checked){
                hotels.push(element.value)
            }
        });


        const response = await post(route, {
            city_from,
            country_to,
            data_from,
            data_to,
            nigth,
            stars,
            food,
            price_from,
            price_to,
            package_tour,
            info,
            check_data,
            check_nigth,
            check_hotel,
            check_food,
            check_price,
            curorts,
            curorts_all,
            hotels

        }, true, true)

        if (response.success) {
            
            form.reset()

            if(response.data.modal) {

                document.getElementById('modal-notification-application').classList.add('active')
            } 
            else if(response.data.reload) {
                window.location.href = response.data.link;

            } else {
                
                form.querySelectorAll('.message').forEach(element => {
                    element.style.display = 'none';
                });
                form.querySelector('.message.success').style.display = 'block';
            }

        } else {

            form.querySelectorAll('.message').forEach(element => {
                element.style.display = 'none';
            });
            form.querySelector('.message.error').style.display = 'block';
        }
}

</script>
@endjs