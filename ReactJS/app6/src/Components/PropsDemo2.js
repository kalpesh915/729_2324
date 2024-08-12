function PropsDemo2(Props){
    return <>
       <button onClick={()=>Props.greetings()}>Greetings</button>
    </>
}

export default PropsDemo2;