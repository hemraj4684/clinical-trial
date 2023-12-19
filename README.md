# clinical-trial
• A screening form
• A results page
• A small database
• Writing logic to decide whether a subject is eligible for the trial

Screening page:-
1) The subject’s first name
2) The subject’s date of Birth
3) The frequency with which subject experiences migraine headaches, with response options: Monthly, Weekly, Daily 
4) The daily frequency with which subject experiences migraine headaches, with response
options of: 1-2; 3-4; 5+ (only if the response to question 3 is ‘Daily’).

The form will also have a ‘submit’ button. When the form is submitted, the code will determine and
display the subject’s eligibility with the following rules:
• If the subject is under 18 years of age they are ineligible and are shown the message
‘Participants must be over 18 years of age’
• If the applicant is Over 18 years of age and experiences monthly or weekly migraine
headaches they are eligible and are assigned to Cohort A and the results show ‘Participant
<name> is assigned to Cohort A’ (where <name> Is the subject’s first name captured on the
screening form)
• If the applicant is Over 18 years of age and experiences daily migraine headaches they are
eligible and are assigned to Cohort B and the results show ‘Candidate <name> is assigned to
Cohort B’ (where <name> Is the subject’s first name captured on the screening.
===========================================================================================
Solution:-
Please follow the below steps to run project:- 
1) git clone https://github.com/hemraj4684/clinical-trial.git
2) cd clinical-trial/
3) composer install
4) rename .env.copy to .env
4) php artisan key:generate
5) create database clinical_trial in mysql.
6) update DB_DATABASE=clinical_test in .env file
7) php artisan migrate

Installation Done. Now hit http://localhost/clinical-trial/public/subject
try to save subject data.

