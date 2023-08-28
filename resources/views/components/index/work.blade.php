<div class="h2 faq-work-title">{{ $fields['title'] }}</div>

<div class="faq-work-items">
    
    @foreach ($fields['steps'] as $item)
        <div class="faq-work-item">
            <div class="text-main-regular faq-work-item-step">{{ $item[0] }}</div>
            <img class="faq-work-item-img" src="{{ $item[1] }}" alt="{{ $item[2] }}">
            <div class="h4 faq-work-item-title">{{ $item[2] }}</div>
        </div>
    @endforeach

</div>



@desktopcss
<style>

    .faq-work-title {
        margin-bottom: 30px;
    }

    .faq-work-items {
        display: grid;
        width: 100%;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .faq-work-item {
        margin: 0 19px 15px 0;
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 10px;
        padding: 30px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .faq-work-item:nth-child(3n) {
        margin-right: 0;
    }

    .faq-work-item-step {
        color: var(--color-main-gray-text);
        margin-bottom: 16px;
    }

    .faq-work-item-img {
        width: 80px;
        height: 80px;
        padding: 15px 15px;
        background: var(--color-main-back);
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .faq-work-item-title {
        width: 285px;
    }

	
</style>

@mobilecss

@endcss
