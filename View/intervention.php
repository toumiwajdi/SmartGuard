<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 22:03
 */
include "header.php";
require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
require_once path . "Model/Managers/InterventionManager.php";
$perman=new InterventionManager();
$array=$perman->getAll();

?>
    <div class="row">
        <h3 class="blue-grey-text center">Interfvention</h3>
        <div class="col s12">
            <br/>
            <br/>


            <div class="col s12">
                <table class="striped centered"">
                <tr><td class="blue-grey text-primary">WORK ID</td><td class="blue-grey text-primary">Names</td><td class="blue-grey text-primary">State</td><td class="blue-grey text-primary">Action</td></tr>


                <?php foreach ($array as $data)
                {
                    ?>
                    <tr>
                        <td><?php echo $data[0] ?></td>
                        <td><?php echo $data[1]?></td>
                        <td><?php if ($data[5]=="Done")
                            echo "<p class='red-text'>Done</p>";
                            else
                                echo "<p class='light-green-text text-darken-4 text-primary'> <i class=\"small material-icons\">lens</i>In progress </p>";
                            ?></td>
                        <td> <a class="btn-floating btn-large waves-effect waves-light blue-grey"><i class="material-icons">visibility</i></a> </td>
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