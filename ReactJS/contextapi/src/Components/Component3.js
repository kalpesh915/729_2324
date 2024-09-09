import { themeData } from "./myContext";

function Component3(){
    return <>
        <themeData.Consumer>
            {
                (data) => <>
                    <h1 style={{backgroundColor: data.bg, color: data.fg}}>This is Third Component </h1>   
                </>
            }
        </themeData.Consumer>
    </>
}
export default Component3;