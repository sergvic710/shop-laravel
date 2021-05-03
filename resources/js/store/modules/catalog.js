export default {
    actions: {
        async fetchListProducts({ commit, getters, dispatch }) {
            const res = await fetch('http://127.0.0.1:8000/api/product/list');
            const list = await res.json()
            commit('updateListProducts', list)
        },
    },
    mutations: {
        updateListProducts(state, list) {
            state.listProducts = list
        },
    },
    state: {
        listProducts: [],
    },
    getters: {
        listProducts(state) {
            return state.listProducts
        },
    }
}
