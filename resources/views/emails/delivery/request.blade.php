@component('mail::message')
# Jet Express

A new delivery request was just made on JetExpress please find the details below.

@component('mail::table')
| Title               | Detail               |
| ------------------- |:--------------------:|
| Fullname            | {{$deliveryRequest->fullName}}        |
| Phone Number        | {{$deliveryRequest->phoneNumber}}     |
| Email Address       | {{$deliveryRequest->email}}           |
| Delivery Items      | {{$deliveryRequest->deliveryItems}}   |
| Pickup Address      | {{$deliveryRequest->pickupAddress}}   |
| Delivery Address    | {{$deliveryRequest->deliveryAddress}} |
| Other Instructions  | {{$deliveryRequest->instructions}}    |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
