<template>
    <form-group :label="label">
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
            "value": {}
        },
    }
</script>
