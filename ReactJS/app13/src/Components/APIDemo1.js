function APIDemo1(){

    const APIURL = "https://dummyjson.com/products/1";

    function loadProducts(){
        // alert("Called");
        fetch(APIURL).then((response)=>{
            //console.log(response);
            response.json().then((result)=>{
                console.log(result);
            });
        });
    }

    return <>
        <h1>API Demo</h1>
        <button onClick={()=>loadProducts()}>Load All Products</button>
    </>
}

export default APIDemo1;