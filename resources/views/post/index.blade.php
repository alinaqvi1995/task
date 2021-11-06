<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped table-bordered dataTable" id="cus-request-table-2">
        <thead>
            <tr>
                <th>Email</th>
                <th>Post</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody> @php($page_plus=0)
            @foreach($post as $index => $request)
            <tr>
                <td>{{ $request->email }}</td>
                <td>{{ $request->post }}</td>

                <td>
                    <form action="{{ route('post.edit', $request->id) }}" method="get">
                        <button class="btn btn-primary a-btn-slide-text" type="submit">
                            <i class="fa fa-trash"></i> Edit
                        </button>
                    </form>

                    <form action="{{ route('post.destroy', $request->id) }}" method="DELETE">
                        {{ csrf_field() }}
                        <button class="btn btn-danger a-btn-slide-text" type="submit">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Email</th>
                <th>Post</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>
</body>
</html>