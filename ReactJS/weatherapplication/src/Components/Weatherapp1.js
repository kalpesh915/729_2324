import { useEffect, useState } from "react";
import './Weatherapp.css'; // Add a separate CSS file for custom styles

function Weatherapp1() {
    let [cityname, setCityname] = useState("Rajkot");
    let [coord, setCoord] = useState({});
    let [weather, setWeather] = useState([]);
    let [name, setName] = useState("");
    let [main, setMain] = useState({});
    let [sys, setSys] = useState({});
    let [wind, setWind] = useState({});
    let [icon, setIcon] = useState("01d");

    const APIURL = `https://api.openweathermap.org/data/2.5/weather?q=${cityname}&appid=cdb1e547955e278ee001f41c21e29ba1&units=metric`;
    const IconURL = `https://openweathermap.org/img/wn/${icon}@4x.png`;

    const formatTime = (timestamp) => {
        const date = new Date(timestamp * 1000);
        return date.toLocaleTimeString();
    };

    function loadWeatherData() {
        fetch(APIURL)
            .then((response) => response.json())
            .then((result) => {
                if (result.cod === 200) {
                    setIcon(result.weather[0].icon);
                    setCoord(result.coord);
                    setWeather(result.weather[0]);
                    setName(result.name);
                    setMain(result.main);
                    setSys(result.sys);
                    setWind(result.wind);
                } else {
                    alert(result.message);
                }
            });
    }

    useEffect(() => {
        loadWeatherData();
    }, []);

    return (
        <>
            <div className="container-fluid weather-app">
                <div className="overlay"></div> {/* Gradient overlay */}
                <h1 className="text-center text-white p-5">Weather Application</h1>

                <div className="input-group my-4">
                    <input
                        type="text"
                        onChange={(e) => setCityname(e.target.value)}
                        className="form-control p-3 rounded-0 border-0"
                        placeholder="Enter City Name"
                    />
                    <button
                        type="button"
                        value="Search"
                        className="btn btn-primary px-4 rounded-0"
                        onClick={() => loadWeatherData()}
                    >
                        Search
                    </button>
                </div>

                <div className="weather-card text-center text-white p-5">
                    <img src={IconURL} alt="weather icon" className="weather-icon"></img>
                    <h1 className="display-4">{name} ({sys.country})</h1>

                    <div className="row mt-4">
                        <div className="col-md-6">
                            <h1 className="display-1">{main.temp} &deg;C</h1>
                            <h5>{weather.main}</h5>
                            <h5>{weather.description}</h5>
                        </div>
                        <div className="col-md-6">
                            <h3>
                                Max: {main.temp_max} &deg;C, Min: {main.temp_min} &deg;C
                            </h3>
                        </div>
                    </div>

                    <div className="row mt-4">
                        <div className="col-md-3">
                            <h3><i className="fas fa-wind"></i> Wind Speed <br /> {wind.speed} m/s</h3>
                        </div>
                        <div className="col-md-3">
                            <h3><i className="fas fa-tachometer-alt"></i> Pressure <br /> {main.pressure} hPa</h3>
                        </div>
                        <div className="col-md-3">
                            <h3><i className="fas fa-tint"></i> Humidity <br /> {main.humidity}%</h3>
                        </div>
                        <div className="col-md-3">
                            <h3>
                                <i className="fas fa-water"></i> Sea Level <br />
                                {main.sea_level ? main.sea_level + " hPa" : "N/A"}
                            </h3>
                        </div>
                    </div>

                    <div className="row mt-4">
                        <div className="col-md-6">
                            <h3><i className="fas fa-sun"></i> Sunrise {sys.sunrise ? formatTime(sys.sunrise) : "N/A"}</h3>
                        </div>
                        <div className="col-md-6">
                            <h3><i className="fas fa-moon"></i> Sunset {sys.sunset ? formatTime(sys.sunset) : "N/A"}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default Weatherapp1;
