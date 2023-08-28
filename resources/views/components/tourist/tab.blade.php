<a href="{{ $link }}" class="text-main-semibold tab {{ $class }}">
    @if (!empty ($counter))
        <div class="counter text-extra-semibold tab-counter">{{ $counter }}</div>
    @endif
    {{ $slot }}
</a>

@desktopcss

<style>

    .tab {
        background: rgba(255, 255, 255, 0.6);
        border: 1px solid var(--color-main-gray-text);
        box-sizing: border-box;
        border-radius: 8px 8px 0px 0px;
        padding: 9px 30px;
        width: 200px;
        height: 40px;
        text-decoration: none;
        display: block;
        text-align: center;
        transition: .3s;
        position: relative;
    }

    .tab:not(:last-child) {
        margin-right: 12px;
    }

    .tab:hover {
        color: var(--color-main-blue);
        border: 1px solid var(--color-main-blue);
    }

    .tab.active {
        padding: 15px 30px;
        color: var(--color-main-blue);
        border: 1px solid var(--color-main-blue);
        height: 50px;
    }

</style>

@mobilecss
@endcss