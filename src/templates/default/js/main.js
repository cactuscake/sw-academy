    Vue.createApp({
        data() {
            const params = JSON.parse(document.getElementById("main").dataset.params)
            return {
                ...params
            }
        }
    }).mount('#main')
    