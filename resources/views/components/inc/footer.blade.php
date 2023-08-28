<footer>

	<?php $s = new Single('Футер', 11, 2); ?>
	<?php $contact = new Single('Контактные данные', 10, 2); ?>

	<div class="container">

		<div class="footer-inner">

			<img src="/photos/1/basic/footerfon.svg" class="footer-fon" alt="">
			<div class="footer-first">

				<a href="{{ Lang::link('/') }}" class="footer-first-logo">
					<img class="footer-first-logo-svg" src="{{ $s->field('Футер', 'Лого', 'photo', true, '/photos/1/logo.svg') }}" alt="">
				</a>

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
				<div class="footer-first-socials">
					@foreach ($social_items as $social_item)
						<a href="{{ $social_item[0] }}" target="_blank" class="footer-first-social">
							<img class="footer-first-social-svg" src="{{ $social_item[1] }}" alt="{{ $social_item[2] }}">
						</a>
					@endforeach
				</div>

				<div class="footer-first-contacts">
					<div class="text-additional-regular footer-first-contacts-title">{{ $s->field('Футер', 'Контакты', 'text', true, 'Контакты') }}</div>
					<div class="footer-first-contacts-link">
						<img class="footer-first-contacts-link-svg" src="/photos/1/icons/location.svg" alt="">
						<div class="text-main-regular footer-first-contacts-link-text">{{ $contact->field('Адрес', 'Адрес', 'text', true, '117105, Москва, Варшавское шоссе, д.1, стр.6') }}</div>	
					</div>
					<a href="mailto:{{ $contact->field('Почта и соцсети', 'Почта', 'text', true, 'bronara@info.com') }}" class="footer-first-contacts-link">
						<img class="footer-first-contacts-link-svg" src="/photos/1/icons/mail.svg" alt="">
						<div class="text-main-regular footer-first-contacts-link-text">{{ $contact->field('Почта и соцсети', 'Почта', 'text', true, 'bronara@info.com') }}</div>	
					</a>

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
						<a href="tel:{{Field::phone($tel_item[0]) }}" class="footer-first-contacts-link">
							<img class="footer-first-contacts-link-svg" src="/photos/1/icons/tel.svg" alt="">
							<div class="text-main-regular footer-first-contacts-link-text">{{ $tel_item[0] }}</div>	
						</a>
					@endforeach

				</div>

			</div>

			<div class="footer-second">

				<div class="text-main-regular grey-text footer-second-copyright">{{ $s->field('Футер', '© 2001-2021 Bronara. Все права защищены', 'text', true, '© 2001-2021 Bronara. Все права защищены') }}</div>
				<div class="footer-second-links">
					<a href="{{ Lang::link($s->field('Футер', 'Условия использования ссылка', 'text', true, '/policy')) }}" class="text-main-regular grey-text footer-second-link">{{ $s->field('Футер', 'Условия использования', 'text', true, 'Условия использования') }}</a>
					<a href="{{ Lang::link($s->field('Футер', 'Конфиденциальность ссылка', 'text', true, '/policy')) }}" class="text-main-regular grey-text footer-second-link">{{ $s->field('Футер', 'Конфиденциальность', 'text', true, 'Конфиденциальность') }}</a>
					<a href="{{ Lang::link($s->field('Футер', 'Политика возврата ссылка', 'text', true, '/policy')) }}" class="text-main-regular grey-text footer-second-link">{{ $s->field('Футер', 'Политика возврата', 'text', true, 'Политика возврата') }}</a>
					<a href="{{ Lang::link($s->field('Футер', 'FAQ ссылка', 'text', true, '/faq')) }}" class="text-main-regular grey-text footer-second-link">{{ $s->field('Футер', 'FAQ', 'text', true, 'FAQ') }}</a>
				</div>
				<div class="footer-lang">
					<div class="text-main-regular grey-text footer-lang-text">{{ $s->field('Футер', 'Язык сайта', 'text', true, 'Язык сайта') }}:</div>
					<x-inc.lang />
				</div>

			</div>	

		</div>
	</div>
</footer>

<div class="modal-tour-wrapper" id="tour-modal">
	<x-modals.tour />
</div>

<div class="modal-tour-wrapper" id="booking-modal">
	<x-modals.book-tour />
</div>

<div class="modal-tour-wrapper" id="booking-tour-for-touragent">
	<x-modals.touragent-tour />
</div>

<x-modals.login />
<x-modals.register />
<x-modals.forgot />
<x-index.popup />

