<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($employees as $id => $employe):?>
        <p>{{$employe['First Name']}} | <a href='employees/{{$id}}'>Show</a></p>
        <?php endforeach ?>
</body>
</html>