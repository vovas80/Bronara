@props(['checked' => false])

<div {{ $attributes->merge([ 'class' => 'checkbox checkbox-'.$class ]) }} >
    <label class="containercheckbox @if($maintext) text-main-regular @elseif($extratext) text-extra-regular @else text-main-semibold @endif">
        <input type="checkbox" name="{{ $name }}checkbox" value="{{ $value }}" @if( $checked )  checked @endif onchange="{{ $onchange }}" @if($required) required @endif>
        <span {{ $attributes->merge([ 'class' => 'checkmark checkmark-'.$class ]) }}></span>
        <span>{{ $slot }}</span>

    </label>
</div>



@desktopcss

<style>

    .containercheckbox {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        width: auto;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        padding-left: 22px;
        transition: .3s;
    }   

    .containercheckbox input {
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

    .checkmark-btn-visa {
        width: 14px;
        height: 14px;
        background: none;
        border: 1px solid var(--color-main-stroke);
    }

    .checkmark:hover {
        background: var(--color-hover-selection);
        border: 1px solid var(--color-hover-selection);
    }

    .checkbox-filter .checkmark {
        background: var(--color-main-blue);
        border: 1px solid var(--color-stroke);
    }

    .checkbox-filter:hover .containercheckbox {
        color: var(--color-main-blue);
        background: var(--color-main-blue);
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .containercheckbox input:checked~.checkmark:after {
        display: block;
        opacity: 1;
    }

    .containercheckbox input:checked~.checkmark {
        background: var(--color-main-blue);
        border: 1px solid var(--color-main-blue);
    }

    .checkbox-filter .containercheckbox input:checked~.checkmark {
        background: var(--color-main-blue);
        border: 1px solid var(--color-main-blue);
    }

    .containercheckbox .checkmark:after {
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
</style>

@mobilecss
<style>

    .containercheckbox {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        width: auto;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .containercheckbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .checkmark {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
        height: 20px;
        width: 20px;
        background-color: var(--color-back-and-stroke);
        transition: .3s;
        border-radius: 2px;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .containercheckbox input:checked~.checkmark:after {
        display: block;
        opacity: 1;
    }

    .containercheckbox input:checked~.checkmark {
        background: var(--color-second);
    }

    .containercheckbox .checkmark:after {
        left: 50%;
        top: calc(50% - 2px);
        transform: translate(-50%, -50%) rotate(45deg);
        width: 4px;
        height: 8px;
        border: solid var(--color-white);
        border-width: 0 2.1px 2.1px 0;
        transition: .3s;
        z-index: 10;
    }


</style>
@endcss