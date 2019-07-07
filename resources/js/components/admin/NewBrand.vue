<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Brand</div>

                    <div class="card-body">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Brand Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Brand Name." name="brandName" v-model="brandName">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Brand Details</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Brand Details." name="brandInfo" v-model="brandInfo">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class=" col-md-4 offset-4">
                                <button type="submit" class="btn btn-primary" @click.prevent="brandSave">Save Brand</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "NewBrand.vue",

        data () {
            return {
                brandName:'',
                brandInfo:''
            }
        },
        mounted(){
            console.log('Component Mounted.');

            this.getData();
        },

        methods: {
            brandSave(){
                console.log('Brand  Save Works.');
                axios.post('/addBrand', {
                    brandName: this.brandName,
                    brandInfo: this.brandInfo
                })
                    .then(function (response) {
                        console.log(response,'then');
                        location.reload();
                    })
                    .catch(function (error) {
                        console.log(error,'error');
                    });
            },

            getData(){

            }
        }

    }
</script>

<style scoped>

</style>