<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo asset('css/form.css')?>" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

</head>
<body>

<div style="width: fit-content;
    margin: auto;
    margin-top: 100px;">
    <form action="{{$entrie->id}}" method="post">
        {{csrf_field()}}
        <label for="username">Employee</label>
        <select name="employee_id" id="cars">
            @foreach($employees as $item)
                <option @if ($item->id ==$entrie->employee_id)
                        selected
                        @endif
                        value="{{$item->id}}">{{$item->first_name}} {{$item->last_name}}</option>
            @endforeach
        </select>
        <label for="password">Date</label>
        <input type="text" value="{{$entrie->date}}" name="date" id="date">
        <label for="password">Check in</label>
        <input type="text" value="{{$entrie->check_in}}" name="check_in" id="check_in">
        <label for="password">Check out</label>
        <input type="text" value="{{$entrie->check_out}}" name="check_out" id="check_out">
        <input type="submit" value="Submit">
    </form>
</div>

</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</html>
<script>
    $(function () {
        $("#check_in").timepicker({
            timeFormat: 'h:mm:ss',

        });
        $("#check_out").timepicker({
            timeFormat: 'h:mm:ss',

        });
        $("#date").datepicker();
    });
</script>
