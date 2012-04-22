<div id="wrapper">
    <div id="center_content">
        <?php echo form_open_multipart('student/student/submit_assignment/'.$assignmentid);?>
        <center>
        <table>
            <tr class="project_list">
                <th scope="col">
                    Submission File
                </th>
                <th scope="col">
                    <input type="file" name="content" id="content"/>
                </th>
            </tr>
            <tr class="project_list">
                <th></th>
                <th>
                    <input type="submit" name="submit" value="Submit"/>
                </th>
            </tr>
        </table>
        </center>
        <?php echo form_close();?>
    </div>
    
</div>