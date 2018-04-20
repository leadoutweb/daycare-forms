<template>
    <form-group :name="name" :label="label" :help-text="helpText" :error="error">
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
            "options": {},
            "placeholder": {},
            "nullable": {}
        }
    }
</script>
