<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">All Category List</div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Category Name</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td >ID</td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            </tbody>
                        </table>
                        <h1 v-for="category in categories">{{category.catName}}</h1>
                        {{ categories}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {

        name: "AllCategory.vue",

        props:"",
        data () {
            return {
                categories: null
            }
        },
        mounted () {
            axios.get('/allCategory').then(response => {
                    this.categories = response
                });
                // console.log(this.info);
        },
    }
</script>

<style scoped>

</style>