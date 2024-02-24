<!-- resources/views/show_session.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Session Variables</title>
</head>
<body>
    <h1>Session Variables</h1>

    @if(session()->has('global_data'))
        <p>Global Data: {{ session('global_data') }}</p>
    @else
        <p>No Global Data in Session</p>
    @endif

    {{-- You can add more sections to display other session variables if needed --}}
</body>
</html>
