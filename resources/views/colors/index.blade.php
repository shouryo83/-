<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験管ゲーム</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div style="
            text-align: center;
        ">
            <h1>１st stage</h1>
        </div>
        <h1>円</h1>
        @foreach ($colors as $color)
            <div style="
                border-radius: 50%;
                width: 30px;
                height: 30px;
                background-color: {{ $color->color }}; ">
        @endforeach
            </div>
    </body>
</html>