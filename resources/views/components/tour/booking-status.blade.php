<div class="booking-status" id="booking-status">
    <div class="text-additional-semibold booking-status-title">Статус бронирования:</div>

    @if(!empty($statustour))
    <div class="booking-status-statustour @if(!empty($statustour)) active @endif">

        <div class="booking-status-checked">
            <div class="text-button-additional" style="color:{{$statustour->color}}">{{$statustour->title}}</div>
        </div>
        <x-inputs.button class="yellow booking-status" action="edit_status()">
            Изменить статус
        </x-inputs.button>

    </div>

    @endif

    <div class="booking-status-empty @if(empty($statustour)) active @endif">

        <x-inputs.select title="Выберите статус бронирования" class="booking-status-select" name="status" :items="$statuses = $statuses"  />
        <x-inputs.button class="yellow booking-status" data-tour="{{$slug}}" data-idbooking="{{$idbooking}}" action="save_status(this, '{{ route('save-status', '', false) }}'); return false;">
            Сохранить статус
        </x-inputs.button>
       
    </div>

    {{-- <x-inputs.button class="green 100">
        Подтвердить актуальность тура
    </x-inputs.button> --}}
</div>

@desktopcss
    <style>
       

    </style>
@mobilecss

@endcss

@startjs
<script>


</script>
@endjs