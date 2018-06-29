<template>
    <form-group
            :name="name"
            :label="label"
            :help-text="helpText"
            :error="error"
            :label-width="labelWidth"
            :input-width="inputWidth"
    >
        <textarea
                :id="name"
                class="form-control"
                :placeholder="label"
                :rows="rows"
                :value="value"
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
            "labelWidth": {},
            "inputWidth": {},
            "rows": {
                "default": 4
            }
        }
    }
</script>
