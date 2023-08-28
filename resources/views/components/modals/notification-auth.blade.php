<div class="modal modal-notification fade-in" id="modal-notification-auth">
    <div class="container-modal container-modal-notification">
        <div class="close closemodal" onclick="close_modal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>

        <div class="h3 notification-title">{{$fields['title']}}</div>
        
       <x-inputs.button class="green" onclick="close_modal()">
            {{$fields['btn']}}
       </x-inputs.button>

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

    .container-modal-notification {
        width: 445px;
        padding: 30px 60px;
        border-radius: 10px;
    }

    .container-modal-notification {
        top: 350px;
    }

    .modal-notification .close {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .modal-notification .close svg {
        width: 14.41px;
        height: 14.41px;
    }

    .modal-notification .input-wrapper {
        margin-bottom: 20px;
    }

    .modal-notification .input-wrapper .input-label {
        color: var(--color-main);
    }

    .form-answer {
        margin-top: 5px;
        display: none;
    }

    .notification-title {
        margin-bottom: 30px;
        text-align: center;
    }

    .notification-desc {
        text-align: center;
        margin-bottom: 15px;
    }

    .button-login {
        text-decoration: underline;
        cursor: pointer;
        margin-top: 15px;
    }

    .button-notification {
        cursor: pointer;
    }

    .notification-description {
        text-align: center;
    }

    .notification-form {
        display: none;
    }

    .notification-form.active {
        display: block;
    }

    .error {
        color: var(--color-additional-red);
        text-align: center;
        padding-top: 8px;
    }

    .success {
        color: var(--color-main-green);
        text-align: center;
        padding-top: 8px;
    }

</style>
@mobilecss

@endcss


@startjs
<script>

    function open_notification_auth(){

        close_modal()

        modal = '#modal-notification-auth'

        $(modal).addClass('active')


        scroll_top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        $($(modal).el[0].querySelector('.container-modal')).css('top', 'calc(' + scroll_top + 'px + 10vh)');
    }
    
</script>
@endjs