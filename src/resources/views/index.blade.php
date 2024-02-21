<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('css/reset.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
            <h2>Contact</h2>
        </div>
        <form class="form" action="/confirm" method="post">
            @csrf
            <div class="form_main">
                <p>お名前<span>※</span>
                    <input type="text" name="first_name" placeholder="例：山田" value="{{ old('first_name') }}" />
                    <input type="text" name="last_name" placeholder="例：太郎" value="{{ old('last_name') }}" />
                </p>
                <div class="form__error">
                    @error('first_name')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form__error">
                    @error('last_name')
                    {{ $message }}
                    @enderror
                </div>
                <p>性別<span>※</span>
                    <input type="radio" name="gender" value="男性" checked="checked">男性
                    <input type="radio" name="gender" value="女性">女性
                    <input type="radio" name="gender" value="その他">その他
                </p>
                </p>
                <p>メールアドレス<span>※</span>
                    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                </p>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>

                <p>電話番号<span>※</span>
                    <input type="tel" name="tell" placeholder="080-1234-5678" value="{{ old('tell') }}" />
                </p>
                <div class="form__error">
                    @error('tell')
                    {{ $message }}
                    @enderror
                </div>
                <p>住所<span>※</span>
                    <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷２−3" value="{{ old('address') }}" />
                </p>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>

                <p>建物名
                    <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}" />
                </p>

                <p>お問い合わせの種類<span>※</span>
                    <input type="text" name="category_ID" placeholder="例：" value="{{ old('category_ID') }}" />
                </p>

                <div class="form__error">
                    @error('category_ID')
                    {{ $message }}
                    @enderror
                </div>
                <p>お問い合わせ内容<span>※</span>
                    <textarea name="detail" cols="50" rows="5" placeholder="問い合わせ内容を入力ください" value="{{ old('detail') }}"></textarea>
                </p>

                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>





                <div class="form_btn">
                    <input type="submit" value="確認画面" />
                </div>

        </form>

    </main>
</body>

</html>