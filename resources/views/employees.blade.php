
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
@if(\Session::has('success'))
    <div>
        <li style="    list-style: none;
    text-align: center;
    background: green;
    color: white;
    width: 34%;
    height: 30px;
    margin: auto;" class="alert alert-success">{!! \Session::get('success') !!}</li>
    </div>
@endif
<style>
    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
<div style="text-align: center;">
    <a href="add/employer" class="button">Add new employer</a>
</div>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($employees))
            @foreach($employees as $item)
                <tr>
                    <td> {{$item->id}} </td>
                    <td> {{$item->first_name}} </td>
                    <td> {{$item->last_name}} </td>
                    <td> {{$item->created_at}} </td>
                    <td> {{$item->updated_at}} </td>
                    <td><a href="delete/employees/{{$item->id}}">Delete</a> / <a href="update/employees/{{$item->id}}">Update</a></td>
                </tr>
        @endforeach
        @endif
        <tbody>
    </table>
</div>
</body>
</html>


