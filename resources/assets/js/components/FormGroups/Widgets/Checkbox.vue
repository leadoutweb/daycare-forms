<template>
    <div>
        <label class="checkbox-inline" v-for="option in options">
            <input
                    type="checkbox"
                    :name="name"
                    value="option.value"
                    :checked="value.indexOf(option.value) > -1"
                    :disabled="disabled"
                    @click.stop="emit(option.value)"
            > {{ option.label }}
        </label>
    </div>
</template>

<script>
    export default {
        props: {
            "name": {},
            "value": {},
            "options": {},
            "error": {},
            "disabled": {"default": false}
        },

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
