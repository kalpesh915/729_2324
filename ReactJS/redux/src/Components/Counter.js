import { useSelector } from "react-redux";

function Counter(){
    const count = useSelector(state => state);
    return <>
        <h1>Count is {count}</h1>
    </>
}

export default Counter;