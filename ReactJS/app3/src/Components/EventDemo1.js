function EventDemo1(){

    function printGreetings(){
        alert("Good Morning");
    }

    return <>
        <h1>Event Demo</h1>
        {/* <button onClick={printGreetings()}>Click Me</button> */}
        {/* <button onClick={printGreetings}>Click Me</button> */}
        <button onClick={()=>printGreetings()}>Click Me</button>
    </>
}

export default EventDemo1;