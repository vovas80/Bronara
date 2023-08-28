<div class="modal modal-login fade-in" id="modal-login-tourist">
    <div class="container-modal container-modal-login">
        <div class="close closemodal" onclick="close_modal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>
        <div class="h3 login-title">{{ $fields['title'] }}</div>

        <div class="text-additional-semibold login-desc">{{ $fields['login'] }}</div>

        <div class="login-whom">
            <x-inputs.whom class="whom-login active" id="login-1" onclick="open_login_modal_tourist()">
                {{ $fields['tourist'] }}
            </x-inputs.whom>

            <x-inputs.whom class="whom-login" id="login-2" onclick="open_login_modal_agent()">
                {{ $fields['touragent'] }}
            </x-inputs.whom>
        </div>

        <form action="" class="login-form" onsubmit="tourist_login(this, '{{ route('login', '', false) }}'); return false;">
			
            <x-inputs.input name="email" label="{{ $fields['email_tourist_label'] }}" placeholder="{{ $fields['email_tourist'] }}" type="email" required/>
            <x-inputs.input name="password" label="{{ $fields['password_tourist_label'] }}" placeholder="{{ $fields['password_tourist'] }}" type="password" required/>
            
            <div class="login-buttons">
                <x-inputs.checkbox>
                    {{ $fields['remember'] }}
                </x-inputs.checkbox>
                <div class="text-main-undrln-semibold button-forgot" onclick="open_forgot_modal_tourist()">{{ $fields['forgot'] }}</div>
            </div>

            <x-inputs.button type="submit" class="login 100 form">
                {{$fields['title']}}
            </x-inputs.button>

            <div class="form-answer text-main-regular error">{{ $fields['error'] }}</div>

            <div class="text-additional-undrln-semibold button-forgot login-register-text" onclick="open_register_modal_tourist()">{{ $fields['regist_tourist']}}</div>

            <div class="text-additional-semibold login-desc login-facebook-text">{{ $fields['autorization']}}</div>

            <x-inputs.button class="100 login-facebook" href="{{ route('auth-facebook') }}">
                <img class="login-facebook-svg" src="/photos/1/social/facebook.svg" alt="">
            </x-inputs.button>
            
            
        </form>

    </div>
</div>

<div class="modal modal-login fade-in" id="modal-login-agent">
    <div class="container-modal container-modal-login">
        <div class="close closemodal" onclick="close_modal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>
        <div class="h3 login-title">{{$fields['title']}}</div>

        <div class="text-additional-semibold login-desc">{{$fields['login']}}</div>

        <div class="login-whom">
            <x-inputs.whom class="whom-login" id="login-1" onclick="open_login_modal_tourist()">
                {{ $fields['tourist'] }}
            </x-inputs.whom>

            <x-inputs.whom class="whom-login active" id="login-2" onclick="open_login_modal_agent()">
                {{ $fields['touragent'] }}            
            </x-inputs.whom>
        </div>

        <form action="" class="login-form active" onsubmit="touragent_login(this, '{{ route('login-touragent', '', false) }}'); return false;">
			
            <x-inputs.input name="id" label="Ваш ID:" placeholder="Введите ID" type="text" required/>
            <x-inputs.input name="password" label="Пароль" placeholder="Введите ваш пароль" type="password" required/>
            
            <div class="login-buttons">
                <x-inputs.checkbox>
                    {{ $fields['remember'] }}
                </x-inputs.checkbox>
                <div class="text-main-undrln-semibold button-forgot" onclick="open_forgot_modal_agent()">{{ $fields['forgot'] }}</div>
            </div>

            <x-inputs.button type="submit" class="login 100 form">
                {{$fields['title']}}
            </x-inputs.button>

            <div class="form-answer text-main-regular error">{{ $fields['error'] }}</div>

            <div class="text-additional-undrln-semibold button-forgot login-register-text" onclick="open_register_modal_agent()">{{ $fields['regist_touragent']}}</div>
            
        </form>


    </div>
</div>

