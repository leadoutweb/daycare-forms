<template>
    <form-group :name="name" :label="label" :help-text="helpText" :error="error">
        <ck-editor
                :id="name"
                :value="value"
                :toolbar="toolbar"
                :disabled="disabled"
                @input="$emit('input', $event)"
        ></ck-editor>
    </form-group>
</template>

<script>
    import CkEditor from '../Widgets/CkEditor'
    import FormGroup from "./FormGroup";

    export default {
        components: {CkEditor, FormGroup},

        props: {
            "name": {},
            "label": {},
            "helpText": {"default": null},
            "value": {},
            "error": {},
            "toolbar": {},
            "disabled": {"default": false}
        }
    }
</script>
