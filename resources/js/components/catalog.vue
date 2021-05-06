<template>
    <div class="catalog">
        <h1>Catalog</h1>
        <div class="row">
            <div class="col-3 catalog-item" v-for="item in listProducts" :key="item.id">
                <img v-bind:src=item.foto />
                <span>{{item.name}}</span>
                <button class="btn btn-primary" v-bind:id=item.id @click="addToCartItem(item.id)">Купить</button>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapActions, mapGetters, mapMutations} from "vuex";

    export default {
        name: "catalog",
        computed: mapGetters(['listProducts']),
        methods: {
            ...mapActions(["fetchListProducts"]),
            ...mapMutations(['addToCart']),
            addToCartItem(id) {
                //var id = this.$el.id;
                this.addToCart(id)
            }
        },
        async mounted() {
            // this.$store.dispatch("fetchPosts");
            this.fetchListProducts();
        },
    }
</script>

<style>
    .catalog-item {
        height: 320px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .catalog-item img{
        width: 100%;
    }
</style>
