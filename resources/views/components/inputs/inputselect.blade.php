<div class="inputselect-block">
    <label {{ $attributes->merge([ 'class' => 'inputselect-wrapper inputselect-wrapper-'.$class ]) }}>
    
        <div class="text-main-regular inputselect-label">{{ $label }}</div>

        <input {{ $attributes->merge([ 'class' => 'inputselect text-additional-semibold inputselect-'.$class ]) }} 
            placeholder="{!! $placeholder !!}" 
            type="{{ $type }}" 
            @if($required)    
                required
            @endif
            name="{{ $name }}"
            oninput="find_select(this)"
            onclick="show_select(this)"
            autocomplete="off"
            value="{{ $value }}"
            data-id="{{ $dataId }}"
        >
        
        <div class="inputselect-items" data-name="{{ $name }}">
            <div class="inputselect-items-inner">
                @foreach ($items as $item)
                    <div class="text-extra-regular inputselect-item" onclick="replace_value(this)" data-id="{{ $item['value'] }}">{{ $item['title'] }}</div>
                @endforeach
            </div>
        </div>
        
    </label>

    @if($checkbox)
        <x-inputs.checkbox name="{{$name}}" :checked="$checked">
            {{ $checkbox }}
        </x-inputs.checkbox>
    @endif

</div>


@desktopcss

<style>

    .inputselect-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        width: 348px;
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 5px;
        padding: 13px 20px 13px 10px; 
        position: relative;
    }

    .inputselect-wrapper-small {
        width: 168px;
    }

    .inputselect-wrapper-154 {
        width: 154px;
    }

    .inputselect-wrapper-medium {
        width: 228px;
    }

    .inputselect-wrapper-348 {
        width: 348px
    }
    
    .inputselect-label {
        margin-bottom: 8px;
        color: var(--color-main-gray-text);
    }

    .inputselect {
        width: 100%;
        border: none;
    }

    .input-wrapper-grey,
    .textarea-wrapper-grey {
        background: var(--color-back);
    }

    .input-wrapper-100 {
        width: 100%;
    }

    .inputselect {
        width: 100%;
        border: none;
    }

    .inputselect::placeholder {
        color: var(--color-main-gray-text);
    }

    /* .textarea {
        height: 110px;
        border-radius: 5px;
        resize: none;
    }

    .textarea-wrapper {
        height: 140px;
    }

    .textarea::-webkit-input-placeholder{
        color: var(--color-grey);
    } */

    .inputselect-items {
        position: absolute;
		top: 100%;
		left: -7px;
		background: var(--color-main-white);
		box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
		border-radius: 5px;
		padding: 15px 20px;
		z-index: 10;
		opacity: 0;
		visibility: hidden;
		pointer-events: none;
		transition: .3s;
		display: flex;
		flex-direction: column;
        margin-top: 5px;
        width: 100%;
    }

    .inputselect-items.active {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
    }

    .inputselect-items-inner {
        max-height: 160px;
        overflow: auto;
    }

    .inputselect-items-inner::-webkit-scrollbar {
        width: 4px;
    }
    
    .inputselect-items-inner::-webkit-scrollbar-track {
        background: var(--color-main-stroke);
        border-radius: 1000px;

    }
    
    .inputselect-items-inner::-webkit-scrollbar-thumb {
        border-radius: 1000px;
        background: var(--color-main-blue);
    }

    .inputselect-item {
        margin-bottom: 6px;
        transition: .3s;
        cursor: pointer;
    }

    .inputselect-item:hover,
    .inputselect-item.active {
        color: var(--color-main-blue);
    }


    .inputselect-block .checkbox {
        margin-top: 5px;
    }

    .inputselect-wrapper-touragent-searchform {
        width: 292px;
    }

    .inputselect-wrapper-170 {
        width: 170px;
    }

    .inputselect-wrapper-260 {
        width: 260px;
    }

    .inputselect-wrapper-207 {
        width: 207px;
    }

</style>

@mobilecss

<style>

</style>

@endcss

@startjs
<script>

    function show_select(input) {
        
        val = input.value

        inputname =  input.name
        inputwrapper = input.closest('.inputselect-wrapper').querySelector('.inputselect-items')

        selectname = inputwrapper.getAttribute('data-name')

        if(inputname == selectname) {

            inputwrapper.classList.toggle('active')

        } 
    }

    function find_select(input) {

        val = input.value

        inputname =  input.name
        inputwrapper = input.closest('.inputselect-wrapper').querySelector('.inputselect-items')

        selectname = inputwrapper.getAttribute('data-name')

        if (inputname == selectname) {
            
            items = inputwrapper.querySelectorAll('.inputselect-item')

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

    function replace_value(select) {
        val = select.innerHTML
        id = select.getAttribute('data-id')

        items = document.querySelectorAll('.inputselect-item')

        items.forEach(item => {

            item.classList.remove('active')

        });

        select.classList.add('active')

        select.closest('.inputselect-wrapper').querySelector('.inputselect').value = val
        select.closest('.inputselect-wrapper').querySelector('.inputselect').setAttribute('data-id', id)


    }

</script>
@endjs
