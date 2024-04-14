<x-mail::message>
# Email reply from Legolas Technologies. 
<x-mail::panel>
    Hello 👋👋 Dear {{$name}}, Thank you for reaching Legolas Technologies.<br>
    Your message has brightened our day! We want you to know that every word you've shared is appreciated and valued. Your insights, questions, and thoughts contribute to the rich tapestry of our community. <br><br>
    We're excited to dive into your message and provide you with the best assistance possible. Rest assured, your engagement drives us forward, and we're here to make your experience exceptional. <br>
    Thank you for being an essential part of our journey
</x-mail::panel>


<x-mail::button :url="'https://legolas.tech/admin'">
Visit Website
</x-mail::button>

Thanks,<br>
Joshua Jayrous, Chief Executive Officer (CEO),<br>
{{ config('app.name') }}
</x-mail::message>
