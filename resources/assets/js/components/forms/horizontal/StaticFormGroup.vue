<template>
    <form-group :label="label" :label-width="labelWidth" :input-width="inputWidth">
        <p class="form-control-static">{{ text }}</p>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";

    export default {
        components: {FormGroup},

        props: ["text", "label", "labelWidth", "inputWidth"]
    }
</script>
