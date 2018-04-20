<template>
    <form-group
            :name="name"
            :label="label"
            :help-text="helpText"
            :error="error"
            :label-width="labelWidth"
            :input-width="inputWidth"
    >
        <select-widget
                :name="name"
                :value="value"
                :options="options"
                :placeholder="placeholder"
                :nullable="nullable"
                @input="$emit('input', $event)"
        ></select-widget>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";
    import SelectWidget from "../Widgets/Select";

    export default {
        components: {FormGroup, SelectWidget},

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
