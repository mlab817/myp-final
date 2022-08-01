import React from "react";
import {Link, usePage} from "@inertiajs/inertia-react";
import {DatabaseIcon, GraphIcon, PeopleIcon, ToolsIcon} from "@primer/octicons-react";

const Sidebar = () => {
    const { url } = usePage()

    console.log(url)

    return (
        <nav className="menu border">
            <Link className="menu-item" href={route('dashboard')} aria-current={url === '/dashboard' ? 'page': undefined}>
                <GraphIcon />
                Dashboard
            </Link>
            <Link className="menu-item" href={route('paps.index')} aria-current={url.startsWith('/paps') ? 'page': undefined}>
                <DatabaseIcon />
                PAPS
            </Link>
            <Link className="menu-item" href="#url" aria-current={url === '/operating-units' ? 'page': undefined}>
                <ToolsIcon />
                Operating Units
            </Link>
            <Link className="menu-item" href="#url" aria-current={url === '/users' ? 'page': undefined}>
                <PeopleIcon />
                Users
            </Link>
        </nav>
    )
}

export default Sidebar
