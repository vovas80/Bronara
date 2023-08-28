<div class="people-block" id="parent" data-name="{{ $name }}">
    <label {{ $attributes->merge([ 'class' => 'people-wrapper people-wrapper-'.$class ]) }}>


        <div class="people-wrapper-inner" onclick="show_people(this)" data-adult="взр." data-child="дет.">

            <div class="text-main-regular people-label" >{{ $label }}</div>

            <input {{ $attributes->merge([ 'class' => 'people text-additional-semibold people-'.$class ]) }} 
                placeholder="{!! $placeholder !!}" 
                type="{{ $type }}" 
                @if($required)    
                    required
                @endif
                name="{{ $name }}"
                readonly
            >
        </div>

        
        <div class="people-items" data-name="{{ $name }}">
            <div class="people-items-inner">
               <div class="people-item">
                   <div class="text-main-regular people-item-title">Взрослые:</div>
                   <x-inputs.counter min="1" max="10" step="1" value="1" minusAction="change_people(this)" plusAction="change_people(this)" />
               </div>

               <div class="people-item child">
                    <div class="child-inner" id="child-add" style="display: none !important;">
                        <div class="text-main-regular people-item-title">Ребенок:</div>
                        <div class="child-info">
                            <div class="text-main-regular child-title"></div>
                            <svg onclick="delete_child(this); change_people(this)" class="child-svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10" cy="10" r="10" fill="#274158"/>
                                <path d="M10.442 10.0008L13.9085 6.53422C14.0305 6.41217 14.0305 6.2143 13.9085 6.09227C13.7864 5.97024 13.5886 5.97022 13.4665 6.09227L10 9.5588L6.53349 6.09227C6.41144 5.97022 6.21357 5.97022 6.09153 6.09227C5.9695 6.21431 5.96949 6.41219 6.09153 6.53422L9.55804 10.0007L6.09153 13.4673C5.96949 13.5893 5.96949 13.7872 6.09153 13.9092C6.15255 13.9702 6.23253 14.0007 6.31252 14.0007C6.3925 14.0007 6.47247 13.9702 6.5335 13.9092L10 10.4427L13.4665 13.9092C13.5275 13.9702 13.6075 14.0007 13.6875 14.0007C13.7675 14.0007 13.8474 13.9702 13.9085 13.9092C14.0305 13.7872 14.0305 13.5893 13.9085 13.4673L10.442 10.0008Z" fill="white"/>
                            </svg>                            
                        </div>
                    </div>

                    <div class="child-inner child-inner-add">
                        <div class="text-main-regular people-item-title">Ребенок:</div>
                        <x-inputs.select 
                            class="years"
                            label="Возраст:"
                            title="Возраст" 
                            name="years" 
                            :items="$years" 
                        />
                    </div>
               </div>

               <x-inputs.button class="blue-empty" action="add_child(this); change_people(this)">
                    + Добавить ребенка
               </x-inputs.button>

            </div>
        </div>
        
    </label>

</div>


@desktopcss

