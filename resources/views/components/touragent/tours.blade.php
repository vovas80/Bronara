<div class="othertours">

    <div class="text-additional-semibold working-title">
        Туры:
    </div>

    <div class="working-othertours">
        <div class="working-othertours-titles">

            <div class="text-extra-semibold working-othertours-title">Об отеле</div>
            <div class="text-extra-semibold working-othertours-title departure-arrival">Вылет-прибытие</div>
            <div class="text-extra-semibold working-othertours-title data-tour">Даты тура</div>
            <div class="text-extra-semibold working-othertours-title nutrition">Питание</div>
            <div class="text-extra-semibold working-othertours-title accommodation">Размещение</div>
            <div class="text-extra-semibold working-othertours-title count-tourist">К-во тур.</div>
            <div class="text-extra-semibold working-othertours-title price">Цена тура</div>
            <div class="text-extra-semibold working-othertours-title agent">ID тура</div>

        </div>

        <?php for ($i = 1; $i<=5; $i++) { ?>
            <x-touragent.tour />
        <?php } ?>

        <x-inputs.button onclick="showmore" class="blue-empty center main fit-content">
            Показать еще 5
        </x-inputs.button>

    </div>
</div>

@desktopcss

<style>

    .othertours {
        overflow: hidden;
        margin-top: 10px;
        transition: .3s ease-in-out;
    }

    .working-title {
        margin-bottom: 10px;
        color: var(--color-main-gray-text);
    }

    .working-othertours {
        background: var(--color-main-back);
        border-radius: 8px;
        padding: 15px;
        
    }

    .othertours:not(.active) {
        display: none;
    }

    .working-othertours-titles {
        display: flex;
        padding: 0px 15px 5px 15px;
    }

    .working-othertours-title {
        color: var(--color-main-gray-text);
        width: 345px;
        margin-right: 50px;
    }

    .working-othertours-title.departure-arrival {
        width: 129px;
        margin-right: 12px;
    }

    .working-othertours-title.data-tour {
        width: 91px;
        margin-right: 12px;
    }

    .working-othertours-title.nutrition {
        width: 80px;
        margin-right: 12px;
    }

    .working-othertours-title.accommodation {
        width: 80px;
        margin-right: 12px;
    }

    .working-othertours-title.count-tourist {
        width: 52px;
        margin-right: 10px;
    }

    .working-othertours-title.price {
        width: 90px;
        margin-right: 12px;
    }

    .working-othertours-title.agent {
        width: 90px;
        margin-right: 0px;
    }


</style>

@mobilecss
@endcss