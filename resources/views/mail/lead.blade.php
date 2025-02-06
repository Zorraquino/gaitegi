<!-- resources/views/emails/lead.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Nueva solicitud a través de la Gaitegi.com</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 32px 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        header img {
            max-width: 150px;
        }
        p {
            margin: 10px 0;
        }
        strong {
            color: #555;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="{{ asset('images/gaitegi__logo.svg') }}" alt="Logo"/>
        </header>

        <p><strong>Nombre:</strong> {{ $who }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Teléfono:</strong> {{ $phone }}</p>
        <p><strong>Interesado en:</strong> {{ $selection }}</p>
        <p><strong>Mensaje:</strong> {{ $messages }}</p>

        <footer>
            &copy; {{ date('Y') }} Gaitegi
        </footer>
    </div>
</body>
</html>