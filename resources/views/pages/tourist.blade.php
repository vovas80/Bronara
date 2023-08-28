<x-layout>

	<x-slot name="header">
		<x-inc.header isIconExit isUser :tourist="$tourist"/>
	</x-slot>

	<?php $s = new Single('ЛК турист', 10, 1); ?>

    <div class="container">
        <a href="{{ Lang::link($s->field('Правила посещения стран', 'Ссылка', 'text', true, '/policy')) }}" class="text-main-undrln-semibold user-link">{{ $s->field('Правила посещения стран', 'Название', 'text', true, 'Правила посещения стран') }}</a>
        
        <x-tourist.menu :route="$route" />

    </div>

    
    <div class="user-inner">

        <img class="user-back" src="/photos/1/basic/userprofilefon.svg" alt="">

        @if ($route == 'tourist-application')
            <x-tourist.tourist-application :applications="$applications" :tourist="$tourist"/>      
        @endif

        <div class="container">
            
            <div class="user-content-block">
                
                @if ($route == 'tourist')
                    <x-tourist.touristinfo :tourist="$tourist" />
                @elseif ($route == 'tourist-tours')
                    <x-tourist.tourist-tours :tourist="$tourist" :tours="$tours" :activecountry="$country"/>     
                @elseif ($route == 'tourist-booking')
                    <x-tourist.tourist-booking :booking="$booking_tours"/>  
                @elseif ($route == 'tourist-document')
                    <x-tourist.tourist-document :booking="$booking_tours"/>       
                @endif

            </div>
            
        </div>
    </div>

    <x-modals.choose-tour />
    
	<x-slot name="meta_title">
		{{ $s->field('Meta', 'Meta Title', 'textarea', true, 'Bronara | Личный кабинет туриста') }}
	</x-slot>
	
	<x-slot name="meta_description">
		{{ $s->field('Meta', 'Meta Description', 'textarea', true, 'Bronara | Личный кабинет туриста') }}
	</x-slot>
	
	<x-slot name="meta_keywords">
		{{ $s->field('Meta', 'Meta Keywords', 'textarea', true, 'Bronara | Личный кабинет туриста') }}
	</x-slot>
    

    <x-slot name="javascript">
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwEBhdg1YglTALtXRApVQtug7yuvY58g8&amp;callback=initGmapsContacts" defer=""></script>

        <script>

            async function logout(route, redirect) {
    
                const response = await post(route, {}, true, true);
    
                if (response.success) {
                    location.href = redirect;
                }
    
            } 
    
        </script>

	</x-slot>
	

</x-layout>



@desktopcss
<style>
    .user-link {
        color: var(--color-main-blue);
        display: flex;
        width: fit-content;
        margin: 0 0 15px auto;
        transition: .3s;
    }

    .user-link:hover {
        color: var(--color-hover-blue);
    }

    .user-back {
        position: absolute;
        top: -32px;
        left: 0;
        width: 100%;
        height: calc( 100% + 32px );  
        z-index: -1;
        object-fit: cover;
    }

    .user-inner {
        position: relative;
        min-height: 423px;
        height: auto;
        /* background: url(/photos/1/basic/userprofilefon.svg);
        background-size: 100%; */
    }

</style>
@mobilecss
@endcss
