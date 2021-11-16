@component('mail::message')
# Introduction

This email is for send test, it's ok!

@component('mail::button', ['url' => ''])
    Cadastrar-se
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
