<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="input-buku">
        <form action="/buku" method="post">
            @csrf
            <div>
                <label for="title">Judul</label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="author">Pengarang</label>
                <input type="text" name="author">
            </div>
            <div>
                <label for="year">Tahun</label>
                <input type="text" name="year">
            </div>
            <input type="submit" value="Submit">
    </div>
</body>
</html>