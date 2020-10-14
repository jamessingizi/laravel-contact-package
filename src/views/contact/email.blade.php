@component('mail::message')
### New message from: {{ ucwords($name) }}

###### Contact Email: {{ strtolower($email) }}

{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
