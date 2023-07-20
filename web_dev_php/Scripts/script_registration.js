let password ;
let conpassword ;
let userid1 ='Admin';
let password1 = 'Admin';
//let displat="login sucess"
document.getElementById("s1").onclick = function(){
    conpassword=document.getElementById("conpassword").value;
    password = document.getElementById("password").value;
   if(password==conpassword){
      window.alert("success!!! ");
   }
       
   else{
    window.alert("Password and confirm password should match ");

   }
}