Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("kitchenSecond").dataset.params)
        return {
            ...params
        }
    }
}).mount('#kitchenSecond')
