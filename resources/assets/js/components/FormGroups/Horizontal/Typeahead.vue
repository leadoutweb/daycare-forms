<template>
    <form-group
        :name="name"
        :label="label"
        :help-text="helpText"
        :error="error"
        :label-width="labelWidth"
        :input-width="inputWidth"
    >
        <typeahead-widget
            :placeholder="placeholder"
            :endpoint="endpoint"
            :token="token"
            :params="params"
            :path="path"
            v-model="intermediateValue"
        ></typeahead-widget>
    </form-group>
</template>

<script>
    import FormGroup from "../../vendor/forms/FormGroups/Horizontal/FormGroup";
    import TypeaheadWidget from "./TypeaheadWidget";

    export default {
        components: {FormGroup, TypeaheadWidget},

        props: {
            "name": {},
            "label": {},
            "helpText": {"default": null},
            "value": {},
            "error": {},
            "labelWidth": {},
            "inputWidth": {},
            "value": {},

            "placeholder": String,
            "endpoint": String,
            "token": String,
            "path": String,
            "params": Object
        },

        data() {
            return {
                intermediateValue: this.value
            }
        },

        watch: {
            intermediateValue(newValue) {
                this.$emit('input', newValue)
            },
            value(newValue) {
                this.intermediateValue = newValue
            }
        }
    }
</script>
