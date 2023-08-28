
<div class="download-file">
    @if($isSold)

        <div class="download-file-file active download-file-sold">

            @if(!empty($name_document))
                <svg class="download-file-file-svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.4676 0.874178C9.30208 -0.291393 7.40575 -0.291393 6.24018 0.874178L1.78914 5.32519C1.65177 5.46256 1.65177 5.6851 1.78914 5.82247C1.9265 5.95983 2.14904 5.95983 2.28641 5.82247L6.73743 1.37145C7.60145 0.508107 9.10633 0.508107 9.97035 1.37145C10.8615 2.26261 10.8615 3.71288 9.97035 4.60404L3.7551 10.8893C3.22349 11.4209 2.29729 11.4209 1.7657 10.8893C1.21726 10.3408 1.21726 9.44864 1.7657 8.90021L7.73233 2.86325C7.9315 2.66408 8.27903 2.66408 8.47822 2.86325C8.68391 3.06894 8.68391 3.40379 8.47822 3.6095L2.76057 9.39746C2.64198 9.51605 2.64198 9.77611 2.76057 9.89473C2.89794 10.0321 3.12048 10.0321 3.25785 9.89473L8.97547 4.10675C9.45559 3.62663 9.45559 2.84607 8.97547 2.36597C8.5105 1.901 7.69933 1.90168 7.23505 2.36597L1.26843 8.40291C0.452191 9.21914 0.452191 10.5703 1.26843 11.3865C1.66714 11.7852 2.19702 12 2.76055 12C3.32408 12 3.854 11.7852 4.25237 11.3866L10.4676 5.10129C11.6332 3.93572 11.6332 2.03972 10.4676 0.874178Z" fill="#274158"/>
                    <clipPath id="clip0_1368_17639">
                    <rect width="12" height="12" fill="white"/>
                    </clipPath>
                </svg>

                <a href="{{$document}}" class="text-extra-regular download-file-file-title" download>{{$name_document}}</a> 
            @endif
        </div>  

    @else 
        <div class="text-extra-semibold download-file-title">{{ $slot }}</div>

        <input class="@if($active) none @endif" name="{{$name}}" data-field="{{$name}}" type="file" id="document-{{$name}}-{{$idbooking}}" data-booking={{$idbooking}} accept=".jpg, .jpeg, .png, .pdf, .doc, .docx, .xls, .xlsx, .zip" onchange="save_document(event, this, '{{ route('save-document', [], false) }}'); return false;" />

        <label for="document-{{$name}}-{{$idbooking}}" class="download-file-btn @if($active) none @endif">
            <svg class="download-file-btn-svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.0009 4.38459H12.9624C13.0743 4.38359 13.1814 4.33869 13.2605 4.25957C13.3396 4.18044 13.3845 4.07341 13.3855 3.96152C13.3822 3.849 13.3416 3.74076 13.2701 3.65383L10.5009 0.923056C10.4674 0.885102 10.4258 0.855065 10.3793 0.835111C10.3327 0.815158 10.2823 0.805786 10.2317 0.807671C10.1198 0.808675 10.0127 0.853571 9.93362 0.932697C9.85449 1.01182 9.8096 1.11885 9.80859 1.23075V3.19229C9.81061 3.50788 9.93688 3.80998 10.16 4.03315C10.3832 4.25631 10.6853 4.38258 11.0009 4.38459Z" fill="#0274CA"/>
                <path d="M19.1657 12.4807C19.1677 12.3362 19.1128 12.1966 19.0128 12.0922C18.9127 11.9879 18.7756 11.9271 18.6311 11.923H14.0157C13.9428 11.9225 13.8705 11.9365 13.8031 11.9642C13.7357 11.9918 13.6744 12.0326 13.6229 12.0841C13.5714 12.1357 13.5306 12.1969 13.5029 12.2643C13.4753 12.3318 13.4613 12.404 13.4618 12.4769V13.0307C13.4608 13.1753 13.5167 13.3145 13.6175 13.4181C13.7182 13.5217 13.8558 13.5816 14.0003 13.5846H16.3618L12.1311 17.8154C12.0296 17.9176 11.9727 18.0559 11.9727 18.2C11.9727 18.3441 12.0296 18.4823 12.1311 18.5846L12.5157 18.9692C12.5708 19.0242 12.6361 19.0678 12.7081 19.0975C12.78 19.1272 12.8571 19.1424 12.9349 19.1423C13.0018 19.1429 13.0682 19.1304 13.1303 19.1053C13.1923 19.0802 13.2488 19.0431 13.2964 18.9961L17.5272 14.7654V17.073C17.5267 17.1456 17.5406 17.2175 17.568 17.2847C17.5954 17.3519 17.6358 17.413 17.6869 17.4644C17.7381 17.5159 17.7989 17.5568 17.8658 17.5847C17.9328 17.6125 18.0047 17.6269 18.0772 17.6269H18.6657C18.7382 17.6289 18.8105 17.6166 18.8782 17.5906C18.946 17.5646 19.0079 17.5254 19.0605 17.4754C19.113 17.4253 19.1552 17.3654 19.1844 17.299C19.2137 17.2325 19.2296 17.161 19.2311 17.0884L19.1657 12.4807Z" fill="#0274CA"/>
                <path d="M7.06154 7.9538H6.5V9.84995H7.06154C7.19428 9.85582 7.32521 9.81746 7.4338 9.74089C7.54239 9.66433 7.62249 9.55388 7.66154 9.42688C7.72663 9.24965 7.75794 9.06179 7.75385 8.87303C7.76612 8.63804 7.71848 8.40379 7.61538 8.19226C7.55316 8.10625 7.46883 8.03868 7.37133 7.9967C7.27382 7.95472 7.16678 7.9399 7.06154 7.9538Z" fill="#0274CA"/>
                <path d="M4.34171 8.04994C4.24884 7.98057 4.13432 7.94649 4.01863 7.95379H3.46094V8.81148H4.02248C4.14006 8.81888 4.25592 8.78026 4.34555 8.70379C4.3875 8.66024 4.41953 8.60813 4.43945 8.55104C4.45937 8.49394 4.4667 8.43321 4.46094 8.37302C4.46659 8.31299 4.45804 8.25247 4.436 8.19635C4.41395 8.14023 4.37901 8.09008 4.33401 8.04994H4.34171Z" fill="#0274CA"/>
                <path d="M12.7855 6.15411H9.77013C9.2964 6.15721 8.84062 5.97302 8.50205 5.64165C8.16348 5.31029 7.96953 4.85858 7.96244 4.38488V1.38488C7.9666 1.31314 7.95655 1.24127 7.93288 1.17342C7.90921 1.10556 7.87238 1.04304 7.8245 0.989443C7.77662 0.935847 7.71863 0.892227 7.65386 0.861085C7.58909 0.829942 7.51882 0.811889 7.44705 0.807961H2.61629C2.14255 0.804864 1.68677 0.989053 1.3482 1.32042C1.00963 1.65179 0.815685 2.1035 0.808594 2.57719V13.8849C0.808592 14.1179 0.854608 14.3486 0.944001 14.5637C1.03339 14.7789 1.1644 14.9743 1.32951 15.1386C1.49461 15.303 1.69056 15.4332 1.9061 15.5217C2.12164 15.6101 2.35253 15.6551 2.58552 15.6541H9.46244V15.6157C9.45909 14.3755 9.83237 13.1636 10.5329 12.1403C11.2334 11.1169 12.2282 10.3305 13.3855 9.88488V6.7695C13.3865 6.68969 13.3718 6.61047 13.3422 6.53635C13.3126 6.46223 13.2687 6.39467 13.213 6.33753C13.1573 6.28038 13.0908 6.23477 13.0175 6.2033C12.9441 6.17183 12.8653 6.15512 12.7855 6.15411ZM4.80475 9.09642C4.59459 9.25002 4.33774 9.32612 4.07782 9.31181H3.46244V10.3541H2.88167V7.45027H4.12782C4.37547 7.44577 4.61621 7.53195 4.80475 7.69258C4.89437 7.78292 4.96344 7.89154 5.00724 8.01102C5.05105 8.1305 5.06857 8.25802 5.05859 8.38488C5.07012 8.51478 5.05339 8.64563 5.00958 8.76845C4.96576 8.89127 4.89588 9.00315 4.80475 9.09642ZM8.13552 9.82719C8.04263 10.0026 7.90191 10.1481 7.72968 10.2468C7.55745 10.3456 7.36077 10.3934 7.16244 10.3849H5.90859V7.45027H7.16244C7.31491 7.44877 7.4667 7.47082 7.61244 7.51565C7.81215 7.58021 7.98512 7.70859 8.10475 7.88104C8.20402 8.02235 8.27459 8.18177 8.31244 8.35027C8.34955 8.51301 8.36762 8.67951 8.36629 8.84642C8.37789 9.18805 8.29824 9.52659 8.13552 9.82719ZM11.1817 7.96565H9.71629V8.63488H11.0009V9.13873H9.71629V10.3541H9.11244V7.45411H11.1817V7.96565Z" fill="#0274CA"/>
            </svg>
        </label>  

        <div class="download-file-file @if($active) active @endif">

            <svg class="download-file-file-svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.4676 0.874178C9.30208 -0.291393 7.40575 -0.291393 6.24018 0.874178L1.78914 5.32519C1.65177 5.46256 1.65177 5.6851 1.78914 5.82247C1.9265 5.95983 2.14904 5.95983 2.28641 5.82247L6.73743 1.37145C7.60145 0.508107 9.10633 0.508107 9.97035 1.37145C10.8615 2.26261 10.8615 3.71288 9.97035 4.60404L3.7551 10.8893C3.22349 11.4209 2.29729 11.4209 1.7657 10.8893C1.21726 10.3408 1.21726 9.44864 1.7657 8.90021L7.73233 2.86325C7.9315 2.66408 8.27903 2.66408 8.47822 2.86325C8.68391 3.06894 8.68391 3.40379 8.47822 3.6095L2.76057 9.39746C2.64198 9.51605 2.64198 9.77611 2.76057 9.89473C2.89794 10.0321 3.12048 10.0321 3.25785 9.89473L8.97547 4.10675C9.45559 3.62663 9.45559 2.84607 8.97547 2.36597C8.5105 1.901 7.69933 1.90168 7.23505 2.36597L1.26843 8.40291C0.452191 9.21914 0.452191 10.5703 1.26843 11.3865C1.66714 11.7852 2.19702 12 2.76055 12C3.32408 12 3.854 11.7852 4.25237 11.3866L10.4676 5.10129C11.6332 3.93572 11.6332 2.03972 10.4676 0.874178Z" fill="#274158"/>
                <clipPath id="clip0_1368_17639">
                <rect width="12" height="12" fill="white"/>
                </clipPath>
            </svg>

            <a href="{{$document}}" class="text-extra-regular download-file-file-title" download>{{$name_document}}</a>  
            
            <div class="download-file-file-close" data-field="{{$name}}" data-booking={{$idbooking}} onclick="delete_document(this, '{{ route('delete-document', [], false) }}'); return false;">
                <svg class="download-file-file-close-svg" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.44196 4.00075L7.90847 0.534221C8.03052 0.412174 8.03052 0.214299 7.90847 0.0922675C7.78643 -0.0297637 7.58855 -0.0297793 7.46652 0.0922675L4 3.5588L0.533487 0.0922675C0.411441 -0.0297793 0.213566 -0.0297793 0.091535 0.0922675C-0.030496 0.214314 -0.0305117 0.412189 0.091535 0.534221L3.55804 4.00073L0.091535 7.46726C-0.0305117 7.58931 -0.0305117 7.78719 0.091535 7.90922C0.152551 7.97023 0.232535 8.00073 0.312519 8.00073C0.392503 8.00073 0.472472 7.97023 0.533503 7.90922L4 4.4427L7.46651 7.90922C7.52752 7.97023 7.60751 8.00073 7.68749 8.00073C7.76747 8.00073 7.84744 7.97023 7.90847 7.90922C8.03052 7.78717 8.03052 7.5893 7.90847 7.46726L4.44196 4.00075Z" fill="#274158"/>
                    <clipPath id="clip0_1143_7239">
                    <rect width="8" height="8" fill="white"/>
                    </clipPath>
                </svg>                    
            </div>

        </div> 

    @endif

