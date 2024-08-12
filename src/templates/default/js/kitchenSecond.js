Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("kitchenSecond").dataset.params)
        console.log("kitchenSecond", params);
        return {
            ...params
        }
    }
}).mount('#kitchenSecond')
