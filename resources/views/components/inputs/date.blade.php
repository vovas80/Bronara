<div {{ $attributes->merge([ 'class' => 'date-wrapper date-wrapper-'.$class ]) }}>
        
    <label for="date" class="input-label date-label">
        <div class="text-main-regular date-label-text">{{ $label }}</div>

        {{-- <input {{ $attributes->merge([ 'class' => 'input extra-text input-'.$class ]) }} 
            placeholder="{!! $placeholder !!}" 
            type="{{ $type }}" 
            @if($required)    
                required
            @endif
            name="{{ $name }}"
        > --}}

        @if($noperiod)

            <input type="text" class="text-additional-semibold datepicker-input noperiod" name="date" placeholder="{{ $placeholder }}" autocomplete="off" @if ($required) required @endif>

        @else 

            <div class="datepicker-input-inner datapicker">
                <input type="text" class="text-additional-semibold datepicker-input start" name="startDate" data-time placeholder="{{ $placeholder }}" autocomplete="off" @if ($required) required @endif value="{{ $dateFrom }}">
                <div class="text-additional-semibold datepicker-input-text">
                    -
                </div>
                <input type="text" class="text-additional-semibold datepicker-input end" name="endDate" placeholder="{{ $placeholder }}" autocomplete="off" @if ($required) required @endif value="{{ $dateTo }}">
            </div>   

        @endif

    </label>

    @if($checkbox)

        <x-inputs.checkbox name="date" id="1" :checked="$checked">
            {{ $checkbox }}
        </x-inputs.checkbox>

    @endif

</div>

