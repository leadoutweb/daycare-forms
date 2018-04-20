<template>
    <form-group
            :name="name"
            :label="label"
            :help-text="helpText"
            :error="error"
            :label-width="labelWidth"
            :input-width="inputWidth"
    >
        <label-widget :value="value" :type="type"></label-widget>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";
    import LabelWidget from "../Widgets/Label";

    export default {
        components: {FormGroup, LabelWidget},

        props: {
            "label": {},
            "value": {},
            "helpText": {"default": null},
            "type": {},
            "labelWidth": {},
            "inputWidth": {}
        },
    }
</script>
