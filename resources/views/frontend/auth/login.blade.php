<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login form</title>
</head>

<body>

    <form action="{{ route('login') }}" method="post">
        @csrf

        <div>
            <label for="">email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">password</label>
            <input type="text" name="password">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
