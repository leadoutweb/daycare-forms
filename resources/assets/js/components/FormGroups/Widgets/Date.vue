<template>
    <input
            type="text"
            :id="name"
            class="form-control"
            :placeholder="label"
            :value="value"
            @input="$emit('input', $event.target.value)"
    >
</template>

<script>
    export default {
        props: {
            "name": {},
            "label": {},
            "value": {},
            "format": {
                "default": "YYYY-MM-DD"
            }
        },

        mounted() {
            $(this.$el).datetimepicker({format: this.format});

            $(this.$el).on("dp.change", (event) => {
                this.$emit("input", event.target.value);
            });
        }
    }
</script>
