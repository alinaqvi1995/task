<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts Index</title>
</head>
<body>
    <form class="form-horizontal" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" role="form">
        {{csrf_field()}}
        <div class="form-group row">
            <label for="exampleFormControlInput1" class="col-xs-12 col-form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" value="{{ Auth::user()->email }}" name="email">
        </div>
        <div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-xs-12 col-form-label">Post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="post"></textarea>
        </div>
        <div class="form-group row">
            <label class="col-xs-12 col-form-label"></label>
            <div class="col-xs-10">
                <button type="submit" class="btn btn-primary">Add Post</button><br><br><br>
            </div>
        </div>
    </form>
</body>
</html>