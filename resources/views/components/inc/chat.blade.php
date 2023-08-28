<div class="chat-wrapper" id="chat">
    <div class="chat">

        <div class="text-additional-semibold chat-header">
            Отправьте нам сообщение
        </div>

        <div class="chat-messages">
            <div class="chat-messages-inner">
                <div class="text-main-regular chat-message chat-message-agent">Здравствуйте. У вас возникли вопросы? Мы с удовольствием ответим</div>
                <div class="text-main-regular chat-message chat-message-user">Добрый день! Подскажите, пожалуйста, по туру</div>
                <div class="text-main-regular chat-message chat-message-agent">Что Вам подсказать?</div>
            </div>

        </div>

        <div class="chat-write">

            <input type="text" name="message" placeholder="Введите сообщение" class="text-main-regular chat-write-input">
            <img class="chat-write-attach" src="/photos/1/icons/attach.svg" alt="">
            <img class="chat-write-send" src="/photos/1/icons/send.svg" alt="">
        </div>

    </div>

    <div class="close closechat" onclick="close_chat(this)">
        <svg class="closechat-svg" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1368_12309)">
            <path d="M14.4364 13.0008L25.7025 1.7346C26.0992 1.33795 26.0992 0.694854 25.7025 0.298252C25.3059 -0.0983494 24.6628 -0.0984002 24.2662 0.298252L13 11.5645L1.73383 0.298252C1.33718 -0.0984002 0.69409 -0.0984002 0.297489 0.298252C-0.0991121 0.694905 -0.0991629 1.338 0.297489 1.7346L11.5636 13.0008L0.297489 24.267C-0.0991629 24.6637 -0.0991629 25.3068 0.297489 25.7034C0.495789 25.9017 0.755738 26.0008 1.01569 26.0008C1.27564 26.0008 1.53553 25.9017 1.73388 25.7034L13 14.4372L24.2661 25.7034C24.4644 25.9017 24.7244 26.0008 24.9843 26.0008C25.2443 26.0008 25.5042 25.9017 25.7025 25.7034C26.0992 25.3067 26.0992 24.6636 25.7025 24.267L14.4364 13.0008Z" fill="white"/>
            </g>
            <defs>
            <clipPath id="clip0_1368_12309">
            <rect width="26" height="26" fill="white"/>
            </clipPath>
            </defs>
        </svg>            
    </div>

</div>

@desktopcss

<style>
    .chat-wrapper {
        /* display: none; */
        flex-direction: column;
        position: fixed;
        bottom: 15px;
        right: 180px;
        z-index: 100;
        align-items: flex-end;
        width: 360px;
        transition: .5s;
        left: 100%;
    }

    .chat-wrapper.active {
        left: 70%;
    }

    .chat {
        width: 360px;
        height: auto;
        background: #FFFFFF;
        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .chat-header {
        background: var(--color-main-blue);
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.08);
        border-radius: 10px 10px 0px 0px;
        padding: 16px 20px;
        color: var(--color-main-white);
    }

    .chat-messages {
        background: var(--color-main-white);
        padding: 5px 8px 5px 0;
    }

    .chat-messages-inner {
        height: 262px;
        overflow: auto;
        padding: 20px 15px 20px 20px;
    }

    .chat-message {
        border-radius: 10px;
        padding: 10px 15px;
        margin-bottom: 15px;
        width: 235px;
    }

    .chat-message-agent {
        background: var(--color-main-back);
    }

    .chat-message-user {
        background: var(--color-main-blue);
        color: var(--color-main-white);
        margin: 0 0 15px auto;
    }

    .chat-messages-inner::-webkit-scrollbar {
        width: 4px;
    }
    
    .chat-messages-inner::-webkit-scrollbar-track {
        background: var(--color-main-stroke);
        border-radius: 1000px;

    }
    
    .chat-messages-inner::-webkit-scrollbar-thumb {
        border-radius: 1000px;
        background: var(--color-main-blue);
    }


    .chat-write {
        border-top: 1px solid #E9EEF1;
        padding: 20px;
        background: var(--color-main-white);
        display: flex;
        border-radius: 0 0 10px 10px;
    }

    .chat-write-input {
        border: none;
        width: 207px;
    }

    .chat-write-attach {
        cursor: pointer;
        width: 36px;
        height: 36px;
        margin: 0 5px 0 38px;
    }

    .chat-write-send {
        width: 36px;
        height: 36px;
        cursor: pointer;
    }

    .closechat {
        width: 80px;
        height: 80px;
        background: var(--color-main-blue);
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.15);
        padding: 27px;
        border-radius: 50%;
        cursor: pointer;
        margin: 0 0 0 auto;
    }

    .closechat-svg {
        width: 26px;
        height: 26px;
    }




</style>

@mobilecss
@endcss

@startjs
<script>
    function open_chat(elm){

        chat = '#chat'

        $(chat).addClass('active')


    }

    
    function close_chat(elm){

        elm.closest('.chat-wrapper').classList.remove('active')

    }


</script>
@endjs