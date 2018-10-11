<template>
    <form-group :name="name" :label="label" :help-text="helpText" :error="error">
        <radio-widget
                :name="name"
                :value="value"
                :options="options"
                :placeholder="placeholder"
                :nullable="nullable"
                :error="error"
                :disabled="disabled"
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
            "options": {},
            "placeholder": {},
            "nullable": {},
            "disabled": {"default": false}
        }
    }
</script>
