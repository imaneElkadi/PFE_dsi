const product = [{
  id : 0,
image : 'shop/dress1.png ',
title: 'Summer dress square neck.',
price : 60,
},
{
  id : 1,
image : 'shop/dress2.jpg ',
title: 'Liyge  shoulder dress.',
price : 56,
},
{
  id : 2,
image : 'shop/dress3.jpg ',
title: 'Long green dress for summer.',
price : 70,
},
{
  id : 3,
image : 'shop/dress4.jpg ',
title: 'Yellow selkie puff dress dupe.',
price : 74,
}, 
{
id : 4,
image : 'shop/dress5.jpg ',
title: 'Elegant midi length dress.',
price : 59,
},
{
  id : 5,
image : 'shop/dress6.jpg ',
title: 'Stylish hijab dress & Abaya',
price : 80,
},
{
  id : 6,
image : 'shop/dress7.jpg ',
title: 'blue decent Abaya.',
price : 61,
}, 
{
id : 7,
image : 'shop/dress8.jpg ',
title: 'Ramadan out fit ',
price : 90,
},
{
  id : 8,
image : 'shop/dress9.jpg ',
title: 'Iftar party outfit.',
price : 55,
},
{
  id : 9,
image : 'shop/dress10.jpg ',
title: 'Rigular fit elegant dress.',
price : 78,
},
{
  id : 10,
image : 'shop/dress11.jpg ',
title: 'Dress Party Dress Beach',
price : 41,
}, 
{
id : 11,
image : 'shop/dress12.jpg ',
title: ' stylish,concessional Dresse.',
price : 39,
},
{
  id : 12,
image : 'shop/dress13.jpg ',
title: 'Blue dress with flowers.',
price : 49,
},
{
  id : 13,
image : 'shop/dress14.jpg ',
title: ' white  elegant dress.',
price : 45,
},
];
const categories = [...new Set(product.map((item)=>
  {return item}))]
let i=0;
document.getElementById('root').innerHTML= categories.map((item)=>
{
  var{image,title,price}=item;
  return(
    ` <div class='box'> 
    <div class='img-box'> 
    <img class='images' src=${image}></img> 
    </div>
    <div class='bottom'> 
    <p>${title}</p>
    <h2>$ ${price}.00 </h2>` +
     "<button onclick='addtocart("+(i++)+")'> add to cart </button>"+
     `</div>
    </div>`
  )
}).join('')  
var cart =[];
function addtocart(a){
  cart.push({...categories[a]});
  displaycart();
}
function delElement(a){
  cart.splice(a, 1)
  displaycart();
}
function displaycart(a){
  let j=0, total=0;
  document.getElementById("count").innerHTML=cart.length;
  if(cart.length==0){
    document.getElementById('cartItem').innerHTML ="your cart is empty";
        document.getElementById("total").innerHTML ="$ "+0+".00";

  }
  else{
    document.getElementById("cartItem").innerHTML = cart.map((items)=>
    {
      var{image, title, price}= items;
      total=total+price;
              document.getElementById("total").innerHTML ="$ "+total+".00";

  return(
    ` <div class='cart-item'> 
    <div class='row-img'> 
    <img class='rowimg' src=${image}>
    </div>
    <p style='font-size:12px;'>${title}</p>
    <h2 style='font-size:15px;'>$ ${price}.00 </h2>` +
     "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'> </i></div>"
  );
    }).join('');  
  }}
  