<div class="input-radio" >                    
    <input type="radio" value="{{ $value }}" name="{{ $name }}" id="{{ $id }}" @if($checked) checked @endif @if($required) required @endif>
    <span {{ $attributes->merge([ 'class' => 'checkmark checkmark-'.$class ]) }}></span>
    <label for="{{ $value }}" {{ $attributes->merge([ 'class' => 'input-radio-label input-radio-label-'.$class ]) }} data-booking="{{$booking}}">
        
        <div class="input-radio-label-description">
            <span class="@if($extratext) text-extra-regular @else text-additional-semibold @endif radio-title">{{ $title }}</span>
        </div>

    </label>
</div>


@desktopcss
<style>
    .input-radio {
        border-radius: 5px;
        display: block;
        box-sizing: border-box;
        cursor: pointer;
        position: relative;
        align-items: center;
    }

    .input-radio-label {
        display: flex;
        align-items: center;
        width: 100%;
        justify-content: space-between;
        padding-left: 22px;
        cursor: pointer;
        position: relative;
        z-index: 10;
        margin-bottom: 7px;
    }

    .input-radio-label-btn-visa {
        margin-bottom: 0;
    }

    .input-radio input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 1px;
        width: 1px;
        bottom: 0;
        left: 0;
    }

    /* .input-radio .checkmark {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 15px;
        height: 20px;
        width: 20px;
        border: 1px solid var(--color-main-stroke);
        background-color: var(--color-main-stroke);
        border-radius: 50%;
        padding: 0;
        transition: .3s;
    } */

    /* .input-radio:hover input~.checkmark {
        background-color: var(--color-main-white);
    }

    .input-radio input:checked~.checkmark::before {
        opacity: 1;
    }

    .input-radio .checkmark::before {
        content: "";
        display: block;
        width: 10px;
        height: 10px;
        position: absolute;
        z-index: 1;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        border-radius: 50%;
        background-color: var(--color-main-blue);
        opacity: 0;
        transition: .3s;
    }

    .input-radio .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .input-radio input:checked~.input-radio .checkmark:after {
        display: block;
        top: 5px;
        left: 5px;
        width: 10px;
        height: 10px;
        background-color: var(--color-white);
    }

    .input-radio .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--color-white);
    } */

    .input-radio .checkmark {
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

    .input-radio .checkmark-btn-visa {
        width: 14px;
        height: 14px;
        background: none;
        border: 1px solid var(--color-main-stroke);
    }

    .input-radio .checkmark:hover {
        background: var(--color-hover-selection);
        border: 1px solid var(--color-hover-selection);
    }

    .input-radio .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .input-radio input:checked~.checkmark:after {
        display: block;
        opacity: 1;
    }

    .input-radio input:checked~.checkmark {
        background: var(--color-main-blue);
        border: 1px solid var(--color-main-blue);
    }

    .input-radio input:checked~.checkmark {
        background: var(--color-main-blue);
        border: 1px solid var(--color-main-blue);
    }

    .input-radio .checkmark:after {
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


    .radio_title {
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 22px;
        color: var(--color-extra-blue);
        width: 263px;
        margin-bottom: 4px;
    }

    .radio_desc {
        font-style: normal;
        font-weight: 300;
        font-size: 14px;
        line-height: 22px;
        color: rgba(64, 64, 64, 0.5);
    }

    .radio_price {
        font-style: normal;
        font-weight: 300;
        font-size: 14px;
        line-height: 22px;
        color: #404040;
    }
</style>
@mobilecss
<style>
    .input-radio {
        width: 100%;
        /* height: 52px; */
        border-radius: 5px;
        display: flex;
        border: 1px solid var(--color-stroke);
        box-sizing: border-box;
        cursor: pointer;
        position: relative;
        padding: 10px 0 10px 10px;
        margin-bottom: 10px;
    }

    .input-radio-label {
        display: flex;
        align-items: center;
        width: 100%;
        justify-content: space-between;
        padding-left: 45px;
        cursor: pointer;
        position: relative;
        z-index: 10;
    }

    .input-radio-label-description {
        display: flex;
        flex-direction: column;
    }

    .input-radio input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 1px;
        width: 1px;
        bottom: 0;
        left: 0;
    }

    .input-radio .checkmark {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 15px;
        height: 20px;
        width: 20px;
        border: 1px solid var(--color-stroke);
        background-color: var(--color-white);
        border-radius: 50%;
        padding: 0;
        transition: .3s;
    }

    .input-radio .checkmark::before {
        content: "";
        display: block;
        width: 10px;
        height: 10px;
        position: absolute;
        z-index: 1;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        border-radius: 50%;
        background-color: var(--color-extra-blue);
        opacity: 0;
        transition: .3s;
    }

    .input-radio input:checked~.checkmark::before {
        opacity: 1;
    }

    .input-radio .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .input-radio input:checked~.input-radio .checkmark:after {
        display: block;
        top: 5px;
        left: 5px;
        width: 10px;
        height: 10px;
        background-color: var(--color-white);
    }

    .input-radio .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--color-white);
    }


    .radio_title {
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        line-height: 20px;
        color: var(--color-extra-blue);
        margin-bottom: 2px;
    }

    .radio_desc {
        font-style: normal;
        font-weight: 300;
        font-size: 10px;
        line-height: 12px;
        color: rgba(64, 64, 64, 0.5);
    }

</style>
@endcss