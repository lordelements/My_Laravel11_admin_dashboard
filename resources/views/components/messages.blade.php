@if (session()->has('status'))
<div x-data="{show : true}" x-show="show" x-init="setTimeout(() => show = false, 3000)">

<h1>{{session('status')}}</h1>

</div>

@endif
