<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Canceled</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .items {
        text-align: center;
    }

    .header {
        font-size: 1.5rem;
    }

    .note {
        color: #636363;
        font-size: 0.7rem;
        padding-bottom: 60px;
    }
    </style>
</head>

<body>

    <div class="items">
        <p class="header">{{ $namebooking->name }} your booking id <code>{{ $namebooking->b_id }}</code> is canceled
            successfully. </p>
        <p class="note">If you wish to book again, please do your booking from the add booking on our website.</p>
    </div>

    <p>Thanks</p>
    {{ config('app.name') }}

</body>

</html>