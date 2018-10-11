<template>
    <input
            type="text"
            :id="name"
            class="form-control"
            :placeholder="label"
            :value="value"
            :disabled="disabled"
            @input="$emit('input', $event.target.value)"
    >
</template>

<script>
    export default {
        props: {
            "name": {},
            "label": {},
            "value": {},
            "parameters": {
                "default"() {
                    return {
                        "format": "YYYY-MM-DD"
                    }
                }
            },
            "disabled": {"default": false}
        },

        mounted() {
            $(this.$el).datetimepicker(this.parameters);

            $(this.$el).on("dp.change", (event) => {
                this.$emit("input", event.target.value);
            });
        }
    }
</script>
