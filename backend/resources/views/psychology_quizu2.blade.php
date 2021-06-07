<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="format-detection" content="telephone=no">

<title>心理テスト | 質問2</title>

<link rel="stylesheet" href="/psychology-reset.css">
<link rel="stylesheet" href="/psychology-common.css">
<link rel="stylesheet" href="/psychology-quizu.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,900|Noto+Serif+JP:400,600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>心理テスト</h1>
    </header>

    <main>
        <h2>Q2, もし行事があったら？</h2>

        <div class="form_div">
            <form action="{{ route('psychology_quizu', ['id' => 3]) }}" method="post">
            @csrf
                <dl>
                    <input type="hidden" name="total_answer" value="{{$total_answer}}">
                    <dd>
                        <input type="radio" name="radio_box" id="radio-02-01" value="4">
                        <label for="radio-02-01" class="radio-rabel">積極的に参加する</label><br>
                        <input type="radio" name="radio_box" id="radio-02-02" value="7">
                        <label for="radio-02-02" class="radio-rabel">誘われたら考えてみる</label><br>
                        <input type="radio" name="radio_box" id="radio-02-03" value="9">
                        <label for="radio-02-03" class="radio-rabel">行かない。またはしぶしぶ参加</label>
                    </dd>
                </dl>

                <dl>
                    <dd>
                        <input type="submit" value="次の質問へ">
                    </dd>
                </dl>
            </form>
        </div>
        
        <a href="{{route('psychology_top')}}" class="button_a">
            <div class="back_btn">
                トップへ戻る
            </div>
        </a>
    </main>
</body>
</html>