function PropsDemo2(Props){
    return <>
        <h1>Props Example with Function Component</h1>
        <p>Welcome {Props.data.username} to {Props.data.city}</p>
    </>
}

export default PropsDemo2;