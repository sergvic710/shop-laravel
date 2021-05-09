export default {
    actions: {
        async updateQnyCart({commit, getters,dispatch}, val) {
             var item = getters.cartItems.find( p => {
                 return p.id == val.id;
             });
// //            var item = getters('cartGetItem');
            if (item.qny == 1 && val.qny == -1) {
                return;
            }
//             return;
             item.qny +=val.qny;

            var requestOptions = {
                method: "PUT",
                headers: {"Content-Type": "application/json"},
                body: JSON.stringify(item)
            };
            var res = await fetch(
                '/api/cart/update', requestOptions
            )
            dispatch('fetchCart')
        },

        async addToCart({commit, getters, dispatch}, id) {
            var requestOptions = {
                method: "POST",
                headers: {"Content-Type": "application/json"},
                body: JSON.stringify({id: id, qny: 1})
            };
            const res = await fetch(
                '/api/cart/add',requestOptions
            )
            dispatch('fetchCart')
        },
        async fetchCart({commit, getters, dispatch}) {

            var res = await fetch(
                '/api/cart/list'
            );
            var items = await res.json();
            //
            // dispatch('sayHello')

            commit('updateCart', items)
        },
        async deleteFromCart({commit, getters, dispatch}, id) {
            var requestOptions = {
                method: "DELETE",
                headers: {"Content-Type": "application/json"},
                // body: JSON.stringify({ title: "Vue POST Request Example" })
            };
            var res = await fetch(
                '/api/cart/delete/' + id, requestOptions
            )
            dispatch('fetchCart')
        },

    },
    mutations: {
        // addToCart(state, id) {
        //     state.cartProduct.push(id);
        // },
        updateCart(state, items) {
            state.cartProduct = items.rows;
            state.cartSum = items.allsum

        },
    },
    state: {
        cartProduct: [],
        cartSum: 0,
    },
    getters: {
        cartProdCount(state, getters) {
            return getters.cartItems.length;
        },
        cartProdSum(state, getters) {
            return state.cartSum;
        },
        cartItems(state, getters) {
            return state.cartProduct;
        },
        // cartGetItem(state, getters) {
        //     return state.cartProduct[id]
        // }
    }
}
