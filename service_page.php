<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/userpage.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>プラン紹介ページ</title>
</head>

<style>
    .meavita_logo {
        width: 200px;
        margin-top: 20px;
        margin-left: 100px;

    }

    .plan_text {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        margin-top: 60px;
    }

    .footer {
        margin-top: 200px;
    }
</style>

<body>

    <img class="meavita_logo" src="img/meavita_logo.jpg" alt="ミアビータロゴ">
    <div class="plan_text">
        <h1>キャリアのお悩みを解決したい方には<br>
            <supan class="support_plan">「３つのサポートプラン」</supan>をご用意！
        </h1>
    </div>

    <!--  プラン解説＆プラン  by Tailwind     -->

    <!--  キャリアナビプラン  by Tailwind     -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-9 lg:flex-auto">
                    <div class="plan_logo">
                        <img src="img/plan_basic.png">
                        <h3 class="text-2xl font-bold tracking-tight text-gray-900">　キャリア Navi プラン</h3>
                        <img src="img/vita_chan.png">
                    </div>
                    <p class="mt-6 text-base leading-7 text-gray-600">キャリアNaviプランは、ミアビータのキャラクター”ビータちゃん”の質問に答えるだけで、大切な価値観や強み、今後のキャリアビジョンや行動プランが明確になり、答え探しやキャリア迷子から抜け出せます。さらに、ユーザー同士の「繋がり機能」で、一人じゃないを実感！</p>
                    <div class="mt-8 flex items-center gap-x-4">
                        <h4 class="flex-none text-sm font-semibold leading-6 text-teal-500">What’s included</h4>
                        <div class="h-px flex-auto bg-gray-100"></div>
                    </div>
                    <ul role="list" class="mt-6 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-2">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            キャリアNavi専用ページ
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            価値観・強み・自分軸発掘ワーク
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            キャリアビジョンボード
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            目標達成＆振り返りシート
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            仕事や子育てのつぶやき機能
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            情報交換の掲示板
                        </li>
                    </ul>
                </div>
                <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                    <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                        <div class="mx-auto max-w-xs px-8">
                            <p class="text-base font-semibold text-gray-600">月額</p>
                            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                <span class="text-5xl font-bold tracking-tight text-gray-900">1,980</span>
                                <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">yen</span>
                            </p>
                            <a href="#" class="mt-10 block w-full rounded-md bg-teal-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-500">もっと詳細をみる</a>
                            <p class="mt-6 text-xs leading-5 text-gray-600">自己啓発本の代わりに利用することで、答え探しやキャリア迷子から抜け出せます。料金は税込価格。解約はいつでも可能です。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  コミュニティ  by Tailwind     -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-9 lg:flex-auto">
                    <div class="plan_logo">
                        <img src="img/plan_standard.png">
                        <h3 class="text-2xl font-bold tracking-tight text-gray-900">　コミュニティプラン（キャリアNavi付き）</h3>
                    </div>
                    <p class="mt-6 text-base leading-7 text-gray-600">コミュニティプランは、キャリアNaviプランに加え、同じようなキャリアの悩みや目標を持つ仲間と一緒に毎月、「学び」「交流」「挑戦」することで、一人では気付けない自分らしさを発見！ありのままの自分で、理想のキャリアに向かって行動し続けられる環境が手に入ります。</p>
                    <div class="mt-8 flex items-center gap-x-4">
                        <h4 class="flex-none text-sm font-semibold leading-6 text-teal-500">What’s included</h4>
                        <div class="h-px flex-auto bg-gray-100"></div>
                    </div>
                    <ul role="list" class="mt-6 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-2">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            キャリアNaviプランのすべて
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            月１オンラインワークショップ
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            メンバー交流会＋オフ会
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            部活動（朝活、ハッシン部、ドリカム部など）
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            初めの一歩を踏み出す挑戦の場
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            ミアビータのプロジェクトに参加
                        </li>
                    </ul>
                </div>
                <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                    <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                        <div class="mx-auto max-w-xs px-8">
                            <p class="text-base font-semibold text-gray-600">月額</p>
                            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                <span class="text-5xl font-bold tracking-tight text-gray-900">3,980</span>
                                <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">yen</span>
                            </p>
                            <a href="#" class="mt-10 block w-full rounded-md bg-teal-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-500">もっと詳細をみる</a>
                            <p class="mt-6 text-xs leading-5 text-gray-600">料金以上の価値が得られると好評のミアビータ人気のプラン！料金は税込価格。<br>こちらは、12月/6月の年２回のみ募集。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  個別サポート  by Tailwind     -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-9 lg:flex-auto">
                    <div class="plan_logo">
                        <img src="img/plan_premium.png">
                        <h3 class="text-2xl font-bold tracking-tight text-gray-900"><img src="">　個別サポートプラン</h3>
                    </div>
                    <p class="mt-6 text-base leading-7 text-gray-600">個別サポートプランは、厳選されたキャリア支援の専門家が、あなたのキャリアの悩みにしっかり寄り添うマンツーマンサポート！転職、起業・複業、子育て、お金など、キャリアに関する悩みについて経験を積んだ専門家の伴走によって、より早く・確実に人生を変えていけます。
                    </p>
                    <div class="mt-8 flex items-center gap-x-4">
                        <h4 class="flex-none text-sm font-semibold leading-6 text-teal-500">What’s included</h4>
                        <div class="h-px flex-auto bg-gray-100"></div>
                    </div>
                    <ul role="list" class="mt-6 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-2">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            専門家による個別セッション
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            セッションフィードバック
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            転職相談
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            起業・複業の相談
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            子育て相談
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-teal-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            お金の相談
                        </li>
                    </ul>
                </div>
                <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                    <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                        <div class="mx-auto max-w-xs px-8">
                            <p class="text-base font-semibold text-gray-600">初回割引あります！</p>
                            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                <span class="text-5xl font-bold tracking-tight text-gray-900">9,800</span>
                                <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">yen 〜</span>
                            </p>
                            <a href="#" class="mt-10 block w-full rounded-md bg-teal-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-500">もっと詳細をみる</a>
                            <p class="mt-6 text-xs leading-5 text-gray-600">あなたのお悩みや状況に合った専門家をご紹介します。料金は税込価格。専門家によって料金が異なります。解約はいつでも可能です。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </main>

    <footer class="footer">
        <small class="copyrights">copyrights 2023 meavita All RIghts Reserved.</small>
    </footer>

</body>

</html>