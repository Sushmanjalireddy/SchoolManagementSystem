<?php
	$title= "add student";
	$js = "../Script/addStuValidation.js";
	include('header.php');
?>
								<!-- <div id="sidebar" class="">
                <ul>
                  <li><a href="addStudent.php">Add Student</a></li>
                  <li><a href="viewStudent.php">View Student</a></li>
                  <li><a href="editrequestlist.php">Edit Request</a></li>
                  <li><a href="dashboard.php">Dashbord</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>
                </ul>


								</div>
              </td> -->

              <td>
                <form  class=""  id="inform" action="../Controller/regCheckStudent.php" onsubmit="return validation()" method="post">
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
                          <td>Name</td>
                          <td>:<input type="text" id="name" name="name" placeholder="Enter Full Name"></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>:<input type="email" id="email" name="email" value=""></td>
                        </tr>
                        <tr>
                          <td>Mobile No</td>
                          <td>:<input type="text" id="mobile" name="mobile" value=""></td>
                        </tr>
                        <tr>
                          <td>UIN</td>
                          <td>:<input type="text" id="id" name="id" value=""></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td>:<input type="password" id="password" name="password" value=""></td>
                        </tr>
                        <tr>
                          <td>Confirm Password</td>
                          <td>:<input type="password" id="repass" name="repass" value=""></td>
                        </tr>
                        <tr>
                          <td>Gender</td>
                          <td>
                            :<input type="radio" id="gender" name="gender" value="male">Male
                            <input type="radio" id="gender" name="gender" value="female">Female
                            <input type="radio" id="gender" name="gender" value="other">Other
                          </td>
                        </tr>
                        <tr>
                          <td>Date of Birth</td>
                          <td>:<input type="date" id="dob" name="dob" value=""></td>
                        </tr>
                        <tr>
                          <td>Present Address</td>
                          <td>:<input type="text"  id="p_address" name="p_address" value=""></td>
                        </tr>
                        <tr>
                          <td>Semester</td>
                          <td>:<select id="classE" name="class">
                            <option value="Spring 2022">Spring 2022</option>
                            <option value="Fall 2022">Fall 2022</option>
                            <option value="Spring 2023">Spring 2023</option>
                            <option value="Fall 2023">Fall 2023</option>
                            <option value="Spring 2024">Spring 2024</option>
                            </select>
                          </td>
                        </tr>

                        <!-- <tr >
                          <td>International Student</td>
                          <td>:<select id="section" name="section">
                              <option value="A">A</option>
                              <option value="B">B</option>
                            </select>
                          </td>
												</tr> -->
                        <tr>
                          <td>Parent's Number</td>
                          <td>:<input type="text" id="roll" name="roll" value=""></td>
                        </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </center>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>

<?php include('footer.php'); ?>
