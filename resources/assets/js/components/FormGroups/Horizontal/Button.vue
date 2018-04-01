<template>
    <form-group :name="name" :label="label" :error="error" :label-width="labelWidth" :input-width="inputWidth">
        <button-widget
                :value="value"
                :options="options"
                @input="$emit('input', $event)"
        ></button-widget>
    </form-group>
</template>

<script>
    import ButtonWidget from "../Widgets/Button";
    import FormGroup from "./FormGroup";

    export default {
        components: {ButtonWidget, FormGroup},

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
