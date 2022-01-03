
class Product {
    constructor(name, price, id) {
        this.name = name,
        this.price = price,
        this.id = id;
    }
}

// Instanciando la clase Product
const productOne = new Product("Remera Adidas talle L Negro", 95000, "1");
const productTwo = new Product("Zapatilla nike talle 42 azul", 15000, "2");
const productThree = new Product("Zapatilla Under Armor talle 45 gris/negro", 18000, "3");
const productFour = new Product("Remera Fila talle S blanco/rojo", 9000, "4");
const productFive = new Product("Campera Maraton Adidas talle M gris", 25000, "5");
const productSix = new Product("Campera Nike talle S rosa/azul", 14000, "6");
const productSeven = new Product("Remera Gucci tale XL blanco", 12000, "7");
const productEight = new Product("Campera Nike talle L blanco/verde", 20000, "8");



document.getElementById("1").addEventListener('click', () => addCart(productOne));
document.getElementById("2").addEventListener('click', () => addCart(productTwo));
document.getElementById("3").addEventListener('click', () => addCart(productThree));
document.getElementById("4").addEventListener('click', () => addCart(productFour));
document.getElementById("5").addEventListener('click', () => addCart(productFive));
document.getElementById("6").addEventListener('click', () => addCart(productSix));
document.getElementById("7").addEventListener('click', () => addCart(productSeven));
document.getElementById("8").addEventListener('click', () => addCart(productEight));



// document.getElementById("viewTotal").addEventListener('click', () => cartPrice());
document.getElementById("deleteAll").addEventListener('click', () => removeAll());

var cart = [];
const nameContainer = document.getElementById("nameProduct");
const quantityContainer = document.getElementById("quantityProduct");
const priceContainer = document.getElementById("priceProduct");

function addCart(product) {
    cart.push(product);
    localStorage.setItem('key', JSON.stringify(cart));
    document.getElementById("numberCart").textContent = cart.length;

    const quantityChild = document.createElement('tr');
    quantityChild.setAttribute("id", "quantityChild");
    quantityChild.innerHTML = `
    <th class="length">
    ${cart.length}
    </th>`
    quantityContainer.appendChild(quantityChild);

    const nameChild = document.createElement("tr");
    nameChild.setAttribute("id", "nameChild");
    nameChild.innerHTML = `
    <td class="name">
    ${product.name}
    </td`
    nameContainer.appendChild(nameChild);

    const priceChild = document.createElement("tr");
    priceChild.setAttribute("id", "priceChild");
    priceChild.innerHTML = `
    <td class="price">
    $${product.price}
    </td `
    priceContainer.appendChild(priceChild);
    cartPrice();
}

function getLocalStorage() {
    let product;

    if(localStorage.getItem('key') === null) {
        product = [];
    }else {
        bike = JSON.parse(localStorage.getItem('key'));
    }
    return product;
}


function removeCart(product) {
    // const removeCol1 = document.getElementById("quantityChild");
    // const removeCol2 = document.getElementById("nameChild");
    // const removeCol3 = document.getElementById("priceChild");

    let result = cart.indexOf(product);
    cart.splice(result, result);
}


function cartPrice() {
    let total = 0;
    for(let i = 0; i < cart.length; i++) {
        total += cart[i].price;
    }
    const success = document.getElementById("total")
    success.textContent = `$${total}`;
    // setTimeout(() => success.textContent = "", 2500);
}

function removeAll() {
    nameContainer.innerText = ""
    priceContainer.innerText = ""
    quantityContainer.innerText = ""
    document.getElementById("total").innerText = "";
    const numero = document.getElementById("numberCart");
    numero.innerText = 0;
    cart = [];
}


function backBotton() {
    window.location.replace("https://localhost/TP-UTN/tiendaDeRopaUTN/public/tienda");
}
