@component('mail::message')
# Invoice

Your invoice for your booking

@component('mail::table')
| Room          | Quantity      | Price    |
| ------------- |:-------------:| --------:|
@for($i=0;$i<5;$i++)
| {{$name}}     | {{$i*$i}}        | $100     |
| Villa Suite   | {{$i+1}}            | $400     |
@endfor
@endcomponent

@component('mail::button', ['url' => 'www.youtube.com'])
View Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent