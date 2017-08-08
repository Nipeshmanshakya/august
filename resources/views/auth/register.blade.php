<html>
<head>
    <title>Register page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1><ins>Fill this form to Register a new user</ins></h1>
    <form action="{{ url('register') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            <span class="text-danger">{{ $errors -> first('name') }}</span>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
            <span class="text-danger">{{ $errors -> first('email') }}</span>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" name="password">
            <span class="text-danger">{{$errors -> first('password')}}</span>
        </div>
        <div class="form-group">
            <label for="">Password confirmation</label>
            <input type="text" class="form-control" name="password_confirmation">
            <span class="text-danger">{{$errors -> first('password_confirmation')}}</span>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
</div>
</body>
</html>