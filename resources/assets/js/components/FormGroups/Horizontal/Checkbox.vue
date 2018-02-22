<template>
    <form-group :name="name" :label="label" :error="error" :label-width="labelWidth" :input-width="inputWidth">
        <checkbox-widget
                :name="name"
                class="mt-2"
                :value="value"
                :options="options"
                :error="error"
                @input="$emit('input', $event)"
        ></checkbox-widget>
    </form-group>
</template>

<script>
    import CheckboxWidget from "../Widgets/Checkbox";
    import FormGroup from "./FormGroup";

    export default {
        components: {CheckboxWidget, FormGroup},

        props: {
            "name": {},
            "label": {},
            "value": {},
            "error": {},
            "labelWidth": {},
            "inputWidth": {},
            "options": {}
        }
    }
</script>
