<div {{ $attributes->merge([ 'class' => 'inputcounter '.$class ]) }}>
    @if (!empty($title))
        <div class="text-additional-semibold inputcounter-title">{{ $title }}:</div>
    @endif
    <div class="inputcounter-inner">
        <div class="inputcounter-symbol inputcounter-minus" onclick="{{ $minusAction }}">-</div>
        <input class="text-additional-semibold inputcounter-input" 
            type="text" 
            min="{{ $min }}" 
            max="{{ $max }}" 
            step="{{ $step }}" 
            value="{{ $value }}"    
            @if ($readonly)
                readonly
            @endif
            onchange="inputcounter_change(this)"
            onfocus="inputcounter_focus(this)"
        >
        <div class="inputcounter-symbol inputcounter-plus" onclick="{{ $plusAction }}">+</div>
    </div>
</div>

@desktopcss
<style>
    
    /* inputcounter */

    .inputcounter-inner {
        position: relative;
        width: 108px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .inputcounter-input {
        border-radius: 2px;
        background: var(--color-main-back);
        border: none;
        width: 50px;
        height: 26px;
        text-align: center;
        cursor: pointer;
    }

    .inputcounter-symbol {
        cursor: pointer;
        transition: .3s;
        display: flex;
        width: 26px;
        height: 26px;
        align-items: center;
        justify-content: center;
        user-select: none;
        border: 1px solid var(--color-main-blue);
        background: var(--color-main-blue);
        color: var(--color-main-white);
        border-radius: 5px;
        font-size: 16px;
    }

    .inputcounter-plus {
        left: auto;
        right: 5px;
    }

    .inputcounter-symbol:hover {
        background: var(--color-hover-blue);
    }

    .inputcounter.small .inputcounter-inner {
        width: 118px;
    }

    .inputcounter.small .inputcounter-input {
        width: 118px;
        height: 40px;
    }

    .inputcounter.small .inputcounter-symbol {
        width: 30px;
        height: 30px;
    }
</style>

@mobilecss
@endcss

@startjs
<script>

    $('.inputcounter-symbol').on('click', function(){
        

        inputcounter_input = $(this).el[0].closest('.inputcounter-inner').querySelector('.inputcounter-input')
        step = parseInt($(inputcounter_input).attr('step'))
        currency = $(inputcounter_input).data('currency')
        
        min = parseInt($(inputcounter_input).attr('min'))
        max = parseInt($(inputcounter_input).attr('max'))

        if ($(this).el[0].classList.contains('inputcounter-minus')){

            if (parseInt($(inputcounter_input).val()) > min) {
                $(inputcounter_input).val((parseInt($(inputcounter_input).val()) - step ))
            }

        } else {

            if (parseInt($(inputcounter_input).val()) < max ) {
                $(inputcounter_input).val((parseInt($(inputcounter_input).val()) + step ))
            }

        }

    })


    $('.product-info .inputcounter-symbol').on('click', function(){
        
        inputcounter_inputs = $('.product-info .inputcounter-input')
        currency_input = $(inputcounter_input).data('currency')

        price = $('#price').data('price')
        currency = $('#price').text().split(' ').slice(-1)[0].split('/')[0]
        
        new_price = $('#price').text().split(' ')

        inputcounters = 1
        inputcounter_inputs.el.forEach(inputcounter_input => {
            inputcounters *= parseInt($(inputcounter_input).val())
        });

        new_price[1] = price * inputcounters

        // if (inputcounters == 1){
        //     new_price[2] = currency + '/' + currency_input
        // } else {
            new_price[2] = currency
        // }

        $('#price').text(new_price.join(' '))
    })

    function inputcounter_focus(elm){
        $(elm).attr('old-value', $(elm).val());
    }

    function inputcounter_change(elm){
        min = parseInt($(elm).attr('min'))
        max = parseInt($(elm).attr('max'))
        value = $(elm).val()
        oldvalue = $(elm).attr('old-value')
        
        if (!((!isNaN(parseInt(value)) && isFinite(value)) && parseInt(value) >= min && parseInt(value) <= max)) {
            

            if (elm.closest('.cart-product')){
                id_product = $(elm.closest('.cart-product')).data('id')

                Cart.add(id_product, (1 - oldvalue))
            } else {
                $(elm).val(1);
            }
            
        } else {

            if (elm.closest('.cart-product')){
                id_product = $(elm.closest('.cart-product')).data('id')

                Cart.add(id_product, (value - oldvalue))
            }

        }

    }

</script>
@endjs