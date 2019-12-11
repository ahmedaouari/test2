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
        <legend>span</legend>

        <form action="{{ url('api/delivery-times')}}" method="post">
            {{csrf_field ()}}
            <label for="name">span :</label>
            <input type="text" placeholder="'9->12', '14->18' " name="span"  ><br>
            <br>


            <input type="submit" value="Enregistrer">

        </form>
    </fieldset>
</div>
</body>
</html>

