<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutCampusTour', function () {
    return view('pages.about-us.aboutCampusTour');
});


Route::get('/aboutMission',function(){
    return view('pages.about-us.aboutMission');
});

Route::get('/aboutObjectiveInstitute',function(){
    return view('pages.about-us.aboutObjectiveInstitute');
});

Route::get('/aboutPCIMCA',function(){
    return view('pages.about-us.aboutPCIMCA');
});

Route::get('/aboutPresidentsDesk',function(){
    return view('pages.about-us.aboutPresidentsDesk');
});

Route::get('/aboutPTES',function(){
    return view('pages.about-us.aboutPTES');
});

Route::get('/aboutVision',function(){
    return view('pages.about-us.aboutVision');
});

Route::get('/MBA-feeStructure',function(){
    return view('pages.about-us.MBA-feeStructure');
});

Route::get('/MBA',function(){
    return view('pages.about-us.MBA');
});

Route::get('/mbaDocumentRequired',function(){
    return view('pages.about-us.mbaDocumentRequired');
});

Route::get('/mbaIntake',function(){
    return view('pages.about-us.mbaIntake');
});

Route::get('/MCA-FeeStructure',function(){
    return view('pages.about-us.MCA-FeeStructure');
});

Route::get('/MCA',function(){
    return view('pages.about-us.MCA');
});

Route::get('/mcaDocumentRequired',function(){
    return view('pages.about-us.mcaDocumentRequired');
});

Route::get('/mcaIntake',function(){
    return view('pages.about-us.mcaIntake');
});

Route::get('/acedamic',function(){
    return view('pages.acadamics.acedamic');
});

Route::get('/mcaIntake',function(){
    return view('pages.about-us.mcaIntake');
});

Route::get('/acedamicMba',function(){
    return view('pages.acadamics.acedamicMba');
});

Route::get('/mbaAcademicCalander',function(){
    return view('pages.acadamics.mbaAcademicCalander');
});

Route::get('/mbaCourseOutcome',function(){
    return view('pages.acadamics.mbaCourseOutcome');
});

Route::get('/mbaE-content',function(){
    return view('pages.acadamics.mbaE-content');
});

Route::get('/mbaTeachingLearning',function(){
    return view('pages.acadamics.mbaTeachingLearning');
});

Route::get('/mcaTeachingLearning',function(){
    return view('pages.acadamics.mcaTeachingLearning');
});

Route::get('/mcaAcademiCalander',function(){
    return view('pages.acadamics.mcaAcademiCalander');
});

Route::get('/mcaCourseOutcome',function(){
    return view('pages.acadamics.mcaCourseOutcome');
});

Route::get('/mcaE-content',function(){
    return view('pages.acadamics.mcaE-content');
});

Route::get('/career',function(){
    return view('pages.careers.career');
});

Route::get('/anti_raging',function(){
    return view('pages.committee.anti_raging');
});

Route::get('/equal_appourtunity',function(){
    return view('pages.committee.equal_appourtunity');
});

Route::get('/establishment_og',function(){
    return view('pages.committee.establishment_og');
});

Route::get('/grievance_redressal',function(){
    return view('pages.committee.grievance_redressal');
});

Route::get('/industry_institute',function(){
    return view('pages.committee.industry_institute');
});

Route::get('/internal_quality_assurance',function(){
    return view('pages.committee.internal_quality_assurance');
});

Route::get('/sc_st',function(){
    return view('pages.committee.sc_st');
});

Route::get('/contactus',function(){
    return view('pages.contact-us.contactus');
});

Route::get('/infrastructure',function(){
    return view('pages.infrastructure');
});

Route::get('/acedamic',function(){
    return view('pages.acadamics.acedamic');
});

Route::get('/academicMca',function(){
    return view('pages.acadamics.academicMca');
});
