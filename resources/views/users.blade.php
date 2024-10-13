<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Resource</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Resource Crud</h1>
                <a class="btn btn-success float-end" href="{{route('users.create')}}">Registration</a>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <table class="table table-bordered table-sm table-striped " >
                        <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Age</th>
                              <th scope="col">City</th>
                              <th scope="col" colspan="2">Actions</th>
                            </tr>
                            <tbody>
                                @foreach ($collection as $item)
                                <tr>
                                    <td>{{$item ->id}} </td>
                                    <td>{{$item ->name}} </td>
                                    <td>{{$item ->email}} </td>
                                    <td>{{$item ->age}} </td>
                                    <td>{{$item ->city}} </td>
                                    <td> <a class="btn  btn-info" href="{{route('users.show',$item->id)}}">Edit</a></td>
                                    <td> <form action="{{route('users.destroy', $item ->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this user?');" >Delete</button>
                                    </form> </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
