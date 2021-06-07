<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="format-detection" content="telephone=no">

<title>心理テスト | トップ</title>

<link rel="stylesheet" href="/psychology-reset.css">
<link rel="stylesheet" href="/psychology-common.css">
<link rel="stylesheet" href="/psychology-top.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,900|Noto+Serif+JP:400,600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>心理テスト</h1>
    </header>

    <main>
        <a href="{{ route('psychology_quizu', ['id' => 1]) }}" class="button_a">
            <div class="start_btn">
                スタート
            </div>
        </a>
        <a href="{{route('psychology_impressions')}}" class="button_a">
            <div class="impressions_btn">
                感想一覧
            </div>
        </a>
    </main>
</body>
</html>