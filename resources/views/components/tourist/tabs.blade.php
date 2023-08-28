<div class="tabs">

    @foreach ($tabs as $tab)
        <x-tourist.tab :link="route($tab['link'], [], false)" :class="$tab['class']" :counter="$tab['counter']">
            {{ $tab['title'] }}
        </x-tourist.tab>
    @endforeach

</div>

@desktopcss
<style>
    .tabs {
        display: flex;
        align-items: flex-end;
        height: 50px;
    }
</style>
@mobilecss
@endcss