<template>
    <form-group :name="name" :label="label" :error="error">
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
            "value": {},
            "error": {},
            "options": {},
            "placeholder": {},
            "nullable": {}
        }
    }
</script>
