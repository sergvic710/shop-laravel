export default {
    actions: {
        async fetchListProducts({ commit, getters, dispatch }, tag='') {
            if( tag == '') {
                const res = await fetch('/api/product/list');
            } else {
                const res = await fetch('/api/product/tag/list/'+tag);
            }
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
