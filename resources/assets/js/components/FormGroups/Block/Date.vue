<template>
    <form-group :name="name" :label="label" :help-text="helpText" :error="error">
        <date-widget
                :name="name"
                :label="label"
                :value="value"
                :parameters="parameters"
                :disabled="disabled"
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
            "disabled": {"default": false},
            "parameters": {
                "default"() {
                    return {
                        "format": "YYYY-MM-DD"
                    }
                }
            }
        }
    }
</script>
