<?php
namespace App\Models\CP;

use Illuminate\Database\Eloquent\Model;

class CpApplication extends Model
{
    protected $table = 'cp_applications';
    protected $primaryKey = 'id';
    protected $fillable = ['created_at', 'updated_at', 'profile_id', 'application_no', 'application_date', 'occupation_id', 'workplace_id', 'cb_org_id', 'professional_id', 'professional_name', 'is_train', 'subsidize_type', 'basic_mou_id', 'application_status', 'cp_exam_openings_id', 'send_from_type', 'send_from_address', 'created_type', 'description', 'state', 'created_by', 'updated_by', 'base_approved_at', 'base_approved_by', 'paid_status', 'paid_date', 'paid_amount', 'assessment_status', 'assessment_detail', 'assessment_date', 'assessment_by', 'close_status', 'close_date', 'close_by', 'training_status', 'training_remark', 'fee_app', 'fee_service', 'fee_assessment', 'is_idcard', 'assessment_tools_code', 'prefixs', 'name', 'lastname', 'name_en', 'lastname_en', 'taxid', 'birth_date', 'card_expiration_date', 'nationality', 'religion', 'cp_exam_openings_date', 'professional_pass_id', 'professional_pass_name', 'std_result_for_tool_detail_id', 'std_result_for_tool_detail_title', 'standard_type', 'score', 'ref1', 'fee_cer', 'paid_cer_status', 'confirm_status', 'confirm_detail', 'import_data', 'e_cer', 'certificate_status', 'payment_status', 'voucher_app', 'voucher_assessment', 'sp_remarks', 'cancel_at', 'cancel_by', 'person_type', 'get_news', 'type_collectively', 'fee_code'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsAssignInvallators()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsAssignInvallator');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsAddressContacts()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsAddressContact');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsAddressHomes()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsAddressHome');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsAddressWorkplaces()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsAddressWorkplace');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsAssignExaminers()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsAssignExaminer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsCertificates()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsCertificate');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsEducations()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsEducation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsResultUocs()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsResultUoc');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsResults()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsResult');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsTrainings()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsTraining');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsUocAssessments()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsUocAssessment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationsWorkplaces()
    {
        return $this->hasMany('App\Models\CP\CpApplicationsWorkplace');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cpApplicationLogs()
    {
        return $this->hasMany('App\Models\CP\CpApplicationLog');
    }
}
