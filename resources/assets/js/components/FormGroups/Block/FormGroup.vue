<template>
    <div class="form-group" :class="{'has-error': hasError}">
        <label :for="name">
            {{ label }}
        </label>

        <slot></slot>

        <span class="help-block" v-if="hasHelpText">
            {{ helpText }}
        </span>

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
            "helpText": {"default": null},
            "error": {"default": null}
        },

        computed: {
            hasHelpText() {
                return this.helpText !== null;
            },

            hasError() {
                return this.error !== null;
            }
        }
    }
</script>
