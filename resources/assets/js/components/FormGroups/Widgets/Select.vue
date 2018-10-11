<template>
    <select
            :id="name"
            :value="value"
            class="form-control"
            :disabled="disabled"
            @input="$emit('input', $event.target.value)"
    >
        <option value="" :disabled="!nullable">
            {{ placeholder ? placeholder : (nullable ? '(none)' : 'Choose...') }}
        </option>

        <option v-for="option in options" :value="option.value" v-if="!hasOptionGroups">
            {{ option.label }}
        </option>

        <optgroup
                v-for="optionGroup in options"
                :label="optionGroup.label"
                v-if="hasOptionGroups && optionGroup.options.length"
        >
            <option
                    v-for="option in optionGroup.options"
                    :value="option.value"
            >
                {{ option.label }}
            </option>
        </optgroup>
    </select>
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
        },

        computed: {
            hasOptionGroups() {
                return this.options.length && typeof this.options[0].options !== "undefined";
            }
        },

        methods: {
            getOptionGroupValue(optionGroupName, optionValue) {
                return optionGroupName.replace("_", "-") + "-" + optionValue;
            }
        }
    }
</script>
