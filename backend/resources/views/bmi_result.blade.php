<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="format-detection" content="telephone=no">

<title>BMI診断 | 診断結果</title>

<link rel="stylesheet" href="/bmi-reset.css">
<link rel="stylesheet" href="/bmi-common.css">
<link rel="stylesheet" href="/bmi-result.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,900|Noto+Serif+JP:400,600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>BMI診断</h1>
    </header>

    <main>
        <h2>診断結果</h2>
        <p>あなたのBMI値は、<span>{{$bmi}}</span>です。</p>
        <div class="message">
            {{$result}}
        </div>
        <a href="/bmi_top" class="back_button_a">
            <div class="back_button">
                戻る
            </div>
        </a>
    </main>
</body>
</html>