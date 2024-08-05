<footer class="footer">
        <div class="footer__container">
            <div class="footer__logo--inner logo--inner">
                <span class="footer__logo logo"><?= $arResult["foot_title"]?></span>
                <p class="footer__logo--desc logo--desc"><?= $arResult["foot_subtitle"]?></p>
            </div>
            <div class="footer__block footer-menu">
                <?php foreach ($arResult["menu"] as $menuItem) : ?>
                    <a class="footer__block-text footer-menu-item" href="#"><?= $menuItem ?></a>
                <?php endforeach;?>            
            </div>
            <div class="footer__block">
                <p class="footer__block-title"><?= $arResult["contact_name"]?></p>
                <?php foreach ($arResult["contact"] as $contactItem) : ?>
                    <p class="footer__block-text"><?= $contactItem ?></a>
                <?php endforeach;?>
            </div>
            <form action="auth.html">
                <button class="button button__footer" href="auth.html"><?= $arResult["foot_button"]?></button>
            </form>
        </div>
        <hr class="footer__line">
        <div class="footer__info">
            <p class="footer__info-text"><?= $arResult["bottom"][0]?></p>
            <p class="footer__info-text footer__info-text-orange"><?= $arResult["bottom"][1]?></p>
            <p class="footer__info-text"><?= $arResult["bottom"][2]?></p>
        </div>
    </footer>
    