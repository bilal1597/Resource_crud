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
                            <label for="exampleInputbatch" class="form-label">Batch</label>
                            <input type="number" name="batch" class="form-control " id="exampleInputbatch" placeholder="Enter Batch Year">
                            @error('batch')
                                <span class="text-danger">{{$message}}</span>
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
                            <label for="exampleSelect" class="form-label">City</label>
                            <select name="city" class="form-select" id="exampleSelect">
                                <option selected>Select City</option>
                                <option value="Karachi">Karachi</option>
                                <option value="Rwp">Rwp</option>
                                <option value="Islamabad">Islamabad</option>
                            </select>
                            @error('city')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                         <div class="mb-3">
                            <label for="exampleSelect" class="form-label">Country</label>
                            <select name="country" class="form-select" id="exampleSelect">
                                <option selected>Select Country</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="India">India</option>
                                <option value="Srilanka">Srilanka</option>
                            </select>
                            @error('country')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                         <div class="mb3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" >
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Male
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                              </div>
                              @error('gender')
                              <span class="text-danger">{{$message}} </span>
                          @enderror
                        </div> <br>

                        <button type="submit" class="btn btn-primary">Save</button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
