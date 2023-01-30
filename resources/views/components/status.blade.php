@if(session('status'))
    <x-alert type="success" :message="session('status')" />
@endif
