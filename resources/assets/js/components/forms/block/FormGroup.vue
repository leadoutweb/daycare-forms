<template>
    <div class="form-group" :class="{'has-error': hasError}">
        <label :for="name">{{ label }}</label>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: {"name": {}, "label": {}, "error": {"default": null}},

        computed: {
            hasError() {
                return this.error !== null;
            }
        }
    }
</script>
