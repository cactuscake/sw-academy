<section class="description">
        <div class="description__container img-1">
            <div class="img__scale img-none"><img class="description__img" src="img/1cc6c715ea3449d37ffcfa365dcceb13.jpeg" alt=""></div>
            <div class="description__info">
                <h3 class="info__title"><?= $arResult["description_title"]?></h3>
                <p class="info__text"><?= $arResult["description_subtitle"][0]?></p>
                <p class="info__text"><?= $arResult["description_subtitle"][1]?></p>
                <button class="button info__button info__button-1">Заказать</button>
            </div>
        </div>
        <div class="description__container">
            <div class="description__info info--left">
                <h3 class="info__title"><?= $arResult["delivery_title"]?></h3>
                <p class="info__text"><?= $arResult["delivery_subtitle"][0]?></p>
                <p class="info__text"><?= $arResult["delivery_subtitle"][1]?></p>
            </div>
            <div class="img__scale img-none"><img class="description__img" src="img/882bf584bfc90fbd6329190f78e35581.jpeg" alt=""></div>
        </div>
        <div class="description__container img-2">
            <div class="img__scale img-none"><img class="description__img" src="img/1476bcb0aee80f27638cbbe549909ff9.jpeg" alt=""></div>
            <div class="description__info">
                <h3 class="info__title"><?= $arResult["production_title"]?></h3>
                <p class="info__text"><?= $arResult["production_subtitle"][0]?></p>
                <p class="info__text"><?= $arResult["production_subtitle"][1]?></p>
                <button class="button info__button info__button-2">Записаться</button>
            </div>
        </div>
    </section>