<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coins Inedx</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="container">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table
                            class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                            <thead
                                class="border-b border-neutral-200 font-medium dark:border-white/10"
                            >
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">coingecko_id</th>
                                    <th scope="col" class="px-6 py-4">name</th>
                                    <th scope="col" class="px-6 py-4">symbol</th>
                                    <th scope="col" class="px-6 py-4">current_price</th>
                                    <th scope="col" class="px-6 py-4">price_change_percentage_24h</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($coins as $coin)
                                    <tr class="border-b border-neutral-200 dark:border-white/10">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{$coin->id}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$coin->coingecko_id}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$coin->name}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$coin->symbol}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$coin->current_price}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$coin->price_change_percentage_24h}}%</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </main>
</body>
</html>
