<template>
    <form @submit.prevent="submit">

        <div v-if="success" class="alert alert-success mt-3">
            Feedback sent!
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" v-bind:class="{'is-invalid': errors.name}" name="name" v-model="fields.name" autofocus />
                <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
            </div>
        </div>

        <div class="form-group row">
            <label for="theme" class="col-md-4 col-form-label text-md-right">Theme</label>

            <div class="col-md-6">
                <input id="theme" type="text" class="form-control" v-bind:class="{'is-invalid': errors.theme}" name="theme" v-model="fields.theme" />
                <div v-if="errors && errors.theme" class="text-danger">{{ errors.theme[0] }}</div>
            </div>
        </div>

        <div class="form-group row">
            <label for="text" class="col-md-4 col-form-label text-md-right">Text</label>

            <div class="col-md-6">
                <textarea id="text" class="form-control" v-bind:class="{'is-invalid': errors.text}" name="text" v-model="fields.text"></textarea>
                <div v-if="errors && errors.text" class="text-danger">{{ errors.text[0] }}</div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Send
                </button>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    name: "FeedbackForm",

    data() {
        return {
            fields: {},
            errors: {},
            success: false,
            loaded: true
        }
    },
    methods: {
        submit() {
            if(this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                axios.post('/create', this.fields).then(response => {
                    this.fields = {};
                    this.loaded = true;
                    this.success = true;
                }).catch(error => {
                    this.loaded = true;
                    if(error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
            }
        },
    }
}
</script>

<style scoped>

</style>
