<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
<body> 
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->body }}</li>
        @endforeach
    </ul>
</body>
</html>