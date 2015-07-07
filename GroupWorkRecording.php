<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
this file has been changed lolololol

-->
<html>
    <head>
        <title>Group Work Recording</title>
        <?php include_once "header.php"; ?>
    </head>
    <body>
    	<div class="container">
        <div>Group Work Recording</div><br>
        <form action="groupWorkRecordingSubmit.php" method="post">
            <div name="part1" style="display: block">
                Group Name *<br>
                <select name="groupName">
                    <option value="Saturday Night Live">Saturday Night Live</option>
                    <option value="Gorbals Football">Gorbals Football</option>
                    <option value="Govanhill Park">Govanhill Park</option>
                </select><br>
                <br>
                Session Date *<br>
                day 
                <select name="dateDay">
                    <option value="" ></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>  
                </select> 
                month 
                <select name="dateMonth">
                    <option value="" ></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                year 
                <select name="dateYear">
                    <option value="" ></option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                </select>
                <br>
                 <!--TO-DO: make sure day number changes according to the selected month
                i.e.:if selected month is 28 days long, choosing 30 will return the max number(28)
                -->
                <br>
                Venue *<br>
                <input type="radio" name="venue" value="St Ninian's Church"> St Ninian's Church <br>
                <input type="radio" name="venue" value="Gorbals MUGA"> Gorbals MUGA <br>
                <input type="radio" name="venue" value="Govanhill Park"> Govanhill Park <br>
                <input type="radio" name="venue" value="Other"> Other <br>
                <!--TO-DO: link a text box to the 'Other' radio selection with-->
                <br>
                Workers Delivering Session *<br>
                <input type="radio" name="workers" value="John Gilfillan"> John Gilfillan<br>
                <input type="radio" name="workers" value="Danielle Tausney"> Danielle Tausney<br>
                <input type="radio" name="workers" value="JD Sinclair"> JD Sinclair<br>
                <input type="radio" name="workers" value="Marc Crolla"> Marc Crolla<br>
                <input type="radio" name="workers" value="Amie McGill"> Amie McGill<br>
                <input type="radio" name="workers" value="Marie Lennox"> Marie Lennox<br>
                <input type="radio" name="workers" value="Colin McGregor"> Colin McGregor<br>
                <input type="radio" name="workers" value="Other"> Other <br>
                <!--TO-DO: link a text box to the 'Other' radio selection with-->
                Purpose of the session *<br>
                <input type="text" name="purpose"><br>
                <br>
                What are the Session Outcomes?*
                    
                <table>
                    <tr>
                        <td>
                             
                        </td>
                        <td>
                             Achieved  
                        </td>
                        <td>
                            Not Achieved    
                        </td>
                        <td>
                            Not an Objective    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Provide Structured Group Work Activities   
                        </td>
                        <td>
                            <input type="radio" name="select1" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select1" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select1" value="Not an Objective" >    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Provide Access to Arts Activities   
                        </td>
                        <td>
                            <input type="radio" name="select2" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select2" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select2" value="Not an Objective" >    
                        </td>
                    </tr>
                    <tr>
                        <td>
                           Provide access to sports and physical activities 
                        </td>
                        <td>
                            <input type="radio" name="select3" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select3" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select3" value="Not an Objective" >    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Provide youth participation programme   
                        </td>
                        <td>
                            <input type="radio" name="select4" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select4" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select4" value="Not an Objective" >    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Provide access to accredited youth work programmes   
                        </td>
                        <td>
                            <input type="radio" name="select5" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select5" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select5" value="Not an Objective" >    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Provide access to free flow activities (drop in)   
                        </td>
                        <td>
                            <input type="radio" name="select6" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select6" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select6" value="Not an Objective" >    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Provide access to recreational activities   
                        </td>
                        <td>
                            <input type="radio" name="select7" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select7" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select7" value="Not an Objective" >    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Provide support, information and advice (detached youth work)   
                        </td>
                        <td>
                            <input type="radio" name="select8" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select8" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select8" value="Not an Objective" >    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Provide referral services (detached youth work)   
                        </td>
                        <td>
                            <input type="radio" name="select9" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select9" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select9" value="Not an Objective" >    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Provide mentoring (DofE Awards)   
                        </td>
                        <td>
                            <input type="radio" name="select10" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select10" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select10" value="Not an Objective" >    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Provide expedition training (DofE Awards)   
                        </td>
                        <td>
                            <input type="radio" name="select11" value="Achieved">   
                        </td>
                        <td>
                            <input type="radio" name="select11" value="Not Achieved">  
                        </td>
                        <td>
                            <input type="radio" name="select11" value="Not an Objective" >    
                        </td>
                    </tr>
                </table><br>
                <br>
            </div>
            <div name="part2" style="display: none">
                Evaluation<br>
                <br>
                How did the Session go?<br>
                <textarea name="sessionHow"></textarea><br>
                <br>
                Number of Male Participants*<br>
                <input type="number" name="maleParticipants"><br>
                <br>
                Number of Female Participants*<br>
                <input type="number" name="femaleParticipants"><br>
                <br> 
            </div>
            <div name="part3" style="display: none">
                Session Learning Outcomes<br>
                <table>
                     <tr>
                        <td>
                            
                        </td>
                        <td>
                            Yes
                        </td>
                        <td>
                            No
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Increase Creativity Skills
                        </td>
                        <td>
                            <input type="radio" name="selectLearning1" value="yes">
                        </td>
                        <td>
                            <input type="radio" name="selectLearning1" value="no">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Increased Skills in Working With Others
                        </td>
                        <td>
                            <input type="radio" name="selectLearning2" value="yes">
                        </td>
                        <td>
                            <input type="radio" name="selectLearning2" value="no">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Increased Communication Skills
                        </td>
                        <td>
                            <input type="radio" name="selectLearning3" value="yes">
                        </td>
                        <td>
                            <input type="radio" name="selectLearning3" value="no">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Increased Organisational Skills
                        </td>
                        <td>
                            <input type="radio" name="selectLearning4" value="yes">
                        </td>
                        <td>
                            <input type="radio" name="selectLearning4" value="no">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Increased Skills in Discussing and Agreeing
                        </td>
                        <td>
                            <input type="radio" name="selectLearning5" value="yes">
                        </td>
                        <td>
                            <input type="radio" name="selectLearning5" value="no">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Increased Skills in Trusting Others
                        </td>
                        <td>
                            <input type="radio" name="selectLearning6" value="yes">
                        </td>
                        <td>
                            <input type="radio" name="selectLearning6" value="no">
                        </td>
                    </tr>
                    <tr>
                        
                        <td>
                            Decreased Risk of Social Exclusion  
                        </td>
                        <td>
                            <input type="radio" name="selectLearning7" value="yes">
                        </td>
                        <td>
                            <input type="radio" name="selectLearning7" value="no">
                        </td>
                    
                    </tr>
                    <tr>
                        <td>
                            Decreased Risk of Participating in Anti-Social Behaviour
                        </td>
                        <td>
                            <input type="radio" name="selectLearning8" value="yes">
                        </td>
                        <td>
                            <input type="radio" name="selectLearning8" value="no">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Decreased Risk of Participating in Health Risk Activities
                        </td>
                        <td>
                            <input type="radio" name="selectLearning9" value="yes">
                        </td>
                        <td>
                            <input type="radio" name="selectLearning9" value="no">
                        </td>
                    </tr>
                </table><br>
                <br>
                What was the level of impact on the participants?*<br>
                <table>
                    <tr>
                        <td>   
                        </td>
                        <td>
                            1
                        </td>
                        <td> 
                            2
                        </td>
                        <td> 
                            3
                        </td>
                        <td> 
                            4
                        </td>
                        <td>
                            5
                        </td>
                        <td>
                            6
                        </td>
                        <td>
                            7
                        </td>
                        <td>
                            8
                        </td>
                        <td>
                            9
                        </td>
                        <td>
                            10
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Minimal Impact
                        </td>
                        <td>
                            <input type="radio" name="selectImpact" value="1">
                        </td>
                        <td>
                            <input type="radio" name="selectImpact" value="2">
                        </td>
                        <td>
                            <input type="radio" name="selectImpact" value="3">
                        </td>
                        <td>
                            <input type="radio" name="selectImpact" value="4">
                        </td>
                        <td>
                            <input type="radio" name="selectImpact" value="5">
                        </td>
                        <td>
                            <input type="radio" name="selectImpact" value="6">
                        </td>
                        <td>
                            <input type="radio" name="selectImpact" value="7">
                        </td>
                        <td>
                            <input type="radio" name="selectImpact" value="8">
                        </td>
                        <td>
                            <input type="radio" name="selectImpact" value="9">
                        </td>
                        <td>
                            <input type="radio" name="selectImpact" value="10">
                        </td>
                        <td>
                            Life Changing
                        </td>
                    </tr>
                </table><br>
                <br>
                Main Capacity Theme<br>
                <select name="mainCapacityTheme">
                    <option value="Confident Individuals">Confident Individuals</option>
                    <option value="Responsible Citizens">Responsible Citizens</option>
                    <option value="Effective Contributors">Effective Contributors</option>
                    <option value="Successful Learners">Successful Learners</option>
                </select><br>
                <br>     
            </div>
            <div name="part4" style="display: none">
                What method(s) have you used to evaluate this session? <br>
                <input name="methods1" type="checkbox" value="Verbal feedback from the participants; ">Verbal feedback from the participants<br>
                <input name="methods2" type="checkbox" value="Target Evaluation or other worksheet; ">Target Evaluation or other worksheet <br>
                <input name="methods3" type="checkbox" value="Questionnaire or other research; ">Questionnaire or other research<br>
                <input name="methods4" type="checkbox" value="Focus group; ">Focus group<br>
                <input name="methods5" type="checkbox" value="Other; ">Other<br>
                <br>

                What evidence have you produced from this session?<br>
                <input name="evidence1" type="checkbox" value="Register of Attendance (Sign In Sheet); ">Register of Attendance (Sign In Sheet)<br>
                <input name="evidence2" type="checkbox" value="Impact Statement; ">Impact Statement<br>
                <input name="evidence3" type="checkbox" value="Photographic Evidence; ">Photographic Evidence<br>
                <input name="evidence4" type="checkbox" value="Video Evidencel; ">Video Evidence<br>
                <input name="evidence5" type="checkbox" value="Work Product (from the young people); ">Work Product (from the young people)<br>
                <input name="evidence6" type="checkbox" value="Other; ">Other<br>
                <br>
                Forward Planing<br>
                <br>
                What changes would you make the next time?<br>
                <textarea name="nextChanges" ></textarea><br>
                <br>
                What Actions do you need to take before the next session?*<br>
                <textarea name="nextActions"></textarea><br>
                <br>
                <input type="submit" value="Submit">
            </div>
        </form>
        <button type="button" onclick="back()">Back</button>
        <button type="button" onclick="next()">Next</button>
		<br><br>
	</div>
    </body>

    <script>
    var page = 0;

    function next(){
        if(page===0){ 
            document.getElementsByName()


            document.getElementsByName('part1')[0].style.display='none';
            document.getElementsByName('part2')[0].style.display='block';
            document.getElementsByName('part3')[0].style.display='none';
            document.getElementsByName('part4')[0].style.display='none';
            page++;
        } else if(page===1){ 
            document.getElementsByName('part1')[0].style.display='none';
            document.getElementsByName('part2')[0].style.display='none';
            document.getElementsByName('part3')[0].style.display='block';
            document.getElementsByName('part4')[0].style.display='none';
            page++;
        }else if(page===2){ 
            document.getElementsByName('part1')[0].style.display='none';
            document.getElementsByName('part2')[0].style.display='none';
            document.getElementsByName('part3')[0].style.display='none';
            document.getElementsByName('part4')[0].style.display='block';
            page++;
        }
       
    }

    function back(){
        
        if(page===3){ 
            document.getElementsByName('part1')[0].style.display='none';
            document.getElementsByName('part2')[0].style.display='none';
            document.getElementsByName('part3')[0].style.display='block';
            document.getElementsByName('part4')[0].style.display='none';
            page--;
        } else if(page===2){ 
            document.getElementsByName('part1')[0].style.display='none';
            document.getElementsByName('part2')[0].style.display='block';
            document.getElementsByName('part3')[0].style.display='none';
            document.getElementsByName('part4')[0].style.display='none';
            page--;
        } else if(page===1){ 
            document.getElementsByName('part1')[0].style.display='block';
            document.getElementsByName('part2')[0].style.display='none';
            document.getElementsByName('part3')[0].style.display='none';
            document.getElementsByName('part4')[0].style.display='none';
            page--;
        }
    }


    </script>
</html>
