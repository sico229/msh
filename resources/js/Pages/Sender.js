import React from "react";
import Layout from "./Layout";

function Sender() {
    return <div>Sender</div>;
}
Sender.layout = (page) => <Layout children={page} title="Welcome" />;
export default Sender;
