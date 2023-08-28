<x-layout>

	<x-slot name="header">
		<x-inc.header is-btn />
	</x-slot>

	
	<?php $s = new Single('FAQ', 9, 1); ?>
	
	<x-inc.breadcrumbs :breadcrumbs="$breadcrumbs=[
		[
			'title'		=> $s->field('Хлебные крошки', 'Заголовок', 'text', true, 'FAQ'),
			'link'		=> '',
		]
	]" type="grey"/>

    

	<div class="faq-page">

		<div class="container">

            <x-index.faq />	

        </div>

        
        <div class="faq-work">
            
            <div class="container">

                <x-index.work />	
                
            </div>

		</div>

	</div>
	

	<x-slot name="meta_title">
		{{ $s->field('Meta', 'Meta Title', 'textarea', true, 'Bronara | FAQ') }}
	</x-slot>
	
	<x-slot name="meta_description">
		{{ $s->field('Meta', 'Meta Description', 'textarea', true, 'Bronara | FAQ') }}
	</x-slot>
	
	<x-slot name="meta_keywords">
		{{ $s->field('Meta', 'Meta Keywords', 'textarea', true, 'Bronara | FAQ') }}
	</x-slot>

</x-layout>



@desktopcss
<style>

	.faq-page {
		background: var(--color-main-white);
		padding-top: 100px;
	}

    .faq-inner {
        padding-bottom: 100px;
    }

    .faq-work {
        background: var(--color-main-back);
        padding: 100px 0 78px;
        text-align: center;
    }
	
</style>

@mobilecss

@endcss