<x-modals.support />

<x-modals.success />
<x-modals.notification />
<x-modals.notification-application />
<x-modals.notification-auth />

<x-inc.chat />


<div id="loader">
	<svg  width="40" height="40" viewBox="0 0 50 50">
		<path fill="#black" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
			<animateTransform attributeType="xml"
				attributeName="transform"
				type="rotate"
				from="0 25 25"
				to="360 25 25"
				dur="0.6s"
				repeatCount="indefinite"/>
		</path>
	</svg>
</div>

@desktopcss
<style>

	footer {
		position: relative;
		background: var(--color-main-back);
	}

	.footer-fon {
		position: absolute;
		top: 0;
		left: 0;
		z-index: 1;
		width: 100%;
		height: 100%;
	}

	.footer-first {
		position: relative;
		z-index: 2;
		display: flex;
		justify-content: space-between;
		width: 100%;
		padding: 40px 0 50px;
		border-bottom: 1px solid var(--color-main-white);
	}

	.footer-first-logo-svg {
		width: 210px;
		height: 61px;
	}

	.footer-first-socials {
		display: flex;
		margin-top: 10px;
	}

	.footer-first-social {
		margin: 0 5px;
	}

	.footer-first-social-svg {
		width: 30px;
		height: 30px;
	}

	.footer-first-contacts {
		margin-top: 10px;
	}

	.footer-first-contacts-title {
		font-weight: 800;
		margin-bottom: 15px;
	}

	.footer-first-contacts-link {
		display: flex;
		align-items: flex-start;
		margin-bottom: 10px;
		text-decoration: none;
	}

	.footer-first-contacts-link:last-child {
		margin-bottom: 0;
	}

	.footer-first-contacts-link-svg {
		width: 20px;
		height: 20px;
		margin-right: 10px;
	}

	.footer-first-contacts-link-text {
		width: 189px;
	}

	.footer-second {
		position: relative;
		z-index: 2;
		display: flex;
		padding: 50px 0;
		justify-content: space-between;
	}

	.footer-second-link {
		text-decoration: none;
		margin: 0 15px;
	}

	.footer-lang {
		display: flex;
	}

	.footer-lang .langs-selector {
		padding: 0;
	} 

	.footer-lang .langs {
		bottom: 100%;
		top: auto;
	}

	.footer-lang-text {
		margin-right: 10px;
	}

</style>
@mobilecss
<style>

</style>
@endcss


<?php JSAssembler::add('/js/jquery.js', 0); ?>
<?php JSAssembler::add('/js/slider.js'); ?>

@startjs('0')

