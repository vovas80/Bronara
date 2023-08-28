<div class="basicinfo">
    
    @if(!$isModalBookTour)
    <div class="basicinfo-first">

        <div class="h3 basicinfo-first-price">{{round($tour->price)}} {{Region::getCurrency()}}</div>
        <div class="basicinfo-first-visa">
            <div class="text-main-regular basicinfo-first-visa-title">{{$fields['visa']}}:</div>
            <div class="text-additional-semibold basicinfo-first-visa-text">{{$tour->visa->title}}</div>
            <x-inputs.button tooltip="{{$tour->visa->desc}}" class="info tooltip">
                <svg class="basicinfo-first-visa-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="16" height="16" rx="8" fill="white"/>
                    <path d="M7.99723 5.28C8.50123 5.28 8.90923 4.872 8.90923 4.38C8.90923 3.9 8.50123 3.492 7.99723 3.492C7.49323 3.492 7.09723 3.9 7.09723 4.38C7.09723 4.872 7.49323 5.28 7.99723 5.28ZM7.32523 12H8.66923V6.144H7.32523V12Z" fill="#0274CA"/>
                </svg>    
            </x-inputs.button>                
        </div>

    </div>
    @endif

    <div class="basicinfo-second">

        <div class="basicinfo-second-items">
            <div class="basicinfo-second-item">
                <div class="text-main-regular basicinfo-second-item-title">
                    <svg class="basicinfo-second-item-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6225 5.92689L15.38 3.36904C15.7667 3.01249 15.9884 2.51654 15.9993 1.99081C16.0094 1.46544 15.8024 0.961086 15.4308 0.589123L15.4105 0.568459C15.0385 0.196846 14.5342 -0.00979961 14.0088 0.000357565C13.4827 0.010865 12.9857 0.233973 12.6295 0.620295L10.072 3.37779L1.60094 0.462684C1.08993 0.286159 0.587676 0.419954 0.429014 0.773354L0.050046 1.622C-0.108266 1.9761 0.127451 2.44018 0.599234 2.70357L7.25078 6.42039L4.25722 9.64827L2.56132 9.28191C2.37674 9.24199 2.19041 9.34111 2.12036 9.51693L1.86643 10.1565C1.79638 10.332 1.86818 10.5284 2.02999 10.6258L3.86494 11.7277L4.28103 12.1438L5.38291 13.9791C5.48028 14.1405 5.67852 14.2099 5.85435 14.1405L6.49215 13.8873C6.66832 13.8176 6.76709 13.632 6.72751 13.4478L6.3573 11.7375L9.57888 8.74954L13.2957 15.4011C13.5594 15.8732 14.0232 16.1089 14.3776 15.9503L15.2256 15.5713C15.5797 15.413 15.7142 14.91 15.5376 14.399L12.6225 5.92689Z" fill="#E9EEF1"/>
                    </svg>
                    {{$fields['route']}}:
                </div>
                <div class="basicinfo-second-item-inner">
                    <svg class="basicinfo-second-item-inner-svg" width="13" height="39" viewBox="0 0 13 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.5" y1="12.5" x2="6.5" y2="22.5" stroke="white" stroke-linecap="round" stroke-dasharray="2 2"/>
                        <circle cx="6.5" cy="4.5" r="3.5" stroke="white" stroke-width="2"/>
                        <path d="M6.66355 26.0027C4.02352 25.9137 1.85547 28.0273 1.85547 30.6473C1.85547 33.6206 4.70885 35.7785 6.30817 38.8817C6.38937 39.0393 6.61619 39.0395 6.69767 38.8819C8.14448 36.0896 10.6173 34.2172 11.0756 31.5272C11.55 28.7435 9.48575 26.0979 6.66355 26.0027ZM6.50269 33.0815C5.15831 33.0815 4.06844 31.9916 4.06844 30.6473C4.06844 29.3029 5.15834 28.213 6.50269 28.213C7.84707 28.213 8.93697 29.3029 8.93697 30.6473C8.93697 31.9916 7.84707 33.0815 6.50269 33.0815Z" fill="white"/>
                    </svg>     
                    <div class="basicinfo-second-item-inner-cities">
                        <div class="text-additional-semibold basicinfo-second-item-inner-city">{{$tour->cityfrom->title}}</div>
                        <div class="text-additional-semibold basicinfo-second-item-inner-city">{{$tour->cityto->country->title}}</div>
                    </div>                  
                </div>
            </div>

            <div class="basicinfo-second-item">
                <div class="text-main-regular basicinfo-second-item-title">
                    <svg class="basicinfo-second-item-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7802 2.5078H14.2742V1.35679C14.2742 0.728536 13.7631 0.217407 13.1349 0.217407C12.5066 0.217407 11.9955 0.728536 11.9955 1.35679V2.50785H4.00453V1.35679C4.00453 0.728536 3.49341 0.217407 2.86515 0.217407C2.23689 0.217407 1.72576 0.728536 1.72576 1.35679V2.50785H0.219765C0.0985797 2.5078 0 2.60638 0 2.72761V15.5628C0 15.6839 0.0986253 15.7826 0.219765 15.7826H15.7802C15.9014 15.7826 16 15.6839 16 15.5628V2.72761C16 2.60638 15.9014 2.5078 15.7802 2.5078ZM12.6791 1.49352C12.6791 1.24181 12.8831 1.03777 13.1349 1.03777C13.3865 1.03777 13.5906 1.24181 13.5906 1.49352V2.64458C13.5906 2.89629 13.3865 3.10033 13.1349 3.10033C12.8831 3.10033 12.6791 2.89629 12.6791 2.64458V1.49352ZM2.40939 1.49352C2.40939 1.24181 2.61343 1.03777 2.86515 1.03777C3.11686 1.03777 3.3209 1.24181 3.3209 1.49352V2.64458C3.3209 2.89629 3.11686 3.10033 2.86515 3.10033C2.61343 3.10033 2.40939 2.89629 2.40939 2.64458V1.49352ZM4.83738 12.3098C4.83738 12.6113 4.59301 12.8557 4.29152 12.8557H2.59338C2.2919 12.8557 2.04752 12.6114 2.04752 12.3098V10.6116C2.04752 10.3101 2.2919 10.0657 2.59338 10.0657H4.29157C4.59301 10.0657 4.83743 10.3101 4.83743 10.6116L4.83738 12.3098ZM4.83738 7.75227C4.83738 8.0537 4.59301 8.29817 4.29152 8.29817H2.59338C2.2919 8.29817 2.04752 8.05388 2.04752 7.75227V6.05408C2.04752 5.7526 2.2919 5.50817 2.59338 5.50817H4.29157C4.59301 5.50817 4.83743 5.75255 4.83743 6.05408L4.83738 7.75227ZM9.39497 12.3098C9.39497 12.6113 9.15064 12.8557 8.84907 12.8557H7.15093C6.84945 12.8557 6.60507 12.6114 6.60507 12.3098V10.6116C6.60507 10.3101 6.84945 10.0657 7.15093 10.0657H8.84912C9.15055 10.0657 9.39497 10.3101 9.39497 10.6116V12.3098ZM9.39497 7.75227C9.39497 8.0537 9.15064 8.29817 8.84907 8.29817H7.15093C6.84945 8.29817 6.60507 8.05388 6.60507 7.75227V6.05408C6.60507 5.7526 6.84945 5.50817 7.15093 5.50817H8.84912C9.15055 5.50817 9.39497 5.75255 9.39497 6.05408V7.75227ZM13.9525 12.3098C13.9525 12.6113 13.7082 12.8557 13.4066 12.8557H11.7085C11.407 12.8557 11.1625 12.6114 11.1625 12.3098V10.6116C11.1625 10.3101 11.4069 10.0657 11.7085 10.0657H13.4067C13.7081 10.0657 13.9526 10.3101 13.9526 10.6116L13.9525 12.3098ZM13.9525 7.75227C13.9525 8.0537 13.7082 8.29817 13.4066 8.29817H11.7085C11.407 8.29817 11.1625 8.05388 11.1625 7.75227V6.05408C11.1625 5.7526 11.4069 5.50817 11.7085 5.50817H13.4067C13.7081 5.50817 13.9526 5.75255 13.9526 6.05408L13.9525 7.75227Z" fill="#E9EEF1"/>
                    </svg>                        
                    {{$fields['dates']}}:
                </div>
                <div class="basicinfo-second-item-inner">
                    <svg class="basicinfo-second-item-inner-svg" width="13" height="39" viewBox="0 0 13 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.5" y1="12.5" x2="6.5" y2="22.5" stroke="white" stroke-linecap="round" stroke-dasharray="2 2"/>
                        <circle cx="6.5" cy="4.5" r="3.5" stroke="white" stroke-width="2"/>
                        <path d="M6.66355 26.0027C4.02352 25.9137 1.85547 28.0273 1.85547 30.6473C1.85547 33.6206 4.70885 35.7785 6.30817 38.8817C6.38937 39.0393 6.61619 39.0395 6.69767 38.8819C8.14448 36.0896 10.6173 34.2172 11.0756 31.5272C11.55 28.7435 9.48575 26.0979 6.66355 26.0027ZM6.50269 33.0815C5.15831 33.0815 4.06844 31.9916 4.06844 30.6473C4.06844 29.3029 5.15834 28.213 6.50269 28.213C7.84707 28.213 8.93697 29.3029 8.93697 30.6473C8.93697 31.9916 7.84707 33.0815 6.50269 33.0815Z" fill="white"/>
                    </svg>     
                    <div class="basicinfo-second-item-inner-cities">
                        <div class="text-additional-semibold basicinfo-second-item-inner-city">{{date("d.m.Y", strtotime($tour->data_departure))}}</div>
                        <div class="text-additional-semibold basicinfo-second-item-inner-city">{{date("d.m.Y", strtotime($tour->data_arrival))}}</div>
                    </div>            
                </div>
                <div class="text-additional-semibold basicinfo-second-item-data">{{$tour->night->title}}</div>
            </div>

            <div class="basicinfo-second-item">
                <div class="text-main-regular basicinfo-second-item-title">
                    <svg class="basicinfo-second-item-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 4.54608V14.7718C0 15.2658 0.400492 15.6663 0.894526 15.6663H2.1843V3.65161H0.894526C0.400492 3.65161 0 4.05205 0 4.54608Z" fill="#E9EEF1"/>
                        <path d="M15.1052 3.65161H13.8154V15.6663H15.1052C15.5992 15.6663 15.9997 15.2658 15.9997 14.7718V4.54608C15.9997 4.05205 15.5992 3.65161 15.1052 3.65161Z" fill="#E9EEF1"/>
                        <path d="M11.1492 0.743052C11.1492 0.516868 10.9659 0.333496 10.7396 0.333496H5.25963C5.0334 0.333496 4.85008 0.516868 4.85008 0.743052V3.65167H3.85742V15.6664H12.1418V3.65172H11.1492V0.743052ZM5.66919 1.15261H10.3301V3.24211H5.66919V1.15261ZM10.3387 12.8317L8.46532 14.5326C8.38974 14.6012 8.29155 14.6389 8.18998 14.6389C8.18343 14.6389 8.17688 14.6387 8.17027 14.6384C8.06177 14.6332 7.95976 14.5851 7.8868 14.5046L7.00582 13.5343C6.85379 13.3669 6.86624 13.1078 7.03372 12.9558L8.90704 11.2548C9.07446 11.1028 9.33352 11.1153 9.4856 11.2827L10.3666 12.253C10.4397 12.3334 10.4777 12.4395 10.4725 12.548C10.4672 12.6567 10.4191 12.7587 10.3387 12.8317Z" fill="#E9EEF1"/>
                        <path d="M7.88839 13.2865L8.21875 13.6504L9.48579 12.5001L9.15542 12.1362L7.88839 13.2865Z" fill="#E9EEF1"/>
                    </svg>                        
                    {{$fields['tourists']}}:
                </div>  
                <div class="text-additional-semibold basicinfo-second-item-text">{{$tour->people->title}} {{$fields['people']}}<p> @if(!empty($tour->child->title)){{$tour->child->title}} {{$fields['child']}}@endif</div>                 
               
            </div>

            <div class="basicinfo-second-item">
                <div class="text-main-regular basicinfo-second-item-title">
                    <svg class="basicinfo-second-item-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 4.54608V14.7718C0 15.2658 0.400492 15.6663 0.894526 15.6663H2.1843V3.65161H0.894526C0.400492 3.65161 0 4.05205 0 4.54608Z" fill="#E9EEF1"/>
                        <path d="M15.1052 3.65161H13.8154V15.6663H15.1052C15.5992 15.6663 15.9997 15.2658 15.9997 14.7718V4.54608C15.9997 4.05205 15.5992 3.65161 15.1052 3.65161Z" fill="#E9EEF1"/>
                        <path d="M11.1492 0.743052C11.1492 0.516868 10.9659 0.333496 10.7396 0.333496H5.25963C5.0334 0.333496 4.85008 0.516868 4.85008 0.743052V3.65167H3.85742V15.6664H12.1418V3.65172H11.1492V0.743052ZM5.66919 1.15261H10.3301V3.24211H5.66919V1.15261ZM10.3387 12.8317L8.46532 14.5326C8.38974 14.6012 8.29155 14.6389 8.18998 14.6389C8.18343 14.6389 8.17688 14.6387 8.17027 14.6384C8.06177 14.6332 7.95976 14.5851 7.8868 14.5046L7.00582 13.5343C6.85379 13.3669 6.86624 13.1078 7.03372 12.9558L8.90704 11.2548C9.07446 11.1028 9.33352 11.1153 9.4856 11.2827L10.3666 12.253C10.4397 12.3334 10.4777 12.4395 10.4725 12.548C10.4672 12.6567 10.4191 12.7587 10.3387 12.8317Z" fill="#E9EEF1"/>
                        <path d="M7.88839 13.2865L8.21875 13.6504L9.48579 12.5001L9.15542 12.1362L7.88839 13.2865Z" fill="#E9EEF1"/>
                    </svg> 
                    {{$fields['room']}}:
                </div>
                <div class="text-additional-semibold basicinfo-second-item-text">{{$tour->food->title}} <p>{{$tour->accommodation->title}}</div>     
            </div>

        </div>

    </div>

</div>


@desktopcss
<style>


</style>

@mobilecss
@endcss