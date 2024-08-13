import footerMenu from "./footerMenu.js"
import footerContacts from "./footerContacts.js"

Vue.createApp({
    components:{
        'footer-menu': footerMenu,
        'footer-contacts': footerContacts
    },
    data() {
        const params = JSON.parse(document.getElementById("footer").dataset.params)
        return {
            ...params
        }
    }
}).mount('#footer')
