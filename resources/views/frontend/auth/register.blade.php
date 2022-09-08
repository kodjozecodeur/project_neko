<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register form</title>
</head>

<body>

    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <label for="">First name</label>
            <input type="text" name="first_name" id="">
        </div>
        <div>
            <label for="">Last name</label>
            <input type="text" name="last_name" id="">
        </div>
        <div>
            <label for="">email</label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <label for="">location</label>
            <input type="text" name="location" id="">
        </div>
        <div>
            <label for="">phone number</label>
            <input type="text" name="phone_number" id="">
        </div>
        <div>
            <label for="">password</label>
            <input type="text" name="password" id="">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
