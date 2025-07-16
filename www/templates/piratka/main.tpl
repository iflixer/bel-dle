<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    {include file="engine/modules/custom_headers.php"}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#0c1016">
    <link rel="shortcut icon" href="{THEME}/images/favicon.svg"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="{THEME}/css/engine.css" type="text/css" rel="stylesheet"/>
    <link href="{THEME}/css/common_c.css?v={cache-id}" type="text/css" rel="stylesheet"/>

    {include file="engine/modules/custom_inject.php?part=head"}

    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script>
        var iurl = window.location.href;
        var tgparam = 'default';
        function redirectIfParameterExists() {
            if (iurl.includes('tgWebAppStartParam=')) {
                tgparam = iurl.split('tgWebAppStartParam=')[1].split('#')[0];
                var refmapping = {
                    '00001': 'adv1',
                    '00002': 'adv2',
                };
                if (refmapping.hasOwnProperty(tgparam)) {
                    var textValue = refmapping[tgparam];
                    gtag('event', textValue, {'event_category': 'Referal program'});
                    tgparam = 'default';
                }
                if(tgparam.startsWith('default')){
                    if(tgparam.startsWith('default__')){
                        gtag('event', 'Referer:' +extractVariable(tgparam), {'event_category': 'Referal program 2'});
                        tgparam = 'default';
                    }
                } else {
                    var newUrl = window.location.protocol + '//' + window.location.host+'/movie/'+tgparam+'.html';
                    window.location.replace(newUrl);
                }
            }
        }
        redirectIfParameterExists();
        function extractVariable(varName) {
            if (varName.startsWith("default__")) {
                return varName.substring(9);
            } else {
                return varName;
            }
        }
    </script>

</head>

<body [available=showfull] id="pmovie"[/available] class="dt-is-active">
{include file="engine/modules/custom_inject.php?part=body_top"}
<script>
    function switchLight() {
        if (localStorage.getItem('theme')) {
            if (localStorage.getItem('theme') === 'light') {
                document.querySelector('body').classList.remove('dt-is-active');
            } else {
                document.querySelector('body').classList.add('dt-is-active');
            }
        }
    }
    switchLight();
</script>
<!--
[not-group=5]
[profile_xfgiven_premium]
[profile_xfgiven_premium_end_soon]
<div class="infobanner notfix endsoon" data-end="[profile_xfvalue_premium_end_soon]">
    <div class="wrapper-container">
        <div class="tbinfo">
            До конца премиум периода осталось дней: [profile_xfvalue_premium_end_soon].  <a href="{profile-link}"> Продлить</a>
        </div>
    </div>
</div>
[/profile_xfgiven_premium_end_soon]
[/profile_xfgiven_premium]

[profile_xfgiven_premium_ended]
<div class="infobanner-spacer"></div>
<div class="infobanner">
    <div class="wrapper-container">
        <div class="tbinfo">
            Премиум период истек.  <a href="{profile-link}#tgpreminfo"> Продлить</a>
        </div>
    </div>
</div>
[/profile_xfgiven_premium_ended]
[/not-group]

[group=5]
<div class="infobanner-spacer"></div>
<div class="infobanner">
    <div class="wrapper-container">
    <div class="tbinfo">
        <span class="js-show-login inbanklink">Зарегистрируйтесь через Telegram</span> и получите бонусы! 30 дней без рекламы!
</div>
</div>
</div>
[/group]
-->

