$(document).ready(function(){
console.log("The sports page has loaded"); 
    
   
     //run the get sports list API and store the response in json
     $.getJSON("/APIs/get_sports_list.php",function(json){
         var url = window.location.href;
        
         //var url = 'https://aussie-tipping-workspace-michaeldavidsondig31sp3.c9users.io/sports.php?id=1';
         var id = url.substring(url.lastIndexOf('=')+1);
         //this can be used to set the sport that is visible
         //1 NRL , 2 AFL , 3 BBL
         
         var sports_id = id;
         var sports_json_id = sports_id-1;
                      
         $('#mainheading').replaceWith('<h1 class="text-center mt-4" id="mainheading">'+json[sports_json_id].name+'</h1>');
         var start_season = new Date(json[sports_json_id].Season_Start);
         var end_season = new Date(json[sports_json_id].Season_End);
         var season_start_styled=getSeasonDates(start_season);
        
         var image1="images/Sports/"
         $('#season_start').replaceWith(' <p id="season_start">'+season_start_styled+'</p>');
         $('#number_of_rounds').replaceWith(' <p id="number_of_rounds">'+json[sports_json_id].number_of_rounds+'</p>');
         $('#final_date').replaceWith('<p id="final_date">'+season_start_styled+'</p>');
         
         $("#carousel0").attr("src", "images/Sports/"+json[sports_json_id].name+"/"+json[sports_json_id].name+".png");
         $("#carousel1").attr("src", "images/Sports/"+json[sports_json_id].name+"/"+json[sports_json_id].name+"1.png");
         $("#carousel2").attr("src", "images/Sports/"+json[sports_json_id].name+"/"+json[sports_json_id].name+"2.png");
         $("#carousel3").attr("src", "images/Sports/"+json[sports_json_id].name+"/"+json[sports_json_id].name+"3.png");
     });





//Date Functions    
    function getSeasonDates(season_date){
        var season_day = getDayName(season_date.getDay());
        var season_month_day = season_date.getDate();
        var season_month = getMonthName(season_date.getMonth());
        return season_day+" "+season_month_day+" "+season_month;
        
    }
 function getDayName(daynumber) {
  
  var weekday = new Array(7);
  weekday[0] = "Sunday";
  weekday[1] = "Monday";
  weekday[2] = "Tuesday";
  weekday[3] = "Wednesday";
  weekday[4] = "Thursday";
  weekday[5] = "Friday";
  weekday[6] = "Saturday";

  var n = weekday[daynumber];
  return n;
}    
 function getMonthName(monthnumber) {
  
  var month = new Array(12);
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";
  

  var n = month[monthnumber];
  return n;
 }
     
});