<script>

	const $ = function(selector) {

		if (! (this instanceof $) ) {
			return new $(selector);
		}

		if (typeof selector=="object") 
			this.el = [selector]; 
		else 
			this.el = document.querySelectorAll(selector);
		
		return this;
	}

	$.prototype.css = function(prop, val) {
		this.el.forEach(function(element) {
			element.style[prop] = val;
		});
		return this;
	}

	$.prototype.display = function (name){
		this.el.forEach(function(el){
			el.style.display = name
		});
		return this;
	}

	$.prototype.on = function (event, f){
		this.el.forEach(function(el){
			el.addEventListener(event, f)
		});
		return this;
	}

	$.prototype.fadein = function (){
		this.el.forEach(function(el){
			el.classList.add('active')
		});
		return this;
	}

	$.prototype.fadeout = function (){
		this.el.forEach(function(el){
			el.classList.remove('active')
		});
		return this;
	}

	$.prototype.toggleClass = function (classname){
		this.el.forEach(function(el){
			el.classList.toggle(classname)
		});
		return this;
	}

	$.prototype.addClass = function (classname){
		this.el.forEach(function(el){
			el.classList.add(classname)
		});
		return this;
	}

	$.prototype.removeClass = function (classname){
		this.el.forEach(function(el){
			el.classList.remove(classname)
		});
		return this;
	}

	$.prototype.slideUp = function (){
		this.el.forEach(function(el){
			el.style.transition = "all .5s ease-in-out"
			el.style.height = "0px"
			el.setAttribute('data-height',el.offsetHeight)
		});
		return this;
	}

	$.prototype.slideDown = function (){
		this.el.forEach(function(el){
			el.style.transition = "all .5s ease-in-out"
			el.style.height = el.getAttribute('data-height') ?? 'auto'
		});
		return this;
	}

	$.prototype.toggleSlide = function (){
		this.el.forEach(function(el,index){
			el.style.transition = "all 1s ease-in-out"
			console.log(el.offsetHeight);
			if(el.offsetHeight==0) {
				el.style.height = el.getAttribute('data-height') ?? 'auto'
			} else {
				el.style.height = "0px"
				el.setAttribute('data-height',el.offsetHeight)
			}
		});
		return this;
	}

	$.prototype.parent = function (){
		var els = this.el;
		var parents = []
		els.forEach(function(el, index) {
			parents[index] = el.parentElement
		})
		this.el = parents
		return this;
	}

	$.prototype.child = function (){
		var els = this.el;
		var childs = []
		els.forEach(function(el, index) {
			childs[index] = el.firstElementChild
		})
		this.el = childs
		return this;
	}

	$.prototype.val = function(val){
		if ( val !== undefined && val !== null )
			this.el.forEach(function(el, index) {
				el.value = val
			})
	
		return this.el[0].value;
	}

	$.prototype.data = function(attr, val){
		if (val !== undefined && val !== null )
			this.el[0].setAttribute('data-'+attr, val)
		
		return this.el[0].getAttribute('data-'+attr)
	}

	$.prototype.attr = function(attr, val){
		if (val !== undefined && val !== null )
			this.el[0].setAttribute(attr, val)
		
		return this.el[0].getAttribute(attr)
	}

	$.prototype.html = function(html){
		if (html !== undefined && html !== null)
			this.el[0].innerHTML = html
		return this.el[0].innerHTML;
	}

	$.prototype.text = function(text){
		if(text !== undefined && text !== null)
			this.el[0].innerText = text
		return this.el[0].innerText;
	}

	$.prototype.height = function(){
		return this.el[0].offsetHeight
	}

	// document.addEventListener('DOMContentLoaded', function(){

		// lazy load START
			/**
			 * Usage: <img srcset="/images/lazy.svg" src="/images/original.png" alt="">
			 */
			function check_lazy() {
				for (var i = lazy_imgs.length - 1; i >= 0; i--) {
					var img = lazy_imgs[i]
					if (img.srcset == '/images/lazy.svg' && img.getBoundingClientRect().top - 100 < window.innerHeight) {
						(function(img) {
							img.onload = () => {
								img.removeAttribute('srcset')
							}
						})(img)
						img.srcset = img.src
					}
				}
			}
			var lazy_imgs = []
			window.addEventListener('DOMContentLoaded', () => {
				lazy_imgs = Array.prototype.slice.call(document.querySelectorAll('img[srcset]'))
				setTimeout(() => {
					check_lazy()
				}, 200)
			})
			window.addEventListener('scroll', () => {
				check_lazy()
			})
		// lazy load END


		function scrollIt(destination, duration = 500, easing = 'easeInOutCubic', callback) {

			const easings = {
				easeInOutCubic(t) {
					return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
				},
			};

			const start = window.scrollY;
			const startTime = 'now' in window.performance ? performance.now() : new Date().getTime();

			const documentHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
			const windowHeight = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
			const destinationOffset = typeof destination === 'number' ? destination : destination.offsetTop;
			const destinationOffsetToScroll = Math.round(documentHeight - destinationOffset < windowHeight ? documentHeight - windowHeight : destinationOffset);

			if ('requestAnimationFrame' in window === false) {
				window.scroll(0, destinationOffsetToScroll);
				if (callback) {
					callback();
				}
				return;
			}

			function scroll() {
				const now = 'now' in window.performance ? performance.now() : new Date().getTime();
				const time = Math.min(1, ((now - startTime) / duration));
				const timeFunction = easings[easing](time);
				window.scroll(0, Math.ceil((timeFunction * (destinationOffsetToScroll - start)) + start));

				if (Math.abs(window.scrollY - destinationOffsetToScroll) < 2) {
					if (callback) {
						callback();
					}
					return;
				}

				requestAnimationFrame(scroll);
			}

			scroll();
		}


		// ajax request START
			let load_count = 0
			const loader = document.getElementById('loader')

			const serialize = function(obj, prefix) {
				var str = [], p;
				for (p in obj) {
					if (obj.hasOwnProperty(p)) {
					var k = prefix ? prefix + "[" + p + "]" : p,
						v = obj[p];
						str.push((v !== null && typeof v === "object") ?
						serialize(v, k) :
						encodeURIComponent(k) + "=" + encodeURIComponent(v));
					}
				}
				return str.join("&");
			}

			const formdata = function(obj) {

				let formData = new FormData()

				for (const i in obj) {

					formData.append(i, obj[i])
				}

				return formData
			}

			async function post(endpoint, obj, is_file = false, is_loader = true) {
									
				try {

					if (is_loader && loader) {
						load_count++
						loader.classList.add('active')
						// document.dispatchEvent(new CustomEvent('loading', { 'detail': load_count }))
					}

					const url = endpoint

					let headers = {
						'Accept': 'application/json',
						'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
					}

					if (!is_file) {

						// headers['Content-Type'] = 'multipart/form-data'

						var response = await fetch(url, {
							method: 'POST',
							headers: headers,
							body: obj
						})

					} else {

						headers['Content-Type'] = 'application/x-www-form-urlencoded'

						var response = await fetch(url, {
							method: 'POST',
							headers: headers,
							body: serialize(obj)
						})
					}
					
					let json = []

					try {

						json = await response.json()

					} catch (error) {}

					if (is_loader && loader) {
						load_count--
						if (load_count == 0)
							loader.classList.remove('active')
						// document.dispatchEvent(new CustomEvent('loading', { 'detail': load_count }))
					}

					if (!json.data) {
						return {
							success: false,
							message: "Fatal error",
							data: json,
						}
					}

					return json

				} catch (error) {

					console.error(error)
				}

				return {success: false, message: "Fatal error", data: {}}
			}
		// ajax request END
		
	// })
