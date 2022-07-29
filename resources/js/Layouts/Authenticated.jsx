import React, { useState } from 'react';
import { Link } from '@inertiajs/inertia-react';

const Authenticated = ({ auth, header, children }) => {
    const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);

    return (
        <>
            <div className="Header">
                <div className="Header-item">
                    <a href="#" className="Header-link f4 d-flex flex-items-center">
                        <svg height="32" className="octicon octicon-mark-github mr-2" viewBox="0 0 16 16"
                             version="1.1" width="32" aria-hidden="true">
                            <path fillRule="evenodd"
                                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                        </svg>
                        <span>DA-MYP</span>
                    </a>
                </div>
                <div className="Header-item">
                    <input type="search" className="form-control Header-input"/>
                </div>
                <Link className="Header-item Header-item--full" href={route('dashboard')}>
                    Dashboard
                </Link>
                <div className="Header-item mr-0">
                    <img className="avatar" height="20" alt="@octocat" src="https://github.com/octocat.png"
                         width="20" />
                </div>
            </div>
            <div className="Layout Layout--sidebarPosition-flowRow-start pt-3 pr-3 pb-3">
                <div className="Layout-main">
                    <div className="container">
                        {children}
                    </div>
                </div>
                <div className="Layout-sidebar height-full">
                    <nav className="menu border">
                        <Link className="menu-item" href={route('dashboard')} aria-current="page">
                            <svg width="16" height="16" viewBox="0 0 16 16" className="octicon octicon-tools"
                                 aria-hidden="true">
                                <path
                                    fillRule="evenodd"
                                    d="M4.48 7.27c.26.26 1.28 1.33 1.28 1.33l.56-.58-.88-.91 1.69-1.8s-.76-.74-.43-.45c.32-1.19.03-2.51-.87-3.44C4.93.5 3.66.2 2.52.51l1.93 2-.51 1.96-1.89.52-1.93-2C-.19 4.17.1 5.48 1 6.4c.94.98 2.29 1.26 3.48.87zm6.44 1.94l-2.33 2.3 3.84 3.98c.31.33.73.49 1.14.49.41 0 .82-.16 1.14-.49.63-.65.63-1.7 0-2.35l-3.79-3.93zM16 2.53L13.55 0 6.33 7.46l.88.91-4.31 4.46-.99.53-1.39 2.27.35.37 2.2-1.44.51-1.02L7.9 9.08l.88.91L16 2.53z"
                                />
                            </svg>
                            Dashboard
                        </Link>
                        <Link className="SideNav-item" href={route('paps.index')}>PAPS</Link>
                        <a className="SideNav-item" href="#url">Operating Units</a>
                        <a className="SideNav-item" href="#url">Users</a>
                    </nav>
                </div>
            </div>
        </>
    );
}

export default Authenticated
