<template>
    <p class="form-control-static">
        <span class="label" :class="'label-' + type">
            {{ value }}
        </span>
    </p>
</template>

<script>
    export default {
        props: {
            "value": {},
            "type": {}
        }
    }
</script>