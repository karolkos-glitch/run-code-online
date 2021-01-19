<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>netcode</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="mx-auto max-w-screen-lg">
            <main class="h-screen">
                <header class="h-1/6">
                    <h1 class="text-center text-4xl font-semibold text-blue-700">netcode</h1>
                    <p class="text-center text-base text-blue-400">Try it online</p>
                </header>
                <section class="w-full h-5/6 border-solid border-4 border-yellow-500">
                    <div id="code" class="h-2/3 border-solid border-4 border-blue-700">
                        <form method="post" class="flex justify-center flex-wrap h-full">
                            <textarea class="h-5/6 w-full">

                            </textarea>
                            <button class="border-solid border-4 border-blue-700 px-2">run code</button>
                        </form>
                    </div>
                    <div id="result" class="h-1/3 border-solid border-4 border-red-700">
         
                    </div>
                </section>
            </main>
        </div>
        <footer id="footer"></footer>
    </body>
</html>
