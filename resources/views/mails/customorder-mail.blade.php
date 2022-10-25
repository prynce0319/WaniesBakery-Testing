<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Order Alert</title>
</head>
<body>
    <p>Hi <b> WANIES BAKERY</b>, </p>
    <p>A customer, {{ $customorder->name }} at {{ $customorder->created_at }}, sent a custom order to be reviewed!!.</p>
    <br>
    <p>Please Click for approval or declination via the link below.</p>
    </br>

    <a href="{{ route('admin.customorder') }}">Custom order</a>

</body>
</html>