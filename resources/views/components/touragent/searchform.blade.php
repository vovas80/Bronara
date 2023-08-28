<div class="touragent-searchform-container">
    <form action="" class="touragent-searchform">
        <x-inputs.input-form placeholder="ID тура:" label="ID тура:" name="id" type="text" class="touragent-searchform" />
        <x-inputs.date placeholder="Дата вылета:" label="Дата вылета:"  class="touragent-searchform" noperiod />
        <x-inputs.date placeholder="Дата прилета:" label="Дата прилета:"  class="touragent-searchform" noperiod />
        <x-inputs.inputselect placeholder="Страна:" label="Страна" class="touragent-searchform" :items="$countries = $countries" />
    </form>
</div>

@desktopcss
<style>

    .touragent-searchform-container {
        margin-bottom: 30px;
    }

    .touragent-searchform {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    .touragent-searchform .inputform-block {
        margin-bottom: 0;
    }

</style>

@mobilecss
@endcss