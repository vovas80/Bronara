<div class="showtours" onclick="show_othertours(this)">
   <span class="text-main-undrln-semibold showtours-title showtours-title-show">{{ $slot }}</span>
   <span class="text-main-undrln-semibold showtours-title showtours-title-hide">Скрыть туры</span>
   
</div>

@desktopcss

<style>

    .showtours-title {
        display: flex;
        align-items: center;
        cursor: pointer;
        position: relative;
        color: var(--color-main-blue);
        transition: .3s;
        width: 150px;
        justify-content: flex-end;
    }

    .showtours-title.active::after {
        margin-top: 3px;
        transform: rotate(225deg);
    }

    .showtours-title::after {
        display: block;
        content: "";
        width: 4px;
        height: 4px;
        border: 1px solid var(--color-main-blue);
        transform: rotate(45deg);
        border-left: none;
        border-top: none;
        margin-left: 10px;
        margin-top: -3px;
        transition: transform 0.4s ease;
    }

    .showtours-title:hover {
        color: var(--color-hover-blue);
    }

    .showtours-title:hover:after {
        border: 1px solid var(--color-hover-blue);
        border-left: none;
        border-top: none;
    }

    .showtours-title-show {
        display: flex;
    }

    .showtours.active .showtours-title-show {
        display: none;
    }

    .showtours-title-hide {
        display: none;
    }

    .showtours.active .showtours-title-hide {
        display: flex;
    }

    .showtours.active .showtours-title::after {
        margin-top: 3px;
        transform: rotate(225deg);
    }

</style>

@mobilecss
@endcss


@startjs

<script>

    function show_othertours(elm) {
        elm.classList.toggle('active')

        // elm.closest('.exchange-tour-item').classList.toggle('active')

        let parent = elm.closest('.exchange-tour-item')
        let container = parent.querySelector('.othertours')

        if (!container.classList.contains('active')) {

            parent.classList.add('active')
            container.classList.add('active')
            container.style.height = 'auto'
            let height = container.clientHeight + 'px'
            container.style.height = '0px'
            
            setTimeout(function () {
                container.style.height = height
            }, 0)

        } else {

            container.style.height = '0px'

            parent.classList.remove('active')

            container.addEventListener('transitionend', function () {
                container.classList.remove('active')
            }, {
                once: true
            })
        }
    }

</script>

@endjs