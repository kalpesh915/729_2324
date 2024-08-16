import logo from './logo.svg';
import './App.css';
import HooksDemo1 from './Components/HooksDemo1';
import HooksDemo2 from './Components/HooksDemo2';
import HooksDemo3 from './Components/HooksDemo3';
import HooksDemo4 from './Components/HooksDemo4';
import HooksDemo5 from './Components/HooksDemo5';
import HooksDemo6 from './Components/HooksDemo6';
import HooksDemo7 from './Components/HooksDemo7';
import { useState } from 'react';
import StyleDemo1 from './StyleExamples/StyleDemo1';
import StyleDemo2 from './StyleExamples/StyleDemo2';
import StyleDemo3 from './StyleExamples/StyleDemo3';
import StyleDemo4 from './StyleExamples/StyleDemo4';
import StyleDemo5 from './StyleExamples/StyleDemo5';
import StyleDemo6 from './StyleExamples/StyleDemo6';

function App() {

  let [propsDemo, setPropsDemo] = useState(0);

  return (
    <div className="App">
     {/* <HooksDemo1></HooksDemo1> */}
     {/* <HooksDemo2></HooksDemo2> */}
     {/* <HooksDemo3></HooksDemo3> */}
     {/* <HooksDemo4></HooksDemo4> */}
     {/* <HooksDemo5></HooksDemo5> */}
     {/* <HooksDemo6></HooksDemo6> */}
     {/* <HooksDemo7 data={propsDemo}></HooksDemo7>
     <button onClick={()=>setPropsDemo(propsDemo+1)}>Update Props</button> */}
     {/* <StyleDemo1></StyleDemo1> */}
     {/* <StyleDemo2></StyleDemo2> */}
     {/* <StyleDemo3></StyleDemo3> */}
     {/* <StyleDemo4></StyleDemo4> */}
     {/* <StyleDemo5></StyleDemo5> */}
     <StyleDemo6></StyleDemo6>
    </div>
  );
}

export default App;
