<template>
    <form-group :name="name" :label="label" :error="error">
        <input type="text" class="form-control" :id="name" :placeholder="label" :value="value">
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
            "error": {},
            "format": {
                "default": "YYYY-MM-DD"
            }
        },

        mounted() {
            $(this.$el.querySelector("input")).datetimepicker({format: this.format});

            $(this.$el.querySelector("input")).on("dp.change", (event) => {
                this.$emit("input", event.target.value);
            });
        }
    }
</script>
