@component('mail::message')

<p>Hello,</p>
We hope that you are doing well.
The PDF of the deal is attached here.
Feel free to contact us!
@component('mail::button', ['url' => 'https://www.mepery.fr/'])
Visit Us
@endcomponent

Thanks,<br>
<b>Mepery Team
</b>

@endcomponent
