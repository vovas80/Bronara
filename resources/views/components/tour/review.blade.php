<div class="review @if($active) active @endif">

    <div class="review-author">
        <div class="text-additional-semibold review-author-mark">{{number_format(floatval($review->mark), 1, '.', '')}}</div>
        <div class="text-additional-semibold review-author-name">{{$review->name}}</div>

        <div class="text-additional-regular review-author-visit">Посещение: Декабрь</div>
        <div class="text-additional-regular review-author-date">Добавлено: {{date("d.m.Y", strtotime($review->date))}}</div>
    </div>

    <div class="content review-content">
        {!!$review->description!!}
    </div>

    <div class="text-main-undrln-semibold review-btn" onclick="show_review_content(this)">Читать дальше</div>

</div>

@desktopcss
<style>

    .review {
        margin-bottom: 40px;
        display: none
    }

    .review.active {
        display: block
    }

    .review-author {
        display: flex;
        margin-bottom: 30px;
        align-items: center;
    }

    .review-author-mark {
        padding: 10px 8px;
        border-radius: 4px;
        background: var(--color-main-blue);
        color: var(--color-main-white);
        margin-right: 15px;
    }

    .review-author-name {
        margin-right: 30px;
    }

    .review-author-visit {
        margin-right: 30px;
        color: var(--color-main-gray-text);
    }

    .review-author-date {
        color: var(--color-main-gray-text);
    }

    .review-content {
        margin-bottom: 20px;
        height: auto;
        max-height: 120px;
        overflow: hidden;
    }

    .review-content.active {
        height: auto;
        overflow: auto;
    }

    .review-btn {
        color: var(--color-main-blue);
        transition: .3s;
        cursor: pointer;
    }

    .review-btn:hover {
        color: var(--color-hover-blue);
    }
    
</style>
@mobilecss
@endcss

@startjs
<script>

    function show_review_content(elm) {
        elm.classList.add('none')
        elm.closest('.review').querySelector('.review-content').classList.add('active') 
    }

</script>
@endjs

