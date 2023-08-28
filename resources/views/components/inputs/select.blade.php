<div {{ $attributes->merge([ 'class' => 'select-block select-block-'.$class ]) }}>
    <div  {{ $attributes->merge([ 'class' => 'select select-'.$class ]) }}>
        @if (empty($label))
            <div class="select-title select-title-without" onclick="select_click(this)">
                <div class="text-additional-semibold select-title-inner">{{ $title }}</div>
            </div>
        @else
            <div class="select-title" onclick="select_click(this)">
                <div {{ $attributes->merge([ 'class' => 'text-main-regular select-label select-label-'.$class ]) }}>{{ $label }}</div>
                <div {{ $attributes->merge([ 'class' => 'text-additional-semibold select-title-inner  select-title-'.$class ]) }}>{{ $title }}</div>
            </div>
        @endif
        <input type="hidden" class="input-select" name="{{ $name }}">
        <div {{ $attributes->merge([ 'class' => 'select-items select-items-'.$class ]) }}>
            <div class="select-items-inner">
                @foreach ($items as $item)
                    @if($name == "stars")
                        <div class="text-extra-regular select-item" data-value="{{ $item['value'] }}" {{ $attributes->merge([ 'onclick' => "change_select(this); ".$action ]) }} >
                            @for ($i=0; $i<$item['title']; $i++)
                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.52447 0.463525C5.67415 0.00286925 6.32585 0.00286996 6.47553 0.463525L7.45934 3.49139C7.52628 3.6974 7.71826 3.83688 7.93487 3.83688H11.1186C11.6029 3.83688 11.8043 4.45669 11.4124 4.74139L8.83679 6.61271C8.66155 6.74003 8.58822 6.96572 8.65516 7.17173L9.63897 10.1996C9.78864 10.6602 9.2614 11.0433 8.86955 10.7586L6.29389 8.88729C6.11865 8.75997 5.88135 8.75997 5.70611 8.88729L3.13045 10.7586C2.73859 11.0433 2.21136 10.6602 2.36103 10.1996L3.34484 7.17173C3.41178 6.96572 3.33845 6.74003 3.16321 6.61271L0.587553 4.74139C0.195696 4.45669 0.397084 3.83688 0.881446 3.83688H4.06513C4.28174 3.83688 4.47372 3.6974 4.54066 3.49139L5.52447 0.463525Z" fill="#FFAB00"/>
                                </svg>
                            @endfor
                        </div>
                    @else    

                        <div class="text-extra-regular select-item" data-value="{{ $item['value'] }}" {{ $attributes->merge([ 'onclick' => "change_select(this); ".$action ]) }} >
                            {{ $item['title'] }}
                        </div>
                    @endif 

                @endforeach
            </div>
        </div>
    </div>

    
    @if($checkbox)
        <x-inputs.checkbox name="{{ $name }}">
            {{ $checkbox }}
        </x-inputs.checkbox>
    @endif


</div>


@desktopcss
<style>

    .select-block {
        width: 352px;
    }

    .select {
        position: relative;
        width: 352px;
        cursor: pointer;
        padding: 15px;
        border: 1px solid var(--color-main-stroke);
        border-radius: 5px;
        height: 76px;
    }

    .select.red {
        border-color: var(--color-additional-red);
    }

    .select-select-booking-status-select,
    .select-block-select-booking-status-select {
        width: 300px;
        height: 46px;
        margin-right: 10px;
    }

    .select-select-booking-status-select .select-title-inner {
        font-weight: 600;
        font-size: 14px;
        line-height: 20px;
    }

    .select-title {
       color: var(--color-main-gray-text);
    }

    .select.default .select-title {
        border: 1px solid var(--color-stroke);
        padding: 11px 15px;
    }

    .select-label {
        color: var(--color-main-gray-text);
    }

    .select-title.active .select-label,
    .select-title.with-label .select-label {
        display: block;
        margin-bottom: 6px;
    }

    .select-title-inner::after {
        position: absolute;
        right: 5px;
        top: 50%;
        display: block;
        content: "";
        width: 5px;
        height: 5px;
        border: 1px solid var(--color-main-blue);
        transform: translateY(-50%) rotate(45deg);
        transition: .3s;
        border-left: none;
        border-top: none;
    }

    .select.active .select-title-inner::after {
        margin-top: 3px;
        transform: translateY(-50%) rotate(225deg);
    }

    .select-title-inner {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        position: relative;
        color: var(--color-main-gray-text);
    }

    .select-title.active .select-title-inner {
        color: var(--color-text-main);
    }

    .select-items {
        position: absolute;
        top: calc(100% + 5px);
        left: 0;
        width: 100%;
        z-index: 100;
        background: #FFFFFF;
        box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.07);
        border-radius: 5px;
        padding: 16px;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: .3s;
    }

    .select-items-select-stars,
    .select-items-select-eat {
        width: 150px;
    }

    .select-items-inner {
        max-height: 120px;
        overflow: auto;
        
    }

    .select-items-inner::-webkit-scrollbar {
        width: 4px;
    }
    
    .select-items-inner::-webkit-scrollbar-track {
        background: var(--color-main-stroke);
        border-radius: 10px;

    }
    
    .select-items-inner::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background: var(--color-main-blue);
    }

    .select.active .select-items {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
    }

    .select-item {
        margin-bottom: 5px;
        transition: .3s;
        display: flex;
    }

    .select-item:hover {
        color: var(--color-main-blue);
    }

    .select-item:last-child{
        margin-bottom: 0;
    }

    .select-block-select-stars,
    .select-block-select-eat {
        width: 100px;
    }

    .select-block-stars,
    .select-block-eat {
        width: 100px;
    }

    .select-select-stars,
    .select-select-eat {
        border: none;
        padding: 0;
        width: 100px;
        height: 45px;
        margin-bottom: 5px;
    }

    .select-block-select-eat,
    .select-select-eat {
        width: 120px;
    }

    .select-label-select-stars,
    .select-label-select-eat {
        color: var(--color-text-main);
        margin-bottom: 3px;
    }

    .select-title-select-stars,
    .select-title-select-eat {
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
        display: flex;
    }

