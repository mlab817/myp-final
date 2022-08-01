<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PapStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'strategy_id'           => 'required|exists:strategies,id',
            'pap'                   => 'required|max:150',
            'prexc_program_id'      => 'required|exists:prexc_programs,id',
            'prexc_subprogram_id'   => 'required|exists:prexc_subprograms,id',
            'prexc_activity_id'     => 'required|exists:prexc_activities,id',
            'brief_description'     => 'required|max:255',
            'commodity_id'          => 'required|exists:commodities,id',
            'commodity_system_id'   => 'required|exists:commodity_systems,id',
            'location_id'           => 'required|exists:locations,id',
            'value_chain_segment_id'=> 'required|exists:value_chain_segments,id',
            'vc_segments'           => 'array',
            'vc_segments.*'         => 'exists:value_chain_segments,id',
            'indicator_id'          => 'required|exists:indicators,id',
            'unit_of_measure'       => 'required',
            'unit_cost'             => 'required|gt:0',
            'physical_target_2022'  => 'required|gte:0',
            'physical_target_2023'  => 'required|gte:0',
            'physical_target_2024'  => 'required|gte:0',
            'physical_target_2025'  => 'required|gte:0',
            'physical_target_2026'  => 'required|gte:0',
            'physical_target_2027'  => 'required|gte:0',
            'physical_target_2028'  => 'required|gte:0',
            'physical_target_2029'  => 'required|gte:0',
            'physical_target_2030'  => 'required|gte:0',
        ];
    }
}
