@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Възникна грешка!
@else
# Здравейте!
@endif
@endif

{{-- Intro Lines --}}
Получавате този имейл, защото сте подали заявка за промяна на паролата на Вашия акаунт.
<br><br>
За да промените паролата, натиснете бутона "Промяна на парола".

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
Промяна на парола
@endcomponent
@endisset

{{-- Outro Lines --}}
Ако не сте Вие, този който е заявил промяна на паролата, моля не натискайте бутона.

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
Поздрави,<br>{{ config('app.name') }}
@endif

@endcomponent
