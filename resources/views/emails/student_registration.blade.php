<!DOCTYPE html>
<html>
<head>
    <title>New Student Registration</title>
</head>
<body>
    <h1>New Registration</h1>
    <p>Full Name: {{ $student->full_name }}</p>
    <p>Email: {{ $student->email }}</p>
    <p>Phone: {{ $student->phone }}</p>
    <p>Address: {{ $student->address }}</p>
</body>
</html>
