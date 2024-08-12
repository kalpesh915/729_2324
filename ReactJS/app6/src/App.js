import logo from './logo.svg';
// import './App.css';
import Form1 from './Components/Form1';
import Form2 from './Components/Form2';
import Form3 from './Components/Form3';
import Form4 from './Components/Form4';
import Form5 from './Components/Form5';
import Form6 from './Components/Form6';
import Conditional1 from './Components/Conditional1';
import PropsDemo1 from './Components/PropsDemo1';
import PropsDemo2 from './Components/PropsDemo2';

function App() {

  function greetings(){
    alert("Welcome to world of React JS Props");
  }

  return (
    <div className="App">
      <header className="App-header">
       {/* <Form1></Form1> */}
       {/* <Form2></Form2> */}
       {/* <Form3></Form3> */}
       {/* <Form4></Form4> */}
       {/* <Form5></Form5> */}
       {/* <Form6></Form6> */}
       {/* <Conditional1></Conditional1> */}
       {/* <PropsDemo1 username="Adarsh Chavda"></PropsDemo1> */}
       <PropsDemo2 greetings={greetings}></PropsDemo2>
      </header>
    </div>
  );
}

export default App;
