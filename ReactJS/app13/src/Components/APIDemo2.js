import { useEffect, useState } from "react";

function APIDemo2() {

    let [products, setProducts] = useState([]);
    const APIURL = "https://dummyjson.com/products";

    useEffect(() => {
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                setProducts(result.products);
                console.log(products);
            });
        });
    }, []);

    return <>
        <div className="container-fluid p-0">
            <h1 className="bg-primary text-white text-center p-4 my-0">List of Products From API</h1>
            <div className="table-responsive">
                <table className="table table-hover table-striped">
                    <thead className="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Categorty</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Rating</th>
                            <th>Stock</th>
                            <th>Brand</th>
                            <th>SKU</th>
                            <th>Weight</th>
                            <th>Warranty</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        {
                            products.map((product)=> <tr>
                                <td>{product.id}</td>
                                <td>{product.title}</td>
                                <td>{product.category}</td>
                                <td>{product.price}</td>
                                <td>{product.discountPercentage}</td>
                                <td>{product.rating}</td>
                                <td>{product.stock}</td>
                                <td>{product.brand}</td>
                                <td>{product.sku}</td>
                                <td>{product.weight}</td>
                                <td>{product.warrantyInformation}</td>
                                <td><img src={product.thumbnail} className="w-25"></img></td>
                                <td><button type="button" className="btn btn-primary">View</button></td>
                            </tr>)
                        }
                    </tbody>
                </table>
            </div>
        </div>

    </>
}

export default APIDemo2;