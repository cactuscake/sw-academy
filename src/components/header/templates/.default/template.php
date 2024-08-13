<header class="header">
        <div class="header__logo--inner">
            <span class="header__logo"><?= $arParams["logo"]?></span>
            <p class="header__logo--desc"><?= $arParams["desk"]?></p>
        </div>
        <nav class="header__navbar">
            <?php foreach ($arParams["navbar"] as $navItem) : ?>
                <a href="#" class="header__item"><?= $navItem ?> </a>
            <?php endforeach;?>
        </nav>
        <div class="header__application">
            <span class="header__phone"><?= $arParams["number"]?></span>
            <button class="button header__button"><?= $arParams["header_button"]?></button>    
        </div>
        <img class="header__img" src="img/647ecd5879528d66b364066694c19a2e.png" alt="">
    </header>