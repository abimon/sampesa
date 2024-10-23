<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feasiibility extends Model
{
    use HasFactory;
    protected $fillable = [
        "project_id",
        "common_area_name",
        "county",
        "sub_county",
        "ward",
        "nearest_town",
        "plot_no",
        "dimensions",
        "soil_type",
        "area_value",
        "tax_status",
        "arrears_years_from",
        "arrears_years_to",
        "arrears_evidence",
        "encumbrance",
        "encumbrance_type",
        "encumbrance_evidence",
        "any_loans",
        "loan_statement",
        "any_lease",
        "lease_period",
        "obstruction",
    ];
    public function project(){
        return $this->belongsTo(Project::class,"project_id","id");
    }
}
