<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 22:03
 */
include "header.php";
require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
require_once path . "Model/Classes/Person.php";
require_once path . "Model/Managers/PersonManager.php";
$perman=new PersonManager();
$array=$perman->getWaiting();

?>
    <div class="row">
        <h3 class="blue-grey-text center">STAFF APPROVAL</h3>
        <div class="col s12">
            <br/>
            <br/>


            <div class="col s12">
                <table class="striped centered"">
                <tr><td class="blue-grey text-primary">WORK ID</td><td class="blue-grey text-primary">Names</td><td class="blue-grey text-primary">Action</td></tr>


                <?php foreach ($array as $data)
                        {
                    ?>
                    <tr>
                        <td><?php echo $data[0] ?></td>
                        <td><?php echo $data[1]." ".$data[2]?></td>
                        <td><a class="btn-floating btn-large waves-effect waves-light green" href="<?php echo "pendingapprove.php?add=$data[0]"?>"><i class="material-icons">check</i></a>
                            <a class="btn-floating btn-large waves-effect waves-light red" href="<?php echo "pendingapprove.php?delete=$data[0]"?>"><i
                                    class="material-icons" >close</i></a></td>
                    </tr>
                    <?php
                            }
                ?>



                </table>
            </div>


        </div>
    </div>

<?php
include "footer.php"
?>