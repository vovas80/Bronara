<div class="applications">
    @foreach($applications as $application)
        <x-touragent.application :isWorking="$isWorking" :application="$application" />
    @endforeach
</div>