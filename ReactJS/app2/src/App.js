import logo from './logo.svg';
import './App.css';
import Rajkot from './Rajkot';
import Baroda from './components/Baroda';
import 'bootstrap/dist/css/bootstrap.min.css';
import Ahamdabad from './components/Ahamdabad';
import ClassComponentDemo from './ClassComponentDemo';
import ParentComponent from './ParentComponent';
import EventDemo1 from './components/EventDemo1';
import EventDemo2 from './components/EventDemo2';
import EventDemo3 from './components/EventDemo3';
import EventDemo4 from './components/EventDemo4';
function App() {
  return (
    <div className="App">
      <header className="App-header">
        
        {/* <h1>
          Edit <code>src/App.js</code> and save to reload.
        </h1> */}
        {/* <Rajkot></Rajkot>
        <Baroda></Baroda>
        <Ahamdabad></Ahamdabad>
        <InnerComponent></InnerComponent>
        <ClassComponentDemo></ClassComponentDemo> 
        <ParentComponent></ParentComponent>
        <Rajkot /> */}

        {/* <EventDemo1></EventDemo1> */}
        {/* <EventDemo2></EventDemo2> */}
        {/* <EventDemo3></EventDemo3> */}
        <EventDemo4></EventDemo4>
      </header>
    </div>
  );
}

function InnerComponent(){
  return <>
    <h1>This is Inner components</h1>
  </>
}

export default App;
