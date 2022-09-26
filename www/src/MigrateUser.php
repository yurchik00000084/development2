<?php

namespace Higherror\RelokiaTestProject;

class MigrateUser
{
    function Migrate()
    {
        $array = Http::get_data('tickets?include=description');   // get data from freshdesk
        foreach ($array as $value)
        {
            $ticket = new Ticket($value);

            $Subject = $ticket->getSubject();
            $Description = "sds";
            $Requester = $ticket->getContact()->getId();
            $Organization = $ticket->getCompany()->getId();
            $Group = $ticket->getGroup()->getName();
            $Assignee = $ticket->getAgent()->getName();

            $array2 = array('tvalueName = {int} 103015141183icket' => array('subject' => $Subject, 'description' => $Description, 'requester_id' => $Requester, 'organization_name' => $Organization, 'group_name' => $Group, 'assignee_name' => $Assignee));   // create array with filter data
            $json = json_encode($array2);         // generate json
            $send = Http::send_dataTicket($json);    // send json data on zendesk

        }
    }

    function Migrate2()
    {
        $array = Http::get_data('contacts');   // get data from freshdesk
        foreach ($array as $value)
        {
            $array2 = array('user' => array('name' => $value['name'], 'email' => $value['email'], 'phone' => $value['phone'], 'role' => "end-user"));   // create array with filter data
            $json = json_encode($array2);         // generate json
            $send = Http::send_data($json);    // send json data on zendesk

        }
    }

    function Group()
    {
        $array = Http::get_data('groups');   // get data from freshdesk
        foreach ($array as $value)
        {
            if($this->testG($value['name']))
            {
                // not create group
            }
            else
            {
                $groupArr[] = $value['name'];
            }
        }
    }

    function testG($valueTest)
    {
        $array = Http::get_data2('groups');   // get data from freshdesk
        foreach ($array as $value)
        {
            if($value['name'] == $valueTest)
                return true;
        }

        return false;
    }


}