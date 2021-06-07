<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="format-detection" content="telephone=no">

<title>BMI診断 | トップ</title>

<link rel="stylesheet" href="/bmi-reset.css">
<link rel="stylesheet" href="/bmi-common.css">
<link rel="stylesheet" href="/bmi-top.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,900|Noto+Serif+JP:400,600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>BMI診断</h1>
    </header>

    <main>
        <h2>体重・身長を入力してください。</h2>
            <div class="form_div">
                <form action="{{ route('bmi_result') }}" method="post">
                @csrf
                    <dl>
                        <dt>体重 </dt>
                        <dd><input type="text" name="body_weight" value=""><span>kg</span></dd>
                    </dl>
                    <dl>
                        <dt>身長</dt>
                        <dd>
                            <input type="text" name="body_height" value=""><span>m</span>
                            <p class="caution">センチではなくメートル単位で入力してください。<br>例：170cmの場合は、「1.7」と入力</p>
                        </dd>
                    </dl>
                    <dl>
                        <dd>
                            <input type="submit" value="診断">
                        </dd>
                    </dl>
                </form>
            </div>
    </main>
</body>
</html>