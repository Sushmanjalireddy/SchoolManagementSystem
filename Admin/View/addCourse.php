<?php
	$title= "Add course";
	$js = "../Script/addCourseVal.js";
	include('header.php');
?>
								<div id="sidebar" class="">
								<ul>
                  <li><a href="addCourse.php">Create Course</a></li>
                  <li><a href="viewCourse.php">View Course</a></li>
                </ul>
              </td>


							</div>

              <td>
                <form id="inform" class="" action="../Controller/addCheckCourse.php" onsubmit="return validation()" method="post">
                  <fieldset >
                    <legend>Create Course</legend>
                      <table align="center">
												<tr>
													<td colspan="2">
														<center>
														<div id="error_messege">
														</div>
													</center>
												</tr>
                        <tr>
                          <td>Course Name</td>
                          <td>:<input type="text" id="name" name="name" placeholder=""></td>
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
                        <tr>
                          <td>Description</td>
                          <td><textarea name="description" id="description" rows="3" cols="20"></textarea></td>
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
