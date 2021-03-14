<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Client</title>
</head>
<body>
    <form method="post" action="{{ route('add-client') }}" >
    @csrf
        <input type="text" name="name" placeholder = "write name">
        <input type="text" name="surname" placeholder = "write surname">
        <input type="text" name="age" placeholder = "write age">
        <button type="submit">Create</button>
    </form>
</body>
</html>