<div class="whom-title {{ $class }}" data-id="{{ $id }}" onclick="{{ $onclick }}" > {{ $slot }}</div>



@desktopcss
<style>

    .whom-title {
        cursor: pointer;
        transition: .3s;
        box-sizing: border-box;
        border: 1px solid var(--color-main-gray-text);
        background: var(--color-main-white);
        color: var(--color-text-main);
        width: calc(99%/2);
        border-radius: 8px;
        padding: 10px 0;
        text-align: center;
        transition: .3s;
    }

    .whom-title:hover {
        border: 1px solid var(--color-main-green);
        background: var(--color-main-white);
        color: var(--color-main-green);
    }

    .whom-title.active {
        background: var(--color-main-green);
        border-radius: 8px;
        border: 1px solid var(--color-main-green);
        color: var(--color-main-white);
    }



</style>

@mobilecss

@endcss


@startjs
<script>




</script>
@endjs