<header>

	<?php $s = new Single('Хедер', 11, 2); ?>

	<div class="container">
		<div class="header-inner @if($isWhite) header-inner-white @endif">

			@if (!$isBackNone)
				<img class="header-back @if($isTouragent) header-back-touragent @endif" src="/photos/1/basic/headerback.svg" alt="">
			@endif

			<a href="{{ Lang::link('/') }}" class="header-logo">
				<img src="{{ $s->field('Хедер', 'Лого', 'photo', true, '/photos/1/logo.svg') }}" class="header-logo-svg" alt="">
			</a>

			<div class="header-wrapper">
				@if ($isUser)

					<div class="header-user header-username">
						<img class="header-user-svg header-username-svg" alt="" src="/photos/1/icons/userPA.svg">
						<div class="text-additional-semibold header-username-link" data-id={{$fields['user']->id}}>{{$fields['user']->name}}</div>
					</div>	

				@elseif($isTouragent)	

					<x-inputs.button class="text-button-additional blue touragent" onclick="open_support()">
						{{ $s->field('Хедер', 'Связаться со службой поддержки', 'text', true, 'Связаться со службой поддержки') }}
					</x-inputs.button>

					<div class="header-user header-touragent">
						@if(!empty($fields['touragent']->photo))
							<img class="header-user-svg header-touragent-svg" alt="" src="{{$fields['touragent']->photo}}">
						@else
							<img class="header-user-svg header-touragent-svg" alt="" src="/photos/1/icons/userPA.svg">
						@endif
						<div class="header-touragent-account">
							<div class="text-main-regular header-touragent-account-title">{{$fields['touragent']->company}}</div>
							<div class="text-additional-semibold header-touragent-account-text">{{$fields['touragent']->name}}</div>
						</div>
						
					</div>	

				@else

					<a class="text-additional-semibold header-link" href="{{  Lang::link($s->field('Хедер', 'Биржа туров ссылка', 'text', true, '/exchange')) }}">{{ $s->field('Хедер', 'Биржа туров', 'text', true, 'Биржа туров') }}</a>
					<a class="text-additional-semibold header-link" href="{{  Lang::link($s->field('Хедер', 'Контакты ссылка', 'text', true, '/contacts')) }}">{{ $s->field('Хедер', 'Контакты', 'text', true, 'Контакты') }}</a>

					<div class="header-selector header-selector-region-wrapper">
						<img class="header-selector-region-svg" src="/photos/1/icons/location.svg" alt="">
						<span class="text-additional-semibold header-selector-region">
							{{ $fields['region_title'] }}
						</span>	
						<div class="header-regions">
							@foreach($fields['list_regions'] as $region)
								<div class="text-extra-regular header-region {{ $fields['region_title'] == $region['title'] ? 'active' : '' }}" onclick="set_region({{ $region['id'],  }}, this, '{{ route('set-region', [], false) }}')">{{ $region['title'] }}</div>
							@endforeach
						</div>
					</div>

					<x-inc.lang />

				@endif


				@if ($isBtn)
					@if(isset($fields['user']->id))
						<x-inputs.button class="blue header"  href="{{ Lang::link('/tourist/application') }}">
							{{ $s->field('Хедер', 'Подобрать тур', 'text', true, 'Подобрать тур') }}
						</x-inputs.button>
					@else
						<x-inputs.button class="blue header"  action="open_notification_auth()">
							{{ $s->field('Хедер', 'Подобрать тур', 'text', true, 'Подобрать тур') }}
						</x-inputs.button>
					@endif
				@endif

				<div class="header-user">
					
					@if ($isIconExit && $is_touragent_login) 
						
						<a onclick="logout('{{ route('logout-touragent', [], false) }}', '{{ Lang::link('/') }}')" class="text-additional-semibold header-user-link">
							<img class="header-user-svg" alt="" src="/photos/1/icons/exit.svg">{{ $s->field('Хедер', 'Выйти', 'text', true, 'Выйти') }}
						</a>

					@elseif ($isIconExit && $is_user_login)	

						<a onclick="logout('{{ route('logout', [], false) }}', '{{ Lang::link('/') }}')" class="text-additional-semibold header-user-link">
							<img class="header-user-svg" alt="" src="/photos/1/icons/exit.svg">{{ $s->field('Хедер', 'Выйти', 'text', true, 'Выйти') }}
						</a>
					 
					@else 

						@if ($isIconBlue )

							@if($is_touragent_login)

								<a href="{{ Lang::link('/touragent') }}" class="text-additional-semibold header-user-link">
									<img class="header-user-svg" alt="" src="/photos/1/icons/userblue.svg">	
									{{-- {{ $s->field('Хедер', 'Войти', 'text', true, 'Войти') }} --}}
								</a>

							@elseif(!empty($fields['user']->id)) 
								<a href="{{ Lang::link('/tourist') }}" class="text-additional-semibold header-user-link">
									<img class="header-user-svg" alt="" src="/photos/1/icons/userblue.svg">
									{{-- {{ $s->field('Хедер', 'Войти', 'text', true, 'Войти') }} --}}
								</a>

							@else 
						
								<a onclick="open_login_modal_agent()" class="text-additional-semibold header-user-link">
									<img class="header-user-svg" alt="" src="/photos/1/icons/userblue.svg">	
									{{ $s->field('Хедер', 'Войти', 'text', true, 'Войти') }}
								</a>
	
							@endif

						@else 

							@if($is_touragent_login)

								<a href="{{ Lang::link('/touragent') }}" class="text-additional-semibold header-user-link">
									<img class="header-user-svg" alt="" src="/photos/1/icons/user.svg">	
									{{-- {{ $s->field('Хедер', 'Войти', 'text', true, 'Войти') }} --}}
								</a>

							@elseif(!empty($fields['user']->id)) 

								<a href="{{ Lang::link('/tourist') }}"	class="text-additional-semibold header-user-link">
									<img class="header-user-svg" alt="" src="/photos/1/icons/user.svg">
									{{-- {{ $s->field('Хедер', 'Войти', 'text', true, 'Войти') }} --}}
								</a>

							@else 
						
								<a onclick="open_login_modal_agent()" class="text-additional-semibold header-user-link">
									<img class="header-user-svg" alt="" src="/photos/1/icons/user.svg">	
									{{ $s->field('Хедер', 'Войти', 'text', true, 'Войти') }}
								</a>

							@endif
						
						@endif

					@endif

				</div>	
			</div>
		
		</div>
	</div>
