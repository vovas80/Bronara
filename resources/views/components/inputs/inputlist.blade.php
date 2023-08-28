<div class="inputlist-block">
    <div {{ $attributes->merge([ 'class' => 'inputlist-wrapper inputlist-wrapper-'.$class ]) }}>
    
        <div class="text-main-regular inputlist-label">{{ $label }}</div>

        @if($isSelect)
            
            <div class="inputlist-selects">
                <x-inputs.select 
                    class="stars"
                    label="Категория"
                    title="К-ство звезд" 
                    name="stars" 
                    :items="$stars = $stars" 
                    checkbox="и лучше"
                />
                
                <x-inputs.select 
                    class="eat"
                    label="Тип питания"
                    title="Тип питания" 
                    name="eat" 
                    :items="$food = $food" 
                    checkbox="и лучше"
                />
            </div>  

        @endif   

        <input {{ $attributes->merge([ 'class' => 'inputlist text-additional-semibold inputlist-'.$class ]) }} 
            placeholder="{!! $placeholder !!}" 
            type="{{ $type }}" 
            @if($required)    
                required
            @endif
            name="{{ $name }}"
            oninput="find_selectlist(this)"
        >

        <div {{ $attributes->merge([ 'class' => 'inputlist-items inputlist-items-'.$class ]) }} data-name="{{ $name }}">
            <div class="inputlist-items-inner">
                @if($name == 'curort')
                    <div class="inputlist-item">
                        <label class="text-extra-regular inputlist-item-title containercheckbox">
                            <input type="checkbox" class="inputlist-item-input" name="{{ $name }}all" @if( $checked ) checked @endif value="" onchange="{{ $onchange }}" @if($required) required @endif onclick="checked_hotel(this)">
                            <span {{ $attributes->merge([ 'class' => 'checkmark checkmark-'.$class ]) }}></span>
                            <span class="inputlist-item-title-text" data-id="all" >Все курорты</span>
                        </label>
                    </div>
                @endif
                @foreach ($items as $item)
                    <div class="inputlist-item">
                        <label class="text-extra-regular inputlist-item-title containercheckbox">
                            <input type="checkbox" class="inputlist-item-input" name="{{ $name }}" @if( $checked ) checked @endif value="{{ $item['value'] }}" onchange="{{ $onchange }}" @if($required) required @endif onclick="checked_hotel(this)">
                            <span {{ $attributes->merge([ 'class' => 'checkmark checkmark-'.$class ]) }}></span>
                            <span class="inputlist-item-title-text" data-id={{$item['value']}} >{{ $item['title'] }}</span>
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>
</div>


@desktopcss

<style>

    .inputlist-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        width: 290px;
        height: 265px;
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 5px;
        padding: 15px 20px; 
        position: relative;
    }

    .inputlist-label {
        margin-bottom: 8px;
        color: var(--color-main-gray-text);
    }

    .inputlist {
        width: 100%;
        border: none;
        margin-bottom: 15px;
    }

    .inputlist::placeholder {
        color: var(--color-main-gray-text);
    }

    .inputlist-items {
		display: flex;
		flex-direction: column;
        width: 100%;
    }

    .inputlist-items-inner {
        height: 160px;
        max-height: 160px;
        overflow: auto;
    }

    .inputlist-items-hotel {
        max-height: 90px;
        height: 90px;
    }

    .inputlist-items-inner::-webkit-scrollbar {
        width: 4px;
    }
    
    .inputlist-items-inner::-webkit-scrollbar-track {
        background: var(--color-main-stroke);
        border-radius: 1000px;
    }
    
    .inputlist-items-inner::-webkit-scrollbar-thumb {
        border-radius: 1000px;
        background: var(--color-main-blue);
    }

    .inputlist-item-title {
        margin-bottom: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        width: 100%;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        padding-left: 22px;
        transition: .3s;
    }   

    .inputlist-item-input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 1px;
        width: 1px;
    }

    .checkmark {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        width: 16px;
        height: 16px;
        border-radius: 2px;
        border: 1px solid var(--color-main-stroke);
        background: var(--color-main-stroke);
        transition: .3s;
    }

    .checkmark:hover {
        background: var(--color-hover-selection);
        border: 1px solid var(--color-hover-selection);
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .inputlist-item-title .inputlist-item-input:checked~.checkmark:after {
        display: block;
        opacity: 1;
    }

    .inputlist-item-title .inputlist-item-input:checked + span +.inputlist-item-title-text {
        font-weight: 600;
    }

    .inputlist-item-title .inputlist-item-input:checked~.checkmark {
        background: var(--color-main-blue);
        border: 1px solid var(--color-main-blue);
    }

    .inputlist-item-title .checkmark:after {
        left: 50%;
        top: calc(50% - 2px);
        transform: translate(-50%, -50%) rotate(45deg);
        width: 4px;
        height: 8px;
        border: solid var(--color-main-white);
        border-width: 0 2.1px 2.1px 0;
        transition: .3s;
        z-index: 10;
    }

    .inputlist-selects {
        display: flex;
        justify-content: space-between;
        width: 100%;
        align-items: center;
        margin-bottom: 13px;
    }

    

</style>

@mobilecss

<style>

</style>

@endcss

@startjs
<script>


    function find_selectlist(input) {

        val = input.value

        inputname =  input.name
        inputwrapper = input.closest('.inputlist-wrapper').querySelector('.inputlist-items')

        selectname = inputwrapper.getAttribute('data-name')

        if (inputname == selectname) {
            
            items = inputwrapper.querySelectorAll('.inputlist-item')

            items.forEach(item => {

                if (item.innerHTML.toLowerCase().indexOf(val.toLowerCase()) === -1) {
                    item.classList.add('none')
                } else {
                    item.classList.remove('none')
                }

            });

            // if (input.value == '') {
                // items.forEach(item => {

                //     item.classList.remove('none')

                // });
            // }
        }

    }

    function replace_value_list(select) {
        val = select.innerHTML
        id = select.getAttribute('data-id')

        select.closest('.inputlist-wrapper').querySelector('.inputlist').value = val
        select.closest('.inputlist-wrapper').querySelector('.inputlist').setAttribute('data-id', id)
    }

    function checked_hotel (elm) {
        count = document.querySelectorAll('input[name="hotel"]:checked').length

        if(count > 3 ) {

            elm.checked = false;

            close_modal()

            modal = '#modal-notification'

            $(modal).addClass('active')


        }
    }



</script>
@endjs