@desktopcss
<style>

    .date-label {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        width: 170px;
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 5px;
        padding: 13px 16px; 
    }

    .date-label-text {
        margin-bottom: 8px;
        color: var(--color-main-gray-text);
    }

    .date-wrapper-touragent-searchform {
        width: 292px;
    }

    .date-wrapper-index {
        width: 165px;
    }

    .date-wrapper-touragent-searchform .date-label {
        width: 100%;
    }

    .date-wrapper-260 .date-label {
        width: 260px;
    }

    .datepicker-input-text {
        margin: 0 3px;
    }

    .datepicker-input-inner {
        display: flex;
        width: 100%;
        justify-content: space-between;
        color: var(--color-text-main);
    }

    /*
        Date picker
    */


    /* Layout helpers
    ----------------------------------*/

    .ui-helper-hidden {
        display: none;
    }

    .ui-helper-hidden-accessible {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .ui-helper-reset {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        line-height: 1.3;
        text-decoration: none;
        font-size: 100%;
        list-style: none;
    }

    .ui-helper-clearfix:before,
    .ui-helper-clearfix:after {
        content: "";
        display: table;
        border-collapse: collapse;
    }

    .ui-helper-clearfix:after {
        clear: both;
    }

    .ui-helper-zfix {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: absolute;
        opacity: 0;
        -ms-filter: "alpha(opacity=0)";
        /* support: IE8 */
    }

    .ui-front {
        z-index: 100;
    }


    /* Interaction Cues
    ----------------------------------*/

    .ui-state-disabled {
        cursor: default !important;
        pointer-events: none;
    }


    /* Icons
    ----------------------------------*/

    .ui-icon {
        display: inline-block;
        vertical-align: middle;
        margin-top: -.25em;
        position: relative;
        text-indent: -99999px;
        overflow: hidden;
        background-repeat: no-repeat;
    }

    .ui-widget-icon-block {
        left: 50%;
        margin-left: -8px;
        display: block;
    }


    /* Misc visuals
    ----------------------------------*/


    /* Overlays */

    .ui-widget-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .ui-accordion .ui-accordion-header {
        display: block;
        cursor: pointer;
        position: relative;
        margin: 2px 0 0 0;
        padding: .5em .5em .5em .7em;
        font-size: 100%;
    }

    .ui-accordion .ui-accordion-content {
        padding: 1em 2.2em;
        border-top: 0;
        overflow: auto;
    }

    .ui-autocomplete {
        position: absolute;
        top: 0;
        left: 0;
        cursor: default;
    }

    .ui-menu {
        list-style: none;
        padding: 0;
        margin: 0;
        display: block;
        outline: 0;
    }

    .ui-menu .ui-menu {
        position: absolute;
    }

    .ui-menu .ui-menu-item {
        margin: 0;
        cursor: pointer;
        /* support: IE10, see #8844 */
    }

    .ui-menu .ui-menu-item-wrapper {
        position: relative;
        padding: 3px 1em 3px .4em;
    }

    .ui-menu .ui-menu-divider {
        margin: 5px 0;
        height: 0;
        font-size: 0;
        line-height: 0;
        border-width: 1px 0 0 0;
    }

    .ui-menu .ui-state-focus,
    .ui-menu .ui-state-active {
        margin: -1px;
    }


    /* icon support */

    .ui-menu-icons {
        position: relative;
    }

    .ui-menu-icons .ui-menu-item-wrapper {
        padding-left: 2em;
    }


    /* left-aligned */

    .ui-menu .ui-icon {
        position: absolute;
        top: 0;
        bottom: 0;
        left: .2em;
        margin: auto 0;
    }


    /* right-aligned */

    .ui-menu .ui-menu-icon {
        left: auto;
        right: 0;
    }

    .ui-button {
        padding: .4em 1em;
        display: inline-block;
        position: relative;
        line-height: normal;
        margin-right: .1em;
        cursor: pointer;
        vertical-align: middle;
        text-align: center;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        /* Support: IE <= 11 */
        overflow: visible;
    }

    .ui-button,
    .ui-button:link,
    .ui-button:visited,
    .ui-button:hover,
    .ui-button:active {
        text-decoration: none;
    }


    /* to make room for the icon, a width needs to be set here */

    .ui-button-icon-only {
        width: 2em;
        box-sizing: border-box;
        text-indent: -9999px;
        white-space: nowrap;
    }


    /* no icon support for input elements */

    input.ui-button.ui-button-icon-only {
        text-indent: 0;
    }


    /* button icon element(s) */

    .ui-button-icon-only .ui-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -8px;
        margin-left: -8px;
    }

    .ui-button.ui-icon-notext .ui-icon {
        padding: 0;
        width: 2.1em;
        height: 2.1em;
        text-indent: -9999px;
        white-space: nowrap;
    }

    input.ui-button.ui-icon-notext .ui-icon {
        width: auto;
        height: auto;
        text-indent: 0;
        white-space: normal;
        padding: .4em 1em;
    }


    /* workarounds */


    /* Support: Firefox 5 - 40 */

    input.ui-button::-moz-focus-inner,
    button.ui-button::-moz-focus-inner {
        border: 0;
        padding: 0;
    }

    .ui-controlgroup {
        vertical-align: middle;
        display: inline-block;
    }

    .ui-controlgroup>.ui-controlgroup-item {
        float: left;
        margin-left: 0;
        margin-right: 0;
    }

    .ui-controlgroup>.ui-controlgroup-item:focus,
    .ui-controlgroup>.ui-controlgroup-item.ui-visual-focus {
        z-index: 9999;
    }

    .ui-controlgroup-vertical>.ui-controlgroup-item {
        display: block;
        float: none;
        width: 100%;
        margin-top: 0;
        margin-bottom: 0;
        text-align: left;
    }

    .ui-controlgroup-vertical .ui-controlgroup-item {
        box-sizing: border-box;
    }

    .ui-controlgroup .ui-controlgroup-label {
        padding: .4em 1em;
    }

    .ui-controlgroup .ui-controlgroup-label span {
        font-size: 80%;
    }

    .ui-controlgroup-horizontal .ui-controlgroup-label+.ui-controlgroup-item {
        border-left: none;
    }

    .ui-controlgroup-vertical .ui-controlgroup-label+.ui-controlgroup-item {
        border-top: none;
    }

    .ui-controlgroup-horizontal .ui-controlgroup-label.ui-widget-content {
        border-right: none;
    }

    .ui-controlgroup-vertical .ui-controlgroup-label.ui-widget-content {
        border-bottom: none;
    }


    /* Spinner specific style fixes */

    .ui-controlgroup-vertical .ui-spinner-input {
        /* Support: IE8 only, Android < 4.4 only */
        width: 75%;
        width: calc( 100% - 2.4em);
    }

    .ui-controlgroup-vertical .ui-spinner .ui-spinner-up {
        border-top-style: solid;
    }

    .ui-checkboxradio-label .ui-icon-background {
        box-shadow: inset 1px 1px 1px #ccc;
        border-radius: .12em;
        border: none;
    }

    .ui-checkboxradio-radio-label .ui-icon-background {
        width: 16px;
        height: 16px;
        border-radius: 1em;
        overflow: visible;
        border: none;
    }

    .ui-checkboxradio-radio-label.ui-checkboxradio-checked .ui-icon,
    .ui-checkboxradio-radio-label.ui-checkboxradio-checked:hover .ui-icon {
        background-image: none;
        width: 8px;
        height: 8px;
        border-width: 4px;
        border-style: solid;
    }

    .ui-checkboxradio-disabled {
        pointer-events: none;
    }

    .ui-datepicker {
        width: 17em;
        padding: .2em .2em 0;
        display: none;
    }

    .ui-datepicker .ui-datepicker-header {
        position: relative;
        padding: .2em 0;
    }

    .ui-datepicker .ui-datepicker-prev,
    .ui-datepicker .ui-datepicker-next {
        position: absolute;
        top: 1px;
        width: 1.8em;
        height: 1.8em;
        cursor: pointer;
    }

    .ui-datepicker .ui-datepicker-prev {
        left: 2px;
    }

    .ui-datepicker .ui-datepicker-next {
        right: 2px;
    }

    .ui-datepicker .ui-datepicker-prev span,
    .ui-datepicker .ui-datepicker-next span {
        display: block;
        position: absolute;
        left: 50%;
        margin-left: -8px;
        top: 50%;
        margin-top: -8px;
    }

    .ui-datepicker .ui-datepicker-title {
        margin: 0 2.3em;
        line-height: 1.8em;
        text-align: center;
    }

    .ui-datepicker .ui-datepicker-title select {
        font-size: 1em;
        margin: 1px 0;
    }

    .ui-datepicker select.ui-datepicker-month,
    .ui-datepicker select.ui-datepicker-year {
        width: 45%;
    }

    .ui-datepicker table {
        width: 100%;
        font-size: .9em;
        border-collapse: collapse;
        margin: 0 0 .4em;
    }

    .ui-datepicker th {
        padding: .7em .3em;
        text-align: center;
        font-weight: bold;
        border: 0;
    }

    .ui-datepicker td {
        border: 0;
        padding: 1px;
    }

    .ui-datepicker td span,
    .ui-datepicker td a {
        display: block;
        padding: .2em;
        text-align: right;
        text-decoration: none;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ui-datepicker .ui-datepicker-buttonpane {
        background-image: none;
        margin: .7em 0 0 0;
        padding: 0 .2em;
        border-left: 0;
        border-right: 0;
        border-bottom: 0;
    }

    .ui-datepicker .ui-datepicker-buttonpane button {
        float: right;
        margin: .5em .2em .4em;
        cursor: pointer;
        padding: .2em .6em .3em .6em;
        width: auto;
        overflow: visible;
    }

    .ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
        float: left;
    }


    /* with multiple calendars */

    .ui-datepicker.ui-datepicker-multi {
        width: auto;
    }

    .ui-datepicker-multi .ui-datepicker-group {
        float: left;
    }

    .ui-datepicker-multi .ui-datepicker-group table {
        width: 95%;
        margin: 0 auto .4em;
    }

    .ui-datepicker-multi-2 .ui-datepicker-group {
        width: 50%;
    }

    .ui-datepicker-multi-3 .ui-datepicker-group {
        width: 33.3%;
    }

    .ui-datepicker-multi-4 .ui-datepicker-group {
        width: 25%;
    }

    .ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
    .ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
        border-left-width: 0;
    }

    .ui-datepicker-multi .ui-datepicker-buttonpane {
        clear: left;
    }

    .ui-datepicker-row-break {
        clear: both;
        width: 100%;
        font-size: 0;
    }


    /* RTL support */

    .ui-datepicker-rtl {
        direction: rtl;
    }

    .ui-datepicker-rtl .ui-datepicker-prev {
        right: 2px;
        left: auto;
    }

    .ui-datepicker-rtl .ui-datepicker-next {
        left: 2px;
        right: auto;
    }

    .ui-datepicker-rtl .ui-datepicker-prev:hover {
        right: 1px;
        left: auto;
    }

    .ui-datepicker-rtl .ui-datepicker-next:hover {
        left: 1px;
        right: auto;
    }

    .ui-datepicker-rtl .ui-datepicker-buttonpane {
        clear: right;
    }

    .ui-datepicker-rtl .ui-datepicker-buttonpane button {
        float: left;
    }

    .ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
    .ui-datepicker-rtl .ui-datepicker-group {
        float: right;
    }

    .ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
    .ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
        border-right-width: 0;
        border-left-width: 1px;
    }


    /* Icons */

    .ui-datepicker .ui-icon {
        display: block;
        text-indent: -99999px;
        overflow: hidden;
        background-repeat: no-repeat;
        left: .5em;
        top: .3em;
    }

    .ui-dialog {
        position: absolute;
        top: 0;
        left: 0;
        padding: .2em;
        outline: 0;
    }

    .ui-dialog .ui-dialog-titlebar {
        padding: .4em 1em;
        position: relative;
    }

    .ui-dialog .ui-dialog-title {
        float: left;
        margin: .1em 0;
        white-space: nowrap;
        width: 90%;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .ui-dialog .ui-dialog-titlebar-close {
        position: absolute;
        right: .3em;
        top: 50%;
        width: 20px;
        margin: -10px 0 0 0;
        padding: 1px;
        height: 20px;
    }

    .ui-dialog .ui-dialog-content {
        position: relative;
        border: 0;
        padding: .5em 1em;
        background: none;
        overflow: auto;
    }

    .ui-dialog .ui-dialog-buttonpane {
        text-align: left;
        border-width: 1px 0 0 0;
        background-image: none;
        margin-top: .5em;
        padding: .3em 1em .5em .4em;
    }

    .ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
        float: right;
    }

    .ui-dialog .ui-dialog-buttonpane button {
        margin: .5em .4em .5em 0;
        cursor: pointer;
    }

    .ui-dialog .ui-resizable-n {
        height: 2px;
        top: 0;
    }

    .ui-dialog .ui-resizable-e {
        width: 2px;
        right: 0;
    }

    .ui-dialog .ui-resizable-s {
        height: 2px;
        bottom: 0;
    }

    .ui-dialog .ui-resizable-w {
        width: 2px;
        left: 0;
    }

    .ui-dialog .ui-resizable-se,
    .ui-dialog .ui-resizable-sw,
    .ui-dialog .ui-resizable-ne,
    .ui-dialog .ui-resizable-nw {
        width: 7px;
        height: 7px;
    }

    .ui-dialog .ui-resizable-se {
        right: 0;
        bottom: 0;
    }

    .ui-dialog .ui-resizable-sw {
        left: 0;
        bottom: 0;
    }

    .ui-dialog .ui-resizable-ne {
        right: 0;
        top: 0;
    }

    .ui-dialog .ui-resizable-nw {
        left: 0;
        top: 0;
    }

    .ui-draggable .ui-dialog-titlebar {
        cursor: move;
    }

    .ui-draggable-handle {
        -ms-touch-action: none;
        touch-action: none;
    }

    .ui-resizable {
        position: relative;
    }

    .ui-resizable-handle {
        position: absolute;
        font-size: 0.1px;
        display: block;
        -ms-touch-action: none;
        touch-action: none;
    }

    .ui-resizable-disabled .ui-resizable-handle,
    .ui-resizable-autohide .ui-resizable-handle {
        display: none;
    }

    .ui-resizable-n {
        cursor: n-resize;
        height: 7px;
        width: 100%;
        top: -5px;
        left: 0;
    }

    .ui-resizable-s {
        cursor: s-resize;
        height: 7px;
        width: 100%;
        bottom: -5px;
        left: 0;
    }

    .ui-resizable-e {
        cursor: e-resize;
        width: 7px;
        right: -5px;
        top: 0;
        height: 100%;
    }

    .ui-resizable-w {
        cursor: w-resize;
        width: 7px;
        left: -5px;
        top: 0;
        height: 100%;
    }

    .ui-resizable-se {
        cursor: se-resize;
        width: 12px;
        height: 12px;
        right: 1px;
        bottom: 1px;
    }

    .ui-resizable-sw {
        cursor: sw-resize;
        width: 9px;
        height: 9px;
        left: -5px;
        bottom: -5px;
    }

    .ui-resizable-nw {
        cursor: nw-resize;
        width: 9px;
        height: 9px;
        left: -5px;
        top: -5px;
    }

    .ui-resizable-ne {
        cursor: ne-resize;
        width: 9px;
        height: 9px;
        right: -5px;
        top: -5px;
    }

    .ui-progressbar {
        height: 2em;
        text-align: left;
        overflow: hidden;
    }

    .ui-progressbar .ui-progressbar-value {
        margin: -1px;
        height: 100%;
    }

    .ui-progressbar .ui-progressbar-overlay {
        background: url("data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw==");
        height: 100%;
        -ms-filter: "alpha(opacity=25)";
        /* support: IE8 */
        opacity: 0.25;
    }

    .ui-progressbar-indeterminate .ui-progressbar-value {
        background-image: none;
    }

    .ui-selectable {
        -ms-touch-action: none;
        touch-action: none;
    }

    .ui-selectable-helper {
        position: absolute;
        z-index: 100;
        border: 1px dotted black;
    }

    .ui-selectmenu-menu {
        padding: 0;
        margin: 0;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
    }

    .ui-selectmenu-menu .ui-menu {
        overflow: auto;
        overflow-x: hidden;
        padding-bottom: 1px;
    }

    .ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup {
        font-size: 1em;
        font-weight: bold;
        line-height: 1.5;
        padding: 2px 0.4em;
        margin: 0.5em 0 0 0;
        height: auto;
        border: 0;
    }

    .ui-selectmenu-open {
        display: block;
    }

    .ui-selectmenu-text {
        display: block;
        margin-right: 20px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .ui-selectmenu-button.ui-button {
        text-align: left;
        white-space: nowrap;
        width: 14em;
    }

    .ui-selectmenu-icon.ui-icon {
        float: right;
        margin-top: 0;
    }

    .ui-slider {
        position: relative;
        text-align: left;
    }

    .ui-slider .ui-slider-handle {
        position: absolute;
        z-index: 2;
        width: 1.2em;
        height: 1.2em;
        cursor: pointer;
        -ms-touch-action: none;
        touch-action: none;
    }

    .ui-slider .ui-slider-range {
        position: absolute;
        z-index: 1;
        font-size: .7em;
        display: block;
        border: 0;
        background-position: 0 0;
    }


    /* support: IE8 - See #6727 */

    .ui-slider.ui-state-disabled .ui-slider-handle,
    .ui-slider.ui-state-disabled .ui-slider-range {
        filter: inherit;
    }

    .ui-slider-horizontal {
        height: .8em;
    }

    .ui-slider-horizontal .ui-slider-handle {
        top: -.3em;
        margin-left: -.6em;
    }

    .ui-slider-horizontal .ui-slider-range {
        top: 0;
        height: 100%;
    }

    .ui-slider-horizontal .ui-slider-range-min {
        left: 0;
    }

    .ui-slider-horizontal .ui-slider-range-max {
        right: 0;
    }

    .ui-slider-vertical {
        width: .8em;
        height: 100px;
    }

    .ui-slider-vertical .ui-slider-handle {
        left: -.3em;
        margin-left: 0;
        margin-bottom: -.6em;
    }

    .ui-slider-vertical .ui-slider-range {
        left: 0;
        width: 100%;
    }

    .ui-slider-vertical .ui-slider-range-min {
        bottom: 0;
    }

    .ui-slider-vertical .ui-slider-range-max {
        top: 0;
    }

    .ui-sortable-handle {
        -ms-touch-action: none;
        touch-action: none;
    }

    .ui-spinner {
        position: relative;
        display: inline-block;
        overflow: hidden;
        padding: 0;
        vertical-align: middle;
    }

    .ui-spinner-input {
        border: none;
        background: none;
        color: inherit;
        padding: .222em 0;
        margin: .2em 0;
        vertical-align: middle;
        margin-left: .4em;
        margin-right: 2em;
    }

    .ui-spinner-button {
        width: 1.6em;
        height: 50%;
        font-size: .5em;
        padding: 0;
        margin: 0;
        text-align: center;
        position: absolute;
        cursor: default;
        display: block;
        overflow: hidden;
        right: 0;
    }


    /* more specificity required here to override default borders */

    .ui-spinner a.ui-spinner-button {
        border-top-style: none;
        border-bottom-style: none;
        border-right-style: none;
    }

    .ui-spinner-up {
        top: 0;
    }

    .ui-spinner-down {
        bottom: 0;
    }

    .ui-tabs {
        position: relative;
        /* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as "fixed") */
        padding: .2em;
    }

    .ui-tabs .ui-tabs-nav {
        margin: 0;
        padding: .2em .2em 0;
    }

    .ui-tabs .ui-tabs-nav li {
        list-style: none;
        float: left;
        position: relative;
        top: 0;
        margin: 1px .2em 0 0;
        border-bottom-width: 0;
        padding: 0;
        white-space: nowrap;
    }

    .ui-tabs .ui-tabs-nav .ui-tabs-anchor {
        float: left;
        padding: .5em 1em;
        text-decoration: none;
    }

    .ui-tabs .ui-tabs-nav li.ui-tabs-active {
        margin-bottom: -1px;
        padding-bottom: 1px;
    }

    .ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,
    .ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,
    .ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor {
        cursor: text;
    }

    .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor {
        cursor: pointer;
    }

    .ui-tabs .ui-tabs-panel {
        display: block;
        border-width: 0;
        padding: 1em 1.4em;
        background: none;
    }

    .ui-tooltip {
        padding: 8px;
        position: absolute;
        z-index: 9999;
        max-width: 300px;
    }

    body .ui-tooltip {
        border-width: 2px;
    }


    /* Component containers
    ----------------------------------*/

    .ui-widget {
        font-size: 1em;
    }

    .ui-widget .ui-widget {
        font-size: 1em;
    }

    .ui-widget input,
    .ui-widget select,
    .ui-widget textarea,
    .ui-widget button {
        font-family: 'Averta CY';
        font-size: 1em;
    }

    .ui-widget.ui-widget-content {
        font-family: 'Averta CY';
        border: 1px solid #fff;
        width: 360px !important;
        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.1);
    }

    .ui-widget.ui-datepicker-multi-2 {
        width: 720px !important;
    }

    .ui-widget-content {
        border: 1px solid #fff;
        background: #ffffff;
        color: #333333;
        margin-top: 5px;
    }

    .ui-widget-content a {
        color: #333333;
        border-radius: 5px;
    }

    .ui-widget-header {
        border: 1px solid #fff;
        /* background: #e9e9e9; */
        color: #333333;
        font-weight: bold;
    }

    .ui-widget-header a {
        color: #333333;
    }


    /* Interaction states
    ----------------------------------*/


    /* .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default,
    .ui-button, */


    /* We use html here because we need a greater specificity to make sure disabled
    works properly when clicked or hovered */


    /* html .ui-button.ui-state-disabled:hover,
    html .ui-button.ui-state-disabled:active {
        border: 1px solid #c5c5c5;
        background: #f6f6f6;
        font-weight: normal;
        color: #454545;
    } */

    .ui-state-default a,
    .ui-state-default a:link,
    .ui-state-default a:visited,
    a.ui-button,
    a:link.ui-button,
    a:visited.ui-button,
    .ui-button {
        color: #454545;
        text-decoration: none;
    }


    /* .ui-state-hover,
    .ui-widget-content .ui-state-hover,
    .ui-widget-header .ui-state-hover,
    .ui-state-focus,
    .ui-widget-content .ui-state-focus,
    .ui-widget-header .ui-state-focus,
    .ui-button:hover,
    .ui-button:focus {
        border: 1px solid #cccccc;
        background: #ededed;
        font-weight: normal;
        color: #2b2b2b;
    } */

    .ui-state-hover a,
    .ui-state-hover a:hover,
    .ui-state-hover a:link,
    .ui-state-hover a:visited,
    .ui-state-focus a,
    .ui-state-focus a:hover,
    .ui-state-focus a:link,
    .ui-state-focus a:visited,
    a.ui-button:hover,
    a.ui-button:focus {
        color: #2b2b2b;
        text-decoration: none;
    }

    .ui-visual-focus {
        box-shadow: 0 0 3px 1px rgb(94, 158, 214);
    }

    .ui-state-active,
    .ui-widget-content .ui-state-active,
    .ui-widget-header .ui-state-active,
    a.ui-button:active,
    .ui-button:active,
    .ui-button.ui-state-active:hover {
        border: 1px solid var(--color-main-blue);
        background: var(--color-main-blue);
        color: var(--color-main-white);
        font-weight: normal;
    }

    .ui-icon-background,
    .ui-state-active .ui-icon-background {
        border: #003eff;
        background-color: #ffffff;
    }

    .ui-state-active a,
    .ui-state-active a:link,
    .ui-state-active a:visited {
        color: #ffffff;
        text-decoration: none;
    }


    /* Interaction Cues
    ----------------------------------*/

    .ui-state-default {
        transition: .3s;
        border: none;
    }

    .ui-state-default:hover {
        border: 1px solid var(--color-main-blue);
        background: var(--color-main-blue);
        color: var(--color-main-white);
        border-radius: 5px;
    }

    .ui-state-checked {
        border: 1px solid var(--color-main-blue);
        background: var(--color-main-blue);
        color: var(--color-main-white);
        border-radius: 5px;
    }

    .ui-state-highlight {
        border: 1px solid var(--color-green2);
        background: var(--color-green2);
        border-radius: 5px;
    }

    .ui-state-highlight a,
    .ui-widget-content .ui-state-highlight a,
    .ui-widget-header .ui-state-highlight a {
        color: #777620;
    }

    .ui-state-error,
    .ui-widget-content .ui-state-error,
    .ui-widget-header .ui-state-error {
        border: 1px solid #f1a899;
        background: #fddfdf;
        color: #5f3f3f;
    }

    .ui-state-error a,
    .ui-widget-content .ui-state-error a,
    .ui-widget-header .ui-state-error a {
        color: #5f3f3f;
    }

    .ui-state-error-text,
    .ui-widget-content .ui-state-error-text,
    .ui-widget-header .ui-state-error-text {
        color: #5f3f3f;
    }

    .ui-priority-primary,
    .ui-widget-content .ui-priority-primary,
    .ui-widget-header .ui-priority-primary {
        font-weight: bold;
    }

    .ui-priority-secondary,
    .ui-widget-content .ui-priority-secondary,
    .ui-widget-header .ui-priority-secondary {
        opacity: .7;
        -ms-filter: "alpha(opacity=70)";
        /* support: IE8 */
        font-weight: normal;
    }

    .ui-state-disabled,
    .ui-widget-content .ui-state-disabled,
    .ui-widget-header .ui-state-disabled {
        opacity: .35;
        -ms-filter: "alpha(opacity=35)";
        /* support: IE8 */
        background-image: none;
    }

    .ui-state-disabled .ui-icon {
        -ms-filter: "alpha(opacity=35)";
        /* support: IE8 - See #6059 */
    }


    /* Icons
    ----------------------------------*/


    /* states and images */

    .ui-icon {
        width: 16px;
        height: 16px;
    }

    .ui-icon svg {
        width: 16px;
        height: 16px;
    }


    /* positioning */


    /* Misc visuals
    ----------------------------------*/


    /* Overlays */

    .ui-widget-overlay {
        background: #aaaaaa;
        opacity: .3;
        -ms-filter: Alpha(Opacity=30);
        /* support: IE8 */
    }

    .ui-widget-shadow {
        -webkit-box-shadow: 0px 0px 5px #666666;
        box-shadow: 0px 0px 5px #666666;
    }


    /*
        End datepicker
    */
