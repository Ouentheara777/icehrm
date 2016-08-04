<?php
class TravelActionManager extends ApproveAdminActionManager{

    public function getModelClass(){
        return "EmployeeTravelRecord";
    }

    public function getItemName(){
        return "TravelRequest";
    }

    public function getModuleName(){
        return "Travel Management";
    }

    public function getModuleTabUrl(){
        return "g=modules&n=travel&m=module_Travel_Management#tabEmployeeTravelRecord";
    }

    public function getModuleSubordinateTabUrl(){
        return "g=modules&n=travel&m=module_Travel_Management#tabSubordinateEmployeeTravelRecord";
    }

    public function getModuleApprovalTabUrl(){
        return "g=modules&n=travel&m=module_Travel_Management#tabEmployeeTravelRecordApproval";
    }
}
