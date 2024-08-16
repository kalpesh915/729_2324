import { Alert, Button } from "react-bootstrap";

function StyleDemo6(){
    return <>
        {/* Traditional BootStrap */}
        <div className="container-fluid">
            <h1 className="bg-dark text-white p-5">Design with React BootStrap </h1>
            <p className="bg-primary text-white p-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            <Button variant="primary">Yes</Button>
            <Button variant="danger">No</Button>

            <Alert variant="success">
                <p>Success Alert Example</p>
            </Alert>
        </div>
    </>
}

export default StyleDemo6;