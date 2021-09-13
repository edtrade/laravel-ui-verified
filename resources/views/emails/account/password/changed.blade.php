@component('mail::message')
# Password changed

We're just letting you know that your password has been changed on {{ now() }}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
