
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


window.axios = require('axios');
window.Vue = require('vue');



Vue.component('menucategories', require('./components/MenuCategories.vue'));

Vue.component('menuitems', require('./components/MenuItemsComponent.vue'));

Vue.component('itemcart', require('./components/ItemCartComponent.vue'));

Vue.component('customeraddress', require('./components/CustomerAddressComponent.vue'));

Vue.component('registerform', require('./components/RegisterCustomerComponent.vue'));
Vue.component('loginform', require('./components/LoginCustomerComponent.vue'));







window.onload = function () {
    var app = new Vue({
        el: '#app',
        data() {
            return {
                categoryId: 0,
                countryId: 0,
                crsf_token: 0,
                customerAddress: 0,
                carts_local: [],
                subTotalAmountCart: 0,
                itemTotalVatAmount: 0,
                itemGrandPrice: 0,
                showprofile: false,
                showbag: false,
                shownotifications: false,
                localData: [],
                o_minimum_order: 0,
                o_tax_payment: 0,
                o_delivery_amount: 0,
                currency_symbol: '',
                getStatus: '',
                checkoutBtn: false,
                singleCategoryMenuList: [],

            }
        },

        beforeMount() {
            this.getSettingOrder();
            this.getSettingGeneral();
        },

        methods: {
            getSingleCategoryMenuList(countryId, categoryId) {
                window.axios.get('/api/$2y$10$O4lOA8pNdexmeqnw5J0F7.MLwNurc7DZPZRjAVyyQ38sLVv0cgab6/menu-items/' + countryId + '/' + categoryId)
                    .then((response) => {
                        this.singleCategoryMenuList = response.data.data;
                    });
            },
            getSettingOrder:function() {
                window.axios.get('api/$2y$10$O4lOA8pNdexmeqnw5J0F7.MLwNurc7DZPZRjAVyyQ38sLVv0cgab6/settingorder')
                    .then((response) => {
                        this.o_minimum_order = response.data.data.o_minimum_order;
                        this.o_tax_payment = response.data.data.o_tax_payment;
                        this.o_delivery_amount = response.data.data.o_delivery_amount;

                     
                   
                    });
            },
            getSettingGeneral:function() {
                window.axios.get('api/$2y$10$O4lOA8pNdexmeqnw5J0F7.MLwNurc7DZPZRjAVyyQ38sLVv0cgab6/settinggeneral')
                    .then((response) => {
                        this.currency_symbol = response.data.data.currency.symbol;
                    });
            },

            cartData() {
                this.carts_local = [];
                this.subTotalAmountCart = 0;
                if (localStorage.getItem('ktmspice-carts')) {
                    this.carts_local = JSON.parse(localStorage.getItem('ktmspice-carts'));
                    for (var cart in this.carts_local) {
                        this.subTotalAmountCart = this.subTotalAmountCart + (this.carts_local[cart].item_price * this.carts_local[cart].item_qty);
                    }

                    var delivery_amount = localStorage.getItem('o_delivery_amount');
                    console.log('de', delivery_amount);
                   


                    this.itemTotalVatAmount = this.subTotalAmountCart * (localStorage.getItem('o_tax_payment')/100);
                   // this.itemGrandPrice = this.subTotalAmountCart + this.itemTotalVatAmount + delivery_amount
               
                    

                //     this.itemTotalVatAmount = this.subTotalAmountCart * (this.o_tax_payment / 100);
                //     this.itemGrandPrice = this.subTotalAmountCart + this.itemTotalVatAmount + this.o_delivery_amount;
                }
               
            },



            ShowHideWindow: function (window) {
                switch (window) {
                    case "NOTIFICATIONS":
                        this.showprofile = false;
                        this.showbag = false;
                        this.shownotifications = !this.shownotifications;
                        break;
                    case "PROFILE":
                        this.shownotifications = false;
                        this.showbag = false;
                        this.showprofile = !this.showprofile;
                        break;
                    case "BAG":
                        this.shownotifications = false;
                        this.showprofile = false;
                        this.showbag = !this.showbag;
                        break;
                }

            },
            hidewindow: function (window) {
                switch (window) {
                    case "NOTIFICATIONS":
                        this.shownotifications = false;
                        break;
                    case "PROFILE":
                        this.showprofile = false;
                        break;
                    case "BAG":
                        this.showbag = false;
                        break;
                }
            },

            getstate: function (window) {
                switch (window) {
                    case "NOTIFICATIONS":
                        return this.shownotifications;
                        break;
                    case "PROFILE":
                        return this.showprofile;
                        break;
                    case "BAG":
                        return this.showbag;
                        break;
                };
                return false;

            },


        },


        created() {
            this.cartData();
            console.log('tax', this.o_delivery_amount);
          
        },

      

      
       

    });
}

