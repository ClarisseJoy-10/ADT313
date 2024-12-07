<h1>Hands on activity</h1>
<?php
$table = array(
    "header" => array(
        "StudentID",
        "Firstname",
        "Middlename",
        "Laststname",
        "Section",
        "Course",
        "Yearlevel"
    ),
    "body" => [
        array(           
                "firstname"=> "Firstname",
                "middlename"=> "Middlename",
                "laststname"=> "Lastname",
                "section"=> "Section",
                "course"=> "Course",
                "YearLevel"=> "Yearlevel"           
        ),
        array(           
            "firstname"=> "Firstname",
            "middlename"=> "Middlename",
            "laststname"=> "Lastname",
            "section"=> "Section",
            "course"=> "Course",
            "YearLevel"=> "Yearlevel"           
        ),
        array(           
            "firstname"=> "Firstname",
            "middlename"=> "Middlename",
            "laststname"=> "Lastname",
            "section"=> "Section",
            "course"=> "Course",
            "YearLevel"=> "Yearlevel"           
        ),
        array(           
            "firstname"=> "Firstname",
            "middlename"=> "Middlename",
            "laststname"=> "Lastname",
            "section"=> "Section",
            "course"=> "Course",
            "YearLevel"=> "Yearlevel"           
        ),
        array(           
            "firstname"=> "Firstname",
            "middlename"=> "Middlename",
            "laststname"=> "Lastname",
            "section"=> "Section",
            "course"=> "Course",
            "YearLevel"=> "Yearlevel"           
        ),
        array(           
            "firstname"=> "Firstname",
            "middlename"=> "Middlename",
            "laststname"=> "Lastname",
            "section"=> "Section",
            "course"=> "Course",
            "YearLevel"=> "Yearlevel"           
        ), array(           
            "firstname"=> "Firstname",
            "middlename"=> "Middlename",
            "laststname"=> "Lastname",
            "section"=> "Section",
            "course"=> "Course",
            "YearLevel"=> "Yearlevel"           
        ),
        array(           
            "firstname"=> "Firstname",
            "middlename"=> "Middlename",
            "laststname"=> "Lastname",
            "section"=> "Section",
            "course"=> "Course",
            "YearLevel"=> "Yearlevel"           
        ),
        array(           
            "firstname"=> "Firstname",
            "middlename"=> "Middlename",
            "laststname"=> "Lastname",
            "section"=> "Section",
            "course"=> "Course",
            "YearLevel"=> "Yearlevel"           
        ),
        array(           
            "firstname"=> "Firstname",
            "middlename"=> "Middlename",
            "laststname"=> "Lastname",
            "section"=> "Section",
            "course"=> "Course",
            "YearLevel"=> "Yearlevel"           
        ),

    ],

)
?>


    <table border = "1">
    
    
    
    
    <thead>
       <?php for($i = 0; $i<count($table['header']);$i++){?>
        <th><?php echo $table['header'][$i]; ?></th>
        <?php } ?>

      
        <th><?php echo $table['header'][0] ?></th>
</thead>
<tbody>
    <tr>
        <td>123</td>
        <td><?php echo $table['body'][0]['firstname']?></td>
</tr>
<tbody>
</table>

