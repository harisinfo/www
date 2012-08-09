function rating(me){


        var mySplitResult = me.split("_");
        var numRows = mySplitResult[1];
        var the_id = mySplitResult[2];
        var rate_status = "rateStatus_" + the_id;
        var hidden_id = 'hidden_state_' + the_id;
        var rated = document.getElementById(hidden_id).value;

        if(rated == 0){
            document.getElementById(rate_status).innerHTML = document.getElementById(me).title;

            for(var i=1;i<=numRows;i++){
                var create_id = 'id_' + i +'_' + the_id;
                document.getElementById(create_id).className = 'on';
            }
        }
}

// For when you roll out of the the whole thing //
function off(me){
        //document.getElementById(me).className = '';
	//alert(me);
        var mySplitResult = me.split("_");
        var numRows = mySplitResult[1];
        var the_id = mySplitResult[2];
        var rate_status = "rateStatus_" + the_id;
        var hidden_id = 'hidden_state_' + the_id;
        var rated = document.getElementById(hidden_id).value;

        if(rated == 0){
            document.getElementById(rate_status).innerHTML = 'Rate Me...';

            for(var i=1;i<=numRows;i++){
                var create_id = 'id_' + i +'_' + the_id;
                document.getElementById(create_id).className = '';
            }
        }
}

// When you actually rate something //
function rateIt(me){
	var mySplitResult = me.split("_");
        var numRows = mySplitResult[1]; // This is the vote value
        var the_id = mySplitResult[2]; // This is the rating ID
        var rate_status = "rateStatus_" + the_id;
        var hidden_id = 'hidden_state_' + the_id;
        var rated = document.getElementById(hidden_id).value;

        document.getElementById(hidden_id).value = 1;

        if(rated == 0){
            document.getElementById(rate_status).innerHTML = document.getElementById(me).title;

            for(var i=1;i<=numRows;i++){
                var create_id = 'id_' + i +'_' + the_id;
                document.getElementById(create_id).className = 'on';
            }

            // send an ajax request here to update the database

            var arguments = 'vote_value=' + numRows + '&user_hairstyle_id=' + the_id;

            sendRequest('rating.php', arguments);
        }
}

// Send the rating information somewhere using Ajax or something like that.
function sendRate(sel){
	alert("Your rating was: "+sel.title);
}

function sendRequest(scriptName, arguments){
        var xmlhttp;
        var timestamp = microtime(true);
        var finalScript = scriptName + '?' + arguments + '&time='+timestamp;
        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{
            // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
                //document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
                alert('Your vote has been submited successfully!');
        }
    }

    xmlhttp.open("GET",finalScript,true);
    xmlhttp.send();
}

function microtime(get_as_float){
        var now = new Date().getTime() / 1000;
        var s = parseInt(now);
        return (get_as_float) ? now : (Math.round((now - s) * 1000) / 1000) + ' ' + s;
}