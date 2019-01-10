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
            if(data.success)
            {
                //hide submit button
                $('#registration_header').remove();
                $('#register').remove();
                $('#submit').remove();
                //unhide the navigate button
                $('#navigate').css('visibility','visible');
              
                alert('Welcome aboard ' + data.username)
            }
            
            else if(!data.success)
            {
                alert('Nothing Happened :(' + data.reason);
            }
            }
        });
        
        return false;
        
});

$('#navigate').click(function(){
    console.log("You clicked the navigate button");
});




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
                //hide submit button
                //unhide the navigate button
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
