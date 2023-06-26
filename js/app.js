



const app={



    data(){

        return{

            currentPage:"home",
            links:[
                {id:0,img:'phone.png',name:"Смартфоны"},
                {id:1,img:'power-bank.png',name:"Powerbank"},
                {id:2,img:'phone case.png',name:"Phone case"},
                {id:3,img:'gpu-icon.png',name:"Видеокарты"},
                {id:4,img:'cpu.png',name:"Процессоры"},
                {id:5,img:'bike.png',name:"Велосипеды"},
            ],

            images:[
                "\thttps://live.staticflickr.com/65535/52913385847_be5c9a2ff2_n.jpg",
                "https://live.staticflickr.com/65535/52914082567_d50b5cfa99_z.jpg",
                "\thttps://live.staticflickr.com/65535/52913385972_599b3c0dfe_b.jpg",

            ],

            query: '',
            compareProducts: [],
            description:" Горный велосипед Trinx M116 Pro (2021)<br> Рама:Alum 6061 Special-shaped Цепь:KMC 7S",
            currentImageIndex: 0,
            isVisible:false,
            isVisiblee:false,
            isVisibleee:false,
            inputVisible: false,
            handlers: [
                () => this.currentPage="phone",
                () => this.currentPage="powerbanks",
                () =>this.currentPage="phonecase",
                () =>this.currentPage="gpu",
                () =>this.currentPage="cpu",
                () =>this.currentPage="bikes",

            ],
            showMenu: false,
            compare:false,
            isChecked:false,
            filter: {
                sort: 'popular'
            },
            selectedProduct: null,

        };


    },


     computed: {
        currentImage() {
            return this.images[this.currentImageIndex];
        },





         productsss(){
             let productsss=this.productss
             const sort=this.filter.sort
             if (sort === 'price') {
                 productsss.sort((a, b) => a.price - b.price)
             }
             if (sort === 'popular') {
                 productsss.sort((a, b) => a.views - b.views)
             }
             return productsss
         },





         filteredProducts(id) {

             return this.productss.filter((product) =>
                 product.name.toLowerCase().includes(this.query.toLowerCase())
             );
         },

    },
    methods: {

        showElement(a) {

            this.isVisible = true;
        },
        hideElement(a) {
            this.isVisible = false;
        },
        showElements(b) {

            this.isVisiblee = true;
        },
        hideElements(b) {
            this.isVisiblee = false;
        },
        showElementss(c) {

            this.isVisibleee = true;
        },
        hideElementss(c) {
            this.isVisibleee = false;
        },
        previousImage() {
            this.currentImageIndex =
                (this.currentImageIndex + this.images.length - 1) % this.images.length;
        },
        nextImage() {
            this.currentImageIndex = (this.currentImageIndex + 1) % this.images.length;
        },
        goToSlide(index) {
            this.currentImageIndex = index;
        },
        showList() {
            this.inputVisible = true;
        },
        hideList() {
            this.inputVisible = false;

       },
        addToCompare(item) {
            console.log(this.compareProducts);
            const findProduct = this.compareProducts.find(
                (i) => i.id === item.id
            );
            if(!findProduct){
                this.compareProducts.push({... item,})
            }

        },
        deleteFromCompare(item) {
            console.log(item);
            this.compareProducts= this.compareProducts.filter((i) => i.id !== item)

        },
        showProduct(id) {
            this.selectedProduct = this.productss[id];

        },


    },

}




Vue.createApp(app).mount('#app')
