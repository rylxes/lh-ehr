<?php
$claim_status_categories = array(
'A0'=>'aknowledgement/Forwarded-The claim/encounter has been forwarded to another entity.',
'A1'=>'Aknowledgement/Receipt-The claim/encounter has been received. This does not mean that the claim has been accepted for adjudication.',
'A2'=>'Aknowledgement/Acceptance into adjudication system-The claim/encounter has been accepted into the adjudication system.',
'A3'=>'aknowledgement/Returned as unprocessable claim-The claim/encounter has been rejected and has not been entered into the adjudication system.',
'A4'=>'aknowledgement/Not Found-The claim/encounter can not be found in the adjudication system.',
'A5'=>'aknowledgement/Split Claim-The claim/encounter has been split upon acceptance into the adjudication system.',
'A6'=>'aknowledgement/Rejected for Missing Information - The claim/encounter is missing the information specified in the Status details and has been rejected.',
'A7'=>'aknowledgement/Rejected for Invalid Information - The claim/encounter has invalid information as specified in the Status details and has been rejected.',
'A8'=>'aknowledgement / Rejected for relational field in error.',
'D0'=>'Data Search Unsuccessful - The payer is unable to return status on the requested claim(s) based on the submitted search criteria.',
'E0'=>'Response not possible - error on submitted request data.',
'E1'=>'Response not possible - System Status.',
'E2'=>'Information Holder is not responding; resubmit at a later time.',
'E3'=>'Correction required - relational fields in error.',
'E4'=>'Trading partner agreement specific requirement not met: Data correction required. (Note: A status code identifying the type of information requested must be sent).',
'F0'=>'Finalized-The claim/encounter has completed the adjudication cycle and no more action will be taken.',
'F1'=>'Finalized/Payment-The claim/line has been paid.',
'F2'=>'Finalized/Denial-The claim/line has been denied.',
'F3'=>'Finalized/Revised - Adjudication information has been changed.',
'F3F'=>'Finalized/Forwarded-The claim/encounter processing has been completed. Any applicable payment has been made and the claim/encounter has been forwarded to a subsequent entity as identified on the original claim or in this payer''s records.',
'F3N'=>'Finalized/Not Forwarded-The claim/encounter processing has been completed. Any applicable payment has been made. The claim/encounter has NOT been forwarded to any subsequent entity identified on the original claim.',
'F4'=>'Finalized/Adjudication Complete - No payment forthcoming-The claim/encounter has been adjudicated and no further payment is forthcoming.',
'P0'=>'Pending: Adjudication/Details-This is a generic message about a pended claim. A pended claim is one for which no remittance advice has been issued, or only part of the claim has been paid.',
'P1'=>'Pending/In Process-The claim or encounter is in the adjudication system.',
'P2'=>'Pending/Payer Review-The claim/encounter is suspended and is pending review (e.g. medical review, repricing, Third Party Administrator processing).',
'P3'=>'Pending/Provider Requested Information - The claim or encounter is waiting for information that has already been requested from the provider. (Note: A Claim Status Code identifying the type of information requested, must be reported).',
'P4'=>'Pending/Patient Requested Information - The claim or encounter is waiting for information that has already been requested from the patient. (Note: A status code identifying the type of information requested must be sent).',
'P5'=>'Pending/Payer Administrative/System hold'
'R0'=>'Requests for additional Information/General Requests-Requests that don''t fall into other R-type categories.',
'R1'=>'Requests for additional Information/Entity Requests-Requests for information about specific entities (subscribers, patients, various providers).',
'R10'=>'Requests for additional information � Support a filed grievance or appeal.',
'R11'=>'Requests for additional information � Pre-payment review of claims.',
'R12'=>'Requests for additional information � Clarification or justification of use for specified procedure code.',
'R13'=>'Requests for additional information � Original documents submitted are not readable. Used only for subsequent request(s).',
'R14'=>'Requests for additional information � Original documents received are not what was requested. Used only for subsequent request(s).',
'R15'=>'Requests for additional information � Workers Compensation coverage determination.',
'R16'=>'Requests for additional information � Eligibility determination.',
'R17'=>'Replacement of a Prior Request. Used to indicate that the current attachment request replaces a prior attachment request.',
'R3'=>'Requests for additional Information/Claim/Line-Requests for information that could normally be submitted on a claim.',
'R4'=>'Requests for additional Information/Documentation-Requests for additional supporting documentation. Examples: certification, x-ray, notes.',
'R5'=>'Request for additional information/more specific detail-Additional information as a follow up to a previous request is needed. The original information was received but is inadequate. More specific/detailed information is requested.',
'R6'=>'Requests for additional information � Regulatory requirements.',
'R7'=>'Requests for additional information � Confirm care is consistent with Health Plan policy coverage.',
'R8'=>'Requests for additional information � Confirm care is consistent with health plan coverage exceptions.',
'R9'=>'Requests for additional information � Determination of medical necessity.',
);
?>
