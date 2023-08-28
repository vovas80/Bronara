<x-layout>

	<x-slot name="header">
		<x-inc.header is-btn isBackNone isWhite />
	</x-slot>
	

	<?php $s = new Single('Биржа туров', 10, 1); ?>

	<div class="container">

        <div class="exchange-inner">
            <div class="exchange-img"></div>

			<div class="exchange-search">
				<div class="h2 exchange-search-title">
					{{$s->field('Информация', 'Заголовок', 'text', true, 'Найдите самый выгодный тур!')}}
				</div>
				<x-exchange.searchform :filters="$slug_filters" />
			</div>

			<div class="exchange-listtours">
				<div class="exchange-listtours-block">
					<div class="h2 exchange-listtours-title">{{$s->field('Информация', 'Вам могут подойти:', 'text', true, 'Вам могут подойти:')}}</div>
					<x-inputs.button class="yellow">
						{{$s->field('Информация', 'Обновить список', 'text', true, 'Обновить список')}}
					</x-inputs.button>
				</div>

				<div class="exchange-listtours-tours">

					<x-exchange.header-maintours />

					<div class="exchange-listtours-tours-list">
						<div id="content-block">
							<x-exchange.maintours :tours="$tours"/>
						</div>
						
					</div>

					<div id="pagination">
						<x-inc.pagination 
							:count="$count" 
							:pagesize="$pagesize" 
							:page="$page"
							:paglink="$paglink"
						/>
					</div>


				</div>
			</div>

        </div>
		
	</div>

	<x-slot name="meta_title">
		{{ $s->field('Meta', 'Meta Title', 'textarea', true, 'Bronara | Биржа туров') }}
	</x-slot>
	
	<x-slot name="meta_description">
		{{ $s->field('Meta', 'Meta Description', 'textarea', true, 'Bronara | Биржа туров') }}
	</x-slot>
	
	<x-slot name="meta_keywords">
		{{ $s->field('Meta', 'Meta Keywords', 'textarea', true, 'Bronara | Биржа туров') }} 
	</x-slot>

	<x-slot name="javascript">
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwEBhdg1YglTALtXRApVQtug7yuvY58g8&amp;callback=initGmapsContacts" defer=""></script>
	</x-slot>
	
	

</x-layout>

@desktopcss
<style>

	.exchange-inner {
		padding: 27px 0;
	}

    .exchange-img {
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
		height: 100%;
		width: 100%;
		background: url(/photos/1/basic/exchangeback.svg) no-repeat fixed;
    	background-size: cover;
    }

	.exchange-search-title {
		text-align: center;
		margin-bottom: 20px;
		color: var(--color-main-white);
	}

	.exchange-listtours {
		padding: 50px 0;
	}

	.exchange-listtours-block {
		display: flex;
		width: 100%;
		justify-content: space-between;
		margin-bottom: 28px;
	}

	.exchange-listtours-title {
		color: var(--color-main-white);
	}


</style>

@mobilecss
<style>

</style>
@endcss