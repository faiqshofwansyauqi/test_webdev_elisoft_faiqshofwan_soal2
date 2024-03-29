<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Post</title>
    
    <style>
        .btn-container {
            display: flex;
            justify-content: space-between;
        }
        
        .btn-container .btn-primary {
            margin-right: 10px;
        }
    </style>
</head>

<body>

<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    EDIT POST
                </div>
                <div class="card-body">
                    <form action="{{ route('table.update', $table->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>TITLE</label>
                            <input type="text" name="title" placeholder="Masukkan Title" value="{{ $table->title }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Created</label>
                            <textarea class="form-control" name="content" placeholder="Masukkan Content" rows="4">{{ $table->created_at }}</textarea>
                        </div>

                        <div class="btn-grup">
                            <a href="{{ route('posts.index') }}" class="btn btn-dark">KEMBALI</a>
                            <button type="submit" class="btn btn-success">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
