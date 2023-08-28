<div class="modal modal-choose-tour fade-in" id="modal-choose-tour">
    <div class="container-modal container-modal-choose-tour">
        <div class="close closemodal" onclick="close_modal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>

        <div class="modal-choose-tour-header">
            <div class="h2 modal-choose-tour-title">Подобрать тур</div>
            <div class="modal-choose-tour-id">
                <div class="text-additional-semibold modal-choose-tour-id-title">ID тура:</div>
                <div class="text-additional-semibold modal-choose-tour-id-text">1234567890</div>
            </div>
        </div>

        
        <form action="" class="modal-choose-tour-form active" id="send-code" onsubmit="send_code(this, '{{ route('sendcode') }}', ''); return false;">
			
            <div class="text-additional-regular modal-choose-tour-description">Заполните поля, чтобы сформировать тур:</div>

            <div class="choose-tour-inner">

                <div class="choose-tour-item">

                    <x-inputs.inputselect placeholder="Страна:" label="Страна" class="170" :items="$cities = [
                        [
                            'title' => 'Италия',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Турция',
                            'value' => 'turckesh',
                        ],
                    ]"  />

                    <x-inputs.inputselect placeholder="Город" label="Вылет из:" class="170" :items="$cities = [
                        [
                            'title' => 'Италия',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Турция',
                            'value' => 'turckesh',
                        ],
                    ]"  />

                    <x-inputs.inputselect placeholder="Курорт" label="Курорт:" class="170" :items="$cities = [
                        [
                            'title' => 'Италия',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Турция',
                            'value' => 'turckesh',
                        ],
                    ]"  />


                    <x-inputs.inputselect placeholder="Отель" label="Название отеля:" class="170" :items="$cities = [
                        [
                            'title' => 'Италия',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Турция',
                            'value' => 'turckesh',
                        ],
                    ]"  />

                    <x-inputs.inputselect placeholder="Ночи" label="Кол-во ночей:" class="170" :items="$cities = [
                        [
                            'title' => 'Италия',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Турция',
                            'value' => 'turckesh',
                        ],
                    ]"  />

                    <x-inputs.input-form placeholder="Стоимость" label="Стоимость:" name="id" type="text" class="170" />

                </div>

                <div class="choose-tour-item">

                    <x-inputs.date placeholder="Дата вылета:" label="Даты тура:"  class="260"/>

                    <x-inputs.people  label="К-во туристов:" placeholder="Выберите к-во людей" class="260" />

                    <x-inputs.inputselect placeholder="Все включено" label="Все включено:" class="260" :items="$cities = [
                        [
                            'title' => 'Италия',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Турция',
                            'value' => 'turckesh',
                        ],  
                    ]"  />

                    <div class="choose-tour-visa">
                        <div class="text-main-regular choose-tour-visa-title">Нужна виза:</div>
                        <x-inputs.radio value="Нужна" name="visa" checked title="Нужна" />
                        <x-inputs.radio value="Нет, не нужна"  name="visa" title="Нет, не нужна" />
                        <x-inputs.radio value=" В аэропорту по прилету"  name="visa"  title=" В аэропорту по прилету" />

                    </div>

                </div>

                <div class="choose-tour-item">

                    <x-inputs.inputselect placeholder="Тип номера" label="Тип номера:" class="207" :items="$cities = [
                        [
                            'title' => 'Италия',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Турция',
                            'value' => 'turckesh',
                        ],
                    ]"  />

                    <x-inputs.inputselect placeholder="Вид из номера" label="Вид из номера:" class="207" :items="$cities = [
                        [
                            'title' => 'Front sea view – номер с фронтальным видом на море.',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Garden view – номер с видом на сад.',
                            'value' => 'turckesh',
                        ],
                    ]"  />

                    <x-inputs.inputselect placeholder="Вылет / прилет туда" label="Вылет / прилет туда:" class="207" :items="$cities = [
                        [
                            'title' => 'Италия',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Турция',
                            'value' => 'turckesh',
                        ],
                    ]"  />

                    <x-inputs.inputselect placeholder="Вылет / прилет обратно" label="Вылет / прилет обратно:" class="207" :items="$cities = [
                        [
                            'title' => 'Италия',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Турция',
                            'value' => 'turckesh',
                        ],
                    ]"  />

                    <x-inputs.inputselect placeholder="Виден вам" label="Туроператор (виден вам):" class="207" :items="$cities = [
                        [
                            'title' => 'Италия',
                            'value' => 'italy',
                        ],
                        [
                            'title' => 'Турция',
                            'value' => 'turckesh',
                        ],
                    ]"  />
        
                </div>
            </div>

           

            <x-inputs.button type="submit" class="green center">
                Отправить
            </x-inputs.button>
           

            <div class="form-answer text-main-regular error">Ошибка.</div>
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

    .container-modal-choose-tour {
        width: 1200px;
        padding: 40px 60px;
        border-radius: 10px;
    }

    .modal-choose-tour .close {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .modal-choose-tour .close svg {
        width: 14.41px;
        height: 14.41px;
    }


    .modal-choose-tour-header {
        display: flex;
        align-items: flex-end;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 25px;
    }

    .modal-choose-tour-id {
        display: flex;
    }

    .modal-choose-tour-id-title {
        margin-right: 5px;
        color: var(--color-main-gray-text);
    }

    .modal-choose-tour-description {
        margin-bottom: 20px;
    }

    .choose-tour-inner {
        display: flex;
        flex-direction: column;
    }

    .choose-tour-item {
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .choose-tour-visa {
        width: 260px;
    }

    .choose-tour-visa-title {
        color: var(--color-main-gray-text);
        margin-bottom: 8px;
    }

    .checkbox-btn-choose:not(:last-child) {
        margin-bottom: 7px;
    }
</style>
@mobilecss

@endcss


@startjs
<script>

    function open_choose_tour(){

        close_modal()

        modal = '#modal-choose-tour'

        $(modal).addClass('active')

        // scroll_top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        // $($(modal).el[0].querySelector('.container-modal')).css('top', 'calc(' + scroll_top + 'px + 10vh)');
    }

    async function add_tourist(route) {

        // const response = await post(route, {}, false, false)

        // var div = document.createElement('div');
        // div.innerHTML = response.data.tourist

        // document.getElementById('tourists').appendChild(div)
    }



</script>
@endjs