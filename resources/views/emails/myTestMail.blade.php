<!DOCTYPE html>
<html>
<head>
    <title>Test mail</title>
</head>
<body>
    <h2> CHANGE OF USER'S ACCOUNT BALANCE   {{ $details['day'] }}</h2>
    <h2> {{ $details['change'] }} VND</h2>    <br>
    <h2> TOTAL ACCOUNT BALANCE   {{ $details['day'] }}</h2>
    <h2>{{ $details['total_yd'] }} VND</h2>   <br>
    <p>Mail is sent automatically, please do not reply </p>
    <p>Have nice day</p>
</body>
</html>
