class Product{
    constructor(name, price, img_src, id){ //создаёт объект на основе класса
        this.name = name; //1name - свойство, 2name - название
        this.price = price; //this указывает на текущий экзмпляр объекта
        this.img_src = img_src;
        this.id = id;
    }
    render(parentEl){
        let productItem = document.createElement('a');
        productItem.href = `/product.php?id=${this.id}`;
        productItem.classList.add('catalog-products-item');
        productItem.innerHTML = `
            <div class="img" style="background-image: url('${this.img_src}')"></div>
            <h2>${this.name}</h2>
            <p>${this.price} руб.</p>
        `;
        parentEl.appendChild(productItem);
    } 
}

class Catalog {
    constructor(){
        this.el = document.querySelector('.catalog');
        this.section = this.el.getAttribute('data-section');
        this.products = [];
        this.filters = {
            price:[
                [0, 20000],
                [0, 1000],
                [1000,2000],
                [2000, 3500],
                [3500, 5000],
                [5000, 10000],
                [10000, 20000]
            ],
            activePrice: null,
            category: [],
            activeCategory: null
        };
        this.renderFilterPrice();
    }
    renderFilterPrice(){
        let select = document.querySelector('.catalog-filters-price select');
        this.filters.price.forEach((priceArr) =>{
            let option = document.createElement('option');
            option.innerHTML = `${priceArr[0]}-${priceArr[1]} руб.`;
            option.value = `${priceArr[0]}-${priceArr[1]}`;
            select.appendChild(option);
       });
       let that = this;

       select.addEventListener('change', function(){
           that.filters.activePrice = this.value;
           that.load();
       })
    }
    renderCategory(){
        let select = document.querySelector('.catalog-filters-category select');
        select.innerHTML = '';
        
        let option = document.createElement('option');
        option.innerHTML = 'Все товары';
        option.value = 'all';
        select.appendChild(option);

        this.filters.category.forEach((categoryArr) => {
            let option = document.createElement('option');
            option.innerHTML = `${categoryArr.name}`;
            option.value = `${categoryArr.code}`;

            select.appendChild(option);
        });
        let that = this;

        select.addEventListener('change', function(){
           that.filters.activeCategory = this.value;
           that.load();
       })
    }

    render(){
        let catalogProductsBox = this.el.querySelector('.catalog-products');
        catalogProductsBox.innerHTML = '';

        this.products.forEach((product) => {
            product.render(catalogProductsBox);
        });
    }
    preloadOn(){
        this.el.classList.add('preload');
    }
    preloadOff(){
        this.el.classList.remove('preload');
    }
    paginationRender(paginationConfig){
        let paginationEl = this.el.querySelector('.catalog-pagination');
        paginationEl.innerHTML = '';

        for (let i=1; i<=paginationConfig.countPage; i++){
            let paginationItem = document.createElement('div');
            paginationItem.classList.add('catalog-pagination-item');

            if (i == paginationConfig.nowPage){
                paginationItem.classList.add('active');
            }

            paginationItem.innerHTML = i;
            paginationItem.setAttribute('data_page_id', i);

            let that = this;
            paginationItem.addEventListener('click', function(){
                let pageNum = this.getAttribute('data_page_id');
                that.load(pageNum);
            });

            paginationEl.appendChild( paginationItem);
        }
    }
    load(page = 1){
        this.preloadOn();
        let xhr = new XMLHttpRequest();
        let path = `/handlers/catalog_handler.php?page=${page}&section=${this.section}`;
        //console.log(this.filters.activePrice);
        if (this.filters.activePrice != null){
            path += `&filters_price=${this.filters.activePrice}`;
        }
        if (this.filters.activeCategory != null){
            path += `&filter_category=${this.filters.activeCategory}`;
        }
        
        xhr.open('GET', path);
        xhr.send();
        xhr.addEventListener('load', () => {
            let data = JSON.parse(xhr.responseText);
            this.paginationRender(data.pagination);
            this.products = [];
            data.products.forEach((productItem)=>{
              this.products.push( new Product (productItem.name, productItem.price, productItem.img_src, productItem.id) );  
            });
            this.filters.category = data.category;
            //console.log(data.products);
            this.renderCategory();
            this.render();
            this.preloadOff();
        });
    }
}

let catalog = new Catalog();
catalog.load();
