<template>
    <div class="form-group" :class="{'has-error': hasError}">
        <label :for="name">
            {{ label }}
        </label>

        <slot></slot>

        <span class="help-block" v-if="hasError">
                {{ error }}
            </span>
    </div>
</template>

<script>
    export default {
        props: {
            "name": {},
            "label": {},
            "error": {"default": null}
        },

        computed: {
            hasError() {
                return this.error !== null;
            }
        }
    }
</script>
