function getCurrentTime(){
    postMessage("Current Time is : "+new Date()); // use to export data from worker
    setTimeout("getCurrentTime()", 1000);
}

getCurrentTime();