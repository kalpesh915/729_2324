function EventDemo3(){
    let ip = 10;

    function increment(){
        //alert("Increment Called "+ip);
        ip++;
        console.log(ip);
    }

    return <>
        {/* <h1>Value of ip is ip</h1> */}
        <h1>Value of ip is {ip}</h1>
        <button type="button" onClick={()=>increment()}>Increment</button>
    </>
}

export default EventDemo3;