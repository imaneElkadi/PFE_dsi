const product = [{
    id : 0,
  image : 'shop/jack1.jpg',
  title: 'Hacked Denim Jacket.',
  price : 25,
  },
  {
    id : 1,
  image : 'shop/jack2.jpg',
  title: 'Zara jacket.',
  price : 52,
  },
  {
    id : 2,
  image : 'shop/jack3.jpg ',
  title: 'winter jacket.',
  price : 40,
  },
  {
    id : 3,
  image : 'shop/jack4.jpg ',
  title: 'Cinnamoroll loose jacket .',
  price : 80,
  }, 
  {
  id : 4,
  image : 'shop/jack5.jpg ',
  title: 'Winter Coats Women.',
  price : 70,
  },
  {
    id : 5,
  image : 'shop/jack6.jpg ',
  title: 'Long sport jacket',
  price : 40,
  },
  {
    id : 6,
  image : 'shop/jack7.jpg ',
  title: 'Safari jacket',
  price : 80,
  }, 
  {
  id : 7,
  image : 'shop/jack8.jpg ',
  title: 'Pink jacket',
  price : 30,
  },
  {
    id : 8,
  image : 'shop/jack9.jpg ',
  title: 'winter jacket.',
  price : 90,
  },
  {
    id : 9,
  image : 'shop/jack10.jpg ',
  title: 'tall  thick warm coat .',
  price : 70,
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
    