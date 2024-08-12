Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("description").dataset.params)
        console.log("description", params);
        return {
            ...params
        }
    }
}).mount('#description')
