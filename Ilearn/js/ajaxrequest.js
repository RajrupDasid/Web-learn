function addStu(){
 var name=$("#name").val();
 var email=$("#email").val();  
 var password=$("#password").val();  
 //checking form fields on form field submission
 if(name.trim()==""){
     $("#statusMsg1").html('<small style="color:red;">Please enter name</small>');
     $("#name").focus();
     return false
 }else if(email.trim()==""){
    $("#statusMsg2").html('<small style="color:red;">Please enter email</small>');
    $("#email").focus();
    return false
}else if(password.trim()==""){
    $("#statusMsg3").html('<small style="color:red;">Please enter password</small>');
    $("#password").focus();
    return false
}else{
    $.ajax({
        url:"Student/addstudent.php",
        method:'POST',
        dataType:"json",
        data:{
            signup:'signup',
            name:name,
            email:email,
            password:password,
        },
        success:function(data){
            console.log(data)
            if(data=="Data saved Successfully"){
                $('#successMsg').html("<span class='alert alert-success'>Registration Successful </span>");
            }else if(data=="Something Went Wrong"){
                $('#successMsg').html("<span class='alert alert-danger'>unable to register </span>");   
            }
        },

    });
}
}
