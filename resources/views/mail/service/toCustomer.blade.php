<x-mail::message>

Hello Dear <strong>{{$customerName}}</strong>, <br>
Your Service Request has been received successiful and we are glad to start processing your request as soon as possible, our Service Team will reach on you via a your phone number for more clarificatons, Thank you!

<x-mail::button :url="'{{config('company.link')}}'">
Visit Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
