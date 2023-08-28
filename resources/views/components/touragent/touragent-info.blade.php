<div class="touragent-info">

    <div class="touragent-info-inner">

        <form class="touragent-info-form" onsubmit="save_changes(event,this, '{{ route('save-touragent', [], false) }}'); return false;">

            <div class="touragent-info-data">

                <div class="touragent-info-data-inner">

                    <div class="touragent-info-data-id">
                        <div class="text-main-regular touragent-info-data-id-title">{{ $fields['id']}}</div>
                        <div class="text-additional-semibold touragent-info-data-id-number">{{$touragent->id_touragent}}</div>
                    </div>

                    @if(!empty($touragent->photo))
                        <img id="image" src="{{$touragent->photo}}" class="touragent-info-data-photo" alt="{{$touragent->name}}">
                    @else
                        <div id="svg" class="touragent-info-data-photo">
                            
                            <svg class="touragent-info-data-photo-svg" width="86" height="86" viewBox="0 0 86 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1202_397)">
                                <path d="M42.3858 41.4264C48.0771 41.4264 53.0053 39.3852 57.0319 35.3579C61.0586 31.3313 63.0998 26.4045 63.0998 20.7126C63.0998 15.0226 61.0586 10.0951 57.0313 6.06719C53.0039 2.04121 48.0764 0 42.3858 0C36.6939 0 31.7671 2.04121 27.7404 6.06785C23.7137 10.0945 21.6719 15.022 21.6719 20.7126C21.6719 26.4045 23.7137 31.332 27.7411 35.3586C31.7684 39.3846 36.6959 41.4264 42.3858 41.4264Z" fill="#0274CA"/>
                                <path d="M78.631 66.1296C78.5149 64.4538 78.28 62.6259 77.9342 60.6955C77.5852 58.7508 77.1357 56.9123 76.5977 55.232C76.0419 53.4952 75.2861 51.7801 74.3518 50.1365C73.382 48.4306 72.243 46.9451 70.9648 45.7227C69.6283 44.444 67.9919 43.4158 66.0996 42.6659C64.2139 41.9198 62.1242 41.5419 59.8887 41.5419C59.0108 41.5419 58.1618 41.9021 56.5221 42.9696C55.513 43.6277 54.3326 44.3888 53.0151 45.2307C51.8886 45.9485 50.3624 46.621 48.4774 47.2299C46.6382 47.825 44.7709 48.1268 42.9278 48.1268C41.0848 48.1268 39.2181 47.825 37.377 47.2299C35.4939 46.6216 33.9677 45.9491 32.8425 45.2313C31.5374 44.3974 30.3564 43.6363 29.3322 42.969C27.6945 41.9015 26.8448 41.5413 25.9669 41.5413C23.7308 41.5413 21.6417 41.9198 19.7567 42.6665C17.8657 43.4152 16.2287 44.4433 14.8908 45.7234C13.6133 46.9464 12.4736 48.4312 11.5052 50.1365C10.5715 51.7801 9.81567 53.4946 9.25928 55.2326C8.72191 56.913 8.27246 58.7508 7.9234 60.6955C7.57762 62.6232 7.34273 64.4518 7.22659 66.1315C7.11243 67.7771 7.05469 69.485 7.05469 71.2099C7.05469 75.6992 8.48177 79.3334 11.2959 82.0137C14.0753 84.6585 17.7529 86.0003 22.225 86.0003H63.6346C68.1067 86.0003 71.783 84.6592 74.563 82.0137C77.3778 79.3354 78.8049 75.7005 78.8049 71.2093C78.8042 69.4765 78.7458 67.7673 78.631 66.1296Z" fill="#0274CA"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1202_397">
                                <rect width="86" height="86" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <img id="image" src="{{$touragent->photo}}" class="touragent-info-data-photo none" alt="{{$touragent->name}}">
                    @endif

                    <input name="photo" type="file" id="file" accept=".jpg, .jpeg, .png"/>
                    <label for="file" class="btn-photo-touragent">{{$fields['photo']}}</label>
                        
                </div>

                <div class="touragent-info-data-items">
                    <x-inputs.inputuser class="touragent" type="text"  name="name" placeholder="{{$fields['title']}}" label="{{$fields['title']}}" :value="$touragent->name"  isIcon />
                    <x-inputs.inputuser class="touragent" type="text"  name="company" placeholder="{{$fields['company']}}" label="{{$fields['company']}}" :value="$touragent->company"  isIcon />
                    <x-inputs.inputuser class="touragent" type="tel"   name="phone" placeholder="{{$fields['phone']}}"  label="{{$fields['phone']}}" :value="$touragent->phone" isIcon />
                    <x-inputs.inputuser class="touragent" type="email" name="email" placeholder="{{$fields['email']}}" label="{{$fields['email']}}" :value="$touragent->email" isIcon />
                    <x-inputs.inputuser class="touragent" type="text"  name="mark" placeholder="{{$fields['mark']}}" label="{{$fields['mark']}}" :value="$touragent->mark.'/10'" readonly/>
                    <x-inputs.inputuser class="touragent" type="text"  name="license" placeholder="{{$fields['license']}}" label="{{$fields['license']}}" :value="$touragent->license"/>
                    <x-inputs.inputuser class="touragent" type="text"  name="address" placeholder="{{$fields['address']}}" label="{{$fields['address']}}" :value="$touragent->address" isIcon />
                    <x-inputs.inputuser class="touragent" type="text"  name="work" placeholder="{{$fields['work']}}" label="{{$fields['work']}}" :value="$touragent->work" isIcon textarea />
                </div>

            </div>
        
            <x-inputs.button type="submit" class="blue-empty fit-content save-touragent">
                {{ $fields['btn']}}
            </x-inputs.button>

            <div class="message main-text color-red error">{{ $fields['error'] }}</div>
            <div class="message main-text color-green success">{{ $fields['success'] }}</div>    

        </form>

        <div class="touragent-info-subscription">

            <div class="h3 touragent-info-subscription-title">{{$fields['subscribe']}}</div>
            <div class="text-additional-regular touragent-info-subscription-subtitle">{{$fields['subscribe_text']}}</div>
            <div class="text-main-semibold touragent-info-desc">{{$fields['subscribe_text2']}}</div>
            <x-inc.timer class="big"/>
            <x-inputs.button class="blue">
                {{$fields['subscribe_btn']}}
            </x-inputs.button>

        </div>
    </div>
        

    <form class="touragent-info-document" onsubmit="save_document_changes(event,this, '{{ route('save-document-touragent', [], false) }}'); return false;">
        <div class="h2 touragent-info-document-title">{{$fields['document_title']}}</div>
        <div class="text-main-regular touragent-info-document-text">{{$fields['document_text']}}</div>

        <div class="touragent-info-document-items">

            @if(!empty($touragent->documents))
                @foreach (json_decode($touragent->documents) as $document)
                    <div class="touragent-info-document-item touragent-info-document-item-document">
        
                        <div class="touragent-info-document-item-delete-btn" onclick="delete_multi_docs(this)">
                            <svg class="touragent-info-document-item-delete" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                <circle cx="10" cy="10" r="10" fill="#274158"/>
                                <g clip-path="url(#clip0_1202_445)">
                                <path d="M10.442 10.0008L13.9085 6.53422C14.0305 6.41217 14.0305 6.2143 13.9085 6.09227C13.7864 5.97024 13.5886 5.97022 13.4665 6.09227L10 9.5588L6.53349 6.09227C6.41144 5.97022 6.21357 5.97022 6.09153 6.09227C5.9695 6.21431 5.96949 6.41219 6.09153 6.53422L9.55804 10.0007L6.09153 13.4673C5.96949 13.5893 5.96949 13.7872 6.09153 13.9092C6.15255 13.9702 6.23253 14.0007 6.31252 14.0007C6.3925 14.0007 6.47247 13.9702 6.5335 13.9092L10 10.4427L13.4665 13.9092C13.5275 13.9702 13.6075 14.0007 13.6875 14.0007C13.7675 14.0007 13.8474 13.9702 13.9085 13.9092C14.0305 13.7872 14.0305 13.5893 13.9085 13.4673L10.442 10.0008Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1202_445">
                                <rect width="8" height="8" fill="white" transform="translate(6 6)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
        
                        <img class="touragent-info-document-item-img" src="{{$document}}" alt="">
                    </div>
                @endforeach
            @endif
            <div class="touragent-info-document-item none" id="document-none">
        
                {{-- <input name="photo-document" type="file" accept=".jpg, .jpeg, .png"/> --}}

                <div class="touragent-info-document-item-delete-btn" onclick="delete_multi_docs(this)">
                    <svg class="touragent-info-document-item-delete" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" >
                        <circle cx="10" cy="10" r="10" fill="#274158"/>
                        <g clip-path="url(#clip0_1202_445)">
                        <path d="M10.442 10.0008L13.9085 6.53422C14.0305 6.41217 14.0305 6.2143 13.9085 6.09227C13.7864 5.97024 13.5886 5.97022 13.4665 6.09227L10 9.5588L6.53349 6.09227C6.41144 5.97022 6.21357 5.97022 6.09153 6.09227C5.9695 6.21431 5.96949 6.41219 6.09153 6.53422L9.55804 10.0007L6.09153 13.4673C5.96949 13.5893 5.96949 13.7872 6.09153 13.9092C6.15255 13.9702 6.23253 14.0007 6.31252 14.0007C6.3925 14.0007 6.47247 13.9702 6.5335 13.9092L10 10.4427L13.4665 13.9092C13.5275 13.9702 13.6075 14.0007 13.6875 14.0007C13.7675 14.0007 13.8474 13.9702 13.9085 13.9092C14.0305 13.7872 14.0305 13.5893 13.9085 13.4673L10.442 10.0008Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1202_445">
                        <rect width="8" height="8" fill="white" transform="translate(6 6)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </div>

                <img class="touragent-info-document-item-img" id="image-document" src="" alt="">
            </div>

            <div class="touragent-info-document-add">
                <input name="photo-document" type="file" id="file-document" accept=".jpg, .jpeg, .png" oninput="check_multidocs(this)"/>
                <label for="file-document" class="touragent-info-document-item-img">
                    <svg class="touragent-info-document-add-svg" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.3576 12.6565H28.3593H17.3437V1.66159C17.3437 0.756707 16.611 0.00012207 15.7061 0.00012207H14.2966C13.392 0.00012207 12.6561 0.756707 12.6561 1.66159V12.6565H1.64073C0.736342 12.6565 0 13.3882 0 14.2933V15.7109C0 16.6152 0.736098 17.3438 1.64073 17.3438H12.6563V28.3784C12.6563 29.2828 13.392 29.9999 14.2968 29.9999H15.7063C16.6112 29.9999 17.3439 29.2826 17.3439 28.3784V17.3438H28.3576C29.2624 17.3438 30 16.615 30 15.7109V14.2933C30 13.3882 29.2624 12.6565 28.3576 12.6565Z" fill="#92A8B8"/>
                    </svg>
                    <div class="h4 touragent-info-document-add-title">{{$fields['document_photo']}}</div> 
                </label>              
            </div>
        </div>

        <x-inputs.button type="submit" class="blue-empty fit-content save-touragent">
            {{ $fields['btn']}}
        </x-inputs.button>

        <div class="message main-text color-red error">{{ $fields['error'] }}</div>
        <div class="message main-text color-green success">{{ $fields['success'] }}</div>    
    </form>

    

