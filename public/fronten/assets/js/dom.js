/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = function(){
    document.querySelector('.coding-img').style.display = 'block';
     document.querySelector('.iot-img').style.display = 'none';
      document.querySelector('.robotics-img').style.display = 'none';


} 

/*****  document.querySelector('#kit').addEventListener('click', function()
{
   
    document.querySelector('.kits').style.display = 'block';
    document.querySelector('.courses').style.display = 'none';
    document.querySelector('.accessories').style.display = 'none';
});

document.querySelector('#course').addEventListener('click', function()
{
  
    document.querySelector('.courses').style.display = 'block';
    document.querySelector('.kits').style.display = 'none';
    document.querySelector('.accessories').style.display = 'none';
      
});

document.querySelector('#accessories').addEventListener('click', function()
{
 
    document.querySelector('.accessories').style.display = 'block';
    document.querySelector('.kits').style.display = 'none';
    document.querySelector('.courses').style.display = 'none';
});
***/

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
document.querySelector('#jskit').addEventListener('click', function()
{
   //document.querySelector('#cir').style.background = '#FFF';
    document.querySelector('#a').style.background = '#FFF'; 
    document.querySelector('#b').style.background = 'none'; 
    document.querySelector('#c').style.background = 'none';
    document.querySelector('.cir-icon-kit').style.color = '#161b50';
    document.querySelector('.cir-icon-course').style.color = '#fff';
    document.querySelector('.cir-icon-component').style.color = '#fff';
    document.querySelector('.coding-img').style.display = 'block';
     document.querySelector('.iot-img').style.display = 'none';
      document.querySelector('.robotics-img').style.display = 'none';
});

document.querySelector('#jscourse').addEventListener('click', function()
{
   //document.querySelector('#cir').style.background = '#FFF'; 
   document.querySelector('#b').style.background = '#FFF'; 
   document.querySelector('#a').style.background = 'none'; 
    document.querySelector('#c').style.background = 'none';
     document.querySelector('.cir-icon-course').style.color = '#161b50';
    document.querySelector('.cir-icon-kit').style.color = '#fff';
    document.querySelector('.cir-icon-component').style.color = '#fff';
    document.querySelector('.iot-img').style.display = 'block';
     document.querySelector('.coding-img').style.display = 'none';
      document.querySelector('.robotics-img').style.display = 'none';
      
});

document.querySelector('#jscomponent').addEventListener('click', function()
{
   //document.querySelector('#cir').style.background = '#FFF';
   document.querySelector('#c').style.background = '#FFF'; 
   document.querySelector('#b').style.background = 'none'; 
    document.querySelector('#a').style.background = 'none';
     document.querySelector('.cir-icon-component').style.color = '#161b50';
    document.querySelector('.cir-icon-course').style.color = '#fff';
    document.querySelector('.cir-icon-kit').style.color = '#fff';
    document.querySelector('.robotics-img').style.display = 'block';
    document.querySelector('.coding-img').style.display = 'none';
    document.querySelector('.iot-img').style.display = 'none';
});








