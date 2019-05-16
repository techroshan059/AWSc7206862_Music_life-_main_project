<template>
    <div class="col-sm-12 col-md-8 col-lg-7 menu__list">
        <div class="modal fade" data-backdrop="static" id="showMenuItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
    
                        <div class="row">
                            <div><span data-dismiss="modal" aria-label="Close" style="position: fixed;top: 0px;color: black;right: 0px;margin-right: 12px;font-size: 18px;cursor: pointer;font-weight: 600;z-index: 99999;">X</span></div>
                            <div class="col-md-4" ng-show="ProductItem.ProductGridImage">
                                <div class="item__img-container"><img v-bind:src="'frontend/images/item_images/370x370/'+ singleMenuItemData.item_image_name"></div>
                            </div>
                            <div class="my-2 my-md-0 col-md-8">
    
                                <h3 class="modal-title ng-binding" id="modal-title"> {{singleMenuItemData.item_name}} <br>
                                    <span style="font-size: 20px; color: #9F1D22" class="small dim ng-binding">{{$root.currency_symbol+' '+singleMenuItemData.item_price}}</span></h3>
                                <div style="font-size: 12px;color: #000000;" class="small dim ng-binding">{{singleMenuItemData.item_description}}</div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="margin-bottom: 20px" v-if="singleMenuItemData.item_spice!=null">
                                    <div style="font-size: 12px" class="small-title">Choose Spice Level</div>
                                    <br>
    
    
    
                                    <label v-for="spiceLevel in singleMenuItemData.item_spice.split(',')" :key="spiceLevel.id" class="radio-inline">
                                               <input type="radio" name="check_spice_level" v-model="item_check_spice" v-bind:value="spiceLevel">{{spiceLevel}}
                                           </label>
                                </div>
                                <div style="margin-bottom: 20px" v-if="singleMenuItemData.item_flavors!=null">
                                    <div style="font-size: 12px" class="small-title">Choose Flavours</div>
                                    <br>
    
                                    <label v-for="item_flavors in singleMenuItemData.item_flavors.split(',')" :key="item_flavors.id" class="radio-inline">
                                               <input type="radio" name="check_item_flavours" v-model="item_check_flavours" v-bind:value="item_flavors">{{item_flavors}}
                                           </label>
                                </div>
                                <div style="margin-bottom: 20px" v-if="singleMenuItemData.item_soda!=null">
                                    <div style="font-size: 12px" class="small-title">Choose Soda</div>
                                    <br>
    
                                    <label v-for="item_soda in singleMenuItemData.item_soda.split(',')" :key="item_soda.id" class="radio-inline">
                                               <input type="radio" name="check_item_soda" v-model="item_check_soda" v-bind:value="item_soda">{{item_soda}}
                                           </label>
                                </div>
    
    
    
    
                            </div>
    
    
    
                            <div class="col-md-12">
                                <div style="font-size: 12px" class="small-title">SPECIAL INSTRUCTIONS</div>
                                <p><textarea v-model="special_instructions" placeholder="Add Notes" ng-model="ProductItem.attributesXml" class="form-control form-control--full ng-pristine ng-valid ng-empty ng-touched" style=""></textarea></p>
                            </div>
                        </div>
                    </div>
    
                    <div class="item__footer modal-footer">
                        <div class="row">
                            <div class="col-md-6 mb-2 mb-md-0">
                                <div class="row">
                                   
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary btn-block btn-secondary--add-item" type="button">
                                                   <span style="line-height: 2" class="icofont icofont-minus icomoon--red" @click="UpdateQuantityFromCart(singleMenuItemData,-1)"></span>
                                                   <span><input style="line-height: 2" type="number" v-model="singleMenuItemData.item_qty" :min="1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-min"></span>
                                                   <button style="line-height: 2" class="icofont icofont-plus icomoon--red" @click="UpdateQuantityFromCart(singleMenuItemData,+1)">+</button>
                                               </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2 mb-md-0">
    
                                <button style="border-radius:0" data-dismiss="modal" aria-label="Close" class="btn btn--primary btn-block btn--add-to-cart" @click="AddToCart(singleMenuItemData);" type="button">
                                           <span v-bind:hidden="AItem"  class="">Add to Bag</span> <span  v-show="AItem" class="">Update Bag</span>
                                           <div>
                                               <span class="icomoon icon-shopping-cart icomoon--white"></span>
                                                 <span id="model_item_total_price" class="ng-binding"> {{singleMenuItemData.item_price}}</span>
                                           </div>
                                       </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row menu__header">
            <div class="col-12 menu__category hidden-md-up sidebar-nav">
                <div class="select-dropdown mb-1 d-inline-block" style="width:100%;">
                    <select name="sort" class="form-control select">
                               <option v-for="categoryData in $root.singleCategoryMenuList" v-bind="categoryData" v-bind:key="categoryData.id"  v-bind:value=" 'Category-' + categoryData.title" class="ng-binding ng-scope" style="">
                                   {{ categoryData.title }}
                               </option>
                           </select>
                </div>
            </div>
    
    
    
        </div>
        <div class="clearfix"></div>
        <div class="menu__content wrap">
            <br>
            <div class="ng-scope" v-for="singleCategoryMenuData in $root.singleCategoryMenuList" v-bind="singleCategoryMenuData" v-bind:key="singleCategoryMenuData.id" style="margin-bottom: 30px;">
                <div v-bind:id=" 'Category-' + singleCategoryMenuData.title" class="list-header wrap red" style="
        position: sticky;
        top: 56.5px;
        z-index: 1;
    ">
                    <div class="ng-binding">{{ singleCategoryMenuData.country.nationality+' > '+singleCategoryMenuData.title + ' (' + singleCategoryMenuData.menu_items.length + ')'}}</div>
                    <div class="description dim ng-binding"></div>
                </div>
                <ul v-if="singleCategoryMenuData.menu_items.length>0" class="nav flex-column menu__items">
                    <li class="d-flex justify-content-between ng-scope" v-for="menuItemData in singleCategoryMenuData.menu_items" v-bind="menuItemData" v-bind:key="menuItemData.id">
                        <div class="d-flex flex-column" id="Product">
                            <div class="d-flex align-items-center">
                                <a href="javascript:;">
                                    <span class="mr-2 ng-binding">{{menuItemData.item_name}}</span>
                                </a>
                            </div>
                            <div class="small dim"><span ng-bind-html="product.productDesc" class="ng-binding">{{menuItemData.item_description}}</span></div>
                        </div>
                        <div class="menu__price">
                            <span class=""></span>
                            <span class="ng-binding">{{$root.currency_symbol+' '+menuItemData.MenuItemPrice.menu_item_price}}</span>
                            <a data-toggle="modal" data-target="#showMenuItem" @click="singleDataMenuItem(menuItemData)"><span class="icofont icofont-plus-circle icomoon--green"></span></a>
                        </div>
                    </li>
                </ul>
                <ul v-else-if="singleCategoryMenuData.menu_items.length==0" class="nav flex-column menu__items">
                    <li class="d-flex justify-content-between ng-scope">
    
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center">
                                <a href="javascript:;">
                                    <span class="mr-2 ng-binding"><i class="icofont icofont-exclamation"></i> No Items Found</span>
                                </a>
                            </div>
    
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    
    
    
    </div>
    

