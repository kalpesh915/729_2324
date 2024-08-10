import logo from './logo.svg';
import './App.css';
import PropsDemo1 from './Components/PropsDemo1';
import PropsDemo2 from './Components/PropsDemo2';
import PropsDemo3 from './Components/PropsDemo3';
import { useState } from 'react';
import PropsDemo4 from './Components/PropsDemo4';
import PropsDemo5 from './Components/PropsDemo5';
import PropsDemo6 from './Components/PropsDemo6';
import PropsDemo7 from './Components/PropsDemo7';
import PropsDemo8 from './Components/PropsDemo8';
import PropsDemo9 from './Components/PropsDemo9';
import PropsDemo10 from './Components/PropsDemo10';
import PropsDemo11 from './Components/PropsDemo11';
import PropsDemo12 from './Components/PropsDemo12';

function App() {
  let [username, setUsername] = useState("Bhalabhai Bavaliya");
  let [city, setCity] = useState("Rajkot");

  let [bg, setBg] = useState("Red");
  let [fg, setFg] = useState("White");

  let [theme, setTheme] = useState({bg : "red", fg : "yellow"});

  let [status, setStatus] = useState(true);

  return (
    <div className="App">
      <header className="App-header">
        {/* <PropsDemo1 username="Gaurav Pandya" city="Rajkot"></PropsDemo1> */}
        {/* <PropsDemo2 data={{username:"Udit Ghetiya", city : "Rajkot"}}></PropsDemo2> */}
        {/* <PropsDemo3 data={{username, city}}></PropsDemo3> */}
        {/* <button onClick={()=>setUsername("Yadav Yagnik")}>Update Name</button> */}

        {/* <PropsDemo4 username="Rana Yograjsinh"></PropsDemo4> */}
        {/* <PropsDemo5 username="Yash Vaghela" city="Ahamdabad"></PropsDemo5> */}
        {/* <PropsDemo6 data={{username:"Adarsh Chavda", city : "Rajkot"}}></PropsDemo6> */}
        {/* <PropsDemo6 data={{username, city}}></PropsDemo6> */}
        {/* <PropsDemo7 data={{username, city}}></PropsDemo7> */}
        {/* <button onClick={()=>setUsername("Parmar Jayrajsinh")}>Change Data</button> */}
        {/* <button onClick={()=>{
          setUsername("Neel");
          setCity("Surat");
        }}>Change Values</button> */}
        {/* <PropsDemo8 styleCode={{bg:"black", fg:"white"}}></PropsDemo8> */}
        
        {/* Style demo */}
        {/* <PropsDemo9 styleCode={{bg, fg}}></PropsDemo9>
        <button onClick={()=>{
          setBg("Black"); setFg("White");
        }}>Style 1</button>
        <button onClick={()=>{
          setBg("Brown"); setFg("White");
        }}>Style 2</button>
        <button onClick={()=>{
          setBg("Gray"); setFg("Black");
        }}>Style 3</button> */}

        {/* <PropsDemo10 theme={theme}></PropsDemo10>
        <button onClick={()=>setTheme({bg:"Black", fg:"white"})}>Theme 1</button>
        <button onClick={()=>setTheme({bg:"Blue", fg:"white"})}>Theme 2</button>
        <button onClick={()=>setTheme({bg:"Red", fg:"white"})}>Theme 3</button> */}

        {/* <PropsDemo11></PropsDemo11> */}
       
        {
          status ? <PropsDemo12></PropsDemo12> : "Component is Hide"
        }
       
        {/* <button onClick={()=>setStatus(false)}>Hide</button>
        <button onClick={()=>setStatus(true)}>Show</button> */}

        {/* <button onClick={()=>setStatus(status)}>Toggle</button> */}
        <button onClick={()=>setStatus(!status)}>Toggle</button>
      </header>
    </div>
  );
}

export default App;
