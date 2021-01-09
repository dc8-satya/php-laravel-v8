<html>
<body>
<a class="btn btn-primary" href="{{ route('articles.create') }}">New</a>
<br>
<table border="1">
@foreach($records as $record)
    <tr>
        <td>{{$record->id}}</td>
        <td>{{$record->title}}</td>
        <td>{{$record->description}}</td>
        <td>
            <form action="{{ route('articles.destroy',$record->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-primary" href="{{ route('articles.edit',$record->id) }}">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>
</body>
</html>