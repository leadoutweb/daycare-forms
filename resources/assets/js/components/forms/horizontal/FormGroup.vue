<template>
    <div class="form-group" :class="{'has-error': hasError}">
        <label :for="name" class="control-label" :class="'col-sm-' + labelWidth">{{ label }}</label>

        <div :class="'col-sm-' + inputWidth">
            <slot></slot>

            <span class="help-block" v-if="hasError">
                {{ error }}
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            "name": {},
            "label": {},
            "error": {"default": null},
            "labelWidth": {"default": 3},
            "inputWidth": {"default": 6}
        },

        computed: {
            hasError() {
                return this.error !== null;
            }
        }
    }
</script>
