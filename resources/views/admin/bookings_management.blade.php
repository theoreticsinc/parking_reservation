<!-- resources/views/bookings_management.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Your Page</title>
</head>
<body>
    <h1>Your Data:</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Check IN</th>
                <th>Name</th>
                <!-- Add more columns based on your model fields -->
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->check_in }}</td>
                    <td>{{ $item->check_out }}</td>
                    <!-- Add more columns based on your model fields -->
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $data->links() }} <!-- Display pagination links -->
</body>
</html>
