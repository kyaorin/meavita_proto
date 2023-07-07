<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/userpage.css" />
    <title>会員専用ページ</title>
</head>

<style>
    .user_wrapper img {
        width: 60px;
        height: 60px;
    }

    .button_row_1 {
        margin-bottom: 40px;
    }

    .footer {
        margin-top: 120px;
    }
</style>

<body>

    <header>
        <h2>ようこそ〇〇さん</h2>
        <nav class="user_wrapper" id="user_wrapper">
            マイアカウント<a href="register_read.php"><img src="img/my_acount.png" alt="マイアカウント"></a>
            お気に入りサポーター<img src="img/favorite_supporter.png" alt="お気に入りサポーター">
            セッション履歴<img src="img/session_record.png" alt="セッション履歴">
            <!-- <button class="logout" id="logout">ログアウト</button> -->
        </nav>
    </header>
    <main>
        <div class="button_row_2">
            <a href="https://voicy.jp/channel/2571" target="_blank"><img id="voicy" src="img/voicy.png" alt="Voicy"></a>
            <img id="lifeplan" src="img/test.png" alt="診断テスト">
            <img id="lifeplan" src="img/movie_program.png" alt="動画プログラム">
        </div>
        <div class="button_row_1">
            <img id="lifeplan" src="img/7_hints.png" alt="7つのヒント">
            <img id="book" src="img/book_top.png" alt="人生に影響を与えた本たち">
            <img id="word" src="img/word_top.png" alt="視点が変わる名言集">
        </div>

        <div class="user_wrapper">
            <h3>お気に入りサポーター</h3>
        </div>
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
        ///Voicyにマウスを合わせるとクリック画像と切り替わる/////
        //////////////////////////////////////////////////////////////////

        $(document).ready(function() {
            let clicked = false;

            $("#voicy").click(function() {
                clicked = true;
            });

            $("#voicy").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/click.png");
                    }
                },
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/voicy.png");
                    }
                }
            );
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