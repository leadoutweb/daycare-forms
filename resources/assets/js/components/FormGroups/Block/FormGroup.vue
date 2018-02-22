<template>
    <div class="form-group">
        <label :for="name">
            {{ label }}
        </label>

        <slot></slot>

        <span class="invalid-feedback" v-if="error">
            <strong>{{ error }}</strong>
        </span>
    </div>
</template>

<script>
    export default {
        props: {
            "name": {},
            "label": {},
            "error": {"default": null}
        }
    }
</script>
