# Signupform
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <style type="text/css">
  .Container{
    border: 1px solid white;
  background-color:#f1f1f1;
  border-radius:5px;
  border: 1px solid white;
 color: navy blue;
  width: 45%;
  text-align: left;
  margin-left: 3%;
  margin-top: 3%%;
  min-height: 350px;
  height:auto;
  padding: 25px;
  float: center;
  
} 
  .title_container{
    border: 1px solid white;
    float: center;
    background-color: navy blue;
    color: white;
        width:47.4%;
        min-height:50px;
        margin-left:3%;
        margin-top: 3%;
        height: auto;
  
  }

img.avatar {
  width: 5%;
  border-radius: 5%;
  float: right;
}
  button:hover {
  opacity: 0.8;
}

  .button1{
    background-color: green;
  color: white;
   padding: 14px 20px;
  margin: 8px 0;
 
  border: 1px solid white;
  cursor: pointer;

  width: auto;
  
  }
  .button2{
  background-color: red;
  color: white;
  border: 1px solid white;
  padding: 10px 18px;
  cursor: pointer;
  width: auto;
  
  
  }
  .footer
  {
    border: 1px solid white;
    background-color: orange;
    color: white;
        width:100%
        min-height:300px;
       
        height: auto;
  
  
  }

</head>
</style>

<body bgcolor="#34495E">

<div class="title_container">
      <h2>Sign up</h2><br/>


    </div>
    
    <div class="Container">
    <div class="">
        <form action="/action_page.php">
          <div class="imgcontainer">
        <img src="avatar.jpg" alt="Avatar" class="avatar">
       </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <label form="First_Name">First Name</label>
            <input type="First_Name" name="First_Name" placeholder="First Name" required /><br/><br/>
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <label form="Last_Name">Last Name</label>
            <input type="Last_Name" name="Last_Name" placeholder=" Last Name" required /><br/><br/>
          </div>  
           </div>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                <label form="Email">E-mail</label>
            <input type="Email" name="Email" placeholder="Enter Email" required /><br/><br/>
          </div>       
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <label form="User_Name">Username</label>
            <input type="User_Name" name="User_Name" placeholder="Enter Username" required /><br/><br/>
          </div>
          <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <label form="Password">Password </label>
                <input type="Password" name="Password" placeholder="Enter password" required /><br/><br/>
              </div>
            </div>
            <div class="input_field radio_option">
                  <label form="Gender">Gender</label>
              <input type="radio" name="radiogroup1" id="rd1">
              <label for="rd1">Male</label>
              <input type="radio" name="radiogroup1" id="rd2">
              <label for="rd2">Female</label><br/><br/>
              </div>

              
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <label form="Date Of Birth">Date of Birth</label>           
             <select name="DOBDay">
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
                               <select name="DOBMonth">
              <option value="January">January</option>
               <option value="February">February</option>
               <option value="March">March</option>
                <option value="April">April</option>
                 <option value="May">May</option>
                 <option value="June">June</option>
               <option value="July">July</option>
               <option value="August">August</option>
                <option value="September">September</option>
                 <option value="October">October</option>
                 <option value="November">November</option>
               <option value="December">December</option>
               
                 </select> 
                                <select name="DOBYear">
              <option value="2019">2019</option>
               <option value="2018">2018</option>
               <option value="2017">2017</option>
                <option value="2016">2016</option>
                 <option value="2015">2015</option>
                 <option value="2014">2014</option>
               <option value="2013">2013</option>
               <option value="2012">2012</option>
                <option value="2011">2011</option>
                 <option value="2010">2010</option>
                 <option value="2009">2009</option>
               <option value="2008">2008</option>
               <option value="2007">2007</option>
               <option value="2006">2006</option>
               <option value="2005">2005</option>
               <option value="2004">2004</option>
               <option value="2003">2003</option>
               <option value="2002">2002</option>
               <option value="2001">2001</option>
               <option value="2000">2000</option>
               <option value="1999">1999</option>
               <option value="1998">1998</option>
               <option value="1997">1997</option>
               <option value="1996">1996</option>
             </select>
               <br/><br/>
          </div>
           <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <label form="Secret Word">Secret word</label>
              <input type="password" name="Secret" placeholder="Enter Secret word" required /><br/><br/>
                
              
          
            
          <div class="button1">
           <button type="button" class="registerbtn">Register</button>
         
          </div>
         <div class="input_field checkbox_option">
                <input type="checkbox" id="cb1">
                <label for="checkbox"> Remember Me</label><br/><br/>
              <div class="button2">
    <button type="button" class="cancelbtn">Cancel</button>
    <br/><br/>

            </div>
          </div>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
