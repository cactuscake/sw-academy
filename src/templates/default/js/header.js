const { createApp, ref } = Vue
    Vue.createApp({
        data() {
            const params = JSON.parse(document.getElementById("header").dataset.params)
            console.log("header", params);
            return {
                ...params
            }
        }
    }).mount('#header')