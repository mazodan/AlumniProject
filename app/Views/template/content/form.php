
    <div class="container-fluid mt-5 mb-5">
        <div class="container-fluid border border-success">

            <div class="container-fluid mt-3">
                <h5>DIRECTIONS:</h5>
                <p>In each of the following questions, put a check mark on the blank before the corresponding answer/s. Please supply the answer needed in other items.</p>
            </div>

            <form class="form-horizontal" action="" method="POST" id="regForm">
            <!--- GENERAL INFORMATION --->
            <div class="container-fluid ats-form-tab">
                <h5>A. GENERAL INFORMATION</h5>

                <!--- Name --->
                <div class="form-group row pt-1">
                    <label class="col-sm-2 col-form-label" for="f_name"><strong>First Name</strong></label>
                    <div class="col-sm-2">
                        <input class="form-control form-control-sm" id="f_name" name="f_name" type="text" />
                    </div>
                    <div class="form-group col-sm-4 row">
                        <label class="col-sm-4 col-form-label" for="m_name"><strong>Middle Name</strong></label>
                        <input class="col-sm-7 form-control form-control-sm" id="m_name" name="m_name" type="text" />
                    </div>
                    <div class="form-group col-sm-4 row">
                        <label class="col-sm-3 col-form-label" for="l_name"><strong>Last Name</strong></label>
                        <input class="col-sm-9 form-control form-control-sm" id="l_name" name="l_name" type="text" />
                    </div>
                </div>

                <!--- Current Posistion --->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="curpos"><strong>Current Position</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control form-control-sm" id="curpos" type="text" />
                    </div>
                </div>

                <!--- Contact Numbers --->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cnums"><strong>Contact Numbers</strong></label>
                    <div class="col-sm-10 col-form-label" id="cnums">
                        <div class="form-group row">
                            <label class="col-sm-2" for="telno">Telephone No.</label>
                            <div class="col-sm-10">
                                <input class="form-control form-control-sm" id="telno" type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2" for="mobile">Mobile No.</label>
                            <div class="col-sm-10">
                                <input class="form-control form-control-sm" id="mobile" type="text" />
                            </div>
                        </div>
                        <div class="form-group row" style="margin-bottom:0;">
                            <label class="col-sm-2" for="email">Email Address</label>
                            <div class="col-sm-10">
                                <input class="form-control form-control-sm" id="email" type="text" />
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Civil Status --->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Civil Status</strong></label>
                    <div class="col-sm-10">
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="civstatus" id="single" value="1">
                                <label class="form-check-label" for="single">Single</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="civstatus" id="separated" value="2">
                                <label class="form-check-label" for="separated">Separated</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="civstatus" id="widow_er" value="3">
                                <label class="form-check-label" for="widow_er">Widow or Widower</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="civstatus" id="married" value="4">
                                <label class="form-check-label" for="married">Married</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="civstatus" id="sparent" value="5">
                                <label class="form-check-label" for="sparent">Single Parent</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Sex / Gender --->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Sex</strong></label>
                    <div class="col-sm-10">
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="1">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="2">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Age --->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Age</strong></label>
                    <div class="col-sm-10">
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="age" id="21-25" value="1">
                                <label class="form-check-label" for="21-25">21-25 years</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="age" id="26-30" value="2">
                                <label class="form-check-label" for="26-30">26-30 years</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="age" id="31-35" value="3">
                                <label class="form-check-label" for="31-35">31-35 years</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="age" id="36-40" value="4">
                                <label class="form-check-label" for="36-40">36-40 years</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="age" id="41-45" value="5">
                                <label class="form-check-label" for="41-45">41-45 years</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="age" id="46above" value="6">
                                <label class="form-check-label" for="46above">46 years and above</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Educational Attainment--->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Educational Attainment (Include Baccalaureate and Post Gradeuate Degrees)</strong></label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-auto text-center">
                                <label>Degree(s) & Specialization(s)</label>
                                <input class="form-control form-control-sm" type="text">
                                <input class="form-control form-control-sm my-2" type="text">
                                <input class="form-control form-control-sm" type="text">
                            </div>
                            <div class="col-auto text-center">
                                <label>College or University</label>
                                <input class="form-control form-control-sm" type="text">
                                <input class="form-control form-control-sm my-2" type="text">
                                <input class="form-control form-control-sm" type="text">
                            </div>
                            <div class="col-auto text-center">
                                <label>Year Graduated</label>
                                <input class="form-control form-control-sm" type="text">
                                <input class="form-control form-control-sm my-2" type="text">
                                <input class="form-control form-control-sm" type="text">
                            </div>
                            <div class="col-auto text-center">
                                <label>Honor(s) or Award(s)</label>
                                <input class="form-control form-control-sm" type="text">
                                <input class="form-control form-control-sm my-2" type="text">
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--- EMPLOYABILITY --->
            <div class="container-fluid ats-form-tab">
                <h5>B. EMPLOYABILITY</h5>

                <!--- Q1 --->
                <div class="form-group pt-1">
                    <label><strong>1. Are you presently employed?</strong></label>
                    <div class="row">
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estat" id="q1y" value="1">
                                <label class="form-check-label" for="q1y">Yes</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estat" id="q1no" value="1">
                                <label class="form-check-label" for="q1no">No</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estat" id="ne" value="1">
                                <label class="form-check-label" for="ne">Never Employed</label>
                            </div>
                        </div>
                    </div>
                    <p style="margin-bottom:0;">If NO or NEVER BEEN EMPLOYER, proceed to Question 2.</p>
                    <p>If YES, proceed to Question 3 to 9.</p>
                </div>

                <!--- Q2 --->
                <div class="form-group">
                    <label><strong>2. Please state the reason(s) why you are not yet employed. You may check more than one answer.</strong></label>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="" id="afsn" value="1">
                                <label class="form-check-label" for="afsn">Advance or further study needed</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="" id="njo" value="1">
                                <label class="form-check-label" for="njo">No job opporunity</label>
                            </div>
                        </div>
                    </div>

                        
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="" id="fcon" value="1">
                                <label class="form-check-label" for="fcon">Family concern and decided not to find a job</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="" id="dnlj" value="1">
                                <label class="form-check-label" for="dnlj">Did not look for a job</label>
                            </div>
                        </div>
                    </div>
                         
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="" id="hrr" value="1">
                                <label class="form-check-label" for="hrr">Health-related reason(s)</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="" id="other" value="1">
                                <label class="form-check-label" for="other">Other reason(s), please specify</label>
                                <input class="form-control form-control-sm" type="text" name="" id="sm-otherps" value="">
                            </div>
                        </div>
                    </div>
                            
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="" id="lwe" value="1">
                                <label class="form-check-label" for="lwe">Lack of work experience</label>
                            </div>
                        </div>
                        <div class="col">
                            <input class="form-control form-control-sm" type="text" name="" id="otherps" value="">
                        </div>
                    </div>
                </div>

                <!--- Q3 --->
                <div class="form-group">
                    <label><strong>3. Present Employment</strong></label>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name of Organzation</label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" type="text" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" type="text" name="">
                        </div>
                    </div>
                </div>

                <!--- Q4 --->
                <div class="form-group">
                    <label><strong>4. Place of work</strong></label>
                    <div class="row">
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pow" id="q4loc" value="1">
                                <label class="form-check-label" for="q4loc">Local</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pow" id="q4abr" value="1">
                                <label class="form-check-label" for="q4abr">Abroad</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Q5 --->
                <div class="form-group">
                    <label><strong>5. Type of organization presently employed in. (Chech one or as many as applicable)</strong></label>
                    <div class="row">
                        <div class="col-2 sw-col-4">
                            <label>Government</label>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="" id="pe" value="1">
                                <label class="form-check-label" for="pe">Public Enterprise</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="" id="pe" value="1">
                                <label class="form-check-label" for="pe">Educational Institution</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 sw-col-4">
                            <label>Private</label>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="" id="pe" value="1">
                                <label class="form-check-label" for="pe">Private Enterprise</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="" id="pe" value="1">
                                <label class="form-check-label" for="pe">Non-Profit Organization/Non-Government Organization</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="" id="pe" value="1">
                                <label class="form-check-label" for="pe">Internal Organization</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="" id="pe" value="1">
                                <label class="form-check-label" for="pe">Self-employed</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="" id="pe" value="1">
                                <label class="form-check-label" for="pe">Others (Please specify)</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Q6 --->
                <div class="form-group">
                    <label><strong>6. Present occupation (Ex. GRade School Teacher, Electrical Engineer, Self-employed)</strong></label>
                    <input class="form-control form-control-sm" type="text" name="" id="">
                </div>

                <!--- Q7 --->
                <div class="form-group">
                    <label><strong>7. Present employment status</strong></label>
                    <div class="row">
                        <div class="col-2 sw-col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pes" id="regu" value="1">
                                <label class="form-check-label" for="regu">Regular</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pes" id="contr" value="1">
                                <label class="form-check-label" for="contr">Contractual</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 sw-col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pes" id="temp" value="1">
                                <label class="form-check-label" for="temp">Temporary</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pes" id="se" value="1">
                                <label class="form-check-label" for="se">Self-employed</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pes" id="cas" value="1">
                                <label class="form-check-label" for="cas">Casual</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--- Q8 --->
                <div class="form-group">
                    <label><strong>8. If self-employed, what skills acquired in college were you able to apply in your work?</strong></label>
                    <input class="form-control form-control-sm" type="text" name="" id="">
                </div>

                <!--- Q9 --->
                <div class="form-group">
                    <label><strong>9. If self-employed, what type of business are you engaged in? (Check one or as many as applicable)</strong></label>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="typb" id="grb" value="1">
                                <label class="form-check-label" for="grb">Grains business</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="typb" id="reb" value="1">
                                <label class="form-check-label" for="reb">Real Estate business</label>
                            </div>
                        </div>
                    </div>

                        
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="typb" id="farm" value="1">
                                <label class="form-check-label" for="farm">Farming</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="typb" id="gs" value="1">
                                <label class="form-check-label" for="gs">Grocery/Sari-sari store</label>
                            </div>
                        </div>
                    </div>
                         
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="typb" id="food" value="1">
                                <label class="form-check-label" for="food">Food business (eatery, restaurant, etc)</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="typb" id="ar" value="1">
                                <label class="form-check-label" for="ar">Animal raising (poultry, piggery, etc)</label>
                            </div>
                        </div>
                    </div>
                            
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="typb" id="tb" value="1">
                                <label class="form-check-label" for="tb">Trade business (buy and sell)</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="typb" id="q9oth" value="1">
                                <label class="form-check-label" for="q9oth">Others (Please specify)</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="typb" id="cdp" value="1">
                                <label class="form-check-label" for="cdp">Construction, design, programming</label>
                            </div>
                        </div>
                        <div class="col">
                            <input class="form-control form-control-sm" type="text" name="typb" id="otherps" value="">
                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid ats-form-tab">

                <!--- Q10 --->
                <div class="form-group">
                    <label><strong>10. How long did you take to find a job after graduation?</strong></label>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ag" id="2mo" value="1">
                                <label class="form-check-label" for="2mo">less than 2 months after graduation</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ag" id="4mo" value="1">
                                <label class="form-check-label" for="4mo">after 2-4 months after graduation</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ag" id="5mo" value="1">
                                <label class="form-check-label" for="5mo">after 5-10 months after graduation</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ag" id="1y" value="1">
                                <label class="form-check-label" for="1y">one year after graduation</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ag" id="2y" value="1">
                                <label class="form-check-label" for="2y">more than one year but not beyond two years after graduation</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ag" id="q10oth" value="1">
                                <label class="form-check-label" for="q10oth">others, please specify</label>
                            </div>
                        </div>
                        <div class="col">
                            <input class="form-control form-control-sm" type="text" name="">
                        </div>
                    </div>
                </div>

                <!--- Q11 --->
                <div class="form-group">
                    <label><strong>11. What are the reasons for the waiting time?</strong></label>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="wt" id="poc" value="1">
                                <label class="form-check-label" for="poc">processing of credentials</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="wt" id="pol" value="1">
                                <label class="form-check-label" for="pol">processing of license</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Q12 --->
                <div class="form-group">
                    <label><strong>12. How long did you stay in your first job?</strong></label>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="q12fj" id="l1" value="1">
                                <label class="form-check-label" for="l1">Less than a month</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="q12fj" id="l2" value="1">
                                <label class="form-check-label" for="l2">1 year to less than 2 years</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="q12fj" id="q12oth" value="1">
                                <label class="form-check-label" for="q12oth">Others, please specify</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-check-inline align-middle">
                                <input class="form-check-input" type="radio" name="q12fj" id="6mo" value="1">
                                <label class="form-check-label" for="6mo">1 to 6 months</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline align-middle">
                                <input class="form-check-input" type="radio" name="q12fj" id="l3" value="1">
                                <label class="form-check-label" for="l3">2 years to less than 3 years</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-control form-control-sm" type="text" name="" id="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="q12fj" id="11mo" value="1">
                                <label class="form-check-label" for="11mo">7 to 11 months</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="q12fj" id="l4" value="1">
                                <label class="form-check-label" for="l4">3 years to less than 4 years</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Q13 --->
                <div class="form-group">
                    <label><strong>13. How many jobs you had before your present job?</strong></label>
                    <input class="form-control form-control-sm" type="text" name="" id="">
                </div>

                <!--- Q14 --->
                <div class="form-group">
                    <label><strong>14. The following are some difficulties/problems that you might have encountered in getting your first job? Please check the difficulties/problems that you have encountered.</strong></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q14q" id="q14a1" value="1">
                        <label class="form-check-label" for="q14a1">inability to communicate in the English language</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q14q" id="q14a2" value="1">
                        <label class="form-check-label" for="q14a2">lack of preparation for the interview and competitive exams</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q14q" id="q14a3" value="1">
                        <label class="form-check-label" for="q14a3">keen competition among the applicants</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q14q" id="q14a4" value="1">
                        <label class="form-check-label" for="q14a4">failure to find influential persons who have the proper connections to the employer</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q14q" id="q14a5" value="1">
                        <label class="form-check-label" for="q14a5">employer's preference for single applicants</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q14q" id="q14a6" value="1">
                        <label class="form-check-label" for="q14a6">lack of experience</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q14q" id="q14a7" value="1">
                        <label class="form-check-label" for="q14a7">others (please specify)</label>
                        <input class="form-control form-control-sm" type="text" name="">
                    </div>
                </div>

                <!--- Q15 --->
                <div class="form-group">
                    <label><strong>15. Job level position</strong></label>
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="l1"><u>Job Level</u></label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="l2"><u>First Job</u></label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="q12oth"><u>Current or Present Job</u></label>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-4">
                            <label class="form-check-label" for="l1">Rank or Clerical</label>
                        </div>    
                        <div class="col-4 text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jlp" id="" value="1">
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jlp" id="" value="1">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label class="form-check-label" for="l1">Professional, Technical, Supervisory</label>
                        </div>    
                        <div class="col-4 text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jlp" id="" value="1">
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jlp" id="" value="1">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label class="form-check-label" for="l1">Managerial Executive</label>
                        </div>    
                        <div class="col-4 text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jlp" id="" value="1">
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jlp" id="" value="1">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label class="form-check-label" for="l1">Self-employed</label>
                        </div>    
                        <div class="col-4 text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jlp" id="" value="1">
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jlp" id="" value="1">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Q16 --->
                <div class="form-group">
                    <label><strong>16. What were your reasons for accepting the job? You can check more than one answer.</strong></label>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="raj" id="sab" value="1">
                                <label class="form-check-label" for="sab">salaries and benefits</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="raj" id="edta" value="1">
                                <label class="form-check-label" for="edta">my education/training is not adequate</label>
                            </div>
                        </div>
                    </div>

                        
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="raj" id="ch" value="1">
                                <label class="form-check-label" for="ch">career challenge</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="raj" id="daje" value="1">
                                <label class="form-check-label" for="daje">desire to acquire job experience</label>
                            </div>
                        </div>
                    </div>
                         
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="raj" id="rssk" value="1">
                                <label class="form-check-label" for="rssk">related to special skills</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="raj" id="fjo" value="1">
                                <label class="form-check-label" for="fjo">it was the first job offered to me</label>
                            </div>
                        </div>
                    </div>
                            
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="raj" id="ptr" value="1">
                                <label class="form-check-label" for="ptr">proximity to residence</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="raj" id="bpexr" value="1">
                                <label class="form-check-label" for="bpexr">I have not passed the board/professional exam required for the job</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="raj" id="najo" value="1">
                                <label class="form-check-label" for="najo">no available job opening in line with my course</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="raj" id="q16oth" value="1">
                                <label class="form-check-label" for="q16oth">other reason(s), please specify</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-check form-check-inline align-middle">
                                <input class="form-check-input" type="checkbox" name="raj" id="baq" value="1">
                                <label class="form-check-label" for="baq">other applicants have better academic qualifications than mine</label>
                            </div>
                        </div>
                        <div class="col">
                            <input class="form-control form-control-sm" type="text" name="" id="" value="">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline align-top">
                                <input class="form-check-input" type="checkbox" name="raj" id="nowexp" value="1">
                                <label class="form-check-label" for="nowexp">I don't have work experience in the jobs related to my major</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline align-top">
                                <input class="form-check-input" type="checkbox" name="raj" id="poths" value="1">
                                <label class="form-check-label" for="poths">employer preferred to hire graduates from other schools</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Q17--->
                <div class="form-group">
                    <label><strong>17. Employment history (since obtaining first degree to-date)</strong></label>
                    <div class="row">
                        <div class="col">
                            <!-- <label>Name of Employer</label> -->
                            <div class="row mb-4 pb-2 text-center">
                                <div class="col">
                                    <label>Name of Employer</label>
                                </div>
                            </div>
                            <input class="form-control form-control-sm" type="text">
                            <input class="form-control form-control-sm my-2" type="text">
                            <input class="form-control form-control-sm mb-2" type="text">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col text-center">
                            <div class="row mb-4 pb-2 text-center">
                                <div class="col">
                                    <label>Position Held</label>
                                </div>
                            </div>
                            <input class="form-control form-control-sm" type="text">
                            <input class="form-control form-control-sm my-2" type="text">
                            <input class="form-control form-control-sm mb-2" type="text">
                            <input class="form-control form-control-sm" type="text">
                        </div>

                        <div class="col text-center">
                            <label>Period Employed</label>
                            <div class="row">
                                <div class="col">
                                    <label>From</label>
                                </div>
                                <div class="col">
                                    <label>To</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                                <div class="col">
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                                <div class="col">
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                                <div class="col">
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                                <div class="col">
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col text-center">
                            <div class="row mb-4 pb-2 text-center">
                                <div class="col">
                                    <label>Minimum Qualification Required</label>
                                </div>
                            </div>
                            <input class="form-control form-control-sm" type="text">
                            <input class="form-control form-control-sm my-2" type="text">
                            <input class="form-control form-control-sm mb-2" type="text">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid ats-form-tab">
                <h5>C. PRODUCTIVITY</h5>

                <!--- Q1 --->
                <div class="form-group">
                    <label><strong>1. What is your monthly gross income? (Check on the range where your monthly gross falls.).</strong></label>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b5" value="1">
                                <label class="form-check-label" for="b5">Below &#8369;5,000.00</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b20" value="1">
                                <label class="form-check-label" for="b20">&#8369;15,000.00 to less than &#8369;20,000.00</label>
                            </div>
                        </div>
                    </div>

                        
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b10" value="1">
                                <label class="form-check-label" for="b10">&#8369;5,000.00 to less than &#8369;10,000.00</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b25" value="1">
                                <label class="form-check-label" for="b25">&#8369;20,000.00 to less than &#8369;25,000.00</label>
                            </div>
                        </div>
                    </div>
                         
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b15" value="1">
                                <label class="form-check-label" for="b15">&#8369;10,000.00 to less than &#8369;15,000.00</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="a25" value="1">
                                <label class="form-check-label" for="a25">&#8369;25,000.00 and above</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Q2 --->
                <div class="form-group">
                    <label><strong>2. Professional Examination(s) Passed</strong></label>
                    <div class="row text-center">
                        <div class="col">
                            <label class="form-check-label" for="l1">Name of Examination</label>
                        </div>
                        <div class="col-3">
                            <label class="form-check-label" for="l2">Date Taken</label>
                        </div>
                        <div class="col-3">
                            <label class="form-check-label" for="q12oth">Rating</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>
                </div>

                <!--- Q3 --->
                <div class="form-group">
                    <label><strong>3. Training(s) / Advance Studies Attended After College</strong></label>
                    <p>Please list down all professional work-related training program(s)including advance studies you have attended after college.</p>
                    <div class="row text-center">
                        <div class="col">
                            <label class="form-check-label" for="l1">Title of Training or Advance Study</label>
                        </div>
                        <div class="col-3">
                            <label class="form-check-label" for="l2">Duration & Credits Earned</label>
                        </div>
                        <div class="col-3">
                            <label class="form-check-label" for="q12oth">Name of Training Institution / College / University</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col-3">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>
                </div>

                <!--- Q4 --->
                <div class="form-group">
                    <label><strong>4. Scholarship Grants</strong></label>
                    <textarea class="form-control" id="" rows="2"></textarea>
                </div>

                <!--- Q5 --->
                <div class="form-group">
                    <label><strong>5. Awards Received</strong></label>
                    <textarea class="form-control" id="" rows="2"></textarea>
                </div>

                <!--- Q6 --->
                <div class="form-group">
                    <label><strong>6. Researches and Publications</strong></label>
                    <textarea class="form-control" id="" rows="2"></textarea>
                </div>

                <!--- Q7 --->
                <div class="form-group">
                    <label><strong>7. Community Involvement Activities</strong></label>
                    <textarea class="form-control" id="" rows="2"></textarea>
                </div>

                <!--- Q8 --->
                <div class="form-group">
                    <label><strong>8. Other Professional Engagements</strong></label>
                    <textarea class="form-control" id="" rows="2"></textarea>
                </div>

                <h5>D. IMPACT OF PAULINIAN EDUCATION</h5>

                <!--- Q1 --->
                <div class="form-group">
                    <label><strong>1. How do you asses the relevance of your Paulinian education in the present times?</strong></label>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b5" value="1">
                                <label class="form-check-label" for="b5">very relevant</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b20" value="1">
                                <label class="form-check-label" for="b20">somewhat relevant</label>
                            </div>
                        </div>
                    </div>

                        
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b10" value="1">
                                <label class="form-check-label" for="b10">relevant</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b25" value="1">
                                <label class="form-check-label" for="b25">not relevant</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Q2 --->
                <div class="form-group">
                    <label><strong>2. To what extent has your Paulinian education contributed to the development of your well-being? Please check the appropriate degree of extent.</strong></label>
                    <div class="container-fluid py-3 border">
                        <div class="row text-center mb-3">
                            <div class="col">
                                <label class="form-check-label">Items</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Great Extent</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Average Extent</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Least Extent</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">a. It has helped me to advance my career</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2a" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2a" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2a" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-check-label">b. It has enhanced my technical, managerial and leadership knowledge and skills</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2b" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2b" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2b" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">c. It has provided me with professional competence and values</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2c" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2c" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2c" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-check-label">d. It has contributed to my professional prestige</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2d" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2d" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2d" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">e. It has broadened my understanding of life and my role in the life of the Catholic Church</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2e" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2e" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2e" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-check-label">f. It has molded me completely as a person</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2f" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2f" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2f" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">g. It has enhanced my understanding of relationship with God</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2g" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2g" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2g" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-check-label">h. It has imbibed in me love and service for God and fellowmen</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2i" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2i" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2i" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">i. Others (Please describe)</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2oth" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2oth" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="dq2oth" value="1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Q3 --->
                <div class="form-group">
                    <label><strong>3. Would you recommend St. Paul University Philippines to potential students?</strong></label>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b5" value="1">
                                <label class="form-check-label" for="b5">definitely</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b20" value="1">
                                <label class="form-check-label" for="b20">probably</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b10" value="1">
                                <label class="form-check-label" for="b10">not sure</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cq1" id="b25" value="1">
                                <label class="form-check-label" for="b25">definitely not</label>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="container-fluid ats-form-tab">
                <h5>E. ALUMNI INVOLVEMENT</h5>

                <!--- Q1 --->
                <div class="form-group">
                    <label><strong>1. How do you think can you get yourself involved in SPUP affairs?</strong></label>
                    <div class="container-fluid border py-3">
                        <div class="row text-center mb-3">
                            <div class="col">
                                <label class="form-check-label">Items</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">High Priority</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Average Priority</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Low Priority</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">a. By providing financial support to some of SPUP's programs and projects.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1a" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1a" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1a" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-check-label">b. By extendong my technical expertise as a resource person for training.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1b" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1b" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1b" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">c. By promoting SPUP in my community.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1c" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1c" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1c" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-check-label">d. By participating in the activities of the SPUP Alumni Association and my Alumni chapter.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1d" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1d" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1d" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">e. By encouraging friends and acquaintances to send their children to SPUP for their schooling.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1e" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1e" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1e" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">f. Others (Please describe)</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1f" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1f" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq1f" value="1">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--- Q2 --->
                <div class="form-group">
                    <label><strong>2. What must SPUP do to encourage and sustain its active networking with its alumni?</strong></label>
                    <div class="container-fluid border py-3">
                        <div class="row text-center mb-3">
                            <div class="col">
                                <label class="form-check-label">Items</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Most Interested</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Interested</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Least Interested</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">a. Cultivate harmonious relations between SPUP and all its students.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2a" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2a" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2a" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-check-label">b. Create opportunities for interactions among alumni, students, faculty and administration through the SPUP Alumni Association (SPUPAA).</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2b" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2b" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2b" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">c. Introduce a program for professional upgrading of alumni.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2c" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2c" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2c" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-check-label">d. Invite outstanding alumni as visiting lecturer, speaker.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2d" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2d" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2d" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">e. Ensure regular communications between the SPUP management and the alumni through the SPUP Website.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2e" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2e" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2e" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">f. Recognize the accomplishments and contributions of its Alumni in varioius disciplines and undertakings through an Alumni Newsletter.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2f" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2f" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2f" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">g. Design a variety of activities tha will entice maximum participation and involvement of the Alumni.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2g" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2g" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2g" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">h. Provide Alumni with some incentives and benefits for availing of the various services of the University (e.g., discounts for children'stuition and miscellanous fees, food discounts in the canteen, discounts for the use of the swimming pool, call center, etc.)</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2h" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2h" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2h" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">i. Frequently update the Alumni directory (yearly or every 2 years).</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2i" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2i" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2i" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">j. Others (Please describe)</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2j" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2j" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2j" value="1">
                                </div>
                            </div>
                        </div>

                    </div>

                    
                </div>

                <!--- Q3 --->
                <div class="form-group">
                    <label><strong>3. How can you assit in SPUP's extensive marketting program?</strong></label>
                    <div class="container-fluid border py-3">
                        <div class="row text-center mb-3">
                            <div class="col">
                                <label class="form-check-label">Items</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Most Interested</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Interested</label>
                            </div>
                            <div class="col-2">
                                <label class="form-check-label">Least Interested</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">a. By personally encouraging potential student applicants to explore admission into SPUP and by introducing them to SPUP and its curricular programs and services.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3a" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3a" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3a" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-check-label">b. By actively supporting the activitiesof the SPUPAA and my Alumni Chapter.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3b" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3b" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3b" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">c. By participating in the university's promotional activities.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3c" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3c" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3c" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-check-label">d. By sending my siblings/children to SPUP.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3d" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3d" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3d" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">e. By defending and standing for SPUP when circumstances demand it.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3e" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3e" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3e" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">f. By being a role model in my life as a professional, as a family man/woman or as an employee/employer.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3f" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3f" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3f" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">g. By being proud of and faithful to my being a Paulinian.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3g" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3g" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3g" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">h. By taking the role of a leader in the community</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3h" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3h" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3h" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">i. By practicing consistently the Paulinian ideals and virtues.</label>
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3i" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3i" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3i" value="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label">j. Others (Please describe)</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>    
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3j" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq3j" value="1">
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class ="form-check">
                                    <input class="form-check-input" type="radio" name="eq2j" value="1">
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
                
                <!--- Q4 --->
                <div class="form-group">
                    <label><strong>4. What are your suggestions to improve the quality of education and services at St. Paul University Philippines?</strong></label>
                    <textarea class="form-control" id="" rows="3" name=""></textarea>
                </div>
                
                <!--- Thank you --->
                <div class="form-group">
                    <label><strong><em>Thank you</em></strong>&nbsp; for sharing your time to answer this questionnaire. Being one of the alumni of SPUP, may we request you to to list down the names of other college graduates (AY 2001-2002 to AY 2011-2012) from your institutiom including their address and contact numbers. Their participation will also be needed to make this study more meaningful and useful.</label>
                    
                    <div class="row text-center">
                        <div class="col-4">
                            <label><strong><em>Name</em></strong></label>
                        </div>
                        <div class="col-4">
                            <label><strong><em>Full Address</strong></em></label>
                        </div>
                        <div class="col-4">
                            <label><strong><em>Contact Number</strong></em></label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>    
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                        <div class="col">
                            <input class="form-control form-control-sm" type="text">
                        </div>
                    </div>
                    
                </div>
                
                
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-lg btn-outline-secondary btns" type="button" id="prevBtn" onclick="nextPrev(-1)">Prev</button>
                <button class="btn btn-lg btn-outline-success btns" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
            <div class="mb-5" style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
            
            </form>
        </div>
    </div>