<div id="wrapper">
    <div id="center_content">
        <table width="100%" allign="center" border="0">

            <tr class="project_list">
                <th scope="col" class="project_list">
                        Assignment Id
                </th>
                <th scope="col" class="project_list">
                    Assignment Detail
                </th>
                <th scope="col" class="project_list">
                    Assignment Instructor
                </th>
            </tr>

            <?php

                    for($index=0;$index<count($data);$index++)
                   {
             ?>
            <tr class="project_list">
                <th scope="col" class="project_list">
                                           
                  
                       <?php
                                 echo $data[$index]['ASSIGNMENTID'];
                       ?>
                
                </th>
                <th scope="col" class="project_list">
                    <a href="<?php echo base_url()."/index.php/student/student/manage_assignment/".$data[$index]['ASSIGNMENTID'];?>">
                          <?php
                                     echo 'Title: '.$data[$index]['TITLE'].'<br/>'.'Specification: '.$data[$index]['DESCRIPTION'].'<br/>'.'Total Marks: '.$data[$index]['TOTAL_MARKS'].'<br/>'.'Publish date: '.$data[$index]['CREATION_DATE'].'<br/>'.'Deadline: '.$data[$index]['DURATION'];
                           ?>
                    </a>
                </th>
                <th scope="col" class="project_list">
                    <a href="<?php echo base_url().'/index.php/student/student/instructor_profile/'.$data[$index]['INSTRUCTOR'];?>">
                        <?php
                                echo $data[$index]['INSTRUCTOR'];
                        ?>
                    </a>
                </th>
            </tr>
            
           <?php
                   }
            ?>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    
                </th>
                <th scope="col" class="project_list">
                    
                </th>
                <th scope="col" class="project_list">
                    
                </th>
            </tr>
            
        </table>
        
    </div>
    
</div>