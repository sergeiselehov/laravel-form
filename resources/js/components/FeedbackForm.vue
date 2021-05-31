<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Feedback Form</div>

                <div class="card-body">
                    <form method="POST">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="theme" class="col-md-4 col-form-label text-md-right">Theme</label>

                            <div class="col-md-6">
                                <input id="theme" type="text" class="form-control" name="theme" required autocomplete="theme">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Text</label>

                            <div class="col-md-6">
                                <textarea id="text" class="form-control" name="text" required autocomplete="text"></textarea>
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
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FeedbackForm",

    mounted() {
        console.log('Component mounted.')
    }
}
</script>

<style scoped>

</style>
