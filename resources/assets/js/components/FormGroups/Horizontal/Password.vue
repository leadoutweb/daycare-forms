<template>
    <form-group
            :name="name"
            :label="label"
            :help-text="helpText"
            :error="error"
            :label-width="labelWidth"
            :input-width="inputWidth"
    >
        <input
                type="password"
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
            "labelWidth": {},
            "inputWidth": {},
            "disabled": {"default": false}
        },
    }
</script>