</div>

@desktopcss

<style>
    .download-file {
        width: 85px;
        margin-right: 27px;
    }

    .download-file-title {
        text-align: center;
        margin-bottom: 6px;
        color: var(--color-main-blue);
    }

    .download-file-btn {
        background:var(--color-main-back);
        border: 1px dashed var(--color-main-blue);
        border-radius: 5px;
        padding: 10px 30px;
        margin-bottom: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: .3s;
        cursor: pointer;
    }

    .download-file-btn.none,
    input[type="file"].none {
        display: none;
    }

    .download-file-file-svg {
        width: 20px;
        height: 20px;
    }

    .download-file-btn-svg path {
        transition: .3s;
        fill: var(--color-main-blue);
    }

    .download-file-btn:hover {
        border: 1px dashed var(--color-hover-blue);
    }

    .download-file-btn:hover .download-file-btn-svg path {
        fill: var(--color-hover-blue);
    }

    .download-file-file {
        display: none;
    }

    .download-file-file.active {
        display: flex;
        align-items: center;
        margin-top: 20px;
    }

    .download-file-file-svg {
        width: 12px;
        height: 12px;
        margin-right: 2px;
        flex: 1;
    }

    .download-file-file-title {
        margin-right: 7px;
        white-space: pre;
        max-width: 55px;
        overflow: hidden;
        text-decoration: none;
    }

    .download-file-file-close {
        cursor: pointer;
        width: 8px;
        height: 8px;
    }

    .download-file-file-close-svg {
        width: 8px;
        height: 8px;
    }

    .download-file-sold {
        margin-top: 40px;
    }
