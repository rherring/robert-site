@component('mail::message')
You've received a new message from Robert-Herring.com.
@component('mail::panel')
    @if ($details['submittedSubject'])
    Subject: {{ $details['submittedSubject'] }}<br />
    @endif
    Name: {{ $details['name'] }}<br />
    @if ($details['url'])
    Website: {{ $details['url'] }}<br />
    @endif
    Email: {{ $details['email'] }}
@endcomponent

@component('mail::panel')
    Message : {{ $details['message'] }}
@endcomponent

Thanks,<br>
{{ $details['name'] }}
@endcomponent
