<footer class="footer">
        <div class="footer__container">
            <div class="footer__logo--inner logo--inner">
                <span class="footer__logo logo"><?= $arParams["foot_title"]?></span>
                <p class="footer__logo--desc logo--desc"><?= $arParams["foot_subtitle"]?></p>
            </div>
            <div class="footer__block footer-menu">
                <?php foreach ($arParams["menu"] as $menuItem) : ?>
                    <a class="footer__block-text footer-menu-item" href="#"><?= $menuItem ?></a>
                <?php endforeach;?>            
            </div>
            <div class="footer__block">
                <p class="footer__block-title"><?= $arParams["contact_name"]?></p>
                <?php foreach ($arParams["contact"] as $contactItem) : ?>
                    <p class="footer__block-text"><?= $contactItem ?></a>
                <?php endforeach;?>
            </div>
            <form action="auth.html">
                <button class="button button__footer" href="auth.html"><?= $arParams["foot_button"]?></button>
            </form>
        </div>
        <hr class="footer__line">
        <div class="footer__info">
            <p class="footer__info-text"><?= $arParams["bottom"][0]?></p>
            <p class="footer__info-text footer__info-text-orange"><?= $arParams["bottom"][1]?></p>
            <p class="footer__info-text"><?= $arParams["bottom"][2]?></p>
        </div>
    </footer>