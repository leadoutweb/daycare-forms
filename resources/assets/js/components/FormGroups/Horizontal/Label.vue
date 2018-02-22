<template>
    <form-group :label="label" :label-width="labelWidth" :input-width="inputWidth">
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
            "type": {},
            "labelWidth": {},
            "inputWidth": {}
        },
    }
</script>
