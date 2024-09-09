import { themeData } from "./myContext";
function Component2(){
    return <>
        <themeData.Consumer>
            {
                (data) => <><h1 style={{backgroundColor: data.bg, color: data.fg}}>This is Second Component </h1></>
                
            }
        </themeData.Consumer>
    </>
}
export default Component2;