<div class="wrapper brandfull[profile_xfgiven_premium] prem[/profile_xfgiven_premium]">
    <div class="wrapper-container wrapper-main">



        <header class="header d-flex jc-space-between ai-center[not-available=main|cat|showfull] hbg[/not-available]">
            <div class="hlm">
            <a href="/" class="logo header__logo">
                <picture>
                    <source media="(min-width: 1221px)" srcset="{THEME}/images/piratka_new.png?v={cache-id}"/> <!-- DEFAULT big -->
                    <source media="(max-width: 1220px)" srcset="{THEME}/images/piratka_new_small.png?v={cache-id}"/> <!-- small -->
                    <img src="{THEME}/images/piratka_new.png?v={cache-id}" alt="Piratka"/>
                </picture>
            </a>
            [not-available=main]
            [available=showfull]
            {include file="searchblock_type2.tpl"}
            [/available]
            [not-available=showfull]
                <div class="topmenuinternal">{include file="topmenu.tpl"}</div>
            [/not-available]
            [/not-available]
            </div>

            <div class="hlepa">
                [not-group=5]
                [profile_xfgiven_premium]
                <!--<a href="{profile-link}#tgpreminfo" class="headerprem btn">премиум</a>-->
                [/profile_xfgiven_premium]
                [profile_xfgiven_premium_ended]
                <!--<a href="{profile-link}#tgpreminfo" class="headerprem btn expired">продлить<br>премиум</a>-->
                [/profile_xfgiven_premium_ended]
                [/not-group]

                <a href="https://apk.piratka.me" target="_blank" class="apkbutt">Скачать приложение</a>
                <ul class="theme-toggle" title="Сменить цвет дизайна">
                    <li>
                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5898 20.1667C10.3064 20.1667 9.1033 19.9223 7.98038 19.4334C6.85746 18.9445 5.87968 18.2837 5.04705 17.4511C4.21441 16.6184 3.55364 15.6407 3.06475 14.5177C2.57587 13.3948 2.33142 12.1917 2.33142 10.9084C2.33142 8.67782 3.04184 6.7108 4.46267 5.00733C5.8835 3.30386 7.69392 2.24587 9.89392 1.83337C9.61892 3.34587 9.70295 4.824 10.146 6.26775C10.5891 7.7115 11.3529 8.97574 12.4377 10.0605C13.5224 11.1452 14.7866 11.9091 16.2304 12.3521C17.6741 12.7952 19.1523 12.8792 20.6648 12.6042C20.2675 14.8042 19.2134 16.6146 17.5023 18.0355C15.7911 19.4563 13.8203 20.1667 11.5898 20.1667Z" fill="#fff"/>
                        </svg>
                    </li>
                    <li><svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.4981 21.3583L8.42727 18.3333H4.16477V14.0708L1.13977 10.9999L4.16477 7.9291V3.6666H8.42727L11.4981 0.641602L14.5689 3.6666H18.8314V7.9291L21.8564 10.9999L18.8314 14.0708V18.3333H14.5689L11.4981 21.3583ZM11.4981 15.5833C12.7662 15.5833 13.8471 15.1364 14.7408 14.2426C15.6346 13.3489 16.0814 12.268 16.0814 10.9999C16.0814 9.73188 15.6346 8.65098 14.7408 7.75723C13.8471 6.86348 12.7662 6.4166 11.4981 6.4166C10.23 6.4166 9.14915 6.86348 8.2554 7.75723C7.36165 8.65098 6.91477 9.73188 6.91477 10.9999C6.91477 12.268 7.36165 13.3489 8.2554 14.2426C9.14915 15.1364 10.23 15.5833 11.4981 15.5833ZM11.4981 18.7916L13.7898 16.4999H16.9981V13.2916L19.2898 10.9999L16.9981 8.70827V5.49994H13.7898L11.4981 3.20827L9.20644 5.49994H5.9981V8.70827L3.70644 10.9999L5.9981 13.2916V16.4999H9.20644L11.4981 18.7916Z" fill="#fff"/>
                        </svg>
                    </li>
                </ul>
                [group=5]
                <div class="header__btn btn js-show-login"><span>Вход / Регистрация</span></div>
                [/group]
                [not-group=5]
                <div class="header__btn btn js-show-login"><span class="fal fa-cog"></span><span>Кабинет</span></div>
                [/not-group]
                <div class="header__btn-menu d-none js-show-mobile-menu"><span class="fal fa-bars"></span></div>
            </div>
        </header>

        <!-- END HEADER -->
        [available=showfull]
        <div class="fst-menu">
            {include file="topmenu.tpl"}
        </div>
        [/available]


        <div class="content flex-grow-1 cols d-flex">
            [available=main]
            <div class="carouwrap">
                <div class="owl-filter-bar">
                    Новые<span class="mdev">&nbsp;</span>
                    <a href="#" class="item" data-filter="4">фильмы</a>
                    <a href="#" class="item" data-filter="5">сериалы</a>
                    <a href="#" class="item" data-filter="6">мультфильмы</a>
                    <a href="#" class="item" data-filter="7">аниме</a>
                    <a href="#" class="item active" data-filter="all">Все новинки</a>
                </div>
                <div class="slider-box hrse owl-carousel" id="owl-carou">
                    {custom category_root="4" order="collection_order" limit="7" template="custom-top" cache="yes"}
                    {custom category_root="5" order="collection_order" limit="7" template="custom-top" cache="yes"}
                    {custom category_root="6" order="collection_order" limit="7" template="custom-top" cache="yes"}
                    {custom category_root="7" order="collection_order" limit="7" template="custom-top" cache="yes"}
                </div>
                <div id="owlholder" class="filteredslidesholder" style="display: none !important;height:0;overflow:hidden">
                </div>
                <script>
                    const owlraw = document.getElementById('owl-carou');
                    const owlhold = document.getElementById('owlholder');
                    owlhold.innerHTML = owlraw.innerHTML;
                </script>
            </div>
            [/available]
            [available=main|cat]
            {include file="searchblock.tpl"}
            [/available]
        </div>
        [available=main]
        {include file="topmenu.tpl"}
        [/available]


        <div class="content flex-grow-1 cols d-flex">

            <aside class="col-side" style="display: none">
                <div class="side-block js-this-in-mobile-menu">
                    <ul class="side-block__content side-block__menu">
                        <li><a href="#" data-parent="4" class="mparent">Фильмы</a><span class="fal fa-camera-movie" ></span>
                            <ul class="side-block__menu-hidden anim" data-parent="4">
                                <div class="menuback"><span class="fal fa-camera-movie"></span> Фильмы</div>
                                <li><a class="highlight" href="/movies"><b>Все фильмы</b></a></li>
                            </ul>
                        </li>
                        <li><a href="#" data-parent="5" class="mparent">Сериалы</a><span class="fal fa-popcorn"></span>
                            <ul class="side-block__menu-hidden anim" style="top:-51px" data-parent="5">
                                <div class="menuback"><span class="fal fa-popcorn"></span> Сериалы</div>
                                <li><a class="highlight" href="/series"><b>Все сериалы</b></a></li>
                            </ul>
                        </li>
                        <li><a href="#" data-parent="6" class="mparent">Мультфильмы</a><span class="fal fa-smile-beam"></span>
                            <ul class="side-block__menu-hidden anim" style="top:-102px" data-parent="6">
                                <div class="menuback"><span class="fal fa-smile-beam"></span> Мультфильмы</div>
                                <li><a class="highlight" href="/cartoon"><b>Все мультфильмы</b></a></li>
                            </ul>
                        </li>
                        <li><a href="#" data-parent="7" class="mparent">Aниме</a><span class="fal fa-unicorn"></span>
                            <ul class="side-block__menu-hidden anim" style="top:-153px" data-parent="7">
                                <div class="menuback"><span class="fal fa-unicorn"></span> Aниме</div>
                                <li><a class="highlight" href="/anime"><b>Все аниме</b></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="mmbtns">
                    <a class="tgsignupbtn tgbtn" href="https://t.me/piratka_me" target="_blank">Подпишитесь на обновления</a>
                    <a href="/?do=feedback" class="feedback btn">Обратная связь</a>
                    <a href="https://apk.piratka.me" target="_blank" class="apkbutt">Скачать приложение</a>
                </div>
                </div>
            </aside>
            <main class="col-main flex-grow-1[available=main] homecontent[/available]">


                [available=main|cat]{info}[/available]
                [available=main]
                <div class="col-main__cols">
                    <div class="col-main__left">
                        <!-- banner place -->
                        [group=5]
                        <!--  <div class="load_bclass" data-id="160"></div> -->
                        [/group]

                        [not-group=5]
                        [profile_xfgiven_premium_ended]
                     <!--   <div class="load_bclass" data-id="160"></div> -->
                        [/profile_xfgiven_premium_ended]
                        [/not-group]

                        <section class="sect flex-grow-1">
                            <div class="sect__header d-flex">

                                [available=favorites]<h1 class="sect__title flex-grow-1">Ваше избранное</h1>[/available]
                                {* include file="main-filter.tpl" *}
                            </div>
                            <div class="sect__content">
                                <div id="dle-content">
                                    {include file="main-page.tpl"}
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-main__right">

                        <div class="side-block">
                            <a class="tgsignupbtn tgbtn" href="https://t.me/[telegram-bot-name]" target="_blank">Подпишитесь на обновления</a>
                            <div class="upd-box-title">Обновление сериалов</div>
                            <div class="side-block__content">
                                {custom limit="15" category_root="5" template="custom-upd" order="date" cache="yes"}
                            </div>
                        </div>
                        <div class="side-block migrated">
                            <div class="side-block__title">Скоро на сайте</div>
                            <div class="side-block__content d-grid-mob">
                                {custom limit="4" category="902" order="collection_order" template="custom-popular" cache="yes"}
                            </div>
                        </div>
                        <div class="apkwidget">
                            <div class="widgettitle">Пиратка для мобилки</div>
                        <a href="https://apk.piratka.me" target="_blank"class="apkbutt inverse">Скачать приложение</a>
                        </div>
                    </div>

                </div>
                [/available]

                [available=cat|dle_filter]
                <section class="sect sect--padding">
                    <div class="sect__header d-flex ai-center">
                    <h1 class="innercat sect__title flex-grow-1">{include file="engine/modules/custom_seo.php?part=h1"}</h1>
                        {include file="straightfilter.tpl"}
                    </div>
                    <div class="sect__content incat">
                        <div id="dle-content">{content}</div>
                    </div>
                </section>
                [/available]



                [not-available=main|cat|dle_filter]
                <div class="page-padding">
                    {info}
                    <div id="dle-content">{content}</div>
                    [available=showfull]
                    <div class="speedbar ws-nowrap">{speedbar}</div>
                    [/available]
                </div>
                [/not-available]

                <div class="conttext page-padding">
                    {include file="main-seo.tpl"}
                </div>
            </main>

            <!-- END COL MAIN -->

        </div>

        <footer class="footer d-flex ai-center" style="background-image: url({THEME}/images/piratka_new_small.png?v={cache-id}">
            <div class="footer__text flex-grow-1">
                © 2025 | "Piratka" <br>Смотрите новые сериалы и фильмы онлайн.
            </div>
            <div class="footer_btns">
            <a class="tgbtn btn l-light" href="https://t.me/piratka_me" target="_blank">Подпишитесь на обновления</a>
            <a href="/?do=feedback" class="btn l-light feedback">Обратная связь</a>
            <a href="https://apk.piratka.me" target="_blank" class="apkbutt">Скачать APK</a>
            </div>
            <div class="footer__counter pand_foot">

            </div>
        </footer>

        <!-- END FOOTER -->

    </div>

    <!-- END WRAPPER-MAIN -->
    <div id="apkidentitiy" style="display:none;font-size:11px;color:#fff"></div>
    <div id="usercard" style="display:none">
        <p class="username"></p>
        <p class="tgid"></p>
    </div>
