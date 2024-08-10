import logo from './logo.svg';
import './App.css';
import StateDemo1 from './Components/StateDemo1';
import StateDemo2 from './Components/StateDemo2';
import StateDemo3 from './Components/StateDemo3';
import StateDemo4 from './Components/StateDemo4';
import StateDemo5 from './Components/StateDemo5';
import StateDemo6 from './Components/StateDemo6';
import PropsDemo1 from './Components/PropsDemo1';
import PropsDemo2 from './Components/PropsDemo2';
import PropsDemo3 from './Components/PropsDemo3';
import PropsDemo4 from './Components/PropsDemo4';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        {/* <StateDemo1></StateDemo1> */}
        {/* <StateDemo2></StateDemo2> */}
        {/* <StateDemo3></StateDemo3> */}
        {/* <StateDemo4></StateDemo4> */}
        {/* <StateDemo5></StateDemo5> */}
        {/* <StateDemo6></StateDemo6> */}
        {/* <PropsDemo1 username="Udit Ghetiya"></PropsDemo1> */}
        {/* <PropsDemo2 username="Yadav Yagnik" city="Rajkot"></PropsDemo2> */}
        {/* <PropsDemo3 data={{username:"Yograjsinh", city:"Rajkot"}}></PropsDemo3> */}
        <PropsDemo4 data={{username:"Yograjsinh", city:"Rajkot"}}></PropsDemo4>
      </header>
    </div>
  );
}

export default App;
