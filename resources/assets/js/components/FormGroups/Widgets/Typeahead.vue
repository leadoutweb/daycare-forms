<template>
    <div class="typeahead-widget open" @focusout="handleFocusOut" @focusin="handleFocusIn">
        <input
            type="text"
            class="form-control"
            :placeholder="placeholder"
            v-model="searchInputValue"
        >
        <i v-if="value" class="typeahead-widget__icon fa fa-check"></i>
        <ul class="dropdown-menu" v-show="dropdownVisible">
            <li v-if="fetching && results.length === 0">
                <a disabled>
                    <img width="16" height="16" src="data:image/gif;base64,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
">
                </a>
            </li>
            <template v-else>
                <li v-for="(result, index) in results" :key="index">
                    <a href="#" @click="setActive(result)">{{ result[resultLabelProperty] }}</a>
                </li>
            </template>
        </ul>
    </div>
</template>

<script>
    export default {

        props: {
            "placeholder": {
                type: String,
                default: 'Søg...'
            },
            "endpoint": {
                type: String,
                required: true
            },
            "params": {
                type: Object,
                default() {
                    return {}
                }
            },
            "path": {
                type: String,
                required: true
            },
            "token": {
                type: String,
                required: true
            },
            "resultLabelProperty": {
                type: String,
                default: 'name'
            },
            "resultIdProperty": {
                type: String,
                default: 'id'
            },
            "value": [Number, String],
            "initialLabel": String
        },

        data() {
            return {
                results: [],
                fetching: false,
                hasFocus: false,
                searchInputValue: this.initialLabel || ''
            }
        },

        watch: {
            searchInputValue(newValue) {
                // Reset active result if value changed
                if (this.value) {
                    this.$emit('input', null)
                    this.$nextTick(() => {
                        this.fetching = true
                        this.fetchResults()
                    })
                } else if (newValue === '') {
                    this.results = []
                    this.fetching = false
                } else {
                    this.fetching = true
                    this.fetchResults()
                }
            }
        },

        computed: {
            dropdownVisible() {
                return this.fetching || (this.results.length > 0 && this.hasFocus)
            }
        },

        created() {
            this.fetchResults = _.throttle(this.fetchResults, 500, { leading: false })
        },

        methods: {
            setActive(result) {
                var id = result[this.resultIdProperty]
                var label = result[this.resultLabelProperty]
                
                this.searchInputValue = label

                this.$nextTick(() => {
                    this.results = []
                    this.fetching = false
                    this.$emit('input', id)
                })
            },

            fetchResults() {
                var searchInputValue = this.searchInputValue

                if (searchInputValue !== '') {
                    return axios({
                        method: "get",
                        url: this.endpoint,
                        params: this.params,
                        headers: {"Authorization": "Bearer " + this.token}
                    })
                        .then(json => {
                            var results = this.path.split('.').reduce((acc, segment) => {
                                acc = acc[segment]
                                return acc
                            }, json)
                            this.results = results
                            this.fetching = false
                        })
                        .catch(() => {
                            this.fetching = false
                        })
                }
            },

            handleFocusOut(event) {
                this.hasFocus = this.$el.contains(event.relatedTarget)
            },

            handleFocusIn(event) {
                this.hasFocus = true
            }
        }
    }
</script>

<style>
    .typeahead-widget {
        position: relative;
    }
    .typeahead-widget__icon {
        color: green;
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
    }
</style>