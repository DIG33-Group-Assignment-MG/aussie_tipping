$(document).ready(function(){
console.log("The sports page has loaded"); 
     //run the get sports list API and store the response in json
     $.getJSON("/APIs/get_sports_list.php",function(json){
         //this can be used to set the sport that is visible
         //0 NRL , 1 AFL , 2 BBL
         var sport_id = 2;
                      
         $('#mainheading').replaceWith('<h1 class="text-center mt-4" id="mainheading">'+json[sport_id].name+'</h1>');
         var start_season = new Date(json[sport_id].Season_Start);
         var end_season = new Date(json[sport_id].Season_End);
         var season_start_styled=getSeasonDates(start_season);
        
         var image1="images/Sports/"
         $('#season_start').replaceWith(' <p id="season_start">'+season_start_styled+'</p>');
         $('#number_of_rounds').replaceWith(' <p id="number_of_rounds">'+json[sport_id].number_of_rounds+'</p>');
         $('#final_date').replaceWith('<p id="final_date">'+season_start_styled+'</p>');
         
         $("#carousel1").attr("src", "images/Sports/"+json[sport_id].name+"/"+json[sport_id].name+"1.png");
         $("#carousel2").attr("src", "images/Sports/"+json[sport_id].name+"/"+json[sport_id].name+"2.png");
         $("#carousel3").attr("src", "images/Sports/"+json[sport_id].name+"/"+json[sport_id].name+"3.png");
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