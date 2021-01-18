<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="flex justify-center items-center h-full">
<div>
    <div class="flex justify-between">
        <div class="p-4">Raamatu nimi</div>
        <div class="p-4"> {{ $book->release_date }}</div>
    </div>
    <div class="flex justify-between">
        <div class="p-4">Raamatu Kaanepilt</div>
        <div class="p-4"><img src="{{ $book->cover_path }}" alt=""></div>
    </div>
    <div class="flex justify-between">
        <div></div>
        <div></div>
    </div>
</div>
</body>
</html>
