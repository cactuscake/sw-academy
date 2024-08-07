<section class="application">
        <h2 class="application__title"><?= $arResult["application_title"] ?></h2>
        <p class="application__text"><?= $arResult["application_text"] ?></p>
        <div class="application__block">
            <input class="application__input" type="text" placeholder="Имя">
            <input class="application__input" type="text" placeholder="Телефон">
            <button class="button application__button"><?= $arResult["application_button"] ?></button>
        </div>
    </section>