<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="format-detection" content="telephone=no">

<title>心理テスト | 診断結果</title>

<link rel="stylesheet" href="/psychology-reset.css">
<link rel="stylesheet" href="/psychology-common.css">
<link rel="stylesheet" href="/psychology-answer.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,900|Noto+Serif+JP:400,600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>心理テスト</h1>
    </header>

    <main>
        <h2>結果発表</h2>

        <p>{{$question_answer}}</p>

        <h3>感想をどうぞ</h3>

        <div class="form_div">
            <form action="{{route('psychology_save')}}" method="post">
            <input type="hidden" name="_method" value="put">
                
                @csrf
                <dl>
                    <dt>お名前</dt>

                    <dd><input type="text" name="name"></dd>
                </dl>
                <dl>
                    <dt>感想</dt>
                    <dd>
                        <textarea type="text" name="message" cols="60" rows="10"></textarea>
                    </dd>
                </dl>
                <dl>
                    <dd class="submit_btn">
                        <input type="hidden" name="animal" value="{{$question_answer}}">
                        <input type="submit" value="送信">
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