<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Цена</th>
            <th scope="col">Количество</th>
            <th scope="col">Сумма</th>
            <th scope="col">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <tr class="cartItems-item" v-for="cartitem in cartItems" :key = "cartitem.id">
            <td class="col-4">
                {{cartitem.name}}
            </td>
            <td class="col-1">
                {{cartitem.price}}
            </td>
            <td class="col-3">
                <span class="cartItems-item__qny" @click="updateQnyCart({id:cartitem.id,qny:-1})"><b><</b></span>
                <input type="text" :value=cartitem.qny size="2" readonly/>
                <span class="cartItems-item__qny" @click="updateQnyCart({id:cartitem.id,qny:1})"><b>></b></span>
            </td>
            <td class="col-1">
                {{cartitem.sum}}
            </td>
            <td class="col-2">
                <button :id=cartitem.id @click="deleteFromCart(cartitem.id)">удалить</button>
            </td>
        </tr>
        <tr>
            <td>
                <b>Общая сумма: {{cartProdSum}}</b>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    import { mapGetters, mapActions } from "vuex";
    export default {
        computed: mapGetters(['cartItems','cartProdSum']),
        methods: mapActions(['fetchCart','deleteFromCart','updateQnyCart']),
        name: "cart",
        async mounted() {
            this.fetchCart();
        }
    }
</script>
<style>
    .cartItems-item__qny {
        cursor: pointer;
    }
</style>
