const a=Math.floor(Math.random() *3)+1;

var qs1 = document.getElementById('qs1');
var qs2 = document.getElementById('qs2');
var qs3 = document.getElementById('qs3');

  function qscheck(){
      if(a==1){
          qs1.innerHTML="What is the make and model of the vehicle, you first drove in ?<br><input type='text' name='qs1'><br><br><br><button class='btn'>Submit</button>";
      }
      else if(a==2){
          qs2.innerHTML="What is your 3 digit lucky number ?<br><input type='text' name='qs2'><br><br><br><button class='btn'>Submit</button>";
      }
      else{
          qs3.innerHTML="How many moles do you have ?<br><input type='text' name='qs3' ><br><br><br><button class='btn'>Submit</button>";
      }
  }
