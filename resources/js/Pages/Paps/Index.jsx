import { Pagination } from '@primer/react'
import Authenticated from "@/Layouts/Authenticated";
import {Link, usePage} from "@inertiajs/inertia-react";
import {useState} from "react";

const PapsIndex = () => {
    const { paps } = usePage().props

    const hrefBuilder = page => {
        return route('paps.index', { page: page })
    }

    return (
        <Authenticated>
            <div className="">
                <div className="Subhead">
                    <h2 className="Subhead-heading">Programs/Activities/Projects</h2>
                </div>

                <div className="d-flex flex-justify-between">
                    <div className="input-group input-block mr-2">
                        <input className="form-control" type="text" placeholder="Search" aria-label="Search" />
                        <span className="input-group-button">
                          <button className="btn" type="button" aria-label="Copy to clipboard">
                              <svg className="octicon oction-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fillRule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
                          </button>
                        </span>
                    </div>

                    <Link className="btn btn-primary" href={route('paps.create')}>
                        New PAP
                    </Link>
                </div>

                <div className="Box mt-3">
                    <div className="Box-header d-flex">
                        <h1>Filters go here</h1>
                    </div>
                    <ul>
                        {paps.data.map((pap, index) => (
                            <div key={index} className="Box-row d-flex position-relative">
                                <label className="flex-shrink-0 py-2 pl-3  d-none d-md-block">
                                    <input type="checkbox" className="js-issues-list-check"
                                           name="paps[]" value={pap.id} autoComplete="off" />
                                </label>
                                <div className="flex-auto min-width-0 p-2 pr-3 pr-md-2">
                                    <Link href={route('paps.edit', { pap: pap.id })}>{pap.pap}</Link>
                                </div>
                            </div>
                        ))}
                    </ul>
                </div>

                <nav className="paginate-container" aria-label="Pagination">
                    <Pagination
                        pageCount={paps.last_page}
                        currentPage={paps.current_page}
                        hrefBuilder={hrefBuilder}
                    />
                </nav>
            </div>
        </Authenticated>
    )
}

export default PapsIndex
