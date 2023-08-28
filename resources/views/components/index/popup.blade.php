<div class="popup fade-in">

    <div class="popup-container">

        <div class="close closemodal" onclick="close_popup()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>

        <x-index.work />

    </div>

</div>

@desktopcss

<style>

    .popup {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);;
        align-items: center;
        justify-content: center;
        display: flex;
        z-index: 10000;
    }

    .popup .close {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .popup .close svg {
        width: 14.41px;
        height: 14.41px;
    }

    .popup.active {
        height: 100%;
    }

    .popup-container {
        background: var(--color-main-back);
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 50px;
        left: var(--offset);
        width: var(--column-width);
        padding: 40px 50px 50px;
        text-align: center;
    }

    .popup .faq-work-item {
        margin-right: 15px;
        padding: 30px 35px;
    }


</style>

@mobilecss

<style>

</style>

@endcss

@startjs

<script>

    function close_popup() {
        $('.popup').removeClass('active');
    }

    $('.popup').on('click', function(e) {
        if (this == (e.target)) {
            close_popup()
        }
    })

    if (localStorage.getItem('firstPageTime') == null){

        localStorage.setItem('firstPageTime', +new Date());
    }
    
    localStorage.setItem('nextPageTime', +new Date());

    function showModal(){

        $('.popup').addClass('active');
        localStorage.setItem('popup', +new Date());
    }
        
    timeToShow = 6000;
        
    if (localStorage.getItem('popup') == null) {

        window.setTimeout(showModal, timeToShow - parseInt(localStorage.getItem('nextPageTime')) + parseInt(localStorage.getItem('firstPageTime')));
    }

</script>
@endjs