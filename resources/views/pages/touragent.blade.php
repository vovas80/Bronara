<x-layout>

	<x-slot name="header">
		<x-inc.header isIconExit isTouragent :touragent="$touragent"/>
	</x-slot>

	<?php //$s = new Single('Главная', 10, 1); ?>

    <div class="container">

        <div class="touragent-timer">
            <div class="text-button-additional touragent-timer-title">Доступ:</div>
            <x-inc.timer />
        </div>
        
        <x-touragent.menu :route="$route" />

    </div>

    
    <div class="touragent-inner">

        <img class="touragent-back" src="/photos/1/basic/userprofilefon.svg" alt="">

        <div class="touragent-btn-application">
            <x-inputs.button class="green vertical" onclick="open_application_tours()">
                Заявки на туры
            </x-inputs.button>
        </div>

        <div class="container">
            
            <div class="touragent-content-block">

                @if ($route == 'touragent')
                    <x-touragent.touragent-info :touragent="$touragent"/>
                @elseif ($route == 'touragent-working')
                    <x-touragent.touragent-working  
                        :count="$count_application_work" 
                        :pagesize="$pagesize" 
                        :page="$page_work"
                        :paglink="$paglink"  
                        :applications="$applications_work"
                    /> 
                @elseif ($route == 'touragent-booking')
                    <x-touragent.touragent-booking :booking="$booking_tours"/> 
                @elseif ($route == 'touragent-sold')
                    <x-touragent.touragent-sold :booking="$booking_tours"/> 
                @endif

                <x-touragent.application-tours 
                    :count="$count" 
                    :pagesize="$pagesize" 
                    :page="$page"
                    :paglink="$paglink"   
                    :applications="$applications" 
                />
                

            </div>
            
        </div>
    </div>

    <x-modals.choose-tour />
    
    
	<x-slot name="meta_title">
		{{-- {{ $s->field('Meta', 'Meta Title', 'textarea', true, 'DTG | Mainpage') }} --}}
	</x-slot>
	
	<x-slot name="meta_description">
		{{-- {{ $s->field('Meta', 'Meta Description', 'textarea', true, 'DTG | Mainpage') }} --}}
	</x-slot>
	
	<x-slot name="meta_keywords">
		{{-- {{ $s->field('Meta', 'Meta Keywords', 'textarea', true, 'DTG | Mainpage') }} --}}
	</x-slot>

    <x-slot name="javascript">
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwEBhdg1YglTALtXRApVQtug7yuvY58g8&amp;callback=initGmapsTouragent" defer=""></script>

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

    .touragent-content-block {
        padding-bottom: 100px;
    }

    .touragent-timer {
        display: flex;
        align-items: center;
        justify-content: end;
        margin-bottom: 30px;
    }

    .touragent-timer-title {
        color: var(--color-main-gray-text);
        margin-right: 10px;
        margin-bottom: 20px;
    }

    .touragent-link {
        color: var(--color-main-blue);
        display: flex;
        width: fit-content;
        margin: 0 0 15px auto;
        transition: .3s;
    }

    .touragent-link:hover {
        color: var(--color-hover-blue);
    }

    .touragent-back {
        position: absolute;
        top: -32px;
        left: 0;
        width: 100%;
        height: calc( 100% + 32px );  
        z-index: -1;
        object-fit: cover;
    }

    .touragent-inner {
        position: relative;
        min-height: 423px;
        height: auto;
        /* background: url(/photos/1/basic/userprofilefon.svg);
        background-size: 100%; */
    }

    .touragent-btn-application {
        position: absolute;
        top: 40px;
        left: 0;
    }



</style>
@mobilecss
@endcss
