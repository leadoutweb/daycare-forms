<template>
    <form-group :name="name" :label="label" :help-text="helpText" :error="error">
        <textarea
                :id="name"
                class="form-control"
                :placeholder="label"
                :rows="rows"
                :value="value"
                :disabled="disabled"
                @input="$emit('input', $event.target.value)"
        ></textarea>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";

    export default {
        components: {FormGroup},

        props: {
            "name": {},
            "label": {},
            "helpText": {"default": null},
            "value": {},
            "error": {},
            "rows": {"default": 4},
            "disabled": {"default": false}
        }
    }
</script>
