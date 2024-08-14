import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const data = JSON.parse(document.querySelector("#application").dataset.application)

createApp({

    data() {
        return {
            ...data,
            form: {
                name: '',
                tel: '',
            }
        }
    },
    methods: {
        submit(event) {
            event.preventDefault();
            APP.runComponentAction('application', 'create', JSON.stringify(this.form))
                .then(data => console.log(data))
        }
    }
}).mount('#application')
