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
        <div class="mx-auto">
            <main class="h-screen">
                <header>
                    <h1 class="text-center text-4xl font-semibold text-blue-700">netcode</h1>
                    <p class="text-center text-base text-blue-400">Try it online</p>
                </header>
                <section>
                    <div id="code">
                        <form method="post">
                            <textarea>
                            </textarea>
                        </form>
                    </div>
                    <div id="result">
                     
                    </div>
                </section>
            </main>
        </div>
        <footer id="footer"></footer>
    </body>
</html>
