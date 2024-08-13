Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("kitchen").dataset.params)
        return {
            ...params
        }
    }
}).mount('#kitchen')
