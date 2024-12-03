<!-- resources/views/emails/custom.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Nueva solicitud a través de la web</title>
</head>
<body>
    <img src="{{ asset('images/gaitegi__logo.svg') }}"/>
    <p>{{ $who }}</p>
    <p>{{ $email }}</p>
    <p>{{ $phone }}</p>
    <p>{{ $messages }}</p>
    <p>{{ $selection }}</p>
</body>
</html>