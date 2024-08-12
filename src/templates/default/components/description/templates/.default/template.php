<section class="description" id="description" data-params='<?= json_encode($arParams)?>'>
        <div class="description__container img-1">
            <div class="img__scale img-none"><img class="description__img" src="img/1cc6c715ea3449d37ffcfa365dcceb13.jpeg" alt=""></div>
            <div class="description__info">
                <h3 class="info__title">{{description_title}}</h3>
                <p class="info__text">{{description_subtitle[0]}}</p>
                <p class="info__text">{{description_subtitle[1]}}</p>
                <button class="button info__button info__button-1">Заказать</button>
            </div>
        </div>
        <div class="description__container">
            <div class="description__info info--left">
                <h3 class="info__title">{{delivery_title}}</h3>
                <p class="info__text">{{delivery_subtitle[0]}}</p>
                <p class="info__text">{{delivery_subtitle[1]}}</p>
            </div>
            <div class="img__scale img-none"><img class="description__img" src="img/882bf584bfc90fbd6329190f78e35581.jpeg" alt=""></div>
        </div>
        <div class="description__container img-2">
            <div class="img__scale img-none"><img class="description__img" src="img/1476bcb0aee80f27638cbbe549909ff9.jpeg" alt=""></div>
            <div class="description__info">
                <h3 class="info__title">{{production_title}}</h3>
                <p class="info__text">{{production_subtitle[0]}}</p>
                <p class="info__text">{{production_subtitle[1]}}</p>
                <button class="button info__button info__button-2">Записаться</button>
            </div>
        </div>
    </section>

    <script src="templates/default/js/description.js"></script>