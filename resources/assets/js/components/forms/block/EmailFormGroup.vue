<template>
    <form-group :name="name" :label="label" :error="error">
        <input
                type="email"
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

        props: ["name", "label", "placeholder", "value", "error"]
    }
</script>
