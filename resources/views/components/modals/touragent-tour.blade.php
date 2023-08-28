@if(!empty($tour))
<div class="modal modal-tour fade-in @if($active) active @endif" id="modal-touragent-tour">
    <div class="container-modal container-modal-tour">
        <div class="close closemodal" onclick="close_modal()">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"></path>
            </svg>
        </div>

        <div class="modal-tour-wrapper">

            <div class="modal-tour-basic">
                <x-tour.slider :images="$tour->gallery"/>
                <x-tour.touragent-tour-info :tour="$tour" :idbooking="$tour->id_booking"/>

            </div>

            <div class="modal-tour-arrival">

                <div class="h4 modal-tour-arrival-title">Информация по вылету и прилету:</div>

                <div class="modal-tour-arrival-inner">

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

            </div>

            <div class="modal-tour-arrival">

                @if($tour->tourists->count() > 1)
                    <div class="h4 modal-tour-arrival-title">Информация о туристax:</div>
                @else 
                    <div class="h4 modal-tour-arrival-title">Информация о туристе:</div>
                @endif

                <div class="modal-tour-arrival-wrapper">
                    @foreach ($tour->tourists as $person)
                        <x-tour.tourist :tourist="$person"/>
                    @endforeach
                   
                </div>

                <div class="modal-tour-agent-option">
                    <div class="modal-tour-agent-option-btns">

                        <x-inputs.button onclick="open_chat(this)" class="blue counter" counter="1">
                            <svg class="btn-svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1359_3549)">
                                <path d="M13.8783 12.2231C15.0486 12.2231 16.0005 11.2711 16.0005 10.1009V3.67614C16.0005 2.5059 15.0486 1.55371 13.8783 1.55371H2.12189C0.951852 1.55371 0 2.5059 0 3.67614V10.1009C0 11.2711 0.951852 12.2231 2.12189 12.2231H3.6662V14.4446C3.6662 14.7147 3.82889 14.9582 4.07838 15.0615C4.16108 15.0957 4.24781 15.1122 4.33374 15.1122C4.50747 15.1122 4.67832 15.0444 4.80606 14.9167L7.49906 12.2231H13.8783Z" fill="white"/>
                                <path d="M18.1425 7.10986H17.0688V10.101C17.0688 11.8602 15.6376 13.2914 13.8784 13.2914H7.94164L6.69336 14.54C6.8438 15.4146 7.60696 16.0823 8.52373 16.0823H13.6929L15.8606 18.2503C15.9883 18.3781 16.1592 18.446 16.3329 18.446C16.4189 18.446 16.5056 18.4292 16.5883 18.395C16.8378 18.2917 17.0004 18.0483 17.0004 17.7782V16.0822H18.1426C19.1669 16.0822 20.0001 15.2487 20.0001 14.2242V8.96757C20.0001 7.94326 19.1668 7.10986 18.1425 7.10986Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1359_3549">
                                <rect width="20" height="20" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>     
                            Чат по туру
                        </x-inputs.button>  
                        <x-inputs.button href="{{action('DownloadController@downloadPDF_booking', $tour->id_booking)}}" class="blue-empty">
                            <svg class="btn-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.26653 14.6802C8.08253 14.6802 7.95853 14.6982 7.89453 14.7162V15.8942C7.97053 15.9122 8.06553 15.9172 8.19653 15.9172C8.67553 15.9172 8.97053 15.6752 8.97053 15.2662C8.97053 14.9002 8.71653 14.6802 8.26653 14.6802ZM11.7535 14.6922C11.5535 14.6922 11.4235 14.7102 11.3465 14.7282V17.3382C11.4235 17.3562 11.5475 17.3562 11.6595 17.3562C12.4765 17.3622 13.0085 16.9122 13.0085 15.9602C13.0145 15.1302 12.5295 14.6922 11.7535 14.6922Z" fill="#0274CA"/>
                                <path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2ZM9.498 16.19C9.189 16.48 8.733 16.61 8.202 16.61C8.09904 16.6111 7.99613 16.6051 7.894 16.592V18.018H7V14.082C7.40345 14.0218 7.81112 13.9944 8.219 14C8.776 14 9.172 14.106 9.439 14.319C9.693 14.521 9.865 14.852 9.865 15.242C9.864 15.634 9.734 15.965 9.498 16.19ZM13.305 17.545C12.885 17.894 12.246 18.06 11.465 18.06C10.997 18.06 10.666 18.03 10.441 18V14.083C10.8446 14.0241 11.2521 13.9963 11.66 14C12.417 14 12.909 14.136 13.293 14.426C13.708 14.734 13.968 15.225 13.968 15.93C13.968 16.693 13.689 17.22 13.305 17.545ZM17 14.77H15.468V15.681H16.9V16.415H15.468V18.019H14.562V14.03H17V14.77ZM14 9H13V4L18 9H14Z" fill="#0274CA"/>
                            </svg>                            
                            Скачать в PDF
                        </x-inputs.button>     

                    </div>
                </div>

            </div>

            <div class="modal-tour-hotel">

                <div class="h2 modal-tour-hotel-title">Информация об отеле</div>
                <div class="content modal-tour-hotel-content">
                    {!!$tour->information!!}    
                </div>

                <div class="modal-tour-hotel-items">

                    @foreach ($tour->advantages as $advantage)
                        <x-tour.hotel-advantage :advantage="$advantage"/>
                    @endforeach

                </div>

            </div>

            @if(sizeof($tour->reviews))
                <div class="modal-tour-reviews">

                    <div class="h2 modal-tour-reviews-title">{{$fields['reviews_title']}}</div>

                    <div class="modal-tour-reviews-whom">
                        <x-inputs.whom class="modal-tour-reviews-whom-title active" id="reviews-1" onclick="change_reviews(this)">
                            {{$fields['tripadvisor']}}
                        </x-inputs.whom>
            
                        <x-inputs.whom class="modal-tour-reviews-whom-title" id="reviews-2" onclick="change_reviews(this)">
                            {{$fields['tophotels']}}
                        </x-inputs.whom>
                    </div>

                    <div class="modal-tour-reviews-items active" id="reviews-1">
                        <x-tour.reviews :reviews="$tour->reviews" :parser="$fields['tripadvisor']" />
                    </div>

                    <div class="modal-tour-reviews-items" id="reviews-2">
                        <x-tour.reviews :reviews="$tour->reviews" :parser="$fields['tophotels']" />
                    </div>

                </div>  
            @endif
            
            @if (!empty($tour->lng) && !empty($tour->lat))
                <div class="map" id="map" data-lat="{{$tour->lat}}" data-lng="{{$tour->lng}}" data-title="{{$tour->title_hotel}}" data-star="{{$tour->stars->number}}"></div>
            @endif

        </div>

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

    .container-modal-tour {
        width: 1200px;
        padding: 60px 40px 60px 60px;
        border-radius: 10px;
        overflow: auto;
        max-height: calc(100% - 100px);
    }

    .modal-tour-wrapper {
        overflow: auto;
        max-height: calc(100% - 100px);
        padding-right: 20px;
    }

    .modal-tour-wrapper::-webkit-scrollbar {
        width: 5px;
    }
    
    .modal-tour-wrapper::-webkit-scrollbar-track {
        background: var(--color-main-stroke);
        border-radius: 1000;

    }
    
    .modal-tour-wrapper::-webkit-scrollbar-thumb {
        border-radius: 1000;
        background: var(--color-main-blue);
    }

    .modal-tour .close {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .modal-tour .close svg {
        width: 14.41px;
        height: 14.41px;
    }

    .modal-tour-basic {
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 40px;
    }

    .modal-tour-arrival {
        margin-bottom: 40px;
    }

    .modal-tour-arrival-title {
        margin-bottom: 10px;
    }

    .modal-tour-agent {
        margin-bottom: 60px;
    }

    .modal-tour-agent-title {
        margin-bottom: 20px;
    }

    .modal-tour-agent-option {
        display: flex;
        width: 100%;
        justify-content: space-between;
    }

    .modal-tour-agent-option-btns {
        display: flex;
    }

    .modal-tour-agent-option-btns .btn {
        margin-right: 25px;
    }

    .modal-tour-hotel {
        margin-bottom: 45px;
    }

    .modal-tour-hotel-title {
        margin-bottom: 20px;
    }

    .modal-tour-hotel-content {
        margin-bottom: 30px;
    }

    .modal-tour-hotel-items {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }

    .modal-tour-reviews {
        margin-bottom: 60px;
    }

    .modal-tour-reviews-title {
        margin-bottom: 20px;
    }

    .modal-tour-reviews-whom {
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    .modal-tour-reviews-whom .whom-title:hover {
        color: var(--color-main-blue);
        border: 1px solid var(--color-main-blue);
    }

    .modal-tour-reviews-whom .whom-title.active {
        background: var(--color-main-blue);
        color: var(--color-main-white);
    }

    .modal-tour-reviews-items {
        display: none;
    }

    .modal-tour-reviews-items.active {
        display: block;
    }

    .map {
        width: 1060px;
        height: 514px;
        border-radius: 20px;
    }

    .map-content-marker {
        padding: 10px 15px;
    }


</style>
@mobilecss

@endcss


@startjs

<script>

    function change_reviews(elm) {

        var id = elm.getAttribute('data-id')


        document.querySelectorAll('.modal-tour-reviews-whom-title').forEach(element => {
            element.classList.remove('active')
        });

        elm.classList.add('active')

        document.querySelectorAll('.modal-tour-reviews-items').forEach(element => {
            element.classList.remove('active')
        });

        document.querySelector('#' + id).classList.add('active')

    }

    async function open_touragent_tour(tour, route){

        tour_slug = tour.getAttribute('data-slug')
        id_booking = tour.getAttribute('data-booking')

        const response = await post(route, {
            tour_slug,
            id_booking
        }, true, true)

        if (response.success){

            $("#booking-tour-for-touragent").html(response.data.html)

            modal = '#modal-touragent-tour'
            $(modal).addClass('active')
            window.scrollTo({ top: 0, behavior: 'smooth' });

            if (response.data.lat && response.data.lng) {
                initGmapsTour(response.data.title, response.data.star, response.data.lat, response.data.lng);
            }
            init_slick()
        }
    }

    function edit_status() {
        $('.booking-status-statustour').removeClass('active');
        $('.booking-status-empty').addClass('active');
    }

    async function save_status(status, route) {

        let tour_slug = status.getAttribute('data-tour');
        let id_booking = status.getAttribute('data-idbooking');

        let id_status = status.closest('#booking-status').querySelector('input[name="status"]').value
        

        const response = await post(route, {
            tour_slug,
            id_booking,
            id_status
        }, true, true)

        if (response.success){

            $("#info-booking-status").html(response.data.html)
        }

    }



</script>
@endjs