</template>



<script>
    export default {
        data() {
            return {
                singleCategoryMenuList: [],
                singleMenuItemData: {
                    'id': '',
                    'item_name': '',
                    'item_description': '',
                    'item_price': '',
                    'item_image_name': '',
                    'item_qty': 1,
                    'item_spice': '',
                    'item_soda': '',
                    'item_flavors': '',
                },
                carts: [],
                cartadd: {
                    'item_id': '',
                    'item_name': '',
                    'item_price': '',
                    'item_qty': 0,
                    'item_spice': '',
                    'item_soda': '',
                    'item_flavors': '',
                    'special_instructions': '',
                
                },
                item_price: 0,
                item_check_spice: '',
                item_check_flavours: '',
                item_check_soda: '',
                special_instructions: '',
                item_id: '',
                AItem: false,
                nation : '',
                category:'', 
            }
        },
        created() {
            this.$root.checkoutBtn = false;
       
            // this.$root.getSingleCategoryMenuList();
    
        },
        methods: {
            singleDataMenuItem(singleMenuItemData) {

                console.log('tag', singleMenuItemData);

                this.item_check_spice = '';
                this.item_check_flavours = '';
                this.item_check_soda = '';
                this.AItem = false;

                this.special_instructions = '',
                this.singleMenuItemData.id = singleMenuItemData.item_id;
                this.singleMenuItemData.item_qty = 1;
                this.singleMenuItemData.item_name = singleMenuItemData.item_name;
                this.singleMenuItemData.item_description = singleMenuItemData.item_description;
                this.singleMenuItemData.item_image_name = singleMenuItemData.item_image_name;
                this.singleMenuItemData.item_price = singleMenuItemData.MenuItemPrice.menu_item_price;
                this.item_price = singleMenuItemData.MenuItemPrice.menu_item_price;
                this.singleMenuItemData.item_spice = singleMenuItemData.item_spice;
                this.singleMenuItemData.item_soda = singleMenuItemData.item_soda;
                this.singleMenuItemData.item_flavors = singleMenuItemData.item_flavors;
                if (this.$root.carts_local.length > 0) {
    
                    for (var cart in this.$root.carts_local) {
                    
                        if (this.$root.carts_local[cart].item_id == singleMenuItemData.item_id) {
                            this.AItem = true;
                            this.special_instructions = this.$root.carts_local[cart].special_instructions;
                            this.item_check_spice = this.$root.carts_local[cart].item_spice;
                            this.item_check_flavours = this.$root.carts_local[cart].item_flavors;
                            this.item_check_soda = this.$root.carts_local[cart].item_soda;
                            this.singleMenuItemData.item_qty = this.$root.carts_local[cart].item_qty;
                        }
                    }
    
                }
                // console.log(this.singleMenuItemData.item_qty);
                $('#model_item_total_price').html((this.singleMenuItemData.item_price * this.singleMenuItemData.item_qty).toFixed(2)).show();
            },
    
            UpdateQuantityFromCart(singleMenuItemData, count) {
                if (count == '-1') {
                    if (singleMenuItemData.item_qty > 1) {
                        this.singleDataMenuItem.item_qty = singleMenuItemData.item_qty--;
                    }
                } else if (count == "+1") {
                    this.singleDataMenuItem.item_qty = singleMenuItemData.item_qty++;
                }

                this.countTotalItemPrice();
    
            },
    
            countTotalItemPrice() {
                this.item_price= (this.singleMenuItemData.item_qty * this.singleMenuItemData.item_price);
                $('#model_item_total_price').html(this.item_price.toFixed(2)).show();
            },
    
            AddToCart(singleMenuItemData) {

                console.log('tax', this.$root.o_minimum_order);


           
                this.cartadd.item_id = singleMenuItemData.id;
                this.cartadd.item_qty = singleMenuItemData.item_qty;
                this.cartadd.item_name = singleMenuItemData.item_name;
                this.cartadd.item_price = singleMenuItemData.item_price;
                this.cartadd.item_spice = this.item_check_spice;
                this.cartadd.item_soda = this.item_check_soda;
                this.cartadd.item_qty = singleMenuItemData.item_qty;
                this.cartadd.item_flavors = this.item_check_flavours;
                this.cartadd.special_instructions = this.special_instructions;
                if (this.$root.carts_local.length > 0) {
                    for (var cart in this.$root.carts_local) {
                        if (this.$root.carts_local[cart].item_id == singleMenuItemData.id) {
                            this.$root.carts_local.splice(cart, 1);
                        }
                    }
                }
                this.$root.carts_local.push(this.cartadd);
                this.cartadd = {};
                this.storeCart();

    
            },
         
            storeCart() {
                let parsed = JSON.stringify(this.$root.carts_local);
                
            
                localStorage.setItem('o_tax_payment', this.$root.o_tax_payment);
                localStorage.setItem('o_delivery_amount', this.$root.o_delivery_amount);
                localStorage.setItem('ktmspice-carts', parsed);
                this.$root.cartData();
                
               // console.log('cartData', localStorage.getItem('ktmspice-carts'));
            }
        },
        filters: {
    
    
    
    
        }
    
    }
</script>