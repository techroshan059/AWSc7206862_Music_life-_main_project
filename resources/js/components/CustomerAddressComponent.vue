<template>

   <div>
      <div class="modal fade" id="deletePop" data-backdrop="static"
           data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="deletePop"
           aria-hidden="true" style="display: none;">
         <div class="modal-dialog modal-md" role="document">
            <div class="modal-content b-0">
               <div class="modal-body text-center">
                  <i class="icon icon-question" style="font-size: 5em;color: #65cadb;"></i>
                  <h4>Are you sure? You want to delete</h4>
                  <h5>Information of {{cus_add_title}} </h5>
                  <span>Note: <strong>You won't be able to revert this!</strong></span> <br>
                  <a style="margin-top:10px;margin-bottom:10px"  class="btn btn-outline-success"
                     @click="deleteCustomerAddressData">Yes, delete it</a>
                  <a data-dismiss="modal" aria-label="Close" style="margin-top:10px;margin-bottom:10px"
                     class="btn btn-outline-danger">Cancel</a>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" data-backdrop="static" id="addressSaveDialog" tabindex="-1" role="dialog" aria-labelledby="addressSaveDialog" aria-hidden="true" style="display: none;">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="container add-delivery-address ng-scope">
                  <div class="modal-action modal-action--cancel" data-dismiss="modal" aria-label="Close">×</div>
                  <div class="modal-body add-delivery-address__form-container mt-3 bold" id="modal-body">
                     <span style=""><strong>Your Delivery Address</strong></span>

                     <hr style="margin-bottom: 11px; margin-top: 11px">
                     <span  class="">
               <br>

               <span ng-show="address.pos.lat!=default_pos.lat" style="max-width:250px;word-wrap:break-word;" title="" class="ng-binding">
               </span>
             </span>
                     <label>
                     </label>
                     <form @submit.prevent="addCustomerAddress()" class="add-delivery-address__form ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-minlength">
                        <fieldset>
                           <div class="row">


                              <div class="form-group col-12"  style="">
                                 <label class="small-title">Delivery Location <span class="red">*</span></label>
                                 <input type="text" name="address_title" v-model="customerAddress.delivery_location" class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" placeholder="Enter Title e.g." style="">
                                 <span class="error" v-if="errors.delivery_location">{{errors.delivery_location[0]}}</span>
                              </div>
                              <div class="form-group col-12"  style="">
                                 <label class="small-title">Address Title <span class="red">*</span></label>
                                 <input type="text" name="address_title" v-model="customerAddress.address_title" class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" placeholder="Enter Title e.g. Home, Office" style="">
                                 <span class="error" v-if="errors.address_title">{{errors.address_title[0]}}</span>
                              </div>
                              <div class="form-group col-sm-6"  style="">
                                 <label class="small-title">First Name <span class="red">*</span></label>
                                 <input type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"  name="first_name" v-model="customerAddress.first_name" placeholder="Your First Name" >
                                 <span class="error" v-if="errors.first_name">{{errors.first_name[0]}}</span>
                              </div>
                              <div class="form-group col-sm-6" >
                                 <label class="small-title">Last Name <span class="red">*</span></label>
                                 <input type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Your Last Name" name="last_name" v-model="customerAddress.last_name" >
                                 <span class="error" v-if="errors.last_name">{{errors.last_name[0]}}</span>
                              </div>
                              <div class="form-group col-12">
                                 <label class="small-title">Organization</label>
                                 <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="last_name" v-model="customerAddress.organization" placeholder="Enter Organization Name" >
                              </div>
                              <div class="form-group col-sm-12"  style="">
                                 <label class="small-title">Detail Address Direction <span class="red">*</span></label>
                                 <textarea class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength"  rows="3" maxlength="500" name="Detail" v-model="customerAddress.detail_address_direction" placeholder="Enter Detail Address Direction" ></textarea>
                                 <span class="error" v-if="errors.detail_address_direction">{{errors.detail_address_direction[0]}}</span>
                              </div>
                              <div class="form-group col-sm-6" >
                                 <label class="small-title">Mobile Number <span class="red">*</span></label>
                                 <div class="input-group">
                                    <span class="input-group-addon">+001</span> <input type="text" min="0" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="10" v-bind:maxlength="10" name="mobile_number" v-model="customerAddress.mobile_number"  placeholder="XXXXXXXXXX" >

                                 </div>
                                 <span class="error" v-if="errors.mobile_number">{{errors.mobile_number[0]}}</span>
                              </div>
                              <div class="form-group col-sm-6" >
                                 <label class="small-title">Alternate Phone Number</label>
                                 <div class="input-group">
                                 <span class="input-group-addon">+001</span> <input type="text" min="0" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="10" v-bind:maxlength="10" name="mobile_number" v-model="customerAddress.alt_phone_number"  placeholder="XXXXXXXXXX" >
                                 </div>
                                   <span class="error" v-if="errors.alt_phone_number">{{errors.alt_phone_number[0]}}</span>
                              </div>
                              <div class="col-sm-12" style="">
                                 <input type="checkbox" id="set_default_address" v-model="customerAddress.set_as_default" value="true" class="ng-pristine ng-untouched ng-valid ng-empty">
                                 <label for="set_default_address">
                                    <span>Set As Default Address</span>
                                 </label>

                              </div>

                              <input style="width: 100%;border-radius: 0;height: 40px;max-height: 40px;background-color: #337ab7" type="submit" value="Submit New Address" class="btn btn-primary">

                           </div>
                        </fieldset>
                     </form>
                  </div>
                  <!-- .modal-body -->
               </div>
            </div>
         </div>
      </div>

      <div class="row" v-if="customerAddressList.length==0">

  <!-- ngRepeat: uAdd in UserProfile.Addresses -->
   <div class="col-lg-6">
      <div class="checkout-address align-items-center checkout-address--add-new-da">
         <div class="mr-2">
            <span class="icofont icofont-plus"></span>
         </div>
         <a href="javsacript:;" @click="OpenAddressSaveDialog()"> <span class="green" style="font-size: 14px;">Add New Delivery Address</span></a><!-- This link will trigger the popup modal which will then bring up the /add-address.html -->
      </div>
   </div>
