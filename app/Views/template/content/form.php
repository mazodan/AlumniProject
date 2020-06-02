
    <div class="container-fluid mt-5 mb-5">
        <div class="container border border-success">

            <div class="container-fluid">
                <h5>DIRECTIONS:</h5>
                <p>In each of the following questions, put a check mark on the blank before the corresponding answer/s. Please supply the answer needed in other items.</p>
            </div>

            <form action="" method="POST" id="regForm">
            <!--- GENERAL INFORMATION --->
            <div class="container-fluid tab">
                <h5>A. GENERAL INFORMATION</h5>

                <!--- Name --->
                <div class="form-group row pt-1">
                    <label class="col-sm-2 col-form-label" for="name"><strong>Name</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control form-control-sm" id="name" type="text" />
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
                                <input class="form-control form-control-sm py-1" type="text">
                                <input class="form-control form-control-sm" type="text">
                            </div>
                            <div class="col-auto text-center">
                                <label>College or University</label>
                                <input class="form-control form-control-sm" type="text">
                                <input class="form-control form-control-sm py-1" type="text">
                                <input class="form-control form-control-sm" type="text">
                            </div>
                            <div class="col-auto text-center">
                                <label>Year Graduated)</label>
                                <input class="form-control form-control-sm" type="text">
                                <input class="form-control form-control-sm py-1" type="text">
                                <input class="form-control form-control-sm" type="text">
                            </div>
                            <div class="col-auto text-center">
                                <label>Honor(s) or Award(s)</label>
                                <input class="form-control form-control-sm" type="text">
                                <input class="form-control form-control-sm py-1" type="text">
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--- EMPLOYABILITY --->
            <div class="container-fluid tab">
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
                        <div class="col-1">
                            <label>Government</label>
                        </div>
                        <div class="col-auto">
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
                        <div class="col-1">
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
                        <div class="col-2">
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
                        <div class="col-2">
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

            </div>

            <div class="container-fluid tab">
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

            </div>

            

            <div class="text-right">
                <button class="btn btn-secondary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button class="btn btn-success" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
            <div class="mb-5" style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <!-- <span class="step"></span> -->
            </div>
            
            </form>
        </div>
    </div>