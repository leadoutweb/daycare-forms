<template>
    <textarea :id="name" class="form-control" :disabled="disabled">{{ value }}</textarea>
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        props: {
            "name": {},
            "value": {},
            "toolbar": {
                "default": () => ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo']
            },
            "disabled": {"default": false}
        },

        mounted() {
            ClassicEditor
                .create(this.$el, {
                    toolbar: this.toolbar,
                })
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        this.$emit('input', editor.getData())
                    })
                })
        }
    }
</script>
