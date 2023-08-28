 
<!DOCTYPE html>
<html>
  <head>
    <title>{{$tour->title}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
        body { 
            font-family: DejaVu Sans, sans-serif; 
        }
        .table {
            text-align: left;
            width: auto;
            background-color: #0274CA;
            border-radius: 10px; 
            padding: 10px;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th {
            text-align: left;
            padding: 5px 10px;
            border: 1px dashed rgba(255, 255, 255, .3);
            border-top: 0px;
            background-color: #0274CA;
            color: #fff;
            font-size: 14px;
        }   
        .table td {
            border: 0px;
            border-left: 1px dashed rgba(255, 255, 255, .3);
            border-right: 1px dashed rgba(255, 255, 255, .3);
            padding: 5px 10px;
            color: #fff;
            font-size: 12px;
        } 
        .table td:first-child, 
        .table th:first-child {
            border-left: 0;
        }
        .table td:last-child, 
        .table th:last-child{
            border-right: 0;
        }

        .table-info {
            text-align: left;
            width: 100%;
            margin-bottom: 15px;
        }
        h2 {
            font-size: 14px;
            color: #274158;
            margin-bottom: 10px;
        }
        .table-touragent-title {
            color:#92A8B8;
            font-size: 10px;
            margin-bottom: 3px;
        }
        .table-touragent-desc {
            color:#274158;
            font-size: 12px;
            margin-bottom: 6px;
        }

        .table-touragent-photo {
            width: 100px;
            height: 100px;
            border-radius: 10px; 
            margin-right: 15px;
        }
        .table-touragent {
            width: 100%;
            border: 1px solid #E9EEF1;
            border-radius: 10px; 
            padding: 10px;
            margin-bottom: 20px;
        }
        .table-touragent-wrapper {
            width: 320px;
            margin-right: 20px;
        }
        .table-touragent-wrapper.first {
            width: 190px;
        }
        .logo {
            display: flex; 
            margin-left: 80%; 
            width: 110px; 
            height: 30px; 
            margin-bottom: 10px;
        }
        .tour-information {
            color:#274158;
            font-size: 12px;
        }

        .table-arival {
            text-align: left !important ;
            width: 100%;
            background-color: #E5EFFF;
            border-radius: 10px; 
            padding: 10px;
            margin-bottom: 20px;
        }
        .table-arival td {
            color:#274158;
            font-size: 12px;
        }
        .table-arival-title {
            color:#274158;
            text-align: left !important;
            font-size: 12px;
        }
        .table-arival-text {
            color:#92A8B8 !important;
            font-size: 10px !important;
            width: 100px !important;
        }
        .table-characteristic {
            text-align: left !important ;
            width: auto;
            color:#274158;
            font-size: 10px;
            border-collapse: collapse;
            margin-bottom: 10px;
            background-color: #E5EFFF;
            padding: 10px;
            border-radius: 10px; 
        }
        .table-characteristic td {
            padding: 0 10px;
            border-right: 1px dashed #fff;
        }
        .table-characteristic td:last-child{
            border-right: 0 !important;
        }
        .advantage-title {
            font-size: 10px;
            margin-bottom: 10px;
            color:#92A8B8;
        }
        .advantage-desc {
            font-size: 12px;
            margin-bottom: 3px;
            color:#274158;
        }
        .advantages {
            margin: 0;
        }

    </style>
  </head>
  <body>
    <?php
        $s = new Single('Страница тура', 10, 1);
    ?>

    <img src="{{ public_path('/photos/1/logo.jpg') }}" class="logo">

    <table class="table-info">
        <th>
            <td><img src="{{ public_path($tour->photo) }}" style=" width: 250px; height: 250px; margin-right: 30px;"></td>
        </th>
        <th>    
            <td style="width: 450px;">
                <div style="color:#274158; font-size: 10px; margin-bottom: 8px;">
                    <b style="color:#92A8B8;">{{$s->field('Общая информация', 'ID тура:', 'text', true, 'ID тура:')}}</b> {{$tour->number}}
                </div>
                <div style="color:#274158; font-size: 20px; margin-bottom: 5px;">
                    <b>{{$tour->title_hotel}}</b>
                </div>
                <div style="color:#274158; font-size: 12px; margin-bottom: 5px;">
                    <b style="color:#92A8B8;">{{$s->field('Общая информация', 'Колличество звезд:', 'text', true, 'Колличество звезд:')}}</b> {{$tour->stars->number}}*, 
                    <b style="color:#92A8B8;">{{$s->field('Общие данные', 'Рейтинг:', 'text', true, 'Рейтинг:')}}</b> {{$tour->rating}}
                </div>
                <div style="color:#274158; font-size: 12px; margin-bottom: 40px;">
                    <b style="color:#92A8B8;">{{$s->field('Общая информация', 'Страна, город:', 'text', true, 'Страна, город:')}}</b> {{$tour->cityto->country->title}}, {{$tour->cityto->title}}
                </div>
                <div style="color: #025A9C; ont-size: 16px;">
                    <b>{{$s->field('Общая информация', 'Цена:', 'text', true, 'Цена:')}}{{round($tour->price)}} {{Region::getCurrency()}}</b>
                </div>
            </td>
        </th>
    </table>
    

    <table class="table">

        <tr>
            <th><b>{{$s->field('Общая информация', 'Маршрут', 'text', true, 'Маршрут')}}</b></th>
            <th><b>{{$s->field('Общая информация', 'Даты', 'text', true, 'Даты')}}</b></th>
            <th><b>{{$s->field('Общая информация', 'Туристы', 'text', true, 'Туристы')}}</b></th>     
            <th><b>{{$s->field('Общая информация', 'Номер', 'text', true, 'Номер')}}</b></th>     
            <th><b>{{$s->field('Общая информация', 'Питание', 'text', true, 'Питание')}}</b></th>     
            <th><b>{{$s->field('Общая информация', 'Виза', 'text', true, 'Виза')}}</b></th>     
        </tr>
      
        <tr>
            <td>
                {{$tour->cityfrom->title}}<br>
                {{$tour->cityto->country->title}}
            </td>
            <td>
                {{date("d.m.Y", strtotime($tour->data_departure))}}<br>
                {{date("d.m.Y", strtotime($tour->data_arrival))}}<br>
                {{$tour->night->title}}
            </td>
            <td>
                {{$tour->people->title}} {{$s->field('Общая информация', 'Взрослые', 'text', true, 'взр.')}}.<br>
                {{$tour->child->title}} {{$s->field('Общая информация', 'Дети', 'text', true, 'реб.')}}.
            </td>
            <td>
                {{$tour->accommodation->title}} 
            </td>
            <td>
                {{$tour->food->title}} 
            </td>
            <td>
                {{$tour->visa->title}},<br>{{$tour->visa->desc}}
            </td>
        </tr>
       
    </table>

    <h2>{{$s->field('Общая информация', 'Информация по вылету и прилету:', 'text', true, 'Информация по вылету и прилету:')}}</h2>
    <table class="table-arival">

        <tr>
            <th><b></b></th>
            <th class="table-arival-title"><b>{{$s->field('Общая информация', 'Вылет', 'text', true, 'Вылет')}}</b></th>
            <th class="table-arival-title"><b>{{$s->field('Общая информация', 'Прилет', 'text', true, 'Прилет')}}</b></th>     
        </tr>
      
        <tr>
            <td class="table-arival-text">
                <b>{{$s->field('Общая информация', 'Туда', 'text', true, 'Туда')}}</b>
            </td>
            <td>
                {{date("H:i:s d.m.Y", strtotime($tour->data_departure))}} - {{$tour->cityfrom->title}}
            </td>
            <td>
                {{date("H:i:s d.m.Y", strtotime($tour->data_departure_to))}} - {{$tour->cityto->title}}
            </td>
        </tr>
        <tr>
            <td class="table-arival-text">
                <b>{{$s->field('Общая информация', 'Назад', 'text', true, 'Назад')}}</b>
            </td>
            <td>
                {{date("H:i:s d.m.Y", strtotime($tour->data_arrival_from))}} - {{$tour->cityto->title}}
            </td>
            <td>
                {{date("H:i:s d.m.Y", strtotime($tour->data_arrival))}} - {{$tour->cityfrom->title}}
            </td>
        </tr>
       
    </table>

    <h2>{{$s->field('Информация о турагенте', 'Заголовок', 'text', true, 'Информация о турагенте')}}</h2>
    <table class="table-touragent">
        <th>
            <td><img class="table-touragent-photo" src="@if($tour->touragent->photo){{ public_path($tour->touragent->photo) }}@else{{ public_path('/photos/1/touragent.jpg') }}@endif"></td>
        </th>
        <th>    
            <td class="table-touragent-wrapper first">
                <div class="table-touragent-title">{{$s->field('Информация о турагенте', 'Имя:', 'text', true, 'Имя:')}}</div>
                <div class="table-touragent-desc">{{$tour->touragent->name}}</div>
                
                <div class="table-touragent-title">{{$s->field('Информация о турагенте', 'Название турагенства:', 'text', true, 'Название турагенства:')}}</div> 
                <div class="table-touragent-desc">{{$tour->touragent->company}}</div>
                
                <div class="table-touragent-title">{{$s->field('Информация о турагенте', 'Рейтинг:', 'text', true, 'Рейтинг:')}}</div> 
                <div class="table-touragent-desc">{{$tour->touragent->mark}}/10</div>

                <div class="table-touragent-title">{{$s->field('Информация о турагенте', 'Номер лицензии:', 'text', true, 'Номер лицензии:')}}</div> 
                <div class="table-touragent-desc">{{$tour->touragent->license}}</div>
            </td>

            <td class="table-touragent-wrapper">
                <div class="table-touragent-title">{{$s->field('Информация о турагенте', 'Номер телефона:', 'text', true, 'Номер телефона:')}}</div> 
                <div class="table-touragent-desc">{{$tour->touragent->phone}}</div>

                <div class="table-touragent-title">{{$s->field('Информация о турагенте', 'Адрес офиса:', 'text', true, 'Адрес офиса:')}}</div> 
                <div class="table-touragent-desc">{{$tour->touragent->address}}</div>

                <div class="table-touragent-title">{{$s->field('Информация о турагенте', 'Часы работы:', 'text', true, 'Часы работы:')}}</div> 
                <div class="table-touragent-desc">{!! Field::enter_to_br($tour->touragent->work)!!}</div>
            </td>
        </th>
    </table>


    <h2>{{$s->field('Общая информация', 'Информация об отеле', 'text', true, 'Информация об отеле')}}</h2>
    <table class="table-characteristic">
        @foreach ($tour->characteristics as $characteristic)
            <th><td><b>{{$characteristic->title}}</b></td><th>
        @endforeach
    </table>

    <div class="tour-information"> {!!$tour->information!!}</div>

    <ul class="advantages">
        @foreach ($tour->advantages as $advantage)
            <li class="advantage-title"><b>{{$advantage->title}}</b>
                <div class="advantage-desc">{!!Field::enter_to_br($advantage->description)!!}</div>
            </li>
        @endforeach
    </ul>
    
  </body>
</html>

@desktopcss
@mobilecss
<style>

</style>
@endcss