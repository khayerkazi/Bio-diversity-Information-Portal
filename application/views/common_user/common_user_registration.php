        <div id="wrapper">
            <div id="left">
                        Join our community and contribute towards a global solution<br/>
                        This open platform will certainly enable you to put your opinion on the recent issues.
            </div>
            <div  id="right">
                <?php echo validation_errors();?>
                        <?php echo form_open_multipart('common_user/common_user/registration');?>
                          <center><p>&nbsp;</p></center>
                          <p>&nbsp;</p>
                          <table width="100%" border="0" align="left">
                            <tr>
                              <td>Name</td>
                              <td><label for="name"></label>
                          
                                <label for="name2"></label>
                                <input type="text" name="name" id="name" />
                              </td>
                            </tr>
                            <tr>
                              <td>Username</td>
                              <td>
                                <label for="username"></label>
                                <input type="text" name="username" id="username" />
                              </td>
                            </tr>
                            <tr>
                              <td>Password</td>
                              <td>
                                <label for="password"></label>
                                <input type="password" name="password" id="password" />
                              </td>
                            </tr>
                            <tr>
                              <td>Address</td>
                              <td>
                                <label for="address"></label>
                                <input type="text" name="address" id="address" />
                              </td>
                            </tr>
                            <tr>
                              <td>E-mail</td>
                              <td>
                                <label for="email"></label>
                                <input type="text" name="email" id="email" />
                             </td>
                            </tr>
                            <tr>
                              <td>Image</td>
                              <td><label for="photo"></label>
                                <input type="file" name="photo" id="photo" /></td>
                                 
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                            </tr>
                               
                           
                          </table>
                        <?php echo form_close();?>
            </div>

        </div>
                   