<div class="modal modal-forgot fade-in" id="modal-forgot-tourist">
    <div class="container-modal container-modal-forgot">
        <div class="close closemodal" onclick="close_modal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>
        <div class="h3 forgot-title">{{$fields['title']}}</div>
        
        <form action="" class="forgot-form active" id="send-code" onsubmit="send_code(this, '{{ route('sendcode') }}', ''); return false;">
			
            <div class="text-additional-semibold login-desc forgot-description">{{$fields['form_1_text']}}</div>

            <x-inputs.input name="email" label="{{$fields['form_1_input']}}" placeholder="{{$fields['form_1_placeholder']}}" type="email" required/>
            			
            <x-inputs.button type="submit" class="login 100 form">
                {{$fields['form_1_button_text']}}
            </x-inputs.button>

            <div class="form-answer text-main-regular error">{{$fields['form_1_error']}}</div>
        </form>

        <form action="" class="forgot-form" id="check-code" onsubmit="check_code(this, '{{ route('checkcode') }}'); return false;">
			
            <div class="text-additional-semibold login-desc forgot-description">{{$fields['form_2_description']}}</div>

            <x-inputs.input label="{{$fields['form_2_input']}}" name="code" placeholder="{{$fields['form_2_placeholder']}}" type="text" required/>
            			
            <x-inputs.button type="submit" class="login 100 form">
                {{$fields['form_2_button_text']}}
            </x-inputs.button>

            <div class="form-answer text-main-regular error">{{$fields['form_2_error']}}</div>
        </form>

        <form action="" class="forgot-form" id="change-password" onsubmit="change_password(this, '{{ route('changepassword') }}'); return false;">
			
            <div class="text-additional-semibold login-desc forgot-description">{{$fields['form_3_text']}}</div>

            <x-inputs.input label="{{$fields['form_3_input_1']}}" name="password" placeholder="{{$fields['form_3_input_1']}}" type="password" required/>
            <x-inputs.input label="{{$fields['form_3_input_2']}}" name="password_confirmation" placeholder="{{$fields['form_3_input_2']}}" type="password" required/>
            			
            <x-inputs.button type="submit" class="login 100 form">
                {{$fields['form_3_button_text']}}
            </x-inputs.button>

            <div class="form-answer text-main-regular error">{{$fields['form_3_error']}}</div>
        </form>


        <div class="forgot-buttons">
            <div class="text-main-undrln-semibold button-login" onclick="open_login_modal_tourist()">{{$fields['form_last']}}</div>
        </div>

    </div>
</div>

