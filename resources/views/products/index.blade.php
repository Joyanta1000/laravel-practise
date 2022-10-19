<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <td>
                #
            </td>
            <td>
                Name
            </td>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($products->chunk(10000) as $product)
                @foreach ($product as $q)
                    <tr>
                        <td>
                            {{ $i }}
                        </td>
                        <td>
                            {{ $q->name }}
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>

</html>
