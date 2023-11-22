<!-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> -->

@component('mail::message')
# Welcome!

Hi {{$user->name}}
<br>Welcome to Laracamp,
your account has been created successfully.
Now you can choose your best match camp!

@component('mail::button', ['url' => route('login')])
Login here 
@endcomponent

Thanks, <br>
{{ config('app.name') }}
@endcomponent
