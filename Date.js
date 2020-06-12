function getFormattedDate(today) 
{
    var week = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    var months = new Array('January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    var day  = week[today.getDay()];
    var dd   = today.getDate();
    var mm   = today.getMonth(); //January is 0!
    var yyyy = today.getFullYear();
    var hour = today.getHours();
    var minu = today.getMinutes();
    var month = months[mm];

    if(dd<10)  { dd='0'+dd } 
        if(mm<10)  { mm='0'+mm } 
            if(minu<10){ minu='0'+minu } 

                return day+' - '+month+" "+dd+', '+yyyy;
        }
        function getFormattedDay(today) 
        {
            var week = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
            var months = new Array('January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
            var day  = week[today.getDay()];
            var dd   = today.getDate();
    var mm   = today.getMonth(); //January is 0!
    var yyyy = today.getFullYear();
    var hour = today.getHours();
    var minu = today.getMinutes();
    var month = months[mm];

    if(dd<10)  { dd='0'+dd } 
        if(mm<10)  { mm='0'+mm } 
            if(minu<10){ minu='0'+minu } 

                return dd;
        }

        var weathers = new Array('Rainy', 'Cold', 'Hot','Sunny','Thunderstormy', 'Cloudy','Rainy', 'Cold', 'Hot','Sunny','Thunderstormy', 'Cloudy','Rainy', 'Cold', 'Hot','Sunny','Thunderstormy', 'Cloudy','Rainy', 'Cold', 'Hot','Sunny','Thunderstormy', 'Cloudy','Rainy', 'Cold', 'Hot','Sunny','Thunderstormy', 'Cloudy','Rainy');
        var dateOffset = (24*60*60*1000) * 118800
        var myDate = new Date();
     //var y = myDate,getFullYear();
     //var m = myDate.getFullMonth();
     //var d = myDate.getDate();
     myDate.setTime(myDate.getTime() - dateOffset);
     //document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
     function startTime() {
        var today = new Date();
        var dd = getFormattedDay(myDate);
        var weather = weathers[dd-1];
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        var isAM = true;
        if (h > 12) {
            h = h - 12
            isAM = false;
        } else {
            isAM = true
        }
        m = checkTime(m);
        s = checkTime(s);
        if (isAM == true) {
            document.getElementById("date").innerHTML = "Today is " + getFormattedDate(myDate) + ". The time is now " + h + ":" + m + ":" + s + " AM. Today is a " + weather + " day. ";
        } else {
            document.getElementById("date").innerHTML = "Today is " + getFormattedDate(myDate) + ". The time is now " + h + ":" + m + ":" + s + " PM. Today is a " + weather + " day. ";
        }
        var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}