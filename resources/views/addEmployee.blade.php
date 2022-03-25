<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo asset('css/form.css')?>" type="text/css">

</head>
<body>

<div style="width: fit-content;
    margin: auto;
    margin-top: 100px;">
    <form action="" method="post">
        {{csrf_field()}}
        <label for="username">First name</label>
        <input type="text" name="first_name">
        <label for="password">Last name</label>
        <input type="text" name="last_name" id="last_name">
        <input type="submit" value="Submit">
    </form>
</div>

</body>

</html>


