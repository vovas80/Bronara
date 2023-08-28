<div class="faq-inner">
			
    <div class="h2 faq-title">{{ $fields['title'] }}</div>

    <div class="faq-whom">

        <x-inputs.whom class="whom-faq active" id="tab-1" onclick="change_faq(this)">
            {{ $fields['tourist'] }}
        </x-inputs.whom>

        <x-inputs.whom class="whom-faq" id="tab-2" onclick="change_faq(this)">
            {{ $fields['agent'] }}
        </x-inputs.whom>

        
    </div>

    <div class="faq-questions active" id="tab-1">

        @foreach ( $fields['tourist_questions'] as $item)
            <div class="faq-question">
                <div class="faq-question-block" onclick="open_faq(this)">
                    <div class="h4 faq-question-block-title">{{ $item[0] }}</div>
                    <svg class=" faq-question-block-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1137_1961)">
                        <path d="M8.43901 12.1293L15.8272 4.74115C16.0634 4.49656 16.0566 4.1068 15.812 3.87058C15.5734 3.64014 15.1952 3.64014 14.9566 3.87058L8.00373 10.8235L1.05084 3.87058C0.810438 3.63021 0.420683 3.63021 0.180279 3.87058C-0.0600891 4.11102 -0.0600891 4.50074 0.180279 4.74115L7.56845 12.1293C7.80889 12.3697 8.19861 12.3697 8.43901 12.1293Z" fill="#0274CA"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1137_1961">
                        <rect width="16" height="16" fill="white" transform="translate(16) rotate(90)"/>
                        </clipPath>
                        </defs>
                    </svg>                            
                </div>
                <div class="text-main-regular content faq-question-answer">{!! $item[1] !!}</div>
            </div>
        @endforeach
        
    </div>

    <div class="faq-questions" id="tab-2">

        @foreach ( $fields['agent_questions'] as $item)
            <div class="faq-question">
                <div class="faq-question-block" onclick="open_faq(this)">
                    <div class="h4 faq-question-block-title">{{ $item[0] }}</div>
                    <svg class=" faq-question-block-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1137_1961)">
                        <path d="M8.43901 12.1293L15.8272 4.74115C16.0634 4.49656 16.0566 4.1068 15.812 3.87058C15.5734 3.64014 15.1952 3.64014 14.9566 3.87058L8.00373 10.8235L1.05084 3.87058C0.810438 3.63021 0.420683 3.63021 0.180279 3.87058C-0.0600891 4.11102 -0.0600891 4.50074 0.180279 4.74115L7.56845 12.1293C7.80889 12.3697 8.19861 12.3697 8.43901 12.1293Z" fill="#0274CA"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1137_1961">
                        <rect width="16" height="16" fill="white" transform="translate(16) rotate(90)"/>
                        </clipPath>
                        </defs>
                    </svg>                            
                </div>
                <div class="text-main-regular content faq-question-answer">{!! $item[1] !!}</div>
            </div>
        @endforeach

    </div>
</div>



@desktopcss
<style>

    .faq-title {
        margin-bottom: 30px;
    }

    .faq-whom {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 30px;
    }

    .faq-questions {
        display: none;
    }

    .faq-questions.active {
        display: block;
    }
	
    .faq-question {
        border: 1px solid var(--color-main-stroke);
        box-sizing: border-box;
        border-radius: 10px;
        margin-bottom: 20px;
        padding: 20px 30px;
        cursor: pointer;
    }

    .faq-question-block {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    .faq-question-block-svg {
        width: 16px;
        height: 16px;
        transition: .5s;
    }

    .faq-question.active .faq-question-block-svg {
        transform: rotate(180deg);
    }

    .faq-question-answer {
        margin-top: 20px;
        width: 845px;
        transition: .5s ease-in-out;
        overflow: hidden;
    }

    .faq-question-answer:not(.active) {
        display: none;
    }

</style>

@mobilecss

@endcss


@startjs
<script>

    function change_faq(elm) {

        var id = elm.getAttribute('data-id')


        document.querySelectorAll('.whom-faq').forEach(element => {
            element.classList.remove('active')
        });

        elm.classList.add('active')

        document.querySelectorAll('.faq-questions').forEach(element => {
            element.classList.remove('active')
        });

        document.querySelector('#' + id).classList.add('active')
    }

    function open_faq(elm) {

        let parent = elm.closest('.faq-question')
        let container = parent.querySelector('.faq-question-answer')

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