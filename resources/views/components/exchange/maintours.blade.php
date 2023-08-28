@foreach ($tours as $key => $tour)
    <x-exchange.maintour :isUserTours="$isUserTours" :isUserBooking="$isUserBooking" :isUserDocument="$isUserDocument" :tour="$tour" :active="$key <= 10 ? true : false"/>
@endforeach

