import { useEffect, useState } from "react";
import './icons.css';

function Weatherapp() {

    let [cityname, setCityname] = useState("Rajkot");
    let [coord, setCoord] = useState({});
    let [weather, setWeather] = useState([]);
    let [name, setName] = useState("");
    let [main, setMain] = useState({});
    let [sys, setSys] = useState({});
    let [wind, setWind] = useState({});
    let [icon, setIcon] = useState("01d");

    const APIURL = `https://api.openweathermap.org/data/2.5/weather?q=${cityname}&appid=5a5932a5ccb1805699367b71ff5ca345&units=metric`;
    const IconURL = `https://openweathermap.org/img/wn/${icon}@4x.png`;
    let sunrise, sunset;


    function loadWeatherData() {
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                console.log(result);
                if (result.cod === 200) {
                    setIcon(result.weather[0].icon);
                    setCoord(result.coord);
                    setWeather(result.weather[0]);
                    setName(result.name);
                    setMain(result.main);
                    setSys(result.sys);
                    setWind(result.wind);
                    
                    
                    // setWeatherInfo(result);
                } else {
                    alert(result.message);
                }
            });
        });
    }

    function formatTime (timestamp) {
        const date = new Date(timestamp * 1000);
        return date.toLocaleTimeString();
    };

    useEffect(() => {
        loadWeatherData();
    }, []);


    return <>
        <div className="container bg-secondary mt-5 rounded p-5 text-white">
            <h1 className="bg-dark text-center text-white p-5">Weather Application</h1>

            <div className="input-group">
                <input type="text" onChange={(e) => setCityname(e.target.value)} className="form-control p-4 border border-3 border-dark" placeholder="Enter City Name"></input>
                <button type="button" value="Search" className="btn btn-dark px-4" onClick={()=>loadWeatherData()}>Search</button>
            </div>

            <div className="row">
                <div className="col-md-12">
                    <img src={IconURL}></img>
                </div>
                <div className="col-md-6 p-2">
                    <h1 className="display-1">
                        {name} ({sys.country})
                    </h1>
                </div>

                <div className="col-md-6 p-2">
                    <h1 className="display-1">
                        {main.temp} &deg;C
                    </h1>
                    <h5>{weather.main}</h5>
                    <h5>{weather.description}</h5>
                    <h3>Max : {main.temp_max} &deg;C, Min : {main.temp_min} &deg;C</h3>
                </div>

                <div className="col-md-3 p-2">
                    <h3>Wind Speed <br/> {wind.speed}</h3>
                </div>
                <div className="col-md-3 p-2">
                    <h3>Pressure <br/> {main.pressure}</h3>
                </div>
                <div className="col-md-3 p-2">
                    <h3>Humidity <br/> {main.humidity}</h3>
                </div>
                <div className="col-md-3 p-2">
                    <h3>Sea Level <br/> {main.sea_level}</h3>
                </div>

                <div className="row p-2">
                    <div className="col-md-6">
                        <i className="wi wi-sunrise icon"></i>
                        <h3>Sunrise {formatTime(sys.sunrise)}</h3>
                    </div>
                    <div className="col-md-6">
                        <i className="wi wi-sunset icon"></i>
                        <h3>Sunset {formatTime(sys.sunset)}</h3>
                    </div>
                </div>
            </div>
        </div>
    </>
}

export default Weatherapp;