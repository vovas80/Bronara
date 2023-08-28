<x-layout>

	<x-slot name="header">
		<x-inc.header is-btn />
	</x-slot>

	<?php $s = new Single('Контакты', 10, 1); ?>
	<?php $contact = new Single('Контактные данные', 10, 2); ?>
	
	<x-inc.breadcrumbs :breadcrumbs="$breadcrumbs=[
		[
			'title'		=> $s->field('Хлебные крошки', 'Заголовок', 'text', true, 'Контакты'),
			'link'		=> '',
		]
	]" type="grey"/>

	<div class="contacts-page">

		<div class="container">
			
			<div class="contacts-page-items">

				<div class="contacts-page-item">
					<div class="contacts-page-item-img">
						<img class="contacts-page-item-svg" src="/photos/1/icons/phone.svg" alt="">
					</div>
					<div class="h4 contacts-page-item-title">{{ $contact->field('Телефоны', 'Заголовок', 'text', true, 'Телефоны') }}</div>

					<?php 
						$tel = $contact->field('Телефоны', 'Телефоны', 'repeat', true);
						$tel_items = [];
						foreach ($tel as $elm){
							$tel_items [] = [
								$elm->field('Телефон', 'text', ''), 
							];
							$elm->end();
						}
					?>

					@foreach ($tel_items as $tel_item)
							<a href="tel:{{ Field::phone($tel_item[0]) }}" class="text-additional-regular contacts-page-item-text">{{ $tel_item[0] }}</a>
					@endforeach
				</div>

				<div class="contacts-page-item">
					<div class="contacts-page-item-img">
						<img class="contacts-page-item-svg" src="/photos/1/icons/google-place.svg" alt="">
					</div>
					<div class="h4 contacts-page-item-title">{{ $contact->field('Адрес', 'Заголовок', 'text', true, 'Адрес') }}</div>
					<div class="text-additional-regular contacts-page-item-text">{{ $contact->field('Адрес', 'Адрес', 'text', true, '117105, Москва, Варшавское шоссе, д.1, стр.6') }}</div>
				</div>

				<div class="contacts-page-item">
					<div class="contacts-page-item-img">
						<img class="contacts-page-item-svg" src="/photos/1/icons/mail(2).svg" alt="">
					</div>
					<div class="h4 contacts-page-item-title">{{ $contact->field('Почта и соцсети', 'Заголовок', 'text', true, 'Почта и соцсети') }}</div>
					<a href="mailto:{{ $contact->field('Почта и соцсети', 'Почта', 'text', true, 'bronara@info.com') }}" class="text-additional-regular contacts-page-item-text">{{ $contact->field('Почта и соцсети', 'Почта', 'text', true, 'bronara@info.com') }}</a>
					
					<?php 
						$social = $contact->field('Соц сети', 'Соц сети', 'repeat', true);
						$social_items = [];
						foreach ($social as $elm){
							$social_items [] = [
								$elm->field('Ссылка', 'text', ''), 
								$elm->field('Картинка', 'photo', ''), 
								$elm->field('Название', 'text', ''), 
							];
							$elm->end();
						}
					?>

					<div class="contacts-page-item-socials">
						@foreach ($social_items as $social_item)
							<a href="{{ $social_item[0] }}" target="_blank" class="contacts-page-item-social">
								<img class="contacts-page-item-social-svg" src="{{ $social_item[1] }}" alt="{{ $social_item[2] }}">
							</a>
						@endforeach
					</div>
				</div>
			</div>

		</div>

	</div>
	

	<x-slot name="meta_title">
		{{ $s->field('Meta', 'Meta Title', 'textarea', true, 'Bronara | Contact') }}
	</x-slot>
	
	<x-slot name="meta_description">
		{{ $s->field('Meta', 'Meta Description', 'textarea', true, 'Bronara | Contact') }}
	</x-slot>
	
	<x-slot name="meta_keywords">
		{{ $s->field('Meta', 'Meta Keywords', 'textarea', true, 'Bronara | Contact') }}
	</x-slot>

</x-layout>



@desktopcss
<style>

	.contacts-page {
		background: var(--color-main-white);
		padding: 100px 0;
	}

	.contacts-page-items {
		display: flex;
		width: 100%;
		justify-content: space-between;
	}

	.contacts-page-item {
		border: 1px solid var(--color-main-stroke);
		box-sizing: border-box;
		border-radius: 20px;
		padding: 25px 68px 54px;
		display: flex;
		flex-direction: column;
		text-align: center;
	}

	.contacts-page-item-img {
		width: 100px;
		height: 100px;
		padding: 30px;
		background: var(--color-main-back);
		border-radius: 8px;
		margin: 0 auto 20px auto;
	}

	.contacts-page-item-svg {
		width: 40px;
		height: 40px;
	}

	.contacts-page-item-title {
		margin-bottom: 15px;
	}

	.contacts-page-item-text {
		text-decoration: none;
		margin-bottom: 14px;
		width: 249px;
	}

	.contacts-page-item-text:last-child {
		margin-bottom: 0
	}

	.contacts-page-item-socials {
		display: flex;
		justify-content: space-between;
		width: 150px;
		margin: 5px auto 0 auto;
	}

	.contacts-page-item-social-svg {
		width: 30px;
		height: 30px;
	}
</style>
@mobilecss
@endcss
