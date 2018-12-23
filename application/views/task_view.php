<?php

?>

<head>
    <title><?php echo $title; ?></title>
    <!-- <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">  -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
    
<style>



body{
    /*direction: rtl;*/
    background-color: #D8D8D8;
}

.current_view{
    padding-bottom: 25px;
}

.task_type_div{
    float: left;
    margin-top: -100px;
    width: 150px;
    margin-left:50px;
    padding-bottom: 25px;
}

.total_task_div{
    margin-left: 200px;
    position: absolute;
    width: 200px;
    height: 30px;
    padding: 5px;
    display: table; 
    text-align: center; 
    background-color:#81F7F3;
    -webkit-box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    -moz-box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;

}

.total_task_div_child_1 {
    display: table-cell;
    vertical-align: middle;
    background-color:#81F7F3;
    color:black;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;

}
.total_task_div_child_2 {
    display: table-cell;
    vertical-align: middle;
    background-color:black;
    color: #A9A9F5;
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
    width: 20px;

}

.task_completed_div{
    margin-left: 500px;
    position: absolute;
    width: 200px;
    height: 30px;
    padding: 5px;
    display: table; 
    text-align: center; 
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
    background-color:#81F7F3;
    -webkit-box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    -moz-box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    box-shadow: 1px 0px 21px 7x rgba(0,0,0,0.31);
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
}

.task_completed_div_child_1 {
    display: table-cell;
    vertical-align: middle;
    background-color:#81F7F3;
    color:black;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}
.task_completed_div_child_2 {
    display: table-cell;
    vertical-align: middle;
    background-color:black;
    color: #4dff4d;
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
    width: 20px;
}
.task_remaining_div{
    margin-left: 800px;
    position: absolute;
    width: 200px;
    height: 30px;
    padding: 5px;
    display: table; 
    text-align: center; 
    background-color:#81F7F3;
    -webkit-box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    -moz-box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
}
.task_remaining_div_child_1 {
    display: table-cell;
    vertical-align: middle;
    background-color:#81F7F3;
    color:black;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}
.task_remaining_div_child_2 {
    display: table-cell;
    vertical-align: middle;
    background-color:black;
    color: #ff471a;
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
    width: 20px;
}


.task_table {

    margin-top: 250px;  
    /*margin-bottom: 20%; */
    margin-left: 180px;     
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
    -webkit-box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    -moz-box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    box-shadow: 1px 0px 21px 7px rgba(0,0,0,0.31);
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
}

.task_table td, .task_table th {
    padding: 8px;
    text-align: center;
}


.task_table tr:hover {
    background-color: #ddd;
}

.task_table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #424242;
    color: white;
}

.add_new_task{
    display: inline-block;
    vertical-align: middle;
    background-color:blue;
    color:white;
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px;
    width: 180px;
    /*height: 30px;*/
    text-align: center;
    padding-top: 12px;
    padding-bottom: 12px;
}
.action_title{

    font-size: 20px;
    color: #4dd2ff;
}

</style>

</head>

<body>

<script type="text/javascript">


    $(document).ready(function (){

        var current_task_tr = '';
        var task_id_td = '';
        var task_name_td = '';
        var task_status_td = '';
        var $radios = '';
        var radio_choosen = '';
        var name_to_update = '';
        var status_to_update = '';
        var status_to_update_name = '';

        $('#create_new_task_dialog').dialog({
            title: 'Add New Task',
            autoOpen: false,
            width: 400,
            height: 200,
            modal : true,
            resizable: false
        });

        $('#choose_option_dialog').dialog({
            title: 'Update Task',
            autoOpen: false,
            width: 400,
            height: 300,
            modal : true,
            resizable: false
        });

        $('#update_task_dialog').dialog({
            title: 'Update Task',
            autoOpen: false,
            width: 400,
            height: 500,
            modal : true,
            resizable: false
        });


        $('#add_new_task').click(function() {

            $("#create_new_task_dialog").dialog ("open");

        });

        $('#new_task_submit').click(function() {


            $("#create_new_task_dialog").dialog ("open");

            var task_name = $('#new_task_name').val();
            var html = '';
            if( task_name == '' ){
                alert("enter name");
                return;
            }
            // $('.loading').show();
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: { task_name:task_name},
                url: '<?php echo base_url(); ?>index.php/task/insertNewTask',
                success : function(result) {
                
                    alert (result.message);
                    if ( result.status != 2 ){ // success
                         $("#create_new_task_dialog").dialog ("close");

                    }
                    $('#new_task_name').val('');
                    location.reload();
                } 
            });

        });

        $('#task_table tbody > tr ').click(function() {

            current_task_tr = $(this);
            task_id_td =  $(this).find("td#task_id_td").text();
            task_name_td =  $(this).find("td#task_name_td").text();
            task_status_name_td =  $(this).find("td#task_status_name_td").text();
            task_status_td =  $(this).find("td#task_status_name_td").data("id");
            $radios = $('input:radio[name=task_status_radio]');
            $radios.filter('[value='+ task_status_td+']').prop('checked', true);
            // $radios.filter('[value='+ task_status_td+']').attr('disabled', true);
            $("#choose_option_dialog").dialog ("open");
        
        });


        $("#choose_option_submit").click(function() {

            $("#choose_option_dialog").dialog ("close");
            radio_choosen = $("input[name='choose_option_radio']:checked").val();

            if ( radio_choosen == 0 ){
                $("#action_title_task_name").append(" ( id: " + task_id_td + " , name: " + task_name_td + " ) ");
                $("#action_title_task_status").append(" ( current status is: " + task_status_name_td + " ) ");
                $("#update_task_name").val(task_name_td);
                $("#update_task_dialog").dialog ("open");
            }
            else if( radio_choosen == 1 ){
                
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: {task_id:task_id_td},
                    url: '<?php echo base_url(); ?>index.php/task/deleteTask',
                    success : function(result) {
                    
                        if (result){
                            this_tr.css("display","none");
                        }
                    } 
                });
            }
            else{
                // cancel
            }

        });
        

        $('#update_task_submit').click(function() {

            name_to_update = $("#update_task_name").val();
            status_to_update = $("input[name='task_status_radio']:checked").val();
            status_to_update_name = $("input[name='task_status_radio']:checked").data("name");
            if( name_to_update == '' ){
                alert("task name cant be empty , plesse enter name.");
                return;
            }
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: { task_id:task_id_td , task_name:name_to_update , task_status:status_to_update},
                url: '<?php echo base_url(); ?>index.php/task/updateTask',
                success : function(result) {
                
                    alert (result.message);
                    if ( result.status != 2 ){ // success
                        $("#update_task_dialog").dialog ("close");
                        current_task_tr.find("td#task_name_td").text(name_to_update);
                        current_task_tr.find("td#task_status_name_td").data("id",status_to_update);
                        current_task_tr.find("td#task_status_name_td").text(status_to_update_name);
                    }
                } 
            });
            
           
        });

    });

