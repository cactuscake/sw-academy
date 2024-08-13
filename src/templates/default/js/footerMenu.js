import { defineComponent } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
//import { ref } from 'vue'

export default defineComponent({
  props: ["items"],
  template: `
  <div class="footer__block footer-menu">
    <a :href="item.href" v-for="item in items" class="footer__block-text footer-menu-item" :key="item.title">{{item}}</a>
  </div>
  `
})