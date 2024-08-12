    Vue.createApp({
        data() {
            const params = JSON.parse(document.getElementById("main").dataset.params)
            console.log("main", params);
            return {
                ...params
            }
        }
    }).mount('#main')
    