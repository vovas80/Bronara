<div class="favourite @if ($saved) active @endif" onclick="Saved.toggle(this, {{ $id }})">
    <div class="text-extra-regular favoutite-text notadded @if (!$saved) active @endif">{{$fields['btn1']}}</div>
    <div class="text-extra-regular favoutite-text already @if ($saved) active @endif">{{$fields['btn2']}}</div>

    <svg class="favourite-svg" width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19.0631 26.3834L19.063 26.3835C18.591 26.7662 17.6801 27.4669 16.8757 28.0804C16.5516 28.3276 16.2473 28.5587 16 28.7461C15.7527 28.5587 15.4484 28.3276 15.1243 28.0804C14.3199 27.4669 13.409 26.7662 12.937 26.3835L12.9369 26.3834C11.2067 24.9806 9.10232 23.1884 7.17602 21.315C5.23659 19.4288 3.53223 17.5121 2.55324 15.8595L2.55288 15.8589C1.11635 13.4378 0.644261 10.4233 1.27181 7.62218L1.27189 7.6222L1.27462 7.6092C2.58928 1.35291 9.77629 -1.05437 14.1768 3.01425L14.1792 3.01648C14.4222 3.23965 14.6522 3.49252 14.9253 3.79428C15.0339 3.9144 15.1491 4.04165 15.2685 4.1697L16 4.95455L16.7315 4.16971C16.8508 4.04171 16.9659 3.91456 17.0746 3.79443C17.3478 3.4926 17.5777 3.23968 17.8208 3.01649L17.8232 3.01424C22.2237 -1.05437 29.4107 1.35292 30.7254 7.6092L30.7253 7.60922L30.7282 7.62218C31.3557 10.4233 30.8836 13.4378 29.4471 15.8589L29.4468 15.8595C28.4678 17.5121 26.7634 19.4288 24.824 21.315C22.8977 23.1884 20.7933 24.9806 19.0631 26.3834Z" stroke="#DA3732" stroke-width="2"/>
    </svg>    

</div>

@desktopcss

<style>

    .favourite {
        display: flex;
    }

    .favoutite-text {
        color: var(--color-additional-red);
        width: 83px;
        margin-right: 10px;
    }

    .notadded,
    .already {
        display: none;
    }

    .notadded.active,
    .already.active {
        display: block;
    }

    .favourite-svg {
        width: 32px;
        height: 30px;
        cursor: pointer;
        transition: .3s;
    }

    .favourite-svg path {
        transition: .3s;
    }

    .favourite-svg:hover path {
        fill: var(--color-additional-red);
    }

    .favourite.active .favourite-svg path {
        fill: var(--color-additional-red);
    }

</style>

@mobilecss

<style>

</style>
@endcss

@startjs

<script>

    // function favourite_click (elm) {
    //     elm.classList.toggle('active')

    //     elm.querySelector('.already').classList.toggle('active')
    //     elm.querySelector('.notadded').classList.toggle('active')
    // }

</script>

@endjs