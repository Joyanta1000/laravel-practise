<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Form</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Name</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-md-12">
                                <label for="">Address</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-md-12" style="padding-top:10px;">
                                <input type="submit" class="btn btn-primary" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
