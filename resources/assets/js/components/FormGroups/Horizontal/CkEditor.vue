<template>
    <form-group
            :name="name"
            :label="label"
            :help-text="helpText"
            :error="error"
            :label-width="labelWidth"
            :input-width="inputWidth"
    >
        <ck-editor
                :id="name"
                :value="value"
                :toolbar="toolbar"
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
            "labelWidth": {},
            "inputWidth": {},
            "toolbar": {}
        }
    }
</script>
