<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="<?php echo asset('css/main.css')?>" type="text/css">

</head>
<body>

<h2 style="color: #1a202c;">Tabelul cu toti angajatii</h2>
<div style="text-align: center;display: grid;">
<a href="users">Users</a>
    <br>
<a href="entries">Entries</a>
    <br>
    <a href="employees">Employees</a>
</div>
<br>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Date</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Created-at</th>
            <th>Updated-at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($entries as $item)
            <tr>
                <td> {{$item->date}} </td>
                <td> {{$item->employee->first_name}} </td>
                <td> {{$item->employee->last_name}} </td>
                <td> {{$item->check_in}} </td>
                <td> {{$item->check_out}} </td>
                <td> {{$item->created_at}} </td>
                <td> {{$item->updated_at}} </td>
        </tr>
        @endforeach
        <tbody>
    </table>
</div>
</body>
</html>

