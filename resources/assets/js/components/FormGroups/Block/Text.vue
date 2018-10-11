<template>
    <form-group :name="name" :label="label" :help-text="helpText" :error="error">
        <input
                type="text"
                :id="name"
                class="form-control"
                :placeholder="label"
                :value="value"
                :disabled="disabled"
                @input="$emit('input', $event.target.value)"
        >
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
            "disabled": {"default": false}
        },
    }
</script>
