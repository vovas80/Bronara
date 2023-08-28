<div class="inputprice-block">
    <label {{ $attributes->merge([ 'class' => 'inputprice-wrapper inputprice-wrapper-'.$class ]) }}>
    
        <div class="text-main-regular inputprice-label">{{ $label }}</div>

        <div class="inputprice-inner">
            <input {{ $attributes->merge([ 'class' => 'inputprice text-additional-semibold inputprice-'.$class ]) }} 
                placeholder ="{!! $placeholder1 !!}" 
                type="{{ $type }}" 
                @if($required)    
                    required
                @endif
                name="{{ $name }}pricefrom"
                value="{{ $priceFrom }}"
            >

            <div class="text-additional-semibold inputprice-text">
                -
            </div>

            <input {{ $attributes->merge([ 'class' => 'inputprice text-additional-semibold inputprice-'.$class ]) }} 
                placeholder ="{!! $placeholder2 !!}" 
                type="{{ $type }}" 
                @if($required)    
                    required
                @endif
                name="{{ $name }}priceto"
                value="{{ $priceTo }}"
            >
        </div>

    </label>

    @if($checkbox)
        <x-inputs.checkbox name="price" :checked="$checked">
            {{ $checkbox }}
        </x-inputs.checkbox>
    @endif

</div>

@desktopcss

<style>

    .inputprice-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        width: 260px;
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 5px;
        padding: 13px 20px; 
    }

    .inputprice {
        width: 66px;
        border: none;
    }

    .inputprice-text {
        margin: 0 20px;
    }

    .inputprice-inner {
        display: flex;
    }

    .inputprice-wrapper-small {
        width: calc(98% / 2);
    }
    
    .inputprice-label {
        margin-bottom: 8px;
        color: var(--color-main-gray-text);
    }

    .input-wrapper-grey,
    .textarea-wrapper-grey {
        background: var(--color-back);
    }

    .input-wrapper-100 {
        width: 100%;
    }

    .inputprice {
        width: 100%;
        border: none;
    }

    .inputprice::placeholder {
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


    .inputprice-block .checkbox {
        margin-top: 5px;
    }

</style>

@mobilecss

<style>

</style>

@endcss

