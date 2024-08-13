<section class="application" id="application" data-params='<?= json_encode($arParams)?>'>
        <h2 class="application__title">{{application_title}}</h2>
        <p class="application__text">{{application_text}}</p>
        <div class="application__block">
            <input class="application__input" type="text" placeholder="Имя">
            <input class="application__input" type="text" placeholder="Телефон">
            <button class="button application__button">{{application_button}}</button>
        </div>
    </section>
    <script>
    
    Vue.createApp({
        data() {
            const params = <?= json_encode($arResult)?>;
            console.log("application", params);
            return {
                ...params
            }
        }
    }).mount('#application')
</script>