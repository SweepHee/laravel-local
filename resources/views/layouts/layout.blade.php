<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>동아대학교 발전기금 | @yield("title", "main")</title>
    <script src="/lib/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    @stack("scripts")
</head>
<body>

<div id="app">
    <nav id="nav">
        <div class="nav-in">
            <div>
                <img src="/img/logo.png" alt="">
            </div>
            <div class="center-menus">
                <ul class="dis-ib ">
                    <li><a href="#">기부 프로그램</a></li>
                    <li><a href="#">기부유형</a></li>
                    <li><a href="#">기부자 라운지</a></li>
                </ul>
            </div>
            <div>
                <ul class="right-menus dis-ib">
                    <li class="swp-b-right-1"><a href="#">협정체결 기관</a></li>
                    <li><a href="#">후원의 집</a></li>
                    <li><a href="#" class="btn-orange-gradient">기부하기</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="main">
        @yield("content")
    </main>

    <footer>
        <div class="footer-in">
            <div class="container dis-flex-bet">
                <div>
                    <p>동아대학교는 법인세법 제24조, 동법시행령 제38조에 따른 법정기부금 단체입니다.</p>
                    <table>
                        <tr>
                            <th>바로가기</th>
                            <td>
                                <ul class="dis-ib">
                                    <li>약정서 다운로드</li>
                                    <li>모금아이디어 제안</li>
                                    <li>내 주소 변경하기</li>
                                    <li>담당자 안내</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div></div>
            </div>
        </div>
    </footer>

    <style>
        footer .footer-in {

        }
    </style>

</div>
</body>
</html>