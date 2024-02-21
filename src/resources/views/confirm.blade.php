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
        <form class="form" action="/thanks/" method="get">
            @csrf
            <div class="form_main">
                <table class="form_table" border="1">
                    <tr>
                        <th>お名前<span>※</span></th>
                        <td>
                            <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                            <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
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
                            性別<span></span>
                        </th>
                        <td>
                            <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                        </td>
                    </tr>

                    <tr>
                        <th>
                            メールアドレス<span></span>
                        </th>
                        <td>
                            <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                        </td>
                    </tr>
                    <!-- <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div> -->

                    <tr>
                        <th>電話番号<span></span></th>
                        <td><input type="tel" name="tell" value="{{ $contact['tell'] }}" readonly /></td>
                    </tr>
                    <!-- <div class="form__error">
                        @error('tel')
                        {{ $message }}
                        @enderror -->

                    <tr>
                        <th>住所<span></span></th>
                        <td><input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                        </td>
                    </tr>

                    <!-- <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div> -->
                    <tr>
                        <th>建物名</th>
                        <td>
                            <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                        </td>
                    </tr>

                    <tr>
                        <th>お問い合わせの種類<span></span></th>
                        <td>
                            <input type="text" name="category_ID" value="{{ $contact['category_ID'] }}" readonly />
                        </td>
                    </tr>
                    <!-- <div class="form__error">
                        @error('inqcate')
                        {{ $message }}
                        @enderror -->
            </div>
            <tr>
                <th>お問い合わせ内容<span>※</span></th>
                <td>
                    <textarea name="detail" cols="50" rows="5" readonly>{{ $contact['detail']}}</textarea>
                </td>
            </tr>
            <!-- <div class="form__error">
                @error('detail')
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