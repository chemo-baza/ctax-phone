<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::resource('/', 'PhoneSystemController');

Route::get('api/items', function() {
    return datatables()->of(DB::select("select 
        c.call_date as calldate,
        (case 
        when c.call_type = 'inbound' then 'external'
        when c.call_type = 'outbound' then 'internal'
        when c.call_type = 'manual' then 'internal'
        end) as callorigin,
        c.call_type as calltype,
        c.number_dialed as phone,
        c.caller_id as dnis,
        c.call_status as callstatus,
        c.call_duration as callduration,
        c.agent as agent,
        c.campaign as campaign,
        c.account_id as accountid,
        c.contact_list as contactlist,
        c.result_code as callresult,
        c.team as team,
        (case
        when c.final_result = 1 then 'final'
        when c.final_result = 0 then '0'
        end)as final,
        c.termination_event as terminationevent,
        c.lead_provider_id as leadproviderid,
        cl.disposition as disposition,
        cl.caller_id as callerid,
        (case 
        when ca.name = 'udf9' then ca.value
        when ca.name = 'udf133' then ca.value
        when ca.name = 'lead provider id' then ca.value
        end) as leadprovider
        from 
        calls as c
        left join call_legs as cl on c.call_id = cl.call_id
        left join call_attributes as ca on c.call_id = ca.call_id
        where 
        c.call_date >= '2019=08-06'
        order by 
        c.call_date"))->toJson();
});