@desktopcss
<style>

    .modal {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);;
        align-items: center;
        justify-content: center;
        display: flex;
        z-index: 50;
    }

    .modal.active {
        height: 100%;
    }

    .container-modal {
        background: var(--color-main-white);
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 50px;
        left: 50%;
        transform: translateX(-50%);
    }

    .container-modal-login {
        width: 600px;
        padding: 20px 70px;
        border-radius: 10px;
    }

    .modal-login .close {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .modal-login .close svg {
        width: 14.41px;
        height: 14.41px;
    }

    .login-title {
        margin-bottom: 10px;
        text-align: center;
    }

    .login-desc {
        margin-bottom: 10px;
        text-align: center;
        color: var(--color-main-gray-text);
    }

    .modal-login .input-wrapper {
        margin-bottom: 15px;
    }

    .modal-login .input-wrapper .input-label {
        color: var(--color-main);
    }

    .form-answer {
        margin-top: 5px;
    }

    .button-without-password {
        cursor: pointer;
        text-decoration: underline;
    }

    .button-forgot {
        cursor: pointer;
    }

    .login-social {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .login-social-item {
        width: 125px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #FFFFFF;
        border: 1px solid var(--color-stroke);
        border-radius: 5px;
        margin-right: 13px;
        cursor: pointer;
    }

    .login-social-item:last-child {
        margin-right: 0;
    }

    .login-social-icon {
        width: 24px;
        height: 24px;
    }

    .login-buttons {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 13px;
    }

    .button-registration {
        margin-top: 15px;
        text-align: center;
    }   

    .button-registration-inner {
        text-decoration: underline;
        cursor: pointer;
    }

    .login-whom {
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 20px;
    } 

    .login-register-text {
        text-align: center;
        margin-top: 15px;
    }

    .login-facebook-text {
        margin-top: 30px;
    }

    .login-facebook-svg {
        width: 108px;
        height: 24px;
    }

</style>
@mobilecss

@endcss

@startjs
<script>

    
    // function change_login(elm) {

    //     var id = elm.getAttribute('data-id')


    //     document.querySelectorAll('.whom-login').forEach(element => {
    //         element.classList.remove('active')
    //     });

    //     elm.classList.add('active')

    //     document.querySelectorAll('.login-form').forEach(element => {
    //         element.classList.remove('active')
    //     });

    //     document.querySelector('#' + id).classList.add('active')

    // }


    function open_login_modal_agent(){

        close_modal()

        modal = '#modal-login-agent'

        $(modal).addClass('active')

        scroll_top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        $($(modal).el[0].querySelector('.container-modal')).css('top', 'calc(' + scroll_top + 'px + 10vh)');
    }

    function open_login_modal_tourist(){

        close_modal()

        modal = '#modal-login-tourist'

        $(modal).addClass('active')

        scroll_top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        $($(modal).el[0].querySelector('.container-modal')).css('top', 'calc(' + scroll_top + 'px + 10vh)');
    }


    async function tourist_login(form, route){
        
        email = $(form.querySelector('input[name="email"]')).val()
        password = $(form.querySelector('input[name="password"]')).val()
        remember = false
        if(form.querySelector('input[name="checkbox"]').checked){
            remember = true
        }
        
        const response = await post(route, {
            email,
            password,
            remember,
        }, true, true)

        if (response.success){

            location.href = response.data.redirect
        
        } else {
            $(form.querySelector('.form-answer.error')).css('display', 'block')
        }

        return false;
    } 

    async function touragent_login(form, route){
        
        id = $(form.querySelector('input[name="id"]')).val()
        password = $(form.querySelector('input[name="password"]')).val()
        remember = false
        if(form.querySelector('input[name="checkbox"]').checked){
            remember = true
        }
        
        const response = await post(route, {
            id,
            password,
            remember,
        }, true, true)

        if (response.success){

            location.href = response.data.redirect
        
        } else {
            $(form.querySelector('.form-answer.error')).css('display', 'block')
        }

        return false;
    } 

</script>
@endjs