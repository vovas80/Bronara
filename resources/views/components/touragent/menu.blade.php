<div class="touragent-menu">

    <x-tourist.tabs :route="$route" :tabs="[
        [
            'title'     => 'Личные данные',
            'link'      => 'touragent',
            'counter'   => '',
        ],
        [
            'title'     => 'Заявки в работе',
            'link'      => 'touragent-working',
            'counter'   => '',
        ],
        [
            'title'     => 'Забронированные туры',
            'link'      => 'touragent-booking',
            'counter'   => '',
        ],
        [
            'title'     => 'Проданные туры',
            'link'      => 'touragent-sold',
            'counter'   => '',
        ],
        
    ]" />
</div>

@desktopcss
    <style>

        .touragent-menu {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 32px;
        }

        .touragent-menu .tab {
            width: 292px;
        }

    </style>
@mobilecss
@endcss