</style>
@mobilecss
<style>

    .select-label {
        display: none;
    }

    .select {
        position: relative;
        min-width: 120px;
        height: 40px;
        cursor: pointer;
    }

    .select.default {
        height: 40px;
    }

    .select-title {
        border-radius: 5px;
        background: var(--color-white);
        padding: 11px 15px;
        position: relative;
    }

    .select-title.active,
    .select-title.with-label {
        color: var(--color-main);
        padding:  4% 15px;
    }

    .select-title.empty.with-label {
        color: var(--color-grey);
    }

    .select.default .select-title {
        border: 1px solid var(--color-stroke);
        padding: 11px 15px;
    }

    .select-title.active .select-label,
    .select-title.with-label .select-label {
        display: block;
        margin-bottom: 2px;
    }

    .select-title::after {
        position: absolute;
        right: 10px;
        top: 50%;
        display: block;
        content: "";
        width: 5px;
        height: 5px;
        border: 1px solid var(--color-grey);
        transform: translateY(-50%) rotate(45deg);
        transition: .3s;
        border-left: none;
        border-top: none;
    }

    .select.default .select-title::after {
        width: 7px;
        height: 7px;
    }

    .select.active .select-title::after {
        margin-top: 3px;
        transform: translateY(-50%) rotate(225deg);
    }

    .select-title-inner {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .select-items {
        position: absolute;
        top: calc(100% + 5px);
        left: 0;
        width: 100%;
        z-index: 100;
        background: #FFFFFF;
        box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.07);
        border-radius: 5px;
        padding: 16px;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: .3s;
    }

    .select-items-inner {
        max-height: 150px;
        overflow: auto;
    }

    .select-items-inner::-webkit-scrollbar {
        width: 4px;
    }
    
    .select-items-inner::-webkit-scrollbar-track {
        background: var(--color-back);
        border-radius: 10px;

    }
    
    .select-items-inner::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background: var(--color-main);
    }

    .select.active .select-items {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
    }

    .select-item {
        margin-bottom: 5px;
        transition: .3s;
    }

    .select-item:hover {
        color: var(--color-main);
    }

    .select-item:last-child{
        margin-bottom: 0;
    }


</style>
@endcss


@startjs
<script>
    
    function select_click(elm){
        $(elm).parent().toggleClass('active');
        $(elm).parent().removeClass('red');
    }

    function change_select(elm) {

        value = $(elm).data('value')
        text = $(elm).text()

        star = $(elm).attr('data-value')

        html = '';
        htmllist = "";
        for (let i = 0; i < star; i++) {
            html = '<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.52447 0.463525C5.67415 0.00286925 6.32585 0.00286996 6.47553 0.463525L7.45934 3.49139C7.52628 3.6974 7.71826 3.83688 7.93487 3.83688H11.1186C11.6029 3.83688 11.8043 4.45669 11.4124 4.74139L8.83679 6.61271C8.66155 6.74003 8.58822 6.96572 8.65516 7.17173L9.63897 10.1996C9.78864 10.6602 9.2614 11.0433 8.86955 10.7586L6.29389 8.88729C6.11865 8.75997 5.88135 8.75997 5.70611 8.88729L3.13045 10.7586C2.73859 11.0433 2.21136 10.6602 2.36103 10.1996L3.34484 7.17173C3.41178 6.96572 3.33845 6.74003 3.16321 6.61271L0.587553 4.74139C0.195696 4.45669 0.397084 3.83688 0.881446 3.83688H4.06513C4.28174 3.83688 4.47372 3.6974 4.54066 3.49139L5.52447 0.463525Z" fill="#FFAB00"/></svg>'
            htmllist = htmllist + html 
        }


        elm.closest('.select').querySelector('input[type="hidden"]').value = value
        elm.closest('.select').querySelector('.select-title-inner').innerText = text

        if(elm.closest('.select-select-stars')){
            elm.closest('.select-select-stars').querySelector('.select-title-inner').innerHTML = htmllist
        }
            

        if (value != '') {

            elm.closest('.select').querySelector('.select-title').classList.add('active')
            elm.closest('.select').querySelector('.select-title').classList.remove('empty')

        } else {
            
            elm.closest('.select').querySelector('.select-title').classList.remove('active')
            elm.closest('.select').querySelector('.select-title').classList.add('empty')
        } 

        $('.select').removeClass('active')
    }


</script>
@endjs