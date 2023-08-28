<div class="data-tourist" id="tourist">
    <x-inputs.input-form label="Фамилия (на латинице):" placeholder="Familiya" name="second-name" type="text" required/>
    <x-inputs.input-form label="Имя (на латинице):" placeholder="Imya" name="first-name" type="text" required/>
    <x-inputs.input-form label="Отчество (на латинице):" placeholder="Otchestvo" name="third-name" type="text" required/>
    <x-inputs.input-form label="Дата рождения:" placeholder="Дата" name="dateofbirth" type="text" required/>
    <x-inputs.input-form label="Серия и номер паспорта:" placeholder="Серия и номер" name="passport" type="text" required/>
    <x-inputs.input-form label="Действует до:" placeholder="Дата"  name="date" type="text" required/>
    <x-inputs.input-form label="Кем выдан паспорт:" placeholder="Кем выдан" name="issued" type="text" required/>

    <x-inputs.select 
        label="Гражданство:"
        title="Гражданство" 
        name="citizenship" 
        :items="$citizenship = $citizenship"
        required
    />
</div>

@desktopcss

<style>
    
</style>

@mobilecss

@endcss
