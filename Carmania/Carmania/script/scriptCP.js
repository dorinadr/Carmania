let items = [];

let totalPrice = 0;

function addToCart(elem){

console.log("Adding to cart");
var parentDiv  = elem.parentNode;

var childE = parentDiv.childNodes;

var image = childE[1].src;

//console.log(image);

var nameOfItem = childE[3].childNodes[0].innerHTML;

var priceOfItem = childE[7].innerText;



item = {

    name: nameOfItem,
    img: image,
    price: priceOfItem

}



items.push(item);

console.log(items);

items.forEach(element => {

    element.price =  element.price.substring(1);

    totalPrice  += parseFloat(element.price);

});


sessionStorage.setItem("items", JSON.stringify(items));

}


let idCount = 0;

function showItems(){

    console.log(items);

    var items = JSON.parse(sessionStorage.getItem("items"));

console.log("showing items")
console.log(items);

console.log(items.length);

if (items.length>0){


    items.forEach(element => {


        console.log("asdasdasdasd"+element.price);


        element.price =  element.price.substring(1);



        totalPrice  += parseFloat(element.price);

    
        idCount += 1;


var z = document.createElement('tr'); // is a node
z.innerHTML = '<td> \
<div class="cart-info"> \
<img  id="cart-item-img"> \
        <div> \
            <p>Red Printed T-Shirt</p> \
            <small>Price: $50.00</small><br> \
            <a href="">Remove</a> \
        </div> \
    </div> \
</td> \
<td><input type="number" value="1"></td> \
<td>$50.0 \
</td>';


//z.id="cart-item-img"+idCount;



var textToBeAdded = '<tr> \
<td> \
<div class="cart-info"> \
<img  id="cart-item-img"> \
        <div> \
            <p>Sweater</p> \
            <small>Price: $50.00</small><br> \
            <a href="">Remove</a> \
        </div> \
    </div> \
</td> \
<td>$50.00</td> \
</tr>';

console.log('here');

//document.getElementById('cart-table').appendChild(textToBeAdded);

document.getElementById('cart-table').innerHTML += textToBeAdded;
document.getElementById('cart-item-img').src=element.img;
// console.log(textToBeAdded);



//console.log(document.getElementById('cart-table').innerHTML);

console.log(element.price);
document.getElementById('cart-subtotal').innerHTML= element.price;

});

}
else {

    document.getElementById('cart-table').innerHTML="Cart is Empty";
    document.getElementById('total-price-id').innerHTML="";
    document.getElementById('total-price-button').innerHTML="";
}



}


// <table>
// <tr>
//     <th>Product</th>
//     <th>Quantity</th>
//     <th>Subtotal</th>
// </tr>

// <tr>
    
//     <!-- <td>
//         <div class="cart-info">
//             <img src="images/buy-1.jpg">
//             <div>
//                 <p>Red Printed T-Shirt</p>
//                 <small>Price: $50.00</small><br>
//                 <a href="">Remove</a>
//             </div>
//         </div>
//     </td>
//     <td><input type="number" value="1"></td>
//     <td>$50.00</td> -->
// </tr>
// <tr>
//     <td>
//         <div class="cart-info">
//             <img src="images/buy-2.jpg">
//             <div>
//                 <p>HRX Sports Shoes</p>
//                 <small>Price: $75.00</small><br>
//                 <a href="">Remove</a>
//             </div>
//         </div>
//     </td>
//     <td><input type="number" value="1"></td>
//     <td>$75.00</td>
// </tr>
// <tr>
//     <td>
//         <div class="cart-info">
//             <img src="images/buy-3.jpg">
//             <div>
//                 <p>HRX Gray Trackpants</p>
//                 <small>Price: $75.00</small><br>
//                 <a href="">Remove</a>
//             </div>
//         </div>
//     </td>
//     <td><input type="number" value="1"></td>
//     <td>$75.00</td>
// </tr>
// </table>