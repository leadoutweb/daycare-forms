<template>
    <div>
        <label class="radio-inline" v-for="option in options">
            <input
                    type="radio"
                    :name="name"
                    value="option.value"
                    :checked="option.value === value"
                    @click.stop="$emit('input', option.value)"
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
        }
    }
</script>
