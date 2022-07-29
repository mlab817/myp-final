import React from "react";
import {Link} from "@inertiajs/inertia-react";
import {DatabaseIcon, GraphIcon, PeopleIcon, ToolsIcon} from "@primer/octicons-react";

const Sidebar = () => {
    return (
        <nav className="menu border">
            <Link className="menu-item" href={route('dashboard')} aria-current="page">
                <GraphIcon />
                Dashboard
            </Link>
            <Link className="menu-item" href={route('paps.index')}>
                <DatabaseIcon />
                PAPS
            </Link>
            <Link className="menu-item" href="#url">
                <ToolsIcon />
                Operating Units
            </Link>
            <Link className="menu-item" href="#url">
                <PeopleIcon />
                Users
            </Link>
        </nav>
    )
}

export default Sidebar
