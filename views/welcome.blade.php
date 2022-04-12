
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Your Api Key</title>

    </head>
    <body >
        <div class="Api_Key">
            <form action="/api/v1/" method="get">
                @csrf
                <button>Получить данные</button>
            </form>

        </div>
    </body>
</html>
