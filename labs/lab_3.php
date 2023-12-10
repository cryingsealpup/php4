<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="max-w-md m-5 mx-auto bg-white shadow-md rounded-xl md:max-w-2xl">
    <h1 class="text-3xl font-bold underline p-3">
        Модуль 3. PSR-7 Обмен сообщений и
        Middleware
    </h1>
    <h2 class="font-bold  p-1">
        Лабораторная Создание Middleware

    </h2>
    <div class='p-3'>
        <ol class="list-decimal pl-8">
            <li>
                <details class="p-4 mb-5 shadow-lg rounded-xl">
                    <summary class="flex items-center">
                        Создайте index.php
                        <button class="ml-auto">
                            <svg class="fill-current opacity-75 w-4 h-4 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                            </svg>
                        </button>
                    </summary>
                    <img class='p-3' src="\assets\middleware1.png" alt="">
                    <p class='p-3'> Запуск index.php из корня (текущая работа проводится в среде разработки php ddev).
                        Для того, чтобы это работало, потребовалось также создать простенький htaccess:</p>
                    <pre class='bg-black text-white whitespace-pre-wrap my-6'>
    RewriteEngine On

    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [QSA,L]          
</pre>
                    <p class='p-3'> Без .htacess slim не мог определить basepath, из-за чего давал 404 ошибку.
                    </p>
                </details>
            </li>
            <li>
                <details class="p-4 mb-5 shadow-lg rounded-xl">
                    <summary class="flex items-center">
                    Создайте Middleware и посмотрите результат в работе
                        <button class="ml-auto">
                            <svg class="fill-current opacity-75 w-4 h-4 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                            </svg>
                        </button>
                    </summary>
                    <img class='p-3' src="\assets\middleware2.png" alt="">
                </details>
            </li>

        </ol>


    </div>

</body>

</html>