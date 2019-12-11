<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div >
    <fieldset>
        <legend>add  city</legend>

        <form action="{{ url('api/city')}}" method="post">
            {{csrf_field ()}}
            <label for="name">name :</label>
            <input type="text" placeholder="city name " name="name"  ><br>
            <br>
            <label for="slug"> slug:</label>
            <input type="text" name="slug" ><br>

            <input type="submit" value="Enregistrer">

        </form>
    </fieldset>
</div>
</body>
</html>

