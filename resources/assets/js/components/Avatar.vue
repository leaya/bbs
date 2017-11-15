<template>
    <div class="center">
        <vue-core-image-upload
                class="btn btn-primary"
                crop="local"
                cropRatio="1:1"
                @imageuploaded="imageuploaded"
                :data="data"
                :max-file-size="5242880"
                compress="50"
                url="/avatar" >
        </vue-core-image-upload>
        <img class="thumbnail img-responsive" width="125" :src="src" alt="" style="margin-top:10px">
        <input type="hidden" name="avatar" :value="src">
    </div>
</template>

<script>
    import VueCoreImageUpload from 'vue-core-image-upload'

    export default {
        props: ['image'],
        components: {
            'vue-core-image-upload': VueCoreImageUpload,
        },
        data() {
            return {
                src: this.image,
                data: {
                    _token: Laravel.csrfToken
                }
            }
        },
        methods: {
            imageuploaded(res) {
                if (res.errcode == 0) {
                    this.src = res.src;
                }
            }
        }
    };
</script>