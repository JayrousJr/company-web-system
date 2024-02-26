<x-mail::message>


Hello, {{config('app.name')}}. We have received a new message from <strong>{{$name}}</strong>,<br>
Message saying <br>
<strong>{{$emessage}}</strong> <br>
Sender Email {{$email}} <br>
<x-mail::button :url="'{{config('company.link')}}'">
Visit Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
