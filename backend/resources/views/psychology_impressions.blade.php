<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="format-detection" content="telephone=no">

<title>心理テスト | 感想一覧</title>

<link rel="stylesheet" href="/psychology-reset.css">
<link rel="stylesheet" href="/psychology-common.css">
<link rel="stylesheet" href="/psychology-impressions.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,900|Noto+Serif+JP:400,600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>心理テスト</h1>
    </header>

    <main>
        <h2>感想一覧</h2>
        <div class="message_box">
            <table>
                <tr>
                    @foreach($impressions as $impression)

                    <p>{{$impression->animal}}に似ている{{$impression->name}}さんが{{$impression->message}}と書き込みました。</p>

                    @endforeach

                </tr>
            </table>
        </div>

        <a href="{{route('psychology_top')}}" class="button_a">
            <div class="back_btn">
                トップへ戻る
            </div>
        </a>
    </main>
</body>
</html>