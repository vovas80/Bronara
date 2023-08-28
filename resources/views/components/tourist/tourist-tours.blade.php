<div class="usertours">

    @if($tours->count() == 0)
        <div class="h4 touragent-booking-searhform-title">Туры не найдены :(</div>
    @else

        <x-inputs.checkbox>
            Хочу получать на почту уведомления о турах
        </x-inputs.checkbox>

        <div class="citytabs">
            <div class="text-additional-semibold citytab @if($activecountry == "") active @endif" data-value="" onclick="sort_country(this)">Все страны</div>
            @foreach ($tourist->countries as $country)
                <div class="text-additional-semibold citytab @if($activecountry == $country->slug) active @endif" onclick="sort_country(this)" data-value="{{$country->slug}}">{{$country->title}}</div>
            @endforeach
        </div>   

        <div class="usertours-maintours">
            <x-exchange.header-maintours />

            <div class="usertours-maintours-content" id="usertours-maintours-content">
                <x-exchange.maintours isUserTours :tours="$tours"/>
            </div>

            @if($tours->count() > 10)   
                <x-inputs.button onclick="tourist_showmore(this)" class="blue-empty center main fit-content usertours">
                    Показать еще мои туры
                </x-inputs.button>
            @endif

        </div>
    @endif

</div>

@desktopcss
<style>
    .exchange-tour-item.active-tourist {
        display: flex;
    }

    .exchange-tour-item {
        display: none;
    }

    .usertours-maintours .exchange-listtours-tours-title {
        color: var(--color-main-gray-text);
    }

    .citytabs {
        display: flex;
        margin: 30px 0;
        flex-wrap: wrap;
        width: 100%;
    }

    .citytab {
        width: 190px;
        height: 34px;
        background: var(--color-main-white);
        border: 1px solid #E5EFFF;
        box-sizing: border-box;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        margin-right: 10px;
        align-items: center;
        transition: .3s;
        cursor: pointer;
    }

    .citytab:hover {
        color: var(--color-main-blue);
    }

    .citytab.active {
        border: 1px solid var(--color-main-blue);
        color: var(--color-main-blue);
    }

    .usertours-maintours {
        padding-bottom: 100px;
    }

    .usertours-maintours .exchange-tour-item {
        border: 1px solid var(--color-main-blue);
    }

    .btn-usertours {
        margin-top: 30px;
    }

    .btn-usertours.none {
        display: none;
    }

</style>
@mobilecss
<style>
    
</style>
@endcss


@startjs
<script>
    function tourist_showmore(btn) {

        parent = btn.parentElement; 

        parent.style.height = "auto";

        let items = parent.querySelectorAll('.exchange-tour-item:not(.active-tourist)')

        var counter = 0;

        items.forEach(element => {
            if(counter == 10) return
            element.classList.add('active-tourist')
            counter++;
            
        });

        if(items.length <= 10) {
            btn.classList.add('none')
        }


    }

    async function sort_country(elm, loader = true) {

        for (var item of document.querySelectorAll('.citytab')) {
            item.classList.remove('active');
        }

        elm.classList.add('active')

        let href = '';

        const country = $('.citytabs .active').data('value')

        if (country){

            href+=  '?country=' + country;
            
        }

        href = document.location.protocol + '//' + document.location.hostname + document.location.pathname + href

        const response = await post(href, {}, true, loader)

        if (response.success){

            $('#usertours-maintours-content').html(response.data.html)

            history.pushState({}, '', href)

        } else {

        }

        return false
}
</script>
@endjs

