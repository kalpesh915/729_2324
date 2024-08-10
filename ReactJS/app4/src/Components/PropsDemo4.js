import { Component } from "react";

class PropsDemo4 extends Component {
    constructor() {
        super();
    }

    render() {
        return <>
            <h1>Welcome {this.props.data.username} to {this.props.data.city} Props of React JS</h1>
        </>
    }
}

export default PropsDemo4;