<?php
include './Configuration.php';
    $i=0; 
    $j=0;
    $k=0;
    
    $sql = "SELECT * FROM Tests";		
    $query = mysqli_query($conn, $sql);
    $num= mysqli_num_rows($query);
    
    
    
    if(isset($_POST['BtnSubmit']))
    {
    
    for ($k=0;$k=$num;$k++)
    {
        $res[]=$_POST['question'.$k];
        
    }
    
     for ($k=0;$k=$num;$k++)
    {
        echo $res[$k];
        
    }
    }
    
    
    
    
    $sqlA = "SELECT * FROM Answers";		
    $queryA = mysqli_query($conn, $sqlA);
    if (!$query AND !queryA)
    {
	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        while ($row = mysqli_fetch_array($queryA))
        {
            $ans[]=$row['Ans'];
        }
        for ($x=0;$x<= sizeof($ans)-1;$x++)
        {
            echo $ans[$x];
        }
        ?>
        
        
        <form name="qiz" method="POST">
        
        <table class="table table-striped">
                            
                            <?php
                            while ($row = mysqli_fetch_array($query))
                             {
                                $i=$i+1; 
                               echo'
                                    <div class="woo-cart-table mj_carttable">
                             <tr>                               
                                <td colspan="5">
                                   '.$i .'.<textarea name="TxtQuestion" class="form-control" rows="3" cols="20" readonly="readonly">'.$row['Question'].' </textarea>
                                </td>                                                 
                            </tr>
                            <tr>
                                <td class="f">
                                    <input type="radio" name="question'.$row['QuestionNo'].'"  value='.$row['Option1'].'/>'.$row['Option1'].'
                                </td> 
                                <td class="f">
                                    <input type="radio" name="question'.$row['QuestionNo'].'"  value='.$row['Option2'].' />'.$row['Option2'].'
                                </td> 
                                <td class="f">
                                   <input type="radio" name="question'.$row['QuestionNo'].'"  value='.$row['Option3'].' />'.$row['Option3'].'
                                </td> 
                                <td class="f">
                                    <input type="radio" name="question'.$row['QuestionNo'].'"  value='.$row['Option4'].' />'.$row['Option4'].'
                                </td> 
                            </tr>  
                            
                            </div>';
                              
                            }
                            
                            
                            ?>
                            
                            <tr><td></td></tr>      
                            <tr><td></td></tr>
                            <tr>
                                <td></td><td></td><td></td>
                                <td><input type="submit" value="Submit" name="BtnSubmit" class="mj_mainbtn mj_btnyellow" />
                                </td>
                            </tr>
                        </table>
            </form>
    </body>
</html>
