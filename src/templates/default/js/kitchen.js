Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("kitchen").dataset.params)
        console.log("kitchen", params);
        return {
            ...params
        }
    }
}).mount('#kitchen')
