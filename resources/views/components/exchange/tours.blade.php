<div class="othertours">
    <div class="othertours-titles">
        <div class="text-extra-regular othertours-title">Об отеле</div>
        <div class="text-extra-regular othertours-title data-tour">Даты тура</div>
        <div class="text-extra-regular othertours-title nutrition">Питание</div>
        <div class="text-extra-regular othertours-title accommodation">Размещение</div>
        <div class="text-extra-regular othertours-title count-tourist">К-во тур.</div>
        <div class="text-extra-regular othertours-title price">Цена тура</div>
        <div class="text-extra-regular othertours-title agent">Турагент</div>
    </div>

    @foreach ($tours as $key => $tour)
         <x-exchange.tour :tour="$tour" :active="$key <= 5 ? true : false"/>
    @endforeach

    @if($tours->count() > 5)
        <x-inputs.button onclick="showmore(this)" class="blue-empty center main fit-content">
            Показать еще
        </x-inputs.button>
    @endif

</div>

@desktopcss

<style>
    .othertours {
        background: var(--color-main-back);
        border-radius: 8px;
        padding: 15px 30px;
        overflow: hidden;
        margin-top: 10px;
        transition: .3s ease-in-out;
    }

    .othertours:not(.active) {
        display: none;
    }

    .othertours-titles {
        display: flex;
        padding: 0px 15px 5px 15px;
    }

    .othertours-title {
        color: var(--color-main-gray-text);
        width: 370px;
        margin-right: 50px;
    }

    .othertours-title.data-tour {
        width: 106px;
        margin-right: 20px;
    }

    .othertours-title.nutrition {
        width: 95px;
        margin-right: 20px;
    }

    .othertours-title.accommodation {
        width: 95px;
        margin-right: 20px;
    }

    .othertours-title.count-tourist {
        width: 80px;
        margin-right: 20px;
    }

    .othertours-title.price {
        width: 106px;
        margin-right: 20px;
        padding-left: 20px;
    }

    .othertours-title.agent {
        width: 75px;
        margin-right: 0px;
    }

    .btn.none {
        display: none !important;
    }


</style>

@mobilecss
@endcss

@startjs
<script>

function showmore(btn) {

    parent = btn.parentElement; 
    parent.style.height = "auto";

    let items = parent.querySelectorAll('.othertour-item:not(.active)')
   
    var counter = 0;
    
    items.forEach(element => {
        if(counter == 5) return
        element.classList.add('active')
        counter++;
        
    });

    if(items.length <= 5) {
        btn.classList.add('none')
    }

    
}

</script>
@endjs