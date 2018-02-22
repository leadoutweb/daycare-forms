<template>
    <form-group :name="name" :label="label" :error="error" :label-width="labelWidth" :input-width="inputWidth">
        <textarea
                :id="name"
                class="form-control"
                :placeholder="label"
                :rows="rows"
                @input="$emit('input', $event.target.value)"
        >{{ value }}</textarea>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";

    export default {
        components: {FormGroup},

        props: {
            "name": {},
            "label": {},
            "value": {},
            "error": {},
            "labelWidth": {},
            "inputWidth": {},
            "rows": {
                "default": 4
            }
        }
    }
</script>
