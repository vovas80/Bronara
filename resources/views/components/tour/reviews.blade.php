@if(!empty($reviews))

<div class="reviews">
    
    @foreach ($reviews as $key => $review)
        @if($review->parser == $parser)
            <x-tour.review :review="$review" :active="$key <= 5 ? true : false"/>
        @endif
    @endforeach

    @if($reviews->count() > 5)
        <x-inputs.button class="blue-empty center fit-content" onclick="show_all_reviews(this)">
            Посмотреть все отзывы
        </x-inputs.button>
    @endif

</div>
@endif

@desktopcss
<style>


</style>
@mobilecss
@endcss

@startjs

<script>
    function show_all_reviews(btn) {

        parent = btn.parentElement; 
        parent.style.height = "auto";

        let items = parent.querySelectorAll('.review:not(.active)')

        items.forEach(element => {
            element.classList.add('active')
            btn.classList.add('none')
            
        });
    }
</script>

@endjs