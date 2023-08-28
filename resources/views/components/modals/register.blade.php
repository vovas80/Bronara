<div class="modal modal-register fade-in" id="modal-register-agent">
    <div class="container-modal container-modal-register">
        <div class="close closemodal" onclick="close_modal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>
        <div class="h3 register-title">{{ $fields['title'] }}</div>
        <div class="text-additional-semibold login-desc register-desc">{{$fields['title_touragent']}}</div>

        <div class="login-whom">
            <x-inputs.whom class="whom-regist" id="regist-1" onclick="open_register_modal_tourist()">
                {{$fields['tourist']}}
            </x-inputs.whom>

            <x-inputs.whom class="whom-regist active" id="regist-2" onclick="open_register_modal_agent()">
                {{$fields['touragent']}}
            </x-inputs.whom>
        </div>

        
        <form action="" class="register-form" onsubmit="touragent_register(this, '{{ route('register-touragent', '', false) }}'); return false;">

            <x-inputs.input  name="company" label="{{$fields['title_touragention_label']}}" placeholder="{{$fields['title_touragention']}}" type="text" required/>
            <x-inputs.input  name="name" label="{{$fields['name_touragent_label']}}" placeholder="{{$fields['name_touragent']}}" type="text" required/>
            <x-inputs.input  class="small" name="email" label="{{$fields['email_touragent_label']}}" placeholder="{{$fields['email_touragent']}}" type="email" required/>
            <x-inputs.input  class="small" name="phone" label="{{$fields['phone_touragent_label']}}" placeholder="{{$fields['phone_touragent']}}" type="text"/>
            <x-inputs.input  name="password" label="{{$fields['password_touragent_label']}}" placeholder="{{$fields['password_touragent']}}" type="password" required/>
            			
            <x-inputs.checkbox>
                {{$fields['remember']}}
            </x-inputs.checkbox>

            <x-inputs.button type="submit" class="login 100 form">
                {{$fields['regist_touragent']}}
            </x-inputs.button>

            <div class="form-answer text-main-regular error">{{$fields['error']}}</div>
        </form>

        <div class="text-additional-undrln-semibold button-forgot login-register-text" onclick="open_login_modal_agent()">
           {{$fields['login_touragent']}}
        </div>
    </div>
</div>

