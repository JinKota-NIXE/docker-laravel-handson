<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="format-detection" content="telephone=no">

<title>ダイスゲーム | 丁か半か！？</title>

<link rel="stylesheet" href="/reset.css">
<link rel="stylesheet" href="/common.css">
<link rel="stylesheet" href="/select.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,900|Noto+Serif+JP:400,600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>ダイスゲーム</h1>
    </header>

    <main>
        <h2>丁か半か！？</h2>
        <form action="{{route('dice_game_answer')}}" method="post">
        @csrf
            <input type="hidden" name="money" value="{{$money}}">
            <input type="hidden" name="dice_message" value="{{$dice_message}}">
            <dl>
                <dd class="select">
                    <select name="select_box">
                    <option value="1">丁</option>
                    <option value="2">半</option>
                    </select>
                </dd>
            </dl>
            <dl class="start">
                <dd>
                    <input type="submit" value="勝負！">
                </dd>
            </dl>
        </form>
    </main>
</body>
</html>