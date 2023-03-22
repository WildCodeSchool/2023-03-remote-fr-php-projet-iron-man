<div class="overlay-menu-mobile" onclick="closeMenuMobile()"></div>
<header class="header">
    <div class="header__logo">
        <img alt="Iron Man" src="/assets/images/logo_jaune" />
    </div>
    <nav class="header__nav">
        <div class="header__nav__close" onclick="closeMenuMobile()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <ul class="header__nav__menu">
            <li class="header__nav__menu__link__image">
                <a href="../index.php">
                    <img id="logo_rouge" onMouseOver="over();" onMouseOut="out();" src="/assets/images/logo_rouge" alt="ironman" /></a>
            </li>
            <li class="header__nav__menu__link">
                <a href="#">Portfolio</a>
            </li>
            <li class="header__nav__menu__link">
                <a href="#">Expériences</a>
            </li>
            <li class="header__nav__menu__link">
                <a href="../page_formation.php">Formation</a>
            </li>
            <li class="header__nav__menu__link">
                <a href="#">Contact</a>
            </li>
        </ul>
        </div>
    </nav>
    <div class="header__burger" onclick="openMenuMobile()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div>
</header>
<script>
    function openMenuMobile() {
        document.querySelector('.header__nav').classList.add('open');
        document.querySelector('.overlay-menu-mobile').classList.add('open');
    }

    function closeMenuMobile() {
        document.querySelector('.header__nav').classList.remove('open');
        document.querySelector('.overlay-menu-mobile').classList.remove('open');
    }

    function over() {
        document.querySelector("#logo_rouge").src = '/assets/images/logorouge_yeux_jaunes';
    }

    function out() {
        document.querySelector("#logo_rouge").src = '/assets/images/logo_rouge';
    }
</script>