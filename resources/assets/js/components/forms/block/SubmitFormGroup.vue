<template>
    <div>
        <slot>
            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i> Save
            </button>
        </slot>

        <router-link :to="link.url" class="btn btn-link" v-for="link in links" :key="link.url">
            {{ link.label }}
        </router-link>
    </div>
</template>

<script>
    export default {
        props: ["links"]
    }
</script>
