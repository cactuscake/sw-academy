Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("application").dataset.params)
        return {
            ...params
        }
    }
}).mount('#application')