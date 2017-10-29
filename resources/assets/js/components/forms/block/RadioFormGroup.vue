<template>
    <form-group :name="name" :label="label" :error="error">
        <div>
            <label class="radio-inline" v-for="option in options">
                <input
                        type="radio"
                        name="name"
                        value="option.value"
                        :checked="option.value === value"
                        @click.stop="$emit('input', option.value)"
                > {{ option.label }}
            </label>
        </div>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";

    export default {
        components: {FormGroup},

        props: ["name", "label", "value", "error", "options"]
    }
</script>
