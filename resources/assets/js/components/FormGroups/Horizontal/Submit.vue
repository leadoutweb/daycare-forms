<template>
    <div class="form-group">
        <div :class="'col-sm-offset-' + labelWidth + ' col-sm-' + inputWidth">
            <slot>
                <button type="submit" class="btn" :class="class">
                    <i class="fa fa-save"></i> Save
                </button>
            </slot>

            <router-link :to="link.url" class="btn btn-link" v-for="link in links" :key="link.url">
                {{ link.label }}
            </router-link>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            "links": {},
            "class": {"default": "btn-success"},
            "labelWidth": {"default": 4}, 
            "inputWidth": {"default": 6}
        }
    }
</script>
