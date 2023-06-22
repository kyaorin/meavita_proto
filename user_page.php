<?php

// var_dump($_POST);
// exit();

$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$profession = $_POST["profession"];
$child = $_POST["child"];
$find = $_POST["find"];
$worry = $_POST["worry"];
$limit = $_POST["limit"];
$service = $_POST["service"];

session_start();
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["age"] = $age;
$_SESSION["profession"] = $profession;
$_SESSION["child"] = $child;
$_SESSION["find"] = $find;
$_SESSION["worry"] = $worry;
$_SESSION["limit"] = $limit;
$_SESSION["service"] = $service;

// echo $name;
// echo $email;
// echo $age;
// echo $profession;
// echo $child;
// echo $find;
// echo $worry;
// echo $limit;
// echo $service;

?>

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
        <h2><?= $name ?>さんのキャリアノート</h2>
        <div class="user_wrapper" id="user_wrapper">
            <button class="logout" id="logout">ログアウト</button>
            <a href="user_info.php"><button class="userinfo" id="userinfo">会員情報</button></a>
        </div>
    </header>
    <main>
        <div class="button_row_1">
            <img id="lifeplan" src="img/career_top.png" alt="キャリアの棚卸ワーク">
            <img id="lifeplan" src="img/bemyself_top.png" alt="自分らしさ図解ワーク">
            <img id="lifeplan" src="img/lifeplan_top.png" alt="ライフプラン表">
        </div>
        <div class="button_row_2">
            <img id="book" src="img/book_top.png" alt="人生に影響を与えた本たち">
            <img id="QA" src="img/QA_top.png" alt="１日１問">
            <img id="word" src="img/word_top.png" alt="心を動かす名言集">
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
        //////////////////////////////////////////////////////////////////
        ///人生に影響を与えた本にマウスを合わせるとクリック画像と切り替わる///// 
        //////////////////////////////////////////////////////////////////

        $(document).ready(function() {
            let clicked = false;

            $("#book").click(function() {
                clicked = true;
            });

            $("#book").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/click.png");
                    }
                },
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/book_top.png");
                    }
                }
            );
        });

        ////////////////////////////////////////////////
        ///// 人生に影響を与えた本と名言をランダム表示する/////
        ////////////////////////////////////////////////


        $(document).ready(function() {
            $("#book").click(function() {
                const min = 1;
                const max = 17;
                const num = Math.floor(Math.random() * (max - min + 1)) + min;

                const newSrc = "img/book_" + num + ".png";
                $("#book").attr("src", newSrc);
            });
        });

        ///////////////////////////////////////////////////
        ///１日１問にマウスを合わせるとクリック画像と切り替わるが
        ///一度クリックすると表示された画像が出続ける///// 
        ///////////////////////////////////////////////////

        $(document).ready(function() {
            let clicked = false;

            $("#QA").click(function() {
                clicked = true;
            });

            $("#QA").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/today_QA.png");
                    }
                },
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/QA_top.png");
                    }
                }
            );
        });


        ////////////////////////////////////////////////
        ///// 1日１問、人生を変える質問をランダム表示する/////
        ////////////////////////////////////////////////

        $(document).ready(function() {
            $("#QA").click(function() {
                const min = 1;
                const max = 10;
                const num = Math.floor(Math.random() * (max - min + 1)) + min;

                const newSrc = "img/QA_" + num + ".png";
                $("#QA").attr("src", newSrc);
            });
        });

        //////////////////////////////////////////////////////////////////
        ///名言集にマウスを合わせるとクリック画像と切り替わる///// 
        //////////////////////////////////////////////////////////////////

        $(document).ready(function() {
            let clicked = false;

            $("#word").click(function() {
                clicked = true;
            });

            $("#word").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/click.png");
                    }
                },
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/word_top.png");
                    }
                }
            );
        });

        ////////////////////////////////////////////////
        ///// 名言をランダム表示する/////
        ////////////////////////////////////////////////


        $(document).ready(function() {
            $("#word").click(function() {
                const min = 1;
                const max = 43;
                const num = Math.floor(Math.random() * (max - min + 1)) + min;

                const newSrc = "img/word_" + num + ".png";
                $("#word").attr("src", newSrc);
            });
        });
    </script>

</body>

</html>