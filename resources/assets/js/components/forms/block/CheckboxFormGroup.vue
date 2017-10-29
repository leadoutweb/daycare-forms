<template>
    <form-group :name="name" :label="label" :error="error">
        <div>
            <label class="checkbox-inline" v-for="option in options">
                <input
                        type="checkbox"
                        name="name"
                        value="option.value"
                        :checked="value.indexOf(option.value) > -1"
                        @click.stop="emit(option.value)"
                > {{ option.label }}
            </label>
        </div>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";

    export default {
        components: {FormGroup},

        props: ["name", "label", "value", "error", "options"],

        methods: {
            emit(value) {
                let newValue = this.value;

                if (this.value.indexOf(value) > -1) {
                    newValue.splice(this.value.indexOf(value), 1);
                } else {
                    newValue.push(value);
                }

                this.$emit("input", newValue);
            }
        }
    }
</script>
