<!DOCTYPE html>
<html>
<head>
    <title>User Token</title>
</head>
<body>
    <h1>Your API Token</h1>
    @if ($token)
        <p>{{ $token }}</p>
    @else
        <p>No token available.</p>
    @endif
</body>
</html>
