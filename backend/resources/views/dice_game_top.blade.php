<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="format-detection" content="telephone=no">

<title>ダイスゲーム | トップ</title>

<link rel="stylesheet" href="/reset.css">
<link rel="stylesheet" href="/common.css">
<link rel="stylesheet" href="/top.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,900|Noto+Serif+JP:400,600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>ダイスゲーム</h1>
    </header>

    <main>
        <h2>かけ金</h2>
        <form action="{{ route('dice_game_select') }}" method="post">
        @csrf
            <input type="hidden" name="money" value="{{$money}}">
            <dl>
                <dd>
                    <span>{{$money}}円</span>
                </dd>
            </dl>
            <dl class="start">
                <dd>
                    <input type="submit" value="500円賭けてスタート">
                </dd>
            </dl>
        </form>
    </main>
</body>
</html>