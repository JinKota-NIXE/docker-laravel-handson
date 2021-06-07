<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="format-detection" content="telephone=no">

<title>ダイスゲーム | 結果発表</title>

<link rel="stylesheet" href="/reset.css">
<link rel="stylesheet" href="/common.css">
<link rel="stylesheet" href="/answer.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,900|Noto+Serif+JP:400,600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>ダイスゲーム</h1> 
    </header>

    <main>
        <h2>{{$dice_message}}でした。</h2>
        <h3>{{$result_message}}</h3>
        <form action="{{route('dice_game_top')}}" method="get">
        @csrf
            <input type="hidden" name="money" value="{{$money}}">
            <dl>
                <dd>
                    <p>あなたの現在のもち金{{$money}}円です。</p>
                    <input type="submit" value="もう一度！">
                </dd>
            </dl>
        </form>
    </main>
</body>
</html>