</div>
<div class="row" v-else>
   <div  class="col-lg-6 ng-scope" v-for="cAdd in customerAddressList" v-bind:key="cAdd.id" style="">
      <div class="checkout-address">
         <label>
         
         <span class="d-block ng-binding" style="text-transform:uppercase;">
             <input type="radio" name="set_as_default" v-model=" cAdd.id" v-if=" cAdd.set_as_default==1" checked="checked" >
             <input type="radio" name="set_as_default" v-model=" cAdd.id" v-if=" cAdd.set_as_default==0" >
             {{ cAdd.address_title }}</span>
         <span class="d-block ng-binding">{{ cAdd.first_name + ' '+cAdd.last_name }}</span>
         <span class="d-block ng-binding">{{ cAdd.delivery_location }}</span>
         <span class="d-block ng-binding">{{ cAdd.detail_address_direction }}</span>
         <span class="d-block ng-binding">Phone: {{ cAdd.mobile_number }}<span v-if="cAdd.alt_phone_number!=null"  class="ng-binding">, {{ cAdd.alt_phone_number }}</span></span>
         </label>
         <div class="ml-auto">
            <a href="#deletePop" data-toggle="modal" data-target="#deletePop" @click="deletePop(cAdd.id,cAdd.address_title)"><span class="icofont icofont-delete-alt" title="Remove Address"></span></a>
            <a href="javascript:;" ng-click="OpenAddressUpdateDialog(uAdd)"><span class="icofont icofont-edit-alt" title="Update Address"></span></a>
         </div>
         <!-- Clicking on this edit button will bring the modal popup from /add-address.html but with these field pre-populated. -->
      </div>
   </div>
   <!-- end ngRepeat: uAdd in UserProfile.Addresses -->
   <div class="col-lg-6" ng-hide="isAdmin">
      <div class="checkout-address align-items-center checkout-address--add-new-da">
         <div class="mr-2">
            <span class="icofont icofont-plus"></span>
         </div>
       <a href="javsacript:;" @click="OpenAddressSaveDialog()"> <span class="green" style="font-size: 14px;">Add New Delivery Address</span></a><!-- This link will trigger the popup modal which will then bring up the /add-address.html -->
        </div>
   </div>
