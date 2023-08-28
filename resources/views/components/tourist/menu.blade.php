<div class="user-menu">

    <x-inputs.button class="text-additional-semibold green user" href="{{Lang::link('/tourist/application')}}">
        <svg class="btn-svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 0C4.48615 0 0 4.48577 0 10C0 15.5142 4.48615 20 10 20C15.5138 20 20 15.5142 20 10C20 4.48577 15.5138 0 10 0ZM14.8077 10.7692H10.7692V15C10.7692 15.4246 10.4246 15.7692 10 15.7692C9.57539 15.7692 9.23077 15.4246 9.23077 15V10.7692H5.19231C4.76769 10.7692 4.42308 10.4246 4.42308 10C4.42308 9.57539 4.76769 9.23077 5.19231 9.23077H9.23077V5.38462C9.23077 4.96 9.57539 4.61538 10 4.61538C10.4246 4.61538 10.7692 4.96 10.7692 5.38462V9.23077H14.8077C15.2323 9.23077 15.5769 9.57539 15.5769 10C15.5769 10.4246 15.2323 10.7692 14.8077 10.7692Z" fill="white"/>
        </svg>      
        Создать/редактировать заявку      
    </x-inputs.button>

    <x-tourist.tabs :route="$route" :tabs="[
        [
            'title'     => 'Мои туры',
            'link'      => 'tourist-tours',
            'counter'   => '',
        ],
        [
            'title'     => 'Бронь',
            'link'      => 'tourist-booking',
            'counter'   => '1',
        ],
        [
            'title'     => 'Документы',
            'link'      => 'tourist-document',
            'counter'   => '2',
        ],
        [
            'title'     => 'Профиль',
            'link'      => 'tourist',
            'counter'   => '',
        ],
    ]" />
</div>

@desktopcss
    <style>

        .user-menu {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 16px;
        }

    </style>
@mobilecss
@endcss