<div class="modal modal-register fade-in" id="modal-register-tourist">
    <div class="container-modal container-modal-register">
        <div class="close closemodal" onclick="close_modal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>
        <div class="h3 register-title">{{ $fields['title'] }}</div>
        <div class="text-additional-semibold login-desc register-desc">{{ $fields['regist_tourist'] }}</div>

        <div class="login-whom">
            <x-inputs.whom class="whom-regist active" id="regist-1" onclick="open_register_modal_tourist()">
                {{ $fields['tourist'] }}
            </x-inputs.whom>

            <x-inputs.whom class="whom-regist" id="regist-2" onclick="open_register_modal_agent()">
                {{ $fields['touragent'] }}
            </x-inputs.whom>
        </div>

        <form action="" class="register-form" onsubmit="tourist_register(this, '{{ route('register', '', false) }}'); return false;">

            <x-inputs.input  name="name" label="{{$fields['title_tourist_label']}}" placeholder="{{$fields['title_tourist']}}" type="text" required/>
            <x-inputs.input  name="email" label="{{$fields['email_tourist_label']}}" placeholder="{{$fields['email_tourist']}}" type="email" required/>
            <x-inputs.input  name="phone" label="{{$fields['phone_tourist_label']}}" placeholder="{{$fields['phone_tourist']}}" type="text"/>
            <x-inputs.input  name="password" label="{{$fields['password_tourist_label']}}" placeholder="{{$fields['password_tourist']}}" type="password" required/>
            		
            <x-inputs.checkbox>
                {{$fields['remember']}}
            </x-inputs.checkbox>

            <x-inputs.button type="submit" class="login 100 form">
                {{ $fields['regist_touragent_title'] }}
            </x-inputs.button>

            <div class="form-answer text-main-regular error">{{$fields['error']}}</div>
        </form>

        <div class="text-additional-undrln-semibold button-forgot login-register-text" onclick="open_login_modal_tourist()">
            {{ $fields['login_tourist'] }}
        </div>
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
        background: rgba(0, 0, 0, 0.6);
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

    .register-form {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: space-between;
    }

    .container-modal-register {
        width: 600px;
        padding: 20px 70px;
        border-radius: 10px;
    }

    .modal-register .close {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .modal-register .close svg {
        width: 14.41px;
        height: 14.41px;
    }

    .register-title {
        margin-bottom: 15px;
        text-align: center;
    }

    .register-desc {
        margin-bottom: 15px;
        text-align: center;
    }

    .modal-register .input-wrapper {
        margin-bottom: 15px;
    }

    .modal-register .input-wrapper .input-label {
        color: var(--color-main);
    }

    .modal-register .checkbox {
        margin-bottom: 24px;
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

    .register-social {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .register-social-item {
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

    .register-social-item:last-child {
        margin-right: 0;
    }

    .register-social-icon {
        width: 24px;
        height: 24px;
    }

    .register-buttons {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: -7px;
        margin-bottom: 20px;
    }

    .button-registration {
        margin-top: 15px;
        text-align: center;
    }   

    .button-registration-inner {
        text-decoration: underline;
        cursor: pointer;
    }

</style>
@mobilecss

@endcss
 

@startjs
<script>

    function open_register_modal_agent(){

        close_modal()

        modal = '#modal-register-agent'

        $(modal).addClass('active')

        scroll_top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        $($(modal).el[0].querySelector('.container-modal')).css('top', 'calc(' + scroll_top + 'px + 10vh)');
    }

    function open_register_modal_tourist(){

        close_modal()

        modal = '#modal-register-tourist'

        $(modal).addClass('active')

        scroll_top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        $($(modal).el[0].querySelector('.container-modal')).css('top', 'calc(' + scroll_top + 'px + 10vh)');
    }
    
    async function tourist_register(form, route){
        
        name = $(form.querySelector('input[name="name"]')).val()
        email = $(form.querySelector('input[name="email"]')).val()
        phone = $(form.querySelector('input[name="phone"]')).val()
        password = $(form.querySelector('input[name="password"]')).val()

        
        const response = await post(route, {
            email: email,
            password: password,
            name: name,
            phone: phone,
        }, true, true)

        if (response.success){

            location.href = response.data.redirect
        
        } else {

            $(form.querySelector('.form-answer.error')).css('display', 'block')

            if (response.data.password){
                $(form.querySelector('.form-answer.error')).text(response.data.password[0])
            } else if (response.data.phone) {
                $(form.querySelector('.form-answer.error')).text(response.data.phone[0])
            } else if (response.data.email) {
                $(form.querySelector('.form-answer.error')).text(response.data.email[0])
            } 

        }

        return false;
    } 

    async function touragent_register(form, route){
        
        company = $(form.querySelector('input[name="company"]')).val()
        name = $(form.querySelector('input[name="name"]')).val()
        email = $(form.querySelector('input[name="email"]')).val()
        phone = $(form.querySelector('input[name="phone"]')).val()
        password = $(form.querySelector('input[name="password"]')).val()

        
        const response = await post(route, {
            email: email,
            password: password,
            name: name,
            company: company,
            phone: phone,
        }, true, true)

        if (response.success){

            location.href = response.data.redirect
        
        } else {

            $(form.querySelector('.form-answer.error')).css('display', 'block')

            if (response.data.password){
                $(form.querySelector('.form-answer.error')).text(response.data.password[0])
            } else if (response.data.phone) {
                $(form.querySelector('.form-answer.error')).text(response.data.phone[0])
            } else if (response.data.email) {
                $(form.querySelector('.form-answer.error')).text(response.data.email[0])
            } 

        }

        return false;
    } 

</script>
@endjs 