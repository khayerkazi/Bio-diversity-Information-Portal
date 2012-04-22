<div id="wrapper">
    <div id="left">
        <table class="project_list" width="90%" border="0" allign="center">

            <tr class="project_list">

                <th scope="col" class="project_list">
                    Project Id
                </th>
                <th scope="col" class="project_list">
                    <?php echo $CAMPAIGNID?>
                </th>

            </tr>
            <tr class="project_list">

                <th scope="col" class="project_list">
                    Project Title
                </th>
                <th scope="col" class="project_list">
                    <?php echo $TITLE?>
                </th>

            </tr>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Project Description
                </th>
                <th scope="col" class="project_list">
                    <?php echo $DESCRIPTION?>
                </th>
            </tr>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Project Creation Date
                </th>
                <th scope="col" class="project_list">
                    <?php echo $STARTTIME?>
                </th>
            </tr>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Project Duration
                </th>
                <th scope="col" class="project_list">
                    <?php echo $FINISHTIME?>
                </th>

            </tr>
        </table>
        <div id="left">
            <?php echo form_open('campaign/campaign/donate/'.$CAMPAIGNID);?>
            <table style="background-image: url(./images/campaign/donate.gif)">
                <tr>
                    <th class="project_list">
                        Email
                    </th>
                    <th class="project_list">
                        <input type="text" name="email"/>
                    </th>
                </tr>
                <tr>
                    <th class="project_list">
                        Amount
                    </th>
                    <th class="project_list">
                        <input type="text" name="amount" id="amount"/>
                    </th>
                </tr>
                <tr>
                    <th>
                        
                    </th>
                    <th class="project_list">
                        <input type="submit" name="submit" id="submit" value="Donate"/>
                    </th>
                </tr>
            </table>
            <?php echo form_close();?>
            
        </div>
        
    </div>
</div>