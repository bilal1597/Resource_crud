<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Add User</h1>
            </div>
            <div class="card-body">
                <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputname" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control " id="exampleInputname" placeholder="Enter Full Name">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email">
                            @error('email')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                          @error('password')
                          <span class="text-danger" >{{$message}} </span>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                            <input name="password_confirm" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Password">
                            @error('password_confirm')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Age</label><br>
                            <input name="age" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Enter Age">
                            @error('age')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">City</label><br>
                            <input name="city" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter City Name">
                            @error('city')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
