const about = require('./components/ExampleComponent.vue')

const allStock = require('./components/admin/AllStock')
const addStock = require('./components/admin/NewStock')

const addCategory = require('./components/admin/NewCategory')
const allCategory = require('./components/admin/AllCategory')

const addBrand = require('./components/admin/NewBrand')
const allBrand = require('./components/admin/AllBrand')

const addSale = require('./components/admin/NewSale')
const allSale = require('./components/admin/AllSale')

const addPurchase = require('./components/admin/NewPurchase')
const allPurchase = require('./components/admin/AllPurchase')


export const  routes=[
    {path: '/about', components: about},

    {path:'/all-stock', components: allStock},
    {path:'/add-stock', components: addStock},

    {path: '/add-category', components: addCategory},
    {path: '/all-category', components: allCategory},

    {path: '/add-brand', components: addBrand},
    {path: '/all-brand', components: allBrand},

    {path: '/add-sale', components: addSale},
    {path: '/all-sale', components: allSale},

    {path: '/add-purchase', components: addPurchase},
    {path: '/all-purchase', components: allPurchase},
    
];