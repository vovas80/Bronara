@if(!empty($tour))
<div class="modal modal-booktour fade-in @if($active) active @endif" id="modal-booktour">
    <div class="container-modal container-modal-booktour">
        <div class="close closemodal" onclick="close_modal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>

        <div class="h2 modal-booktour-title">Забронировать тур</div>

        <div class="modal-booktour-hotel">

            <div class="text-secondary-caps-extrabold modal-booktour-titlehotel">{{$tour->title_hotel}}</div>
            <div class="text-additional-semibold info-location modal-booktour-locationhotel">
                <svg class="info-location-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1359_3449)">
                    <path d="M8.20182 0.00333482C4.95254 -0.106167 2.28418 2.49519 2.28418 5.71972C2.28418 9.37922 5.79604 12.035 7.76443 15.8544C7.86437 16.0484 8.14353 16.0486 8.24381 15.8547C10.0245 12.418 13.0679 10.1135 13.632 6.80266C14.216 3.37656 11.6753 0.120438 8.20182 0.00333482ZM8.00384 8.71572C6.34922 8.71572 5.00784 7.37431 5.00784 5.71972C5.00784 4.06514 6.34925 2.72372 8.00384 2.72372C9.65846 2.72372 10.9999 4.06514 10.9999 5.71972C10.9999 7.37431 9.65846 8.71572 8.00384 8.71572Z" fill="#92A8B8"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1359_3449">
                    <rect width="16" height="16" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>   
                {{$tour->cityto->country->title}}, {{$tour->cityto->title}}
            </div>
            
            <div class="h4 modal-booktour-pricehotel">{{round($tour->price)}} {{Region::getCurrency()}}</div>

            <x-tour.basicinfo isModalBookTour :tour="$tour"/>

        </div>

        <div class="modal-booktour-arrival">
            <div class="h4 modal-booktour-arrival-title">Информация по вылету и прилету:</div>

            <x-tour.arrival 
                :title="$fields['to']"
                :cityfrom="$tour->cityfrom->title" 
                :cityto="$tour->cityto->title"
                :datefrom="$tour->data_departure"
                :dateto="$tour->data_departure_to"
            />

            <x-tour.arrival 
                :title="$fields['from']"
                :cityfrom="$tour->cityto->title" 
                :cityto="$tour->cityfrom->title"
                :datefrom="$tour->data_arrival_from"
                :dateto="$tour->data_arrival"
            />

        </div>
        
        <form class="modal-booktour-form active" id="send-booking-tour" data-id="{{$tour->id}}" onsubmit="send_booking_tour(this, '{{ route('send-booking-tour', [], false) }}'); return false;">
			
            <div class="text-additional-semibold modal-booktour-description">Заполните данные из загранпаспорта:</div>

            <div class="booktour-tourists" id="tourists">

                <x-tourist.data-tourist />

            </div>

            <div class="booktour-btns">
                <x-inputs.button class="blue-empty" onclick="add_tourist()">
                    Добавить туриста
                </x-inputs.button>

                <x-inputs.button type="submit" class="green center">
                    Отправить
                </x-inputs.button>
            </div>
            			
        
            <div class="form-answer text-main-regular error">Ошибка.</div>
        </form>


    </div>
</div>
@endif


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

    .container-modal-booktour {
        width: 1200px;
        padding: 40px 60px;
        border-radius: 10px;
    }

    .modal-booktour .close {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .modal-booktour .close svg {
        width: 14.41px;
        height: 14.41px;
    }

    .modal-booktour-title {
        margin-bottom: 30px;
    }

    .modal-booktour-titlehotel {
        margin-bottom: 15px;
        text-align: left;
    }

    .modal-booktour-pricehotel {
        margin-bottom: 15px;
    }

    .modal-booktour-hotel .basicinfo {
        background: none;
        padding: 0;
    }

    .modal-booktour-hotel .basicinfo-second-item-title {
        color: var(--color-main-gray-text);
    }

    .modal-booktour-hotel .basicinfo-second-item-svg path {
        fill: var(--color-main-gray-text);
    }

    .modal-booktour-hotel .basicinfo-second-item-text,
    .modal-booktour-hotel .basicinfo-second-item-inner-city,
    .modal-booktour-hotel .basicinfo-second-item-data {
        color: var(--color-text-main);
    }

    .modal-booktour-hotel .basicinfo-second-item-inner-svg line {
        stroke: var(--color-text-main);
    }

    .modal-booktour-hotel .basicinfo-second-item-inner-svg path {
        fill: var(--color-text-main);
    }

    .modal-booktour-hotel .basicinfo-second-item-inner-svg circle {
        stroke:  var(--color-main-blue);
    }

    .modal-booktour-hotel {
        margin-bottom: 30px;
    }

    .modal-booktour-arrival {
        margin-bottom: 40px;
    }

    .modal-booktour-arrival-title {
        margin-bottom: 20px;
    }

    .modal-booktour-description {
        margin-bottom: 20px;
    }

    .booktour-btns {
        position: relative;
    }

    .booktour-btns .btn-blue-empty {
        position: absolute;
        top: 0;
        left: 0;
    }

</style>
@mobilecss

@endcss


@startjs
<script>

    async function open_booktour(tour, route) {

        tour_slug = tour.getAttribute('data-slug')

        const response = await post(route, {
            tour_slug,
        }, true, true)

        if (response.success){

            $("#booking-modal").html(response.data.html)

            window.scrollTo({ top: 0, behavior: 'smooth' });

            
        }
    }

    async function add_tourist() {
        var container = document.getElementById("tourists");
        var section = document.getElementById("tourist");
        new_tourist = container.appendChild(section.cloneNode(true));
        inputs = new_tourist.querySelectorAll("input")

        inputs.forEach(input => {
            input.value = ""       
        })
        select = new_tourist.querySelector('.select-title-inner').innerHTML = ''
    }

    function get_tourists(form) {

        let tourists = form.querySelectorAll('.data-tourist')

        let tourists_info = []

        tourists.forEach(tourist => {

            tourists_info.push({
                firstName: tourist.querySelector("input[name='first-name']").value,
                secondName: tourist.querySelector("input[name='second-name']").value,
                thirdName: tourist.querySelector("input[name='third-name']").value,
                dateOfBirth: tourist.querySelector("input[name='dateofbirth']").value,
                passport: tourist.querySelector("input[name='passport']").value,
                date: tourist.querySelector("input[name='date']").value,
                issued: tourist.querySelector("input[name='issued']").value,
                citizenship: tourist.querySelector("input[name='citizenship']").value,

            })
        })

        return tourists_info
    }

    async function send_booking_tour(form, route) {

        event.preventDefault()

        id_tour = form.getAttribute('data-id')

        tourists = get_tourists(form)

        const response = await post(route, {
            id_tour,
            tourists
        }, true, true)

        if (response.success) {
            
            form.reset()
            window.scrollTo({ top: 0, behavior: 'smooth' })
            document.getElementById('modal-success').classList.add('active')

        } else {
            form.querySelector('.form-answer.error').style.display = "block";
        }
    }


</script>
@endjs