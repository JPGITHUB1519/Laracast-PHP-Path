<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
<body> 
    <ul>
        @foreach($tasks as $task)
            <li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
        @endforeach
    </ul>
</body>
</html>