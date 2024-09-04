import { useSelector } from "react-redux";

function Multiple(){
    const count = useSelector(state => state);

    return <>
        <h1>Multiply is {count * 2}</h1>
    </>
}

export default Multiple;