</script>

<script>

	function resize () {
        document.body.style.setProperty('--width', document.body.clientWidth)
    }
    resize()
    window.addEventListener('resize', resize)

	const appHeight = () => {
		const doc = document.documentElement
		doc.style.setProperty('--app-height', `${window.innerHeight}px`)
	}
	appHeight()
	window.addEventListener('resize', appHeight)

	const Cart = new function() {

		this.add = async(id_product, count, attributes = '') => {

			is_checkout = window.location.href.indexOf("checkout") !== -1

			delivery = ''

			if (is_checkout) {
				delivery = $('input[name="delivery"]:checked').val()
			}

			const response = await post(lang + '/api/add-to-cart', {
				id_product: id_product,
				count: count,
				is_checkout: is_checkout,
				attributes: attributes,
				delivery: delivery,
			})

			if (!response.success) {
				alert('Ошибка')
				return
			}

			$('#mini-cart').html(response.data.minicart)
			$('.header-icons-circle').text(response.data.cart_count)
			$('#mini-cart-price').text(response.data.cart_total)

			if (!is_checkout)
				open_cart_modal();
			else {
				$('#checkout-cart').html(response.data.checkout_cart);
			}

			if (response.data.cart_total > 0){
				$('#checkout-submit').css('display', 'flex')
				$('#cart-submit').css('display', 'flex')
			} else {
				$('#checkout-submit').css('display', 'none')
				$('#cart-submit').css('display', 'none')
			}

		}
	}

	async function send_callback_support(form, route) {

		event.preventDefault()

		message = form.querySelector('textarea[name="message"]').value
		id_touragent = document.querySelector('.touragent-info-data-id-number').innerText

		const response = await post(route, {
			message,
			id_touragent
		}, true, true)

		if (response.success) {
			form.reset()

			form.querySelectorAll('.form-answer').forEach(element => {
				element.style.display = 'none';
			});
			form.querySelector('.form-answer.success').style.display = 'block';

		} else {

			form.querySelectorAll('.form-answer').forEach(element => {
				element.style.display = 'none';
			});
			form.querySelector('.form-answer.error').style.display = 'block';
		}
	}


    function close_modal() {
        $('.modal').removeClass('active');
        $('.modal-tour').removeClass('active');
        $('.modal-touragent-tour').removeClass('active');

		if	(location.href.split("&")[1]) {
			var newURL = location.href.split("&")[0];
			window.history.pushState('object', document.title, newURL);
		} else {
			var newURL = location.href.split("?")[0];
			window.history.pushState('object', document.title, newURL);
		}
    }

    $('.modal').on('click', function(e) {
        if (this == (e.target)) {
            close_modal()
        }
    })

	$('.modal-tour-wrapper').on('click', function(e) {
		for (let elem of this.children) {
			if (elem == (e.target)) {
				elem.classList.remove('active')

				if	(location.href.split("&")[1]) {
					var newURL = location.href.split("&")[0];
					window.history.pushState('object', document.title, newURL);
				} else {
					var newURL = location.href.split("?")[0];
					window.history.pushState('object', document.title, newURL);
				}

			}
		}
    })

	function show_review_content(elm) {
		elm.classList.add('none')
		elm.closest('.review').querySelector('.review-content').classList.add('active') 
	}

	function like(elm) {

		elm.classList.toggle('active');

		elm.closest('.likes').querySelector('.likes-svg-dislike').classList.remove('active');

	}

	function dislike(elm) {

		elm.classList.toggle('active');

		elm.closest('.likes').querySelector('.likes-svg-like').classList.remove('active');

	}

	function initGmapsTour(title, star, tour_lat, tour_lng) {
        if (document.querySelectorAll('#map').length != 0) {
            const uluru = {  lat: parseFloat(tour_lat), lng: parseFloat(tour_lng) };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: uluru,
                draggable: true,
                scrollwheel: false,
                disableDefaultUI: true,
                styles: [{
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#fff8b8"
                    }]
                	},
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#333333"
                        }]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#333333"
                        }]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#333333"
                        }]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#333333"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#8a7f5c"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#1b1b1b"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#d9bf96"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#8a8a8a"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#d9bf96"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#d9bf96"
                        }]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#d9bf96"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#292621"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text",
                        "stylers": [{
                            "color": "#333333"
                        },
						{
						"visibility": "on"
						}]
                    },
					{
						"elementType": "labels.text.stroke",
						"stylers": [
							{
							"visibility": "off"
							}
						]
					},
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#80c9ff"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#333333"
                        }]
                    }
                ],
            });


            const contentString =
                '<div id="content" class="map-content-marker" style="background: #ffffff">' +
                '<div id="siteNotice" style="background: #ffffff">' +
                "</div>" +
                '<span id="firstHeading" class="text-additional-semibold firstHeading">'+ title +'</span>' +
                '<div id="bodyContent" class="text-main-regular">' +
                star +
                "</div>" +
                "</div>";

            const infowindow = new google.maps.InfoWindow({
                content: contentString,
            });

            const marker = new google.maps.Marker({
                position: uluru,
                map,
                icon: '/photos/1/basic/google-place.svg',
                title: title,
            });

            marker.addListener("click", () => {
                infowindow.open({
                    anchor: marker,
                    map,
                    shouldFocus: false,
                });
            });
        }
    }

	const Saved = new function() {


		this.toggle = async(elm, id_tour) => {

			const response = await post('/api/saved', {
				id_tour,
			}, true, true)

			if (response.success) {
				if (response.data.status) {
					elm.classList.add('active')
					elm.querySelector('.already').classList.add('active')
					elm.querySelector('.notadded').classList.remove('active')
				} else {
					elm.classList.remove('active')
					elm.querySelector('.already').classList.remove('active')
					elm.querySelector('.notadded').classList.add('active')
				}
				if (elm.classList.contains('delete-wished') || elm.classList.contains('wished-clear')) {
					location.reload();
				}
				return
			} else {
				open_notification_auth()
			}

		}

		this.clear = async() => {

			const response = await post('/api/saved/clear', {})

			if (response.success) {
				location.reload();
			} 
		}
	}

	function init_slick() {
        
        (function($){

            $('#slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: false,
                arrows: true,
                dots: false,
                prevArrow: '.product-nav-slider-block .arrow-prev',
                nextArrow: '.product-nav-slider-block .arrow-next',
                asNavFor: '#navslider',
            });

            $('#navslider').slick({
                infinity: true,
                fade: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 400,
                arrows: false,
                asNavFor: '#slider',
                centerMode: true,
                variableWidth: true,
                focusOnSelect: true,
            });
        })(jQuery)

    }

    function init_slick_slider (id, nav_id) {

        (function($){

            $('#'+id).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: false,
                arrows: true,
                dots: false,
                prevArrow: '.product-nav-slider-block .arrow-prev',
                nextArrow: '.product-nav-slider-block .arrow-next',
                asNavFor: '#'+nav_id,
            });

        })(jQuery)
    }

    function init_slick_navslider (id, nav_id) {

        (function($){

            $('#'+id).slick({
                infinity: true,
                fade: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 400,
                arrows: false,
                asNavFor: '#'+nav_id,
                centerMode: true,
                variableWidth: true,
                focusOnSelect: true,
            });

        })(jQuery)
    }
		
</script>


@endjs

{!! JSAssembler::get() !!}
