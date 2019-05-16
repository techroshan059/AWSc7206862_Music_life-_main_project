<template>
    <div class="col-md-4 col-lg-2 menu__category hidden-sm-down sidebar-nav">
        <span class="small-title hidden-md-up">CATEGORIES</span>
        <div class="sticky-side">
            <ul class="nav flex-md-column flex-row" style="font-size: 12px;">
                <li style="font-size: 14px;" class="recommended"><span class="icofont icofont-fire icomoon--red"></span><span
                        style="color:#8c0000;">Categories</span></li>
                <li class="hidden-sm-down">
                    <div class="dropdown-divider"></div>
                </li>
                <li v-for="nat in nationalityList" v-if="nat.MenuCategory.length!=0" v-bind:key="nat.id" style="margin-bottom: 0.5rem !important;"
                    class="ng-scope">
                    <a style="font-size: 15px;font-weight: 600;" class="ng-binding">{{(nat.nationality )}}</a>
                    <ul style="list-style: none; padding: 0px;margin-top: 8px;margin-left: 8px;">
                        <li v-for="category_ in nat.MenuCategory" v-bind:key="category_.id">
                            <a href="#" @click="getCategoryData(nat.id,category_.id)"><i class="icofont icofont-cur-riyal-minus"></i>
                                {{ category_.title }}</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                nationalityList: [],
                countryId: '',
                categoryId: '',
            }
        },
        created() {
            this.getMenuCategories();
            this.$root.getSingleCategoryMenuList(this.countryId, this.categoryId);
        },
        methods: {
            getMenuCategories() {
                window.axios.get('/api/$2y$10$O4lOA8pNdexmeqnw5J0F7.MLwNurc7DZPZRjAVyyQ38sLVv0cgab6/menu-categories')
                    .then((response) => {
                        this.nationalityList = response.data.data;
                    });
            },
            getCategoryData(countryId, categoryId) {
                this.$root.getSingleCategoryMenuList(countryId, categoryId);
            }

        }
    }
</script>