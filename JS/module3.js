/*
    Default Exports
    and use it for demonstrating default export. You can only have one default export in a file.
*/ 

function greetings(fname, lname){
    const time = new Date().getHours();

    if(time >= 6 && time <12){
        alert("Good Morning, "+fname+" "+lname);
    }else if(time > 12 && time < 20){
        alert("Good Day, "+fname+" "+lname);
    }else{
        alert("Good Evening, "+fname+" "+lname);
    }
}

export default greetings;