<form class="user-info-form" onsubmit="save_changes(this, '{{ route('save-tourist', [], false) }}'); return false;">
    
    <div class="userinfo">

        <x-inputs.inputuser type="text" name="name" placeholder="{{$fields['title']}}" label="{{$fields['title']}}" :value="$tourist->name" isIcon />
        <x-inputs.inputuser type="tel" name="phone" placeholder="{{$fields['phone']}}"  label="{{$fields['phone']}}" :value="$tourist->phone" isIcon />
        <x-inputs.inputuser type="email" name="email" placeholder="{{$fields['email']}}" label="{{$fields['email']}}" :value="$tourist->email" isIcon />
        <x-inputs.inputuser class="small" type="text" name="mark" placeholder="{{$fields['mark']}}" label="{{$fields['mark']}}" :value="$tourist->mark.'/10'" readonly/>

    </div>

    <x-inputs.button type="submit" class="blue-empty fit-content save-tourist">
        {{$fields['btn']}}
    </x-inputs.button>

    <div class="message main-text color-red error">{{ $fields['error'] }}</div>
    <div class="message main-text color-green success">{{ $fields['success'] }}</div>

</form>

    

@desktopcss
<style>
    .userinfo {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--color-main-white);
        border: 1px solid #E9EEF1;
        box-sizing: border-box;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 40px;
    }

    .btn-save-tourist {
        background: var(--color-main-white);    
    }

    .message {
        display: none;
        margin-top: 10px;
        text-align: left !important;
    }
</style>
@mobilecss
@endcss

@startjs
<script>
    async function save_changes(form, route) {

        event.preventDefault()

        name = form.querySelector('input[name="name"]').value
        email = form.querySelector('input[name="email"]').value
        phone = form.querySelector('input[name="phone"]').value


        const response = await post(route, {
            name: name,
            email: email,
            phone: phone,
        }, true, true)

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