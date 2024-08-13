import { defineComponent } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

export default defineComponent({
  props: ["items"],
  template: `
  <nav class="header__navbar">
    <a :href="item.href" v-for="item in items" class="header__item" :key=item.title>{{item}}</a>
  </nav>
  `
})