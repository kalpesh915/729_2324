function EventDemo3(){

    let ip1 = 10;

    function increment(){
        //alert("Called");
        ip1++;
        console.log(ip1);
    }

    return <>
        <h1>Event Demo value of ip1 is {ip1}</h1>
        <button onClick={()=>increment()}>Increment</button>
    </>
}

export default EventDemo3;