<template>
    <div class="col-sm-12 col-lg-6 col-md-12 col-xs-12 col-lg-offset-3 col-md-offset-3">

        <div class="loginnow">
            <form  @submit.prevent="loginCustomer()"  >
                <div class="form-group">
                    <label>EMAIL</label>
                    <input v-model="customerLoginData.email" style="border-radius: 0" type="text" name="email"  placeholder="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>PASSWORD</label>
                    <input v-model="customerLoginData.password" style="border-radius: 0" type="password" name="password"  placeholder="password" id="input-password" class="form-control">

                </div>
                <div class="links">
                    <input style="border-radius: 0" type="checkbox" class="radio-inline">Remember Me
                </div>
                <input style="font-size: 13px;margin: 23px 0 0;width: 100%;border-radius: 0;height: 40px;max-height: 40px;" type="submit" value="SIGN IN" class="btn btn-primary">

                <hr>

                <div style="text-align: center">
                    <p style="font-size:18px">Don't have an account? <a href="#">Sign Up</a></p>
                    <p style=""><a href="#">Forgot Password?</a></p>
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
                customerLoginData:{
                    'email':'',
                    'password':'',
                },
                error:[]
            }

        },
        created:{

        },
        methods:{

            loginCustomer:function () {
                console.log('tag', 'this is me');
            }

        },
    }
</script>