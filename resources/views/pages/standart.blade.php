<x-layout>

	<x-slot name="header">
		<x-inc.header is-btn />
	</x-slot>
	
	<x-inc.breadcrumbs :breadcrumbs="$breadcrumbs=[
		[
			'title'		=> $page->title,
			'link'		=> '',
		]
	]" type="grey"/>

	<div class="standart-page">

		<div class="container">
			
            <div class="content standart-content">
                <h1>{{ $page->title }} </h1>
                {!! $page->content !!}
            </div>

		</div>

	</div>
	

	<x-slot name="meta_title">
		{{ $page->meta_title }}
	</x-slot>
	
	<x-slot name="meta_description">
		{{ $page->meta_desc }}
	</x-slot>
	
	<x-slot name="meta_keywords">
		{{ $page->meta_key }}
	</x-slot>

</x-layout>



@desktopcss
<style>

	.standart-page {
		background: var(--color-main-white);
		padding: 100px 0;
	}

	.standart-content {
        width: 860px;
    }

    .standart-content h1 {
        margin-bottom: 20px;
    }

</style>
@mobilecss
@endcss
