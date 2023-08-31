import React from "react";
import { Link, InertiaLink } from "@inertiajs/react";
import { BrowserRouter, Router, Route } from "react-router-dom";
import Transfert from "./Transfert";
function Layout({ children }) {
    return (
        <>
            <header className="header">
                <h1>Dashboard Title</h1>
            </header>
            <nav className="sidebar">
                <ul>
                    <li>
                        <InertiaLink href="/Send" />
                        TTT
                        <InertiaLink />
                    </li>
                    <li>
                        <Link to="/send">Faire un Transfert</Link>
                    </li>
                    <li>
                        <Link to="">Verifier un Transfert</Link>
                    </li>
                    <li>
                        <Link to="">Générer Rapport</Link>
                    </li>
                    <li>
                        <a href="#">Settings</a>
                    </li>
                </ul>
            </nav>
            <main className="main-content">{children}</main>
            <footer className="footer">
                <p>&copy; 2023 Your Company. All rights reserved.</p>
            </footer>
        </>
    );
}

export default Layout;
