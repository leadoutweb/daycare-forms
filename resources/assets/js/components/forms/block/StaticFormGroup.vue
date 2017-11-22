<template>
    <form-group :label="label">
        <p class="form-control-static">{{ text }}</p>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";

    export default {
        components: {FormGroup},

        props: ["text", "label"]
    }
</script>
