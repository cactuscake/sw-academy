<header class="header" id="header" data-params='<?= json_encode($arParams)?>' >
        <div class="header__logo--inner">
            <span class="header__logo">{{logo}}</span>
            <p class="header__logo--desc">{{desk}}</p>
        </div>
        <menu-component :items="navbar"></menu-component>
        <div class="header__application">
            <span class="header__phone">{{number}}</span>
            <button class="button header__button">{{header_button}}</button>    
        </div>
        <img class="header__img" src="img/647ecd5879528d66b364066694c19a2e.png" alt="">
</header>
<script type="module" src="/templates/default/js/header.js" ></script>