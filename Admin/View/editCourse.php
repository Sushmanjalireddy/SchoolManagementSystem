<?php
	$title= "Update course";
	$js = "../Script/addCourseVal.js";
	include('header.php');
	include_once('../model/courseModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>
							<div id="sidebar" class="">
                <ul>
                  <li><a href="addCourse.php">Create Course</a></li>
                  <li><a href="viewCourse.php">View Course</a></li>
                </ul>

								</div>
              </td>
              <td>
                <form id="inform" action="../controller/updateCheckCourse.php" onsubmit="return validation()"  method="post">

                <fieldset>
                  <legend>Update Course</legend>
                    <table align="center">
											<tr>
												<td colspan="2">
													<center>
													<div id="error_messege">
													</div>
												</center>
											</tr>
                      <tr>
                        <td>Id</td>
                        <td>:<input type="text" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Course Name</td>
                        <td>:<input type="text" id="name" name="name" value="<?php echo $updatemyinfo['course_name']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Semester</td>
                        <td>:<select id="classE" name="class">
                            <option  <?php  if($updatemyinfo['class']=="Spring 2022"){?> selected="true" <?php } ?>  value="Spring 2022">Spring 2022</option>
                            <option  <?php  if($updatemyinfo['class']=="Fall 2022"){?> selected="true" <?php } ?>  value="Fall 2022">Fall 2022</option>
                            <option  <?php  if($updatemyinfo['class']=="Spring 2023"){?> selected="true" <?php } ?>  value="Spring 2023">Spring 2023</option>
                            <option  <?php  if($updatemyinfo['class']=="Fall 2023"){?> selected="true" <?php } ?>  value="Fall 2023">Fall 2023</option>
                            <option  <?php  if($updatemyinfo['class']=="Spring 2024"){?> selected="true" <?php } ?>  value="Spring 2024">Spring 2024</option>
                          </select>
                        </td>
                      <tr>
                        <td>Description</td>
                        <td><textarea id="description" name="description" rows="3" cols="20"><?php echo $updatemyinfo['description']; ?></textarea></td>
                      </tr>

                      </table>

                    <hr>
                    <center>
                      <input type="submit" name="update" value="Update">
                  </center>
                </fieldset>







            </td>
            </tr>
            </table>
            </td>
            </tr>




            <?php include('footer.php'); ?>
