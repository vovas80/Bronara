<div class="text-additional-semibold langs-selector">
    {{ Lang::get_main() }}
    <div class="langs">
        @foreach (Lang::all() as $lang)
            <a href="{{ Lang::get_url($lang->tag) }}" class="text-extra-regular lang @if($lang->tag == Lang::get_main()) active @endif">{{ $lang->tag }}</a>
        @endforeach
    </div>
</div>

@desktopcss

<style>
    
    .langs-selector {
		display: flex;
		align-items: center;
		cursor: pointer;
		position: relative;
        margin-right: 75px;
        text-transform: uppercase;
		padding: 5px 0;
	}

	.langs-selector:hover::after {
		margin-top: 3px;
		transform: rotate(225deg);
	}

	.langs-selector:after {
		display: block;
		content: "";
		width: 4px;
		height: 4px;
		border: 1px solid var(--color-main-blue);
		transform: rotate(45deg);
		border-left: none;
		border-top: none;
		margin-left: 10px;
		margin-top: -3px;
		transition: .3s;
	}

	.langs {
		position: absolute;
		top: 100%;
		left: -7px;
		background: var(--color-main-white);
		box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
		border-radius: 5px;
		padding: 15px 20px;
		z-index: 1001;
		opacity: 0;
		visibility: hidden;
		pointer-events: none;
		transition: .3s;
		display: flex;
		flex-direction: column;
	}

	.langs-selector:hover .langs {
		opacity: 1;
		visibility: visible;
		pointer-events: all;
	}

	.lang {
		transition: .3s;
		text-decoration: none;
		margin-bottom: 6px;
	}

	.lang:last-child {
		margin-bottom: 0;
	}

	.lang.active {
		color: var(--color-main-blue);
		font-weight: 600;
	}

	.lang:hover {
		color: var(--color-main-blue);
	}

   
</style>

@mobilecss

<style>

</style>
@endcss

@startjs
<script>

</script>
@endjs
