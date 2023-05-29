const product = [{
    id : 0,
  image : 'shop/shoe1.png',
  title: 'MEET MIKA Our newest platform style.',
  price : 20,
  },
  {
    id : 1,
  image : 'shop/shoe2.jpg',
  title: 'Wedding Shoes',
  price : 21,
  },
  {
    id : 2,
  image : 'shop/sho3.jpg ',
  title: 'high heels shoes pink.',
  price : 19,
  },
  {
    id : 3,
  image : 'shop/shoe4.png',
  title: 'white boots.',
  price : 18,
  }, 
  {
  id : 4,
  image : 'shop/sho5.jpg ',
  title: 'Sneakers sport shoes.',
  price : 23,
  },
  {
    id : 5,
  image : 'shop/shoe6.jpg ',
  title: 'casual shoes high heels',
  price : 21,
  },
  {
    id : 6,
  image : 'shop/shoe7.jpg',
  title: 'elegent party shoes.',
  price : 30,
  }, 
  {
  id : 7,
  image : 'shop/shoe8.jpg ',
  title: 'High heels shoes',
  price : 19,
  },
  {
    id : 8,
  image : 'shop/sho9.jpg ',
  title: 'Sneakers.',
  price : 31,
  },
  {
    id : 9,
  image : 'shop/shoe10.png',
  title: 'Elegent high heels shoes.',
  price : 41,
  },
  {
    id : 10,
  image : 'shop/shoe11.png ',
  title: 'Air force .',
  price : 41,
  },
  {
    id : 11,
  image : 'shop/shoe12.jpg ',
  title: 'Platfroms boots.',
  price : 41,
  },
  {
    id : 12,
  image : 'shop/shoe13.jpg ',
  title: 'Platfroms boots.',
  price : 41,
  },
  {
    id : 13,
  image : 'shop/shoe14.jpg ',
  title: 'Polly white shoes.',
  price : 41,
  },
  {
    id : 14,
  image : 'shop/shoe15.jpg ',
  title: 'Elegent high heels shoes.',
  price : 41,
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
    