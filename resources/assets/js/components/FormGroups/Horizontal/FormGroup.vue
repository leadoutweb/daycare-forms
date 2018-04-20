<template>
    <div class="form-group" :class="{'has-error': hasError}">
        <label :for="name" class="control-label" :class="'col-sm-' + labelWidth" v-if="label">
            {{ label }}
        </label>

        <div :class="'col-sm-' + inputWidth">
            <slot></slot>

            <span class="help-block" v-if="hasHelpText">
                {{ helpText }}
            </span>

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
            "helpText": {"default": null},
            "error": {"default": null},
            "labelWidth": {"default": 4},
            "inputWidth": {"default": 6}
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
