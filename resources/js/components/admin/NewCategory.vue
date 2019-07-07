<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Category</div>

                    <div class="card-body">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name." name="catName" v-model="catName">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Details</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter category Details." name="catInfo" v-model="catInfo">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class=" col-md-4 offset-4">
                                <button type="submit" class="btn btn-primary" @click.prevent="categorySave">Save Category</button>
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
        name: "NewCategory.vue",

        data () {
            return {
                catName:'',
                catInfo:''
            }
        },
        mounted(){
          console.log('Component Mounted.');

          this.getData();
        },

        methods: {
            categorySave(){
                console.log('Category Save Works.');
                axios.post('/addCategory', {
                    catName: this.catName,
                    catInfo: this.catInfo
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