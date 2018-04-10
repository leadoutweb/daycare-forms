<template>
    <p class="form-control-static" v-html="value"></p>
</template>

<script>
    export default {
        props: {
            "value": {}
        }
    }
</script>
