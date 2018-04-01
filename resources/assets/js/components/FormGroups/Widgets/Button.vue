<template>
    <div>
        <button
                type="button"
                v-for="option in options"
                class="btn"
                :class="{'btn-grey': option.value !== value, 'btn-success': option.value === value}"
                @click="$emit('input', option.value)"
        >
            {{ option.label }}
        </button>
    </div>
</template>

<script>
    export default {
        props: {
            "value": {},
            "options": {}
        }
    }
</script>
