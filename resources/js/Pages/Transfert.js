import React from "react";
import Layout from "./Layout";

function Transfert(props) {
    return <div>Transfert {props.toto}</div>;
}
Transfert.layout = (page) => <Layout children={page} title="Welcome" />;
export default Transfert;
