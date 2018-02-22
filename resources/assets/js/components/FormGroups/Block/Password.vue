<template>
    <form-group :name="name" :label="label" :error="error">
        <input
                type="password"
                :id="name"
                class="form-control"
                :placeholder="label"
                :value="value"
                @input="$emit('input', $event.target.value)"
        >
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";

    export default {
        components: {FormGroup},

        props: {
            "name": {},
            "label": {},
            "value": {},
            "error": {}
        },
    }
</script>
