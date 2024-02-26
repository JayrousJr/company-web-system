<x-mail::message>

Hello Dear {{$name}}, Thank you for reaching {{env('APP_NAME')}}<br>
Your message has brightened our day! We want you to know that every word you've shared is appreciated and valued. Your insights, questions, and thoughts contribute to the rich tapestry of our community. <br>
We're excited to dive into your message and provide you with the best assistance possible. Rest assured, your engagement drives us forward, and we're here to make your experience exceptional. <br>
Thank you for being an essential part of our journey

<x-mail::button :url="'{{config('company.link')}}'">
Visit Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
