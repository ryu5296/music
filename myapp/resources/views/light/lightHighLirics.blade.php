
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/liricsAndNoLirics.css" >
    <title>Document</title>
</head>
<body>
    <div class="container">
        <img src="/photo/close-up-of-vinyl-needle-record-loop-4k-free-video.jpeg" alt="写真" width="193" height="130">
    </div>
    <h1>あなたにおすすめの曲です</h1>
    <h3>アーティスト名</h3>
    <h3>{{ $repo->artist_name }}</h3>
    <h3>曲名</h3>
    <h3>{{ $repo->music_title }}</h3>
</body>
</html>