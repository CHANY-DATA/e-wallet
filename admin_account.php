

<?php
ob_start();
//require 'session.php';
?>
               <?php
								include_once "connection.php";
								$sql = "SELECT * FROM account WHERE uname='".$load['uname']."'";
								if ($result = mysqli_query($con, $sql))
								{
     
								?>
									<table class="table table-striped table-bordered table-hover">
									<thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Names</th>
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
                                        </tr>
                                    </tbody>
									<?php	
									}	
                                echo'</table>';
							
							 mysqli_free_result($result);
								}
							mysqli_close($con);
	
							?>
