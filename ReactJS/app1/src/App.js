import logo from './logo.svg';
import './App.css';
import Kalpesh from './Kalpesh'; 
import Demo from './Demo';
import Greetings from './Greetings';
import { Yagnik, Bhalabhai, Udit } from './Students';
import {Sujal, Jayrajsinh, Adarsh} from './Students1';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        {/* <Kalpesh></Kalpesh>
        <Demo />
        <Demo></Demo>
        <Greetings></Greetings> */}
        <Udit></Udit>
        <Yagnik></Yagnik>
        <Bhalabhai></Bhalabhai>
        <Sujal></Sujal>
        <Jayrajsinh></Jayrajsinh>
        <Adarsh></Adarsh>
      </header>
    </div>
  );
}

export default App;
