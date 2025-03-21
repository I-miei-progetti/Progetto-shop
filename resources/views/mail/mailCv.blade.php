<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h4>Abbiamo ricevuto una candidatura da parte di </h4>
    <div>
        <p>{{ $content['name'] }}</p>
        <p>{{ $content['surname'] }}</p>
        <p>Dice di se: {{ $content['comment'] }}</p>
        <div>
            <p>I suoi recapiti sono:
                <li>
                    <ol>
                        email: {{ $content['email'] }}
                    </ol>
                    <ol>
                        telefono: {{ $content['phone'] }}
                    </ol>
                </li>
            </p>
        </div>
        <div>
            <a href="{{env('APP_URL').Storage::url($content['cv'])}}" download>
                Vedi CV
            </a>
        </div>
    </div>
</body>

</html>
