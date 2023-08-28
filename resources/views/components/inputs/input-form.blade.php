@props(['textarea' => false])

@if($textarea)

    <div class="inputform-block">
        <label {{ $attributes->merge([ 'class' => 'inputform-wrapper inputform-wrapper-textarea inputform-wrapper-'.$class ]) }}>
        
            <div class="text-main-regular inputform-label">{{ $label }}</div>

            <textarea {{ $attributes->merge([ 'class' => 'inputform-textarea text-additional-semibold inputform-textarea-'.$class ]) }} 
                placeholder="{!! $placeholder !!}" 
                type="{{ $type }}" 
                @if($required)    
                    required
                @endif
                name="{{ $name }}"
            ></textarea>
            
        </label>

    </div>

@else

    <div class="inputform-block">
        <label {{ $attributes->merge([ 'class' => 'inputform-wrapper inputform-wrapper-'.$class ]) }}>
        
            <div class="text-main-regular inputform-label">{{ $label }}</div>

            <input {{ $attributes->merge([ 'class' => 'inputform text-additional-semibold inputform-'.$class ]) }} 
                placeholder="{!! $placeholder !!}" 
                type="{{ $type }}" 
                @if($required)    
                    required
                @endif
                name="{{ $name }}"
            >
            
        </label>

    </div>
@endif

@desktopcss

<style>

    .inputform-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        width: 348px;
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 5px;
        padding: 13px 20px; 
        position: relative;
    }

    .inputform-wrapper-small {
        width: 168px;
    }

    .inputform-wrapper-121 {
        width: 121px;
    }

    .inputform-wrapper-140 {
        width: 140px;
    }

    .inputform-wrapper-153 {
        width: 153px;
    }

    .inputform-wrapper-340 {
        width: 340px;
    }

    .inputform-wrapper-754 {
        width: 754px;
    }

    .inputform-wrapper-154 {
        width: 154px;
    }

    .inputform-wrapper-medium {
        width: 228px;
    }
    
    .inputform-label {
        margin-bottom: 8px;
        color: var(--color-main-gray-text);
        width: 100%;
        white-space: nowrap;
    }

    .inputform {
        width: 100%;
        border: none;
    }

    .input-wrapper-grey,
    .textarea-wrapper-grey {
        background: var(--color-back);
    }

    .inputform-wrapper-100 {
        width: 100%;
    }

    .inputform {
        width: 100%;
        border: none;   
    }

    .input::placeholder,
    .inputform-textarea::placeholder {
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

    .inputform-items {
        position: absolute;
		top: 100%;
		left: -7px;
		background: var(--color-main-white);
		box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
		border-radius: 5px;
		padding: 15px 20px;
		z-index: 1001;
		opacity: 0;
		visibility: hidden;
		pointer-events: none;
		transition: .3s;
		display: flex;
		flex-direction: column;
        margin-top: 5px;
        width: 100%;
    }

    .inputform-items.active {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
    }

    .inputform-items-inner {
        max-height: 160px;
        overflow: auto;
    }

    .inputform-items-inner::-webkit-scrollbar {
        width: 4px;
    }
    
    .inputform-items-inner::-webkit-scrollbar-track {
        background: var(--color-main-stroke);
        border-radius: 1000px;

    }
    
    .inputform-items-inner::-webkit-scrollbar-thumb {
        border-radius: 1000px;
        background: var(--color-main-blue);
    }

    .inputform-item {
        margin-bottom: 6px;
        transition: .3s;
        cursor: pointer;
    }

    .inputform-item:hover {
        color: var(--color-main-blue);
    }

    .inputform-block .checkbox {
        margin-top: 5px;
    }

    .inputform-wrapper-touragent-searchform {
        width: 292px;
    }

    .inputform-wrapper-170 {
        width: 170px;
    }

    .inputform-textarea {
        border: 0;
        width: 100%;
        height: 220px;
        resize: none;
    }
    
    .inputform-wrapper-textarea {
        width: 290px;
        height: 265px;
    }
</style>

@mobilecss

<style>

</style>

@endcss

@startjs
<script>

   

</script>
@endjs
