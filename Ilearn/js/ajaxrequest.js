//Ajax call from already exist
$(document).ready(function(){
    $("#email").on("keypress blur",function(){
        var email= $("#email").val();
        var reg=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i
        $.ajax({
            url:"Student/addstudent.php",
            method:"POST",
            data:{
                checkemail:"checkemail",
                email:email,
            },
            success: function (data){
                console.log(data);
                if(data!=0){
                    $("#statusMsg2").html('<small style="color:red;">Email already used</small>');
                    $("#signup").attr("disabled",true);
                }else if(data==0 && reg.test(email)){
                    $("#statusMsg2").html('<small style="color:green;">ok</small>');
                    $("#signup").attr("disabled",false);
                }else if(!reg.test(email)){
                    $("#statusMsg2").html('<small style="color:red;">Please type email in correct format</small>');
                    $("#signup").attr("disabled",true);
                }
                if(email==""){
                    $("#statusMsg2").html('<small style="color:red;">Please enter email</small>');
                };
            },
        });
    });
});

function addStu(){
 var reg=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i; 
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
    return false;
}else if (email.trim() !="" && !reg.test(email)){
    $("#statusMsg2").html('<small style="color:red;">Please type email in correct format</small>');
    $("#email").focus();
    return false;

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
                clearStuRegField();
                $('#successMsg').html("<span class='alert alert-success'>Registration Successful </span>");
            }else if(data=="Something Went Wrong"){
                $('#successMsg').html("<span class='alert alert-danger'>unable to register </span>");   
            }
        },

    });
}
}
//empty all fields
function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}
