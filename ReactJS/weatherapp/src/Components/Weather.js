import { useEffect, useState } from "react";

function Weather() {
    let [cityname, setCityname] = useState("rajkot");
    let [weatherData, setWeatherData] = useState({});

    let APIURL = `http://api.weatherapi.com/v1/current.json?key=f2253f454f13431291822143240509&q=${cityname}&aqi=no`;

    // let APIURL = `https://api.openweathermap.org/data/2.5/weather?q=${cityname}&appid=ADD_YOUR_API_KEY&units=metric`;

    useEffect(() => {
        loadWeatherData();
    }, []);

    function loadWeatherData() {
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                //console.log(result);
                if(result.error.code == 1006){
                    alert(`No City Found Named ${cityname}`);
                }else{
                    setWeatherData(result);
                }
                setWeatherData(result);
            });
        });
    }

    return <>
        <div className="container-fluid p-2">
            <h1 className="bg-primary text-center text-white p-5">Weather Application</h1>

            <div className="input-group">
                <input type="text" className="form-control p-3 border border-1 border-dark" placeholder="Enter City Name" onChange={(e) => setCityname(e.target.value)}></input>
                <button className="btn btn-primary" type="button" onClick={loadWeatherData}>View Data</button>
            </div>

            <div className="row">
                <div className="col-md-6 text-center p-3">
                    <img src={weatherData.current.condition.icon} className="w-25" />
                    <p>{weatherData.current.condition.text}</p>
                </div>

                <div className="col-md-6 p-3">
                    <h1>{weatherData.location.name}</h1>
                    <p>{weatherData.location.region} ({weatherData.location.country})
                    {weatherData.location.tz_id}</p>
                    <h4>{weatherData.location.localtime}</h4>
                </div>


                <div className="col-md-6 p-3">
                    <h1 className="display-1">{weatherData.current.temp_c} &deg;C</h1>
                </div>

                <div className="col-md-6 p-3">
                    <h1 className="display-5">Wind Speed {weatherData.current.wind_kph} ({weatherData.current.wind_dir})</h1>
                </div>
            </div>
        </div>
    </>
}

export default Weather;