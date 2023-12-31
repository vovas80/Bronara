<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" href="/photos/1/basic/favicon.svg" type="image/x-icon">

@foreach ($_GET as $param => $val)
	@if (strncmp($param, 'utm_', 4) === 0 || $param == 'gclid')
		<meta name="robots" content="noindex,nofollow"/>
	@endif
@endforeach

@if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'facebook') !== false)
	<meta property="og:image" content="{{url('/photos/1/basic/og.svg')}}">
@else
	<meta property="og:image" content="{{url('/photos/1/basic/og.svg')}}">
@endif

@if (Lang::get_langs()->count() > 1)
	@foreach (Lang::get_langs() as $lang)
		<link rel="alternate" hreflang="{{$lang->tag}}" href="{{Lang::get_url($lang->tag)}}"/>
	@endforeach
@endif

<script>
	var is_mobile = {{(Agent::isMobile() && !Agent::isTablet()) ? 'true' : 'false'}}
	var lang = document.querySelector('html').getAttribute('lang')
</script>