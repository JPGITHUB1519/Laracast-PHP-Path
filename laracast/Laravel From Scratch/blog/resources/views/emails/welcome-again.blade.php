@component('mail::message')
# Introduction

Thanks so much For registering
@component('mail::button', ['url' => 'http://localhost:8000/'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
	Some inspiration quote to be Here :-)
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
