<?php

namespace App\ApiConsumers\PhoneSystem\Shapes;

use BlackBits\ApiConsumer\Support\BaseShape;

class PhoneSystemShape extends BaseShape
{
    /**
     * @var bool
     */
    protected $return_shape_data_only = false;

    /**s
     * @var bool
     */
    protected $require_shape_structure = false;

    /**
     * @var array
     */
    protected $transformations = [
    	"account_id"        => "AccountID",
    	"agent"             => "Agent",
        "call_date"         => "CallDate",
        "call_duration"     => "CallDuration",
        "call_origin"       => "CallOrigin",
        "call_result"       => "CallResult",
        "call_status"       => "CallStatus",
        "call_type"         => "CallType",
        "caller_id"         => "CallerID",
        "campaign"          => "Campaign",
        "contract_list"     => "ContactList",
        "dnis"              => "DNIS",
        "disposition"       => "Disposition",
        "final"             => "Final",
        "lead_provider"     => "LeadProvider",
        "lead_provider_id"  => "LeadProviderID",
        "phone"             => "Phone",
        "team"              => "Team",
        "termination_event" => "TerminationEvent",
    ];

    /**
     * @var array
     */
    protected $fields = [
    	'AccountID',
    	'Agent',
        'CallDate',
        'CallDuration',
        'CallOrigin',
        'CallResult',
        'CallStatus',
        'CallType',
        'CallerID',
        'Campaign',
        'ContactList',
        'DNIS',
        'Disposition',
        'Final',
        'LeadProvider',
        'LeadProviderID',
        'Phone',
        'Team',
        'TerminationEvent',
    ];
}