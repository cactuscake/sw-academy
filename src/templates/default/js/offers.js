Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("offers").dataset.params)
        console.log("offers", params);
        return {
            ...params
        }
    }
}).mount('#offers')
