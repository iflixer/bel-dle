<article class="page ignore-select pmovie">

    <div class="story-starter"></div>
    <div class="pagestory">
        <div class="lp">
           <img src="[xfvalue_poster_url]?w=207&h=325" loading="lazy" alt="{title}">
            <div class="pmovie__ratings d-flex ai-center">
                <div class="poster__rating">
                    <div class="js-count-rating d-none">{rating}</div>
                </div>
            </div>
        </div>
        <div class="rp">
            <div class="rpp1">
                <h1>{title}[xfgiven_name_foreign]
                    <span class="titorigname"> / [xfvalue_name_foreign]</span>
                    [/xfgiven_name_foreign][edit]
                    <span class="fal fa-pencil"></span>[/edit]</h1>
                [xfgiven_names]
                <div class="pmovie__original-title">[xfvalue_names]</div>
                [/xfgiven_names]
                [xfnotgiven_name_foreign]<br><br>[/xfnotgiven_name_foreign]

                <div class="pmovie__ext-ratings d-flex ai-center">


                    [xfgiven_rating_kinopoisk]
                    <div class="pmovie__ext-rating pmovie__ext-rating--kp">[xfvalue_rating_kinopoisk]</div>
                    [/xfgiven_rating_kinopoisk]
                    [xfgiven_rating_imdb]
                    <div class="pmovie__ext-rating pmovie__ext-rating--imdb">[xfvalue_rating_imdb]</div>
                    [/xfgiven_rating_imdb]

                </div>

                <div class="pminfo">
                    [xfgiven_genre]
                    <div class="pminfo-row pgenres nobrpls">
                        <span class="rowtit">Жанр:</span>[xfvalue_genre]</div>
                    [/xfgiven_genre]
                    <div class="pminfo-row pmovie__year nobrpls">
                        <span class="rowtit">Страна:</span>
                        [xfgiven_year][xfvalue_year] | [/xfgiven_year]
                        [xfgiven_country][xfvalue_country][/xfgiven_country]
                    </div>

                    [xfgiven_movie_length]
                    <div class="pminfo-row pmovie__quality d-flex ai-center">
                        <span class="rowtit">Время:</span> [xfvalue_movie_length]
                    </div>
                    [/xfgiven_movie_length]
                    [xfgiven_series_length]
                    <div class="pminfo-row pmovie__quality d-flex ai-center">
                        <span class="rowtit">Время:</span>  [xfvalue_series_length]м (эпизод)
                    </div>
                    [/xfgiven_series_length]

                    [xfgiven_quality]
                    <div class="pminfo-row pmovie__quality d-flex ai-center nobrpls">
                        <span class="rowtit">Качество:</span> [xfvalue_quality]
                    </div>
                    [/xfgiven_quality]
                </div>

                 <div class="bslide__btns d-flex icon-at-right dua">
                       

                        [xfgiven_status]
                        [ifxfvalue status="announced"]

                        <div class="favbuttop">
                            [group=5]
                            <div class="btn pmovie__fav icon-at-left"><a href="#" class="js-show-login">
                                    <span class="fal fa-bookmark"></span>В закладки</a>
                            </div>
                            <div style="font-size:11px;">Мы пришлем вам уведомление<br> когда фильм появится на сайте
                            </div>
                            [/group]

                            [not-group=5]
                            [add-favorites]
                            <div class="btn pmovie__fav icon-at-left"><span class="fal fa-bookmark"></span>В закладки
                            </div>
                            <div style="font-size:11px;">Мы пришлем вам уведомление<br> когда фильм появится на сайте
                            </div>
                            [/add-favorites]

                            [del-favorites]
                            <div class="btn pmovie__fav icon-at-left"><span class="fal fa-minus-circle"></span>Из
                                закладок
                            </div>
                            [/del-favorites]
                            [/not-group]
                        </div>
                        [/ifxfvalue]
                        [/xfgiven_status]


                    </div>
            </div>
            <div class="rpp2">
                <ul class="page__subcol-info pmovie__header-list">
                    [xfgiven_director]
                    <li class="nobrpls"><span>Режиссер:</span> [xfvalue_director]</li>
                    [/xfgiven_director]

                    [xfgiven_translate]
                    <li class="nobrpls"><span>Перевод:</span> [xfvalue_translate]</li>
                    [/xfgiven_translate]

                    [xfgiven_actors]
                    <li class="hidebrpls"><span>Актеры:</span> <span
                                class="spoiler-content">[xfvalue_actors] </span><span
                                class="show-more">Показать больше</span></li>
                    [/xfgiven_actors]
                </ul>
            </div>

        </div>
    </div>
    <div class="story-ender"></div>


    <div class="page__text full-text clearfix moviedescript">
        <ul class="movieaddition">

            [xfgiven_slogan]
            <li>
                <span>Слоган:</span> [xfvalue_slogan]
            </li>
            [/xfgiven_slogan]

            [xfgiven_premiere_world]
            <li>
                <span>Дата выхода: </span>[xfvalue_premiere_world]
            </li>
            [/xfgiven_premiere_world]

            [xfgiven_premiere_russia]
            <li>
                <span>Премьера в РФ: </span>[xfvalue_premiere_russia]
            </li>
            [/xfgiven_premiere_russia]

            [xfgiven_season_count]
            <li>
                <span>Количество: </span>[xfvalue_season_count] сезонов
                [xfgiven_episode_count]<b> &nbsp;|&nbsp;&nbsp; </b> [xfvalue_episode_count]
                эпизодов[/xfgiven_episode_count]

            </li>
            [/xfgiven_season_count]

            [xfgiven_age_rating]
            <li>
                <span>Возраст: </span>[xfvalue_age_rating]
            </li>
            [/xfgiven_age_rating]

            [xfgiven_status]
            <li>
                <span>Статус:</span> [ifxfvalue status="announced"]<span style="color:red">Анонс</span>[/ifxfvalue]
                [ifxfvalue status="filming"]Cнимается[/ifxfvalue]
                [ifxfvalue status="pre-production"] Пре-продакшен [/ifxfvalue]
                [ifxfvalue status="post-production"] Пост-продакшен [/ifxfvalue]
                [ifxfvalue status="completed"]Завершен [/ifxfvalue]
            </li>
            [/xfgiven_status]

            [xfgiven_year_start]
            <li>
                <span>Год начала: </span>[xfvalue_year_start]
            </li>
            [/xfgiven_year_start]
            [xfgiven_year_end]
            <li>
                <span>Год завершения: </span>[xfvalue_year_end]
            </li>
            [/xfgiven_year_end]

        </ul>
        <h2 class="page__subtitle">
            [xfgiven_type][ifxfvalue type="tv-series"] Про что сериал «{title}» [/ifxfvalue][/xfgiven_type]
            [xfgiven_type][ifxfvalue type="movie"] Про что фильм «{title}»[/ifxfvalue][/xfgiven_type]
            [xfnotgiven_type] Описание [/xfnotgiven_type]
        </h2>
        <div class="page__text full-text clearfix">{full-story}</div>

        [xfgiven_facts]
        <h3 class="page__subtitle">Интересные факты</h3>
        <div class="page__text full-text clearfix">
            <div class="moviefacts">
                [xfvalue_facts]
            </div>
        </div>
        [/xfgiven_facts]
    </div>

    <h2 class="page__subtitle tac">Смотреть онлайн "{title}" бесплатно</h2>

    <div class="pmovie__player tabs-block">
        <iframe src="//cdn0.futmax.info/show/kinopoisk/[xfvalue_kinopoisk_id]" width="640" height="480" frameborder="0" allowfullscreen></iframe>
		

        <div class="pmovie__player-bottom d-flex ai-center">
            <div class="pmovie__share d-flex ai-center flex-grow-1">
                <div class="pmovie__share-caption">Расскажи друзьям:</div>
                <div class="ya-share2 not-loaded"
                     data-services="vkontakte,facebook,odnoklassniki,viber,whatsapp,telegram" data-counter="ig"></div>
            </div>
            <div class="pmovie__complaint" title="Есть ошибки или проблемы с фильмом? Сообщи нам!">
                [complaint]<span class="fal fa-bullhorn"></span>[/complaint]
            </div>
        </div>
        <div class="pmovie__player-bottom-2 d-flex ai-center">
            [group=5]
            <div class="pmovie__fav icon-at-left"><a href="#" class="js-show-login"><span
                            class="fal fa-bookmark"></span>В закладки</a></div>
            [/group]
            [not-group=5]
            <div class="pmovie__fav icon-at-left">
                [add-favorites]<span class="fal fa-bookmark"></span>В закладки[/add-favorites]
                [del-favorites]<span class="fal fa-minus-circle"></span>Из закладок[/del-favorites]
            </div>
            [/not-group]
            [rating]<span class="ratenum">{ratingscore}</span>{rating}<span class="ratevotes">{vote-num} голосов</span>[/rating]
        </div>



    </div>


    <section class="sect pmovie__related">
        <h2 class="sect__title sect__header">Смотреть ещё фильмы:</h2>
        <div class="sect__content d-grid">
            {related-news}
        </div>
    </section>

    <div class="page__comments">
        <div class="page__comments-title">Твой отзыв на онлайн фильм</div>

        [group=5]
        Для добавления комментария вам необходимо &nbsp;<span class="btn js-show-login">Авторизоваться</span>
        [/group]
        [not-group=5]
        <div class="page__comments-info intxtarea">
            <span class="fal fa-exclamation-circle"></span>
            Минимальная длина комментария - 50 знаков. комментарии модерируются
        </div>
        [/not-group]
        {addcomments}



        <div class="page__comments-list [not-comments]page__comments-list--not-comments[/not-comments]"
             id="page__comments-list">
            [not-comments]
            <div class="page__comments-info">
                <span class="fal fa-exclamation-circle"></span>
                Комментариев еще нет. Вы можете стать первым!
            </div>
            [/not-comments]
            {comments}{navigation}
        </div>
    </div>

</article>
