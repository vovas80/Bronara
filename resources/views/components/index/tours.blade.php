@foreach ($tours as $tour)
    <x-index.tour :tour="$tour"/>
@endforeach