</header>


@desktopcss

<style>
	header {
		padding: 23px 0;
	}

	.header-inner {
		width: 100%;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.header-back {
		width: 100%;
		height: 156px;
		top: 0;
		left: 0;
		position: absolute;
		z-index: -1;
		object-fit: cover;
	}

	.header-back-touragent {
		height: 237px;
	}

	.header-logo-svg {
		width: 210px;
		height: 61px;
	}

	.header-wrapper {
		display: flex;
		align-items: center;
	}

	.header-link {
		margin-right: 40px;
		text-decoration: none;
		transition: .3s;
	}

	.header-user {
		display: flex;
		align-items: center;	
	}

	.header-user-link {
		text-decoration: none;
		cursor: pointer;
		transition: .3s;
		display: flex;
		align-items: center;
	}

	.header-user-link:hover,
	.header-link:hover {
		color: var(--color-main-blue);
	}

	.header-user-svg {
		width: 46px;
		height: 46px;
		margin-right: 10px;
	}

	.header-selector {
		display: flex;
		align-items: center;
		cursor: pointer;
		position: relative;
	}

	.header-selector:hover::after {
		margin-top: 3px;
		transform: rotate(225deg);
	}

	.header-selector:after {
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
	
	.header-selector-region {
		max-width: 67px;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}

	.header-regions {
		position: absolute;
		top: 99%;
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
		width: 100%;
	}

	.header-selector-region-wrapper {
		margin-right: 20px;
		margin-left: 35px;
		padding: 5px 0;
	}

	.header-selector-region-wrapper:hover .header-regions {
		visibility: visible;
		pointer-events: all;
		opacity: 1;
	}

	.header-region {
		margin-bottom: 6px;
		transition: .3s;
	}

	.header-region.active {
		order: 0;
		color: var(--color-main-blue);
		font-weight: 600;
	}

	.header-region:hover {
		color: var(--color-main-blue);
	}

	.header-region:last-child {
		margin-bottom: 0;
	}

	.header-selector-region-svg {
		width: 20px;
		height: 20px;
		margin-right: 10px;
	}

	.header-inner-white .header-link,
	.header-inner-white .header-selector-region,
	.header-inner-white .header-user-link,
	.header-inner-white .langs-selector {
		color: var(--color-main-white);
	}

	.header-inner-white .langs-selector:after,
	.header-inner-white .header-selector:after {
		border: 1px solid var(--color-main-white);
		border-top: none; 
		border-left: none;
	}

	.header-username {
		margin-right: 60px;
	}

	.header-touragent {
		margin: 0 60px;
	}

	.header-touragent-account-title {
		color: var(--color-main-gray-text);
		margin-bottom: 4px;
	}

	.header-touragent-svg {
		border-radius: 	50%;
		object-fit: cover;
	}	


</style>

@mobilecss

<style>

</style>

@endcss


@startjs
<script>

	async function set_region(region, elm, route) {

		const response = await post(route, {
			country: elm.innerText
		}, true, true)


		if (response.success) {

			if(region == 2) {
				location = 'http://ru.bronara.da'+location.pathname
			} else if(region == 3) {
				location = 'http://by.bronara.da'+location.pathname
			} else {
				location = 'http://bronara.da'+location.pathname
			}
		}
	}

</script>
@endjs
