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
