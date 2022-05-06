@component('mail::message')
    #Please activate your account

@component('mail::panel')
    #to activate your account
@endcomponent    

@component('mail::button',['url' => $url])
    #Click here
@endcomponent

Thank you
<br>
equipe {{ config("app.name")}}

@endcomponent