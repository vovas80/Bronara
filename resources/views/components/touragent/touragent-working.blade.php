<div class="modal-application-tours-list">

    <div id="content-block">

        <x-touragent.applications isWorking :applications="$applications"/>

    </div>

    
</div>

<div id="pagination">
    <x-inc.pagination 
        :count="$count" 
        :pagesize="$pagesize" 
        :page="$page"
        :paglink="$paglink"
    />
</div>


