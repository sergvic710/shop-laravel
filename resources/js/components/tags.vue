<template>
    <div class="tags">
        <h2>Tags</h2>
        <div class="tag" v-for="tag in tags" :key="tag.id">
            <a v-bind:href="'/catalog/tag/'+tag.code" class="badge badge-primary">{{tag.name}}</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "tags",
        data() {
            return {
                tags: []
            };

        },
        async mounted() {
            var res = await fetch('/api/tag/list');
            var tags = await res.json();
            this.tags = tags;
        }
    }
</script>

<style>

</style>
