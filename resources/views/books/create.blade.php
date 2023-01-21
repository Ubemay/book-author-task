<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}">
<form method="POST" action="{{ url('books') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="author_id">Author</label>
        <select class="form-control" id="author_id" name="author_id" required>
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="page_count">Page Count</label>
        <input type="number" class="form-control" id="page_count" name="page_count" required>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-success">Add Book</button>
</form>
