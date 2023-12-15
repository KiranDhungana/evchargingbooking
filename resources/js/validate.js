
var phoneInput = document.getElementById("phone-number").value;
var inputBox = document.getElementById("phone-number");

  


inputBox.addEventListener("change", function (e) {
    if (phoneInput.length<10){
      console.log(phoneInput.length)
        document.getElementById("phone-number").style.background = "#e96161";
    }
    else{
      document.getElementById("phone-number").style.background = "white";
    }
    
});