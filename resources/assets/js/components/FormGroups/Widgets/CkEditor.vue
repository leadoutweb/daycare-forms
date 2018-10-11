<template>
    <textarea :id="name" class="form-control" :disabled="disabled">{{ value }}</textarea>
</template>

<script>
    import ClassicEditor from '@leadoutweb/ckeditor5-build-classic-including-alignment';

    export default {
        props: {
            "name": {},
            "value": {},
            "toolbar": {
                "default": () => ['heading', '|', 'alignment', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo']
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