</style>
@mobilecss
@endcss

@startjs
<script>

    async function save_document(e, input, route) {
        
        e.preventDefault()

        let formdata = new FormData();
        let document = input.files[0];      
        let name = input.getAttribute('data-field');   
        let id_booking = input.getAttribute('data-booking'); 
        
        formdata.append("document", document);
        formdata.append("name", name); 
        formdata.append("id_booking", id_booking); 

        const response = await post(route, formdata, false, true)

        if (response.success) {

            $(input.closest('.download-file').querySelector('.download-file-file')).addClass('active')
            $(input.closest('.download-file').querySelector('.download-file-btn')).addClass('none')
            $(input.closest('.download-file').querySelector('.download-file-file-title')).text(response.data.file_name)
            input.closest('.download-file').querySelector('.download-file-file-title').setAttribute('href', response.data.document)

        } else {

        }
    }

    async function delete_document(btn, route) {
        

        let name = btn.getAttribute('data-field');
        let id_booking = btn.getAttribute('data-booking');     

        const response = await post(route, {
            name,
            id_booking,
        }, true, true)

        if (response.success) {

            $(btn.closest('.download-file').querySelector('.download-file-file')).removeClass('active')
            $(btn.closest('.download-file').querySelector('.download-file-btn')).removeClass('none')


        } else {

        }
    }

</script>
@endjs