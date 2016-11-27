<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="styles/main-style.css">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/main-slideshow.css">
        <link rel="stylesheet" href="styles/index-main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/nav-menu.js"></script>
        <script src="js/scroll-to-top.js"></script>
    </head>
<body>
<span id="top"></span>
    <div id="wrapper">
        <header>
            <img id="logo" src="img/logo.png" alt="Logo">
            <nav>
                <ul id="navigation">
                    <li>
                        <a href="#">Дамска колекция</a>
                        <ul class="fallback">
                            <li class="sub-menu"><a class="menu-link" href="#">-Колиета</a></li>
                            <li class="sub-menu"><a class="menu-link" href="#">-Гривни</a></li>
                            <li class="sub-menu"><a class="menu-link" href="#">-Комплекти</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Мъжка колекция</a>
                        <ul id="nd-nav" class="fallback">
                            <li class="sub-menu"><a class="menu-link" href="#">-Колиета</a></li>
                            <li class="sub-menu"><a class="menu-link" href="#">-Гривни</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Амолети</a>
                    </li>
                    <li><a href="#">Gil Delux</a></li>
                    <li><a href="#">Пазпродажба</a></li>
                    <li><a href="#">Св. Валентин</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <span id="sl_play" class="sl_command">&nbsp;</span>
            <span id="sl_pause" class="sl_command">&nbsp;</span>
            <span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
            <span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
            <span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
            <span id="sl_i4" class="sl_command sl_i">&nbsp;</span>

            <section id="slideshow">

                <a class="commands prev commands1" href="#sl_i4">&lt;</a>
                <a class="commands next commands1" href="#sl_i2">&gt;</a>
                <a class="commands prev commands2" href="#sl_i1">&lt;</a>
                <a class="commands next commands2" href="#sl_i3">&gt;</a>
                <a class="commands prev commands3" href="#sl_i2">&lt;</a>
                <a class="commands next commands3" href="#sl_i4">&gt;</a>
                <a class="commands prev commands4" href="#sl_i3">&lt;</a>
                <a class="commands next commands4" href="#sl_i1">&gt;</a>

                <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
                <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>

                <div class="container">
                    <div class="c_slider"></div>
                    <div class="slider">
                        <figure>
                            <img src="styles/img/dummy-640x310-1.jpg" alt=""/>

                        </figure><!--
				--><figure>
                            <img src="styles/img/dummy-640x310-2.jpg" alt=""/>

                        </figure><!--
				--><figure>
                            <img src="styles/img/dummy-640x310-3.jpg" alt=""/>
                        </figure><!--
				--><figure>
                            <img src="styles/img/dummy-640x310-4.jpg" alt=""/>
                        </figure>
                    </div>
                </div>

                <span id="timeline"></span>

                <ul class="dots_commands"><!--
			--><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--
			--><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--
			--><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--
			--><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>
                </ul>

            </section>
            <hr class="style-one"/>
            <section id="refers">
                <div class="column">
                    <figure class="block">
                        <div id="img-1"></div>
                        <div class="card">
                            <div class="side">
                                <h1 class="desc">MANTRA</h1>
                                <p class="desc">Ритуал</p>
                            </div>
                            <div class="side back">
                                <a href="#">Виж още</a>
                            </div>
                        </div>
                    </figure>
                    <figure class="block">
                        <div class="frame">
                            <div id="inner-block-1"></div>
                        </div>
                    </figure>
                </div>
                <div class="column">
                    <div id="img-2"></div>
                </div>
                <div class="column">
                    <figure class="block">
                        <div class="frame-2">
                            <div id="inner-block-2"></div>
                        </div>
                    </figure>
                    <figure id="block-1" class="block">
                        <div id="img-1"></div>
                        <div class="card-nd-2">
                            <div class="side">
                                <h1 class="desc-2">MANTRA</h1>
                                <p id="desc-2-nd-2" class="desc-2">Ритуал</p>
                            </div>
                            <div class="side back">
                                <a id="img-link-2" href="#">Виж още</a>
                            </div>
                        </div>
                    </figure>
                </div>
            </section>
        </main>
        <footer></footer>
    </div>
<a href="#top" class="back-to-top"></a>
</body>
</html>