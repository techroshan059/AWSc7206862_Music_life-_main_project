<template>

    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
        <div class="loginnow">
            <form  @submit.prevent="registerNewCustomer()" >

                <p style="margin-bottom: 30px;font-size:16px;font-family:Roboto, sans-serif">Fields with <span style="color: darkred">*</span> are required.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>First Name <span style="color: red">*</span></label>
                            <input style="border-radius: 0" type="text" v-model="customerInfo.first_name" name="first_name" placeholder="First Name" id="first_name" class="form-control">
                            <span class="error" v-if="errors.first_name">{{errors.first_name[0]}}</span>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input style="border-radius: 0" type="text" name="last_name"  v-model="customerInfo.last_name" placeholder="Last Name" id="last_name" class="form-control">
                            <span class="error" v-if="errors.last_name">{{errors.last_name[0]}}</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email Address <span style="color: red">*</span></label>
                            <input style="border-radius: 0" type="email" name="email" v-model="customerInfo.email"  placeholder="Email Address" id="email" class="form-control">
                            <span class="error" v-if="errors.email">{{errors.email[0]}}</span>
                        </div>
                        </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Mobile Number <span style="color: red">*</span></label>
                            <input style="border-radius: 0" type="text" name="pnumber"  v-model="customerInfo.pnumber"  placeholder="Mobile Number" id="Mobile Number" class="form-control">
                            <span class="error" v-if="errors.pnumber">{{errors.pnumber[0]}}</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>CHOOSE A PASSWORD <span style="color: red">*</span></label>

                            <input style="border-radius: 0" type="password"  v-model="customerInfo.password" name="password"  value="" placeholder="Password" class="form-control">
                            <span class="error" v-if="errors.password">{{errors.password[0]}}</span>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div>
                            <label>CONFIRM PASSWORD <span style="color: red">*</span></label>
                            <input style="border-radius: 0" type="password" name="confirmed"  placeholder="Confirm Password" id="cpassword" class="form-control">

                        </div>
                    </div>
                </div>


                <span style="font-size: 18px;font-family: initial;">By Signing Up, I agree to Kathmandu Spice’s Terms of Use and Privacy Policy.</span>
                <input style="font-size: 13px;margin: 23px 0 0;width: 100%;border-radius: 0;height: 40px;max-height: 40px;" type="submit" value="SIGN UP" class="btn btn-primary">

                <hr>

                <div style="text-align: center">
                    <p style="font-size:18px;">Already have an account?<a >Sign In</a></p>
                </div>

            </form>
        </div>
    </div>
</template>

<script>
    export default
    {
        data(){

            return{
                customerInfo:{
                    'first_name':'',
                    'last_name':'',
                    'email':'',
                    'password':'',
                    'pnumber':'',

                },
                errors:[],

            }

        },
        created:{

        },
        methods:{
            registerNewCustomer:function () {

                this.errors=[]
                axios.post('api/$2y$10$O4lOA8pNdexmeqnw5J0F7.MLwNurc7DZPZRjAVyyQ38sLVv0cgab6/auth/customer-register',{
                    first_name:this.customerInfo.first_name,
                    last_name: this.customerInfo.last_name,
                    email: this.customerInfo.email,
                    password: this.customerInfo.password,
                    pnumber: this.customerInfo.pnumber,

                }).then(response=>{
                    console.log('hy world');
                }).catch(error=>{
                    if(error.response.status==401){

                       this.errors = error.response.data.error;
                    }
                })



            }
        },
    }
</script>