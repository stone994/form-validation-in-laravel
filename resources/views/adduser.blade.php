<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add user form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New User</h1>
               {{--   <pre>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                </pre>--}}
                <form action="{{ route('addUser') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" name="username" id="">
                        <span class="text-danger">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" value="{{ old('useremail') }}" class="form-control @error('useremail') is-invalid @enderror" name="useremail" id="">
                         <span class="text-danger">
                            @error('useremail')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">password</label>
                        <input type="password" value="{{ old('userpass') }}" class="form-control @error('userpass') is-invalid @enderror" name="userpass" id="">
                        <span class="text-danger">
                            @error('userpass')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label ">Age</label>
                        <input type="text" value="{{ old('userage') }}" class="form-control @error('userage') is-invalid @enderror" name="userage" id="">
                         <span class="text-danger">
                            @error('userage')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">City</label>
                    <select name="usercity" class="form-control @error('usercity') is-invalid @enderror"  id="">
                        <option value="lahore">Lahore</option>
                        <option value="multan">Multan</option>
                        <option value="germany">Germany</option>
                        <option value="nepal">Nepal</option>
                    </select>
                     <span class="text-danger">
                            @error('usercity')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>