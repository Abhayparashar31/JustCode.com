$(document).ready(function(){
    $('#s1').hide();
    $('#s2').hide();
    $('#s3').hide();

    var name_err = true;
    var email_err = true;
    var msg_err = true;
//username
$('#name').keyup(function(){
    name_check();
});
function name_check(){
    var name_val = $('#name').val();
    if (event.getModifierState("CapsLock")){
        $("#s1").show();
        $("#s1").html("Warning! Capslock is on");
        $("#s1").focus();
        $("#s1").css("color","white");
        $("#s1").css("font-weight","bold");
        $("#name").css("border","1px rounded red");
        name_err = false;
        return false;
    }
    if(name_val.length==""){
        $("#s1").show();
        $("#s1").html("Username is empty");
        $("#s1").focus();
        $("#s1").css("color","white");
        $("#s1").css("font-weight","bold");
        $("#name").css("border","1px rounded red");
        name_err = false;
        return false;
    } 
    if((name_val.length<=3) || (name_val.length>=16)){
        $("#s1").show();
        $("#s1").html("Username must be between 3-16 character");
        $("#s1").focus();
        $("#s1").css("color","white");
        $("#s1").css("font-weight","bold");
        $("#name").css("border","1px rounded red");
        name_err = false;
        return false;
    }
    else{
        $('#s1').hide();
        $('#name').css("border","1px rounded green");
    }
}
//email
$('#email').keyup(function(){
    email_check();
    });
    function email_check(){
        var email_val = $("#email").val();
        if(email_val.length=="")
        {
            $("#s2").show();
            $("#s2").html("email is empty");
            $("#s2").css("color","white");
            $("#email").css("border","1px solid red");
            $("#s2").css("font-weight","bold");
            email_err=false;
            return false;
        } else{
            $("#s2").hide();
            $("#email").css("border","1px solid green");
        }
        if(email.indexOf('@')<=0)
        {
            $("#s2").show();
            $("#s2").html("**position of @ is invalid");
            $("#s2").css("color","white");
            $("#email").css("border","1px solid red");
            $("#s2").css("font-weight","bold");
            email_err=false;
            return false;
        } else{
            $("#s2").hide();
            $("#email").css("border","1px solid green");
        }
        if(email.charAt(email.length-4)!='.')
        {
            $("#s2").show();
            $("#s2").html("**domain name incorrect");
            $("#s2").css("color","white");
            $("#email").css("border","1px solid red");
            $("#s2").css("font-weight","bold");
            email_err=false;
            return false;
        } else{
            $("#s2").hide();
            $("#email").css("border","1px solid green");
        }
        if(email.charAt(email.length-3)!='.')
        {
            $("#s2").show();
            $("#s2").html("**domain name incorrect");
            $("#s2").css("color","white");
            $("#email").css("border","1px solid red");
            $("#s2").css("font-weight","bold");
            email_err=false;
            return false;
        } else{
            $("#s2").hide();
            $("#email").css("border","1px solid green");
        }
       
    }
//message
$('#msg').keyup(function(){
    msg_check();
});
function msg_check(){
    var msg_val = $('#msg').val();
    if (event.getModifierState("CapsLock"))
    {
        $("#s3").show();
        $("#s3").html("Warning! Capslock is on");
        $("#s3").focus();
        $("#s3").css("color","white");
        $("#s3").css("font-weight","bold");
        $("#msg").css("border","1px rounded red");
        name_err = false;
        return false;
    }
    if(msg_val.length==" ")
    {
        $('#s3').show();
        $('#s3').html("**messagebox is empty");
        $('#s3').css("color","white");
        $('#s3').css("font-weight","bold");
        $('#msg').css("border","1px rounded green");
    }
    if((msg_val.length<=3)){
        $("#s3").show();
        $("#s3").html("Message length is at least 5 characters");
        $("#s3").focus();
        $("#s3").css("color","white");
        $("#s3").css("font-weight","bold");
        $("#msg").css("border","1px rounded red");
        name_err = false;
        return false;
    }
    if(msg_val.length>=30)
    {
        $("#s3").show();
        $("#s3").html("**Message length should not be greater than 30 characters");
        $("#s3").focus();
        $("#s3").css("color","white");
        $("#s3").css("font-weight","bold");
        $("#msg").css("border","1px rounded red");
        name_err = false;
        return false; 
    }

    else{
        $('#s3').hide();
        $('#msg').css("border","1px rounded green");
    }
}

$("#btn").click(function(){
    name_err = true;
    email_err = true;
    msg_err = true;

   name_check();
   email_check();
   msg_check();
  if((name_err == true) && (email_err == true) && (msg_err == true))
   {
       return true;
   } else{
       return false;
   }
});
});


