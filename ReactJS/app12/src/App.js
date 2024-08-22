import logo from './logo.svg';
import './App.css';
import RefDemo1 from './Comonents/RefDemo1';
import RefDemo2 from './Comonents/RefDemo2';
import ChildComponent from './Comonents/ChildComponent';
import { useRef } from 'react';
import Form1 from './Comonents/Form1';
import Form2 from './Comonents/Form2';
import Form3 from './Comonents/Form3';
import Form4 from './Comonents/Form4';
import {HighOrderComponent, BlueCounter, GreenCounter, RedCounter } from './Comonents/HighOrderComponent';


function App() {

  let inputRef = useRef();

  return (
    <div className="App">
      {/* <RefDemo1></RefDemo1> */}
      {/* <RefDemo2></RefDemo2> */}

      {/* <ChildComponent ref={inputRef}></ChildComponent>
      <button onClick={()=>{
        inputRef.current.value = "Welcome";
        inputRef.current.style.color = "white";
        inputRef.current.style.backgroundColor = "Black";
        inputRef.current.style.padding = "20px";
      }}>Click Me</button> */}

      {/* <Form1></Form1> */}
      {/* <Form2></Form2> */}
      {/* <Form3></Form3> */}
      {/* <Form4></Form4> */}
      
      <HighOrderComponent data={RedCounter}></HighOrderComponent>
      <HighOrderComponent data={GreenCounter}></HighOrderComponent>
      <HighOrderComponent data={BlueCounter}></HighOrderComponent>
    </div>
  );
}

export default App;
