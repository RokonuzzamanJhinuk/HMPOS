<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header ">Add New Purchase</div>

                    <div class="card-body">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Purchase File Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Purchase File Name." name="purchaseName" v-model="purchaseName">
                                </div>
                                <div class="form-group">
                                    <label>Purchase File Details</label>
                                    <input type="text" class="form-control" placeholder="Enter Purchase File Details." name="purchaseInfo" v-model="purchaseInfo">
                                </div>
                                <div class="form-group">
                                    <label>Purchase LC Sender</label>
                                    <input type="text" class="form-control" placeholder="Enter Purchase LC Sender Name." name="lcSender" v-model="lcSender">
                                </div>
                                <div class="form-group">
                                    <label>Purchase LC Receiver</label>
                                    <input type="text" class="form-control" placeholder="Enter Purchase LC Receiver Name." name="lcReceiver" v-model="lcReceiver">
                                </div>
                                <div class="form-group">
                                    <label>Purchase LC Opening Amount</label>
                                    <input type="number" class="form-control" placeholder="Enter Purchase LC Opening Amount." name="lcOpen" v-model="lcOpen">
                                </div>
                                <div class="form-group">
                                    <label>Purchase LC Closing Amount</label>
                                    <input type="number" class="form-control" placeholder="Enter Purchase LC Closing Amount." name="lcClose" v-model="lcClose">
                                </div>
                                <div class="form-group">
                                    <label>Purchase Under Invoice Amount</label>
                                    <input type="number" class="form-control" placeholder="Enter Purchase Under Invoice Amount." name="underInvoice" v-model="underInvoice">
                                </div>
                                <div class="form-group">
                                    <label>Purchase Shipping Cost</label>
                                    <input type="number" class="form-control" placeholder="Enter Purchase Shipping Cost." name="shippingCharge" v-model="shippingCharge">
                                </div>
                                <div class="form-group">
                                    <label>Purchase NBR Vat Cost</label>
                                    <input type="number" class="form-control" placeholder="Enter Purchase NBR Vat." name="nbrVat" v-model="nbrVat">
                                </div>
                                <div class="form-group">
                                    <label>Purchase C&DF Cost</label>
                                    <input type="number" class="form-control" placeholder="Enter Purchase C&DF Cost." name="cndfCost" v-model="cndfCost">
                                </div>
                                <div class="form-group">
                                    <label>Purchase Transport Cost</label>
                                    <input type="number" class="form-control" placeholder="Enter Purchase Transport Cost." name="transportCost" v-model="transportCost">
                                </div>
                                <div class="form-group">
                                    <label>Purchase Labour Cost</label>
                                    <input type="number" class="form-control" placeholder="Enter Purchase Labour Cost." name="labourCost" v-model="labourCost">
                                </div>
                                <div class="form-group">
                                    <label>Purchase Products Unit</label>
                                    <input type="number" class="form-control" placeholder="Enter Purchase Product Unit." name="purchaseQuantity" v-model="purchaseQuantity">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class=" col-md-4 offset-4">
                                <button type="submit" class="btn btn-primary" @click.prevent="purchaseSave">Save Purchase</button>
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
        name: "NewPurchase.vue",

        data () {
            return {
                purchaseName:'',
                purchaseInfo:'',
                lcSender:'',
                lcReceiver:'',
                lcOpen:'',
                lcClose:'',
                underInvoice:'',
                shippingCharge:'',
                nbrVat:'',
                cndfCost:'',
                transportCost:'',
                labourCost:'',
                purchaseQuantity:''
            }
        },
        mounted(){
            console.log('Component Mounted.');

            this.getData();
        },

        methods: {
            purchaseSave(){
                console.log('Purchase Save Works.');
                axios.post('/addPurchase', {
                    purchaseName: this.purchaseName,
                    purchaseInfo: this.purchaseInfo,
                    lcSender: this.lcSender,
                    lcReceiver: this.lcReceiver,
                    lcOpen: this.lcOpen,
                    lcClose: this.lcClose,
                    underInvoice: this.underInvoice,
                    shippingCharge: this.shippingCharge,
                    nbrVat: this.nbrVat,
                    cndfCost: this.cndfCost,
                    transportCost: this.transportCost,
                    labourCost: this.labourCost,
                    purchaseQuantity: this.purchaseQuantity
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