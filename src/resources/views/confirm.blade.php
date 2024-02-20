<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('css/reset.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
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
            <h2>Confirm</h2>
        </div>
        <form class="form" action="/register/registerthanks/" method="get">
            @csrf
            <div class="form_main">
                <table class="form_table"  border="1">
                    <tr>
                        <th>お名前<span>※</span></th>
                        <td>
                            <input type="text" name="first_name" placeholder="例：山田" value="{{ old('first_name') }}" />
                            <input type="text" name="last_name" placeholder="例：太郎" value="{{ old('last_name') }}" />
                        </td>
                    </tr>
                    <!-- <div class="form__error">
                        @error('first_name')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form__error">
                        @error('last_name')
                        {{ $message }}
                        @enderror
                    </div> -->
                    <tr>
                        <th>
                            性別<span>※</span>
                        </th>
                        <td>
                            <input type="radio" name="gender" value="1" checked="checked">男性
                            <input type="radio" name="gender" value="2">女性
                            <input type="radio" name="gender" value="3">その他
                        </td>
                    </tr>

                    <tr>
                        <th>
                            メールアドレス<span>※</span>
                        </th>
                        <td>
                            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                        </td>
                    </tr>
                    <!-- <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div> -->

                    <tr>
                        <th>電話番号<span>※</span></th>
                        <td><input type="tel" name="tel" placeholder="080-1234-5678" value="{{ old('tel') }}" /></td>
                    </tr>
                    <!-- <div class="form__error">
                        @error('tel')
                        {{ $message }}
                        @enderror -->

                    <tr>
                        <th>住所<span>※</span></th>
                        <td><input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷２−3" value="{{ old('address') }}" />
                        </td>
                    </tr>

                    <!-- <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div> -->
                    <tr>
                        <th>建物名</th>
                        <td><input type="text" name="bulding" placeholder="例：千駄ヶ谷マンション101" value="{{ old('bulding') }}" /></td>
                    </tr>

                    <tr>
                        <th>お問い合わせの種類<span>※</span></th>
                        <td><input type="text" name="inqcate" placeholder="例：" value="{{ old('inqcate') }}" /></td>
                    </tr>
                    <!-- <div class="form__error">
                        @error('inqcate')
                        {{ $message }}
                        @enderror -->
            </div>
            <tr>
                <th>お問い合わせ内容<span>※</span></th>
                <td>
                    <textarea name="inquire" cols="50" rows="5" placeholder="問い合わせ内容を入力ください" 　value="{{ old('inquire') }}"></textarea>
                </td>
            </tr>
            <!-- <div class="form__error">
                @error('inquire')
                {{ $message }}
                @enderror -->
            </div>
            </table>




            <div class="form_btn">
                <input type="submit" value="送信" />
            </div>

        </form>

    </main>
</body>

</html>