<template>
    <form-group :name="name" :label="label" :error="error">
        <select class="form-control" :id="name" :value="value" @input="$emit('input', $event.target.value)">
            <option value="" :disabled="!nullable">
                {{ placeholder ? placeholder : (nullable ? '(none)' : 'Choose...') }}
            </option>

            <option v-for="option in options" :value="option.value" v-if="!hasOptionGroups">
                {{ option.label }}
            </option>

            <optgroup
                    v-for="(optionGroupOptions, optionGroupName) in options"
                    :label="optionGroupName | readable"
                    v-if="hasOptionGroups && optionGroupOptions.length"
            >
                <option
                        v-for="option in optionGroupOptions"
                        :value="getOptionGroupValue(optionGroupName, option.value)"
                >
                    {{ option.label }}
                </option>
            </optgroup>
        </select>
    </form-group>
</template>

<script>
    import FormGroup from "./FormGroup";

    export default {
        components: {FormGroup},

        props: ["name", "label", "placeholder", "value", "error", "options", "nullable"],

        computed: {
            hasOptionGroups() {
                return !(this.options instanceof Array);
            }
        },

        filters: {
            readable(string) {
                return string.split("_").map(function(word) {
                    return word.replace(word[0], word[0].toUpperCase());
                }).join(" ");
            }
        },

        methods: {
            getOptionGroupValue(optionGroupName, optionValue) {
                return optionGroupName.replace("_", "-") + "-" + optionValue;
            }
        }
    }
</script>
