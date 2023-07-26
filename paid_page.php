<?php
session_start();
include('functions.php');
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/userpage.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>有料会員専用ページ</title>
</head>

<style>
    .user_wrapper img {
        width: 60px;
        height: 60px;
    }

    .user_name {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin: 40px 0;
    }

    .button_row_1 {
        margin-bottom: 30px;
    }

    .button_row_2 img {
        width: 330px;
        height: 230px;
        padding: 0 10px;
    }

    .button_row_3 img {
        width: 300px;
        height: 300px;

    }

    .logout {
        text-align: center;
    }

    #logout {
        width: 100px;
        height: 28px;
        border: 0.1px solid gray;
        margin-bottom: 20px;
    }

    .plan_wrapper {
        margin-top: 90px;
        margin-bottom: 40px;
        text-align: center;
        font-weight: bold;
    }

    .support_plan {
        font-size: 1.4em;
        /* 1emより一回り大きくする */

    }

    .plan_logo {
        display: flex;
        align-items: center;
    }

    .footer {
        margin-top: 120px;
    }
</style>

<body>

    <header>
        <p class="user_name"><?= $_SESSION['u_name'] ?> さんのキャリアNaviページ</p>
        <nav class="user_wrapper" id="user_wrapper">
            マイアカウント<a href="register_read.php"><img id="my_account" src="img/my_account.png" alt="マイアカウント"></a>
            おすすめサポーター<a href=""><img id="recommend_supporter" src="img/recommend_supporter.png" alt="お気に入りサポーター"></a>
            セッション履歴<a href="session_input.php"><img id="session_record" src="img/session_record.png" alt="セッション履歴"></a>
        </nav>

        <div class="logout">
            <a href="logout.php"><button id="logout">ログアウト</button></a>
        </div>
    </header>
    <main>
        <div class="button_row_1">
            <img id="career_test" src="img/career_top.png" alt="キャリアの棚卸し">
            <img id="free_session" src="img/bemyself_job.png" alt="自分らしい仕事">
            <img id="vision_board" src="img/vision_board.png" alt="ビジョンボード">

        </div>
        <!-- <div class="button_row_1">
            <a href="https://voicy.jp/channel/2571" target="_blank"><img id="voicy" src="img/voicy.png" alt="Voicy"></a>
            <img id="book" src="img/book_top2.png" alt="おすすめ本たち">
            <img id="word" src="img/word_top.png" alt="視点が変わる名言集">
        </div> -->




    </main>

    <footer class="footer">
        <small class="copyrights">copyrights 2023 meavita All RIghts Reserved.</small>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        ////マイページアイコンの動き////

        $(document).ready(function() {
            let clicked = false;
            $("#my_account").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/my_account2.png");
                    }
                },
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/my_account.png");
                    }
                }
            );
        });

        $(document).ready(function() {
            let clicked = false;
            $("#recommend_supporter").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/recommend_supporter2.png");
                    }
                },
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/recommend_supporter.png");
                    }
                }
            );
        });

        $(document).ready(function() {
            let clicked = false;
            $("#session_record").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/session_record_2.png");
                    }
                },
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/session_record.png");
                    }
                }
            );
        });

        //無料コンテンツの動き//

        //////////////////////////////////////////////////////////////////
        ///①キャリアの棚卸にマウスを合わせるとクリック画像と切り替わる/////
        //////////////////////////////////////////////////////////////////

        $(document).ready(function() {
            let clicked = false;

            $("#career_test").click(function() {
                clicked = true;
                setTimeout(() => {
                    $(this).attr("src", "img/career_top.png");
                    clicked = false;
                }, 100);
            });

            $("#career_test").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/click.png");
                    }
                },
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/career_top.png");
                    }
                }
            );
        });

        //////////////////////////////////////////////////////////////////
        ///②自分らしい仕事にマウスを合わせるとクリック画像と切り替わる/////
        //////////////////////////////////////////////////////////////////

        $(document).ready(function() {
            let clicked = false;

            $("#free_session").click(function() {
                clicked = true;
                setTimeout(() => {
                    $(this).attr("src", "img/bemyself_job.png");
                    clicked = false;
                }, 100);
            });

            $("#free_session").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/click.png");
                    }
                },
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/bemyself_job.png");
                    }
                }
            );
        });

        //////////////////////////////////////////////////////////////////
        ///③無料キャリア相談にマウスを合わせるとクリック画像と切り替わる/////
        //////////////////////////////////////////////////////////////////

        $(document).ready(function() {
            let clicked = false;

            $("#vision_board").click(function() {
                clicked = true;
                setTimeout(() => {
                    $(this).attr("src", "img/vision_board.png");
                    clicked = false;
                }, 100);
            });

            $("#vision_board").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/click.png");
                    }
                },
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/vision_board.png");
                    }
                }
            );
        });

        //////////////////////////////////////////////////////////////////
        ///④Voicyにマウスを合わせるとクリック画像と切り替わる/////
        //////////////////////////////////////////////////////////////////

        $(document).ready(function() {
            let clicked = false;

            $("#voicy").click(function() {
                clicked = true;
                setTimeout(() => {
                    $(this).attr("src", "img/voicy.png");
                    clicked = false;
                }, 100);
            });

            $("#voicy").hover(
                function() {
                    if (!clicked) {
                        $(this).attr("src", "img/listen.png");
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
                        $(this).attr("src", "img/book_top2.png");
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
    </script>

</body>

</html>