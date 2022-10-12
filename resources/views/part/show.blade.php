<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Game</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="timer" id="timer">0</div>
    <div class="container">
        <div class="type-display" id="typeDisplay"></div>
        <textarea class="type-input" id="typeInput" autofocus></textarea>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    
</body>
</html>