@component('mail::message')

# {{$data['subject']}}


{{$data['content']}}


<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent