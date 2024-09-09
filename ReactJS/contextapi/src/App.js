import { useState } from 'react';
import './App.css';
import Component1 from './Components/Component1';
import Component2 from './Components/Component2';
import Component3 from './Components/Component3';
import { themeData } from './Components/myContext';
import PreviousState from './Components/PreviousState';

function App() {
  let [theme, setTheme] = useState({ fg: "white", bg: "black" });
  return (
    <div className="App">
      <themeData.Provider value={theme}>
        <Component1></Component1>
        <Component2></Component2>
        <Component3></Component3>
        <hr />
        <button onClick={()=>setTheme({fg:"red", bg:"yellow"})}>Theme 1</button>
        <button onClick={()=>setTheme({fg:"white", bg:"purple"})}>Theme 2</button>
        <button onClick={()=>setTheme({fg:"black", bg:"blue"})}>Theme 2</button>
        <button onClick={()=>setTheme({fg:"white", bg:"black"})}>Default</button>
        <PreviousState></PreviousState>
      </themeData.Provider>
    </div>
  );
}

export default App;
