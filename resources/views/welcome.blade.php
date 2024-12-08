<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://cdn.tailwindcss.com"></script>

    <title>CheckList</title>


</head>

<body>
    <x-app :events=$events :guests=$guests />
    <div class="bg-blue-400 -mt-5 py-5">
        <livewire:arrivedAbsent />
        <livewire:guests-table />
    </div>


</body>

</html>
