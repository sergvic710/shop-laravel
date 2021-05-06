export default {
    actions: {

    },
    mutations: {
        addToCart(state, id) {
            state.cartProduct.push(id);
        },
    },
    state: {
        cartProduct: [],
    },
    getters: {

    }
}
