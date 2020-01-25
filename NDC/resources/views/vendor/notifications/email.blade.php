@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Whoops!
@else
# Hola!
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@if (isset($actionText))
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
{{ $actionText }}
@endcomponent
@endif

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

<!-- Salutation -->
@if (! empty($salutation))
{{ $salutation }}
@else
Saludos,<br>
<img src="http://unipanamericana.edu.co/formularios/2017/web/siaf/img/siaf-01.png" height="100" width="300">
| <b>Biblioteca</b> | <a href="https://unipanamericana.edu.co">www.unipanamericana.edu.co</a> | 5558210 Ext. 483 - 486 |
@endif

<!-- Subcopy -->
@if (isset($actionText))
@component('mail::subcopy')
Si tienes problemas accediendo al boton de "{{ $actionText }}", copia y pega en el navegador la siguiente URL: [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endif
@endcomponent
