.cardapio {
  width: 300px;
  height: 400px;
   background: url("../acess/WhatsApp\ Image\ 2023-06-14\ at\ 12.21.40.jpeg");
  background-color: black;

  
  -webkit-box-shadow: 0 0 5px #000;
        box-shadow: 0 0 5px #000;
  }

.overlay {
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 1fr 2fr 2fr 1fr;
  background: rgba(0, 0, 0, 0.9);
  color:white;
  opacity: 0;
  transition: all 0.5s;

}


.items {
  padding-left: 20px;
  letter-spacing: 3px;
}

.head {
  font-size: 30px;
  line-height: 40px; 
  transform: translateY(40px);
  transition: all 0.7s;
  hr {
    display: block;
    width: 0;
    
    border: none;
    border-bottom: solid 2px white;
    
    position: absolute;
    bottom: 0; left:20px;
    
    transition: all .5s;
  }
}

.price {
  font-size: 22px;
  line-height: 10px;
  font-weight: bold;  
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.7s;
  .old {
    text-decoration: line-through;
    color: lighten(rgb(77, 77, 77),40%);
  }
}

.cart {
  font-size: 12px;
  opacity: 0;
  letter-spacing: 1px;
  font-family: 'Lato', sans-serif;
  transform: translateY(40px);
  transition: all 0.7s;
  i {
    font-size: 16px;
  }
  span {
    margin-left: 10px;
  }
}

.cardapio:hover .overlay {
  opacity: 1;
  & .head {
    transform: translateY(0px);
  }
  
  & hr {
    width: 75px;
    transition-delay: 0.4s;
  }
  
  & .price {
    transform: translateY(0px);
    transition-delay: 0.3s;
    opacity: 1;
  }
  
  & .cart {
    transform: translateY(0px);
    transition-delay: 0.6s;
    opacity: 1;
  }
}

