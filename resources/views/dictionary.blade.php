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
<label>Englist-Vietnamese</label>
<form method="post" action="/dictionary">
    @csrf
    <input type="text" name="dictionary" placeholder="Nhập từ còn dịch">
    <button type="submit">Translate</button>
</form>
</body>
</html>
