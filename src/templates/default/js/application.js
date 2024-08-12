Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("application").dataset.params)
        console.log("application", params);
        return {
            ...params
        }
    }
}).mount('#application')