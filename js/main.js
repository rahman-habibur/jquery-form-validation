$(function($){
  $("#logIn").click(function(){
    
    var email = $("#email").val();
    var cemail = $("#cemail").val();
    
    var pass = $("#password").val();
    var cpass = $("#cpassword").val();

    
    if(email!="" && cemail!="" && pass!="" && cpass!=""){
      if(email == cemail && pass == cpass){
        alert("Login Successfully Done.");
      }
      else{
        if(email != cemail){
          alert("Email Doesn't Match. Try Again");
        }
        else{
          alert("Wrong Password. Haaaya.")
        }
      }
    }
    else{
      alert("Enter all the boxes haaya.");
    }

  });
});