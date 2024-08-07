function EventDemo1(){
    function greetings(username){
        alert("Welcome "+username+" to world of React JS");
    }

    return <>
        {/* <button type="button" onClick={greetings()}>Click Me</button> */}
        {/* <button type="button" onClick={greetings}>Click Me</button> */}
        <button type="button" onClick={()=>greetings("Gaurav")}>Click Me</button>
    </>
}

export default EventDemo1;