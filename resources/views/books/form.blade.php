<html>
<body>
<h3 class="page-title">{{isset($record) ? 'Edit' : 'New'}} Book</h3>

@if(isset($record))
    <form action="{{ route('books.update',$record->id) }}" method="POST">
        @method('PUT')
        @else
            <form action="{{ route('books.store') }}" method="POST" class="add-new-post">
                @endif
                @csrf
                <input class="form-control form-control-lg mb-3" name="title" type="description" placeholder="Title" value="{{isset($record) ? $record->title: ''}}"> <br>
                <input class="form-control form-control-lg mb-3" name="description" type="description" placeholder="Description" value="{{isset($record) ? $record->description: ''}}">

                <br>
                <input type="submit" value="Save" class="btn btn-primary">
                <a class="" href="{{ route('articles.index') }}">Cancel</a>
            </form>
</body>
</html>