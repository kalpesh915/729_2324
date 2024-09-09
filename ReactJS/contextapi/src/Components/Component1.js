import { themeData } from "./myContext";
function Component1() {
    return <>
        <themeData.Consumer>
            {
                (data) => <>
                    {/* {console.log(data)} */}
                    <h1 style={{backgroundColor: data.bg, color: data.fg}}>This is First Component </h1>
                </>
            }
            
        </themeData.Consumer>
    </>
}
export default Component1;