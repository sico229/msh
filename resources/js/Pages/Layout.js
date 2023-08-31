import React from "react";
import { Link, InertiaLink } from "@inertiajs/react";
import { BrowserRouter, Router, Route } from "react-router-dom";
import Transfert from "./Transfert";
import Navigation from "./components/Navigation";

function Layout({ children }) {
    return (
        <>
            <header className="header">
                <h1>Dashboard Title</h1>
            </header>
            <aside>
                <Navigation />
            </aside>
            <main className="main-content">{children}</main>
            <footer className="footer">
                <p>&copy; 2023 Your Company. All rights reserved.</p>
            </footer>
        </>
    );
}

export default Layout;
