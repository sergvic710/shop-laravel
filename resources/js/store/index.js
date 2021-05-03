import Vue from 'vue'
import Vuex from 'vuex'
import cart from './modules/cart'
import catalog from './modules/catalog'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
      cart,
      catalog
  }
})
