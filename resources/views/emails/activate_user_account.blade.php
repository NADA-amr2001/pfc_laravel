@component('mail:message')
    #Please activate your account

@component('mail:panel')
    #to activate your account
@endcomponent    

@component('mail:button',['url' => $url])
    #Click here
@endcomponent

Thank your
<br>
equipe {{ config("app.name")}}

@endcomponent