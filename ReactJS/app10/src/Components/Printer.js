function Printer(Props){
    return <>
        <div className="card text-center my-2">
            <div className="card-header">
                <h3 className="card-header">{Props.data.fname} {Props.data.lname}</h3>
            </div>

            <div className="card-body">
                <p className="lead">
                    Welcome {Props.data.fname} {Props.data.lname} to {Props.data.city}
                </p>
                <hr/>
                <a href={"tel:"+Props.data.phone} className="text-decoration-none">{Props.data.phone}</a><br/>
                <a href={"mailto:"+Props.data.email} className="text-decoration-none">{Props.data.email}</a><br/>
            </div>
        </div>
    </>
}

export default Printer;