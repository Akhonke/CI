<?php

class FacilitatorCest
{
    public function _before(AcceptanceTester $I)
    {

       		
			
		$I-> wantTo('Log in to the facilitator panel and perform actions');
        
        $I-> amOnPage('/');
        $I-> click('Login');
        $I-> click('Facilitator');
        $I-> seeInCurrentUrl('/Faciltator');
        $I-> fillField('email', 'facilitator@gmail.com');
        $I-> fillField('password', '123456');
        $I-> click('Log in');
        $I-> seeInCurrentUrl('/Faciltator-dashboard');
        $I-> see('Facilitator');  
                      

    } 
    
   

    // Create Mark Sheet
    public function MarkSheet(AcceptanceTester $I)
    {

        
     $I-> click('Mark Sheet');
     $I-> see('Create Mark Sheet');
     $I-> see('Mark Sheet List'); 
     $I-> click('Create Mark Sheet');   
     $I-> amOnPage('/Faciltator-create-mark-sheet');  
     $I-> see('Training Provider');    
     $I-> selectOption('learnership_sub_type','Food');
     $I-> fillField('year', '2021');      
     $I-> see('Class Name');
     $I-> see('Facilitator');
     $I->attachFile( 'input[type="file"]', 'Chiefs.docx' );

    }

// See Mark Sheet List
    public function MarkSheetList(AcceptanceTester $I)
    {

    $I-> amOnPage('/Faciltator-dashboard');    
    $I-> click('Mark Sheet');
    $I-> see('Create Mark Sheet'); 
    $I-> see('Mark Sheet List');
    $I-> click('Mark Sheet List');
    $I-> see('Serial No.');
    $I-> see('Training Provider');
    $I-> see('Learnership Sub Type');
    $I-> see('Class Name');
    $I-> see('Facilitator');
    $I-> see('Year');
    $I-> see('Mark Sheet');
    $I-> see('Action');

    }


// Create Attendance
  public function ManageAttendance(AcceptanceTester $I)
  {
   
    $I-> amOnPage('/Faciltator-dashboard');
    $I-> click('Manage Attendance');
    $I-> see('Create Attendance');
    $I-> see('Attendence List');
    $I-> click('Create Attendance');
    $I-> amOnPage('/facilitator-create-attendance');
    $I-> see('Training Provider');
    $I-> selectOption('learnship_id', '13');
    $I-> selectOption('learnership_sub_type','Food');
    $I-> selectOption('learner_classname','');
    $I-> see('facilitator');
    $I-> attachFile('attachment','Lockdown 5.docx');
    $I-> click('Save');
    $I-> amOnPage('/facilitator-attendance-list');

  
}
// See Attendance List
 public function AttendanceList(AcceptanceTester $I)
    {


    $I-> amOnPage('/Faciltator-dashboard'); 
    $I-> click('Manage Attendance');
    $I-> see('Create Attendance');
    $I-> see('Attendence List');   
    $I-> click('Attendance List');
    $I-> amOnPage('/facilitator-attendance-list');
    $I-> see('Learnership Sub Type'); 
    $I-> see('Class Name');
    $I-> click('Facilitator');
    $I-> see('Week Start Date');
    $I-> see('Week Ending Date');
    $I-> see('Attendance Sheet');
    $I-> see('Action');
    }


// Learner Discipline
public function LearnerDiscipline(AcceptanceTester $I)
{
   $I-> amOnPage('/Faciltator-dashboard');
   $I-> click('Learner Discipline');
   $I-> see('New Issue');
   $I-> see('Issue List');
   $I-> click('New Issue');
   $I-> amOnPage('/facilitator-create-discipline');
   $I-> fillField('learner_id','8609186019089');
   $I-> see('Learner Name');
   $I-> see('Learner Surname');

   $I-> selectOption('issue_status','pending');
   $I-> selectOption('outcome','Warning Letter Issued');
   $I-> attachFile('warning_letter', 'Lockdown 5.docx');
   $I-> attachFile('evidence[]', 'Lockdown 5.docx');
   $I-> fillField('incidence_desc','We are testing that the issue was submitted.');
   $I-> click('Submit');

    
}



}   
  
