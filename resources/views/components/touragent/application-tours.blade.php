<div class="modal-application-tours" id="modal-application-tours">
    <div class="container-modal-application-tours">
        
        <div class="modal-application-tours-wrapper">

            <div class="modal-application-tours-form">
                <form action="" class="search-form">
                    <div class="modal-application-tours-form-inner">
                        <x-inputs.inputselect 
                            class="small" 
                            name="countryto" 
                            :items="$counties = $countries" 
                            label="Страна прилета:" 
                            placeholder="Введите город" 
                            type="text" 
                            required 
                        />
                
                        <x-inputs.inputselect 
                            class="medium" 
                            name="cityfrom" 
                            :items="$cities = $cities" 
                            label="Вылет из:" 
                            placeholder="Введите город" 
                            type="text" 
                            required 
                        />

                        <x-inputs.inputselect 
                            class="medium" 
                            name="cityto" 
                            :items="$cities = $cities" 
                            label="Курорт:" 
                            placeholder="Введите название" 
                            type="text" 
                            required 
                        />
                
                        <x-inputs.date 
                            label="Дата вылета:" 
                            placeholder="Дата 1" 
                        />
                
                        <x-inputs.inputselect 
                            class="154"
                            name="night" 
                            :items="$nigths = $nigths" 
                            label="К-во ночей:" 
                            placeholder="К-во ночей:" 
                            type="text" 
                            required 
                        />
            
                
                        <x-inputs.button type="submit" class="green">
                            Фильтровать
                        </x-inputs.button>

                    </div>

                    <x-inputs.checkbox maintext>
                        За последние 24 часа
                    </x-inputs.checkbox>
                </form>
            </div>

            <div class="modal-application-tours-header">

                <div class="h3 modal-application-tours-header-title">Заявки на туры</div>
                <x-inputs.button class="yellow" action="update_list_touragent(this, '{{ route('update-list-touragent', [], false) }}'); return false;">
                    Обновить список
                </x-inputs.button>

            </div>

            <div class="modal-application-tours-list">

                <div class="modal-application-tours-content">

                    <x-touragent.applications :applications="$applications" :isWorking="$isWorking" />

                </div>
                
            </div>

            <div class="modal-application-tours-pagination">
                <x-inc.pagination 
                    :count="$count" 
                    :pagesize="$pagesize" 
                    :page="$page"
                    :paglink="$paglink"
                    pageparam="page-modal"
                />
            </div>

        </div>
    

    </div>

    <x-inputs.button class="green vertical close" onclick="close_modal_application()">
        Свернуть страницу
    </x-inputs.button>
</div>


@desktopcss
<style>

    .modal-application-tours {
        position: absolute;
        top: 0;
        width: 100%;
        height: calc(100% + 100px);
        background: rgba(96, 94, 94, 0.6);;
        align-items: center;
        justify-content: center;
        display: flex;
        z-index: 50;
        left: -100%;
        transition: 0.5s;
    }

    
    .modal-application-tours {
        top: -100px!important;
    }

    .modal-application-tours.active {
        left: 0;
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

    .container-modal-application-tours {
        top: 0;
        left: 0;
        position: absolute; 
        width: calc(100% - 52px);
        border-radius: 0;
        /* overflow: auto; */
        height: 100%;
        background: url(/photos/1/basic/exchangeback.svg) no-repeat fixed;
    	background-size: cover;
        padding: 40px calc(var(--offset)/2) 100px var(--offset);
    }

    .modal-application-tours-wrapper {
        height: 100%;
    }

    .container-modal-application-tours .modal-application-tours-list {
        max-height: calc(100% - 300px);
        overflow: auto;
    }

    .container-modal-application-tours #content-block {
        overflow: auto;
        height: 100%;
        padding-right: 20px;
    }

    .container-modal-application-tours .modal-application-tours-list::-webkit-scrollbar {
        width: 5px;
    }
    
    .container-modal-application-tours .modal-application-tours-list::-webkit-scrollbar-track {
        background: var(--color-main-stroke);
        border-radius: 1000;

    }
    
    .container-modal-application-tours .modal-application-tours-list::-webkit-scrollbar-thumb {
        border-radius: 1000;
        background: var(--color-main-blue);
    }

    .modal-application-tours-form {
        width: 100%;
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 40px;
    }

    .modal-application-tours-form-inner {
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 12px;
    }

    .btn-close {
        position: absolute;
        top: 100px;
        right: 0;
    }

    .modal-application-tours-form-inner .inputselect-wrapper,
    .modal-application-tours-form-inner .inputform-wrapper,
    .modal-application-tours-form-inner .date-label {
        padding: 7px 20px;
        width: 186px;
        margin-bottom: 0;
    }

    .modal-application-tours-form-inner .inputform-block {
        margin-bottom: 0;
    }

    .modal-application-tours-header {
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    .modal-application-tours-header-title {
        color: var(--color-main-white);
    }
 
</style>
@mobilecss

@endcss



@startjs

<script>

    function open_application_tours(){

        close_modal()

        modal = '#modal-application-tours'

        $(modal).addClass('active')

        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function close_modal_application() {
        $('.modal-application-tours').removeClass('active');
    }

    $('.modal-application-tours').on('click', function(e) {
        if (this == (e.target)) {
            close_modal_application()
        }
    })

    async function update_list_touragent(elem, route) {

        event.preventDefault()


        const response = await post(route, {
        }, true, true)

        if (response.success) {
            $('#content-block').html(response.data.html)
            window.scrollTo({ top: 0, behavior: 'smooth' });

            $('#pagination').html(response.data.pagination)

        } else {

            
        }
    }

</script>
@endjs