</div>
   </div>
</template>
 <script>

    // import VueGoogleAutocomplete from 'vue-google-autocomplete';
    export default {
       
        data(){
            return{
                customerAddressList:[],

                customerAddress:{
                    'delivery_location':'',
                    'address_title':'',
                    'first_name':'',
                    'last_name':'',
                    'organization':'',
                    'detail_address_direction':'',
                    'mobile_number':'',
                    'alt_phone_number':'',
                    'set_as_default':false,
                },
                errors:[],
                cus_add_id:'',
                cus_add_title:'',

            }
        },



        created(){
         this.getCustomerAddress();

        },
        methods:{

            getCustomerAddress:function () {
                window.axios.get('/api/$2y$10$O4lOA8pNdexmeqnw5J0F7.MLwNurc7DZPZRjAVyyQ38sLVv0cgab6/customer-address/'+this.$root.crsf_token)
                    .then((response) => {
                        this.customerAddressList = response.data.data;
                        this.$root.customerAddress = this.customerAddressList.length;
                        console.log(this.customerAddressList );
                    });
            },
            addCustomerAddress:function () {

                this.errors=[]
                axios.post('/api/$2y$10$O4lOA8pNdexmeqnw5J0F7.MLwNurc7DZPZRjAVyyQ38sLVv0cgab6/addnewcustomeraddressess',{
                    customer_id:this.$root.crsf_token,
                    delivery_location:this.customerAddress.delivery_location,
                    address_title:this.customerAddress.address_title,
                    first_name:this.customerAddress.first_name,
                    last_name:this.customerAddress.last_name,
                    organization:this.customerAddress.organization,
                    detail_address_direction:this.customerAddress.detail_address_direction,
                    mobile_number:this.customerAddress.mobile_number,
                    alt_phone_number:this.customerAddress.alt_phone_number,
                    set_as_default:this.customerAddress.set_as_default,

                }).then(response=>{

                    this.errors=[];
                    this.customerAddress.delivery_location='';
                      this.customerAddress.address_title='';
                       this.customerAddress.first_name='';
                      this.customerAddress.last_name='';
                       this.customerAddress.organization='';
                       this.customerAddress.detail_address_direction='';
                       this.customerAddress.mobile_number='';
                        this.customerAddress.alt_phone_number='';
                       this.customerAddress.set_as_default=false;
                    $('#modalStaffInfo').modal('toggle');
                    this.getCustomerAddress();
                }).catch(error=>{
                    if(error.response.status==401){

                        this.errors = error.response.data.error;
                    }
                })

            },
            OpenAddressSaveDialog:function () {
                 $("#addressSaveDialog").modal('toggle');
            },
            deleteCustomerAddressData:function(){
                window.axios.delete('/api/$2y$10$O4lOA8pNdexmeqnw5J0F7.MLwNurc7DZPZRjAVyyQ38sLVv0cgab6/addnewcustomeraddressess/delete/'+this.cus_add_id)
                    .then((response) => {
                        $("#deletePop").modal('toggle');
                        this.getCustomerAddress();
                        this.cus_add_id='';
                        this.cus_add_title='';
                    });
            },
            deletePop(cus_add_id, cus_add_title) {

                this.cus_add_id = cus_add_id;
                this.cus_add_title = cus_add_title;
            }
        },
        filters: {

            subStr: function (string) {
                return string.substring(0, 15) + '...';
            },

        }

    }
</script>