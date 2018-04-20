<template>
    <form-group :label="label" :help-text="helpText">
        <static-widget :value="value"></static-widget>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";
    import StaticWidget from "../Widgets/Static";

    export default {
        components: {FormGroup, StaticWidget},

        props: {
            "label": {},
            "helpText": {"default": null},
            "value": {}
        },
    }
</script>
