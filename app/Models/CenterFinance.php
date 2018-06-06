<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CenterFinance extends Model
{
    protected $table = 'tb_center_finance';
    public $timestamps = false;

    protected $fillable = [
        'company_info_billing_name','company_info_billing_email','company_info_reg_no', 'company_info_tax_reg_no','company_info_tax_reg_date','company_info_billing_addr','company_info_tax','company_info_tax_percent','company_info_currency','bank_detail_name','bank_detail_acc_name','bank_detail_branch_code','bank_detail_acc_number','bank_detail_swift'
    ];

    public function center()
    {
    	return $this->belongsTo('App\Models\Center');
    }
}
