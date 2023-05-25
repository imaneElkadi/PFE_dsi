const product = [{
    id : 0,
  image : 'shop/top1.jpg',
  title: 'Asymmetrical tops',
  price : 14,
  },
  {
    id : 1,
  image : 'shop/top2.jpg',
  title: 'Crop top.',
  price : 13,
  },
  {
    id : 2,
  image : 'shop/top3.jpg ',
  title: 'Crop top.',
  price : 17,
  },
  {
    id : 3,
  image : 'shop/top4.jpg ',
  title: 'Crop top.',
  price : 12,
  }, 
  {
  id : 4,
  image : 'shop/top5.png ',
  title: 'Crop top.',
  price : 19,
  },
  {
    id : 5,
  image : 'shop/top6.jpg ',
  title: 'Crop top backless',
  price : 15,
  },
  {
    id : 6,
  image : 'shop/top7.jpg ',
  title: 'Lace cropped strap top.',
  price : 12,
  }, 
  {
  id : 7,
  image : 'shop/top8.jpg ',
  title: 'Corset top',
  price : 17,
  },
  {
    id : 8,
  image : 'shop/top9.jpg ',
  title: 'crop top.',
  price : 13,
  },
  {
    id : 9,
  image : 'shop/top10.jpg ',
  title: 'Cute best tea shirt.',
  price : 11,
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
    