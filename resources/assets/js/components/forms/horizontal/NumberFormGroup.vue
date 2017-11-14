<template>
    <form-group :name="name" :label="label" :error="error" :label-width="labelWidth" :input-width="inputWidth">
        <input
                type="number"
                class="form-control"
                :id="name"
                :placeholder="placeholder ? placeholder : label"
                :value="value"
                @input="$emit('input', $event.target.value)"
        >
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";

    export default {
        components: {FormGroup},

        props: ["name", "label", "placeholder", "value", "error", "labelWidth", "inputWidth"]
    }
</script>
