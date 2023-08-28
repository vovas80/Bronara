@if ($type == 'submit')
    <button {{ $attributes->merge([ 'class' => 'btn text-additional-semibold '.$class ]) }} type="submit" onclick="{{ $action }}">
        {{ $slot }}
    </button>
@elseif(empty($href))
    <div {{ $attributes->merge([ 'class' => 'btn text-additional-semibold '.$class ]) }} onclick="{{ $action }}">
        {{ $slot }}
        
        @if ($tooltip)
            <div class="text-extra-regular tooltip">
                {{ $tooltip }}
            </div>
        @endif

        @if ($counter)
            <div class="text-additional-semibold counter">
                {{ $counter }}
            </div>
        @endif

    </div>
@else
    <a {{ $attributes->merge([ 'class' => 'btn text-additional-regular '.$class ]) }} href="{{ $href }}" onclick="{{ $action }}" @if($download) download @endif>
        {{ $slot }}
    </a>

    @if ($tooltip)
        <div class="text-extra-regular tooltip">
            {{ $tooltip }}
        </div>
    @endif

    @if ($counter)
        <div class="text-additional-semibold counter">
            {{ $counter }}
        </div>
    @endif

@endif




@desktopcss
<style>

    .btn {
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: .3s;
        border: none;
        padding: 13px 34px;
        text-decoration: none;
        text-align: center;
        color: var(--color-main-white);
    }

    .btn-100 {
        width: 100%;
    }

    .btn-main {
        width: 185px;
    }

    .btn-fit-content {
        width: fit-content;
    }

    .btn-form {
        background: var(--color-main-blue);
    }

    .btn-form:hover {
        background: var(--color-hover-blue);
    }

    .button-forgot {
        transition: .3s;
    }

    .button-forgot:hover {
        color: var(--color-main-blue);
    }
    
    .btn-login-facebook {
        padding: 11px;
        background: #3B5999;
    }

    .btn-center {
        margin: 0 auto;
    }

    .btn-green {
        background: var(--color-main-green);
        color: var(--color-main-white);
        border: 1px solid var(--color-main-green);
    }

    .btn-green:hover {
        background: var(--color-hover-green);
    } 

    .btn-booking-noactive {
        background: var(--color-main-gray-text);
        color: var(--color-main-white);
        border: 1px solid var(--color-main-gray-text);
        user-select: none;
        cursor: default;
    }

    .btn-blue {
        background: var(--color-main-blue);
        position: relative;
    }

    .btn-blue:hover {
        background: var(--color-hover-blue);
    }

    .btn-header {
        margin-right: 60px;
    }

    .btn-blue-empty {
        border: 1px solid var(--color-main-blue);
        color: var(--color-main-blue);
        box-sizing: border-box;
        border-radius: 8px;
        transition: .3s;
    }

    .btn-blue-empty:hover {
        background: var(--color-main-blue);
        color: var(--color-main-white);
    }

    .btn-svg path {
        transition: .3s;
    }

    .btn-blue-empty:hover .btn-svg path {
        fill: var(--color-main-white);
    }

    .btn-yellow {
        background: var(--color-additional-orange);
    }

    .btn-yellow:hover {
        background: var(--color-hover-orange);
    }

    .btn-height {
        height: 80px;
    }

    .btn-info {
        padding: 0;
        position: relative;
    }

    .btn-info .tooltip {
        height: auto;
    }

    .btn-tooltip:hover .tooltip {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
    }

    .btn-tooltip {
        position: relative;
        width: fit-content;
    }

    .tooltip {
        width: 197px;
        height: auto;
        padding: 12px;
        text-align: center;
        background: #FFFFFF;
        border-radius: 5px;
        position: absolute;
        bottom: 100%;
        right: 0;
        transition: .3s;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        z-index: 10;
        margin-bottom: 13px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    }

    .tooltip::after {
        position: absolute;
        content: '';
        bottom: -5px;
        right: 10px;
        background: var(--color-main-white);
        z-index: -1;
        transform: rotate(45deg);
        width: 11px;
        height: 11px;
    }

    .btn-blue:hover .tooltip {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
    }

    .btn-svg {
        width: 20px;
        height: 20px;
        margin-right: 10px;
        flex-shrink: 0;
    }

    .btn-counter {
        position: relative;
    }

    .counter {
        position: absolute;
        top: -10px;
        right: -10px;
        background: var(--color-additional-red);
        padding: 2px 8px;
        color: var(--color-main-white);
        border-radius: 50%;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-user {
        border-radius: 10000px;
        border: 10px solid rgb(202 232 232);
        padding: 13px 20px;
    }

    .btn-160 {
        width: 160px !important;
    }

    .btn-application {
        padding: 13px 21px;
    }

    .btn-with-svg {
        padding: 10px;
    }

    .btn-with-svg svg {
        width: 26px;
        height: 26px;
    }

    .btn-with-svg svg path {
        transition: .3s;
    }

    .btn-with-svg:hover svg path {
        stroke: var(--color-main-white);
    }

    .btn-touragent {
        padding: 5px 17px;
        width: 200px;
    }

    .btn-vertical {
        writing-mode: vertical-lr;
        transform: rotate(180deg);
        padding: 40px 15px;
        border-radius:  8px 0 0 8px;
    }

    .btn-watch {
        font-size: 12px;
        line-height: 16px;
        padding: 3px 10px;
        width: 91px;
    }

    .btn-indexform {
        width: 135px;
    }
</style>
@mobilecss
@endcss