</script>


<?php $total = 0; $completed = 0; $remaining = 0;
    foreach ( $tasks_by_status as $tbs ){
       if ( $tbs->task_status == 0){
            $remaining = $tbs->tasks_count;
       }
       else{
            $completed = $tbs->tasks_count;
       }   
       $total +=$tbs->tasks_count;  
    }
 ?>

<div class="current_view">
    <div class="task_type_div">
        <div id='total_task_div' class="total_task_div">
            <div class="total_task_div_child_1">Total Task</div>
            <div id="total_task_div_child_2" class="total_task_div_child_2"><?php echo $total; ?></div>
        </div>
        <div id='task_completed_div' class="task_completed_div">
            <div class="task_completed_div_child_1">Task Completed</div>
            <div id="task_completed_div_child_2" class="task_completed_div_child_2"><?php echo $completed; ?></div>
        </div>
        <div id='task_remaining_div' class="task_remaining_div">
            <div class="task_remaining_div_child_1">Task Remaining</div>
            <div id="task_remaining_div_child_2" class="task_remaining_div_child_2"><?php echo $remaining; ?></div>
        </div>
    </div>

    <table id="task_table" class="task_table">
        <thead>
             <tr>
                <th style="width: 10%">#</th>
                <th style="width: 30%">Task Name</th>
                <th style="width: 30%">Date</th>
                <th style="width: 5%">Status</th>
                <th style="width: 30%">
                    <input type="button" value="Add_New_Task +" id="add_new_task" class="add_new_task">
                </th>
            </tr>

        </thead>
        <tbody>

            <?php foreach ( $tasks as $t ){ ?>
            <tr>
                <td id='task_id_td'><?php echo $t->task_id; ?></td>
                <td id='task_name_td'><?php echo $t->task_name; ?></td>
                <td ><?php echo $t->created_on; ?></td>
                <td id='task_status_name_td' data-id=<?php echo $t->task_status; ?> >
                    <?php echo $t->task_status_name; ?>
                </td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

<div id="create_new_task_dialog" class="create_new_task_dialog" > 
    <p class="action_title">Enter name:</p>
    <input id="new_task_name" class="new_task_name" type="text" >
    <input type="button" value="submit" id="new_task_submit" class="new_task_submit">
</div>
    
<div id="choose_option_dialog" class="choose_option_dialog" > 
    <p class="action_title">choose option:</p> 
    <input type="radio" name="choose_option_radio" value="0">edit task<br>
    <input type="radio" name="choose_option_radio" value="1">delete task<br>  
    <input type="radio" name="choose_option_radio" value="2" checked>cancel<br>  
    <br>
    <input type="button" value="submit" id="choose_option_submit" class="choose_option_submit">
</div>    

<div id="update_task_dialog" class="update_task_dialog" > 
    <p class="action_title" id="action_title_task_name">Enter new name for task:<br></p>
    <input id="update_task_name" class="update_task_name" type="text" >
    <br>
    <br>
    <p class="action_title" id="action_title_task_status">Change task status:<br></p>
    <input type="radio" name="task_status_radio" value="0" data-name="remaining">remaining<br>
    <input type="radio" name="task_status_radio" value="1" data-name="completed">completed<br>  
    <!-- <input type="radio" name="task_status_radio" value="2" checked>dont change<br> -->
    <br>
    <input type="button" value="Save Changes" id="update_task_submit" class="update_task_submit">
</div>    

    
</body>
