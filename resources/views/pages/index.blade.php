<x-layout>

	<x-slot name="header">
		<x-inc.header isIconBlue isBackNone />
	</x-slot>
	

	<?php $s = new Single('Главная', 11, 1); ?>

	<div class="container">
		<div class="index-inner">
			<img src="/photos/1/basic/homeback.svg" alt="" class="index-back">
			<img src="/photos/1/basic/homebackimg.svg" alt="" class="index-back-people">

			<div class="h1 index-title">{!! Field::bracket_to_span($s->field('Главный баннер', 'Заголовок', 'textarea', true, '<span>BRONARA</span> - Все туры в одном месте.')) !!}</div>
			<div class="h2 index-subtitle">{{ $s->field('Главный баннер', 'Текст', 'textarea', true, 'Оставь заявку и получи ОНЛАЙН подбор от всех ведущих турагентств') }}</div>

			<x-index.form />	

			<div class="index-bottom">

				<a href="{{ Lang::link($s->field('Главный баннер', 'Важная информация ссылка', 'text', true, '/policy')) }}" class="text-additional-undrln-semibold index-info">
					<img class="index-info-svg" src="/photos/1/icons/info.svg" alt="">
					{{ $s->field('Главный баннер', 'Важная информация', 'text', true, 'Важная информация') }}
				</a>

				<div class="index-agents">
					<div class="text-secondary-caps-extrabold index-agents-text">{{ $s->field('Главный баннер', 'Турагентов в системе', 'text', true, 'Турагентов в системе') }}</div>
					<div class="index-agents-number">{{ $touragent_count }}</div>
				</div>

			</div>

		</div>
	</div>

	
	<div class="index-advanteges">

		<div class="container">

			<div class="h2 index-advanteges-title">{{ $s->field('Преимущества', 'Заголовок', 'text', true, 'Выбрать лучший отдых стало проще') }}</div>

			<?php 
				$advantage = $s->field('Преимущества', 'Преимуществo', 'repeat', true);
				$advantage_items = [];
				foreach ($advantage as $elm){
					$advantage_items [] = [
						$elm->field('Картинка', 'photo', ''), 
						$elm->field('Название', 'text', ''), 
						$elm->field('Описание', 'text', ''), 
					];
					$elm->end();
				}
			?>

			<div class="index-advanteges-items">

				@foreach ($advantage_items as $advantage_item)
					<div class="index-advantege">
						<img class="index-advantege-img" src="{{ $advantage_item[0] }}" alt="">
						<div class="h4 index-advantege-title">{{ $advantage_item[1] }}</div>
						<div class="text-main-regular index-advantege-text">{{ $advantage_item[2] }}</div>
					</div>
				@endforeach

			</div>

		</div>

	</div>

	<div class="index-tours">

		<div class="container">
			
			<div class="h2 index-tours-title">{{ $s->field('Популярные варианты на Бирже туров', 'Заголовок', 'text', true, 'Популярные варианты на Бирже туров') }}</div>

			<div class="index-tours-items">

				<x-index.tours :tours="$tours"/>

			</div>
		</div>

	</div>

	<x-slot name="meta_title">
		{{ $s->field('Meta', 'Meta Title', 'textarea', true, 'Bronara | Mainpage') }}
	</x-slot>
	
	<x-slot name="meta_description">
		{{ $s->field('Meta', 'Meta Description', 'textarea', true, 'Bronara | Mainpage') }}
	</x-slot>
	
	<x-slot name="meta_keywords">
		{{ $s->field('Meta', 'Meta Keywords', 'textarea', true, 'Bronara | Mainpage') }}
	</x-slot>

	<x-slot name="javascript">
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwEBhdg1YglTALtXRApVQtug7yuvY58g8&amp;callback=initGmapsContacts" defer=""></script>
	</x-slot>
	

</x-layout>

@desktopcss
<style>

	.index-back {
		position: absolute;
		width: 100%;
		top: 0;
		left: 0;
		z-index: -1;
		height: 1103px;
		object-fit: cover;
	}

	.index-back-people {
		position: absolute;
		width: 100%;
		top: 0;
		left: 0;
		z-index: -1;
		height: 1103px;
		object-fit: contain;
	}

	.index-inner {
		padding: 18px 0 290px;
	}

	.index-title {
		text-align: center;
		margin-bottom: 14px;
	}

	.index-title span {
		color: var(--color-main-blue);
	}

	.index-subtitle {
		text-align: center;
		margin-bottom: 35px;
	}

	.index-agents {
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.index-agents-number {
		margin-left: 15px;
		font-style: normal;
		font-weight: 800;
		font-size: 20px;
		line-height: 20px;
		color: var(--color-main-white);
		border-radius: 5px;
		background: var(--color-main-green);
		padding: 7px 10px;
	}

	.index-bottom {
		margin-top: 20px;
		display: flex;
		align-items: center;
		justify-content: space-between;
		width: 100%;
	}

	.index-info {
		display: flex;
		align-items: center;
		transition: .3s;
	}

	.index-info-svg {
		width: 20px;
		height: 20px;
		margin-right: 15px;
	}

	.index-info:hover {
		color: var(--color-main-blue);
	}

	.index-advanteges {
		background: var(--color-main-white);
		padding: 100px 0 50px;
	}

	.index-advanteges-title {
		text-align: center;
		margin-bottom: 40px;
	}

	.index-advanteges-items {
		display: flex;
		width: 100%;
		justify-content: space-between;
	}

	.index-advantege {
		background: var(--color-main-white);
		border: 1px solid var(--color-main-stroke);
		box-sizing: border-box;
		border-radius: 10px;
		padding: 40px 30px;
		width: 280px;
		height: auto;
	}

	.index-advantege-img {
		width: 90px;
		height: 90px;
		margin-bottom: 40px;
	}

	.index-advantege-title {
		margin-bottom: 15px;
	}

	.index-tours {
		padding: 50px 0 100px;
		background: var(--color-main-white);
	}

	.index-tours-title {
		text-align: center;
		margin-bottom: 40px;
	}

	.index-tours-items {
		display: grid;
		grid-template-columns: 595px 595px;
	}

</style>

@mobilecss
<style>

</style>
@endcss