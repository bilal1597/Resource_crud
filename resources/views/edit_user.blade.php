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
                <h1>Edit User</h1>
            </div>
            {{-- @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
            @endif --}}
            <div class="card-body">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <form>
                        <input type="hidden" name="id" value="{{$user->id}}" >
                        <div class="mb-3">
                            <label for="exampleInputname" class="form-label">Full Name</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control " id="exampleInputname" placeholder="Enter Full Name">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input name="email" type="email" value="{{$user->email}}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email">
                            @error('email')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputbatch" class="form-label">Batch</label>
                            <input type="number" name="batch" value="{{$user->batch}}" class="form-control " id="exampleInputbatch" placeholder="Enter Batch Year">
                            @error('batch')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Age</label><br>
                            <input name="age" type="number" value="{{$user->age}}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Age">
                            @error('age')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleSelect"  class="form-label">City</label>
                            <select name="city"  class="form-select" id="exampleSelect">
                                {{-- <option selected>{{$user->city}}</option> --}}
                                <option value="Karachi" {{$user->city == 'Karachi' ? 'selected' : ''}}> Karachi</option>
                                <option value="Rwp" {{$user->city == 'Rwp' ? 'selected' : ''}}> Rwp</option>
                                <option value="Islamabad" {{$user->city == 'Islamabad' ? 'selected' : ''}} >Islamabad</option>
                            </select>
                            @error('city')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleSelect" class="form-label">Country</label>
                            <select name="country" class="form-select" id="exampleSelect">
                                {{-- <option selected>{{$user ->country }}</option> --}}
                                <option value="Pakistan" {{$user->country == 'Pakistan' ? 'selected' : ''}}> Pakistan</option>
                                <option value="India" {{$user->country == 'India' ? 'selected' : ''}}> India</option>
                                <option value="Srilanka" {{$user->country == 'Srilanka' ? 'selected' : ''}}> Srilanka</option>
                            </select>
                            @error('country')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>

                        <div class="mb3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" {{ $user->gender == 'Male' ? 'checked' : '' }} >
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Male
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female" {{ $user->gender == 'Female' ? 'checked' : '' }} >
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
                </form>
            </div>
        </div>
    </div>

</body>
</html>
