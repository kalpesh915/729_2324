import logo from './logo.svg';
import './App.css';
import Rajkot from './Rajkot';
import Baroda from './components/Baroda';
import 'bootstrap/dist/css/bootstrap.min.css';
import Ahamdabad from './components/Ahamdabad';
function App() {
  return (
    <div className="App">
      <header className="App-header">
        
        <h1>
          Edit <code>src/App.js</code> and save to reload.
        </h1>
        <Rajkot></Rajkot>
        <Baroda></Baroda>
        <Ahamdabad></Ahamdabad>
      </header>
    </div>
  );
}

export default App;
