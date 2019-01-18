//Jquery for the AJax call for the registration form 
//it will take all of the content from the Form Action "register" and submit it the the API
//register.php
$('#register').on('submit',function(){
    console.log("you clicked the button");
    var registration = $(this),
        formContent = registration.serialize();
    console.log("This is the data from the form");
    console.log(formContent);
    
    
    
    $.ajax({
        url:'/APIs/register.php',
        dataType:'json',
        type:'post',
        data:formContent,
        success:function(data){
            //if register returns success=true then an alert will show and then the site will direct the user
            //to their member page
            if(data.success)
            {
            
                alert('Welcome aboard ' + data.username)
                //Redirect them to their member page
                window.location.href = 'Member.php?id='+data.userid;
                
                
            }
            //at the moment if it fails. it will alert the user that nothing has happened 
            //and include the reason as described in register.php (eg user already exists)
            else if(!data.success)
            {
                alert('Nothing Happened :(' + data.reason);
            }
            }
        });
        
        return false;
        
});


//Jquery for the AJax call for the registration of a competition form 
//it will take all of the content from the Form Action "register_comp" and submit it the the API
//create_comp.php


$('#register_comp').on('submit',function(){
    
    console.log("you clicked the create a comp button");
    var comp_rego=$(this),
        compContent=comp_rego.serialize();
        console.log("here is data from the submit_comp form");
        console.log(compContent);
        
         $.ajax({
        url:'/APIs/create_comp.php',
        dataType:'json',
        type:'post',
        data:compContent,
        success:function(data){
            if(data.success)
            {
                //alert the user that the comp has been created
                alert('Congratulations ' + data.compname + ' is ready to go!');
                
            }
            
            else if(!data.success)
            {
                
                //alert('Nothing Happened :(  ' + data.reason);
                //if the reason is a duplicate competition name chuck a red box around competition name
                if(data.reason == "This competition Exists")
                {
                    $('#competition_name').removeClass('form-control');
                    $('#competition_name').addClass('form-control is-invalid');
                    $('<div class="invalid-feedback">This Competition Name exists - Try Again</div>').insertAfter('#competition_name');
                     
                }
            }
            }
        });
        
        
        return false;
});


$('#login_user').on('submit',function(){
    
    console.log("you clicked the create a comp button");
    var login_form=$(this),
        loginContent=login_form.serialize();
        console.log("here is data from the submit_comp form");
        console.log(loginContent);
        
         $.ajax({
        url:'/APIs/login_user.php',
        dataType:'json',
        type:'post',
        data:loginContent,
        success:function(data){
            if(data.success)
            {
                alert('Welcome back ' + data.username)
                //Redirect them to their member page
                window.location.href = 'members-page.php';
            }
            
            else if(!data.success)
            {
                alert('Sorry ' + data.reason)
            }
        }
    });
        
        
        return false;
});

//need a function that detects a change in the member's select_competition box

$('#select_user_competition').change(function(){
    //get the option number which is the tipping comp
    var selection = $("#select_user_competition option:selected").val();
        console.log("Selection changed to " + selection);
    //now that I have the selection I can use Ajax to pull the data from the back end
     $.ajax({
         url:'APIs/get_comp_details.php',
         dataType:'json',
         type:'get',
         data:selection,
         success:function(data){
            if(data.success)
            {
                
            }
            
            else if(!data.success)
            {
                
            }
        }
        
    
     });
    return false;     
    
})