<div class="modal modal-forgot fade-in" id="modal-forgot-agent">
    <div class="container-modal container-modal-forgot">
        <div class="close closemodal" onclick="close_modal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>
        <div class="h3 forgot-title">{{$fields['title']}}</div>
        
        <form action="" class="forgot-form active" id="send-code" onsubmit="send_code(this, '{{ route('sendcode-touragent') }}', ''); return false;">
			
            <div class="text-additional-semibold login-desc forgot-description">{{$fields['form_1_text']}}</div>

            <x-inputs.input name="email" label="{{$fields['form_1_input']}}" placeholder="{{$fields['form_1_placeholder']}}" type="email" required/>
            			
            <x-inputs.button type="submit" class="login 100 form">
                {{$fields['form_1_button_text']}}
            </x-inputs.button>

            <div class="form-answer text-main-regular error">{{$fields['form_1_error']}}</div>
        </form>

        <form action="" class="forgot-form" id="check-code" onsubmit="check_code(this, '{{ route('checkcode-touragent') }}'); return false;">
			
            <div class="text-additional-semibold login-desc forgot-description">{{$fields['form_2_description']}}</div>

            <x-inputs.input label="{{$fields['form_2_input']}}" name="code" placeholder="{{$fields['form_2_placeholder']}}" type="text" required/>
            			
            <x-inputs.button type="submit" class="login 100 form">
                {{$fields['form_2_button_text']}}
            </x-inputs.button>

            <div class="form-answer text-main-regular error">{{$fields['form_2_error']}}</div>
        </form>

        <form action="" class="forgot-form" id="change-password" onsubmit="change_password(this, '{{ route('changepassword-touragent') }}'); return false;">
			
            <div class="text-additional-semibold login-desc forgot-description">{{$fields['form_3_text']}}</div>

            <x-inputs.input label="{{$fields['form_3_input_1']}}" name="password" placeholder="{{$fields['form_3_input_1']}}" type="password" required/>
            <x-inputs.input label="{{$fields['form_3_input_2']}}" name="password_confirmation" placeholder="{{$fields['form_3_input_2']}}" type="password" required/>
            			
            <x-inputs.button type="submit" class="login 100 form">
                {{$fields['form_3_button_text']}}
            </x-inputs.button>

            <div class="form-answer text-main-regular error">{{$fields['form_3_error']}}</div>
        </form>


        <div class="forgot-buttons">
            <div class="text-main-undrln-semibold button-login" onclick="open_login_modal_tourist()">{{$fields['form_last']}}</div>
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

    .container-modal-forgot {
        width: 600px;
        padding: 20px 70px;
        border-radius: 10px;
    }

    .modal-forgot .close {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .modal-forgot .close svg {
        width: 14.41px;
        height: 14.41px;
    }

    .modal-forgot .input-wrapper {
        margin-bottom: 20px;
    }

    .modal-forgot .input-wrapper .input-label {
        color: var(--color-main);
    }

    .form-answer {
        margin-top: 5px;
        display: none;
    }

    .forgot-title {
        margin-bottom: 15px;
        text-align: center;
    }

    .forgot-desc {
        text-align: center;
        margin-bottom: 15px;
    }

    .button-login {
        text-decoration: underline;
        cursor: pointer;
        margin-top: 15px;
    }

    .button-forgot {
        cursor: pointer;
    }

    .forgot-description {
        text-align: center;
    }

    .forgot-form {
        display: none;
    }

    .forgot-form.active {
        display: block;
    }

    .error {
        color: var(--color-additional-red);
        text-align: center;
        padding-top: 10px;
    }

</style>
@mobilecss

@endcss


@startjs
<script>

    function open_forgot_modal_tourist(){

        close_modal()

        modal = '#modal-forgot-tourist'

        $(modal).addClass('active')

        $('#change-password').removeClass('active')
        $('#check-code').removeClass('active')
        $('#send-code').addClass('active')


        scroll_top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        $($(modal).el[0].querySelector('.container-modal')).css('top', 'calc(' + scroll_top + 'px + 10vh)');
    }

    async function send_code (form, route, title){
        
        email = $(form.querySelector('input[name="email"]')).val()
        
        const response = await post(route, {
            email: email,
            title: title,
        }, true, true)

        if (response.success){
            $(form.querySelector('.form-answer.error')).css('display', 'none')
            $(form.closest('.modal').querySelector('.forgot-buttons')).css('display', 'none')
            $(form).removeClass('active')
            $('#check-code').addClass('active')

        } else {
            $(form.querySelector('.form-answer.error')).css('display', 'block')
        }

        return false;

    }

    async function check_code (form, route){
        
        email = $($('#send-code').el[0].querySelector('input[name="email"]')).val()

        if(email == ''){
            email = $($('#send-code').el[1].querySelector('input[name="email"]')).val()
        }
        
        code = $(form.querySelector('input[name="code"]')).val()


        const response = await post(route, {
            email: email,
            code: code,
        }, true, true)

        if (response.success){
            $(form.querySelector('.form-answer.error')).css('display', 'none')
            $(form).removeClass('active')
            $('#change-password').addClass('active')

        } else {
            $(form.querySelector('.form-answer.error')).css('display', 'block')
        }

        return false;

    }

    async function change_password (form, route){
        
        email = $($('#send-code').el[0].querySelector('input[name="email"]')).val()
        if(email == ''){
            email = $($('#send-code').el[1].querySelector('input[name="email"]')).val()
        }

        code = $($('#check-code').el[0].querySelector('input[name="code"]')).val()
        if(code == ''){
            code = $($('#check-code').el[1].querySelector('input[name="code"]')).val()
        }
        
        password = $(form.querySelector('input[name="password"]')).val()
        password_confirmation = $(form.querySelector('input[name="password_confirmation"]')).val()

        const response = await post(route, {
            email: email,
            code: code,
            password: password,
            password_confirmation: password_confirmation,
        }, true, true)

        if (response.success){
            $(form.querySelector('.form-answer.error')).css('display', 'none')
            $(form).removeClass('active')
            $('#send-code').addClass('active')

            close_modal()
            open_login_modal()
            
        } else {

            $(form.querySelector('.form-answer.error')).css('display', 'block')

            if (response.data.password){
                $(form.querySelector('.form-answer.error')).text(response.data.password[0])
            } else if (response.data.phone) {
                $(form.querySelector('.form-answer.error')).text(response.data.phone[0])
            } else if (response.data.email) {
                $(form.querySelector('.form-answer.error')).text(response.data.email[0])
            } else if (response.data.password_confirmation) {
                $(form.querySelector('.form-answer.error')).text(response.data.password_confirmation[0])
            } 

        }

        return false;

    }

    function open_forgot_modal_agent(){

        close_modal()

        modal = '#modal-forgot-agent'

        $(modal).addClass('active')

        $('#change-password').removeClass('active')
        $('#check-code').removeClass('active')
        $('#send-code').addClass('active')


        scroll_top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        $($(modal).el[0].querySelector('.container-modal')).css('top', 'calc(' + scroll_top + 'px + 10vh)');
    }


</script>
@endjs