<template>
    <div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <router-link to="">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h5>All Sold</h5>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                        </div>

                        <a class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </router-link>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <router-link to="">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <!--<h3>53<sup style="font-size: 20px">%</sup></h3>-->

                            <h5>All Stocks</h5>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </router-link>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <router-link to="">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <!--<h3>44</h3>-->

                            <h5>All Purchase</h5>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </router-link>

            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <router-link to="">
                    <div class="small-box bg-danger">
                        <div class="inner">

                            <h5>Unique Visitors</h5>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </router-link>

            </div>
            <!-- ./col -->
        </div>
    </div>
</template>

<script>
    export default {
        name: "AdminMain.vue"

    }
</script>

<style scoped>

</style>