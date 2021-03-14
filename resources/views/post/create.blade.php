<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Post</title>
</head>
<body>
<form method="post" action="{{ route('add-post') }}" >
    @csrf
        <input type="text" name="title" placeholder = "write title"> <br>
        <input style = "height: 400px; width: 400px; margin-top: 10px" type="text" name="body" placeholder = "write body">
        <button type="submit">Create</button>
    </form>
    
</body>
</html>