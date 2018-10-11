<template>
    <div class="button-form-group">
        <button
                type="button"
                v-for="option in options"
                class="btn"
                :class="{'btn-grey': option.value !== value, 'btn-success': option.value === value}"
                :disabled="disabled"
                @click="$emit('input', option.value)"
        >
            {{ option.label }}
        </button><button
                type="button"
                v-if="nullable"
                class="btn"
                :class="{'btn-grey': null !== value, 'btn-success': null === value}"
                :disabled="disabled"
                @click="$emit('input', null)"
        >
            {{ placeholder ? placeholder : "(none)" }}
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
            "options": {},
            "placeholder": {},
            "nullable": {},
            "disabled": {"default": false}
        }
    }
</script>
