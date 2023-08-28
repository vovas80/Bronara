<div class="user-application-form">
    <div class="h2 user-application-form-title">{{$fields['title']}}</div>

    <div class="user-application-form-inner">

        <x-index.form />

    </div>

</div>

<div class="user-application">
    <div class="container">
        <div class="h2 user-application-title">{{$fields['application']}}</div>

        @if($applications->count() == 0)
            <div class="h4 touragent-booking-searhform-title">У вас нет актуальных заявок :(</div>
        @else
            @foreach ($applications as $application)
                <x-tourist.application :application="$application"/>
            @endforeach
        @endif
            
    </div>

</div>

@desktopcss

<style>
    .user-application-form {
        background: var(--color-main-back);
        border-radius: 10px;
        padding: 50px 70px;
        margin: 0 calc(var(--offset) - 80px) 40px;
    }

    .user-application-form-title {
        text-align: center;
        margin-bottom: 25px;
    }

    .user-application-form-inner {
    }

    .user-application {
        padding-bottom: 108px;
    }

    .user-application-title {
        margin-bottom: 25px;
    }

</style>

@mobilecss
@endcss

@startjs
<script>
    
</script>
@endjs