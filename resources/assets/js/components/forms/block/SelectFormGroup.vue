<template>
    <form-group :name="name" :label="label" :error="error">
        <select class="form-control" :id="name" :value="value" @input="$emit('input', $event.target.value)">
            <option value="" :disabled="!nullable">{{ nullable ? '(none)' : 'Choose...' }}</option>

            <option v-for="option in options" :value="option.value">{{ option.label }}</option>
        </select>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";

    export default {
        components: {FormGroup},

        props: ["name", "label", "value", "error", "options", "nullable"]
    }
</script>
