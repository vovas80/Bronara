<label {{ $attributes->merge([ 'class' => 'inputuser-wrapper inputuser-wrapper-'.$class ]) }}>
    
    <div class="text-main-regular inputuser-label">{{ $label }}</div>

    @if($textarea)
    
        <textarea 
            {{ $attributes->merge([ 'class' => 'inputuser textareauser text-additional-semibold textareauser-'.$class ]) }} 
            placeholder="{{ $placeholder }}" 
            type="{{ $type }}" 
            name="{{ $name }}"
            @if ($readonly)
                readonly
            @endif  
        >{!! $value !!}</textarea>

    @else

        <input {{ $attributes->merge([ 'class' => 'inputuser text-additional-semibold inputuser-'.$class ]) }} 
            placeholder="{!! $placeholder !!}" 
            type="{{ $type }}" 
            @if($readonly)    
                readonly
            @endif
            name="{{ $name }}"
            value="{!! $value !!}"
        >

    @endif

    @if ($isIcon)
        <svg class="inputuser-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_778_318)">
            <path d="M1.39844 11.9614L11.3036 2.05603L13.944 4.69642L4.03856 14.6016L1.39844 11.9614Z" fill="#0274CA"/>
            <path d="M15.0762 3.56462L15.4534 3.18746C15.806 2.83484 16.0002 2.36619 16.0002 1.8674C16.0002 1.36861 15.806 0.899958 15.4534 0.547337C15.1007 0.194715 14.6318 0 14.133 0C13.6342 0 13.1656 0.194449 12.8127 0.54707L12.4355 0.924231L15.0762 3.56462Z" fill="#0274CA"/>
            <path d="M1.09344 12.4103L0.0137062 15.649C-0.0183018 15.7447 0.00677115 15.8506 0.0782557 15.9218C0.128935 15.9725 0.197219 16 0.266836 16C0.29511 16 0.323384 15.9954 0.351124 15.9861L3.58953 14.9066L1.09344 12.4103Z" fill="#0274CA"/>
            <path d="M11.6816 1.67882L12.0591 1.30139L14.6995 3.94179L14.322 4.31921L11.6816 1.67882Z" fill="#0274CA"/>
            </g>
            <defs>
            <clipPath id="clip0_778_318">
            <rect width="16" height="16" fill="white"/>
            </clipPath>
            </defs>
        </svg>    
    @endif    

</label>

@desktopcss

<style>

    textarea {
        resize: none;
    }

    .inputuser-wrapper {
        display: flex;
        flex-wrap: wrap;
        width: 306px;
    }

    .inputuser-wrapper-small {
        width: 90px;
    }
    
    .inputuser-label {
        margin-bottom: 6px;
        width: 100%;
        color: var(--color-main-gray-text);
    }

    .inputuser {
        border: none;
        background: var(--color-main-white);
        width: 90%;
    }


    .inputuser::placeholder {
        color: var(--color-main-gray-text);
    }

    .inputuser-svg {
        width: 16px;
        height: 16px;
        cursor: pointer;
    }

    .textareauser {
        overflow: hidden;
    }

</style>

@mobilecss

<style>

    .inputuser {
        width: 100%;
        padding: 9px 15px;
        font-family: "Futura PT";
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        line-height: 23px;
        border: 1px solid var(--color-back-and-stroke);
        border-radius: 6px;
    }

    .inputuser::placeholder {
        color: var(--color-grey);
    }

</style>

@endcss
