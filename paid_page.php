<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/userpage.css" />
    <title>会員専用ページ</title>
</head>


<body>

    <header>


    </header>
    <main>
        <div class="button_row_1">
            <a href="https://voicy.jp/channel/2571" target="_blank"><img id="voicy" src="img/voicy.png" alt="Voicy"></a>
            <img id="book" src="img/book_top.png" alt="人生に影響を与えた本たち">
            <img id="word" src="img/word_top.png" alt="視点が変わる名言集">
        </div>

        <h2 class="record_title">《今日の記録》</h2>
        <p class="record_txt">今日の問いに対する答え、今の気持ち、モヤモヤ、悩みなどを毎日記録しよう！</p>
        <form action="record_txt_create.php" method="POST">
            <div>
                日付: <input type="date" name="input_date">
            </div>
            <div>
                <input type="textarea" name="memo">
            </div>
            <div>
                <button class="record">保存</button>
            </div>
        </form>

        <!-- 振り返りシートダウンロード -->
        <a href="record_txt_read.php"><button class="dl" id="dl">記録の一覧画面</button></a>

    </main>

    <footer class="footer">
        <small class="copyrights">copyrights 2023 meavita All RIghts Reserved.</small>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        //ログアウト処理//
        $("#logout").on("click", function() {
            location.href = "login.php"
        });
    </script>

</body>

</html>