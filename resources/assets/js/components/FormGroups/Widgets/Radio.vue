<template>
    <div>
        <label class="radio-inline" v-for="option in options">
            <input
                    type="radio"
                    :name="name"
                    :value="option.value"
                    :checked="option.value === value"
                    :disabled="disabled"
                    @click.stop="$emit('input', option.value)"
            > {{ option.label }}
        </label>

        <label class="radio-inline" v-if="nullable">
            <input
                    type="radio"
                    :name="name"
                    :value="null"
                    :checked="value === null"
                    :disabled="disabled"
                    @click.stop="$emit('input', null)"
            > {{ placeholder ? placeholder : "(none)" }}
        </label>
    </div>
</template>

<script>
    export default {
        props: {
            "name": {},
            "value": {},
            "options": {},
            "placeholder": {},
            "nullable": {},
            "disabled": {"default": false}
        }
    }
</script>