</div>


<!-- END WRAPPER -->

{login}
{jsfiles}
<link href="{THEME}/css/fontawesome.css" type="text/css" rel="stylesheet"/>
<script src="{THEME}/js/libs.js?v={cache-id}"></script>
<script src="{THEME}/js/cis.js?v={cache-id}"></script>
{include file="engine/modules/custom_inject.php?part=body_bottom"}

<script>
    var tgid = '000000';
    let tg = window.Telegram.WebApp;
    tg.expand();
    if(tg){
        tgid = tg.initDataUnsafe.user.id;
    }
    let usercard = document.getElementById("usercard");
    let firstname = tg.initDataUnsafe.user.first_name;
    let lastname = tg.initDataUnsafe.user.last_name;
    let tgusername = tg.initDataUnsafe.user.username;
    $('.username').html(firstname+'<br>'+lastname+'<br><b>'+tgusername+'</b>');
    $('.tgid').text(tgid);
    if($('#utgdf').length > 0) {$('#utgdf').val(tgid);}
</script>

<script src="/templates/players/gtevents.js"></script>
<script src="/templates/players/globgtevents.js"></script>
{AJAX}

</body>
[group=5]
<!--<script src="https://res64.traffer.net/code/bload/load_bclass" async ></script>
<script src="https://res35.traffer.net/code/brload/252/load_brclass" async ></script>-->
[/group]
[not-group=5]
[profile_xfgiven_premium_ended]
<!--<script src="https://res64.traffer.net/code/bload/load_bclass" async ></script>
<script src="https://res35.traffer.net/code/brload/252/load_brclass" async ></script>-->
[/profile_xfgiven_premium_ended]
[/not-group]
<!-- branding -->

<link href="{THEME}/css/iuser.css?v={cache-id}" type="text/css" rel="stylesheet"/>
<script src="{THEME}/js/telegram-web-app.js"></script>
<script src="{THEME}/js/iuser.js?v={cache-id}" ></script>
</html>