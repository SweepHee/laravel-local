@extends("layouts/layout")

@section("title")
    메인
@endsection

@push("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <link rel="stylesheet" href="/lib/slick/slick-theme.min.css">
@endpush

@section("content")

    <section class="main-top">
        <div class="main-head__text">
            <img src="/img/main_text.png" alt="">
        </div>
        <div class="top-slick">
            <div class="slick-background">
                <div class="slick1"></div>
            </div>
            <div class="slick-background ">
                <div class="slick2"></div>
            </div>
            <div class="slick-background">
                <div class="slick3"></div>
            </div>
            <div class="slick-background">
                <div class="slick4"></div>
            </div>
        </div>
        <div class="main-head__selector">
            <div class="selector-in">
                <form action="">
                    <input type="hidden">
                    <ul class="dis-ib">
                        <li><button type="button" class="on">1만원</button></li>
                        <li><button type="button">5만원</button></li>
                        <li><button type="button">10만원</button></li>
                        <li><input type="text" placeholder="직접입력"></li>
                    </ul>
                    <button class="btn-submit-orange">기부하기</button>
                </form>
            </div>
        </div>
    </section> <!-- main-top end -->

    <section class="main-content">
        <div class="container">

            <div class="content1 box-shadow-1">
                <ul class="dis-ib">
                    <li>
                        <div class="img-wrap type-interview">
                            <img src="/img/thumb_example1.png" alt="" >
                        </div>
                        <div class="text-wrap">
                            김영식 (재)세자녀출산지원재단 이사장 '동아 100년 동행' 발전...
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap type-interview">
                            <img src="/img/thumb_example1.png" alt="" >
                        </div>
                        <div class="text-wrap">
                            김영식 (재)세자녀출산지원재단 이사장 '동아 100년 동행' 발전...
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap type-interview">
                            <img src="/img/thumb_example1.png" alt="" >
                        </div>
                        <div class="text-wrap">
                            김영식 (재)세자녀출산지원재단 이사장 '동아 100년 동행' 발전...
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap type-interview">
                            <img src="/img/thumb_example1.png" alt="" >
                        </div>
                        <div class="text-wrap">
                            김영식 (재)세자녀출산지원재단 이사장 '동아 100년 동행' 발전...
                        </div>
                    </li>
                </ul>
            </div>

            <div class="content2 m-top-30">

                <div class="box-wrap dis-flex-bet">

                    <div class="box box1 box-shadow-1">
                        <div class="box-head over-hidden">
                            기부현황 <small>(2018년 12월 기준)</small>
                            <div class="float-right">
                                <a href=""><img src="/img/btn_plus_blue.png" alt=""></a>
                            </div>
                        </div>

                        <div class="box-content">
                            <ul class="dis-ib dis-flex-bet">
                                <li>
                                    <img src="/img/main_box_icon1.png" alt="기부현황">
                                </li>
                                <li>
                                    <div>총 납입액</div>
                                    <div><strong class="blue">536</strong> 억원</div>
                                </li>
                                <li>
                                    <img src="/img/main_box_icon2.png" alt="총 납입건수">
                                </li>
                                <li>
                                    <div>총 납입건수</div>
                                    <div><strong class="orange">20,227</strong> 건</div>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="box box2 box-shadow-1">
                        <div class="box-head">
                            이달의 발전 기금 기부자 명단
                        </div>
                        <div class="box-content">
                            <pre>
김수현  김은진  김은희  김주영  김주찬  김지현  김치완  김치완
김태윤  김태정  김현진  남상돌  노유정  류지웅  문아람  김치완
김수현  김은진  김은희  김주영  김주찬  김지현  김치완  김치완
김태윤  김태정  김현진  남상돌  노유정  류지웅  문아람  김치완
김수현  김은진  김은희  김주영  김주찬  김지현  김치완  김치완
                            </pre>
                        </div>
                    </div>

                </div>

            </div>

            <div class="content3 m-top-30 box-shadow-1">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/v-yeh-EIjWA" title="YouTube video player" style="border-radius: 10px;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="content4 m-top-30">
                <div class="box-wrap">
                    <ul class="dis-flex-bet">
                        <li class="box-shadow-1">
                            <img src="/img/main_content4_image1.png" alt="">
                            <div class="text-wrap">
                                <strong>동아 100년동행</strong>
                                <p>
                                    동아대학교의 경쟁력 있는 100주년을
                                    맞이하기 위해 대학 구성원과 20만 동문이
                                    참여하는 캠페인
                                </p>
                            </div>
                        </li>
                        <li class="box-shadow-1">
                            <img src="/img/main_content4_image1.png" alt="">
                            <div class="text-wrap">
                                <strong>동아 100년동행</strong>
                                <p>
                                    동아대학교의 경쟁력 있는 100주년을
                                    맞이하기 위해 대학 구성원과 20만 동문이
                                    참여하는 캠페인
                                </p>
                            </div>
                        </li>
                        <li class="box-shadow-1">
                            <img src="/img/main_content4_image1.png" alt="">
                            <div class="text-wrap">
                                <strong>동아 100년동행</strong>
                                <p>
                                    동아대학교의 경쟁력 있는 100주년을
                                    맞이하기 위해 대학 구성원과 20만 동문이
                                    참여하는 캠페인
                                </p>
                            </div>
                        </li>
                        <li class="box-shadow-1">
                            <img src="/img/main_content4_image1.png" alt="">
                            <div class="text-wrap">
                                <strong>동아 100년동행</strong>
                                <p>
                                    동아대학교의 경쟁력 있는 100주년을
                                    맞이하기 위해 대학 구성원과 20만 동문이
                                    참여하는 캠페인
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content5 m-top-40 box-shadow-1">
                <ul class="dis-flex-bet">
                    <li>
                        <a href="">
                            <img src="/img/main_bottom_icon1.png" alt="동아는 지금">
                            <span>동아는 지금</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/img/main_bottom_icon2.png" alt="기부자 예우">
                            <span>기부자 예우</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/img/main_bottom_icon3.png" alt="세제혜택">
                            <span>세제혜택</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/img/main_bottom_icon4.png" alt="모금현황">
                            <span>모금현황</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/img/main_bottom_icon5.png" alt="기부내역">
                            <span>기부내역</span>
                        </a>
                    </li>
                    <li class="non">
                        <a href="">
                            <img src="/img/main_bottom_icon6.png" alt="영수증 발급">
                            <span>영수증 발급</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </section>

    <style>

        body {
            background-color: #ebebeb;
        }

    </style>

    <script>

        $(document).ready(function () {

            // $('.top-slick').slick('setPosition');
            // $('.top-slick').slick('refresh');

            $('.top-slick').slick({
                dots: true,
                infinite: true,
                speed: 1000,
                fade: true,
                cssEase: 'linear',
                autoplay:true,
                arrows: false,
            });

        });

    </script>
@endsection