</div>

@desktopcss
<style>
    input[type="file"] {
        display: none;
    }

    .btn-photo-touragent {
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: .3s;
        border: none;
        padding: 13px 34px;
        text-decoration: none;
        text-align: center;
        color: var(--color-main-white);
        background: var(--color-main-blue);
        position: relative;
    }

    .btn-photo-touragent:hover {
        background: var(--color-hover-blue);
    }

    .touragent-info-inner {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 40px;
        align-items: flex-start;
    }

    .touragent-info-data {
        background: var(--color-main-white);
        border: 1px solid var(--color-main-stroke);
        border-radius: 10px;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        width: 594px;
        margin-bottom: 30px;
    }

    .touragent-info-data-inner {
        width: 200px;
    }

    .touragent-info-data-id {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .touragent-info-data-id-title {
        color: var(--color-main-gray-text);
    }

    .touragent-info-data-id-number {
        color: var(--color-main-blue);
    }

    .btn-save-touragent {
        background: var(--color-main-white);
    }

    .touragent-info-data-photo {
        width: 200px;
        height: 200px;
        background: var(--color-main-back);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        object-fit: cover;
    }

    .touragent-info-data-photo-svg {
        width: 86px;
        height: 86px;
    }

    .inputuser-wrapper-touragent:not(:last-child) {
        margin-bottom: 20px;
    }

    .touragent-info-subscription {
        padding: 28px 55px 30px;
        background: var(--color-main-back);
        border-radius: 10px;
        width: 566px;
    }

    .touragent-info-subscription-title {
        text-align: center;
        margin-bottom: 10px;
    }

    .touragent-info-subscription-subtitle {
        text-align: center;
        margin-bottom: 25px;
    }

    .touragent-info-desc {
        text-align: center;
        margin-bottom: 15px;
        color: var(--color-main-gray-text);
    }

    .touragent-info-document {
        margin-top: 60px;
        margin-bottom: 30px;
    }

    .touragent-info-document-title {
        margin-bottom: 15px;
    }

    .touragent-info-document-text {
        margin-bottom: 35px;
    }

    .touragent-info-document-items {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
    }

    .touragent-info-document-item {
        margin-right: 40px;
        position: relative;
        order: 1;
    }

    .touragent-info-document-item-img {
        width: 150px;
        height: 220px;
        border-radius: 5px;
        object-fit: cover;
        cursor: pointer;
    }

    .touragent-info-document-item-delete {
        position: absolute;
        top: -8px;
        right: -8px;
        width: 20px;
        height: 20px;
        cursor: pointer;
    }

    .touragent-info-document-add {
        width: 150px;
        height: 220px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 1px dashed var(--color-main-gray-text);
        border-radius: 5px;
        cursor: pointer;
        padding: 59px 25px;
        order: 2;
    }

    .touragent-info-document-add-svg {
        width: 30px;
        height: 30px;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .touragent-info-document-add-svg path {
        transition: .3s;
    }

    .touragent-info-document-add:hover .touragent-info-document-add-svg path {
        fill: var(--color-main-blue);
    }

    .touragent-info-document-add-title {
        text-align: center;
        color: var(--color-main-gray-text);
        transition: .3s;
    }

    .touragent-info-document-add:hover .touragent-info-document-add-title {
        color: var(--color-main-blue);
    }

    .message {
        display: none;
        margin-top: 10px;
        text-align: left !important;
    }

    .touragent-info-data-photo.none {
        display: none;
    }

</style>
@mobilecss
@endcss

@startjs
<script>

    let image = document.getElementById("image");
    let file = document.getElementById("file");
    let none_photo = document.getElementById("svg");

    file.addEventListener('change', function(){
        image.src = URL.createObjectURL(file.files[0]);
        image.classList.remove('none');
        if(none_photo !== null){
            none_photo.classList.add('none');
        }
    });

    function check_multidocs(elm) {
        let imagedocument = document.getElementById("image-document");
        let mydocument = document.getElementById("file-document");

        let src = URL.createObjectURL(mydocument.files[0]);
        // imagedocument.classList.remove('none');

        parent = elm.closest('.touragent-info-document-items')

        docs = parent.getElementsByClassName("touragent-info-document-item")
       
        is_add = false
        if (docs[docs.length - 1].value != '') {
            is_add = true
        }

        let multi_doc = document.getElementById("document-none")
        
        if (is_add) {

            let new_multi_doc = multi_doc.cloneNode(true);
            new_multi_doc.classList.remove('none')
            new_multi_doc.querySelector('.touragent-info-document-item-img').setAttribute('src', src)
            new_multi_doc.setAttribute('id', '')

            let multi_file = mydocument.cloneNode(true);
            multi_file.setAttribute('id', '')
            new_multi_doc.appendChild(multi_file)

            parent.appendChild(new_multi_doc)
        }

        multi_doc.classList.add('not-empty')
    }

    function delete_multi_docs(elm) {

        parent = elm.closest('.touragent-info-document-item')
        parent.parentElement.removeChild(parent)
    }

    async function save_changes(e, form, route) {
        
        e.preventDefault()

        let formdata = new FormData(form);

        const response = await post(route, formdata, false, true)

        if (response.success) {
            $(form.querySelector('.message.error')).css('display', 'none')

            $(form.querySelector('.message.success')).css('display', 'block')

        } else {

            $(form.querySelector('.message.success')).css('display', 'none')

            $(form.querySelector('.message.error')).css('display', 'block')
        
            if (response.data.phone) {
                $(form.querySelector('.message.error')).text(response.data.phone[0])
            } else if (response.data.email) {
                $(form.querySelector('.message.error')).text(response.data.email[0])
            }
        }
    }

    async function save_document_changes(e, form, route) {
        
        e.preventDefault()

        let formdata = new FormData();

        items = form.querySelectorAll('.touragent-info-document-item:not(.none):not(.touragent-info-document-item-document)')
        items.forEach((item, index) => {
            formdata.append('documents[]', item.querySelector('input[type="file"]').files[0]);
        })

        items = form.querySelectorAll('.touragent-info-document-item.touragent-info-document-item-document:not(.none)')
        items.forEach((item, index) => {
            formdata.append('photos[]', item.querySelector('.touragent-info-document-item-img').getAttribute('src'));
        })

        const response = await post(route, formdata, false, true)

        if (response.success) {
            $(form.querySelector('.message.error')).css('display', 'none')

            $(form.querySelector('.message.success')).css('display', 'block')

        } else {

            $(form.querySelector('.message.success')).css('display', 'none')

            $(form.querySelector('.message.error')).css('display', 'block')
        
            if (response.data.phone) {
                $(form.querySelector('.message.error')).text(response.data.phone[0])
            } else if (response.data.email) {
                $(form.querySelector('.message.error')).text(response.data.email[0])
            }
        }
    }
                   
</script>
@endjs

