import Authenticated from "@/Layouts/Authenticated";
import {useForm, usePage} from "@inertiajs/inertia-react";
import {useState} from "react";

const years = [2022,2023,2024,2025,2026,2027,2028,2029,2030]

const defaultFormFields ={
    strategy_id: '',
    pap: '',
    brief_description: '',
    prexc_program_id: '',
    prexc_subprogram_id: '',
    prexc_activity_id: '',
    commodity_id: '',
    commodity_system_id: '',
    location_id: '',
    value_chain_segment_id: '',
    other_vc_segments: [],
    indicator_id: '',
    unit_of_measure: '',
    unit_cost: 0,
    physical_target_2022: 0,
    physical_target_2023: 0,
    physical_target_2024: 0,
    physical_target_2025: 0,
    physical_target_2026: 0,
    physical_target_2027: 0,
    physical_target_2028: 0,
    physical_target_2029: 0,
    physical_target_2030: 0,
}

const PapsCreate = ({ strategies, prexcPrograms, prexcSubprograms, prexcActivities, commodities, commoditySystems, locations, valueChainSegments, indicators }) => {
    const { data, setData, post, processing, errors } = useForm(defaultFormFields)

    const handleChange = ({ target: { name, value }}) => {
        console.log(name, value)
        setData({ ...data, [name]: value })
    }

    const handleSubmit = (e) => {
        e.preventDefault()

        post(route('paps.store'), data)
    }

    const handleVcChange = (id) => {
        let selected = data.other_vc_segments
        let find = selected.indexOf(id)

        if (find > -1) {
            selected.splice(find, 1)
        } else {
            selected.push(id)
        }
        setData({
            ...data,
            other_vc_segments: selected
        })
    }

    return (
        <Authenticated>
            <div className="Subhead">
                <h2 className="Subhead-heading">Create a New PAP</h2>
            </div>

            {JSON.stringify(errors)}

            <form onSubmit={handleSubmit}>
                <div className="Box Box--spacious p-3">
                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Strategy</label>
                        </div>

                        <div className="form-group-body">
                            <select className="form-select input-block" value={data.strategy_id} onChange={handleChange} name="strategy_id">
                                <option value="">Select Strategy</option>
                                {
                                    strategies.map((option, index) => <option key={index} value={option.id}>{option.name}</option>)
                                }
                            </select>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Program/Activity/Project</label>
                        </div>

                        <div className="form-group-body">
                            <input type="text" className="form-control input-block" value={data.pap} name="pap" onChange={handleChange}/>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Brief Description</label>
                        </div>

                        <div className="form-group-body">
                            <textarea style={{ resize: 'none' }} name="brief_description" className="form-control input-block" value={data.brief_description} onChange={handleChange}/>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">PREXC Program</label>
                        </div>

                        <div className="form-group-body">
                            <select className="form-select" value={data.prexc_program_id} onChange={handleChange} name="prexc_program_id">
                                <option value="">Select PREXC Program</option>
                                {
                                    prexcPrograms.map((option, index) => <option key={index} value={option.id}>{option.name}</option>)
                                }
                            </select>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">PREXC Subprogram</label>
                        </div>

                        <div className="form-group-body">
                            <select className="form-select" value={data.prexc_subprogram_id} onChange={handleChange} name="prexc_subprogram_id">
                                <option value="">Select PREXC Subprogram</option>
                                {
                                    prexcSubprograms.map((option, index) => <option key={index} value={option.id}>{option.name}</option>)
                                }
                            </select>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">PREXC Activity</label>
                        </div>

                        <div className="form-group-body">
                            <select className="form-select" value={data.prexc_activity_id} onChange={handleChange} name="prexc_activity_id">
                                <option value="">Select PREXC Activity</option>
                                {
                                    prexcActivities.map((option, index) => <option key={index} value={option.id}>{option.name}</option>)
                                }
                            </select>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Commodity</label>
                        </div>

                        <div className="form-group-body">
                            <select className="form-select" value={data.commodity_id} onChange={handleChange} name="commodity_id">
                                <option value="">Select Commodity</option>
                                {
                                    commodities.map((option, index) => <option key={index} value={option.id}>{option.name}</option>)
                                }
                            </select>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Commodity System</label>
                        </div>

                        <div className="form-group-body">
                            <select className="form-select" value={data.commodity_system_id} onChange={handleChange} name="commodity_system_id">
                                <option value="">Select Commodity System</option>
                                {
                                    commoditySystems.map((option, index) => <option key={index} value={option.id}>{option.name}</option>)
                                }
                            </select>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Location</label>
                        </div>

                        <div className="form-group-body">
                            <select className="form-select" value={data.location_id} onChange={handleChange} name="location_id">
                                <option value="">Select Location</option>
                                {
                                    locations.map((option, index) => <option key={index} value={option.id}>{option.name}</option>)
                                }
                            </select>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Value Chain Segment (Primary)</label>
                        </div>

                        <div className="form-group-body">
                            <select className="form-select" value={data.value_chain_segment_id} onChange={handleChange} name="value_chain_segment_id">
                                <option value="">Select Value Chain Segment</option>
                                {
                                    valueChainSegments.map((option, index) => <option key={index} value={option.id}>{option.name}</option>)
                                }
                            </select>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Value Chain Segment (Others)</label>
                        </div>

                        <div className="form-group-body">
                            {
                                valueChainSegments.map(({ id, name }) => (
                                    <div className={`form-checkbox ${(id === parseInt(data.value_chain_segment_id)) && 'color-fg-subtle'}`} key={id}>
                                        <label htmlFor={`vc_segment_${id}`}>
                                            <input disabled={id === parseInt(data.value_chain_segment_id)} onChange={() => handleVcChange(id)} id={`vc_segment_${id}`} type="checkbox" name="other_vc_segments" value={id} checked={data.other_vc_segments.includes(id)} />
                                            {name}
                                        </label>
                                    </div>
                                ))
                            }
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Indicator</label>
                        </div>

                        <div className="form-group-body">
                            <select className="form-select" value={data.indicator_id} onChange={handleChange} name="indicator_id">
                                <option value="">Select Indicator</option>
                                {
                                    indicators.map((option, index) => <option key={index} value={option.id}>{option.name}</option>)
                                }
                            </select>
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Unit of Measure</label>
                        </div>

                        <div className="form-group-body">
                            <input type="text" className="form-control" value={data.unit_of_measure} name="unit_of_measure" onChange={handleChange} />
                        </div>
                    </div>

                    <div className="form-group">
                        <div className="form-group-header">
                            <label htmlFor="">Unit Cost (in absolute PHP)</label>
                        </div>

                        <div className="form-group-body">
                            <input type="number" className="form-control" value={data.unit_cost} name="unit_cost" onChange={handleChange} />
                        </div>
                    </div>

                    <ul>
                        <li className="Box-row d-flex flex-row v-align-middle">
                            <div className="col-2">
                                <strong>
                                    Year
                                </strong>
                            </div>
                            <div className="col-5 text-center">
                                <strong>
                                    Physical Target
                                </strong>
                            </div>
                            <div className="col-5 text-center">
                                <strong>
                                    Investment Requirement (Auto-Computed)
                                </strong>
                            </div>
                        </li>
                        {
                            years.map((year) => (
                                <li className="Box-row d-flex flex-row v-align-middle" key={year}>
                                    <div className="col-2">
                                        <strong>
                                            {year}
                                        </strong>
                                    </div>
                                    <div className="col-5 px-1">
                                        <input type="number" className="form-control input-block text-right" onChange={handleChange} name={`physical_target_${year}`} value={data[`physical_target_${year}`]}/>
                                    </div>
                                    <div className="col-5 px-1">
                                        <input type="text" className="form-control input-block text-right" readOnly value={(data.unit_cost * data[`physical_target_${year}`]).toLocaleString()}/>
                                    </div>
                                </li>
                            ))
                        }
                        <div className="Box-row d-flex">

                        </div>
                    </ul>
                </div>
                <div className="form-actions mt-3">
                    <button type="submit" className="btn btn-primary" disabled={processing}>
                        { processing ? 'Saving changes...' : 'Save changes' }
                    </button>
                    <button type="button" className="btn">Cancel</button>
                </div>
            </form>
        </Authenticated>
    )
}

export default PapsCreate
