<template>
    <form-group :label="label" :help-text="helpText">
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
            "helpText": {"default": null},
            "value": {},
            "type": {}
        },
    }
</script>
