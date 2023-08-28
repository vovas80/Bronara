<x-layout>
	<?php $s = new Single('404', 1, 1); ?>

    <x-slot name="header">
		<x-inc.header is-btn />
	</x-slot>

    <div class="error404">
        <img src="/photos/1/basic/fon.svg" alt="" class="error404-fon">

        <div class="error404-content">
            
            <div class="error404-content-inner">
                <h1 class="h2 error404-title"> {{ $s->field('Контент', 'Заголовок', 'text', true, 'Нам не удалось найти страницу:(') }}</h1>
                <div class="text-main-regular error404-desc">{{ $s->field('Контент', 'Текст', 'text', true, 'Но мы с легкостью найдем Вам подходящий тур!') }}</div>
                <x-inputs.button href=" {{ $s->field('Контент', 'Кнопка ссылка', 'text', true, '/') }}" class="main green center">
                    {{ $s->field('Контент', 'Кнопка текст', 'text', true, 'Подобрать тур') }}
                </x-inputs.button>

                <img src="/photos/1/basic/404.svg" alt="" class="error404-svg">
            </div>

        </div>
    </div>

	<x-slot name="meta_title">
		{{ $s->field('Meta', 'Meta Title', 'textarea', true, 'Bronara | 404') }}
	</x-slot>
	
	<x-slot name="meta_description">
		{{ $s->field('Meta', 'Meta Description', 'textarea', true, 'Bronara | 404') }}
	</x-slot>
	
	<x-slot name="meta_keywords">
		{{ $s->field('Meta', 'Meta Keywords', 'textarea', true, 'Bronara | 404') }}
	</x-slot>
	

</x-layout>