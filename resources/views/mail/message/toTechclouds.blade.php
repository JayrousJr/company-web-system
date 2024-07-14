<x-mail::message>
# Email received From {{$name}}
<x-mail::panel>
    <strong>Subject</strong><br>
    {{$subject}}<br>

</x-mail::panel>

<x-mail::panel>

    <strong>Message</strong><br>
    {{$emessage}}
</x-mail::panel>
This Message was Sent from {{$email}}.<br>
By {{$name}}


<x-mail::button :url="'https://legolas.tech/admin'">
Visit Website
</x-mail::button>

Joshua Jayrous, CEO<br>
{{ config('app.name') }}
</x-mail::message>
