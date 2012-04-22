<div id="wrapper">
    <div id="left">
         <table border="0" width="100%">

            <tr>
                <th scope="col" class="project_list">
                    Assignment Id
                </th>
                <th scope="col" class="project_list">
                    <?php echo $data['ASSIGNMENT']['ASSIGNMENTID'] ;?>
                </th>
            </tr>

            <tr>
                <th scope="col" class="project_list">
                    Title
                </th>
                <th scope="col" class="project_list">
                    <?php echo $data['ASSIGNMENT']['TITLE'];?>
                </th>
            </tr>
            <tr>
                <th scope="col" class="project_list">
                    Description
                </th>
                <th scope="col" class="project_list">
                    <?php echo $data['ASSIGNMENT']['DESCRIPTION'];?>
                </th>
            </tr>

            <tr>
                <th scope="col" class="project_list">
                    Total Marks
                </th>
                <th scope="col" class="project_list">
                    <?php echo $data['ASSIGNMENT']['TOTAL_MARKS'];?>
                </th>
            </tr>
            <tr>
                <th scope="col" class="project_list">
                    Created In
                </th>
                <th scope="col" class="project_list">
                    <?php echo $data['ASSIGNMENT']['CREATION_DATE'];?>
                </th>
            </tr>

            <tr>
                <th scope="col" class="project_list">
                    Deadline
                </th>
                <th scope="col" class="project_list">
                    <?php echo $data['ASSIGNMENT']['DURATION'];?>
                </th>
            </tr>

            <tr>
                <th scope="col" class="project_list">
                    Document Link
                </th>
                <th scope="col" class="project_list">
                    <a href="<?php echo $data['ASSIGNMENT']['DOCUMENT'];?>">Document</a>
                </th>
            </tr>

        </table>
    </div>
    <div id="left">
        <?php echo form_open('instructor/instructor/assign_assignment/'.$data['ASSIGNMENT']['ASSIGNMENTID']);?>
        <table class="project_list">
            <?php
                    for($index=0;$index<count($data['STUDENT']);$index++)
                    {
             ?>
             <tr class="project_list">
                <th class="project_list">
                        <input type="checkbox" name="check[]" id="check" value="<?php echo $data['STUDENT'][$index]['USERID'];?>"/>
                </th>
                <th class="project_list">
                    <?php echo $data['STUDENT'][$index]['NAME'];?>
                </th>
                <th class="project_list">
                    <img width="100px" height="100px" src="<?php echo $data['STUDENT'][$index]['PHOTO'];?>"/>
                </th>
             </tr>
            
           <?php
                    }
            ?>
             <tr>
                 <th class="project_list"></th>
                 <th class="project_list">
                        <input type="submit" name="submit" value="Assign" />
                 </th>
             </tr>
        </table>
        <?php echo form_close();?>
        
    </div>
    
</div>