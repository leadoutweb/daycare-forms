<template>
    <div class="button-form-group">
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

<style>
    .button-form-group .btn {
        margin-right: 5px;
    }
</style>

<script>
    export default {
        props: {
            "value": {},
            "options": {}
        }
    }
</script>
