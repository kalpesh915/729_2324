import logo from './logo.svg';
import './App.css';
import LifeCycle1 from './Components/LifeCycle1';
import LifeCycle2 from './Components/LifeCycle2';
import LifeCycle3 from './Components/LifeCycle3';
import LifeCycle4 from './Components/LifeCycle4';
import LifeCycle5 from './Components/LifeCycle5';
import { useState } from 'react';

function App() {
  let [status, setStatus] = useState(true);
  return (
    <div className="App">
      <header className="App-header">
        {/* <LifeCycle1></LifeCycle1> */}
        {/* <LifeCycle2></LifeCycle2> */}
        {/* <LifeCycle3></LifeCycle3> */}
        {/* <LifeCycle4></LifeCycle4> */}
        {
          status ? <LifeCycle5></LifeCycle5> : <h1>Component not Mounted</h1>
        }
        <hr/>
        <button onClick={()=>setStatus(!status)}>Toggle Component </button>
      </header>
    </div>
  );
}

export default App;
