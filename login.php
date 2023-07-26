<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>会員ログイン画面</title>
</head>


<body>
    <header class="header__wrapper">
        <img class="logo__img" src="img/meavita_logo.jpg" alt="ミアビータロゴ画像">
        <h1>40代から人生を変える</h1>
        <p class="header__text">キャリア創造サービス</p>
        <ul class="times_text">
            <li class="past">過去</li>
            <li class="present">現在</li>
            <li class="future">未来</li>
        </ul>
        <p class="today_words">Connecting the dots</p>

        <button class="new_register" id="new_register">無料会員登録</button>

        <form action="login_act.php" method="POST">
            <div class="login_wrapper">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="password" placeholder="Password">
                <button class="login" id="login">ログイン</button>
            </div>
        </form>
    </header>

    <style>
        .login {
            display: block;
            margin: auto;
            width: 120px;
            padding: 11px 0;
            color: white;
            font-size: 18px;
            text-align: center;
            border-radius: 4px;
            border-color: #52b4b9;
            background-color: #52b4b9;
        }

        .login_wrapper {
            display: flex;
            margin: auto;
            flex-direction: column;
            gap: 10px;
            width: 250px;
            padding: 15px 0;
        }

        .login_wrapper input[type="text"] {
            height: 30px;
        }
    </style>

    <script>
        //新規登録処理//
        $("#new_register").on("click", function() {
            location.href = "register_input.php"
        });

        //ログイン処理//
        // $("#login").on("click", function() {
        //     location.href = "free_page.php"
        // });
    </script>

</body>

</html>