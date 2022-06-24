var currMonth = 0;
var year;
var day;

function getVal(e)		{
        day = document.getElementById(e.id).value;
    //  document.getElementById("calendar").value = year +"/"+  (currMonth + 1)  + "/" + day ;
}

$(document).ready(function(){
    getDays(0);

    $("#nextMonth").click(function(){
        if(currMonth < 11){
            currMonth =  currMonth+1;
        }
        else{
            currMonth = 0;
        }
        getDays(currMonth);
    });

    $("#prevMonth").click(function(){
        if(currMonth > 0){
            currMonth =  currMonth-1;
        }
        else{
            currMonth = 11;
        }
        getDays(currMonth);
    });


    $("#nextYear").click(function(){
        $("#year").text(parseInt($("#year").text())+1);
        getDays(currMonth);
    });


    $("#prevYear").click(function(){
        $("#year").text(parseInt($("#year").text())-1);
        getDays(currMonth);
    });			

    function getDays(month){
        $("#dt-able").empty();
        var day=['Sun', 'Mon', 'Tue', 'Wed' , 'Thu', 'Fri', 'Sat']
        var mos=['January','February','March','April','May','June','July','August','September','October','November','December']
        year = parseInt($("#year").text());
        $("#month-title").html(mos[month]);
        $("#dt-able").append('<tr>');
        for(i = 0; i < 7; i++){
            $('#dt-able').append("<td id='dt-head'>"  + day[i] + "</td>");
        }
        $("#dt-able").append('</td>');

        var firstDay = new Date(year,month, 1);
        var lastDay = new Date(year, month+1, 0);

        var offset = firstDay.getDay();

        var dayCount = 1;
        for (i = 0; i < 5; i++){
            $('#dt-able').append("<tr id=row-"+ i +">");
            for(j = 0; j < 7; j++ ){
                if(offset == 0){
                    $('#' + "row-"+ i).append("<td  id='"  + "cell-" + dayCount+ "'>"
                        +   "<input type='button' id ='day_val" +dayCount +"'"+   " onclick='getVal(this)' value= '" +  dayCount + "' >"  + 
                        
                        '</td>' );
                    

                    if(dayCount >= lastDay.getDate())
                    {
                        break;
                    }
                    dayCount++;
                }
                else{
                    $('#' + "row-"+ i).append('<td>' +'</td>' );
                    offset--;
                }
            }
            $('#dt-able').append('</tr>');

        }
    }


});