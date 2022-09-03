let tUbahWarna = document.querySelector('#tUbahWarna');
let red,green,blue;


tUbahWarna.addEventListener('click',function(){
  document.body.style.backgroundColor = 'red';
  
});

let div = document.querySelectorAll('#slide > input[type = range]');
                                    
div[0].addEventListener('input',function(){
   red = div[0].value;
   green = div[1].value;
   blue = div[2].value;
  document.body.style.backgroundColor = 'rgb('+ red +','+ green +','+ blue +')';
});           

div[1].addEventListener('input',function(){
   red = div[0].value;
   green = div[1].value;
   blue = div[2].value;
  document.body.style.backgroundColor = 'rgb('+ red +','+ green +','+ blue +')';
});                                 

div[2].addEventListener('input',function(){
   red = div[0].value;
   green = div[1].value;
   blue = div[2].value;
  document.body.style.backgroundColor = 'rgb('+ red +','+ green +','+ blue +')';
});                                 

let div2 = document.querySelector('#kolom');
tombol1.addEventListener('mouseover',function(){
  let ran = Math.round(Math.random()*20+1);
  console.log(ran);
  div2.style.marginTop = `${ran}%`;
  div2.style.marginLeft = `${ran}%`;
  div2.style.marginBottom = `${ran}%`;
});

//react
const element = <h1>hallo</h1>;

ReactDOM.render(element , document.getElementById('root'));
