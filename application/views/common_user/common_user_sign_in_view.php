	<div id="wrapper">
		<!--<div class="block">
			<img src="images/pic.jpg" alt="" width="85" height="93" />
			<img src="images/title.jpg" alt="" width="191" height="23" /><br />
			<p>Sed condimentum, libero sed cursus dapibus, libero enim feugiat tellus, vitae accumsan elit neque et purus. Cras consectetuer risus. </p>
			<a href="#">read more</a>

		</div>-->
		<div id="left">
			<img src="<?php echo base_url();?>/images/title2.gif" alt="" width="392" height="39" /><br />

                        Bio-Diversity Portal is a open platform for communities associated with different level of society.<br/>Our goal is to
                        <!--Here The contents must be added -->

		</div>
                
                <center><?php echo validation_errors();?></center>
		<div id="right">
                   <?php echo form_open('common_user/common_user/sign_in')?>
                      <table width="100%" border="0" align="left">
                        <tr>
                          <th scope="row">username</th>
                          <td><label for="username3"></label>
                            <input type="text" name="username" id="username" /></td>
                        </tr>
                        <tr>
                          <th scope="row">password</th>
                          <td><span id="sprypassword2">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" />
                            <span class="passwordRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <th scope="row">&nbsp;</th>
                          <td><input type="submit" name="submit" id="submit" value="Sign In" />
                              <input type="submit" name="Register" id="Register" value="Register" /></td>

                        </tr>
                        <tr>
                            <?php if(isset($message))
                                {echo $message;}?>
                        </tr>
                      </table>
                   <?php echo form_close();?>
                </div>
	</div>
