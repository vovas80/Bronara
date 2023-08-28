@props(['textarea' => false])

@if ($textarea)

    <label {{ $attributes->merge([ 'class' => 'textarea-wrapper  textarea-wrapper-'.$class ]) }}>
            
        <div class="text-main-semibold input-label">{{ $label }}</div>

        <textarea 
            {{ $attributes->merge([ 'class' => 'textarea textarea-'.$class ]) }} 
            placeholder="{{ $placeholder }}" 
            type="{{ $type }}" 
            name="{{ $name }}"
            @if ($required)
                required
            @endif
        ></textarea>
    </label>

@else

    <label {{ $attributes->merge([ 'class' => 'input-wrapper input-wrapper-'.$class ]) }}>
        
        <div {{ $attributes->merge([ 'class' => 'text-main-semibold input-label input-label-'.$class ]) }}>{{ $label }}@if($star)<span class="color-red"> *</span>@endif</div>

        <input {{ $attributes->merge([ 'class' => 'input text-extra-regular input-'.$class ]) }} 
            placeholder="{!! $placeholder !!}" 
            type="{{ $type }}" 
            value="{{ $value }}"
            @if($required)    
                required
            @endif
            name="{{ $name }}"
        >
    </label>
@endif

@desktopcss

<style>

    .input-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        width: 100%;
    }

    .input-wrapper-small {
        width: calc(98% / 2);
    }
    
    .input-label {
        margin-bottom: 4px;
    }

    .input-wrapper-grey,
    .textarea-wrapper-grey {
        background: var(--color-back);
    }

    .input-wrapper-100 {
        width: 100%;
    }

    .input {
        width: 100%;
        border: none;
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 5px;
        padding: 13px 16px;
    }

    .input::placeholder {
        color: var(--color-main-gray-text);
    }

    .textarea {
        height: 233.91px;
        border-radius: 5px;
        resize: none;
        border: 1px solid var(--color-main-stroke);
        width: 100%;
        padding: 13px 20px;
        margin-bottom: 15px;
    }

    .textarea-wrapper {
        height: 233.91px;
    }

    .textarea::-webkit-input-placeholder{
        color: var(--color-main-gray-text);
    }

</style>

@mobilecss

<style>

    .input {
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

    .input::placeholder {
        color: var(--color-grey);
    }

    .input-contacts {
        padding: 8px 15px;
    }

    .textarea {
        min-height: 120px;
    }

    .textarea::-webkit-input-placeholder{
        color: var(--color-grey);
    }

</style>

@endcss
