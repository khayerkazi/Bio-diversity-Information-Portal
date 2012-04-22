<div id="wrapper">
    <div id="center_content">
        <?php echo form_open('student/student/search_assignment') ;?>

        <table border="0"  width="100%" allign="center">
            <tr>
                <th scope="col" class="project_list">
                    Assignment Id
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="assignmentid" id="assignmentid"/>
                </th>
            </tr>
            <tr>
                <th scope="col" class="project_list">
                    Assignment Title
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="title"/>
                </th>
            </tr>
            <tr>
                <th scope="col" class="project_list">
                    Assignment Created In
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="creation_date"/>
                </th>
            </tr>
             <tr>
                <th scope="col" class="project_list">
                    Assignment Deadline
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="duration"/>
                </th>
            </tr>
             <tr>
                <th scope="col" class="project_list">
                    Assignment Total  Marks
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="total_marks"/>
                </th>
            </tr>
            <tr>
                <th></th>
                <th scope="col" class="project_list">
                    <input type="submit" name="submit" value="Search"/>
                </th>
            </tr>
        </table>
        <?php echo form_close();?>
        
    </div>
    
</div>