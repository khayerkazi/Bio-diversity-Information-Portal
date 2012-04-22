	<div id="wrapper">
		<!--<div class="block">
			<img src="images/pic.jpg" alt="" width="85" height="93" />
			<img src="images/title.jpg" alt="" width="191" height="23" /><br />
			<p>Sed condimentum, libero sed cursus dapibus, libero enim feugiat tellus, vitae accumsan elit neque et purus. Cras consectetuer risus. </p>
			<a href="#">read more</a>

		</div>-->
		<div id="left">
			<!--<img src="/images/title2.gif" alt="" width="392" height="39" /><br />-->

                        Sign In to our services.We will provide you with the  opportunity to raise your voice globally. Currently this is the beta version of our services. But in future we will surely come up with more
                        practical solutions like making your industry  echo friendly. We hope it would be a good journey to get started with.
                        <!--Here The contents must be added -->

		</div>
		<div id="right">
                    
                     <center><?php echo validation_errors();?></center>
                    <?php echo form_open_multipart('common_user/common_user/update');?>
                      <center><p>&nbsp;</p></center>
                      <p>&nbsp;</p>
                      <center><?php if(isset($message)){echo $message;}?></center>
                      <table width="100%" border="0" align="left">
                        <tr>
                          <td>Name</td>
                          <td><label for="name"></label>

                              <input type="text" name="name" id="name2" value="<?php echo set_value('name')?>"/>
                          </td>
                        </tr>
                        <tr>
                          <td>Username</td>
                          <td>
                            <label for="username"></label>
                            <input type="text" name="username" id="username"  value="<?php echo set_value('username')?>"/>
                          </td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td>
                            <label for="password"></label>
                            <input type="password" name="password" id="password" value="<?php echo set_value('password')?>" />
                          </td>
                        </tr>
                        <tr>
                          <td>Address</td>
                          <td>
                            <label for="address"></label>
                            <input type="text" name="address" id="address" value="<?php echo set_value('address')?>"/>
                          </td>
                        </tr>
                        <tr>
                          <td>E-mail</td>
                          <td>
                            <label for="email"></label>
                            <input type="text" name="email" id="email" value="<?php echo set_value('email')?>"/>
                         </td>
                        </tr>
                        <tr>
                          <td>Image</td>
                          <td><label for="photo"></label>
                                <input type="file" name="photo" id="photo" /></td>
                        </tr>
                        <tr>
                          <td> <input type="submit" name="submit" value="Update"/></td>
                        </tr>
                      </table>
                    <?php echo form_close();?>

		</div>
	</div>
