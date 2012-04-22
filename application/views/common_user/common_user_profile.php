        <div id="wrapper">
            
            <div id="center_content">
               <?php  echo form_open('common_user/common_user/update');?>
              <center>
              <table width="80%" border="0" align="center" class="project_list">
                  <tr class="project_list">
                      <center><img  src="<?php echo $PHOTO?>" width="50%" height="300px" class="project_list"/></center>
                  </tr>
                <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col" class="project_list"><?php if(isset($message)){echo $message;}?></th>
                  </tr>
                <tr>
                  <th scope="col" class="project_list">Username</th>
                  <th scope="col" class="project_list"><?php echo $USERNAME?></th>
                </tr>
                <tr>
                  <th scope="col" class="project_list">Name</th>
                  <th scope="col" class="project_list"><?php echo $NAME?></th>
                </tr>
                <tr>
                  <th scope="col" class="project_list">Address</th>
                  <th scope="col" class="project_list"><?php echo $ADDRESS?></th>
                </tr>
                <tr>
                  <th scope="col" class="project_list">Email</th>
                  <th scope="col" class="project_list"><?php echo $EMAIL?></th>
                </tr>
                <tr>
                  <th scope="col" class="project_list">&nbsp;</th>
                  <th scope="col" class="project_list"><input type="submit" name="update" id="button" value="Update" /></th>
                </tr>
              </table>
           </center>
            <?php echo form_close();?>
            </div>
        </div>
          