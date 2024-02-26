<x-mail::message>


    Hello {{config('app.name')}}, We have received a new Service Request from <strong>{{$customerName}}</strong>. <br>
    Service Description: <strong>{{$servicetDescription}} </strong>.
    Email: <strong>{{$customerEmail}}</strong>

   <x-mail::button :url="'{{config('company.link')}}'">
    Visit Website
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>