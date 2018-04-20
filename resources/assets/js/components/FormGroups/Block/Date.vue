<template>
    <form-group :name="name" :label="label" :help-text="helpText" :error="error">
        <date-widget
                :name="name"
                :label="label"
                :value="value"
                :format="format"
                @input="$emit('input', $event)"
        ></date-widget>
    </form-group>
</template>

<script>
    import DateWidget from "../Widgets/Date";
    import FormGroup from "./FormGroup";

    export default {
        components: {DateWidget, FormGroup},

        props: {
            "name": {},
            "label": {},
            "helpText": {"default": null},
            "value": {},
            "error": {},
            "format": {}
        }
    }
</script>
