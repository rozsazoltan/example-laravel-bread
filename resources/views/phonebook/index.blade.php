<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('phonebook.create') }}"><button>Hozzáadás</button></a>
    <table>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td><a href="{{ route('phonebook.edit', $item->id) }}"><button>Szerkesztés</button></a></td>
                <td>
                    <form action="{{ route('phonebook.destroy', $item->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field("DELETE")}}

                        <input type="submit" value="Törlés">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>