</style>

<style>

    .datepicker-input-svg {
        position: absolute;
        width: 12px;
        height: 12px;
        bottom: 11px;
        left: 15px;
    }

    .datepicker-input {
        width: 100%;
        border: none;
        font-family: 'Averta CY';
        background: transparent;
    }

    .datepicker-input::placeholder {
        color: var(--color-main-gray-text);
    }

    .date-wrapper .checkbox {
        margin-top: 5px;
    }

</style>
@mobilecss
@endcss

@startjs
<script>

    (function($){
        $.datepicker._get_original=$.datepicker._get,$.datepicker._get=function(t,e){var i=$.datepicker._get_original(t,e),a=t.settings.range;if(!a)return i;var s=this;switch(a){case"period":case"multiple":var n=$(this.dpDiv).data("datepickerExtensionRange");switch(n||(n=new _datepickerExtension,$(this.dpDiv).data("datepickerExtensionRange",n)),n.range=a,n.range_multiple_max=t.settings.range_multiple_max||0,e){case"onSelect":var r=i;r||(r=function(){}),i=function(t,e){n.onSelect(t,e),r(t,e,n),s._datepickerShowing=!1,setTimeout(function(){s._updateDatepicker(e),s._datepickerShowing=!0}),n.setClassActive(e)};break;case"beforeShowDay":var r=i;r||(r=function(){return[!0,""]}),i=function(t){var e=r(t);return e=n.fillDay(t,e)};break;case"beforeShow":var r=i;r||(r=function(){}),i=function(t,e){r(t,e),n.setClassActive(e)};break;case"onChangeMonthYear":var r=i;r||(r=function(){}),i=function(t,e,i){r(t,e,i),n.setClassActive(i)}}}return i},$.datepicker._setDate_original=$.datepicker._setDate,$.datepicker._setDate=function(t,e,i){var a=t.settings.range;if(!a)return $.datepicker._setDate_original(t,e,i);var s=this.dpDiv.data("datepickerExtensionRange");if(!s)return $.datepicker._setDate_original(t,e,i);switch(a){case"period":("object"!=typeof e||void 0==e.length)&&(e=[e,e]),s.step=0,$.datepicker._setDate_original(t,e[0],i),s.startDate=this._getDate(t),s.startDateText=this._formatDate(t),$.datepicker._setDate_original(t,e[1],i),s.endDate=this._getDate(t),s.endDateText=this._formatDate(t),s.setClassActive(t);break;case"multiple":("object"!=typeof e||void 0==e.length)&&(e=[e]),s.dates=[],s.datesText=[];var n=this;$.map(e,function(e){$.datepicker._setDate_original(t,e,i),s.dates.push(n._getDate(t)),s.datesText.push(n._formatDate(t))}),s.setClassActive(t)}};var _datepickerExtension=function(){this.range=!1,this.range_multiple_max=0,this.step=0,this.dates=[],this.datesText=[],this.startDate=null,this.endDate=null,this.startDateText="",this.endDateText="",this.onSelect=function(t,e){switch(this.range){case"period":return this.onSelectPeriod(t,e);case"multiple":return this.onSelectMultiple(t,e)}},this.onSelectPeriod=function(t,e){this.step++,this.step%=2,this.step?(this.startDate=this.getSelectedDate(e),this.endDate=this.startDate,this.startDateText=t,this.endDateText=this.startDateText):(this.endDate=this.getSelectedDate(e),this.endDateText=t,this.startDate.getTime()>this.endDate.getTime()&&(this.endDate=this.startDate,this.startDate=this.getSelectedDate(e),this.endDateText=this.startDateText,this.startDateText=t))},this.onSelectMultiple=function(t,e){var i=this.getSelectedDate(e),a=-1;$.map(this.dates,function(t,e){t.getTime()==i.getTime()&&(a=e)});var s=$.inArray(t,this.datesText);-1!=a?this.dates.splice(a,1):this.dates.push(i),-1!=s?this.datesText.splice(s,1):this.datesText.push(t),this.range_multiple_max&&this.dates.length>this.range_multiple_max&&(this.dates.splice(0,1),this.datesText.splice(0,1))},this.fillDay=function(t,e){var i=e[1];switch(1==t.getDate()&&(i+=" first-of-month"),t.getDate()==new Date(t.getFullYear(),t.getMonth()+1,0).getDate()&&(i+=" last-of-month"),e[1]=i.trim(),this.range){case"period":return this.fillDayPeriod(t,e);case"multiple":return this.fillDayMultiple(t,e)}},this.fillDayPeriod=function(t,e){if(!this.startDate||!this.endDate)return e;var i=e[1];return t>=this.startDate&&t<=this.endDate&&(i+=" selected"),t.getTime()==this.startDate.getTime()&&(i+=" selected-start"),t.getTime()==this.endDate.getTime()&&(i+=" selected-end"),e[1]=i.trim(),e},this.fillDayMultiple=function(t,e){var i=e[1],a=!1;return $.map(this.dates,function(e){e.getTime()==t.getTime()&&(a=!0)}),a&&(i+=" selected selected-start selected-end"),e[1]=i.trim(),e},this.getSelectedDate=function(t){return new Date(t.selectedYear,t.selectedMonth,t.selectedDay)},this.setClassActive=function(t){var e=this;setTimeout(function(){$("td.selected > *",t.dpDiv).addClass("ui-state-active"),"multiple"==e.range&&$("td:not(.selected)",t.dpDiv).removeClass("ui-datepicker-current-day").children().removeClass("ui-state-active")})}};

        $.datepicker.setDefaults($.datepicker.regional["{{ Lang::get() }}"])

        $('.noperiod').datepicker({
            dateFormat: "dd.mm.y",
            // changeYear: true,
            minDate: 0,
            });


        $('.datepicker-input').datepicker({
            dateFormat: "dd.mm.yy",
            // changeYear: true,
            range: 'period', // режим - выбор периода
            numberOfMonths: 2,
            minDate: 0,
            onSelect: function(dateText, inst, extensionRange) {
                // extensionRange - объект расширения
                $('[name=startDate]').val(extensionRange.startDateText);
                $('[name=endDate]').val(extensionRange.endDateText);
                }
            });

            // $('.datepicker-input').datepicker('setDate', ['+4d', '+8d']);

            var extensionRange = $('.datepicker-input').datepicker('widget').data('datepickerExtensionRange');
            if(extensionRange.startDateText) 
                $('[name=startDate]').val(extensionRange.startDateText);
            if(extensionRange.endDateText) 
                $('[name=endDate]').val(extensionRange.endDateText);



    })(jQuery)

</script>
@endjs

<?php JSAssembler::add('/js/jquery.js', 0); ?>
<?php JSAssembler::add('/js/datepicker.js'); ?>