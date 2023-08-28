<div class="search-form-container">
    <form action="" class="search-form" onsubmit="exchange_filters(this, '{{ route('exchange', [], true) }}'); return false;">
        <x-inputs.inputselect 
            class="small" 
            name="cityfrom" 
            :items="$cities" 
            label="Город вылета:" 
            placeholder="Город вылета" 
            type="text"  
        />

        <x-inputs.inputselect 
            class="medium" 
            name="cityto" 
            :items="$countries" 
            label="Куда:" 
            placeholder="Страна" 
            type="text"  
        />

        <x-inputs.date 
            label="Дата начала тура:" 
            placeholder="Дата 1" 
            checkbox="+- 2 дня"
            :dateFrom="$dateFrom"
            :dateTo="$dateTo"
            :checked="$checkedDate"
        />

        <x-inputs.inputselect 
            class="154"
            name="night" 
            :items="$nigths" 
            label="К-во ночей:" 
            placeholder="К-во ночей:" 
            type="text" 
            checkbox="+- 2 ночи" 
            :checked="$checkedNight"
        />

        <x-inputs.inputprice 
            label="Бюджет (валюта грн ₴):" 
            placeholder1="0" 
            placeholder2="1500000" 
            checkbox="+- 100₴"
            :checked="$checkedPrice"
            :priceFrom="$priceFrom"
            :priceTo="$priceTo"
        />

        <x-inputs.button type="submit" class="green height">
            Поиск
        </x-inputs.button>
    </form>
</div>

@desktopcss
<style>

    .search-form-container {
        padding: 25px 20px;
        background: var(--color-main-white);
        width: 100%;
        border-radius: 8px;
        height: 151px;
    }

    .search-form {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

</style>

@mobilecss

<style>

</style>

@endcss

@startjs
<script>

    async function exchange_filters(form, route) {
        
        event.preventDefault()

		city_from = form.querySelector('input[name="cityfrom"]').getAttribute('data-id')
		country_to = form.querySelector('input[name="cityto"]').getAttribute('data-id')
		date_from = form.querySelector('input[name=startDate]').value;
		date_to = form.querySelector('input[name=endDate]').value;
		check_date = 0
		if(form.querySelector('input[name="datecheckbox"]:checked')){
			check_date = 1
		}
        console.log(check_date)
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


        const response = await post(route, {
            city_from,
            country_to,
            date_from,
            date_to,
            nigth,
            price_from,
            price_to,
            check_date,
            check_night,
        }, true, true)

        if (response.success) {
            
            console.log(1)

        } else {


        }

    }

</script>
@endjs