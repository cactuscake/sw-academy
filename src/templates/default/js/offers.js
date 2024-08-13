Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("offers").dataset.params)
        return {
            ...params
        }
    }
}).mount('#offers')
