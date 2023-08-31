import React from "react";
import { Router, Route, BrowserRouter } from "react-router-dom";
import Transfert from "../Transfert";
import Send from "./Send";

function Routes() {
    return (
        <BrowserRouter>
            <Router>
                <Route path="Transfert" element={<Transfert />} />
                <Route path="Send" element={<Send />} />
            </Router>
        </BrowserRouter>
    );
}

export default Routes;
