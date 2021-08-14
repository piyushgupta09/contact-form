@component('mail::message')
# New query from contact form

Name : {{ $contact->name }}
<br>
Email : {{ $contact->email }}
<br>
Message : {{ $contact->message }}

@component('mail::button', ['url' => ''])
Send Reply
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
