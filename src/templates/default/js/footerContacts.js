import { defineComponent } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
//import { ref } from 'vue'

export default defineComponent({
  props: ["items"],
  template: `
    <p v-for="item in items" class="footer__block-text" :key="item.title">{{item}}</p>
  `
})