<div class="agentblock">

    <img class="agentblock-img" src="@if($touragent->photo){{$touragent->photo}}@else/photos/1/icons/userblue.svg @endif" alt="">

    <div class="agentblock-info">

        <div class="agentblock-info-top">

            <x-tour.agent-textblock title="Имя:" >
                {{$touragent->name}}
            </x-tour.agent-textblock>   
            
            <x-tour.agent-textblock title="Название турагенства:" >
                {{$touragent->company}}
            </x-tour.agent-textblock>   

            <x-tour.agent-textblock title="Рейтинг:" >
                {{$touragent->mark}}/10
            </x-tour.agent-textblock>   

            <x-tour.agent-textblock title="Номер лицензии:" >
                {{$touragent->license}}
            </x-tour.agent-textblock>   
        </div>

        <div class="agentblock-info-bottom">

            <x-tour.agent-textblock title="Номер телефона:">
                <a href="tel:{{ Field::phone($touragent->phone) }}">{{$touragent->phone}}</a><p>
            </x-tour.agent-textblock>   
            
            <x-tour.agent-textblock title="Адрес офиса:" class="agentblock-address">
                {!! Field::enter_to_br($touragent->address) !!}
            </x-tour.agent-textblock>   

            <x-tour.agent-textblock title="Часы работы:" >
                {!! Field::enter_to_br($touragent->work)!!}
            </x-tour.agent-textblock>   

        </div>

    </div>

</div>

@desktopcss

<style>

</style>

@mobilecss
@endcss