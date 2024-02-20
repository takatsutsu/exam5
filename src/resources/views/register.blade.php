<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('css/reset.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <!--ヘッダ-->
    <!-- <header class="header">
            <div class="header_inner">
                <div class="header_inner_left">
                    FashionablyLate
                </div>
            </div>
        </header> -->
    <header class="header">
        <div class="header_inner">
            <h1 class="header_inner_left">
                FashionablyLate
            </h1>
            <div class="header_inner_right">
                <a href="">ログイン</a>
                <!-- <a href="">事業内容</a>
                    <a href="">採用情報</a>
                    <a href="">お問い合わせ</a> -->
            </div>
        </div>
    </header>

    <main>
        　　<div class="main_head">
            <h2>Register</h2>
        </div>
        <form class="form" action="/register/registerthanks/" method="get">
            @csrf
            <div class="form_main">
                <p>お名前</p>
                <p>
                    <input type="text" name="name" placeholder="例：山田太郎" value="{{ old('name') }}" />
                </p>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
                <p>メールアドレス </p>
                <p>
                    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                </p>
                <p>パスワード</p>
                <p><input type="password" name="password" placeholder="coachtech1106" value="{{ old('password') }}" />
                </p>
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>

                <div class="form_btn">
                    <input type="submit" />
                </div>

        </form>

    </main>
</body>

</html>