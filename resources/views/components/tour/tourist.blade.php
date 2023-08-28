<div class="modal-tour-arrival-inner">
    <div class="tourist-info-cart">
        <div class="tourist-info-cart-item">
            <div class="text-button-additional tourist-info-cart-item-title">ФИО:</div>
            <div class="text-additional-semibold tourist-info-cart-item-text">{{$tourist->second_name}} {{$tourist->first_name}} {{$tourist->third_name}}</div>
        </div>
        <div class="tourist-info-cart-item">
            <div class="text-button-additional tourist-info-cart-item-title">Дата рождения:</div>
            <div class="text-additional-semibold tourist-info-cart-item-text">{{$tourist->date_of_birth}}</div>
        </div>
        <div class="tourist-info-cart-item">
            <div class="text-button-additional tourist-info-cart-item-title">Серия и номер паспорта:</div>
            <div class="text-additional-semibold tourist-info-cart-item-text">{{$tourist->passport}}</div>
        </div>
        <div class="tourist-info-cart-item">
            <div class="text-button-additional tourist-info-cart-item-title">Действует до:</div>
            <div class="text-additional-semibold tourist-info-cart-item-text">{{$tourist->valid}}</div>
        </div>
        <div class="tourist-info-cart-item">
            <div class="text-button-additional tourist-info-cart-item-title">Кем выдан паспорт:</div>
            <div class="text-additional-semibold tourist-info-cart-item-text">{{$tourist->authority}}</div>
        </div>
        <div class="tourist-info-cart-item">
            <div class="text-button-additional tourist-info-cart-item-title">Гражданство:</div>
            <div class="text-additional-semibold tourist-info-cart-item-text">{{$tourist->citizenship->title}}</div>
        </div>
    </div>
</div>

@desktopcss
<style>
  
</style>
@mobilecss
@endcss