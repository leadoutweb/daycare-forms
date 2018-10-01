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
            @change="$emit('input', $event)"
        ></typeahead-widget>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";
    import TypeaheadWidget from "../Widgets/Typeahead";

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

            "placeholder": String,
            "endpoint": String,
            "token": String,
            "path": String,
            "params": Object
        }
    }
</script>
