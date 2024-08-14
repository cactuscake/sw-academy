<section class="application" id="application" data-params='<?= json_encode($arParams)?>'>
        <h2 class="application__title">{{application_title}}</h2>
        <p class="application__text">{{application_text}}</p>
        <div class="application__block">
            <form @submit="submit">
                <input class="application__input" type="text" v-model="form.name" placeholder="Имя">
                <input class="application__input" type="text" v-model="form.tel" placeholder="Телефон">
                <button class="button application__button">{{application_button}}</button>
            </form>
        </div>
    </section>
    <script type="module" src="templates/default/js/application.js"></script>