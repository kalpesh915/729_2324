import logo from './logo.svg';
import './App.css';
import Counter from './Components/Counter';
import { useDispatch } from 'react-redux';
import Multiple from './Components/Multiple';

function App() {
  const dispatch = useDispatch();
  return (
    <div className="App">
      <h1>Redux Example with React JS</h1>

      <Counter></Counter>
      <hr/>
        <button type='button' onClick={(e) => dispatch({type:"INCREMENT"})}>Increment</button>
        <button type='button' onClick={(e) => dispatch({type:"DECREMENT"})}>Decrement</button>
        <button type='button' onClick={(e) => dispatch({type:"RESET"})}>Reset</button>
      <hr/>
      <Multiple></Multiple>
    </div>
  );
}

export default App;
