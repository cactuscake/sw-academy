Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("footer").dataset.params)
        console.log("footer", params);
        return {
            ...params
        }
    }
}).mount('#footer')
