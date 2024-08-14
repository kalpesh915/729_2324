import logo from './logo.svg';
import './App.css';
import Home from './Components/Home';
import About from './Components/About';
import Services from './Components/Services';
import Products from './Components/Products';
import Feedback from './Components/Feedback';
import Contact from './Components/Contact';
import Error404 from './Components/Error404';
import { BrowserRouter, Link, Route, Routes } from 'react-router-dom';
import Greetings from './Components/Greetings';

function App() {

  const students = [
    {id : 1, fname : "Gaurav", lname : "Pandya", city : "Ahamdabad"},
    {id : 2, fname : "Bhavdeep", lname : "Sorathiya", city : "Rajkot"},
    {id : 3, fname : "Udit", lname : "Ghetiya", city : "Shapar"},
    {id : 4, fname : "Yagnik", lname : "Yadav", city : "Bhavnagar"},
    {id : 5, fname : "Yograjsinh", lname : "Rana", city : "Surendranagar"},
    {id : 6, fname : "Yash", lname : "Vaghela", city : "Rajkot"},
    {id : 7, fname : "Adarsh", lname : "Chavda", city : "Rajkot"},
    {id : 8, fname : "Tushar", lname : "Kadam", city : "Rajkot"},
    {id : 9, fname : "Neel", lname : "Kanpariya", city : "Rajkot"},
    {id : 10, fname : "Jayrajsinh", lname : "Parmar", city : "Ahamdabad"},
  ];

  return (
    <div className="App">

      {/* <BrowserRouter>
        <div className='navbar navbar-expand-sm bg-dark navbar-dark fixed-top'>
          <ul className='navbar-nav'>
            <li className='nav-item'><Link to="/" className='nav-link'>Home</Link></li>
            <li className='nav-item'><Link to="/about" className='nav-link'>About</Link></li>
            <li className='nav-item'><Link to="/services" className='nav-link'>Services</Link></li>
            <li className='nav-item'><Link to="/products" className='nav-link'>Products</Link></li>
            <li className='nav-item'><Link to="/feedback" className='nav-link'>Feedback</Link></li>
            <li className='nav-item'><Link to="/contact" className='nav-link'>Contact</Link></li>
          </ul>
        </div>

        <Routes>
          <Route path='/' element={<Home></Home>}></Route>
          <Route path='/about' element={<About></About>}></Route>
          <Route path='/services' element={<Services></Services>}></Route>
          <Route path='/products' element={<Products></Products>}></Route>
          <Route path='/feedback' element={<Feedback></Feedback>}></Route>
          <Route path='/contact' element={<Contact></Contact>}></Route>
          <Route path='*' element={<Error404></Error404>}></Route>
        </Routes>

      </BrowserRouter> */}

      <BrowserRouter>
        <div className='navbar navbar-expand-sm bg-dark navbar-dark fixed-top'>
          <ul className='navbar-nav'>
            {/* <li className='nav-item'><Link className='nav-link'>OK</Link></li> */}
            {
              // students.map(student => <li className='nav-item'>
              //    <Link to={"/"+student.fname} className='nav-link'>{student.fname}</Link>
              //   </li>)

              students.map(student => <li className='nav-item'>
                <Link to={"/"+student.id+"/"+student.fname+"/"+student.lname+"/"+student.city} className='nav-link'>{student.fname}</Link>
              </li>)
            }
          </ul>
        </div>

        <Routes>
          {/* <Route path='/' element={<Greetings></Greetings>}></Route> */}
          {/* <Route path='/:fname' element={<Greetings></Greetings>}></Route> */}
          <Route path='/:id/:fname/:lname/:city' element={<Greetings></Greetings>}></Route>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
