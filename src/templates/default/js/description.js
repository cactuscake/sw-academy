Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("description").dataset.params)
        return {
            ...params
        }
    }
}).mount('#description')
