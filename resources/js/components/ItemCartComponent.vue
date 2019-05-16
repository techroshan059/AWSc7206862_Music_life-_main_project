<template>
    <div v-if="$root.carts_local.length==0" class="col-lg-3 hidden-md-down" style="">
        <div class="sticky-side">
            <h3 class="small-title">My Bag</h3>
            <div class="cart cart--empty d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <img class="mb-2" v-bind:src="'frontend/images/cart-empty.png'" alt="">
                    <div ng-hide="showEmpty()" class="" style="">Your bag is empty.</div>
                    <span class="subtitle" style="">Add items to get started.</span>
                </div>
            </div>
        </div>
    </div>
    <div v-else class="col-lg-3 hidden-md-down" style="">
        <div class="sticky-side">
            <h3 class="small-title">My Bag</h3>
            <span class="icomoon icon-close float-right hidden-sm-up close-overlay"></span>
            <div class="cart__content spinner">
                <div class="d-flex flex-column">
                    <div class="cart__items-wrapper">
                        <table class="table cart__restaurant-table">
    
                            <tbody class="cart__items">
                                                            <!-- ngRepeat: cartItem in CartByVendor().Items -->
                                <tr v-for="cItem in $root.carts_local" :key="cItem.id" ng-repeat="cartItem in CartByVendor().Items" ng-mouseover="cartItem.HasMouseOver=true" ng-mouseleave="cartItem.HasMouseOver=false" class="ng-scope" style="">
                                    <td class="num">
                                        <span class="ng-binding">{{cItem.item_qty}}x</span>
    
                                    </td>
                                    <td width="60%" style="cursor:pointer;" ng-click="$event.preventDefault();$event.stopPropagation();ShowAddUpdateItemDialog(cartItem);"><span class="ng-binding">
                                        {{cItem.item_name}}</span>
    
                                        <div class="small dim cart__item-desc ng-binding" style="width:60%;"></div>
                                    </td>
                                    <td class="price text-right">
                                        <div class="ng-binding"><span class="discount ng-binding ng-hide" ng-show="cartItem.oldprice>0"></span> {{(cItem.item_qty * cItem.item_price).toFixed(2)}}
                                        </div>
                                    </td>
                                    <td>
                                        <i class="icofont icofont-trash red" @click="removeCart(cItem)" style="cursor:pointer;"></i>
                                    </td>
                                </tr>
                                <!-- end ngRepeat: cartItem in CartByVendor().Items -->
    
                            </tbody>
    
                        </table>
                    </div>
    
                </div>
    
                <div class="cart__summary">
                    <div ng-repeat="charge in CartByVendor().Totals| orderBy:'RowId'" ng-class="{'cart__grand-total green': charge.Label=='NET PAYABLE'}" ng-hide="cartloading()" class="d-flex justify-content-between mb-1 ng-scope" style="">
                        <div>
                            <span class="dim uppercase ng-binding" ng-show="charge.Label!='NET PAYABLE'">SUB TOTAL</span>
    
                        </div>
                        <div class="text-right">
    
                            <span ng-show="charge.Label!='NET PAYABLE'" class="ng-binding">{{$root.currency_symbol+' '+$root.subTotalAmountCart.toFixed(2)}}</span>
                        </div>
    
                    </div>

                      <div ng-repeat="charge in CartByVendor().Totals| orderBy:'RowId'" ng-class="{'cart__grand-total green': charge.Label=='NET PAYABLE'}" ng-hide="cartloading()" class="d-flex justify-content-between mb-1 ng-scope">
                        <div>
                            <span class="dim uppercase ng-binding" ng-show="charge.Label!='NET PAYABLE'">DELIVERY CHARGE</span>
                        </div>
                        <div class="text-right">
    
                            <span ng-show="charge.Label!='NET PAYABLE'" class="ng-binding">{{ $root.currency_symbol + ' ' + $root.o_delivery_amount }} </span>
                        </div>
                    </div>
                    <div ng-repeat="charge in CartByVendor().Totals| orderBy:'RowId'" ng-class="{'cart__grand-total green': charge.Label=='NET PAYABLE'}" ng-hide="cartloading()" class="d-flex justify-content-between mb-1 ng-scope">
                        <div>
                            <span class="dim uppercase ng-binding" ng-show="charge.Label!='NET PAYABLE'">VAT</span>
    
                        </div>
                        <div class="text-right">
    
                            <span ng-show="charge.Label!='NET PAYABLE'" class="ng-binding">{{$root.currency_symbol+' '+$root.itemTotalVatAmount.toFixed(2)}}</span>
                        </div>
                    </div>
                  
                    <!-- end ngRepeat: charge in CartByVendor().Totals| orderBy:'RowId' -->
                    <div ng-repeat="charge in CartByVendor().Totals| orderBy:'RowId'" ng-class="{'cart__grand-total green': charge.Label=='NET PAYABLE'}" ng-hide="cartloading()" class="d-flex justify-content-between mb-1 ng-scope">
                        <div>
                            <span class="dim uppercase ng-binding" ng-show="charge.Label!='NET PAYABLE'">GRAND TOTAL </span>
                        </div>
                        <div class="text-right">
    
                            <span ng-show="charge.Label!='NET PAYABLE'" class="ng-binding">{{$root.currency_symbol+' '+$root.itemGrandPrice.toFixed(2)}}</span>
                        </div>
                    </div>
                    <!-- end ngRepeat: charge in CartByVendor().Totals| orderBy:'RowId' -->
    
    
    
                    <!-- Show this message when cart doesn't exceed Rs. 400 -->
                    <div class="cart__warning" v-show="$root.subTotalAmountCart<$root.o_minimum_order">
                        <div colspan="3" class="ng-binding">
                            Subtotal must exceed {{ $root.currency_symbol + '' + $root.o_minimum_order }} for delivery orders.
                        </div>
                    </div>
                    <!-- End Message -->
                
    
                  
                    <hr v-bind:hidden="$root.subTotalAmountCart<$root.o_minimum_order || this.$root.checkoutBtn">
                    <div>
                        <div colspan="3">
                            <button v-bind:hidden="$root.subTotalAmountCart<$root.o_minimum_order || this.$root.checkoutBtn" class="btn btn-block btn-success">
                                    Proceed to Checkout
                                </button>
                        </div>
                    </div>
    
    
                </div>
            </div>
        </div>
        
    </div>

    
    
    
    
    
</template>

<script>
    export default {
    
        created() {
          
        },
    
        methods: {
            removeCart(item) {
                //console.log(item);
    
                this.$root.carts_local.splice(item, 1);
                this.store();
            },
            store() {
                let parsed = JSON.stringify(this.$root.carts_local);
                localStorage.setItem('ktmspice-carts', parsed);
            }
    
        }
    }
</script>



