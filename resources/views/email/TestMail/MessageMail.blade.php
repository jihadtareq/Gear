@component('mail::message')
# Introduction

The body of your message.

Hello sir ,
<hr />
{{$message}}

@component('mail::button', ['url' => url('/')])
Click Here To Back Website
@endcomponent

Thanks,<br>
Staff {{ config('app.name') }}
@endcomponent
