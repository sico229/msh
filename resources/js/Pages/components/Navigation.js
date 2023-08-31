// Exemple : Composant de navigation
import React from "react";
import { Link, usePage } from "@inertiajs/react";

export default function Navigation() {
    return (
        <nav>
            <Link href="/Transfert">Transferts</Link>
            <Link href="/Send">Send</Link>
            {/* Add more links */}
        </nav>
    );
}
