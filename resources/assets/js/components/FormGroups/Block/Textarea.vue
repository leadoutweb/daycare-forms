<template>
    <form-group :name="name" :label="label" :error="error">
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
            "rows": {
                "default": 4
            }
        }
    }
</script>