<style>

    .people-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        width: 260px;
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 5px;
        padding: 13px 20px 13px 10px; 
        position: relative;
    }
    
    .people-label {
        margin-bottom: 8px;
        color: var(--color-main-gray-text);
    }

    .people {
        width: 100%;
        border: none;
    }

    .input-wrapper-grey,
    .textarea-wrapper-grey {
        background: var(--color-back);
    }

    /* .people .input {
        width: 100%;
        border: none;
    }

    .people .input::placeholder {
        color: var(--color-main-gray-text);
    } */

    .people-items {
        position: absolute;
		top: 100%;
		left: -7px;
		background: var(--color-main-white);
		box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
		border-radius: 5px;
		padding: 20px;
		z-index: 1001;
		opacity: 0;
		visibility: hidden;
		pointer-events: none;
		transition: .3s;
		display: flex;
		flex-direction: column;
        margin-top: 5px;
        width: 285px;
    }

    .people-items.active {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
    }

    /* .people-items-inner {
        max-height: 160px;
        overflow: auto;
    }

    .people-items-inner::-webkit-scrollbar {
        width: 4px;
    }
    
    .people-items-inner::-webkit-scrollbar-track {
        background: var(--color-main-stroke);
        border-radius: 1000px;

    }
    
    .people-items-inner::-webkit-scrollbar-thumb {
        border-radius: 1000px;
        background: var(--color-main-blue);
    } */

    .people-item {
        margin-bottom: 12px;
        transition: .3s;
        cursor: pointer;    
        display: flex;
        width: 100%;
        justify-content: space-between;
    }

    .people-item:hover {
        color: var(--color-main-blue);
    }

    .people-block .checkbox {
        margin-top: 5px;
    }


    .people-wrapper-260 {
        width: 260px;
    }

    .people-wrapper-140 {
        width: 140px;
    }

    .child {
        flex-direction: column;
        margin-bottom: 3px;
    }

    .child-inner {
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 12px;
        align-items: center;
    }

    .child-inner {
        order: 1;
    }

    .child-inner-add {
        order: 2;
    }

    .child-info {
        display: flex;
        align-items: center;
    }

    .child-svg {
        width: 20px;
        height: 20px;
        margin-left: 9px;
        cursor: pointer;
    }

    .select-block-select-years {
        width: 106px;
    }
    
    .select-select-years {
        width: 106px;
        padding: 5px 10px;
        height: 46px;
    }

    .select-label-select-years {
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
    }

    .select-title-select-years {
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
    }

    .select-select-years .select-title-inner::after {
        top: 0; 
    }

    .select-title.active .select-label-select-years {
        margin-bottom: 0
    }

</style>

@mobilecss

<style>

</style>

@endcss

@startjs
<script>

    function show_people(people_block) {

        people_block.closest('.people-wrapper').querySelector('.people-items').classList.add('active')

        let input = people_block.querySelector('input')

        let adult = people_block.getAttribute('data-adult')
        let child = people_block.getAttribute('data-child')

        if (!input.value) {
            input.value = 1 + ' ' + adult
        }
    }

    function change_people(elm) {

        let wrapper = document.querySelector('.people-wrapper')
        
        let people_block = wrapper.querySelector('.people-wrapper-inner')

        let adult = people_block.getAttribute('data-adult')
        let child = people_block.getAttribute('data-child')

        let counter = wrapper.querySelector('.inputcounter-input').value

        if (elm.classList.contains('inputcounter-minus') && counter != 1) {
            counter--
        } else if (elm.classList.contains('inputcounter-plus')) {
            counter++
        }

        child_count = wrapper.querySelectorAll('.child-inner.new').length

        let input = people_block.querySelector('input')

        if (child_count) {
            input.value = counter + ' ' + adult + ' ' + child_count + ' ' + child
        } else {
            input.value = counter + ' ' + adult 
        }
    }

    function add_child(button) {

        let wrapper = button.closest('.people-items-inner')

        let years = wrapper.querySelector('.child-inner-add').querySelector('input').value

        if (!years) {
            wrapper.querySelector('.child-inner-add').querySelector('.select-select-years').classList.add('red');
            return;
        } 

        let copy_block = wrapper.querySelector('#child-add')

        let new_child = copy_block.cloneNode(true);

        new_child.setAttribute('style', '')
        new_child.setAttribute('id', '')
        new_child.classList.add('new')
        new_child.querySelector('.child-title').innerText = years

        wrapper.querySelector('.people-item.child').appendChild(new_child)
    }

    function delete_child(elm) {

        parent = elm.closest('.child-inner')
        parent.parentElement.removeChild(parent)
    }


    var list = document.getElementById('parent');
    var stateList = document.querySelector('.people-items')
    
    function top_walker (node, test_func, last_parent) {
        while ( node && node !== last_parent ) {
            if ( test_func(node) ) {
                return node;
            }
            node = node.parentNode;
        }
    }

    document.documentElement.addEventListener('click', function (event) {
        var isClickWithinOpenedDiv = top_walker(event.target, function (node) {
            return node === list
        })
        if (!isClickWithinOpenedDiv) {
            stateList.classList.remove('active')
        }
    }, true)

    stateList.addEventListener('click', function(){
        stateList.classList.add('active')
    })

</script>
@endjs
