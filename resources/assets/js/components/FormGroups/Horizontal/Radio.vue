<template>
    <form-group
            :name="name"
            :label="label"
            :help-text="helpText"
            :error="error"
            :label-width="labelWidth"
            :input-width="inputWidth"
    >
        <radio-widget
                :name="name"
                :value="value"
                :options="options"
                :placeholder="placeholder"
                :nullable="nullable"
                :error="error"
                @input="$emit('input', $event)"
        ></radio-widget>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";
    import RadioWidget from "../Widgets/Radio";

    export default {
        components: {FormGroup, RadioWidget},

        props: {
            "name": {},
            "label": {},
            "helpText": {"default": null},
            "value": {},
            "error": {},
            "labelWidth": {},
            "inputWidth": {},
            "options": {},
            "placeholder": {},
            "nullable": {}
        }
    }
</script>
