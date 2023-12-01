<?php
	$title = "add Teacher";
	$js = "../Script/addValidationTeacher.js";
	// $style = "../Style/register.css";
	include('header.php');

?>
								<!-- <div id="sidebar" class="">
                <ul>
                  <li><a href="addTeacher.php">Add Teacher</a></li>
                  <li><a href="viewTeacher.php">View Teacher</a></li>
                  <li><a href="dashboard.php">Dashbord</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>
                </ul>
							
								</div>
              </td> -->

              <td>
                <form  class="" id="myform" action="../Controller/regCheckTeacher.php" method="post" onsubmit="return validation()">
                  <fieldset >
                    <legend>REGISTRATION</legend>
                      <table align="center">
												<tr>
													<td colspan="2">
	                          <center>
	                          <div id="error_messege">
	                          </div>
	                        </center>
												</tr>
                        <tr>
                          <td>Employee Number</td>
                          <td>:<input type="text" id="id"  name="id" value=""></td>
                        </tr>
                        <tr>
                          <td>Name</td>
                          <td>:<input type="text" id="name" name="name" placeholder="Enter Full Name"></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>:<input type="email" id="email"  name="email" value=""></td>
                        </tr>
                        <tr>
                          <td>Mobile No</td>
                          <td>:<input type="text"  id="mobile" name="mobile" value=""></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td>:<input type="password" id="password"  name="password" value=""></td>
                        </tr>
                        <tr>
                          <td>Confirm Password</td>
                          <td>:<input type="password"  id="repass"  name="repass" value=""></td>
                        </tr>
                        <tr>
                          <td>Gender</td>
                          <td>
                            :<input type="radio"  id="gender"  name="gender" value="male">Male
                            <input type="radio" id="gender"  name="gender" value="female">Female
                            <input type="radio" id="gender"  name="gender" value="other">Other
                          </td>
                        </tr>
                        <tr>
                          <td>Date of Birth</td>
                          <td>:<input type="date" id="dob"  name="dob" value=""></td>
                        </tr>
												<tr>
                          <td>Semester</td>
                          <td>:<select id="subject" name="subject">
                              <option value="Spring 2022">Spring 2022</option>
                              <option value="Fall 2022">Fall 2022</option>
                              <option value="Spring 2023">Spring 2023</option>
                              <option value="Fall 2023">Fall 2023</option>
                              <option value="Spring 2024">Spring 2024</option>
                              <option value="Fall 2024">Fall 2024</option>
                            </select>
                          </td>
												</tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" id="submit" name="submit" value="Submit">
                        <input type="reset" id="reset" name="reset" value="Reset">
                    </center>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>
<?php include('footer.php'); ?>
