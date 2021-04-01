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

<style>

    .page-toast {
        width: 100%;
        position: fixed;
        top: 98%;
        z-index: 9999;
        transition: 0.7s;
    }
    .page-toast-in {
        width: 1380px;
        height: 100px;
        border-radius: 10px 10px 0 0;
        background-color: #3d3d3d;
        margin: 0 auto;
        padding: 40px;
    }

    .page-toast-in .toast-head {
        float: right;
        position: relative;
        top: -15px;
    }

    .page-toast-in .toast-head button {
        background-color: transparent;
        color: #ffffff;
        border: none;
    }

    .page-toast-in table {
        font-family: "paybooc-Bold";
        font-size: 17px;
        color: #ffffff;
    }


    .page-toast-in table tr th {
        width: 100px;
        color: #f36f21;
    }

    .page-toast-in table tr th img {
        margin-right: 5px;
    }

</style>

<div class="page-toast">
    <div class="page-toast-in">
        <div class="toast-head">
            <button type="button" class="toast-close">
                <img src="/img/icon_close_white.png" alt="닫기">
            </button>
        </div>
        <table>
            <tr>
                <th>
                    <img src="/img/icon_alert.png" alt="알림"> <span>알림.</span>
                </th>
                <td>
                    동아대 경영대학, ‘다우이스트 고액 릴레이 기부자 핸드프린팅 전달식’ 개최
                </td>
            </tr>
        </table>
    </div>
</div>

<div id="app">
    <nav id="nav">
        <div class="nav-in">
            <div>
                <img src="/img/logo.png" alt="" class="logo-white">
                <img src="/img/logo_black.png" alt="" class="logo-black">
            </div>
            <div class="center-menus">
                <ul class="menu dis-ib">
                    <li>
                        <a href="#">기부 프로그램</a>
                        <div class="sub-menus-wrap">
                            <ul class="sub-menus dis-ib">
                                <li>
                                    <a href="#">대학발전 전반 지원</a>
                                </li>
                                <li>
                                    <a href="#">주요 캠페인 지원</a>
                                </li>
                                <li>
                                    <a href="#">학생 지원</a>
                                </li>
                                <li>
                                    <a href="#">연구 지원</a>
                                </li>
                                <li>
                                    <a href="#">단과대/학과 지원</a>
                                </li>
                                <li>
                                    <a href="#">대학생활 지원</a>
                                </li>
                            </ul>
                            <div class="sub-menu-announce">
                                <img src="/img/icon_donation.png" alt="기부">
                                <span>기부자님들에게 감사하는 마음을 담아 다양한 혜택을 전합니다</span> <strong class="fc-orange">‘세제혜택 바로가기’</strong>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">기부유형</a>
                        <div class="sub-menus-wrap sub-menus-large">
                            <div>
                                <table>
                                    <tr>
                                        <th>일시기부</th>
                                        <td class="tb01">
                                            <a href="">현금</a>
                                        </td>
                                        <td class="tb02">
                                            <a href="">신용카드</a>
                                        </td>
                                        <td class="tb03">
                                            <a href="">카카오페이</a>
                                        </td>
                                        <td>
                                            <a href="">네이버페이</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>정기기부</th>
                                        <td class="tb01">
                                            <a href="#">자동이체</a>
                                        </td>
                                        <td class="tb02">
                                            <a href="#">카드 정기결제</a>
                                        </td>
                                        <td class="tb03">
                                            <a href="#">카카오페이</a>
                                        </td>
                                        <td class="tb03">
                                            <a href="#">네이버페이</a>
                                        </td>
                                        <td>
                                            <a href="#">급여공제</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>기타기부</th>
                                        <td class="tb01">
                                            <a href="#">부산은행 모바일뱅킹</a>
                                        </td>
                                        <td class="tb02">
                                            <a href="#">현물</a>
                                        </td>
                                        <td class="tb03">
                                            <a href="#">증권</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">기부자 라운지</a>
                        <div class="sub-menus-wrap">
                            <ul class="sub-menus dis-ib">
                                <li>
                                    <a href="#">기부소식</a>
                                </li>
                                <li>
                                    <a href="#">명예의 전당</a>
                                </li>
                                <li>
                                    <a href="#">기부자 예우</a>
                                </li>
                                <li>
                                    <a href="#">기부내역 조회</a>
                                </li>
                                <li>
                                    <a href="#">기부금 영수증 발급</a>
                                </li>
                                <li>
                                    <a href="#">연차보고서</a>
                                </li>
                                <li>
                                    <a href="#">모금현황</a>
                                </li>
                            </ul>
                            <div class="sub-menu-announce">
                                <img src="/img/icon_donation.png" alt="기부">
                                <span>기부자님들에게 감사하는 마음을 담아 다양한 혜택을 전합니다</span> <strong class="fc-orange">‘세제혜택 바로가기’</strong>
                            </div>
                        </div>
                    </li>
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

    <main id="main" class="m-bottom-40">
        @yield("content")
    </main>

    <footer>
        <div class="footer-in">
            <div class="container dis-flex-bet">
                <div>
                    <p class="footer-desc m-bottom-10">동아대학교는 법인세법 제24조, 동법시행령 제38조에 따른 법정기부금 단체입니다.</p>
                    <table class="links">
                        <tr>
                            <th>바로가기</th>
                            <td>
                                <ul class="dis-ib">
                                    <li>약정서 다운로드 <img src="/img/icon_file.png" alt="약정서 다운로드"></li>
                                    <li>모금아이디어 제안</li>
                                    <li>내 주소 변경하기</li>
                                    <li class="none">담당자 안내</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>관련사이트</th>
                            <td>
                                <ul class="dis-ib">
                                    <li><a href="#">동아대학교</a></li>
                                    <li><a href="#">동아대학교병원</a></li>
                                    <li><a href="#">동아대학교대신요양병원</a></li>
                                    <li class="none"><a href="#">동아대학교총동문회</a></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="footer-announce">
                        <tr>
                            <td class="long">
                                <p>계좌안내
                                    <span>(동아대학교 발전기금)</span>
                                </p>
                            </td>
                            <td>
                                입금확인/기부문의
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/img/logo_busan_bank.png" alt="부산은행"> 029-01-027227-1
                            </td>
                            <td>
                                <img src="/img/icon_tel_blue.png" alt="전화번호"> 051-200-6012
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/img/logo_nh_bank.png" alt="농협은행"> 944-17-004326
                            </td>
                            <td>
                                <img src="/img/icon_fax_blue.png" alt="팩스번호"> 051-200-6015
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="m-top-40"></div>

            <div class="container dis-flex-bet">
                <div>
                    <table>
                        <tr>
                            <td rowspan="2" class="footer-logo">
                                <img src="/img/logo_footer.png" alt="로고">
                            </td>
                            <td class="">
                                총장 <strong>이 해 우</strong> 대학본부 <strong>부산광역시 사하구 낙동대로 550번길 37</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                대표전화 <strong>051-200-6114</strong> 사업자등록번호 <strong>603-82-01274</strong>
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <img src="/img/icon_kakaotalk.png" alt="카카오톡">
                    <img src="/img/icon_mail.png" alt="카카오톡">
                </div>
            </div>

        </div>
    </footer>

    <script src="/js/app.js"></script>
</div>
</body>
</html>