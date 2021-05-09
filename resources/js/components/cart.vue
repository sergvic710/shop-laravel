<template>
<div>
    <a href="/cart">{{cartProdCount}} товаров на сумму {{cartProdSum}} руб</a>
</div>
</template>

<script>
    import { mapGetters, mapActions } from "vuex";
    export default {
        computed: mapGetters(['cartProdCount','cartProdSum']),
        methods: mapActions(['fetchCart']),
        name: "cart",
        async mounted() {
            this.fetchCart();
        }
    }
</script>

<style scoped>

</style>
