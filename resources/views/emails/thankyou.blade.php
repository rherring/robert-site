@component('mail::message')
Thank you for reaching out to me {{ $details['name'] }}.

@component('mail::panel')
    Your message has been received, and I will be in touch soon.
@endcomponent

@component('mail::button', ['url' => 'http://www.robert-herring.com'])
    Explore My Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
