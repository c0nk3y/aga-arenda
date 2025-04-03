<?php 
$menu = isset($_GET['menu']) ? $_GET['menu'] : 'aginskoe';
?>

<!DOCTYPE html>
<html lang="ru" translate="no">
<head>
    <title>✅ Более 50 предложений снять жилье в Забайкальском крае на любой срок. Объявления об аренде жилья в населенных пунктах с описаниями, фотографиями, ценами и контактами арендодателей.</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta content="✅ Более 50 предложений снять жилье в Забайкальском крае на любой срок. Объявления об аренде жилья в населенных пунктах с описаниями, фотографиями, ценами и контактами арендодателей." name="description">
	<meta content="забайкальский край, аренда жилья, жилье, чита, могойтуй, дульдурга, борзя, квартира, купить квартиру" name="keywords">
	<meta content="index, follow" name="robots">
	<meta property="og:title" content="Аренда жилья в Забайкальском крае!" />
	<meta property="og:description" content="✅ Более 50 предложений снять жилье в Забайкальском крае на любой срок. Объявления об аренде жилья в населенных пунктах с описаниями, фотографиями, ценами и контактами арендодателей." />
	<meta property="og:type" content="website" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <!-- Fonts Only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- CSS Only -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="app">
        <header class="header">
            <a href="/" class="header-logo">
                <img src="./favicon.png" alt="Логотип сайта" class="header-img">
                Аренда жилья
            </a>

            <!-- <span class="header-burger">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon"><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
            </span> -->
        </header>

        <main class="main">
            <section class="about bg flex">
                <h1 class="title">Быстрый и удобный поиск недвижимости в<br>Забайкальском крае</h1>

                <p class="description">
                    Информационный портал о недвижимости, предназначенный для широкого круга посетителей: с одной стороны, это застройщики, девелоперы и риэлторы, с другой – клиенты, желающие приобрести или продать свою недвижимость.
                </p>

                <p class="description">
                    У нас вы найдёте отличный выбор предложений, поэтому любой посетитель нашего сайта легко подберёт себе подходящие по условиям и цене варианты. Бюджетная недвижимость или престижные дома и дачные участки, квартиры или офисы, продажа или аренда – диапазон услуг и предложений широк! И главное – это только актуальные на сегодняшний день объявления. 
                </p>

                <p class="description">
                    Но на этом наша команда не останавливается: мы постоянно работаем над удобством поиска и следим за ситуацией на рынке недвижимости, чтобы сообщить вам первыми о любых изменениях в этой сфере. 
                </p>

                <p class="description">
                    Удобных вам продаж и удачных покупок на нашем портале! 
                </p>
            </section>

            <section class="navigation bg flex">
                <h2 class="h2-title">Навигация</h2>

                <div class="navigation-list">
                    <a href="?menu=chita" class="button <?php echo $menu === 'chita' ? 'active' : ''; ?>">Чита</a>
                    <a href="?menu=aginskoe" class="button <?php echo $menu === 'aginskoe' ? 'active' : ''; ?>">Агинское</a>
                    <a href="?menu=duldurga" class="button <?php echo $menu === 'duldurga' ? 'active' : ''; ?>">Дульдурга</a>
                    <a href="?menu=mogoytuy" class="button <?php echo $menu === 'mogoytuy' ? 'active' : ''; ?>">Могойтуй</a>
                    <a href="?menu=borzya" class="button <?php echo $menu === 'borzya' ? 'active' : ''; ?>">Борзя</a>
                </div>
            </section>

            <!-- CITY LIST -->
            <section class="homes bg flex <?php echo $menu === 'chita' ? 'active' : ''; ?>">
                <h2 class="h2-title">Чита</h2>

                <div class="homes-list">
                    <article class="homes-list_item">
                        <img src="./img/11.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            1-комнатная квартира, 52 м2, в аренду на длительный срок в Чите, улица Журавлёва, 104
                        </h3>

                        <p class="homes-description">
                            КВAPTИРA СДАЁТСЯ ВПEРBЫЕ!!!Cдам однoкомнатную, oчeнь пpocтopную квартиру. Желательно руccкoму, oдинoкoму взpocлoму мужчинe/женщине,  макcимaльно двoe челoвeк, чистoплoтным, педантичным, финaнcовоcпоcобным. Квартира ocнaщенa вceм неoбxoдимым, для комфортного проживания, ремонт выполнен из дорогих и качественных материалов, встроенная кухня с техникой, варочная панель, духовой шкаф и посудомоечная машина - ВОSСН, холодильник, свч и пылесос, посуда и т. д. Также, на кухне раскладной диван, телевизор, стол и стулья, все видно на фото. Совмещенный санузел, качественная сантехника. В комнате двуспальная кровать, шкаф, телевизор, все в отличном состоянии. Есть утюг, гладильная доска, сушилка. Отличная локация, одна из лучших в городе (ШАТРЫ) за домом, в 10 метрах, красивый Шахматный парк, множество магазинов и супермаркетов, недалеко гипермаркет Абсолют, фитнесс зал "Пресс центр", уютное Frаnсе саfе, МФЦ, кинотеатр "Россия", ресторан Грилевич, банки, медицинские центры, аптеки и много, много всего необходимо, для счастливой жизни. Замечательная транспортная развязка, остановка общественного транспорта (троллейбусы, маршрутное такси, можно уехать в любую точку города).
                        </p>

                        <span class="homes-price"><b>35.000₽</b> (15.000₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>
                </div>
            </section>

            <section class="homes bg flex <?php echo $menu === 'aginskoe' ? 'active' : ''; ?>">
                <h2 class="h2-title">Агинское</h2>

                <div class="homes-list">
                    <article class="homes-list_item">
                        <img src="./img/1.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            2-комнатная квартира в аренду в поселке городского типа Агинское, Комсомольская улица
                        </h3>

                        <p class="homes-description">
                            Чистая большая квартира с качественным ремонтом в панельном доме предлагается в аренду на продолжительный период от собственника. Проводной интернет. Счета за коммунальные услуги в арендную плату не входят. Квартира сдается со всей необходимой мебелью для проживания. Из бытовой техники имеется: утюг, чайник, плита, ТВ, холодильник, бытовые приборы, посуда, стиральная машина.
                        </p>

                        <span class="homes-price"><b>10.000₽</b> (3.000₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>

                    <article class="homes-list_item">
                        <img src="./img/2.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            Сдам 1-комнатную квартиру, 40 м2, улица Базара Ринчино, 71А 
                        </h3>

                        <p class="homes-description">
                            В аренду от хозяина предлагается 1-комнатная квартира с аккуратным ремонтом на 1 этаже в 3-этажном кирпичном доме. Холодильник. Можно жить с ребенком, с животными.
                        </p>

                        <span class="homes-price"><b>5.000₽</b> (2.500₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>
                </div>
            </section>

            <section class="homes bg flex <?php echo $menu === 'mogoytuy' ? 'active' : ''; ?>">
                <h2 class="h2-title">Могойтуй</h2>

                <div class="homes-list">
                    <article class="homes-list_item">
                        <img src="./img/3.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            1-этажный дом, 36 м2, в аренду в посёлке городского типа Могойтуй, Центральная площадь
                        </h3>

                        <p class="homes-description">
                            Сдается дом с возможностью выкупить его (стоимость дома 1.000.000₽). Есть скважина-вода круглый год, баня, 2 дровенника, тепляк, окна пластиковые, холодильник, кровать, диван, 3 стола, стулья, газовая печь, шкаф - арендуй и живи! В 5 минутах пешком школа #1, детский сад, магазины, жд и автовокзал!
                        </p>

                        <span class="homes-price"><b>14.000₽</b> (5.000₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>
                </div>
            </section>

            <section class="homes bg flex <?php echo $menu === 'duldurga' ? 'active' : ''; ?>">
                <h2 class="h2-title">Дульдурга</h2>

                <div class="homes-list">
                    <article class="homes-list_item">
                        <img src="./img/4.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            1-этажный дом, 100 м2, в аренду в селе Дульдурга
                        </h3>

                        <p class="homes-description">
                            Сдается 1-этажный дом в селе Дульдурга. Ремонт хороший, дом сделан из бруса, площадь дома 100 квадратных метров, 4 комнаты, площадь участка 16 соток.
                        </p>

                        <span class="homes-price"><b>5.000₽</b> (2.000₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>
                </div>
            </section>

            <section class="homes bg flex <?php echo $menu === 'borzya' ? 'active' : ''; ?>">
                <h2 class="h2-title">Борзя</h2>

                <div class="homes-list">
                    <article class="homes-list_item">
                        <img src="./img/5.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            1-комнатная квартира, 31.1 м2, в аренду в Борзе, улица Ленина, 63 
                        </h3>

                        <p class="homes-description">
                            К аренде предлагается чистая квартира с качественной отделкой в кирпичном доме от хозяина. Коммунальные платежи не включены в стоимость аренды. Квартира полностью меблирована всей необходимой для комфортной жизни мебелью. Установлены все необходимые бытовые электроприборы: холодильник, утюг, TV, микроволновая печка, электрочайник, стиралка и прочее.
                        </p>

                        <span class="homes-price"><b>15.000₽</b> (10.000₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>

                    <article class="homes-list_item">
                        <img src="./img/6.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            2-комнатная квартира, 160 м2, в аренду в Борзе, улица Фадеева, 2В
                        </h3>

                        <p class="homes-description">
                            В аренду сдается комфортабельная 2к. квартира на 2 этаже в 2-этажном кирпичном доме с евроремонтом. Имеется необходимая техника: холодильник, телевизор, стиралка. Есть 1 балкон. Для автовладельцев во дворе есть открытая парковка. Можно жить с ребенком, с питомцами.
                        </p>

                        <span class="homes-price"><b>40.000₽</b> (20.000₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>

                    <article class="homes-list_item">
                        <img src="./img/7.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            3-комнатная квартира, 170 м2, в аренду в Борзе, улица Фадеева, 2В
                        </h3>

                        <p class="homes-description">
                            Сдам пpoстopную блaгоустроeнную 3-х кoмнатную кваpтиpу. Для пpoживaния имeeтся всё:телевизоp, водонагpeвaтeль, xолодильник, стиpальнaя мaшинa, мeбeль. Квaртира нaходится нa 2-oм этaже, eсть бaлкон.Сантеxникa новая, плаcтиковыe oкнa, евpopемoнт. Общaя площадь бoлee 150кв. Все коммунальные платежи включены .Так же дополнительно возможно снять теплый гараж, рядом с домом.
                        </p>

                        <span class="homes-price"><b>45.000₽</b> (18.500₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>

                    <article class="homes-list_item">
                        <img src="./img/8.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            1-комнатная квартира, 32 м2, в аренду в Борзе, Партизанская улица, 112
                        </h3>

                        <p class="homes-description">
                            Квартира после ремонта. Расположение отличное, школа, д сад; остановка; магазины. 
                        </p>

                        <span class="homes-price"><b>15.000₽</b> (6.300₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>

                    <article class="homes-list_item">
                        <img src="./img/9.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            3-комнатная квартира, 59.8 м2, в аренду в Борзе
                        </h3>

                        <p class="homes-description">
                            Рядом с домом находиться автобусная  остановка , детский садик ,  парк , магазины,  школа ,рынок всё в лёгкой доступности .Мебелированная  без бытовой техники ! 
                        </p>

                        <span class="homes-price"><b>20.000₽</b> (5.000₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>

                    <article class="homes-list_item">
                        <img src="./img/10.jpg" alt="Жилье фото" class="home-img" loading="lazy">
                        <h3 class="homes-title">
                            2-комнатная квартира, 54 м2, в аренду в Борзе, улица Лазо, 51А
                        </h3>

                        <p class="homes-description">
                            Сдам 2-х комнатную  квартиру, порядочной семье.  Есть всё для проживания. 
                        </p>

                        <span class="homes-price"><b>17.000₽</b> (4.000₽ залог)</span>

                        <a href="https://t.me/anastasia_ushenko1997" class="homes-link">Связаться</a>
                    </article>
                </div>
            </section>
        </main>
    </div>

    <div class="desktop">
        <h1 class="title">Сайт не доступен с этого устройства, попробуйте с мобильного телефона.</h1>
    </div>
</body>
</html>