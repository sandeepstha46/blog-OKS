<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Update</title>
    <style>
    * {
        margin: 0;
    }

    body {
        background-color: #d5ddde;
        color: #575a5b;
        font-family: 'Poppins', sans-serif;
    }

    .modal {
        position: relative;
        background-color: #fff;
        box-sizing: border-box;
        width: 90%;
        max-width: 460px;
        margin: 0 auto;
        margin-top: 100px;
        border-radius: 4px;
        padding: 105px 38px 20px 38px;
        text-align: center;
        box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.25);
    }

    h1 {
        font-size: 37px;
    }

    .points {
        color: #a2b5b9;
        font-size: 18px;
    }

    hr {
        border: none;
        height: 1px;
        background-color: #ddd;
        margin: 20px auto;
    }

    .progress {
        margin-top: 20px;
        margin-bottom: 27px;
    }

    .progress rect {
        fill: #59bc69;
    }

    #close-modal {
        position: absolute;
        top: 12px;
        right: 12px;
        width: 11px;
        height: 11px;
        stroke: #575a5b;
        cursor: pointer;
    }

    #success-icon {
        position: absolute;
        width: 110px;
        height: 110px;
        left: 50%;
        margin-left: -55px;
        top: -5%;
        background-color: #59bc69;
        border-radius: 50%;
        box-sizing: border-box;
        border: solid 5px white;
        box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.3);
    }

    #success-icon div {
        position: absolute;
        top: 34%;
        left: 26%;
        transform: rotate(-45deg);
        border-bottom: solid 0.8em white;
        border-left: solid 0.8em white;
        height: 15%;
        width: 33%;
    }
    </style>
</head>

<body>

    <div class="modal">
        <div id="success-icon">
            <div></div>
        </div>
        <svg id="close-modal" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 10 10">
            <line x1="1" y1="-1" x2="9" y2="11" stroke-width="2.5" />
            <line x1="9" y1="-1" x2="1" y2="11" stroke-width="2.5" />
        </svg>
        <h1><strong>Success!</strong></h1>
        <svg class="progress" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 4.5">
            <rect height="4.5" width="100" rx="2" ry="2" />
        </svg>
        <p class="message">Your booking id: {{$dataItem->b_id}} is updated successfully.</p>
        <hr>
        <p class="points">Thank you for using {{ config('app.name') }} services.</p>

    </div>

</body>

</html>