
<?php
ob_start();
//require 'user_session.php';
?>

               <?php
								include_once "connection.php";
								$sql = "SELECT * FROM users WHERE uname='".$load['uname']."'";
								if ($result = mysqli_query($con, $sql))
								{
     
								?>
									<table class="table table-striped table-bordered table-hover">
									<thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Names</th>
                                            <th>NID</th>
											<th>Telephone</th>
                                            <th>Acc Number</th>
											<th>Balance</th>
                                        </tr>
                                    </thead><?php

                                    while ($row = mysqli_fetch_row($result))
								{
										?>
										<tbody>
                                        <tr>
                                            <td><?php printf("%s", $row[0]); ?></td>
											<td><?php printf("%s", $row[1]); ?></td>
                                            <td><?php printf("%s", $row[3]); ?></td>
											<td><?php printf("%s", $row[2]); ?></td>
											<td><?php printf("%s", $row[6]); ?></td>
											<td><?php printf("%s", $row[7]); ?>&nbsp;Frw</td>
											<td><a class="sub_btn" href="user_pan.php?transfer='<?php echo $row[0];?>'">Transfer</a></td>
											<td><a class="sub_btn" href="user_pan.php?withdraw11='<?php echo $row[0];?>'">withdraw</a></td>
                                        </tr>
                                    </tbody>
									<?php	
									}	
										echo '</table>';
							 mysqli_free_result($result);
								}
							mysqli_close($con);
	
							?>
			   
