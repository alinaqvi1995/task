<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts Edit</title>
</head>
<body>
    <form class="form-horizontal" action="{{ route('post.update', $post['id']) }}" method="PATCH" enctype="multipart/form-data" role="form">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-xs-12 col-form-label">Email</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" value="{{ $post['email'] }}" name="email" required id="email" placeholder="Email">
            </div>
        </div>

        <div class="form-group row">
            <label for="post" class="col-xs-12 col-form-label">Post</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" value="{{ $post['post'] }}" name="post" required id="post" placeholder="Post">
            </div>
        </div>

        <div class="form-group row">
            <button class="btn btn-primary a-btn-slide-text" type="submit">
                <i class="fa fa-trash"></i> Update
            </button>
        </div>
    </form>
</body>
</html>