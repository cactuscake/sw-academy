import menuComponent from "./menuComponent.js"

const { createApp, ref } = Vue

    createApp({
        components:{
            'menu-component': menuComponent
        },
        data() {
            const params = JSON.parse(document.getElementById("header").dataset.params)
            return {
                ...params
            }
        }
    }).mount('#header')