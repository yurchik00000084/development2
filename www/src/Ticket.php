<?php
//╔╗╔╗╔╗╔╗╔═══╗╔══╗╔╗╔══╗╔══╗╔╗╔══╗──╔══╗╔╗╔╗
//║║║║║║║║║╔═╗║║╔═╝║║║╔═╝╚╗╔╝║║║╔═╝──║╔╗║║║║║
//║╚╝║║║║║║╚═╝║║║──║╚╝║───║║─║╚╝║────║║║║║╚╝║
//╚═╗║║║║║║╔╗╔╝║║──║╔╗║───║║─║╔╗║────║║║║╚═╗║
//─╔╝║║╚╝║║║║║─║╚═╗║║║╚═╗╔╝╚╗║║║╚═╗╔╗║╚╝║──║║
//─╚═╝╚══╝╚╝╚╝─╚══╝╚╝╚══╝╚══╝╚╝╚══╝╚╝╚══╝──╚╝
namespace Higherror\RelokiaTestProject;

class Ticket
{
    private int $id;
    private string $subject;
    private string $description;
    private int $status;
    private int $priority;
    private Agent $agent;
    private Contact $contact;
    private Group $group;
    private Company $company;
    private array $comments = [];

    function __construct(array $json_element)
    {
        $this->id = $json_element["id"];
        $this->description = "rrr";
        $this->status = $json_element["status"];
        $this->priority = $json_element["priority"];
        $this->agent = new Agent($json_element["responder_id"]);
        $this->contact = new Contact($json_element["requester_id"]);
        $this->group = new Group($json_element["group_id"]);
        $this->company = new Company($json_element["company_name"]);
        $this->subject = $json_element['subject'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function getAgent()
    {
        return $this->agent;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function getCommentsString(){
        $string = "";
        foreach ($this->comments as $value){
            $string .= "[{$value}];";
        }
        return substr($string, 0, -1);
    }


}